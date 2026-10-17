<?php
$all = projects();
page([
    'title'       => 'Our Projects | Web, Software & Mobile App Portfolio - Shree Gurve Technology',
    'description' => 'Explore websites and platforms built by Shree Gurve Technology for clients in finance, travel, real estate, technology and more.',
    'canonical'   => 'projects',
    'crumbs'      => [['Projects', '']],
]);
component('page-hero', [
    'eyebrow' => 'Portfolio',
    'title'   => 'Our projects',
    'lead'    => count($all) . ' live websites and platforms designed, built and launched for clients across industries. Browse the work below or search by project name.',
    'crumbs'  => page('crumbs'),
    'after'   => render_component('finder', ['label' => 'Search projects', 'placeholder' => 'Search projects…', 'for' => '#project-grid']),
]);
?>
<section class="section">
    <div class="container">
        <div class="grid grid--3" id="project-grid">
            <?php $i = 0; foreach ($all as $p): component('project-card', ['p' => $p, 'priority' => $i++ < 1]); endforeach; ?>
        </div>
        <p class="empty" data-empty hidden>No project matches that search.</p>
    </div>
</section>
<?php component('cta-band', ['title' => 'Want to see your project here?']); ?>
