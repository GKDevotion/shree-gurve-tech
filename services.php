<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'IT Services – Web Development, Software, Mobile Apps & More | Shree Gurve Technology';
$pageDesc      = 'Explore all IT services by Shree Gurve Technology: web development, software development, mobile app development, UI/UX design, digital marketing, cloud services, cybersecurity, AI automation, and more.';
$pageKeywords  = 'IT services Surat, web development services India, software development company, mobile app development Gujarat, digital marketing SEO, cloud services, cybersecurity, AI automation';
$pageCanonical = 'https://shreegurvetech.com/services';
$currentPage   = 'services';

$faqSchema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        ["@type"=>"Question","name"=>"What IT services does Shree Gurve Technology offer?",
         "acceptedAnswer"=>["@type"=>"Answer","text"=>"Shree Gurve Technology offers 12+ IT services including web development, software development, mobile app development, UI/UX design, digital marketing, cloud services, cybersecurity, data analytics, AI & automation, IT consulting, blockchain development, and IT support & maintenance."]],
        ["@type"=>"Question","name"=>"Do you offer custom software development?",
         "acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. We specialize in custom software development tailored to your specific business processes — including CRM, ERP, HRMS, inventory management systems, and industry-specific platforms."]],
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json"><?= $faqSchema ?></script>

<!-- Page Hero -->
<section class="page-hero" aria-label="Services Page Header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Our IT Services</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">12+ professional IT services crafted to help your business grow, scale, and compete in the digital era.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section-py" aria-label="All Services">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-7">
                <div class="section-label d-inline-flex">What We Offer</div>
                <h2 class="section-title">Comprehensive IT Services <span>Under One Roof</span></h2>
                <p class="section-subtitle mx-auto">From idea to launch and beyond — we provide end-to-end technology services that fuel business growth and digital transformation.</p>
            </div>
        </div>

        <div class="row g-4">
            <?php
            $services = [
                ['icon'=>'bi-globe2',         'num'=>'01','title'=>'Web Development',          'slug'=>'web-development',
                 'desc'=>'Responsive, SEO-optimized websites and web applications built with modern technologies. From corporate sites to complex web portals.',
                 'tags'=>['PHP','Laravel','React','MySQL','Bootstrap 5']],
                ['icon'=>'bi-code-slash',     'num'=>'02','title'=>'Software Development',     'slug'=>'software-development',
                 'desc'=>'Custom software solutions tailored to your business workflows — ERP, CRM, billing systems, automation tools, and industry-specific platforms.',
                 'tags'=>['PHP 8.3','Python','APIs','Microservices']],
                ['icon'=>'bi-phone',          'num'=>'03','title'=>'Mobile App Development',  'slug'=>'mobile-app-development',
                 'desc'=>'Cross-platform and native mobile applications for iOS and Android that deliver seamless, engaging user experiences.',
                 'tags'=>['Flutter','React Native','iOS','Android']],
                ['icon'=>'bi-palette',        'num'=>'04','title'=>'UI/UX Design',             'slug'=>'ui-ux-design',
                 'desc'=>'User-centric interface design that combines aesthetics with functionality — wireframes, prototypes, design systems, and usability testing.',
                 'tags'=>['Figma','Adobe XD','Prototyping','Research']],
                ['icon'=>'bi-graph-up-arrow', 'num'=>'05','title'=>'Digital Marketing',       'slug'=>'digital-marketing',
                 'desc'=>'Data-driven digital marketing strategies including SEO, PPC, social media marketing, content marketing, and email campaigns.',
                 'tags'=>['SEO','Google Ads','Meta Ads','Content']],
                ['icon'=>'bi-cloud-check',    'num'=>'06','title'=>'Cloud Services',           'slug'=>'cloud-services',
                 'desc'=>'Secure, scalable cloud infrastructure setup, migration, and management on AWS, Google Cloud, and Microsoft Azure.',
                 'tags'=>['AWS','GCP','Azure','DevOps','Docker']],
                ['icon'=>'bi-shield-check',   'num'=>'07','title'=>'Cybersecurity',            'slug'=>'cyber-security-services',
                 'desc'=>'Protect your digital assets with comprehensive security audits, penetration testing, vulnerability assessments, and enterprise security solutions.',
                 'tags'=>['Pen Testing','SSL','Firewall','Compliance']],
                ['icon'=>'bi-bar-chart-line', 'num'=>'08','title'=>'Data & Analytics',        'slug'=>'data-analytics',
                 'desc'=>'Transform raw data into actionable insights with business intelligence dashboards, data pipelines, and predictive analytics solutions.',
                 'tags'=>['Power BI','Python','SQL','Tableau']],
                ['icon'=>'bi-robot',          'num'=>'09','title'=>'AI & Automation',         'slug'=>'ai-automation',
                 'desc'=>'Intelligent automation and AI-powered solutions — chatbots, workflow automation, machine learning models, and AI integration.',
                 'tags'=>['OpenAI','Python','n8n','Zapier','ML']],
                ['icon'=>'bi-briefcase',      'num'=>'10','title'=>'IT Consulting',            'slug'=>'it-consulting-services',
                 'desc'=>'Strategic IT advisory services — technology roadmaps, digital transformation planning, system architecture, and vendor selection guidance.',
                 'tags'=>['Strategy','Architecture','Advisory','CTO-as-a-service']],
                ['icon'=>'bi-tools',          'num'=>'11','title'=>'IT Support & Maintenance', 'slug'=>'it-support-maintenance',
                 'desc'=>'Reliable ongoing technical support, server monitoring, performance optimization, security updates, and feature enhancements.',
                 'tags'=>['24/7 Support','AMC','Monitoring','Updates']],
                ['icon'=>'bi-link-45deg',     'num'=>'12','title'=>'Blockchain Development',  'slug'=>'blockchain-development',
                 'desc'=>'Decentralized applications (dApps), smart contracts, NFT platforms, token development, and blockchain integration for modern businesses.',
                 'tags'=>['Solidity','Web3','Ethereum','Smart Contracts']],
            ];
            foreach ($services as $i => $svc): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                    <div class="service-card h-100">
                        <span class="service-num" aria-hidden="true"><?= $svc['num'] ?></span>
                        <div class="service-icon">
                            <i class="bi <?= $svc['icon'] ?>"></i>
                        </div>
                        <h3 style="font-size:1.05rem;font-weight:700;margin-bottom:10px;"><?= htmlspecialchars($svc['title']) ?></h3>
                        <p style="font-size:0.85rem;margin-bottom:16px;"><?= htmlspecialchars($svc['desc']) ?></p>
                        <div class="d-flex flex-wrap gap-1 mb-16" style="margin-bottom:16px;">
                            <?php foreach ($svc['tags'] as $tag): ?>
                                <span class="badge-pill" style="font-size:0.7rem;padding:3px 10px;"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="/service-details/<?= htmlspecialchars($svc['slug']) ?>" class="service-link" aria-label="Learn more about <?= htmlspecialchars($svc['title']) ?>">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Our Services -->
