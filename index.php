<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Shree Gurve Technology – Web Development, Software & IT Services in Surat';
$pageDesc      = 'Shree Gurve Technology is a leading IT solutions company in Surat, India. We deliver web development, software development, mobile apps, UI/UX design, digital marketing & AI automation. Get a free quote today.';
$pageKeywords  = 'web development company Surat, software development India, mobile app development, IT solutions Surat, digital marketing, UI UX design, Shree Gurve Technology';
$pageCanonical = 'https://shreegurvetech.com/';
$currentPage   = 'home';

// Homepage FAQ schema (AEO - Answer Engine Optimization)
$faqSchema = json_encode([
    "@context" => "https://schema.org",
    "@type"    => "FAQPage",
    "mainEntity" => [
        ["@type" => "Question", "name" => "What IT services does Shree Gurve Technology provide?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Shree Gurve Technology provides web development, software development, mobile app development, UI/UX design, digital marketing, cloud services, cybersecurity, AI & automation, and IT consulting services."]],
        ["@type" => "Question", "name" => "Where is Shree Gurve Technology located?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Shree Gurve Technology is located in Surat, Gujarat, India (PIN: 395004). We serve clients worldwide."]],
        ["@type" => "Question", "name" => "How long has Shree Gurve Technology been in business?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Shree Gurve Technology has been delivering IT solutions since 2019, with 6+ years of experience helping startups and enterprises build powerful digital platforms."]],
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json"><?= $faqSchema ?></script>

<!-- ── HERO ───────────────────────────────────────────────── -->
<section class="hero" aria-label="Hero">
    <div class="hero-particles" aria-hidden="true"></div>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="hero-badge">
                    <span class="dot" aria-hidden="true"></span>
                    Trusted IT Partner Since 2019
                </div>
                <h1 class="hero-title">
                    Smart IT Solutions
                    <span class="accent">For Growing</span>
                    <span class="blue">Businesses</span>
                </h1>
                <p class="hero-desc">
                    From web development to AI automation — Shree Gurve Technology delivers reliable, scalable, and innovative digital solutions that power business growth in Surat and worldwide.
                </p>
                <div class="hero-cta">
                    <a href="/contact-us" class="btn btn-primary">
                        Get a Free Quote <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="/services" class="btn-play">
                        <span class="play-icon"><i class="bi bi-grid-3x3-gap-fill"></i></span>
                        Explore Services
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <strong><span data-count="50" data-suffix="+">50+</span></strong>
                        <span>Projects Done</span>
                    </div>
                    <div class="hero-stat">
                        <strong><span data-count="25" data-suffix="+">25+</span></strong>
                        <span>Happy Clients</span>
                    </div>
                    <div class="hero-stat">
                        <strong><span data-count="6" data-suffix="+">6+</span></strong>
                        <span>Years Experience</span>
                    </div>
                    <div class="hero-stat">
                        <strong><span data-count="12" data-suffix="+">12+</span></strong>
                        <span>Services</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="hero-right">
                    <div class="hero-visual-ring" aria-hidden="true">
                        <div class="hero-visual-inner">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                    </div>
                    <div class="hero-card card-1" aria-hidden="true">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card-icon"><i class="bi bi-check-circle-fill text-success"></i></div>
                            <div>
                                <div class="card-val">50+</div>
                                <div class="card-lbl">Projects Delivered</div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-card card-2" aria-hidden="true">
                        <div class="d-flex align-items-center gap-3">
                            <div class="card-icon"><i class="bi bi-star-fill" style="color:#FFC107"></i></div>
                            <div>
                                <div class="card-val">5★</div>
                                <div class="card-lbl">Client Rating</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── FEATURED SERVICES STRIP ─────────────────────────────── -->
<section class="services-strip" aria-label="Featured Services">
    <div class="container">
        <div class="row g-4">
            <?php
            $featuredServices = [
                ['icon' => 'bi-globe2',         'title' => 'Web Development',      'desc' => 'Responsive, fast, SEO-ready websites built to convert visitors into customers.', 'url' => '/service-details/web-development'],
                ['icon' => 'bi-code-slash',     'title' => 'Software Development', 'desc' => 'Custom software solutions tailored to your unique business processes.', 'url' => '/service-details/software-development'],
                ['icon' => 'bi-phone',          'title' => 'Mobile Apps',          'desc' => 'iOS & Android apps that deliver seamless user experiences.', 'url' => '/service-details/mobile-app-development'],
                ['icon' => 'bi-robot',          'title' => 'AI & Automation',      'desc' => 'Intelligent automation to streamline operations and reduce costs.', 'url' => '/service-details/ai-automation'],
            ];
            foreach ($featuredServices as $i => $svc): ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
                    <a href="<?= htmlspecialchars($svc['url']) ?>" class="strip-card text-decoration-none d-block">
                        <div class="strip-icon"><i class="bi <?= $svc['icon'] ?>"></i></div>
                        <h5><?= htmlspecialchars($svc['title']) ?></h5>
                        <p><?= htmlspecialchars($svc['desc']) ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── ABOUT ───────────────────────────────────────────────── -->
