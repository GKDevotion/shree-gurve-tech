<?php
page([
    'title'       => 'Software Proposals | E-commerce, CRM, ERP & HRM - Shree Gurve Technology',
    'description' => 'Ready-made proposals for jewellery e-commerce, CRM, ERP and HRM software with modules, timelines and transparent pricing.',
    'canonical'   => 'proposals',
    'crumbs'      => [['Proposals', '']],
]);
component('page-hero', ['eyebrow' => 'Ready-made software', 'title' => 'Software proposals', 'lead' => 'Detailed blueprints with modules, timeline and pricing - customise any of them to fit your business.', 'crumbs' => page('crumbs')]);
?>
<section class="section">
    <div class="container">
        <div class="grid grid--3">
            <?php foreach (proposals() as $pr): ?>
                <article class="proposal">
                    <div class="proposal__media<?= str_ends_with($pr['image'], '.jpg') ? ' proposal__media--cover' : '' ?>"><img src="<?= asset($pr['image']) ?>" alt="" loading="lazy" width="480" height="300"></div>
                    <div class="proposal__body">
                        <span class="tag"><?= e($pr['tag']) ?></span>
                        <h2 style="font-size:var(--step-2)"><?= e($pr['title']) ?></h2>
                        <p><?= e($pr['text']) ?></p>
                        <a class="btn btn--dark" href="<?= e(url('proposal/' . $pr['slug'])) ?>" target="_blank" rel="noopener">View proposal <?= icon('arrow-right', 18) ?></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php component('cta-band', ['title' => 'Need a custom quote?']); ?>
