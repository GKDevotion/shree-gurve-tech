<?php
declare(strict_types=1);

/* ------------------------------------------------------------------ *
 *  Config & escaping
 * ------------------------------------------------------------------ */

function cfg(string $key, mixed $default = null): mixed
{
    static $config = null;
    $config ??= require APP_DIR . '/config.php';
    $value = $config;
    foreach (explode('.', $key) as $part) {
        if (!is_array($value) || !array_key_exists($part, $value)) {
            return $default;
        }
        $value = $value[$part];
    }
    return $value;
}

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/* ------------------------------------------------------------------ *
 *  URLs  (root-relative, safe for sub-folder installs; no <base> tag)
 * ------------------------------------------------------------------ */

/** Web path of the site root: '' when served from the domain root, '/folder' otherwise. */
function base_path(): string
{
    static $base = null;
    if ($base !== null) {
        return $base;
    }
    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : false;
    $root    = realpath(ROOT_DIR);
    if ($docRoot && $root && str_starts_with($root, $docRoot)) {
        $base = str_replace('\\', '/', substr($root, strlen($docRoot)));
    } else {
        $dir  = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
        $base = $dir === '/' || $dir === '.' ? '' : $dir;
    }
    return $base = rtrim($base, '/');
}

function url(string $path = ''): string
{
    return base_path() . '/' . ltrim($path, '/');
}

/** Absolute canonical URL on the production domain (canonical, OG, JSON-LD, sitemap). */
function abs_url(string $path = ''): string
{
    return rtrim((string) cfg('site.url'), '/') . '/' . ltrim($path, '/');
}

/** Versioned asset URL - changes automatically when the file changes (cache busting). */
function asset(string $path): string
{
    $file = ROOT_DIR . '/assets/' . ltrim($path, '/');
    $v    = is_file($file) ? '?v=' . substr((string) filemtime($file), -6) : '';
    return url('assets/' . ltrim($path, '/')) . $v;
}

/** Current request path relative to the site root, lower-cased, no slashes at the ends. */
function request_path(): string
{
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $path = rawurldecode($path);
    $base = base_path();
    if ($base !== '' && str_starts_with($path, $base)) {
        $path = substr($path, strlen($base));
    }
    return strtolower(trim($path, '/'));
}

/** Backwards-compatible helper used by the standalone /proposal/*.php documents. */
function getBaseUrl(): string
{
    $https  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    $host   = $_SERVER['HTTP_HOST'] ?? '';
    if (!preg_match('/^[a-z0-9.\-]+(:\d{1,5})?$/i', $host)) {
        $host = parse_url((string) cfg('site.url'), PHP_URL_HOST) ?: 'localhost';
    }
    return ($https ? 'https' : 'http') . '://' . $host . base_path() . '/';
}

function is_current(string $path): bool
{
    $cur = request_path();
    return $path === '' ? $cur === '' : ($cur === $path || str_starts_with($cur, $path . '/'));
}

/* ------------------------------------------------------------------ *
 *  Per-page metadata registry
 * ------------------------------------------------------------------ */

function page(array|string|null $set = null, mixed $default = null): mixed
{
    static $meta = [];
    if (is_array($set)) {
        $meta = array_merge($meta, $set);
        return null;
    }
    return $set === null ? $meta : ($meta[$set] ?? $default);
}

/* ------------------------------------------------------------------ *
 *  Data
 * ------------------------------------------------------------------ */

function json_data(string $name): array
{
    static $cache = [];
    if (!isset($cache[$name])) {
        $raw = @file_get_contents(APP_DIR . "/data/{$name}.json");
        $cache[$name] = $raw ? (json_decode($raw, true) ?: []) : [];
    }
    return $cache[$name];
}

function services(): array     { return json_data('services'); }
function solutions(): array    { return json_data('solutions'); }
function projects(): array     { return json_data('projects'); }
function testimonials(): array { return json_data('testimonials')['testimonials'] ?? []; }

