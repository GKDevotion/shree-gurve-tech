<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Gallery – Office, Team & Work Culture | Shree Gurve Technology Surat';
$pageDesc      = 'Explore the gallery of Shree Gurve Technology — office photos, team culture, project work, and events from our IT company in Surat, Gujarat, India.';
$pageKeywords  = 'Shree Gurve Technology gallery, IT company Surat office, team photos, work culture, Gujarat IT company';
$pageCanonical = 'https://shreegurvetech.com/gallery';
$currentPage   = 'gallery';

include __DIR__ . '/includes/header.php';

$galleryItems = [
    ['cat'=>'Office',  'label'=>'Our Workspace',          'icon'=>'bi-building',         'desc'=>'Modern, collaborative workspace in Surat'],
    ['cat'=>'Office',  'label'=>'Development Area',       'icon'=>'bi-pc-display',       'desc'=>'Where the magic happens — our dev floor'],
    ['cat'=>'Office',  'label'=>'Meeting Room',           'icon'=>'bi-people-fill',      'desc'=>'Ideas come to life in our client meeting room'],
    ['cat'=>'Office',  'label'=>'Creative Zone',          'icon'=>'bi-palette2',         'desc'=>'Design & UI/UX workspace'],
    ['cat'=>'Team',    'label'=>'Our Team',               'icon'=>'bi-people',           'desc'=>'10+ talented professionals'],
    ['cat'=>'Team',    'label'=>'Team Collaboration',     'icon'=>'bi-diagram-2',        'desc'=>'Working together on client solutions'],
    ['cat'=>'Team',    'label'=>'Sprint Planning',        'icon'=>'bi-kanban',           'desc'=>'Weekly sprint planning sessions'],
    ['cat'=>'Team',    'label'=>'Team Celebration',       'icon'=>'bi-balloon-heart',    'desc'=>'Celebrating project milestones'],
    ['cat'=>'Events',  'label'=>'Tech Workshop 2024',     'icon'=>'bi-mortarboard',      'desc'=>'Internal knowledge sharing event'],
    ['cat'=>'Events',  'label'=>'Client Visit',           'icon'=>'bi-handshake',        'desc'=>'Hosting a client at our Surat office'],
    ['cat'=>'Events',  'label'=>'Annual Day 2024',        'icon'=>'bi-star',             'desc'=>'Our annual team gathering'],
    ['cat'=>'Events',  'label'=>'Tech Exhibition',        'icon'=>'bi-display',          'desc'=>'Showcasing our work at a Surat IT expo'],
    ['cat'=>'Work',    'label'=>'Project Delivery',       'icon'=>'bi-rocket-takeoff',   'desc'=>'Going live with a client\'s platform'],
    ['cat'=>'Work',    'label'=>'Code Review',            'icon'=>'bi-code-slash',       'desc'=>'Thorough code quality checks'],
    ['cat'=>'Work',    'label'=>'UI Design Session',      'icon'=>'bi-vector-pen',       'desc'=>'Crafting pixel-perfect interfaces'],
    ['cat'=>'Work',    'label'=>'Client Training',        'icon'=>'bi-camera-video',     'desc'=>'Training a client team on their new software'],
];

$colors = [
    'Office' => ['bg'=>'rgba(10,36,99,0.08)',  'ic'=>'var(--primary)'],
    'Team'   => ['bg'=>'rgba(59,139,235,0.08)','ic'=>'var(--electric)'],
    'Events' => ['bg'=>'rgba(244,98,58,0.08)', 'ic'=>'var(--accent)'],
    'Work'   => ['bg'=>'rgba(25,135,84,0.08)', 'ic'=>'#198754'],
];
$cats = ['All','Office','Team','Events','Work'];
?>

