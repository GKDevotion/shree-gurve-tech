<?php
/**
 * Central site configuration.
 * Everything that used to be hard-coded across header.php / footer.php / function.php lives here.
 */
return [
    'site' => [
        'name'       => 'Shree Gurve Technology',
        'short_name' => 'Shree Gurve Tech',
        // Canonical production origin. Used for canonical URLs, Open Graph, JSON-LD and the sitemap.
        'url'        => 'https://shreegurvetech.com',
        'founded'    => 2019,
        'tagline'    => 'Web, software & IT services from Surat, India',
        'locale'     => 'en_IN',
        'theme_color'=> '#0b0b0c',
    ],

    'contact' => [
        'phone'         => '+91 82000 17181',
        'email'         => 'contact@shreegurvetech.com',
        'address'       => 'Surat - 395004, Gujarat, India',
        'address_parts' => ['locality' => 'Surat', 'region' => 'Gujarat', 'postal' => '395004', 'country' => 'IN'],
        'hours'         => 'Mon - Sat, 10:00 - 19:00 IST',
        'maps_url'      => 'https://www.google.com/maps/search/?api=1&query=Surat+395004+India',
        // Where new leads are e-mailed (set to '' to disable and only log to storage/leads/).
        'notify_email'  => 'contact@shreegurvetech.com',
    ],

    'social' => [
        'facebook'  => 'https://www.facebook.com/profile.php?id=61589868721671',
        'linkedin'  => 'https://www.linkedin.com/in/gautam-kakadiya-816297a1/',
        'instagram' => 'https://www.instagram.com/shreegurvetech/',
        'youtube'   => 'https://www.youtube.com/@ShreeGurave',
        'whatsapp'  => 'https://wa.me/918200017181?text=Hello%20Shree%20Gurve%20Tech%20Team%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services.',
    ],

    'seo' => [
        'default_title'       => 'Shree Gurve Technology - Web Dev, Software Dev & IT Services',
        'default_description' => 'Shree Gurve Technology is a professional IT company offering web development, software development, mobile app development, UI/UX design and digital solutions.',
        'default_keywords'    => 'IT company in India, web development company, software development services, mobile app development company, custom software development, IT solutions provider, Shree Gurve Technology',
        'og_image'            => 'assets/img/og-default.jpg',
    ],

    // Tracking IDs (kept from the previous site). Leave a value empty to disable that tag.
    'analytics' => [
        'ga4'     => 'G-0YED9EGZHR',
        'gtm'     => 'GTM-KP4VLBK7',
        'clarity' => 'vxkx0virmg',
    ],

    'tech_stack' => ['Laravel', 'PHP', 'React', 'Node.js', 'Flutter', 'MySQL', 'WordPress', 'Cloud & DevOps'],

    // Contact-form subjects (used by the lead form and validated server-side).
    'subjects' => ['Website / Web App', 'Custom Software', 'Mobile App', 'UI/UX Design', 'Digital Marketing', 'IT Consulting', 'Something else'],

    // Show "Gallery" in the menu only once there are enough images to justify a page.
    'gallery_min_images' => 4,
];