function php_data(string $name): array
{
    static $cache = [];
    return $cache[$name] ??= (require APP_DIR . "/data/{$name}.php");
}
function faqs(): array      { return php_data('faqs'); }
function tools(): array     { return php_data('tools'); }
function proposals(): array { return php_data('proposals'); }

function gallery_images(): array
{
    $files = glob(ROOT_DIR . '/assets/img/gallery/*.{jpg,jpeg,png,webp}', GLOB_BRACE) ?: [];
    sort($files);
    return array_map(static fn ($f) => 'img/gallery/' . basename($f), $files);
}

/** First sentence of a block of text, trimmed to $max characters. */
function excerpt(string $text, int $max = 140): string
{
    $text = trim(preg_replace('/\s+/', ' ', $text) ?? '');
    if (preg_match('/^(.+?[.!?])(\s|$)/u', $text, $m) && mb_strlen($m[1]) <= $max) {
        return $m[1];
    }
    return mb_strlen($text) > $max ? rtrim(mb_substr($text, 0, $max - 1)) . '…' : $text;
}

/** Split a list into N roughly equal columns (for mega menus). */
function columns(array $items, int $n): array
{
    return array_chunk($items, (int) ceil(max(1, count($items)) / $n), true);
}

/* ------------------------------------------------------------------ *
 *  Icons (inline SVG sprite - see layout/sprite.php)
 * ------------------------------------------------------------------ */

function icon(string $name, int $size = 20, string $class = ''): string
{
    $cls = trim('icon ' . $class);
    return '<svg class="' . e($cls) . '" width="' . $size . '" height="' . $size
        . '" aria-hidden="true" focusable="false"><use href="#i-' . e($name) . '"/></svg>';
}

function service_icon(string $slug): string
{
    return [
        'web-development'         => 'code',
        'software-development'   => 'terminal',
        'mobile-app-development' => 'smartphone',
        'ui-ux-design'           => 'pen',
        'digital-marketing'      => 'megaphone',
        'cloud-services'         => 'cloud',
        'it-consulting-services' => 'briefcase',
        'cyber-security-services'=> 'shield',
        'data-analytics'         => 'chart',
        'ai-automation'          => 'cpu',
        'it-support-maintenance' => 'lifebuoy',
        'blockchain-development' => 'blocks',
    ][$slug] ?? 'layers';
}

function solution_icon(string $slug): string
{
    return [
        'crm-solutions'                     => 'users',
        'erp-solutions'                     => 'layers',
        'hrms-solutions'                    => 'user-check',
        'project-management-systems'        => 'kanban',
        'helpdesk-systems'                  => 'lifebuoy',
        'education-management-systems'      => 'cap',
        'healthcare-management-systems'     => 'heart',
        'inventory-management-systems'      => 'package',
        'accounting-finance-systems'        => 'wallet',
        'ecommerce-management-systems'      => 'cart',
        'real-estate-management-systems'    => 'building',
        'travel-tourism-management-systems' => 'plane',
        'document-management-systems'       => 'file',
        'learning-management-systems'       => 'book',
        'business-intelligenceanalytics-systems' => 'chart',
    ][$slug] ?? 'layers';
}

/* ------------------------------------------------------------------ *
 *  Components (templates in app/components/*.php)
 * ------------------------------------------------------------------ */

function component(string $name, array $vars = []): void
{
    extract($vars, EXTR_SKIP);
    include APP_DIR . "/components/{$name}.php";
}

function render_component(string $name, array $vars = []): string
{
    ob_start();
    component($name, $vars);
    return (string) ob_get_clean();
}

/* ------------------------------------------------------------------ *
 *  Structured data (JSON-LD)
 * ------------------------------------------------------------------ */

function json_ld(array $graph): string
{
    $json = json_encode(
        ['@context' => 'https://schema.org', '@graph' => $graph],
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG
    );
    return '<script type="application/ld+json">' . $json . '</script>';
}

