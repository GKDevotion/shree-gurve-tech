<?php
/**
 * Shree Gurve Technology – Dynamic XML Sitemap
 * Auto-generated for SEO crawlers (Google, Bing, etc.)
 */

header('Content-Type: application/xml; charset=UTF-8');
header('X-Robots-Tag: noindex');

$baseUrl  = 'https://shreegurvetech.com';
$today    = date('Y-m-d');

$urls = [
    // Static pages
    ['loc'=>'/',                'priority'=>'1.0', 'changefreq'=>'weekly',  'lastmod'=>$today],
    ['loc'=>'/about-us',        'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/services',        'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/solutions',       'priority'=>'0.9', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/projects',        'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/faqs',            'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/gallery',         'priority'=>'0.6', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/proposals',       'priority'=>'0.7', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/contact-us',      'priority'=>'0.8', 'changefreq'=>'monthly', 'lastmod'=>$today],
    ['loc'=>'/privacy-policy',  'priority'=>'0.3', 'changefreq'=>'yearly',  'lastmod'=>$today],
    ['loc'=>'/terms-conditions','priority'=>'0.3', 'changefreq'=>'yearly',  'lastmod'=>$today],
    ['loc'=>'/cookie-policy',   'priority'=>'0.3', 'changefreq'=>'yearly',  'lastmod'=>$today],

    // Service detail pages
    ['loc'=>'/service-details/web-development',         'priority'=>'0.9','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/software-development',    'priority'=>'0.9','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/mobile-app-development',  'priority'=>'0.9','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/ui-ux-design',            'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/digital-marketing',       'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/cloud-services',          'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/cyber-security-services', 'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/data-analytics',          'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/ai-automation',           'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/it-consulting-services',  'priority'=>'0.7','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/it-support-maintenance',  'priority'=>'0.7','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/service-details/blockchain-development',  'priority'=>'0.7','changefreq'=>'monthly','lastmod'=>$today],

    // Solution detail pages
    ['loc'=>'/solution-details/crm-solutions',                  'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/solution-details/erp-solutions',                  'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/solution-details/hrms-solutions',                 'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/solution-details/ecommerce-management-systems',   'priority'=>'0.8','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/solution-details/education-management-systems',   'priority'=>'0.7','changefreq'=>'monthly','lastmod'=>$today],
    ['loc'=>'/solution-details/healthcare-management-systems',  'priority'=>'0.7','changefreq'=>'monthly','lastmod'=>$today],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
echo '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
echo '          http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

foreach ($urls as $url): ?>
    <url>
        <loc><?= htmlspecialchars($baseUrl . $url['loc']) ?></loc>
        <lastmod><?= htmlspecialchars($url['lastmod']) ?></lastmod>
        <changefreq><?= htmlspecialchars($url['changefreq']) ?></changefreq>
        <priority><?= htmlspecialchars($url['priority']) ?></priority>
    </url>
<?php endforeach;

echo '</urlset>';