<section class="section-py" aria-label="About Us">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="about-image-wrap">
                    <div class="about-image-main">
                        <img src="https://shreegurvetech.com/assets/img/normal/about_1_1.png"
                             alt="Shree Gurve Technology - IT Solutions Team"
                             loading="lazy" width="540" height="480">
                    </div>
                    <div class="about-badge-exp" aria-label="6 plus years of experience">
                        <strong>6+</strong>
                        <span>Years of Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="section-label">About Us</div>
                <h2 class="section-title">We Build <span>Technology</span> That Powers Your Business</h2>
                <p class="section-subtitle mb-4">
                    Shree Gurve Technology is a Surat-based IT solutions company founded in 2019. We partner with startups, SMEs, and enterprises to build reliable digital platforms and scalable technology solutions.
                </p>
                <div class="about-features">
                    <div class="about-feature">
                        <div class="about-feature-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div class="about-feature-text">
                            <h6>ISO-Standard Practices</h6>
                            <p>We follow industry-standard development methodologies ensuring high quality, security, and maintainability across all projects.</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="about-feature-icon"><i class="bi bi-people-fill"></i></div>
                        <div class="about-feature-text">
                            <h6>Expert Team</h6>
                            <p>Our skilled team of developers, designers, and strategists brings 6+ years of hands-on experience across diverse industries.</p>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="about-feature-icon"><i class="bi bi-headset"></i></div>
                        <div class="about-feature-text">
                            <h6>24/7 Support</h6>
                            <p>Dedicated support and maintenance so your digital systems run at peak performance — always.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3 flex-wrap mt-2">
                    <a href="/about-us" class="btn btn-primary">Discover More <i class="bi bi-arrow-right ms-1"></i></a>
                    <a href="tel:+918200017181" class="btn btn-outline-primary">
                        <i class="bi bi-telephone-fill me-2"></i>+91 82000 17181
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── SERVICES ─────────────────────────────────────────────── -->
<section class="services-section section-py bg-gray-light" id="services" aria-label="Our Services">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">Our Services</div>
                <h2 class="section-title">Exclusive IT Services <span>For Your Business</span></h2>
                <p class="section-subtitle mx-auto">From strategy to execution — we provide end-to-end IT services that help your business grow, scale, and compete in the digital world.</p>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $services = [
                ['icon' => 'bi-graph-up-arrow', 'title' => 'Digital Marketing',      'desc' => 'SEO, social media, PPC, and content marketing strategies that drive traffic, leads, and measurable business growth.',    'url' => '/service-details/digital-marketing'],
                ['icon' => 'bi-cloud-check',    'title' => 'Cloud Services',          'desc' => 'Secure, scalable cloud infrastructure for data storage, applications, and business operations without physical servers.',   'url' => '/service-details/cloud-services'],
                ['icon' => 'bi-briefcase',      'title' => 'IT Consulting',           'desc' => 'Expert technology guidance on IT strategy, system implementation, and digital transformation to drive business efficiency.', 'url' => '/service-details/it-consulting-services'],
                ['icon' => 'bi-shield-check',   'title' => 'Cybersecurity',           'desc' => 'Protect your systems, networks, and data from threats with enterprise-grade security audits, monitoring, and solutions.',   'url' => '/service-details/cyber-security-services'],
                ['icon' => 'bi-bar-chart-line', 'title' => 'Data & Analytics',        'desc' => 'Turn raw data into powerful insights. Our analytics services help you make smarter decisions and identify growth opportunities.', 'url' => '/service-details/data-analytics'],
                ['icon' => 'bi-robot',          'title' => 'AI & Automation',         'desc' => 'Automate repetitive tasks and harness AI to improve efficiency, reduce costs, and create intelligent business workflows.',  'url' => '/service-details/ai-automation'],
            ];
            foreach ($services as $i => $svc): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                    <div class="service-card">
                        <span class="service-num" aria-hidden="true"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                        <div class="service-icon"><i class="bi <?= $svc['icon'] ?>"></i></div>
                        <h4><?= htmlspecialchars($svc['title']) ?></h4>
                        <p><?= htmlspecialchars($svc['desc']) ?></p>
                        <a href="<?= htmlspecialchars($svc['url']) ?>" class="service-link" aria-label="Learn more about <?= htmlspecialchars($svc['title']) ?>">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="/services" class="btn btn-primary btn-lg">View All Services <i class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- ── STATS ────────────────────────────────────────────────── -->
