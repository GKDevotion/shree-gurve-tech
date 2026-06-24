<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Our Projects & Portfolio | Web & Software Development Work | Shree Gurve Technology';
$pageDesc      = 'Browse the portfolio of Shree Gurve Technology — web development, software development, mobile apps, and digital marketing projects delivered for clients across India and worldwide.';
$pageKeywords  = 'Shree Gurve Technology portfolio, web development projects India, software development work, IT company portfolio Surat, case studies';
$pageCanonical = 'https://shreegurvetech.com/projects';
$currentPage   = 'projects';

include __DIR__ . '/includes/header.php';

$projects = [
    ['title'=>'Devotion Group',            'cat'=>'Web Development',    'tag'=>'Corporate Website',         'desc'=>'A premium corporate website for a diversified business group — multi-section layout, service pages, leadership team, news, and contact features.',     'tech'=>['PHP','Bootstrap 5','MySQL','jQuery'],'icon'=>'bi-building'],
    ['title'=>'Zed Capital',               'cat'=>'Web Development',    'tag'=>'Finance Platform',           'desc'=>'Professional website for a financial services company with investment product listings, client portal integration, and regulatory compliance pages.','tech'=>['Laravel','Vue.js','MySQL','Tailwind'],'icon'=>'bi-bank'],
    ['title'=>'PVL Tours & Travels',       'cat'=>'Web Development',    'tag'=>'Travel Booking Portal',     'desc'=>'Feature-rich travel booking platform with package listings, inquiry system, gallery, testimonials, and SEO-optimized destination pages.',              'tech'=>['PHP','Bootstrap 5','MySQL','jQuery'],'icon'=>'bi-airplane'],
    ['title'=>'AdBookee Media',            'cat'=>'Software Development','tag'=>'Ad Management Platform',   'desc'=>'Custom SaaS platform for outdoor advertising management — location tracking, campaign scheduling, client reporting, and invoice generation.',         'tech'=>['Laravel','React.js','MySQL','API'],'icon'=>'bi-megaphone'],
    ['title'=>'CrestView Technology',      'cat'=>'Web Development',    'tag'=>'IT Company Website',        'desc'=>'Modern IT company website with service pages, case studies, team profiles, blog, and a custom project inquiry workflow.',                             'tech'=>['PHP','Bootstrap 5','SEO'],'icon'=>'bi-cpu'],
    ['title'=>'Keshav Technology',         'cat'=>'Software Development','tag'=>'CRM System',               'desc'=>'Custom Customer Relationship Management (CRM) system with lead management, follow-up reminders, sales pipeline, and reporting dashboard.',           'tech'=>['PHP 8.3','MySQL','Bootstrap 5','Chart.js'],'icon'=>'bi-people'],
    ['title'=>'The Cosmos Globe',          'cat'=>'Digital Marketing',   'tag'=>'SEO + Social Media',       'desc'=>'Complete digital marketing strategy including SEO audit, keyword optimization, Google Ads campaigns, and social media management across platforms.', 'tech'=>['Google Ads','SEMrush','Meta Ads','Analytics'],'icon'=>'bi-globe2'],
    ['title'=>'Select Stock',              'cat'=>'Web Development',    'tag'=>'Stock Market Platform',     'desc'=>'Stock market educational platform with course listings, blog, video embeds, member registration, and payment integration.',                           'tech'=>['Laravel','Vue.js','Razorpay','MySQL'],'icon'=>'bi-graph-up'],
    ['title'=>'Rishaan Technology',        'cat'=>'Mobile App',         'tag'=>'Business Management App',  'desc'=>'Cross-platform Flutter app for field sales team management — attendance tracking, lead entry, daily reporting, and manager dashboard.',              'tech'=>['Flutter','Firebase','Laravel API','MySQL'],'icon'=>'bi-phone'],
    ['title'=>'Healthcare Clinic Portal',  'cat'=>'Software Development','tag'=>'HRMS + Appointment System','desc'=>'Clinic management system with doctor appointment booking, patient records, billing, staff management, and automated appointment reminders.',          'tech'=>['PHP 8.3','Bootstrap 5','MySQL','Twilio'],'icon'=>'bi-heart-pulse'],
    ['title'=>'E-Commerce Fashion Store',  'cat'=>'Web Development',    'tag'=>'E-Commerce Platform',      'desc'=>'Full-featured e-commerce platform for a fashion brand — product catalog, size variants, cart, checkout, payment gateway, and order management.',     'tech'=>['Laravel','React.js','Razorpay','MySQL'],'icon'=>'bi-bag'],
    ['title'=>'Education Management System','cat'=>'Software Development','tag'=>'ERP for Schools',         'desc'=>'Complete school ERP with student enrollment, fee management, attendance, grade sheets, timetables, parent portal, and admin dashboard.',             'tech'=>['PHP 8.3','Bootstrap 5','MySQL','FPDF'],'icon'=>'bi-mortarboard'],
];

