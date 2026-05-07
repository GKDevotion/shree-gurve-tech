<?php

function getBaseUrl() {
    // Determine the protocol (http or https)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

    // Get the host name (e.g., www.example.com or localhost)
    $host = $_SERVER['HTTP_HOST'];

    // Get the directory path of the script, removing the script name itself
    $script_name = $_SERVER['SCRIPT_NAME'];
    $path = str_replace(basename($script_name), "", $script_name);

    // Construct the base URL
    $base_url = $protocol . "://" . $host . $path;

    return $base_url;
}

function callNumber(){
    return "+91 82000 17181";
}

function contactEmail(){
    return "contact@shreegurvetech.com";
}

function officeAddress(){
    return "Surat - 395004, India";//103, Hany Arcade, Dabholi, Katargam, 
}

function representativeOfficeAddress(){
    return officeAddress();
    return "710, Westgate by True Value, Nr. YMCA Club, Makarba, Ahmedabad - 380015, India";
}

function facebookLink(){
    return "facebook.com";
}

function linkedinLink(){
    return "linkedin.com";
}

function twitterLink(){
    return "twitter.com";
}

function instagramLink(){
    return "instagram.com";
}

function youtubeLink(){
    return "youtube.com";
}

function whatsappLink(){
    return "whatsapp.com";
}

function getServiceChildMenu( $seoArr, $type=0 ){
    if( $type == 1 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'service-details/web-development').'">Web Development Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/software-development').'">Software Development Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/mobile-app-development').'">Mobile App Development</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/ui-ux-design').'">UI/UX Design Services</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'service-details/digital-marketing').'">Digital Marketing Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/cloud-services').'">Cloud Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/it-consulting-services').'">IT Consulting Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/cyber-security-services').'">Cybersecurity Services</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'service-details/data-analytics').'">Data & Analytics Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/ai-automation').'">AI & Automation Services</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/it-support-maintenance').'">IT Support & Maintenance</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'service-details/blockchain-development').'">Blockchain Development</a>
            </li>
        ';
    }
}

function getCompanyChildMenu( $seoArr, $type=0 ){
    if( $type == 1 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'about-us').'">About US</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'proposals').'">Proposal</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'gallery').'">Gallery</a>
            </li>
        ';
    }

    if( $type == 4 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'faqs').'">FAQs</a>
            </li>
        ';
    }
}

function getSolutionChildMenu( $seoArr, $type=0 ){
    
    if( $type == 1 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/crm-solutions').'">CRM Solutions</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/erp-solutions').'">ERP Solutions</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/hrms-solutions').'">HRMS Solutions</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/project-management-systems').'">Project Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/helpdesk-systems').'">Helpdesk / Ticketing Systems</a>
            </li>
        ';
    }

    if( $type == 2 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/education-management-systems').'">School / Education Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/healthcare-management-systems').'">Hospital / Healthcare Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/inventory-management-systems').'">Inventory Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/accounting-finance-systems').'">Accounting & Finance Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/ecommerce-management-systems').'">E-Commerce Management Systems</a>
            </li>
        ';
    }

    if( $type == 3 ){
        return '
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/real-estate-management-systems').'">Real Estate Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/travel-tourism-management-systems').'">Travel & Tourism Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/document-management-systems').'">Document Management Systems</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/learning-management-systems').'">Learning Management Systems (LMS)</a>
            </li>
            <li>
                <a href="'.($seoArr['base_url'].'solution-details/business-intelligenceanalytics-systems').'">Business Intelligence & Analytics Systems</a>
            </li>
        ';
    }
}