function org_schema(): array
{
    $c = cfg('contact');
    return [
        '@type'        => ['Organization', 'ProfessionalService'],
        '@id'          => abs_url('#organization'),
        'name'         => cfg('site.name'),
        'alternateName'=> cfg('site.short_name'),
        'url'          => abs_url(),
        'logo'         => abs_url('assets/img/logo.png'),
        'image'        => abs_url(cfg('seo.og_image')),
        'email'        => $c['email'],
        'telephone'    => $c['phone'],
        'foundingDate' => (string) cfg('site.founded'),
        'priceRange'   => '₹₹',
        'address'      => [
            '@type'           => 'PostalAddress',
            'addressLocality' => $c['address_parts']['locality'],
            'addressRegion'   => $c['address_parts']['region'],
            'postalCode'      => $c['address_parts']['postal'],
            'addressCountry'  => $c['address_parts']['country'],
        ],
        'areaServed'   => 'Worldwide',
        'sameAs'       => array_values(array_filter(
            cfg('social'),
            static fn ($u, $k) => $k !== 'whatsapp' && $u,
            ARRAY_FILTER_USE_BOTH
        )),
        'knowsAbout'   => cfg('tech_stack'),
    ];
}

function website_schema(): array
{
    return [
        '@type'     => 'WebSite',
        '@id'       => abs_url('#website'),
        'url'       => abs_url(),
        'name'      => cfg('site.name'),
        'publisher' => ['@id' => abs_url('#organization')],
        'inLanguage'=> 'en',
    ];
}

/** @param array<int,array{0:string,1:string}> $crumbs [[label, path], ...] */
function breadcrumb_schema(array $crumbs): array
{
    $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => abs_url()]];
    foreach ($crumbs as $i => [$label, $path]) {
        $item = ['@type' => 'ListItem', 'position' => $i + 2, 'name' => $label];
        if ($path !== '') {
            $item['item'] = abs_url($path);
        }
        $items[] = $item;
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

function faq_schema(array $items, string $pageUrl): array
{
    $entities = [];
    foreach ($items as $faq) {
        $answer = $faq['answer'];
        if (is_array($answer)) {
            $answer = $answer[0] . ' ' . implode(', ', $answer[1] ?? []);
        }
        $entities[] = [
            '@type'          => 'Question',
            'name'           => $faq['question'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => trim(strip_tags($answer))],
        ];
    }
    return ['@type' => 'FAQPage', '@id' => $pageUrl . '#faq', 'mainEntity' => $entities];
}

/**
 * Reuse the curated Service / SoftwareApplication nodes stored in the JSON data, but drop the parts we
 * already generate site-wide (Organization, WebSite, Breadcrumb) or generate from visible content (FAQPage).
 * URLs are rewritten to the real page address so the markup matches the live URL.
 */
function clean_ld(?array $ld, string $path): array
{
    $nodes = [];
    foreach (($ld['@graph'] ?? []) as $node) {
        $type = $node['@type'] ?? '';
        if (!in_array($type, ['Service', 'SoftwareApplication'], true)) {
            continue;
        }
        $node['@id'] = abs_url($path) . '#' . strtolower($type);
        if (isset($node['url'])) {
            $node['url'] = abs_url($path);
        }
        $nodes[] = $node;
    }
    return $nodes;
}

/* ------------------------------------------------------------------ *
 *  Misc
 * ------------------------------------------------------------------ */

function years_in_business(): int
{
    return max(1, (int) date('Y') - (int) cfg('site.founded'));
}

function tel_href(): string
{
    return 'tel:' . preg_replace('/[^\d+]/', '', (string) cfg('contact.phone'));
}

function not_found(): never
{
    http_response_code(404);
    page(['title' => 'Page not found | ' . cfg('site.name'), 'noindex' => true, 'canonical' => '404']);
    render_page('404');
    exit;
}

/** Render a page template inside the shared layout. */
function render_page(string $template, array $vars = []): void
{
    extract($vars, EXTR_SKIP);
    ob_start();
    include APP_DIR . "/pages/{$template}.php";
    $content = (string) ob_get_clean();
    include APP_DIR . '/layout/main.php';
}
