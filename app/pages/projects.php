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
    'lead'    => count($all) . ' live websites and platforms we have designed, built and launched.',
    'crumbs'  => page('crumbs'),
]);
?>
<section class="section">
    <div class="container">
        <div class="grid grid--3">
            <?php $i = 0; foreach ($all as $p): component('project-card', ['p' => $p, 'priority' => $i++ < 1]); endforeach; ?>
        </div>
    </div>
</section>
<?php component('cta-band', ['title' => 'Want to see your project here?']); ?>