<section class="section-py bg-gray-light" aria-label="Why Choose Our Services">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">Our Advantage</div>
                <h2 class="section-title">Why Our Services <span>Stand Out</span></h2>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $advantages = [
                ['icon'=>'bi-lightning-charge-fill','title'=>'Fast Delivery',        'desc'=>'Agile sprints and efficient workflows ensure your project ships on time without compromising quality.'],
                ['icon'=>'bi-currency-rupee',       'title'=>'Cost-Effective',       'desc'=>'Enterprise-quality solutions at startup-friendly prices. We optimize for value, not just cost.'],
                ['icon'=>'bi-patch-check-fill',     'title'=>'Quality Assured',      'desc'=>'Every project undergoes thorough QA testing before launch. We don\'t ship bugs — we fix them.'],
                ['icon'=>'bi-headset',              'title'=>'Dedicated Support',    'desc'=>'A dedicated project manager and support team available throughout and after project delivery.'],
                ['icon'=>'bi-arrow-repeat',         'title'=>'Scalable Solutions',   'desc'=>'Built to grow with your business. Our architectures handle 10 users or 10 million users.'],
                ['icon'=>'bi-lock-fill',            'title'=>'Secure by Default',    'desc'=>'Security isn\'t an add-on. Every solution is built with security best practices from day one.'],
            ];
            foreach ($advantages as $i => $a): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                    <div class="strip-card text-center">
                        <div class="strip-icon"><i class="bi <?= $a['icon'] ?>"></i></div>
                        <h5><?= htmlspecialchars($a['title']) ?></h5>
                        <p><?= htmlspecialchars($a['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services FAQs -->
<section class="faq-section section-py" aria-label="Services FAQs">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">FAQs</div>
                <h2 class="section-title">Services <span>FAQs</span></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="servicesFAQ">
                    <?php
                    $faqs = [
                        ['q'=>'Do you offer custom software development?',
                         'a'=>'Yes. We specialize in building fully custom software tailored to your specific business requirements — from CRM and ERP systems to industry-specific platforms and internal tools.'],
                        ['q'=>'Can you work on an existing project or only new ones?',
                         'a'=>'We handle both. We can take over, improve, or scale an existing codebase, or start a fresh project from scratch. We begin with a thorough technical audit of existing systems.'],
                        ['q'=>'What is your development methodology?',
                         'a'=>'We follow an Agile/Scrum methodology with 1-2 week sprints. You receive regular updates, demos, and have full visibility into project progress at all times.'],
                        ['q'=>'Do you sign NDAs and provide source code?',
                         'a'=>'Absolutely. We sign NDAs before any project discussion. Upon completion and final payment, you receive full ownership of the source code, documentation, and all project assets.'],
                        ['q'=>'Can you handle large enterprise projects?',
                         'a'=>'Yes. We have experience delivering enterprise-scale solutions. For larger projects, we assemble dedicated teams and use enterprise-grade technologies and infrastructure.'],
                        ['q'=>'Do you offer post-launch maintenance?',
                         'a'=>'Yes. We offer flexible Annual Maintenance Contracts (AMC) covering bug fixes, security patches, performance monitoring, and minor feature updates to keep your solution running perfectly.'],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                            <h3 class="accordion-header">
                                <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#sfaq<?= $i ?>">
                                    <?= htmlspecialchars($faq['q']) ?>
                                </button>
                            </h3>
                            <div id="sfaq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#servicesFAQ">
                                <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="Call to Action">
    <div class="container text-center" data-aos="zoom-in">
        <h2 class="section-title mb-3" style="color:var(--white);font-size:clamp(1.6rem,3vw,2.4rem);">
            Need a Custom IT Solution? <span style="color:var(--accent)">Let's Talk!</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:540px;margin:0 auto 32px;">
            Tell us about your project and we'll provide a free consultation and detailed proposal within 24 hours.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Get a Free Quote</a>
            <a href="tel:+918200017181" class="btn btn-outline-light btn-lg">
                <i class="bi bi-telephone-fill me-2"></i>+91 82000 17181
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
