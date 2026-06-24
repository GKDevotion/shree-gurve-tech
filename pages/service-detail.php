<?php
require_once __DIR__ . '/../config.php';

// Get service slug from URL
$slug = basename($_SERVER['REQUEST_URI']);
$slug = preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));

// All service definitions
$servicesData = [
    'web-development' => [
        'title'       => 'Web Development',
        'icon'        => 'bi-globe2',
        'tagline'     => 'Fast, Responsive & SEO-Optimized Websites Built to Convert',
        'description' => 'We design and develop high-performance websites and web applications that look stunning, load fast, and rank well on search engines. From landing pages to full-scale web portals, our development team uses modern technologies to deliver solutions that drive real business results.',
        'features'    => [
            'Fully responsive design for all devices (mobile, tablet, desktop)',
            'SEO-optimized structure, semantic HTML, and fast loading (Core Web Vitals)',
            'Secure PHP 8.3 backend with PDO and prepared statements',
            'Custom CMS integration or headless WordPress/Laravel',
            'E-commerce functionality with payment gateway integration',
            'Progressive Web App (PWA) capabilities',
            'SSL security, GDPR compliance, and performance optimization',
            'Cross-browser compatible and accessibility-friendly (WCAG 2.1)',
        ],
        'tech'        => ['PHP 8.3', 'Laravel', 'React.js', 'Vue.js', 'MySQL', 'Bootstrap 5', 'WordPress', 'Next.js'],
        'deliverables'=> ['Complete source code', 'Admin panel/CMS', 'Technical documentation', 'SEO setup', '3-month support'],
        'timeline'    => '2–8 Weeks',
        'faqs'        => [
            ['q'=>'Will my website be mobile-friendly?','a'=>'Yes, absolutely. All websites we build are fully responsive, adapting perfectly to mobile, tablet, and desktop screens. We follow a mobile-first design approach.'],
            ['q'=>'Can you redesign my existing website?','a'=>'Yes. We specialize in website redesigns — improving UI/UX, performance, SEO, and adding new features while preserving or migrating your existing content.'],
            ['q'=>'Will the website be SEO-ready?','a'=>'Yes. Every website is built with SEO best practices: fast loading, semantic HTML, schema markup, meta tags, sitemap, and clean URL structure.'],
            ['q'=>'Do I get to own the website files?','a'=>'Yes. Upon final payment, you receive 100% ownership of all source code, assets, database, and documentation.'],
            ['q'=>'What is included in post-launch support?','a'=>'Our standard post-launch support includes 3 months of bug fixes, minor adjustments, and technical assistance. Extended maintenance plans are also available.'],
        ],
    ],
    'software-development' => [
        'title'       => 'Software Development',
        'icon'        => 'bi-code-slash',
        'tagline'     => 'Custom Software Solutions Built for Your Exact Business Needs',
        'description' => 'Generic software rarely fits your business perfectly. We build fully custom software solutions — from internal business tools to enterprise-scale platforms — that automate processes, reduce costs, and improve operational efficiency.',
        'features'    => [
            'Custom web-based software for all business sizes',
            'ERP, CRM, HRMS, and inventory management systems',
            'RESTful API development and third-party integrations',
            'Multi-user systems with role-based access control (RBAC)',
            'Real-time dashboards and reporting modules',
            'Automated workflows and business process automation',
            'Legacy system migration and modernization',
            'Microservices architecture for scalable applications',
        ],
        'tech'        => ['PHP 8.3', 'Laravel', 'Python', 'Node.js', 'MySQL', 'PostgreSQL', 'Redis', 'Docker'],
        'deliverables'=> ['Full source code', 'Admin dashboard', 'API documentation', 'User manual', 'Deployment support', '3-month warranty'],
        'timeline'    => '4–16 Weeks',
        'faqs'        => [
            ['q'=>'What type of software can you build?','a'=>'We build all types of business software: ERP systems, CRM platforms, HRMS, inventory managers, booking systems, billing software, project management tools, and more.'],
            ['q'=>'Can the software integrate with our existing tools?','a'=>'Yes. We build robust API integrations with popular tools like Tally, Zoho, Razorpay, payment gateways, SMS gateways, and any system that provides an API.'],
            ['q'=>'How do you handle data security?','a'=>'All software is built with security-first principles: encrypted data storage, role-based access control, audit logs, CSRF protection, SQL injection prevention, and HTTPS enforcement.'],
            ['q'=>'Can we add more features after launch?','a'=>'Absolutely. We design software with scalability in mind. New features and modules can be added at any time through our maintenance and enhancement packages.'],
            ['q'=>'Do you provide user training?','a'=>'Yes. We provide comprehensive user training sessions (online or in-person) and detailed user manuals to ensure your team can confidently use the new software.'],
        ],
    ],
    'mobile-app-development' => [
        'title'       => 'Mobile App Development',
        'icon'        => 'bi-phone',
        'tagline'     => 'iOS & Android Apps That Users Love to Use',
        'description' => 'We design and develop high-performance mobile applications for iOS and Android platforms. Whether you need a consumer-facing app or an enterprise mobile solution, we deliver apps that are intuitive, fast, and built to scale.',
        'features'    => [
            'Cross-platform development with Flutter (single codebase, both platforms)',
            'Native iOS (Swift) and Android (Kotlin) development',
            'Intuitive UI/UX following platform design guidelines',
            'Offline functionality with local data sync',
            'Push notifications and in-app messaging',
            'Payment gateway and subscription integration',
            'App Store and Google Play Store submission',
            'Analytics integration and performance monitoring',
        ],
        'tech'        => ['Flutter', 'React Native', 'Swift', 'Kotlin', 'Firebase', 'Node.js APIs', 'MySQL', 'REST APIs'],
        'deliverables'=> ['App source code', 'App Store/Play Store submission', 'Backend API', 'Documentation', '3-month support'],
        'timeline'    => '6–16 Weeks',
        'faqs'        => [
            ['q'=>'Should I build a native or cross-platform app?','a'=>'For most businesses, Flutter (cross-platform) is the best choice — it delivers near-native performance for both iOS and Android from a single codebase, significantly reducing cost and development time.'],
            ['q'=>'Can you update my existing mobile app?','a'=>'Yes. We can take over, update, optimize, or add features to your existing iOS or Android app regardless of the original technology used.'],
            ['q'=>'Do you help publish the app to app stores?','a'=>'Yes. We handle the complete App Store (Apple) and Google Play Store submission process, including store listing optimization, screenshots, and compliance review.'],
            ['q'=>'Will the app work offline?','a'=>'Yes, if required. We can build offline-first mobile apps with local data storage and background sync that function even without an internet connection.'],
            ['q'=>'How do you monetize mobile apps?','a'=>'We support all major monetization models: paid downloads, in-app purchases, subscription plans, freemium, and ad-based monetization with appropriate SDK integrations.'],
        ],
    ],
    'digital-marketing' => [
        'title'       => 'Digital Marketing',
        'icon'        => 'bi-graph-up-arrow',
        'tagline'     => 'Data-Driven Marketing That Grows Your Business Online',
        'description' => 'Our digital marketing services help businesses increase online visibility, attract qualified leads, and grow revenue. We combine SEO, paid advertising, social media, and content strategies to deliver measurable, sustainable results.',
        'features'    => [
            'Search Engine Optimization (SEO) — on-page, off-page, and technical',
            'Google Ads and Meta Ads (Facebook/Instagram) management',
            'Social media marketing and community management',
            'Content marketing — blogs, videos, infographics',
            'Email marketing campaigns and automation',
            'GEO targeting and local SEO for India markets',
            'AEO (Answer Engine Optimization) for AI search engines',
            'Monthly performance reports with actionable insights',
        ],
        'tech'        => ['Google Analytics 4', 'Google Search Console', 'Semrush', 'Meta Business Suite', 'Mailchimp', 'HubSpot'],
        'deliverables'=> ['Marketing strategy document', 'Monthly performance reports', 'Campaign creatives', 'SEO audit report', 'Keyword research'],
        'timeline'    => 'Ongoing (Monthly retainer)',
        'faqs'        => [
            ['q'=>'How long does it take to see SEO results?','a'=>'SEO is a long-term investment. Most clients start seeing noticeable improvements in 3-6 months, with significant results in 6-12 months. Paid advertising can drive immediate traffic from day one.'],
            ['q'=>'What is AEO and why does it matter?','a'=>'Answer Engine Optimization (AEO) optimizes your content for AI-powered search tools like Google SGE, ChatGPT, Perplexity, and voice assistants. It is increasingly important as AI-driven search grows.'],
            ['q'=>'Do you manage social media accounts?','a'=>'Yes. We offer full social media management — content creation, scheduling, community engagement, and paid advertising on Facebook, Instagram, LinkedIn, YouTube, and more.'],
            ['q'=>'How do you measure marketing success?','a'=>'We track key metrics: organic traffic, keyword rankings, conversion rate, cost per lead, ROAS (Return on Ad Spend), and business revenue impact. Monthly reports are provided for full transparency.'],
            ['q'=>'Can you run ads for a small budget?','a'=>'Yes. We work with budgets of all sizes. We help you allocate budget efficiently to maximize ROI, often starting with Google Ads or Meta Ads for the fastest return.'],
        ],
    ],
    'ui-ux-design' => [
        'title'       => 'UI/UX Design',
        'icon'        => 'bi-palette',
        'tagline'     => 'Beautiful, Intuitive Designs That Users Love and Businesses Trust',
        'description' => 'Great design is more than aesthetics — it\'s about creating experiences that guide users naturally toward their goals. Our UI/UX team combines user research, design thinking, and pixel-perfect execution to create interfaces that convert.',
        'features'    => [
            'User research and persona development',
            'Information architecture and user flow mapping',
            'Wireframing and low-fidelity prototyping',
            'High-fidelity UI design in Figma',
            'Interactive prototype for stakeholder review',
            'Design system and component library creation',
            'Usability testing and iterative improvement',
            'Developer-ready design handoff with assets',
        ],
        'tech'        => ['Figma', 'Adobe XD', 'Adobe Illustrator', 'Photoshop', 'InVision', 'Zeplin', 'Maze'],
        'deliverables'=> ['Figma design files', 'Interactive prototype', 'Design system', 'Asset export package', 'Style guide'],
        'timeline'    => '2–6 Weeks',
        'faqs'        => [
            ['q'=>'What is the difference between UI and UX design?','a'=>'UX (User Experience) focuses on how a product feels and how users navigate it — the logic and flow. UI (User Interface) focuses on how it looks — colors, typography, buttons, and visual elements. We deliver both together.'],
            ['q'=>'Do I get editable design files?','a'=>'Yes. You receive all editable Figma files with organized layers, components, and a full style guide so your development team or future designers can work with them easily.'],
            ['q'=>'Can you design for mobile and web?','a'=>'Yes. We design for all screen sizes: mobile (iOS/Android), tablet, and desktop web. All designs are responsive and follow platform-specific guidelines.'],
            ['q'=>'Do you conduct user testing?','a'=>'Yes. We offer usability testing sessions with real users to validate designs before development begins, identifying and fixing usability issues early.'],
            ['q'=>'Can you work with our existing brand guidelines?','a'=>'Absolutely. We respect and work within your existing brand identity — colors, typography, logo usage — while enhancing the user experience.'],
        ],
    ],
    'cyber-security-services' => [
        'title'       => 'Cybersecurity Services',
        'icon'        => 'bi-shield-check',
        'tagline'     => 'Enterprise-Grade Security to Protect Your Digital Business',
        'description' => 'Cyber threats are evolving every day. Our cybersecurity services help businesses identify vulnerabilities, implement protective measures, and respond to threats before they cause harm. We make security proactive, not reactive.',
        'features'    => [
            'Website and web application security audits',
            'Penetration testing (ethical hacking)',
            'Vulnerability assessment and reporting',
            'SSL/TLS certificate setup and management',
            'Firewall configuration and intrusion detection',
            'Data encryption and secure data storage',
            'GDPR, PCI-DSS, and ISO 27001 compliance guidance',
            'Security awareness training for teams',
        ],
        'tech'        => ['OWASP Top 10', 'Burp Suite', 'Nessus', 'Kali Linux', 'Cloudflare WAF', 'Let\'s Encrypt', 'Fail2Ban'],
        'deliverables'=> ['Security audit report', 'Vulnerability list with severity', 'Remediation plan', 'Security hardening guide', 'Compliance checklist'],
        'timeline'    => '1–3 Weeks (audit) | Ongoing (monitoring)',
        'faqs'        => [
            ['q'=>'What is a penetration test?','a'=>'A penetration test (pen test) is an authorized simulated cyberattack on your system to identify security weaknesses before real attackers find them. We use ethical hacking tools and techniques to expose vulnerabilities.'],
            ['q'=>'How often should security audits be done?','a'=>'We recommend a comprehensive security audit at least once per year, and after any major system changes. Continuous monitoring is ideal for high-risk systems.'],
            ['q'=>'Can you help us achieve GDPR compliance?','a'=>'Yes. We provide GDPR compliance assessment, data mapping, privacy policy templates, consent mechanisms, and technical controls to help your business meet regulatory requirements.'],
            ['q'=>'What do you do if you find a critical vulnerability?','a'=>'We immediately notify you with a detailed report and severity classification. For critical vulnerabilities, we offer emergency remediation services to fix issues as fast as possible.'],
            ['q'=>'Do you monitor systems 24/7?','a'=>'Yes. Our managed security monitoring service provides 24/7 real-time alerts for suspicious activity, unauthorized access attempts, and anomaly detection.'],
        ],
    ],
    'cloud-services' => [
        'title'       => 'Cloud Services',
        'icon'        => 'bi-cloud-check',
        'tagline'     => 'Scalable, Secure Cloud Infrastructure for Modern Businesses',
        'description' => 'Move to the cloud with confidence. Our cloud services team designs, migrates, and manages cloud infrastructure on AWS, Google Cloud, and Microsoft Azure — helping businesses reduce costs, improve reliability, and scale on demand.',
        'features'    => [
            'Cloud infrastructure design and setup (AWS, GCP, Azure)',
            'On-premise to cloud migration with zero downtime',
            'Containerization with Docker and Kubernetes orchestration',
            'CI/CD pipeline setup for automated deployments',
            'Auto-scaling groups for traffic spike handling',
            'Cloud cost optimization and resource monitoring',
            'Database management (RDS, Cloud SQL, Managed MySQL)',
            'Backup, disaster recovery, and business continuity planning',
        ],
        'tech'        => ['AWS', 'Google Cloud', 'Azure', 'Docker', 'Kubernetes', 'Terraform', 'Jenkins', 'GitHub Actions'],
        'deliverables'=> ['Cloud architecture diagram', 'Migration plan', 'Infrastructure setup', 'Monitoring dashboard', 'Documentation', '1-month support'],
        'timeline'    => '2–6 Weeks (migration) | Ongoing (management)',
        'faqs'        => [
            ['q'=>'Which cloud platform should I choose — AWS, GCP, or Azure?','a'=>'It depends on your needs. AWS is the most mature with the widest service range. Google Cloud excels in data and AI/ML. Azure integrates best with Microsoft products. We help you evaluate and choose the right platform.'],
            ['q'=>'Can you migrate our existing server to the cloud?','a'=>'Yes. We plan and execute complete cloud migrations with minimal downtime, including application migration, database migration, DNS cutover, and post-migration testing.'],
            ['q'=>'How do you keep cloud costs under control?','a'=>'We implement cost optimization strategies including right-sizing instances, reserved instances, auto-scaling, unused resource cleanup, and cost anomaly alerts. Most clients save 20-40% on cloud bills.'],
            ['q'=>'Is our data safe in the cloud?','a'=>'Yes. Cloud providers like AWS and GCP offer enterprise-grade physical security. We additionally implement encryption, access controls, VPCs, and compliance measures for your data.'],
            ['q'=>'Do you provide ongoing cloud management?','a'=>'Yes. We offer managed cloud services covering monitoring, maintenance, security patching, performance optimization, backups, and incident response on a monthly retainer basis.'],
        ],
    ],
    'ai-automation' => [
        'title'       => 'AI & Automation',
        'icon'        => 'bi-robot',
        'tagline'     => 'Intelligent Automation That Works While You Sleep',
        'description' => 'Harness the power of artificial intelligence and automation to eliminate repetitive tasks, make smarter decisions, and create competitive advantages. From chatbots to ML models, we help businesses integrate AI practically and profitably.',
        'features'    => [
            'AI chatbot development (customer support, lead gen)',
            'Business process automation with n8n and Zapier',
            'OpenAI/GPT integration for content and analysis',
            'Machine learning models for prediction and classification',
            'Document processing automation (OCR, data extraction)',
            'Automated reporting and business intelligence',
            'Voice AI and natural language processing (NLP)',
            'AI-powered recommendation engines',
        ],
        'tech'        => ['Python', 'OpenAI GPT-4', 'LangChain', 'n8n', 'TensorFlow', 'Scikit-learn', 'Zapier', 'Make (Integromat)'],
        'deliverables'=> ['Automation workflows', 'AI model or integration', 'API documentation', 'Testing report', '3-month support'],
        'timeline'    => '3–10 Weeks',
        'faqs'        => [
            ['q'=>'What kind of tasks can AI automate for my business?','a'=>'AI can automate customer support (chatbots), data entry, invoice processing, report generation, lead qualification, email responses, inventory forecasting, and many other repetitive or data-driven tasks.'],
            ['q'=>'Do I need a large dataset to use AI?','a'=>'Not necessarily. Many AI solutions use pre-trained models (like GPT-4) that require minimal training data. For custom ML models, we help you assess what data you have and what you need.'],
            ['q'=>'How much can automation reduce my operational costs?','a'=>'Most clients see 20-60% reduction in time spent on automated tasks, translating directly to cost savings. We provide an ROI estimate before any project begins.'],
            ['q'=>'Is AI integration expensive?','a'=>'It depends on complexity. Simple automations and chatbot integrations can start from a few thousand rupees. Complex custom ML models require more investment but typically deliver strong ROI.'],
            ['q'=>'Can AI integrate with our existing software?','a'=>'Yes. We specialize in integrating AI capabilities with existing business software via APIs — including ERPs, CRMs, e-commerce platforms, and communication tools.'],
        ],
    ],
    'it-consulting-services' => [
        'title'       => 'IT Consulting',
        'icon'        => 'bi-briefcase',
        'tagline'     => 'Strategic Technology Guidance for Smarter Business Decisions',
        'description' => 'Not sure which technology to invest in? Our IT consulting services provide clear, unbiased guidance to help you make smart technology decisions. From IT strategy and digital transformation roadmaps to vendor selection and system architecture — we\'ve got you covered.',
        'features'    => [
            'IT strategy development and digital transformation roadmap',
            'Technology stack selection and vendor evaluation',
            'System architecture design and technical review',
            'IT audit and gap analysis',
            'CTO-as-a-Service for startups and SMBs',
            'Software procurement advisory',
            'IT project rescue and turnaround',
            'Technology due diligence for investors',
        ],
        'tech'        => ['TOGAF', 'ITIL', 'Agile', 'Scrum', 'AWS Well-Architected Framework', 'ISO 27001', 'GDPR'],
        'deliverables'=> ['IT strategy document', 'Technical assessment report', 'Architecture diagrams', 'Vendor comparison matrix', 'Roadmap presentation'],
        'timeline'    => '1–4 Weeks',
        'faqs'        => [
            ['q'=>'What is CTO-as-a-Service?','a'=>'CTO-as-a-Service provides startups and SMBs access to senior technology leadership on a part-time or fractional basis. We act as your virtual CTO — making technology decisions, managing teams, and guiding technical strategy without the cost of a full-time hire.'],
            ['q'=>'Can you help rescue a failing IT project?','a'=>'Yes. We specialize in IT project rescue — diagnosing why a project has gone off track, creating a recovery plan, and getting it back on schedule and within budget.'],
            ['q'=>'Do you recommend specific technology vendors?','a'=>'Yes, but always based on your unique needs — not commissions. We provide unbiased technology recommendations with detailed pros/cons analysis for each option.'],
            ['q'=>'What is an IT audit?','a'=>'An IT audit is a comprehensive assessment of your current technology systems, processes, and infrastructure to identify gaps, risks, and opportunities for improvement.'],
        ],
    ],
    'data-analytics' => [
        'title'       => 'Data & Analytics',
        'icon'        => 'bi-bar-chart-line',
        'tagline'     => 'Turn Your Data Into Your Most Valuable Business Asset',
        'description' => 'Data without insight is just noise. We help businesses collect, structure, analyze, and visualize data to make faster, smarter decisions. From simple dashboards to complex data pipelines, we make data work for you.',
        'features'    => [
            'Business intelligence (BI) dashboard development',
            'Data pipeline design and ETL processes',
            'Customer analytics and behavior analysis',
            'Sales and revenue analytics',
            'Predictive analytics and demand forecasting',
            'Google Analytics 4 setup and custom reporting',
            'Database optimization and query performance tuning',
            'Data visualization with Power BI, Tableau, or custom solutions',
        ],
        'tech'        => ['Python', 'Power BI', 'Tableau', 'Google Analytics 4', 'BigQuery', 'Apache Airflow', 'PostgreSQL', 'Metabase'],
        'deliverables'=> ['Live dashboard', 'Data model documentation', 'Report templates', 'Training session', 'Ongoing support'],
        'timeline'    => '2–8 Weeks',
        'faqs'        => [
            ['q'=>'What data sources can you connect?','a'=>'We connect to virtually any data source: databases (MySQL, PostgreSQL, MongoDB), cloud storage (S3, GCS), business tools (Shopify, WooCommerce, Tally, Zoho, Salesforce), Google Analytics, and more.'],
            ['q'=>'Do I need a data scientist?','a'=>'Not necessarily for most business intelligence needs. Our data engineers and analysts can deliver the insights you need. For advanced ML models, we have data scientists on our team.'],
            ['q'=>'Can you build real-time dashboards?','a'=>'Yes. We build real-time dashboards that update live using WebSockets, streaming data pipelines, or automated refresh intervals depending on your data update frequency needs.'],
            ['q'=>'Is my data secure during analysis?','a'=>'Absolutely. We follow strict data security protocols, sign NDAs before accessing any data, use encrypted connections, and never share your data with third parties.'],
        ],
    ],
    'it-support-maintenance' => [
        'title'       => 'IT Support & Maintenance',
        'icon'        => 'bi-tools',
        'tagline'     => 'Reliable IT Support So Your Business Never Skips a Beat',
        'description' => 'Technology breaks. Systems slow down. Security vulnerabilities emerge. Our IT support and maintenance services ensure your digital infrastructure runs at peak performance — 24/7, 365 days a year.',
        'features'    => [
            'Annual Maintenance Contracts (AMC) for websites and software',
            '24/7 system monitoring and uptime alerts',
            'Bug fixes and issue resolution with defined SLAs',
            'Security updates and patch management',
            'Performance optimization and database tuning',
            'Server and hosting management',
            'Backup management and disaster recovery',
            'Feature enhancements and minor updates',
        ],
        'tech'        => ['Nagios', 'UptimeRobot', 'New Relic', 'WHM/cPanel', 'AWS CloudWatch', 'Nginx', 'PHP 8.3', 'MySQL'],
        'deliverables'=> ['SLA agreement', 'Monthly status report', 'Incident logs', 'Performance benchmarks', 'Update history'],
        'timeline'    => 'Ongoing (Monthly/Annual AMC)',
        'faqs'        => [
            ['q'=>'What is an AMC (Annual Maintenance Contract)?','a'=>'An AMC is an annual support agreement that covers bug fixes, security patches, performance monitoring, minor updates, and technical support for a fixed monthly or annual fee.'],
            ['q'=>'What are your support response times?','a'=>'Response times depend on your AMC plan — Critical issues: within 2 hours, High priority: within 4 hours, Medium priority: within 8 hours, Low priority: within 24 hours.'],
            ['q'=>'Can you support software built by another company?','a'=>'Yes. We can take over maintenance of software built by any other company. We begin with a technical audit to understand the existing codebase and document it properly.'],
            ['q'=>'Do you provide server management?','a'=>'Yes. We manage Linux and Windows servers, including security hardening, software updates, cPanel/WHM management, and performance tuning.'],
        ],
    ],
    'blockchain-development' => [
        'title'       => 'Blockchain Development',
        'icon'        => 'bi-link-45deg',
        'tagline'     => 'Decentralized Solutions for the Future of Business',
        'description' => 'Blockchain technology is transforming industries. We help businesses leverage decentralized solutions — from smart contracts and NFT platforms to DeFi applications and enterprise blockchain networks.',
        'features'    => [
            'Smart contract development and auditing (Solidity)',
            'NFT marketplace and token development',
            'Decentralized applications (dApps) on Ethereum, Polygon, BSC',
            'DeFi protocol development',
            'Cryptocurrency wallet integration',
            'Blockchain integration for supply chain and traceability',
            'Token launch (ICO/IDO) technical setup',
            'Web3 frontend development',
        ],
        'tech'        => ['Solidity', 'Ethereum', 'Polygon', 'Binance Smart Chain', 'Web3.js', 'Hardhat', 'IPFS', 'MetaMask'],
        'deliverables'=> ['Smart contract source code', 'Security audit report', 'Deployment scripts', 'Frontend dApp', 'Documentation'],
        'timeline'    => '4–12 Weeks',
        'faqs'        => [
            ['q'=>'What blockchain platforms do you develop on?','a'=>'We primarily develop on Ethereum, Polygon (MATIC), and Binance Smart Chain (BSC). We choose the platform based on your project\'s gas fee requirements, speed, and ecosystem needs.'],
            ['q'=>'Do you audit smart contracts?','a'=>'Yes. Smart contract security audits are critical. We provide thorough code reviews to identify vulnerabilities like reentrancy attacks, integer overflows, and access control issues before deployment.'],
            ['q'=>'Can blockchain help my non-crypto business?','a'=>'Yes. Blockchain is valuable beyond crypto — for supply chain transparency, document authentication, digital identity, voting systems, and any use case requiring immutable record-keeping.'],
        ],
    ],
];

