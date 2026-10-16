<?php
$sections = [
    [
        'id' => 'what-are-cookies',
        'title' => 'What Are Cookies?',
        'text' => ['Cookies are small text files stored on your device when you visit a website. They help websites remember user preferences and improve browsing experience.'],
        'list' => [],
    ],
    [
        'id' => 'how-we-use-cookies',
        'title' => 'How We Use Cookies',
        'text' => ['We use cookies to enhance website functionality, analyze traffic, improve security, and provide better user experience across our technology services.'],
        'list' => [],
    ],
    [
        'id' => 'types-of-cookies',
        'title' => 'Types of Cookies',
        'text' => [],
        'list' => ['Essential Cookies', 'Performance Cookies', 'Analytics Cookies', 'Functional Cookies'],
    ],
    [
        'id' => 'third-party-cookies',
        'title' => 'Third-Party Cookies',
        'text' => ['Some cookies may be placed by third-party services such as analytics tools, social media platforms, or advertising partners.'],
        'list' => [],
    ],
    [
        'id' => 'managing-cookies',
        'title' => 'Managing Cookies',
        'text' => ['You can control or delete cookies through your browser settings. However, disabling cookies may affect some website features.'],
        'list' => [],
    ],
    [
        'id' => 'your-consent',
        'title' => 'Your Consent',
        'text' => ['By continuing to use our website, you agree to the use of cookies as described in this Cookie Policy.'],
        'list' => [],
    ],
];

page([
    'title'       => 'Cookie Policy' . ' | ' . cfg('site.name'),
    'description' => 'How and why this website uses cookies.',
    'canonical'   => 'cookie-policy',
    'crumbs'      => [['Cookie Policy', '']],
]);
component('page-hero', ['eyebrow' => 'Legal', 'title' => 'Cookie Policy', 'lead' => 'How and why this website uses cookies.', 'crumbs' => page('crumbs')]);
component('legal', ['sections' => $sections]);
