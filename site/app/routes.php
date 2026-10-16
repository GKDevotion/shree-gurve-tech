<?php
/**
 * Route table: URL pattern => template in app/pages/.
 * Patterns are matched against the lower-cased request path. {slug} matches [a-z0-9-]+.
 * URLs are identical to the previous site so existing SEO/backlinks keep working.
 */
return [
    ''                       => 'home',
    'about-us'               => 'about',
    'services'               => 'services',
    'service-details/{slug}' => 'service-details',
    'solutions'              => 'solutions',
    'solution-details/{slug}'=> 'solution-details',
    'projects'               => 'projects',
    'tools'                  => 'tools',
    'proposals'              => 'proposals',
    'gallery'                => 'gallery',
    'faqs'                   => 'faqs',
    'contact-us'             => 'contact',
    'privacy-policy'         => 'legal-privacy',
    'terms-conditions'       => 'legal-terms',
    'cookie-policy'          => 'legal-cookies',
];