// 404 if slug not found
if (!isset($servicesData[$slug])) {
    http_response_code(404);
    header('Location: /services');
    exit;
}

$svc = $servicesData[$slug];

$pageTitle     = $svc['title'] . ' Services in Surat, India | Shree Gurve Technology';
$pageDesc      = $svc['tagline'] . '. Professional ' . $svc['title'] . ' services by Shree Gurve Technology, Surat, India. Get a free quote today.';
$pageKeywords  = strtolower($svc['title']) . ' company India, ' . strtolower($svc['title']) . ' services Surat, professional ' . strtolower($svc['title']) . ', Shree Gurve Technology';
$pageCanonical = 'https://shreegurvetech.com/service-details/' . $slug;
$currentPage   = 'services';

$faqSchema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(fn($f) => [
        "@type" => "Question",
        "name" => $f['q'],
        "acceptedAnswer" => ["@type" => "Answer", "text" => $f['a']]
    ], $svc['faqs'])
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// Service schema
$serviceSchema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => $svc['title'],
    "description" => $svc['tagline'],
    "provider" => ["@type" => "ITService", "name" => "Shree Gurve Technology", "url" => "https://shreegurvetech.com"],
    "areaServed" => "Worldwide",
    "url" => $pageCanonical,
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include __DIR__ . '/../includes/header.php';
?>
<script type="application/ld+json"><?= $faqSchema ?></script>
<script type="application/ld+json"><?= $serviceSchema ?></script>

