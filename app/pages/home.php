<?php
$svc      = services();
$projects = projects();
$years    = years_in_business();

page([
    'title'       => cfg('seo.default_title'),
    'description' => cfg('seo.default_description'),
    'canonical'   => '',
    'schema'      => [[
        '@type' => 'OfferCatalog',
        'name'  => 'IT services by ' . cfg('site.name'),
        'itemListElement' => array_map(
            static fn ($slug, $s) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $s['title'], 'url' => abs_url('service-details/' . $slug)]],
            array_keys($svc), $svc
        ),
    ]],
]);

$featured = array_intersect_key($projects, array_flip(['crest-view-tech', 'devotion-bullion', 'cosmos-globe', 'zed-capital', 'wealthora', 'the-tax-counsel', 'titan-wave', 'dvi-international']));
$homeFaqs = array_slice(faqs()['web-development']['faqs'], 0, 5);
?>

<!-- HERO -->
<section class="hero">
    <div class="container hero__grid">
        <div class="hero__copy">
            <p class="eyebrow">Software &amp; IT company · Surat, India</p>
            <h1>IT services &amp; software that <em>move</em> your business forward.</h1>
            <p class="lead">From websites and mobile apps to complete ERP, CRM and HR systems - we design and build reliable, scalable software for startups and growing companies.</p>
            <div class="hero__actions">
                <a class="btn btn--primary btn--lg" href="<?= e(url('contact-us')) ?>">Start a project <?= icon('arrow-right', 18) ?></a>
                <a class="btn btn--ghost btn--lg" href="<?= e(url('projects')) ?>">See our work</a>
            </div>
            <ul class="hero__facts">
                <li><?= icon('check', 18) ?> Building since <?= (int) cfg('site.founded') ?></li>
                <li><?= icon('check', 18) ?> <?= count($projects) ?> live projects</li>
                <li><?= icon('check', 18) ?> <?= count($svc) ?> services · <?= count(solutions()) ?> business solutions</li>
            </ul>
        </div>

        <div class="hero__visual" aria-hidden="true">
            <div class="hero__blob"></div>
            <div class="browser browser--back">
                <div class="browser__bar"><i></i><i></i><i></i></div>
                <img src="<?= asset('img/project/devotion-bullion.webp') ?>" width="960" height="540" alt="" loading="lazy">
            </div>
            <div class="browser browser--front">
                <div class="browser__bar"><i></i><i></i><i></i></div>
                <img src="<?= asset('img/project/crest-view-tech.webp') ?>" width="960" height="540" alt="" fetchpriority="high">
            </div>
            <div class="hero__badge">
                <?= icon('zap', 24) ?>
                <span><strong><?= $years ?> years</strong> shipping software</span>
            </div>
        </div>
    </div>
</section>

<?php component('brands'); ?>

<!-- SERVICES -->
<section class="section" id="services">
    <div class="container">
        <?php component('section-head', [
            'eyebrow' => 'What we do',
            'title'   => 'Everything you need to build and run digital products',
            'lead'    => 'Strategy, design, engineering and support under one roof - so you deal with one accountable team from idea to launch and beyond.',
            'link'    => ['All ' . count($svc) . ' services', 'services'],
        ]); ?>
        <div class="grid grid--3">
            <?php foreach (array_slice($svc, 0, 6, true) as $slug => $s): ?>
                <?php component('card-link', ['slug' => $slug, 'item' => $s, 'type' => 'service']); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- WHY US -->
<section class="section section--dark" id="why-us">
    <div class="container split">
        <div>
            <p class="eyebrow eyebrow--light">Why Shree Gurve</p>
            <h2>Built to last, not just to launch.</h2>
            <p class="lead" style="margin:1.25rem 0 2rem">We pair clean engineering with plain-English communication, so your product is dependable today and easy to grow tomorrow.</p>
            <ul class="checklist">
                <li><?= icon('check', 24) ?><span><strong style="color:#fff">End-to-end delivery.</strong> Discovery, UI/UX, development, deployment and long-term maintenance from a single team.</span></li>
                <li><?= icon('check', 24) ?><span><strong style="color:#fff">Modern, proven stack.</strong> <?= e(implode(', ', array_slice(cfg('tech_stack'), 0, 5))) ?> and cloud infrastructure.</span></li>
                <li><?= icon('check', 24) ?><span><strong style="color:#fff">Transparent proposals.</strong> Clear scope, milestone-based payments and no hidden fees.</span></li>
                <li><?= icon('check', 24) ?><span><strong style="color:#fff">Security &amp; support built in.</strong> Secure-by-default builds with post-launch support and bug-fix cover.</span></li>
            </ul>
        </div>
        <div class="stats" role="list">
            <div class="stat" role="listitem"><strong><?= $years ?>+</strong><span>Years in business</span></div>
            <div class="stat" role="listitem"><strong><?= count($projects) ?>+</strong><span>Projects delivered</span></div>
            <div class="stat" role="listitem"><strong><?= count($svc) ?></strong><span>IT services</span></div>
            <div class="stat" role="listitem"><strong><?= count(solutions()) ?></strong><span>Business software solutions</span></div>
        </div>
    </div>
