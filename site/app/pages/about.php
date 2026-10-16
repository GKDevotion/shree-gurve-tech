<?php
page([
    'title'       => 'About Us | Shree Gurve Technology - IT Company in Surat, India',
    'description' => 'Shree Gurve Technology is a Surat-based IT company building websites, mobile apps and custom software since 2019. Learn about our approach and values.',
    'canonical'   => 'about-us',
    'crumbs'      => [['About us', '']],
]);
component('page-hero', [
    'eyebrow' => 'About us',
    'title'   => 'A small, senior team that ships dependable software',
    'lead'    => cfg('site.name') . ' is an IT company based in Surat, Gujarat. Since ' . cfg('site.founded') . ' we have helped startups and growing businesses turn ideas into websites, apps and business systems that work.',
    'crumbs'  => page('crumbs'),
]);
?>
<section class="section">
    <div class="container split">
        <div>
            <p class="eyebrow">Who we are</p>
            <h2 style="margin-bottom:1.25rem">Technology partner, not just a vendor</h2>
            <div class="prose">
                <p>We design, build and maintain websites, mobile apps and custom software. Our clients range from first-time founders to established companies in finance, travel, real estate, education and services.</p>
                <p>Every project starts with understanding your goals. We then choose the simplest technology that solves the problem - and stay on after launch for support, fixes and the next round of improvements.</p>
            </div>
            <ul class="checklist" style="margin-top:1.75rem">
                <li><?= icon('check', 24) ?><span>Websites, web apps &amp; e-commerce</span></li>
                <li><?= icon('check', 24) ?><span>CRM, ERP, HRMS &amp; custom business software</span></li>
                <li><?= icon('check', 24) ?><span>Mobile apps, UI/UX, cloud &amp; digital marketing</span></li>
            </ul>
        </div>
        <div class="stats">
            <div class="stat"><strong><?= years_in_business() ?>+</strong><span>Years in business</span></div>
            <div class="stat"><strong><?= count(projects()) ?>+</strong><span>Projects delivered</span></div>
            <div class="stat"><strong><?= count(services()) ?></strong><span>IT services</span></div>
            <div class="stat"><strong><?= count(solutions()) ?></strong><span>Software solutions</span></div>
        </div>
    </div>
</section>

<section class="section section--sand">
    <div class="container">
        <?php component('section-head', ['eyebrow' => 'What we value', 'title' => 'How we work with you', 'align' => 'center']); ?>
        <div class="grid grid--4">
            <?php foreach ([['users','Partnership first','We work as an extension of your team - honest advice, regular updates and no surprises.'],['zap','Speed with care','Short milestones put working software in front of you early, without cutting corners.'],['shield','Secure by default','Validated input, hardened servers and sensible access control in every build.'],['chart','Built to grow','Clean architecture and clear documentation so your product scales with you.']] as [$ic,$t,$d]): ?>
                <div class="card"><span class="card__icon"><?= icon($ic, 26) ?></span><h3 class="card__title"><?= e($t) ?></h3><p class="card__text"><?= e($d) ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="container">
        <?php component('section-head', ['eyebrow' => 'Our process', 'title' => 'Simple, transparent, predictable', 'align' => 'center']); ?>
        <?php component('process'); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php component('section-head', ['eyebrow' => 'Technology', 'title' => 'Tools we build with', 'align' => 'center']); ?>
        <div class="chips" style="justify-content:center">
            <?php foreach (cfg('tech_stack') as $t): ?><span class="chip"><?= e($t) ?></span><?php endforeach; ?>
        </div>
    </div>
</section>
<?php component('cta-band'); ?>
