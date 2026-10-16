<?php
$svc = services();
page([
    'title'       => 'IT Services | Web, Mobile, Cloud, Security & More - Shree Gurve Technology',
    'description' => 'Explore professional IT services: web development, software development, mobile apps, UI/UX design, digital marketing, cloud, cybersecurity, AI automation and IT consulting.',
    'canonical'   => 'services',
    'crumbs'      => [['Services', '']],
    'schema'      => [[
        '@type' => 'ItemList',
        'name'  => 'IT services by ' . cfg('site.name'),
        'itemListElement' => array_map(
            static fn ($i, $slug, $s) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $s['title'], 'url' => abs_url('service-details/' . $slug)],
            range(0, count($svc) - 1), array_keys($svc), $svc
        ),
    ]],
]);
component('page-hero', [
    'eyebrow' => 'Services',
    'title'   => 'IT services for every stage of your business',
    'lead'    => 'Web, mobile, cloud, security, data and AI - one team to plan, build and look after your technology.',
    'crumbs'  => page('crumbs'),
]);
?>
<section class="section">
    <div class="container">
        <div class="grid grid--3">
            <?php foreach ($svc as $slug => $s) component('card-link', ['slug' => $slug, 'item' => $s, 'type' => 'service']); ?>
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="container">
        <?php component('section-head', ['eyebrow' => 'How we work', 'title' => 'From first call to launch', 'align' => 'center']); ?>
        <?php component('process'); ?>
    </div>
</section>
<?php component('cta-band', ['title' => 'Not sure which service you need?', 'text' => 'Describe your goal and we will recommend the simplest path to get there - no jargon, no obligation.']); ?>