</section>

<!-- WORK -->
<section class="section" id="work">
    <div class="container">
        <?php component('section-head', [
            'eyebrow' => 'Selected work',
            'title'   => 'Real products, live today',
            'lead'    => 'A sample of websites and platforms we have designed, built and launched for clients across industries.',
            'link'    => ['View all projects', 'projects'],
        ]); ?>
        <div class="grid grid--3">
            <?php foreach ($featured as $p): component('project-card', ['p' => $p]); endforeach; ?>
        </div>
    </div>
</section>

<!-- READY-MADE PROPOSALS -->
<section class="section section--sand" id="proposals">
    <div class="container">
        <?php component('section-head', [
            'eyebrow' => 'Ready-made software',
            'title'   => 'Start faster with a proven blueprint',
            'lead'    => 'Detailed proposals for the systems businesses ask for most - modules, timelines and pricing laid out up front.',
            'link'    => ['Browse all proposals', 'proposals'],
        ]); ?>
        <div class="grid grid--4">
            <?php foreach (proposals() as $pr): ?>
                <article class="proposal">
                    <div class="proposal__media<?= str_ends_with($pr['image'], '.jpg') ? ' proposal__media--cover' : '' ?>">
                        <img src="<?= asset($pr['image']) ?>" alt="" loading="lazy" width="480" height="300">
                    </div>
                    <div class="proposal__body">
                        <span class="tag"><?= e($pr['tag']) ?></span>
                        <h3><?= e($pr['title']) ?></h3>
                        <p><?= e($pr['text']) ?></p>
                        <a class="link-arrow" href="<?= e(url('proposal/' . $pr['slug'])) ?>" target="_blank" rel="noopener">View proposal <?= icon('arrow-right', 18) ?></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="section section--white" id="process">
    <div class="container">
        <?php component('section-head', ['eyebrow' => 'How we work', 'title' => 'A simple process, from first call to launch', 'align' => 'center']); ?>
        <?php component('process'); ?>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="section" id="clients">
    <div class="container">
        <?php component('section-head', ['eyebrow' => 'Client feedback', 'title' => 'What our clients say', 'align' => 'center']); ?>
        <div class="quotes">
            <?php foreach (array_slice(testimonials(), 0, 3) as $t): ?>
                <figure class="quote">
                    <div class="quote__stars" role="img" aria-label="<?= (int) $t['rating'] ?> out of 5 stars">
                        <?php for ($i = 0; $i < (int) $t['rating']; $i++) echo icon('star', 18); ?>
                    </div>
                    <blockquote><p><?= e($t['text']) ?></p></blockquote>
                    <figcaption>
                        <img src="<?= e(url($t['image'])) ?>" width="48" height="48" alt="" loading="lazy">
                        <span><strong><?= e($t['name']) ?></strong><small><?= e(trim($t['designation'])) ?></small></span>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ + TOOLS -->
<section class="section section--sand">
    <div class="container split split--wide-left" style="align-items:start">
        <div>
            <p class="eyebrow">Good to know</p>
            <h2 style="margin-bottom:1.5rem">Common questions</h2>
            <?php component('faq-list', ['items' => $homeFaqs, 'open_first' => true]); ?>
            <p style="margin-top:1.5rem"><a class="link-arrow" href="<?= e(url('faqs')) ?>">Read all FAQs <?= icon('arrow-right', 18) ?></a></p>
        </div>
        <aside class="aside-card aside-card--dark">
            <h2>Free online tools</h2>
            <p>Merge PDFs, compress images, make flipbooks and more - free utilities we built and maintain ourselves.</p>
            <div class="chips" style="margin-bottom:1.5rem">
                <?php foreach (array_slice(array_merge(...array_values(tools())), 0, 6) as $t): ?>
                    <a class="chip" href="<?= e($t['url']) ?>" target="_blank" rel="noopener"><?= e($t['name']) ?></a>
                <?php endforeach; ?>
            </div>
            <a class="btn btn--primary" href="<?= e(url('tools')) ?>">Explore all tools <?= icon('arrow-right', 18) ?></a>
        </aside>
    </div>
</section>

<?php component('cta-band'); ?>
