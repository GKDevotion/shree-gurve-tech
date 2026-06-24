<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Frequently Asked Questions | Shree Gurve Technology – IT Services FAQs';
$pageDesc      = 'Find answers to the most common questions about Shree Gurve Technology\'s IT services, pricing, process, support, and more. Web development, software, mobile app, and digital marketing FAQs.';
$pageKeywords  = 'Shree Gurve Technology FAQ, IT services questions, web development FAQ, software development India questions, how much does website cost India';
$pageCanonical = 'https://shreegurvetech.com/faqs';
$currentPage   = 'faqs';

$allFaqs = [
    'General' => [
        ['q'=>'What is Shree Gurve Technology?',
         'a'=>'Shree Gurve Technology is a professional IT solutions company founded in 2019 and based in Surat, Gujarat, India. We provide web development, software development, mobile app development, UI/UX design, digital marketing, cloud services, cybersecurity, AI automation, and IT consulting services to businesses worldwide.'],
        ['q'=>'How long has Shree Gurve Technology been in business?',
         'a'=>'We have been delivering IT solutions since 2019 — over 6 years of experience. In that time, we have completed 50+ projects for 25+ happy clients across India and internationally.'],
        ['q'=>'Where are you located? Do you work with clients outside Surat/India?',
         'a'=>'Our office is in Surat, Gujarat, India. We serve clients worldwide. We use collaboration tools like Zoom, Google Meet, Slack, and email to work seamlessly with international clients across all time zones.'],
        ['q'=>'How do I get started with Shree Gurve Technology?',
         'a'=>'Simply contact us via our Contact page, call +91 82000 17181, or email contact@shreegurvetech.com. We offer a free initial consultation to discuss your project and provide a no-obligation quote within 24 hours.'],
        ['q'=>'What industries do you serve?',
         'a'=>'We serve businesses across all industries including retail & e-commerce, healthcare, education, real estate, travel & tourism, finance, manufacturing, professional services, hospitality, and more. Our solutions are tailored to each sector.'],
    ],
    'Web Development' => [
        ['q'=>'How much does a website cost?',
         'a'=>'Website costs vary depending on complexity. A basic business website starts from ₹15,000–₹40,000. A custom web application or e-commerce platform can range from ₹50,000 to ₹5,00,000+. We provide a detailed quote after understanding your specific requirements.'],
        ['q'=>'How long does it take to build a website?',
         'a'=>'A standard business website typically takes 2–4 weeks. A complex web application, portal, or e-commerce platform can take 6–16 weeks. Timeline depends on scope, features, and client feedback speed.'],
        ['q'=>'Will my website work on mobile phones?',
         'a'=>'Yes, absolutely. All websites we build are fully responsive — they automatically adapt to any screen size (mobile, tablet, laptop, desktop). We follow a mobile-first development approach.'],
        ['q'=>'Will my website be SEO-optimized?',
         'a'=>'Yes. Every website is built with on-page SEO best practices: fast loading speed, semantic HTML structure, meta tags, schema markup, sitemap.xml, clean URL structure, Core Web Vitals optimization, and mobile-friendliness.'],
    ],
    'Software Development' => [
        ['q'=>'Can you build software for my specific business process?',
         'a'=>'Yes. Custom software development is our specialty. We build software that fits exactly how your business operates — whether it\'s a CRM, ERP, HRMS, billing system, inventory manager, or a completely unique internal tool.'],
        ['q'=>'What programming languages and frameworks do you use?',
         'a'=>'We primarily use PHP 8.3 with Laravel for backend development, React.js and Vue.js for frontends, Flutter for mobile apps, Python for AI/data science, and MySQL/PostgreSQL for databases. We choose the right stack for each project.'],
        ['q'=>'Do you provide source code ownership?',
         'a'=>'Yes. Upon project completion and final payment, you receive 100% ownership of all source code, assets, and documentation. We do not retain any rights to your code.'],
    ],
    'Mobile App Development' => [
        ['q'=>'Should I build a native app or a cross-platform app?',
         'a'=>'For most businesses, Flutter (cross-platform) is the best choice. It delivers near-native performance on both iOS and Android from a single codebase, significantly reducing cost and development time. Native development is recommended only for highly performance-intensive apps.'],
        ['q'=>'How much does a mobile app cost?',
         'a'=>'A basic mobile app starts from ₹80,000–₹2,00,000. A feature-rich app with backend, admin panel, and complex features can range from ₹2,00,000 to ₹15,00,000+. We provide accurate estimates after scoping the project.'],
        ['q'=>'Do you publish the app to App Store and Google Play?',
         'a'=>'Yes. We handle the complete app store submission process — preparing store listings, screenshots, descriptions, and compliance documentation for both Apple App Store and Google Play Store.'],
    ],
    'Digital Marketing' => [
        ['q'=>'How long does SEO take to show results?',
         'a'=>'SEO is a long-term investment. Most clients see noticeable improvements in organic traffic within 3–6 months, with significant results in 6–12 months. Paid advertising (Google Ads, Meta Ads) can generate traffic from day one.'],
        ['q'=>'What is AEO (Answer Engine Optimization)?',
         'a'=>'AEO is the practice of optimizing content to appear as direct answers in AI-powered search engines like Google SGE, ChatGPT, Perplexity AI, and voice assistants. It uses FAQ schema, structured content, and conversational optimization. It\'s the next frontier of SEO.'],
        ['q'=>'Do you offer social media management?',
         'a'=>'Yes. We offer complete social media management — content creation, scheduling, community management, paid advertising, and performance reporting on Facebook, Instagram, LinkedIn, YouTube, and more.'],
    ],
    'Pricing & Process' => [
        ['q'=>'Is the initial consultation free?',
         'a'=>'Yes, completely free. Our initial consultation involves understanding your project requirements, goals, and timeline. We then provide a detailed, no-obligation project proposal and quote.'],
        ['q'=>'How do you charge for projects — fixed price or hourly?',
         'a'=>'We primarily work on a fixed-price model for well-defined projects, which gives you cost predictability. For ongoing development or consulting, we offer monthly retainer or hourly billing arrangements.'],
        ['q'=>'What payment methods do you accept?',
         'a'=>'We accept bank transfers (NEFT/RTGS/IMPS), UPI, and international wire transfers. For most projects, we require 40–50% advance, 30–40% at project milestone, and 20% on final delivery.'],
        ['q'=>'Do you sign NDAs?',
         'a'=>'Yes. We sign Non-Disclosure Agreements (NDAs) before discussing any project details. Your ideas, business information, and project data are completely confidential.'],
        ['q'=>'What is your development process?',
         'a'=>'We follow an Agile development process: (1) Discover & Plan — requirements gathering and project scoping, (2) Design & Prototype — UI/UX design and approval, (3) Build & Test — development with regular demos and QA, (4) Launch & Support — deployment and ongoing maintenance.'],
    ],
    'Support & Maintenance' => [
        ['q'=>'Do you provide support after the project is launched?',
         'a'=>'Yes. We provide free bug-fix support for 1–3 months after launch (depending on project size). For ongoing support, we offer flexible Annual Maintenance Contracts (AMC) covering bug fixes, security updates, performance monitoring, and minor enhancements.'],
        ['q'=>'How quickly do you respond to support requests?',
         'a'=>'Response times depend on your support plan. For AMC clients: Critical issues within 2 hours, High priority within 4 hours, Medium within 8 hours, Low within 24 hours. We also have a WhatsApp support channel for quick communication.'],
        ['q'=>'Can you take over a project built by another company?',
         'a'=>'Yes. We can take over development or maintenance of projects built by other companies. We begin with a thorough technical audit to understand the existing codebase and then provide a plan for moving forward.'],
    ],
];