function getFAQsList(){
    $faqSections = [

        'web-development' => [
            'title' => 'Web Development Services',
            'accordion_id' => 'webAccordion',
            'collapse_id' => 'collapseWeb',
            'heading_id' => 'webheadingService',

            'faqs' => [

                [
                    'question' => 'What are Web Development Services?',
                    'answer' => 'Web Development Services include designing, developing, and maintaining websites or web applications. These services cover front-end development, back-end development, database integration, and website optimization to create fast, secure, and user-friendly websites.'
                ],

                [
                    'question' => 'What types of websites can you develop?',
                    'answer' => [
                        'We develop different types of websites including:',
                        [
                            'Business Websites',
                            'E-commerce Websites',
                            'Corporate Websites',
                            'Portfolio Websites',
                            'Custom Web Applications',
                            'CMS-based Websites (WordPress, Drupal, Joomla)',
                        ]
                    ]
                ],

                [
                    'question' => 'How long does it take to develop a website?',
                    'answer' => [
                        'The development time depends on the project complexity.',
                        [
                            'Basic website: 5-10 days',
                            'Business website: 2-4 weeks',
                            'E-commerce website: 3-6 weeks',
                            'Custom web application: 1-3 months',
                        ]
                    ]
                ],

                [
                    'question' => 'Which technologies do you use for web development?',
                    'answer' => [
                        'We use modern technologies such as:',
                        [
                            '<b>Frontend:</b> HTML5, CSS3, JavaScript, Bootstrap, React',
                            '<b>Backend:</b> PHP, Laravel, Node.js',
                            '<b>Database:</b> MySQL, PostgreSQL, MongoDB',
                            '<b>CMS:</b> WordPress, Shopify',
                        ]
                    ]
                ],

                [
                    'question' => 'Will my website be mobile-friendly?',
                    'answer' => 'Yes. All websites we develop are fully responsive, meaning they work perfectly on mobiles, tablets, laptops, and desktops.'
                ],

                [
                    'question' => 'Do you provide SEO-friendly website development?',
                    'answer' => 'Yes. We build websites following SEO best practices, including fast loading speed, optimized code, proper meta tags, structured content, and mobile-friendly design.'
                ],

                [
                    'question' => 'Can you redesign my existing website?',
                    'answer' => 'Yes, we offer website redesign services to improve design, performance, security, and user experience.'
                ],

                [
                    'question' => 'Do you provide website maintenance and support?',
                    'answer' => 'Yes. We provide ongoing website maintenance services including updates, security monitoring, backups, and performance optimization.'
                ],

                [
                    'question' => 'What is the cost of web development services?',
                    'answer' => 'Website development cost depends on features, design complexity, and functionality.'
                ],

                [
                    'question' => 'Do you develop custom web applications?',
                    'answer' => 'Yes. We specialize in custom web application development tailored to business requirements.'
                ],
            ]
        ],
        
        'software-development' => [

            'title' => 'Software Development Services',
            'accordion_id' => 'softwareAccordion',
            'collapse_id' => 'collapseSoftware',
            'heading_id' => 'swheadingService',

            'faqs' => [

                [
                    'question' => 'What are Software Development Services?',
                    'answer' => 'Software Development Services involve designing, building, testing, and maintaining software applications that help businesses automate processes and improve efficiency.'
                ],

                [
                    'question' => 'What types of software can you develop?',
                    'answer' => [
                        'We develop various software solutions including:',
                        [
                            'Custom Business Software',
                            'Web Applications',
                            'Mobile Applications',
                            'ERP & CRM Systems',
                            'SaaS Platforms',
                            'Automation Tools',
                        ]
                    ]
                ],

                [
                    'question' => 'What technologies do you use for software development?',
                    'answer' => [
                        'We use modern technologies such as:',
                        [
                            '<b>Frontend:</b> React, Angular',
                            '<b>Backend:</b> Node.js, Laravel, Python',
                            '<b>Mobile:</b> Flutter, React Native',
                            '<b>Database:</b> MySQL, MongoDB',
                            '<b>Cloud:</b> AWS, Azure',
                        ]
                    ]
                ],

                [
                    'question' => 'How long does it take to develop custom software?',
                    'answer' => [
                        'Timeline depends on project complexity:',
                        [
                            'Small application: 2–4 weeks',
                            'Medium software: 1–3 months',
                            'Enterprise software: 3–6 months',
                        ]
                    ]
                ],

                [
                    'question' => 'Do you provide custom software development services?',
                    'answer' => 'Yes. We build custom software solutions tailored to your business needs.'
                ],

                [
                    'question' => 'What is the cost of software development?',
                    'answer' => 'Software development cost depends on features, integrations, platform, and project complexity.'
                ],

                [
                    'question' => 'Do you provide software maintenance and support?',
                    'answer' => 'Yes. We provide maintenance, bug fixes, updates, and optimization support.'
                ],

                [
                    'question' => 'Can you upgrade or modernize existing software?',
                    'answer' => 'Yes. We modernize old software systems with improved technology and security.'
                ],

                [
                    'question' => 'Is the software secure and scalable?',
                    'answer' => 'Yes. We follow security and scalability best practices.'
                ],

                [
                    'question' => 'Do you provide post-development support?',
                    'answer' => 'Yes. We provide deployment, training, documentation, and long-term support.'
                ],

            ]

        ],

        'mobile-app-development' => [

            'title' => 'Mobile App Development',
            'accordion_id' => 'mobileAccordion',
            'collapse_id' => 'collapseMobile',
            'heading_id' => 'mblheadingService',

            'faqs' => [

                [
                    'question' => 'What are Mobile App Development Services?',
                    'answer' => 'Mobile App Development Services involve designing, building, testing, and launching applications for smartphones and tablets. These apps can run on platforms like Android and iOS and help businesses improve customer engagement, automate processes, and provide services directly to users.'
                ],

                [
                    'question' => 'What types of mobile apps do you develop?',
                    'answer' => [
                        'We develop different types of mobile applications, including:',
                        [
                            'Android Applications',
                            'iOS Applications',
                            'Cross-Platform Apps',
                            'E-commerce Apps',
                            'On-Demand Service Apps',
                            'Business and Enterprise Apps',
                        ]
                    ]
                ],

                [
                    'question' => 'Which technologies do you use for mobile app development?',
                    'answer' => [
                        'We use modern technologies to ensure performance and scalability:',
                        [
                            'Native Development: Kotlin (Android), Swift (iOS)',
                            'Cross-Platform: Flutter, React Native',
                            'Backend: Node.js, PHP, Laravel',
                            'Database: MySQL, Firebase, MongoDB',
                        ]
                    ]
                ],

                [
                    'question' => 'How long does it take to develop a mobile app?',
                    'answer' => [
                        'The development timeline depends on the complexity and features:',
                        [
                            'Basic app: 3–6 weeks',
                            'Medium complexity app: 2–3 months',
                            'Advanced app with integrations: 3–6 months',
                        ]
                    ]
                ],

                [
                    'question' => 'What is the cost of developing a mobile app?',
                    'answer' => 'The cost varies based on app features, design complexity, integrations, and platforms.'
                ],

                [
                    'question' => 'Do you develop apps for both Android and iOS?',
                    'answer' => 'Yes. We develop apps for both Android and iOS platforms using native technologies or cross-platform frameworks.'
                ],

                [
                    'question' => 'Will my mobile app be secure?',
                    'answer' => 'Yes. We follow best practices in data security, encryption, authentication, and secure APIs to protect your application and user data.'
                ],

                [
                    'question' => 'Do you provide UI/UX design for mobile apps?',
                    'answer' => 'Yes. Our team creates user-friendly and visually appealing UI/UX designs for smooth user experiences.'
                ],

                [
                    'question' => 'Can you publish the app on app stores?',
                    'answer' => 'Yes. We help with app deployment and publishing on Google Play Store and Apple App Store.'
                ],

                [
                    'question' => 'Do you provide maintenance and updates after launch?',
                    'answer' => 'Yes. We offer ongoing app maintenance, bug fixes, feature updates, and performance improvements.'
                ],

            ]

        ],

        'uiux-design-services' => [

            'title' => 'UI/UX Design Services',
            'accordion_id' => 'uiuxAccordion',
            'collapse_id' => 'collapseUiUx',
            'heading_id' => 'uixheadingService',

            'faqs' => [

                [
                    'question' => 'What are UI/UX Design Services?',
                    'answer' => 'UI/UX Design Services focus on creating visually appealing and user-friendly digital experiences.'
                ],

                [
                    'question' => 'Why is UI/UX design important for a website or app?',
                    'answer' => 'Good UI/UX design improves user engagement, increases conversions, and creates better user experiences.'
                ],

                [
                    'question' => 'What services are included in UI/UX design?',
                    'answer' => [
                        'Our UI/UX design services include:',
                        [
                            'User Research & Analysis',
                            'Wireframing and Prototyping',
                            'Mobile App UI Design',
                            'Website UI Design',
                            'Interaction Design',
                            'Usability Testing',
                            'Design System Creation',
                        ]
                    ]
                ],

                [
                    'question' => 'Which tools do you use for UI/UX design?',
                    'answer' => [
                        'We use industry-standard design tools such as:',
                        [
                            'Figma',
                            'Adobe XD',
                            'Sketch',
                            'Adobe Photoshop',
                            'Adobe Illustrator',
                        ]
                    ]
                ],

                [
                    'question' => 'What is the difference between UI and UX design?',
                    'answer' => [
                        'Both work together to create effective digital products:',
                        [
                            'UI (User Interface): Focuses on visual design elements.',
                            'UX (User Experience): Focuses on user interaction and usability.',
                        ]
                    ]
                ],

                [
                    'question' => 'Do you provide responsive UI/UX design?',
                    'answer' => 'Yes. We create responsive and adaptive designs for desktops, tablets, and mobile devices.'
                ],

                [
                    'question' => 'Can you redesign an existing website or app UI?',
                    'answer' => 'Yes. We provide redesign services to improve usability and modernize interfaces.'
                ],

                [
                    'question' => 'Do you create prototypes before development?',
                    'answer' => 'Yes. We build interactive prototypes before development starts.'
                ],

                [
                    'question' => 'How long does a UI/UX design project take?',
                    'answer' => [
                        'Timeline depends on project complexity:',
                        [
                            'Small project: 1–2 weeks',
                            'Medium project: 2–4 weeks',
                            'Large application design: 4–8 weeks',
                        ]
                    ]
                ],

                [
                    'question' => 'Do you collaborate with development teams?',
                    'answer' => 'Yes. Our design team works closely with developers to ensure proper implementation.'
                ],

            ]

        ],

        'digital-marketing-services' => [

            'title' => 'Digital Marketing Services',
            'accordion_id' => 'digitalmarketingAccordion',
            'collapse_id' => 'collapseDigitalMarketing',
            'heading_id' => 'dmheadingService',

            'faqs' => [

                [
                    'question' => 'What are Digital Marketing Services?',
                    'answer' => 'Digital Marketing Services include online strategies and techniques used to promote businesses, products, or services through digital channels such as search engines, social media, email, and websites.'
                ],

                [
                    'question' => 'What services are included in digital marketing?',
                    'answer' => [
                        'Digital marketing typically includes:',
                        [
                            'Search Engine Optimization (SEO)',
                            'Social Media Marketing (SMM)',
                            'Pay-Per-Click Advertising (PPC)',
                            'Content Marketing',
                            'Email Marketing',
                            'Online Reputation Management (ORM)',
                            'Conversion Rate Optimization (CRO)',
                        ]
                    ]
                ],

                [
                    'question' => 'Which platforms do you use for digital marketing?',
                    'answer' => [
                        'We use popular marketing platforms such as:',
                        [
                            'Google Ads',
                            'Google Analytics',
                            'Facebook',
                            'Instagram',
                            'LinkedIn',
                        ]
                    ]
                ],

                [
                    'question' => 'How long does it take to see results from digital marketing?',
                    'answer' => [
                        'The timeline depends on the strategy used:',
                        [
                            'SEO: 3–6 months for noticeable results',
                            'PPC Ads: Immediate traffic once campaigns start',
                            'Social Media Marketing: 1–3 months for engagement growth',
                        ]
                    ]
                ],

                [
                    'question' => 'What is SEO in digital marketing?',
                    'answer' => 'SEO (Search Engine Optimization) is the process of optimizing a website to rank higher in search engine results using keywords, technical improvements, content, and link building.'
                ],

                [
                    'question' => 'What is PPC advertising?',
                    'answer' => 'PPC (Pay-Per-Click) advertising is a model where businesses pay only when someone clicks on their ad.'
                ],

                [
                    'question' => 'Do you provide social media marketing services?',
                    'answer' => 'Yes. We manage and grow your brand presence on platforms like Facebook, Instagram, and LinkedIn.'
                ],

                [
                    'question' => 'Can digital marketing help increase sales?',
                    'answer' => 'Yes. A well-planned digital marketing strategy helps attract targeted audiences, generate quality leads, and increase conversions and sales.'
                ],

                [
                    'question' => 'Do you provide performance reports for campaigns?',
                    'answer' => 'Yes. We provide detailed performance reports using tools like Google Analytics.'
                ],

                [
                    'question' => 'Is digital marketing suitable for small businesses?',
                    'answer' => 'Yes. Digital marketing is highly effective for small businesses because it allows targeted marketing with flexible budgets.'
                ],

            ]

        ],

        'cloud-services' => [

            'title' => 'Cloud Services',
            'accordion_id' => 'cloudAccordion',
            'collapse_id' => 'collapseCloud',
            'heading_id' => 'cldheadingService',

            'faqs' => [

                [
                    'question' => 'What are Cloud Services?',
                    'answer' => 'Cloud Services refer to computing resources such as servers, storage, databases, networking, and software delivered over the internet.'
                ],

                [
                    'question' => 'What types of cloud services do you offer?',
                    'answer' => [
                        'We provide a wide range of cloud solutions, including:',
                        [
                            'Cloud Infrastructure Setup',
                            'Cloud Migration Services',
                            'Cloud Storage Solutions',
                            'Cloud Application Development',
                            'Cloud Backup & Disaster Recovery',
                            'Cloud Security and Monitoring',
                        ]
                    ]
                ],

                [
                    'question' => 'Which cloud platforms do you work with?',
                    'answer' => [
                        'We work with leading cloud platforms such as:',
                        [
                            'Amazon Web Services (AWS)',
                            'Microsoft Azure',
                            'Google Cloud Platform (GCP)',
                        ]
                    ]
                ],

                [
                    'question' => 'What are the benefits of using cloud services?',
                    'answer' => [
                        'Cloud services offer several advantages:',
                        [
                            'Scalability and flexibility',
                            'Cost efficiency',
                            'High availability and reliability',
                            'Improved data security',
                            'Remote accessibility',
                        ]
                    ]
                ],

                [
                    'question' => 'What is cloud migration?',
                    'answer' => 'Cloud migration is the process of moving applications, data, and infrastructure from local servers to cloud platforms.'
                ],

                [
                    'question' => 'Are cloud services secure?',
                    'answer' => 'Yes. Modern cloud platforms use encryption, identity management, firewalls, and continuous monitoring for security.'
                ],

                [
                    'question' => 'Can you migrate my existing website or application to the cloud?',
                    'answer' => 'Yes. We provide cloud migration services for websites, applications, and databases with minimal downtime.'
                ],

                [
                    'question' => 'What is the cost of cloud services?',
                    'answer' => 'Cloud costs depend on storage, bandwidth, infrastructure, and service usage. Most providers use pay-as-you-go pricing.'
                ],

                [
                    'question' => 'Do you provide cloud backup and disaster recovery?',
                    'answer' => 'Yes. We implement secure backup and disaster recovery solutions to protect business data.'
                ],

                [
                    'question' => 'Do you offer ongoing cloud management and support?',
                    'answer' => 'Yes. We provide cloud monitoring, maintenance, optimization, and technical support services.'
                ],

            ]

        ],

        "it-consulting" => [
            "title" => "IT Consulting Services",
            "accordion_id" => "it_consultingAccordion",
            "collapse_id" => "collapseITconsulting",
            'heading_id' => 'itconsulting',

            "faqs" => [

                [
                    "id" => "ic-collapse-1",
                    "question" => "What are IT Consulting Services?",
                    "answer" => "IT Consulting Services help businesses plan, implement, and manage their technology strategies. IT consultants analyze business needs, recommend the right technology solutions, and help organizations improve efficiency, security, and overall performance."
                ],

                [
                    "id" => "ic-collapse-2",
                    "question" => "What services are included in IT consulting?",
                    "answer" => [
                        '',
                        [
                            "IT Strategy and Planning",
                            "Technology Assessment and Audits",
                            "IT Infrastructure Design",
                            "Cloud Consulting and Migration",
                            "Cybersecurity Consulting",
                            "Software and System Integration",
                            "Digital Transformation Strategy"
                        ]
                    ]
                ],

                [
                    "id" => "ic-collapse-3",
                    "question" => "Why does a business need IT consulting services?",
                    "answer" => "Businesses need IT consulting to make better technology decisions, reduce operational costs, improve security, and ensure their systems support long-term growth and innovation."
                ],

                [
                    "id" => "ic-collapse-4",
                    "question" => "Do you provide cloud consulting services?",
                    "answer" => "Yes. We help businesses select and implement cloud solutions using platforms like Amazon Web Services, Microsoft Azure, and Google Cloud Platform."
                ],

                [
                    "id" => "ic-collapse-5",
                    "question" => "Can IT consulting help with digital transformation?",
                    "answer" => "Yes. IT consulting plays a key role in digital transformation by helping businesses adopt modern technologies, automate processes, and improve customer experiences through digital solutions."
                ],

                [
                    "id" => "ic-collapse-6",
                    "question" => "What industries do you provide IT consulting for?",
                    "answer" => [
                        '',
                        [
                            "Healthcare",
                            "Finance and Banking",
                            "E-commerce",
                            "Education",
                            "Manufacturing",
                            "Travel and Hospitality"
                        ]
                    ]
                ],

                [
                    "id" => "ic-collapse-7",
                    "question" => "How do IT consultants improve business efficiency?",
                    "answer" => "IT consultants analyze existing systems and workflows, identify inefficiencies, and recommend optimized technologies or automation tools that improve productivity and reduce operational costs."
                ],

                [
                    "id" => "ic-collapse-8",
                    "question" => "Do you help with IT infrastructure setup?",
                    "answer" => "Yes. We design and implement secure and scalable IT infrastructure, including servers, networks, cloud environments, and security systems tailored to your business needs."
                ],

                [
                    "id" => "ic-collapse-9",
                    "question" => "How long does an IT consulting project take?",
                    "answer" => "The duration depends on the scope of the project. Small assessments may take a few days, while large digital transformation or infrastructure projects may take several weeks or months."
                ],

                [
                    "id" => "ic-collapse-10",
                    "question" => "Do you provide ongoing IT consulting and support?",
                    "answer" => "Yes. We offer continuous IT consulting, monitoring, and strategic guidance to ensure your technology systems remain secure, efficient, and aligned with your business goals."
                ]

            ]
        ],

        "cybersecurity-services" => [
            "title" => "Cybersecurity Services",
            "accordion_id" => "cybersecurityAccordion",
            "collapse_id" => "collapseCyberSecurity",
            'heading_id' => 'cyberSecurityServices',

            "faqs" => [

                [
                    "question" => "What are Cybersecurity Services?",
                    "answer" => "Cybersecurity Services help protect computer systems, networks, and data from cyber threats such as hacking, malware, and unauthorized access. These services include security monitoring, vulnerability assessments, threat detection, and incident response to keep digital assets safe."
                ],

                [
                    "question" => "Why are cybersecurity services important for businesses?",
                    "answer" => "Cybersecurity is essential for protecting sensitive data, maintaining customer trust, and preventing financial losses caused by cyberattacks. Strong security measures help businesses safeguard their systems and ensure uninterrupted operations."
                ],

                [
                    "question" => "What types of cybersecurity services do you offer?",
                    "answer" => [
                        '',
                        [
                            "Security Risk Assessment",
                            "Network Security",
                            "Application Security",
                            "Vulnerability Scanning and Penetration Testing",
                            "Security Monitoring and Incident Response",
                            "Data Protection and Encryption",
                            "Security Compliance and Audits"
                        ]
                    ]
                ],

                [
                    "question" => "What is a cybersecurity risk assessment?",
                    "answer" => "A cybersecurity risk assessment identifies potential security vulnerabilities in your IT systems and evaluates the likelihood and impact of cyber threats. It helps businesses prioritize security improvements and strengthen their defenses."
                ],

                [
                    "question" => "What is penetration testing?",
                    "answer" => "Penetration testing (also called ethical hacking) is the process of simulating cyberattacks on a system to identify weaknesses before malicious attackers can exploit them."
                ],

                [
                    "question" => "How can businesses protect their data from cyber threats?",
                    "answer" => [
                        '',
                        [
                            "Using strong passwords and multi-factor authentication",
                            "Installing firewalls and antivirus software",
                            "Encrypting sensitive data",
                            "Regularly updating software and systems",
                            "Monitoring networks for suspicious activities"
                        ]
                    ]
                ],

                [
                    "question" => "Do you provide cloud security services?",
                    "answer" => "Yes. We help secure cloud environments on platforms like Amazon Web Services, Microsoft Azure, and Google Cloud Platform by implementing strong access controls, monitoring, and encryption."
                ],

                [
                    "question" => "What is malware and how can it affect businesses?",
                    "answer" => "Malware is malicious software designed to damage systems, steal data, or disrupt operations. It can cause financial losses, data breaches, and downtime if not properly detected and prevented."
                ],

                [
                    "question" => "Do you offer ongoing cybersecurity monitoring?",
                    "answer" => "Yes. We provide continuous monitoring and threat detection to identify suspicious activities and respond quickly to potential security incidents."
                ],

                [
                    "question" => "How often should businesses perform cybersecurity audits?",
                    "answer" => "Businesses should perform security audits regularly, typically once or twice a year, or whenever major system changes occur to ensure their security measures remain effective."
                ]

            ]
        ],

        "data-analytics-services" => [

            "title" => "Data & Analytics Services",
            "accordion_id" => "data_analyticsAccordion",
            "collapse_id" => "collapseDataAnalyticsServices",
            'heading_id' => 'dataAnalyticsServices',

            "faqs" => [

                [
                    "question" => "What are Data & Analytics Services?",
                    "answer" => "Data & Analytics Services help businesses collect, process, and analyze large amounts of data to gain valuable insights. These insights support better decision-making, improve business performance, and help identify trends, opportunities, and risks."
                ],

                [
                    "question" => "What services are included in Data & Analytics?",
                    "answer" => [
                        '',
                        [
                            "Data Collection and Integration",
                            "Data Warehousing",
                            "Data Visualization and Dashboards",
                            "Business Intelligence (BI) Solutions",
                            "Predictive Analytics",
                            "Big Data Processing",
                            "Data Governance and Management"
                        ]
                    ]
                ],

                [
                    "question" => "Why are data analytics services important for businesses?",
                    "answer" => "Data analytics helps businesses make data-driven decisions, understand customer behavior, optimize operations, and improve marketing strategies. It enables organizations to identify trends and opportunities that may otherwise go unnoticed."
                ],

                [
                    "question" => "Which tools are commonly used for data analytics?",
                    "answer" => [
                        '',
                        [
                            "Microsoft Power BI",
                            "Tableau",
                            "Google Analytics",
                            "Apache Hadoop"
                        ]
                    ]
                ],

                [
                    "question" => "What is Business Intelligence (BI)?",
                    "answer" => "Business Intelligence refers to technologies and processes used to analyze business data and present actionable insights through reports, dashboards, and visualizations using tools like Microsoft Power BI and Tableau."
                ],

                [
                    "question" => "What is predictive analytics?",
                    "answer" => "Predictive analytics uses historical data, statistical algorithms, and machine learning techniques to predict future outcomes, trends, and customer behavior."
                ],

                [
                    "question" => "Can you integrate data from multiple sources?",
                    "answer" => "Yes. We integrate data from various sources such as databases, CRM systems, websites, and marketing platforms to create a unified and comprehensive data analysis environment."
                ],

                [
                    "question" => "Do you provide data visualization services?",
                    "answer" => "Yes. We create interactive dashboards and visual reports using tools like Tableau and Microsoft Power BI to make complex data easy to understand."
                ],

                [
                    "question" => "Is data security maintained during analytics processes?",
                    "answer" => "Yes. We implement strict data security measures, encryption, and access controls to ensure that sensitive business data remains protected throughout the analytics process."
                ],

                [
                    "question" => "How can Data & Analytics improve business performance?",
                    "answer" => "By analyzing business data, companies can optimize operations, improve customer experience, increase marketing effectiveness, and make strategic decisions based on accurate insights."
                ]

            ]

        ],

        "ai-automation-accordion" => [
            'accordion_id' => 'ai_automation_Accordion',
            'title' => 'AI & Automation Services',
            "collapse_id" => "collapseAiAutomationAccordion",
            'heading_id' => 'aiAutomationAccordion',

            'faqs' => [

                [
                    'question' => 'What are AI & Automation Services?',
                    'answer' => 'AI & Automation Services use advanced technologies such as Artificial Intelligence and Machine Learning to automate repetitive tasks, analyze data, and improve business processes. These services help organizations increase efficiency, reduce manual work, and make smarter decisions.'
                ],

                [
                    'question' => 'What types of AI and automation solutions do you offer?',
                    'answer' => [
                        '',
                        [
                            'Intelligent Process Automation',
                            'AI Chatbot Development',
                            'Workflow Automation',
                            'Predictive Analytics',
                            'AI-Based Data Processing',
                            'Robotic Process Automation (RPA)',
                            'AI Integration with Business Systems'
                        ]
                    ]
                ],

                [
                    'question' => 'How can AI help businesses improve efficiency?',
                    'answer' => 'AI can analyze large datasets, automate routine tasks, and provide insights that help businesses make faster and more accurate decisions. Automation also reduces human errors and increases productivity.'
                ],

                [
                    'question' => 'What is Robotic Process Automation (RPA)?',
                    'answer' => 'Robotic Process Automation uses software robots (bots) to automate repetitive tasks such as data entry, report generation, and workflow management across business systems.'
                ],

                [
                    'question' => 'Do you develop AI chatbots for businesses?',
                    'answer' => 'Yes. We create intelligent chatbots that can answer customer questions, provide support, and automate customer interactions on websites, apps, and messaging platforms.'
                ],

                [
                    'question' => 'Which technologies are used for AI development?',
                    'answer' => [
                        '',
                        [
                            'TensorFlow',
                            'PyTorch',
                            'OpenAI API'
                        ]
                    ]
                ],

                [
                    'question' => 'Can AI integrate with existing business systems?',
                    'answer' => 'Yes. AI solutions can integrate with existing systems such as CRM, ERP, and data platforms to automate workflows, analyze data, and improve operational efficiency.'
                ],

                [
                    'question' => 'What industries can benefit from AI and automation?',
                    'answer' => [
                        '',
                        [
                            'Healthcare',
                            'Finance and Banking',
                            'E-commerce',
                            'Manufacturing',
                            'Logistics and Supply Chain',
                            'Customer Support'
                        ]
                    ]
                ],

                [
                    'question' => 'Is AI implementation expensive for small businesses?',
                    'answer' => 'AI solutions can be customized based on business needs and budget. Many scalable and cloud-based AI tools make it possible for small and medium businesses to adopt automation affordably.'
                ],

                [
                    'question' => 'Do you provide maintenance and support for AI solutions?',
                    'answer' => 'Yes. We offer ongoing support, performance monitoring, updates, and optimization to ensure AI systems continue delivering accurate and reliable results.'
                ]

            ]
        ],

        "it-support-accordion" => [
            'accordion_id' => 'it_support_Accordion',
            'title' => 'IT Support & Maintenance',
            "collapse_id" => "collapseItSupportAccordion",
            'heading_id' => 'itSupportAccordion',

            'faqs' => [

                [
                    'question' => 'What are IT Support & Maintenance Services?',
                    'answer' => 'IT Support & Maintenance Services help businesses manage, monitor, and maintain their IT systems, networks, and software. These services ensure that systems run smoothly, reduce downtime, and quickly resolve technical issues.'
                ],

                [
                    'question' => 'What services are included in IT support and maintenance?',
                    'answer' => [
                        '',
                        [
                            'System Monitoring and Troubleshooting',
                            'Network Support and Management',
                            'Software Updates and Patch Management',
                            'Hardware Maintenance',
                            'Data Backup and Recovery',
                            'Security Monitoring and Threat Prevention',
                            'Helpdesk and Technical Support'
                        ]
                    ]
                ],

                [
                    'question' => 'Why are IT support services important for businesses?',
                    'answer' => 'IT support services help businesses maintain stable and secure technology infrastructure, minimize downtime, protect data, and ensure employees can work efficiently without technical interruptions.'
                ],

                [
                    'question' => 'Do you provide remote IT support?',
                    'answer' => 'Yes. We offer remote technical support using secure tools that allow our experts to diagnose and resolve issues quickly without needing an on-site visit.'
                ],

                [
                    'question' => 'What is proactive IT maintenance?',
                    'answer' => 'Proactive IT maintenance involves regularly monitoring systems, updating software, and identifying potential issues before they cause major problems. This approach helps prevent downtime and improves overall system performance.'
                ],

                [
                    'question' => 'Do you provide cloud system support?',
                    'answer' => 'Yes. We support cloud environments hosted on platforms like Amazon Web Services, Microsoft Azure, and Google Cloud Platform.'
                ],

                [
                    'question' => 'How quickly can IT issues be resolved?',
                    'answer' => 'Resolution time depends on the complexity of the issue. Simple problems can often be resolved within minutes, while more complex technical issues may require additional troubleshooting time.'
                ],

                [
                    'question' => 'Do you provide data backup and disaster recovery services?',
                    'answer' => 'Yes. We implement secure backup solutions and disaster recovery plans to ensure your business data is protected and can be restored quickly in case of hardware failures or cyber incidents.'
                ],

                [
                    'question' => 'Can you maintain both hardware and software systems?',
                    'answer' => 'Yes. Our IT support covers both hardware devices (servers, computers, networking equipment) and software systems (applications, operating systems, and databases).'
                ],

                [
                    'question' => 'Do you offer ongoing IT support contracts?',
                    'answer' => 'Yes. We provide flexible IT support and maintenance plans that include regular monitoring, updates, security checks, and technical assistance to keep your IT infrastructure running efficiently.'
                ]

            ]
        ],

        "blockchain-accordion" => [
            'accordion_id' => 'blockchain_Accordion',
            'title' => 'Blockchain Development',
            "collapse_id" => "collapseBlockchainAccordion",
            'heading_id' => 'blockchainAccordion',

            'faqs' => [

                [
                    'question' => 'What is Blockchain Development?',
                    'answer' => 'Blockchain Development involves creating decentralized applications and systems using Blockchain. It enables secure, transparent, and tamper-proof transactions without relying on a central authority.'
                ],

                [
                    'question' => 'What services are included in blockchain development?',
                    'answer' => [
                        '',
                        [
                            'Smart Contract Development',
                            'Decentralized Application (DApp) Development',
                            'Blockchain Consulting',
                            'Portfolio Websites',
                            'Cryptocurrency Wallet Development',
                            'NFT Marketplace Development',
                            'Private and Public Blockchain Solutions'
                        ]
                    ]
                ],

                [
                    'question' => 'Which blockchain platforms do you work with?',
                    'answer' => [
                        '',
                        [
                            'Ethereum',
                            'Polygon',
                            'Binance Smart Chain',
                            'Solana'
                        ]
                    ]
                ],

                [
                    'question' => 'What is a smart contract?',
                    'answer' => 'A smart contract is a self-executing digital contract where the terms are written directly into code and stored on a blockchain. These contracts automatically execute actions when predefined conditions are met.'
                ],

                [
                    'question' => 'What are decentralized applications (DApps)?',
                    'answer' => 'DApps are applications that run on a blockchain network instead of centralized servers. They offer higher transparency, security, and control for users.'
                ],

                [
                    'question' => 'How secure is blockchain technology?',
                    'answer' => 'Blockchain is highly secure because data is stored across multiple nodes and protected using Cryptography. This makes it extremely difficult for hackers to alter transaction records.'
                ],

                [
                    'question' => 'Which industries benefit from blockchain development?',
                    'answer' => [
                        '',
                        [
                            'Finance and Banking',
                            'Supply Chain Management',
                            'Healthcare',
                            'Real Estate',
                            'E-commerce',
                            'Digital Identity Management'
                        ]
                    ]
                ],

                [
                    'question' => 'Can blockchain integrate with existing systems?',
                    'answer' => 'Yes. Blockchain solutions can be integrated with existing applications, databases, and enterprise systems to enhance security, transparency, and automation.'
                ],

                [
                    'question' => 'What is the cost of blockchain development?',
                    'answer' => 'The cost depends on project complexity, features, blockchain platform, and development time. Simple blockchain solutions cost less, while large decentralized platforms require more investment.'
                ],

                [
                    'question' => 'Do you provide blockchain consulting and support?',
                    'answer' => 'Yes. We provide blockchain consulting, development, deployment, and ongoing maintenance to help businesses adopt blockchain technology effectively.'
                ]

            ]
        ]

    ];

    return $faqSections;
}
?>