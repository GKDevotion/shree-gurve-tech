<?php
declare(strict_types=1);
header('Content-Type: application/xml; charset=utf-8');
$urls = [
    ['', 1.0, 'weekly'], ['services', 0.9, 'monthly'], ['solutions', 0.9, 'monthly'], ['projects', 0.8, 'monthly'],
    ['about-us', 0.7, 'yearly'], ['tools', 0.7, 'monthly'], ['proposals', 0.7, 'monthly'], ['faqs', 0.6, 'monthly'],
    ['contact-us', 0.8, 'yearly'], ['privacy-policy', 0.3, 'yearly'], ['terms-conditions', 0.3, 'yearly'], ['cookie-policy', 0.3, 'yearly'],
];
if (count(gallery_images()) >= (int) cfg('gallery_min_images')) $urls[] = ['gallery', 0.4, 'monthly'];
foreach (array_keys(services()) as $s)  $urls[] = ['service-details/' . $s, 0.8, 'monthly'];
foreach (array_keys(solutions()) as $s) $urls[] = ['solution-details/' . $s, 0.7, 'monthly'];
foreach (proposals() as $p)             $urls[] = ['proposal/' . $p['slug'], 0.5, 'monthly'];
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as [$path, $prio, $freq]) {
    echo '  <url><loc>' . e(abs_url($path)) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod><changefreq>' . $freq . '</changefreq><priority>' . number_format($prio, 1) . "</priority></url>\n";
}
echo "</urlset>\n";
