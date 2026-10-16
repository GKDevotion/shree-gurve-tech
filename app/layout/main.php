<?php
/** @var string $content  Rendered page body (see render_page()). */
$title    = page('title') ?: cfg('seo.default_title');
$desc     = page('description') ?: cfg('seo.default_description');
$canon    = abs_url((string) page('canonical', request_path()));
$ogImage  = abs_url(page('og_image') ?: cfg('seo.og_image'));
$crumbs   = page('crumbs', []);
$graph    = [org_schema(), website_schema()];
if ($crumbs) {
    $graph[] = breadcrumb_schema($crumbs);
}
foreach ((array) page('schema', []) as $node) {
    $graph[] = $node;
}
$an      = cfg('analytics', []);
$isLocal = in_array($_SERVER['SERVER_NAME'] ?? '', ['localhost', '127.0.0.1', '::1'], true);
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($desc) ?>">
    <link rel="canonical" href="<?= e($canon) ?>">
    <meta name="robots" content="<?= page('noindex') ? 'noindex, follow' : 'index, follow, max-image-preview:large' ?>">
    <meta name="theme-color" content="<?= e(cfg('site.theme_color')) ?>">
    <meta name="author" content="<?= e(cfg('site.name')) ?>">

    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('img/favicon-16x16.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('img/favicon-32x32.png') ?>">
    <link rel="apple-touch-icon" href="<?= asset('img/favicon-96x96.png') ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e(cfg('site.name')) ?>">
    <meta property="og:locale" content="<?= e(cfg('site.locale')) ?>">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($desc) ?>">
    <meta property="og:url" content="<?= e($canon) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($title) ?>">
    <meta name="twitter:description" content="<?= e($desc) ?>">
    <meta name="twitter:image" content="<?= e($ogImage) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500;600;700&display=swap"></noscript>
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <script>document.documentElement.className = 'js';</script>

    <?= json_ld($graph) ?>
</head>
<body class="page-<?= e(str_replace('/', '-', request_path()) ?: 'home') ?>">
<?php include APP_DIR . '/layout/sprite.php'; ?>
<a class="skip-link" href="#main">Skip to main content</a>

<?php include APP_DIR . '/layout/header.php'; ?>

<main id="main" tabindex="-1">
<?= $content ?>
</main>

<?php include APP_DIR . '/layout/footer.php'; ?>

<a class="wa-fab" href="<?= e(cfg('social.whatsapp')) ?>" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
    <?= icon('whatsapp', 26) ?>
</a>

<script src="<?= asset('js/main.js') ?>" defer></script>
<?php if (!$isLocal): ?>
<script>
    /* Analytics are loaded after the page is interactive so they never compete with first paint. */
    window.addEventListener('load', function () {
        var run = function () {
            <?php if (!empty($an['gtm'])): ?>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({'gtm.start': Date.now(), event: 'gtm.js'});
            var g = document.createElement('script'); g.async = true;
            g.src = 'https://www.googletagmanager.com/gtm.js?id=<?= e($an['gtm']) ?>'; document.head.appendChild(g);
            <?php endif; ?>
            <?php if (!empty($an['ga4'])): ?>
            window.dataLayer = window.dataLayer || [];
            window.gtag = function () { dataLayer.push(arguments); };
            gtag('js', new Date()); gtag('config', '<?= e($an['ga4']) ?>');
            var a = document.createElement('script'); a.async = true;
            a.src = 'https://www.googletagmanager.com/gtag/js?id=<?= e($an['ga4']) ?>'; document.head.appendChild(a);
            <?php endif; ?>
            <?php if (!empty($an['clarity'])): ?>
            (function (c, l, a, r, i, t, y) {
                c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments); };
                t = l.createElement(r); t.async = 1; t.src = 'https://www.clarity.ms/tag/' + i;
                y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
            })(window, document, 'clarity', 'script', '<?= e($an['clarity']) ?>');
            <?php endif; ?>
        };
        'requestIdleCallback' in window ? requestIdleCallback(run, {timeout: 3000}) : setTimeout(run, 1500);
    });
</script>
<?php endif; ?>
</body>
</html>
