<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Business IT Solutions – CRM, ERP, HRMS, E-Commerce & More | Shree Gurve Technology';
$pageDesc      = 'Explore ready-to-customize IT solutions by Shree Gurve Technology: CRM, ERP, HRMS, e-commerce, education management, healthcare management systems and more. Based in Surat, India.';
$pageKeywords  = 'CRM solutions India, ERP software Surat, HRMS system Gujarat, e-commerce platform, education management system, healthcare software, business solutions IT';
$pageCanonical = 'https://shreegurvetech.com/solutions';
$currentPage   = 'solutions';

include __DIR__ . '/includes/header.php';

$solutions = [
    ['icon'=>'bi-people',        'title'=>'CRM Solutions',                   'slug'=>'crm-solutions',
     'desc'=>'Manage leads, customers, follow-ups, sales pipelines, and business relationships in one powerful platform.',
     'features'=>['Lead & opportunity management','Sales pipeline tracking','Customer communication history','Automated follow-up reminders','Detailed sales reports & analytics'],
     'ideal'=>'Sales teams, service businesses, real estate, B2B companies'],
    ['icon'=>'bi-diagram-3',     'title'=>'ERP Solutions',                   'slug'=>'erp-solutions',
     'desc'=>'Unify all your business operations — inventory, finance, HR, production, and sales — into a single integrated system.',
     'features'=>['Inventory & stock management','Financial accounting module','Purchase & vendor management','Production planning & tracking','Multi-branch & multi-user support'],
     'ideal'=>'Manufacturing, retail, distribution, trading companies'],
    ['icon'=>'bi-person-badge',  'title'=>'HRMS Solutions',                  'slug'=>'hrms-solutions',
     'desc'=>'Complete HR management from recruitment to payroll — automate your entire employee lifecycle.',
     'features'=>['Employee onboarding & records','Attendance & leave management','Payroll processing with tax calc','Performance appraisal system','Employee self-service portal'],
     'ideal'=>'Any business with 10+ employees, HR departments'],
    ['icon'=>'bi-cart3',         'title'=>'E-Commerce Management Systems',   'slug'=>'ecommerce-management-systems',
     'desc'=>'Full-featured e-commerce platforms built to sell — product management, checkout, payments, orders, and customer accounts.',
     'features'=>['Multi-category product catalog','Cart, checkout & payment gateway','Order management & tracking','Discount codes & promotions','SEO-optimized product pages'],
     'ideal'=>'Retail brands, wholesale suppliers, D2C companies'],
    ['icon'=>'bi-mortarboard',   'title'=>'Education Management Systems',    'slug'=>'education-management-systems',
     'desc'=>'Manage the complete student lifecycle from admission to graduation — for schools, colleges, and coaching institutes.',
     'features'=>['Student enrollment & admission','Fee management & receipts','Attendance tracking & reports','Grade sheets & report cards','Parent & student portal'],
     'ideal'=>'Schools, colleges, coaching institutes, training centers'],
    ['icon'=>'bi-heart-pulse',   'title'=>'Healthcare Management Systems',   'slug'=>'healthcare-management-systems',
     'desc'=>'Digitize your clinic or hospital operations — appointments, patient records, billing, and staff management in one system.',
     'features'=>['Online appointment booking','Electronic patient records (EMR)','Billing & insurance management','Doctor & staff scheduling','Prescription & lab reports'],
     'ideal'=>'Clinics, hospitals, diagnostic centers, dental practices'],
];
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Solutions Page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Business IT Solutions</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Ready-to-customize software solutions for every business function — built to fit your workflow, not the other way around.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Solutions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Grid -->
<section class="section-py" aria-label="All Solutions">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-7">
                <div class="section-label d-inline-flex">Business Solutions</div>
                <h2 class="section-title">Complete Business Software <span>Solutions</span></h2>
                <p class="section-subtitle mx-auto">Purpose-built software that solves real business problems. Each solution is fully customizable to match your specific processes and requirements.</p>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($solutions as $i => $sol): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                    <div class="service-card h-100">
                        <span class="service-num" aria-hidden="true"><?= str_pad($i+1,2,'0',STR_PAD_LEFT) ?></span>
                        <div class="service-icon"><i class="bi <?= htmlspecialchars($sol['icon']) ?>"></i></div>
                        <h3 style="font-size:1.05rem;font-weight:700;margin-bottom:10px;"><?= htmlspecialchars($sol['title']) ?></h3>
                        <p style="font-size:0.85rem;margin-bottom:14px;color:var(--gray-mid);"><?= htmlspecialchars($sol['desc']) ?></p>
                        <ul style="list-style:none;padding:0;margin-bottom:16px;">
                            <?php foreach (array_slice($sol['features'],0,3) as $f): ?>
                                <li style="font-size:0.8rem;color:var(--gray-dark);padding:4px 0;display:flex;align-items:center;gap:8px;">
                                    <i class="bi bi-check-circle-fill" style="color:var(--accent);font-size:0.75rem;flex-shrink:0;"></i><?= htmlspecialchars($f) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div style="background:var(--gray-light);border-radius:8px;padding:10px 12px;margin-bottom:16px;">
                            <span style="font-size:0.72rem;font-weight:700;color:var(--gray-mid);text-transform:uppercase;letter-spacing:1px;">Ideal For:</span>
                            <p style="font-size:0.8rem;color:var(--dark);margin:4px 0 0;font-weight:500;"><?= htmlspecialchars($sol['ideal']) ?></p>
                        </div>
                        <a href="/solution-details/<?= htmlspecialchars($sol['slug']) ?>" class="service-link">
                            View Solution <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Custom Solution CTA -->
<section class="section-py bg-gray-light" aria-label="Custom Solutions">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <div style="font-size:3rem;margin-bottom:20px;">🔧</div>
                <div class="section-label d-inline-flex">Custom Build</div>
                <h2 class="section-title">Don't See What You Need? <span>We'll Build It.</span></h2>
                <p class="section-subtitle mx-auto mb-4">Every business is unique. If our ready-made solutions don't fit your workflow perfectly, we design and build completely custom software from scratch — tailored 100% to your requirements.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact-us" class="btn btn-primary btn-lg">Discuss Custom Solution</a>
                    <a href="/service-details/software-development" class="btn btn-outline-primary btn-lg">Software Development</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-label="Call to Action">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="color:white;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:12px;">
            Ready to Streamline Your <span style="color:var(--accent)">Business Operations?</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:520px;margin:0 auto 32px;">Get a free demo and consultation for any of our business solutions.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Request a Free Demo</a>
            <a href="/services" class="btn btn-outline-light btn-lg">All IT Services</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