$categories = ['All', 'Web Development', 'Software Development', 'Mobile App', 'Digital Marketing'];
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Projects Page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Our Projects & Portfolio</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Real results for real businesses — explore our delivered projects across web, software, mobile, and marketing.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Filter + Projects -->
<section class="section-py" aria-label="Portfolio Projects">
    <div class="container">
        <!-- Stats Row -->
        <div class="row g-4 mb-5" data-aos="fade-up">
            <?php foreach ([['50+','Projects Delivered'],['25+','Happy Clients'],['12+','Service Areas'],['6+','Years Experience']] as $s): ?>
                <div class="col-6 col-lg-3 text-center">
                    <div style="padding:20px;background:var(--gray-light);border-radius:var(--radius-md);">
                        <strong style="font-size:2rem;font-weight:900;color:var(--primary);display:block;"><?= $s[0] ?></strong>
                        <span style="font-size:0.82rem;color:var(--gray-mid);"><?= $s[1] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Filter Tabs -->
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-5" data-aos="fade-up" role="tablist">
            <?php foreach ($categories as $cat): ?>
                <button class="btn btn-sm filter-btn <?= $cat === 'All' ? 'btn-primary' : 'btn-outline-primary' ?>"
                        data-filter="<?= htmlspecialchars($cat) ?>"
                        role="tab"
                        aria-selected="<?= $cat === 'All' ? 'true' : 'false' ?>">
                    <?= htmlspecialchars($cat) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4" id="projectsGrid">
            <?php foreach ($projects as $i => $p): ?>
                <div class="col-lg-4 col-md-6 project-item" data-category="<?= htmlspecialchars($p['cat']) ?>" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                    <div class="service-card h-100" style="cursor:default;">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="service-icon" style="margin-bottom:0;">
                                <i class="bi <?= htmlspecialchars($p['icon']) ?>"></i>
                            </div>
                            <span class="badge-pill" style="font-size:0.7rem;"><?= htmlspecialchars($p['tag']) ?></span>
                        </div>
                        <h4 style="font-size:1rem;font-weight:700;margin:12px 0 8px;"><?= htmlspecialchars($p['title']) ?></h4>
                        <p style="font-size:0.82rem;color:var(--gray-mid);margin-bottom:16px;"><?= htmlspecialchars($p['desc']) ?></p>
                        <div class="d-flex flex-wrap gap-1 mt-auto">
                            <?php foreach ($p['tech'] as $t): ?>
                                <span style="background:var(--gray-light);border:1px solid var(--border);border-radius:6px;padding:3px 10px;font-size:0.72rem;font-weight:600;color:var(--gray-dark);">
                                    <?= htmlspecialchars($t) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Filter JS -->
<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('btn-primary');
            b.classList.add('btn-outline-primary');
            b.setAttribute('aria-selected','false');
        });
        this.classList.add('btn-primary');
        this.classList.remove('btn-outline-primary');
        this.setAttribute('aria-selected','true');
        const filter = this.dataset.filter;
        document.querySelectorAll('.project-item').forEach(item => {
            const show = filter === 'All' || item.dataset.category === filter;
            item.style.display = show ? '' : 'none';
        });
    });
});
</script>

<!-- CTA -->
<section class="cta-section" aria-label="Call to Action">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="color:white;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:12px;">
            Have a Project in Mind? <span style="color:var(--accent)">Let's Build It!</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:520px;margin:0 auto 32px;">Join our growing list of happy clients. Get a free consultation today.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Start a Project</a>
            <a href="/services" class="btn btn-outline-light btn-lg">View Services</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