<section class="stats-section" aria-label="Company Statistics">
    <div class="container">
        <div class="row g-0 text-center">
            <?php
            $stats = [
                ['count' => 50,  'suffix' => '+', 'label' => 'Projects Completed',  'icon' => 'bi-rocket-takeoff'],
                ['count' => 25,  'suffix' => '+', 'label' => 'Happy Clients',        'icon' => 'bi-emoji-smile'],
                ['count' => 10,  'suffix' => '+', 'label' => 'Skilled Experts',      'icon' => 'bi-people'],
                ['count' => 5,   'suffix' => '+', 'label' => 'Awards & Recognition', 'icon' => 'bi-trophy'],
            ];
            foreach ($stats as $i => $stat): ?>
                <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                    <div class="stat-item">
                        <span class="stat-number" data-count="<?= $stat['count'] ?>" data-suffix="<?= $stat['suffix'] ?>">
                            <?= $stat['count'] . $stat['suffix'] ?>
                        </span>
                        <p class="stat-label"><?= htmlspecialchars($stat['label']) ?></p>
                    </div>
                    <?php if ($i < 3): ?><div class="stat-divider d-none d-lg-block" aria-hidden="true"></div><?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── WHY CHOOSE US ─────────────────────────────────────────── -->
<section class="why-section section-py" aria-label="Why Choose Shree Gurve Technology">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="why-image-wrap">
                    <div class="why-image-main">
                        <img src="https://shreegurvetech.com/assets/img/normal/why_1_1.jpg"
                             alt="Why Choose Shree Gurve Technology"
                             loading="lazy" width="580" height="500">
                    </div>
                    <div class="why-badge" aria-hidden="true">
                        <div class="why-badge-icon"><i class="bi bi-award-fill"></i></div>
                        <div>
                            <strong>5+ Awards</strong>
                            <span>Industry Recognition</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-label">Why Choose Us</div>
                <h2 class="section-title">Professional IT Services <span>You Can Trust</span></h2>
                <p class="mb-4 text-secondary">
                    We deal with all aspects of professional IT services — delivering reliable technology, expert support, and innovative digital strategies that help businesses operate efficiently and grow with confidence.
                </p>
                <div class="why-points">
                    <?php
                    $points = ['Big Data Analysis', '24/7 Online Support', 'Business Improvement', 'High Quality Security', 'Scalable Solutions', 'Transparent Pricing', 'Agile Development', 'Post-Launch Support'];
                    foreach ($points as $p): ?>
                        <div class="why-point"><i class="bi bi-check2-circle"></i> <?= htmlspecialchars($p) ?></div>
                    <?php endforeach; ?>
                </div>
                <a href="/about-us" class="btn btn-primary mt-3">Know More About Us <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ── PROCESS ──────────────────────────────────────────────── -->
