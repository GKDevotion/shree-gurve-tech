<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'About Shree Gurve Technology | IT Company in Surat Since 2019';
$pageDesc      = 'Learn about Shree Gurve Technology — a trusted IT solutions company in Surat, India, founded in 2019. We provide web development, software, mobile apps, and digital marketing services to businesses worldwide.';
$pageKeywords  = 'about Shree Gurve Technology, IT company Surat India, web development company Gujarat, software development team, founded 2019';
$pageCanonical = 'https://shreegurvetech.com/about-us';
$currentPage   = 'about';

$faqSchema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        ["@type" => "Question", "name" => "When was Shree Gurve Technology founded?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Shree Gurve Technology was founded in 2019 in Surat, Gujarat, India."]],
        ["@type" => "Question", "name" => "How many projects has Shree Gurve Technology completed?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Shree Gurve Technology has successfully completed 50+ projects for clients across various industries including retail, healthcare, education, and finance."]],
        ["@type" => "Question", "name" => "What industries does Shree Gurve Technology serve?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "We serve a wide range of industries including retail & e-commerce, healthcare, education, real estate, travel & tourism, finance, manufacturing, and professional services."]],
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json"><?= $faqSchema ?></script>

<!-- Page Hero -->
<section class="page-hero" aria-label="About Page Header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">About Shree Gurve Technology</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Your trusted IT partner in Surat, India — delivering digital excellence since 2019.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- About Story -->
<section class="section-py" aria-label="Company Story">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="about-image-wrap">
                    <div class="about-image-main">
                        <img src="https://shreegurvetech.com/assets/img/normal/about_1_1.png"
                             alt="Shree Gurve Technology Team – IT Professionals in Surat"
                             loading="eager" width="540" height="480">
                    </div>
                    <div class="about-badge-exp">
                        <strong>6+</strong>
                        <span>Years of Excellence</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="section-label">Our Story</div>
                <h2 class="section-title">Empowering Businesses Through <span>Smart Technology</span></h2>
                <p>
                    Shree Gurve Technology was founded in 2019 with a clear mission: to make enterprise-grade IT solutions accessible to businesses of all sizes. Based in Surat, Gujarat, we have grown from a small team of passionate developers into a full-service IT company serving clients across India and internationally.
                </p>
                <p>
                    We believe that the right technology is the most powerful catalyst for business growth. Our team of 10+ skilled professionals combines deep technical expertise with genuine business understanding to deliver solutions that not only work — but work for you.
                </p>
                <div class="row g-3 mt-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <span class="fw-500" style="font-size:0.875rem;">Client-first approach</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <span class="fw-500" style="font-size:0.875rem;">Transparent pricing</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <span class="fw-500" style="font-size:0.875rem;">Agile development</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <span class="fw-500" style="font-size:0.875rem;">On-time delivery</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="/contact-us" class="btn btn-primary">Work With Us <i class="bi bi-arrow-right ms-1"></i></a>
                    <a href="/services" class="btn btn-outline-primary">Our Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats-section" aria-label="Company Statistics">
    <div class="container">
        <div class="row g-0 text-center">
            <?php
            $stats = [
                ['count' => 50, 'suffix' => '+', 'label' => 'Projects Completed'],
                ['count' => 25, 'suffix' => '+', 'label' => 'Happy Clients'],
                ['count' => 10, 'suffix' => '+', 'label' => 'Skilled Experts'],
                ['count' => 5,  'suffix' => '+', 'label' => 'Awards Won'],
            ];
            foreach ($stats as $i => $s): ?>
                <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="<?= $i * 80 ?>">
                    <div class="stat-item">
                        <span class="stat-number" data-count="<?= $s['count'] ?>" data-suffix="<?= $s['suffix'] ?>"><?= $s['count'] . $s['suffix'] ?></span>
                        <p class="stat-label"><?= $s['label'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section-py bg-gray-light" aria-label="Mission Vision Values">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">Our Foundation</div>
                <h2 class="section-title">Mission, Vision & <span>Values</span></h2>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $mvv = [
                ['icon' => 'bi-bullseye', 'title' => 'Our Mission', 'color' => 'var(--accent)',
                 'text' => 'To empower businesses of all sizes with innovative, affordable, and reliable IT solutions that drive real growth and measurable results.'],
                ['icon' => 'bi-eye', 'title' => 'Our Vision', 'color' => 'var(--electric)',
                 'text' => 'To be the most trusted IT solutions partner for growing businesses in India and across the globe, known for technical excellence and client success.'],
                ['icon' => 'bi-heart', 'title' => 'Our Values', 'color' => '#9B59B6',
                 'text' => 'Integrity, innovation, collaboration, and a relentless commitment to quality. We treat every client\'s project as our own and celebrate their success.'],
            ];
            foreach ($mvv as $i => $m): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="service-card text-center">
                        <div class="service-icon mx-auto" style="background:linear-gradient(135deg, <?= $m['color'] ?>22, <?= $m['color'] ?>11)">
                            <i class="bi <?= $m['icon'] ?>" style="color:<?= $m['color'] ?>"></i>
                        </div>
                        <h4><?= $m['title'] ?></h4>
                        <p><?= $m['text'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Work Process -->
<section class="process-section section-py" aria-label="Our Work Process">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">Work Process</div>
                <h2 class="section-title">How We <span>Deliver Results</span></h2>
                <p class="section-subtitle mx-auto">A proven 4-step process that ensures every project is delivered on time, within budget, and beyond expectations.</p>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $steps = [
                ['step' => '01', 'title' => 'Discover & Plan',    'desc' => 'We start by deeply understanding your business goals, target audience, and technical requirements through structured consultation sessions.'],
                ['step' => '02', 'title' => 'Design & Prototype', 'desc' => 'Our designers create wireframes and interactive prototypes for your approval before any development begins, ensuring alignment.'],
                ['step' => '03', 'title' => 'Build & Test',       'desc' => 'Skilled developers build your solution using industry best practices, followed by thorough quality assurance and user testing.'],
                ['step' => '04', 'title' => 'Launch & Grow',      'desc' => 'We deploy your solution, provide comprehensive training, and offer ongoing maintenance to ensure long-term performance and success.'],
            ];
            foreach ($steps as $i => $step): ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                    <div class="process-step">
                        <div class="process-num"><?= $step['step'] ?></div>
                        <h5><?= $step['title'] ?></h5>
                        <p><?= $step['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-section section-py bg-gray-light" aria-label="Why Choose Shree Gurve Technology">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-label">Why Us</div>
                <h2 class="section-title">Why Businesses <span>Choose Us</span></h2>
                <p class="mb-4 text-secondary">We combine technical depth with business acumen to deliver solutions that genuinely move the needle for our clients.</p>
                <div class="about-features">
                    <?php
                    $whys = [
                        ['icon' => 'bi-clock-history', 'title' => 'On-Time Delivery', 'desc' => 'We respect deadlines. Our agile project management ensures your solution is delivered on schedule, every time.'],
                        ['icon' => 'bi-currency-rupee', 'title' => 'Transparent Pricing', 'desc' => 'No hidden costs. We provide detailed, honest quotes upfront so you know exactly what you\'re paying for.'],
                        ['icon' => 'bi-shield-check', 'title' => 'Security-First', 'desc' => 'Every solution we build follows security best practices — from secure coding to HTTPS, data encryption, and access control.'],
                    ];
                    foreach ($whys as $w): ?>
                        <div class="about-feature">
                            <div class="about-feature-icon"><i class="bi <?= $w['icon'] ?>"></i></div>
                            <div class="about-feature-text">
                                <h6><?= $w['title'] ?></h6>
                                <p><?= $w['desc'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="why-image-wrap">
                    <div class="why-image-main">
                        <img src="https://shreegurvetech.com/assets/img/normal/why_1_1.jpg"
                             alt="Shree Gurve Technology - Professional IT Team"
                             loading="lazy" width="580" height="500">
                    </div>
                    <div class="why-badge">
                        <div class="why-badge-icon"><i class="bi bi-star-fill"></i></div>
                        <div>
                            <strong>5★ Rating</strong>
                            <span>Client Satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About FAQs -->
<section class="faq-section section-py" aria-label="About Us FAQs">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">FAQs</div>
                <h2 class="section-title">About Us <span>FAQs</span></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="aboutFAQ">
                    <?php
                    $faqs = [
                        ['q' => 'When was Shree Gurve Technology founded?', 'a' => 'Shree Gurve Technology was founded in 2019 in Surat, Gujarat, India. Over the past 6+ years, we have grown into a full-service IT solutions company serving clients across India and worldwide.'],
                        ['q' => 'How many team members does Shree Gurve Technology have?', 'a' => 'Our team consists of 10+ skilled professionals including developers, UI/UX designers, project managers, digital marketers, and IT consultants. We also work with a vetted network of specialist partners when needed.'],
                        ['q' => 'What industries does Shree Gurve Technology serve?', 'a' => 'We serve a wide range of industries including retail & e-commerce, healthcare, education, real estate, travel & tourism, finance, manufacturing, and professional services. Our solutions are tailored to each industry\'s specific needs.'],
                        ['q' => 'Does Shree Gurve Technology work with startups?', 'a' => 'Absolutely. We love working with startups. We offer flexible engagement models and MVP-focused development approaches that help startups launch quickly, iterate fast, and scale when ready.'],
                        ['q' => 'Can I see examples of your previous work?', 'a' => 'Yes! Visit our Projects page to see a portfolio of our completed work across different industries and service types. You can also request case studies during a consultation.'],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                            <h3 class="accordion-header">
                                <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#afaq<?= $i ?>">
                                    <?= htmlspecialchars($faq['q']) ?>
                                </button>
                            </h3>
                            <div id="afaq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#aboutFAQ">
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
        <h2 class="section-title mb-3" style="color:var(--white);font-size:clamp(1.6rem,3vw,2.4rem);">Ready to Work With <span style="color:var(--accent)">Our Team?</span></h2>
        <p style="color:rgba(255,255,255,0.75);max-width:520px;margin:0 auto 32px;">Get a free consultation and discover how we can help your business grow with the right technology.</p>
        <a href="/contact-us" class="btn btn-light btn-lg">Start a Conversation <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
