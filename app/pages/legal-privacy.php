<?php
$sections = [
    [
        'id' => 'information-we-collect',
        'title' => 'Information We Collect',
        'text' => ['We may collect personal information such as your name, email address, phone number, and project details when you contact us or use our services.'],
        'list' => [],
    ],
    [
        'id' => 'how-we-use-information',
        'title' => 'How We Use Information',
        'text' => ['Your information is used to provide services, respond to inquiries, improve our website, and communicate project updates.'],
        'list' => [],
    ],
    [
        'id' => 'data-security',
        'title' => 'Data Security',
        'text' => ['We implement appropriate security measures to protect your personal data from unauthorized access, misuse, or disclosure.'],
        'list' => [],
    ],
    [
        'id' => 'cookies',
        'title' => 'Cookies',
        'text' => ['Our website may use cookies to improve user experience and analyze website traffic. You can control cookies through browser settings.'],
        'list' => [],
    ],
    [
        'id' => 'third-party-services',
        'title' => 'Third-Party Services',
        'text' => ['We may use trusted third-party tools such as analytics or hosting providers that process data to help operate our services.'],
        'list' => [],
    ],
    [
        'id' => 'your-rights',
        'title' => 'Your Rights',
        'text' => ['You have the right to request access, correction, or deletion of your personal information stored with us.'],
        'list' => [],
    ],
];

page([
    'title'       => 'Privacy Policy' . ' | ' . cfg('site.name'),
    'description' => 'How we collect, use and protect your information.',
    'canonical'   => 'privacy-policy',
    'crumbs'      => [['Privacy Policy', '']],
]);
component('page-hero', ['eyebrow' => 'Legal', 'title' => 'Privacy Policy', 'lead' => 'How we collect, use and protect your information.', 'crumbs' => page('crumbs')]);
component('legal', ['sections' => $sections]);
