<?php
$sol = solutions();
page([
    'title'       => 'Business Software Solutions | CRM, ERP, HRMS & More - Shree Gurve Technology',
    'description' => 'Custom business software: CRM, ERP, HRMS, project management, helpdesk, inventory, accounting, e-commerce and industry-specific management systems.',
    'canonical'   => 'solutions',
    'crumbs'      => [['Solutions', '']],
    'schema'      => [[
        '@type' => 'ItemList',
        'name'  => 'Business software solutions by ' . cfg('site.name'),
        'itemListElement' => array_map(
            static fn ($i, $slug, $s) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $s['title'], 'url' => abs_url('solution-details/' . $slug)],
            range(0, count($sol) - 1), array_keys($sol), $sol
        ),
    ]],
]);
component('page-hero', [
    'eyebrow' => 'Solutions',
    'title'   => 'Business software, tailored to the way you work',
    'lead'    => 'From CRM and ERP to industry-specific management systems - we build software around your processes, not the other way around.',
    'crumbs'  => page('crumbs'),
    'actions' => '<a class="btn btn--primary btn--lg" href="' . e(url('proposals')) . '">Browse ready-made proposals ' . icon('arrow-right', 18) . '</a>',
    'after'   => render_component('finder', ['label' => 'Search solutions', 'placeholder' => 'Search solutions, e.g. school, inventory, payroll…', 'for' => '#solution-grid']),
]);
?>
<section class="section">
    <div class="container">
        <div class="grid grid--3" id="solution-grid">
            <?php foreach ($sol as $slug => $s) component('card-link', ['slug' => $slug, 'item' => $s, 'type' => 'solution']); ?>
        </div>
        <p class="empty" data-empty hidden>Nothing matches that. <a href="<?= e(url('contact-us')) ?>"><strong>Tell us what you need</strong></a> - most of our systems are custom.</p>
    </div>
</section>
<?php component('cta-band', ['title' => 'Need something that isn’t on the list?', 'text' => 'Most of our systems are custom. Tell us about your workflow and we’ll scope the right solution.']); ?>
