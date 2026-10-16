<?php
declare(strict_types=1);
/**
 * Front controller - every request that is not a real file is routed through here.
 */
require __DIR__ . '/app/bootstrap.php';

$path = request_path();

// Machine endpoints
if ($path === 'api/lead') {
    require APP_DIR . '/api/lead.php';
    exit;
}
if ($path === 'search-index.json') {
    header('Content-Type: application/json; charset=utf-8');
    header('Cache-Control: public, max-age=3600');
    echo json_encode(search_index(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}
if ($path === 'sitemap.xml') {
    require APP_DIR . '/api/sitemap.php';
    exit;
}

// Pages
foreach (require APP_DIR . '/routes.php' as $pattern => $template) {
    $regex = '#^' . str_replace('\{slug\}', '([a-z0-9\-]+)', preg_quote($pattern, '#')) . '$#';
    if (preg_match($regex, $path, $m)) {
        render_page($template, ['slug' => $m[1] ?? null]);
        exit;
    }
}

not_found();
