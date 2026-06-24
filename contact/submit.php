<?php
/**
 * Shree Gurve Technology - Contact Form Submission Handler
 * Saves inquiries to MySQL database with security protections
 * PHP 8.3 | PDO | CSRF | Rate Limiting | Input Sanitization
 */

declare(strict_types=1);

require_once dirname(__DIR__) . '/config.php';

// Only accept AJAX POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    http_response_code(403);
    die(json_encode(['success' => false, 'message' => 'Forbidden.']));
}

header('Content-Type: application/json');

function respond(bool $success, string $message): never {
    echo json_encode(['success' => $success, 'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8')]);
    exit;
}

// ── CSRF Validation ───────────────────────────────────────────
$csrfToken = $_POST['csrf_token'] ?? '';
if (!validateCSRFToken($csrfToken)) {
    respond(false, 'Security validation failed. Please refresh the page and try again.');
}
// Regenerate token after use
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// ── Rate Limiting (5 submissions per hour per IP) ──────────────
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'] // Cloudflare
    ?? $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '0.0.0.0';

// Truncate IPv6 to safe length
$ip = substr($ip, 0, 45);

try {
    $db = getDB();

    // Clean old rate limit records
    $db->exec("DELETE FROM rate_limits WHERE window_start < DATE_SUB(NOW(), INTERVAL 1 HOUR)");

    $rateStmt = $db->prepare("SELECT attempts FROM rate_limits WHERE ip_address = ? AND action = 'contact'");
    $rateStmt->execute([$ip]);
    $rate = $rateStmt->fetch();

    if ($rate && (int)$rate['attempts'] >= 5) {
        respond(false, 'Too many submissions. Please wait an hour before trying again.');
    }

} catch (PDOException $e) {
    error_log('Rate limit check failed: ' . $e->getMessage());
    // Continue without rate limit if DB fails
}

// ── Input Validation & Sanitization ───────────────────────────
$name    = sanitize($_POST['name']    ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone   = sanitize($_POST['phone']   ?? '');
$service = sanitize($_POST['service'] ?? '');
$subject = sanitize($_POST['subject'] ?? '');
$message = sanitize($_POST['message'] ?? '');

$errors = [];

if (strlen($name) < 2 || strlen($name) > 100) {
    $errors[] = 'Name must be between 2 and 100 characters.';
}
if (!$email || strlen($email) > 150) {
    $errors[] = 'A valid email address is required.';
}
if (strlen($message) < 20 || strlen($message) > 2000) {
    $errors[] = 'Message must be between 20 and 2000 characters.';
}
if (!empty($phone) && !preg_match('/^[+\d\s\-()]{7,20}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}

// Spam check: honeypot (add a hidden field named "website" to form)
if (!empty($_POST['website'])) {
    respond(false, 'Submission rejected.');
}

if (!empty($errors)) {
    respond(false, implode(' ', $errors));
}

// ── Save to Database ───────────────────────────────────────────
try {
    $db = getDB();

    $stmt = $db->prepare("
        INSERT INTO inquiries (name, email, phone, service, subject, message, ip_address, user_agent, status, created_at)
        VALUES (:name, :email, :phone, :service, :subject, :message, :ip, :ua, 'new', NOW())
    ");

    $stmt->execute([
        ':name'    => $name,
        ':email'   => $email,
        ':phone'   => $phone ?: null,
        ':service' => $service ?: null,
        ':subject' => $subject ?: null,
        ':message' => $message,
        ':ip'      => $ip,
        ':ua'      => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 300),
    ]);

    // Update rate limit
    $db->prepare("
        INSERT INTO rate_limits (ip_address, action, attempts, window_start)
        VALUES (?, 'contact', 1, NOW())
        ON DUPLICATE KEY UPDATE attempts = attempts + 1
    ")->execute([$ip]);

    // Optional: Send email notification
    // mail(SITE_EMAIL, 'New Inquiry: ' . $subject, "Name: $name\nEmail: $email\nMessage: $message", "From: noreply@shreegurvetech.com");

    respond(true, '✅ Thank you, ' . htmlspecialchars($name) . '! Your message has been received. We\'ll get back to you within 2-4 business hours.');

} catch (PDOException $e) {
    error_log('Contact form DB error: ' . $e->getMessage());
    respond(false, 'Something went wrong saving your message. Please try again or call us at +91 82000 17181.');
}