// Generate FAQ schema for all
$allFaqSchema = [];
foreach ($allFaqs as $cat => $faqList) {
    foreach ($faqList as $faq) {
        $allFaqSchema[] = [
            "@type" => "Question",
            "name" => $faq['q'],
            "acceptedAnswer" => ["@type" => "Answer", "text" => $faq['a']]
        ];
    }
}
$faqSchema = json_encode(["@context"=>"https://schema.org","@type"=>"FAQPage","mainEntity"=>$allFaqSchema], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json"><?= $faqSchema ?></script>

<!-- Page Hero -->
<section class="page-hero" aria-label="FAQs Page Header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Frequently Asked Questions</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Everything you need to know about our IT services, process, pricing, and support.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Category Navigation -->
<section style="background:var(--white);border-bottom:1px solid var(--border);padding:20px 0;">
    <div class="container">
        <div class="d-flex flex-wrap gap-2 justify-content-center">
            <?php foreach (array_keys($allFaqs) as $cat): ?>
                <a href="#faq-<?= htmlspecialchars(strtolower(str_replace([' ','&'],['','-'],$cat))) ?>"
                   class="btn btn-outline-primary btn-sm" style="font-size:0.8rem;">
                    <?= htmlspecialchars($cat) ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- All FAQs -->
<section class="section-py bg-gray-light" aria-label="All FAQs">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <?php $globalI = 0; foreach ($allFaqs as $category => $faqList): ?>
                    <div class="mb-5" id="faq-<?= htmlspecialchars(strtolower(str_replace([' ','&'],['','-'],$category))) ?>" data-aos="fade-up">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <h2 style="font-size:1.3rem;font-weight:800;color:var(--dark);margin:0;"><?= htmlspecialchars($category) ?></h2>
                            <div style="flex:1;height:2px;background:linear-gradient(90deg,var(--border),transparent);"></div>
                        </div>

                        <div class="accordion" id="faqCat<?= $globalI ?>">
                            <?php foreach ($faqList as $j => $faq):
                                $faqId = 'faq_' . $globalI . '_' . $j; ?>
                                <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $j * 40 ?>">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#<?= $faqId ?>">
                                            <?= htmlspecialchars($faq['q']) ?>
                                        </button>
                                    </h3>
                                    <div id="<?= $faqId ?>" class="accordion-collapse collapse" data-bs-parent="#faqCat<?= $globalI ?>">
                                        <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php $globalI++; endforeach; ?>

                <!-- Still have questions? -->
                <div class="contact-card text-center mt-3" data-aos="zoom-in">
                    <div style="font-size:2.5rem;margin-bottom:16px;">💬</div>
                    <h3 style="font-size:1.2rem;font-weight:700;margin-bottom:8px;">Still Have Questions?</h3>
                    <p style="color:var(--gray-mid);margin-bottom:24px;font-size:0.875rem;">Can't find the answer you're looking for? Our team is happy to help.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="/contact-us" class="btn btn-primary">Contact Us</a>
                        <a href="https://wa.me/918200017181?text=Hi,%20I%20have%20a%20question" target="_blank" rel="noopener" class="btn btn-outline-primary">
                            <i class="bi bi-whatsapp me-2"></i>WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="Call to Action">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="color:white;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:12px;">
            Ready to Start Your <span style="color:var(--accent)">IT Project?</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:500px;margin:0 auto 32px;">Free consultation. Honest advice. No obligation.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Get a Free Quote</a>
            <a href="tel:+918200017181" class="btn btn-outline-light btn-lg">
                <i class="bi bi-telephone-fill me-2"></i>+91 82000 17181
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
