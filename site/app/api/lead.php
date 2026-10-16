<?php
declare(strict_types=1);
/**
 * Lead endpoint (contact + CTA forms). POST only.
 * JSON when called via fetch, 303 redirect otherwise (no-JS fallback).
 * Honeypot, min fill time, per-IP rate limit, strict validation, header-injection-safe mail.
 * Leads always appended to storage/leads/leads.jsonl, then e-mailed if mail() works.
 */
$wantsJson = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json');

$respond = static function (bool $ok, string $msg, int $code = 200, array $extra = []) use ($wantsJson): never {
    if ($wantsJson) {
        http_response_code($code);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $ok, 'message' => $msg] + $extra);
    } else {
        $back = parse_url($_SERVER['HTTP_REFERER'] ?? '', PHP_URL_PATH) ?: url('contact-us');
        header('Location: ' . $back . ($ok ? '?sent=1' : '?error=1'), true, 303);
    }
    exit;
};

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    $respond(false, 'Method not allowed.', 405);
}

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
$host   = explode(':', (string) ($_SERVER['HTTP_HOST'] ?? ''))[0];
if ($origin !== '' && parse_url($origin, PHP_URL_HOST) !== $host) {
    $respond(false, 'Invalid request.', 403);
}

if (trim((string) ($_POST['website'] ?? '')) !== '') {
    $respond(true, 'Thank you!');            // honeypot hit: fake success
}
$ts = (int) ($_POST['ts'] ?? 0);
if ($ts > 0 && time() - $ts < 3) {
    $respond(false, 'Please take a moment to fill in the form and try again.', 429);
}

$clean = static fn (string $k, int $max): string =>
    mb_substr(trim((string) preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', (string) ($_POST[$k] ?? ''))), 0, $max);
$name = $clean('name', 100);   $email = $clean('email', 150);  $phone = $clean('phone', 25);
$subject = $clean('subject', 80); $message = $clean('message', 3000); $source = $clean('source', 80);

$errors = [];
if (mb_strlen($name) < 2) $errors['name'] = 'Please enter your name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Please enter a valid email.';
if ($phone !== '' && !preg_match('/^[0-9 +().\-]{6,25}$/', $phone)) $errors['phone'] = 'Please enter a valid phone number.';
if (mb_strlen($message) < 10) $errors['message'] = 'Please tell us a little more (10+ characters).';
if (!in_array($subject, cfg('subjects'), true)) $subject = 'General enquiry';
if ($errors) {
    $respond(false, 'Please fix the highlighted fields.', 422, ['errors' => $errors]);
}

// Rate limit: 5 / hour / IP
$dir = ROOT_DIR . '/storage/leads';
if (!is_dir($dir)) @mkdir($dir, 0750, true);
$ip   = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$rl   = $dir . '/rl-' . sha1($ip) . '.json';
$hits = is_file($rl) ? array_filter((array) json_decode((string) file_get_contents($rl), true), static fn ($t) => $t > time() - 3600) : [];
if (count($hits) >= 5) {
    $respond(false, 'Too many messages. Please try again later or call us.', 429);
}
$hits[] = time();
@file_put_contents($rl, json_encode(array_values($hits)), LOCK_EX);

$lead  = ['date' => date('c'), 'name' => $name, 'email' => $email, 'phone' => $phone, 'subject' => $subject,
          'message' => $message, 'source' => $source, 'ip' => $ip, 'ua' => mb_substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 200)];
$saved = @file_put_contents($dir . '/leads.jsonl', json_encode($lead, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n", FILE_APPEND | LOCK_EX) !== false;

$mailed = false;
$to = (string) cfg('contact.notify_email');
if ($to !== '' && function_exists('mail')) {
    $mhost   = parse_url((string) cfg('site.url'), PHP_URL_HOST);
    $body    = "New enquiry from the website\n\nName: $name\nEmail: $email\nPhone: $phone\nInterest: $subject\nPage: $source\n\n$message\n";
    $headers = "From: Website <no-reply@$mhost>\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    $mailed  = @mail($to, '=?UTF-8?B?' . base64_encode("New enquiry: $subject - $name") . '?=', $body, $headers);
}

if (!$saved && !$mailed) {
    $respond(false, 'Sorry, something went wrong. Please call or email us directly.', 500);
}
$respond(true, 'Thank you! Your message has been received - we will get back to you shortly.');