<section class="page-hero" aria-label="Gallery Page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Our Gallery</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">A glimpse into our workspace, team culture, events, and the work we love doing.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="section-py" aria-label="Photo Gallery">
    <div class="container">
        <!-- Filter -->
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-5" data-aos="fade-up">
            <?php foreach ($cats as $cat): ?>
                <button class="btn btn-sm gallery-filter <?= $cat === 'All' ? 'btn-primary' : 'btn-outline-primary' ?>"
                        data-filter="<?= htmlspecialchars($cat) ?>">
                    <?= htmlspecialchars($cat) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Grid -->
        <div class="row g-4" id="galleryGrid">
            <?php foreach ($galleryItems as $i => $item):
                $c = $colors[$item['cat']]; ?>
                <div class="col-lg-3 col-md-4 col-6 gallery-item" data-category="<?= htmlspecialchars($item['cat']) ?>"
                     data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 60 ?>">
                    <div class="gallery-card" role="img" aria-label="<?= htmlspecialchars($item['label']) ?>">
                        <!-- Placeholder visual (replace with real <img> tags) -->
                        <div class="gallery-placeholder" style="background:<?= $c['bg'] ?>;border:1px solid <?= $c['ic'] ?>22;">
                            <i class="bi <?= htmlspecialchars($item['icon']) ?>" style="color:<?= $c['ic'] ?>;font-size:2.5rem;"></i>
                            <span class="gallery-cat-badge" style="background:<?= $c['ic'] ?>;"><?= htmlspecialchars($item['cat']) ?></span>
                        </div>
                        <div class="gallery-info">
                            <h6><?= htmlspecialchars($item['label']) ?></h6>
                            <p><?= htmlspecialchars($item['desc']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Upload note -->
        <div class="text-center mt-5" data-aos="fade-up">
            <div style="background:var(--gray-light);border:2px dashed var(--border);border-radius:var(--radius-lg);padding:32px 24px;max-width:480px;margin:0 auto;">
                <i class="bi bi-images" style="font-size:2rem;color:var(--gray-mid);display:block;margin-bottom:12px;"></i>
                <h6 style="font-weight:700;margin-bottom:8px;">Add Your Photos</h6>
                <p style="font-size:0.82rem;color:var(--gray-mid);margin-bottom:16px;">
                    Replace the icon placeholders above with your real office/team photos.<br>
                    Upload images to <code>/assets/img/gallery/</code> and update the grid.
                </p>
                <a href="/contact-us" class="btn btn-primary btn-sm">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<style>
.gallery-card { border-radius: var(--radius-md); overflow: hidden; border: 1px solid var(--border); transition: var(--transition); }
.gallery-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-md); }
.gallery-placeholder { height: 200px; display: flex; align-items: center; justify-content: center; position: relative; flex-direction: column; gap: 8px; }
.gallery-cat-badge { position: absolute; top: 10px; left: 10px; color: white; font-size: 0.68rem; font-weight: 700; padding: 3px 10px; border-radius: 20px; letter-spacing: 0.5px; text-transform: uppercase; }
.gallery-info { padding: 14px 16px; background: white; }
.gallery-info h6 { font-size: 0.875rem; font-weight: 700; margin-bottom: 4px; color: var(--dark); }
.gallery-info p { font-size: 0.78rem; color: var(--gray-mid); margin: 0; }
</style>

<script>
document.querySelectorAll('.gallery-filter').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.gallery-filter').forEach(b => { b.classList.remove('btn-primary'); b.classList.add('btn-outline-primary'); });
        this.classList.add('btn-primary'); this.classList.remove('btn-outline-primary');
        const f = this.dataset.filter;
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.style.display = (f === 'All' || item.dataset.category === f) ? '' : 'none';
        });
    });
});
</script>

<!-- CTA -->
<section class="cta-section" aria-label="CTA">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="color:white;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:12px;">
            Want to Visit Our <span style="color:var(--accent)">Office in Surat?</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:480px;margin:0 auto 32px;">We'd love to meet you. Schedule a visit or call us anytime.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Get in Touch</a>
            <a href="tel:+918200017181" class="btn btn-outline-light btn-lg"><i class="bi bi-telephone-fill me-2"></i>+91 82000 17181</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