<!-- Page Hero -->
<section class="page-hero" aria-label="<?= htmlspecialchars($svc['title']) ?> Service Page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9" data-aos="fade-right">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div style="width:56px;height:56px;border-radius:12px;background:rgba(244,98,58,0.2);display:flex;align-items:center;justify-content:center;font-size:1.6rem;color:var(--accent);">
                        <i class="bi <?= htmlspecialchars($svc['icon']) ?>"></i>
                    </div>
                    <div class="badge-pill" style="color:rgba(255,255,255,0.8);border-color:rgba(255,255,255,0.2);background:rgba(255,255,255,0.1);">
                        ⏱ Timeline: <?= htmlspecialchars($svc['timeline']) ?>
                    </div>
                </div>
                <h1 class="page-hero-title"><?= htmlspecialchars($svc['title']) ?></h1>
                <p style="color:rgba(255,255,255,0.75);font-size:1.05rem;margin-bottom:16px;"><?= htmlspecialchars($svc['tagline']) ?></p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/services">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($svc['title']) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Service Detail Content -->
<section class="section-py" aria-label="Service Details">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Overview -->
                <div data-aos="fade-up">
                    <div class="section-label">Service Overview</div>
                    <h2 class="section-title" style="font-size:1.8rem;">What Is Our <span><?= htmlspecialchars($svc['title']) ?></span> Service?</h2>
                    <p style="font-size:1rem;line-height:1.85;color:var(--gray-dark);"><?= htmlspecialchars($svc['description']) ?></p>
                </div>

                <!-- Key Features -->
                <div class="mt-5" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:20px;">Key Features & Deliverables</h3>
                    <div class="row g-3">
                        <?php foreach ($svc['features'] as $i => $feature): ?>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 50 ?>">
                                <div style="display:flex;align-items:flex-start;gap:12px;padding:14px;background:var(--gray-light);border-radius:10px;border:1px solid var(--border);">
                                    <i class="bi bi-check-circle-fill" style="color:var(--accent);margin-top:2px;flex-shrink:0;"></i>
                                    <span style="font-size:0.875rem;font-weight:500;color:var(--dark);"><?= htmlspecialchars($feature) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Technologies -->
                <div class="mt-5" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:16px;">Technologies We Use</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <?php foreach ($svc['tech'] as $tech): ?>
                            <span class="badge-pill"><?= htmlspecialchars($tech) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Deliverables -->
                <div class="mt-5" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:16px;">What You'll Receive</h3>
                    <div class="row g-2">
                        <?php foreach ($svc['deliverables'] as $d): ?>
                            <div class="col-auto">
                                <div style="display:flex;align-items:center;gap:8px;background:var(--primary);color:white;border-radius:8px;padding:8px 16px;font-size:0.8rem;font-weight:600;">
                                    <i class="bi bi-box-seam"></i> <?= htmlspecialchars($d) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- FAQ -->
                <div class="mt-5" id="faqs" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:20px;"><?= htmlspecialchars($svc['title']) ?> — Frequently Asked Questions</h3>
                    <div class="accordion" id="serviceDetailFAQ">
                        <?php foreach ($svc['faqs'] as $i => $faq): ?>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#sdfaq<?= $i ?>">
                                        <?= htmlspecialchars($faq['q']) ?>
                                    </button>
                                </h4>
                                <div id="sdfaq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#serviceDetailFAQ">
                                    <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Quick Quote CTA -->
                <div class="contact-card sticky-top" style="top:100px;" data-aos="fade-left">
                    <div class="text-center mb-4">
                        <div style="width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--electric));color:white;font-size:1.8rem;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
                            <i class="bi <?= htmlspecialchars($svc['icon']) ?>"></i>
                        </div>
                        <h4 style="font-size:1.1rem;">Get a Free Quote</h4>
                        <p style="font-size:0.82rem;color:var(--gray-mid);">Tell us about your <?= htmlspecialchars($svc['title']) ?> project and we'll respond within 2-4 hours.</p>
                    </div>
                    <div id="sidebarFormResult"></div>
                    <form id="sidebarForm" novalidate>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generateCSRFToken()) ?>">
                        <input type="hidden" name="service" value="<?= htmlspecialchars($svc['title']) ?>">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Name *" required minlength="2">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="4" placeholder="Describe your project..." required minlength="20"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            Send Inquiry <i class="bi bi-send-fill ms-2"></i>
                        </button>
                    </form>
                    <div class="mt-3 text-center">
                        <small class="text-muted">Or call us directly:</small><br>
                        <a href="tel:+918200017181" class="fw-700" style="font-size:0.95rem;color:var(--primary);font-weight:700;">
                            <i class="bi bi-telephone-fill me-1"></i>+91 82000 17181
                        </a>
                    </div>
                </div>

                <!-- Other Services -->
                <div class="mt-4" data-aos="fade-left" data-aos-delay="100">
                    <h5 style="font-size:0.85rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--gray-mid);margin-bottom:16px;">Other Services</h5>
                    <?php
                    $otherServices = array_filter($servicesData, fn($k) => $k !== $slug, ARRAY_FILTER_USE_KEY);
                    foreach (array_slice($otherServices, 0, 6, true) as $otherSlug => $other): ?>
                        <a href="/service-details/<?= htmlspecialchars($otherSlug) ?>"
                           style="display:flex;align-items:center;gap:10px;padding:12px;border:1px solid var(--border);border-radius:10px;margin-bottom:8px;font-size:0.85rem;font-weight:600;color:var(--dark);transition:var(--transition);"
                           onmouseover="this.style.borderColor='var(--electric)'"
                           onmouseout="this.style.borderColor='var(--border)'">
                            <i class="bi <?= htmlspecialchars($other['icon']) ?>" style="color:var(--electric);font-size:1.1rem;flex-shrink:0;"></i>
                            <?= htmlspecialchars($other['title']) ?>
                            <i class="bi bi-arrow-right ms-auto" style="color:var(--gray-mid);font-size:0.8rem;"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sidebar Form Handling -->
<script>
document.getElementById('sidebarForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = e.target.querySelector('[type="submit"]');
    const res = document.getElementById('sidebarFormResult');
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending…';
    try {
        const r = await fetch('/contact/submit.php', {
            method: 'POST', body: new FormData(e.target),
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        });
        const d = await r.json();
        res.innerHTML = `<div class="alert alert-${d.success ? 'success' : 'danger'} mb-3">${d.message}</div>`;
        if (d.success) e.target.reset();
    } catch { res.innerHTML = '<div class="alert alert-danger mb-3">Error. Please try again.</div>'; }
    finally { btn.disabled = false; btn.innerHTML = orig; }
});
</script>

<!-- CTA -->
<section class="cta-section" aria-label="Get Started CTA">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="color:white;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:12px;">
            Ready to Start Your <span style="color:var(--accent)"><?= htmlspecialchars($svc['title']) ?></span> Project?
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:520px;margin:0 auto 32px;">Free consultation. No obligation. Just honest advice about how we can help.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Get a Free Quote</a>
            <a href="/services" class="btn btn-outline-light btn-lg">All Services</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
