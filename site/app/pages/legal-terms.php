<?php
$sections = [
    [
        'id' => 'use-of-website',
        'title' => 'Use of Website',
        'text' => ['Users agree to use this website responsibly and must not attempt to disrupt, damage or gain unauthorized access to our systems.'],
        'list' => [],
    ],
    [
        'id' => 'technology-services',
        'title' => 'Technology Services',
        'text' => ['We provide services including web development, mobile app development, custom software development, and IT consulting.'],
        'list' => [],
    ],
    [
        'id' => 'intellectual-property',
        'title' => 'Intellectual Property',
        'text' => ['All content including logos, code, graphics, and design are protected intellectual property of our company.'],
        'list' => [],
    ],
    [
        'id' => 'payments',
        'title' => 'Payments',
        'text' => ['Projects may require advance payments. Final deliverables are released after full payment completion.'],
        'list' => [],
    ],
    [
        'id' => 'third-party-links',
        'title' => 'Third Party Links',
        'text' => ['Our website may contain links to external websites. We are not responsible for their policies or content.'],
        'list' => [],
    ],
    [
        'id' => 'changes-to-terms',
        'title' => 'Changes to Terms',
        'text' => ['We reserve the right to update our Terms & Conditions at any time. Continued use means acceptance of changes.'],
        'list' => [],
    ],
];

page([
    'title'       => 'Terms & Conditions' . ' | ' . cfg('site.name'),
    'description' => 'The terms that apply when you use our website and services.',
    'canonical'   => 'terms-conditions',
    'crumbs'      => [['Terms & Conditions', '']],
]);
component('page-hero', ['eyebrow' => 'Legal', 'title' => 'Terms & Conditions', 'lead' => 'The terms that apply when you use our website and services.', 'crumbs' => page('crumbs')]);
component('legal', ['sections' => $sections]);