<section class="process-section section-py bg-gray-light" aria-label="Work Process">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">Work Process</div>
                <h2 class="section-title">How We <span>Work</span></h2>
                <p class="section-subtitle mx-auto">A simple, transparent 4-step process from idea to delivery.</p>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $steps = [
                ['step' => '01', 'title' => 'Discover & Plan',    'desc' => 'We understand your business goals, target audience, and project requirements through detailed consultation.'],
                ['step' => '02', 'title' => 'Design & Prototype', 'desc' => 'Our design team creates wireframes and interactive prototypes for your review and approval before development begins.'],
                ['step' => '03', 'title' => 'Build & Test',       'desc' => 'Skilled developers build your solution using best practices, followed by rigorous quality assurance testing.'],
                ['step' => '04', 'title' => 'Launch & Support',   'desc' => 'We deploy your solution, provide training, and offer ongoing maintenance to ensure long-term success.'],
            ];
            foreach ($steps as $i => $step): ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="process-step">
                        <div class="process-num" aria-hidden="true"><?= $step['step'] ?></div>
                        <h5><?= htmlspecialchars($step['title']) ?></h5>
                        <p><?= htmlspecialchars($step['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── TESTIMONIALS ─────────────────────────────────────────── -->
<section class="testimonials-section section-py" aria-label="Client Testimonials">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">Client Feedback</div>
                <h2 class="section-title">What Our <span>Clients Say</span></h2>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $testimonials = [
                ['name' => 'Ravi Patel',     'role' => 'CEO, Devotion Group',     'initials' => 'RP', 'stars' => 5, 'text' => 'Shree Gurve Technology delivered our corporate website on time and beyond expectations. Their team understood our brand perfectly and the result speaks for itself.'],
                ['name' => 'Priya Shah',     'role' => 'Director, PVL Tourism',   'initials' => 'PS', 'stars' => 5, 'text' => 'The travel booking portal they built for us has transformed how we operate. Fast, reliable, and beautifully designed. Highly recommend their services.'],
                ['name' => 'Amit Kumar',     'role' => 'Founder, Keshav Tech',    'initials' => 'AK', 'stars' => 5, 'text' => 'Professional team, clear communication, and excellent technical skills. They built a custom CRM for us that has significantly improved our sales process.'],
            ];
            foreach ($testimonials as $i => $t): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="testimonial-card">
                        <div class="testimonial-stars" aria-label="<?= $t['stars'] ?> stars">
                            <?= str_repeat('<i class="bi bi-star-fill"></i> ', $t['stars']) ?>
                        </div>
                        <p class="testimonial-text">"<?= htmlspecialchars($t['text']) ?>"</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar" aria-hidden="true"><?= htmlspecialchars($t['initials']) ?></div>
                            <div class="testimonial-info">
                                <strong><?= htmlspecialchars($t['name']) ?></strong>
                                <span><?= htmlspecialchars($t['role']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CLIENTS ──────────────────────────────────────────────── -->
<section class="clients-section" aria-label="Our Clients">
    <div class="container">
        <p class="clients-heading">Trusted by businesses across India</p>
        <div class="row g-3 justify-content-center align-items-center">
            <?php
            $clients = ['Devotion Group', 'Zed Capital', 'PVL Tours & Travels', 'AdBookee Media', 'Crest View Tech', 'Keshav Technology', 'The Cosmos Globe', 'Select Stock', 'Rishaan Technology'];
            foreach ($clients as $client): ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-logo" aria-label="<?= htmlspecialchars($client) ?>">
                        <span class="client-name fw-semibold" style="font-size:0.75rem;color:var(--gray-dark)"><?= htmlspecialchars($client) ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── HOMEPAGE FAQs ─────────────────────────────────────────── -->
<section class="faq-section section-py" aria-label="Frequently Asked Questions">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">FAQs</div>
                <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
                <p class="section-subtitle mx-auto">Quick answers to the most common questions about our IT services.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="homeFAQ">
                    <?php
                    $faqs = [
                        ['q' => 'What types of businesses do you work with?',
                         'a' => 'We work with startups, small-to-medium businesses (SMBs), and large enterprises across all industries — retail, healthcare, education, real estate, travel, finance, and more. If your business needs digital solutions, we can help.'],
                        ['q' => 'How long does it take to build a website or app?',
                         'a' => 'Timelines depend on project complexity. A standard business website typically takes 2–4 weeks, while a custom web application or mobile app can take 6–16 weeks. We provide a detailed timeline during our initial consultation.'],
                        ['q' => 'Do you provide ongoing support after launch?',
                         'a' => 'Absolutely. We offer comprehensive post-launch support and maintenance packages including bug fixes, performance monitoring, security updates, and feature enhancements. We become your long-term technology partner.'],
                        ['q' => 'What technologies do you use for web development?',
                         'a' => 'We use modern, proven technologies including PHP 8.3, Laravel, React, Vue.js, Node.js, MySQL, PostgreSQL, Bootstrap 5, and cloud platforms like AWS and Google Cloud. We choose the right stack for your specific project needs.'],
                        ['q' => 'Do you help with SEO and digital marketing?',
                         'a' => 'Yes! We offer complete digital marketing services including Search Engine Optimization (SEO), Pay-Per-Click (PPC) advertising, social media marketing, content marketing, and GEO/AEO optimization for AI-powered search engines.'],
                        ['q' => 'How do I get started with Shree Gurve Technology?',
                         'a' => 'Simply contact us via our Contact page, call us at +91 82000 17181, or email contact@shreegurvetech.com. We offer a free initial consultation to understand your project requirements and provide a no-obligation quote.'],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                            <h3 class="accordion-header">
                                <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>"
                                        aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"
                                        aria-controls="faq<?= $i ?>">
                                    <?= htmlspecialchars($faq['q']) ?>
                                </button>
                            </h3>
                            <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#homeFAQ">
                                <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-4">
                    <a href="/faqs" class="btn btn-outline-primary">View All FAQs <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── CONTACT CTA ───────────────────────────────────────────── -->
<section class="cta-section" id="contact-cta" aria-label="Contact Call to Action">
    <div class="container text-center" data-aos="zoom-in">
        <div class="section-label d-inline-flex" style="color:rgba(255,255,255,0.7)">
            Contact Now
        </div>
        <h2 class="section-title mb-3" style="color:var(--white); font-size: clamp(1.8rem,4vw,3rem);">
            Ready to Start Your <span style="color:var(--accent)">Digital Journey?</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75); max-width:560px; margin: 0 auto 36px;">
            Let's talk about your project. We'll provide a free consultation and a no-obligation quote within 24 hours.
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
