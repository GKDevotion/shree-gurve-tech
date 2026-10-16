<?php
$groups = tools();
$flat = array_merge(...array_values($groups));
page([
    'title'       => 'Free Online Tools - PDF, Image & Business Utilities | Shree Gurve Technology',
    'description' => 'Free online tools: merge, split and edit PDFs, compress images, remove watermarks, create flipbooks and more.',
    'canonical'   => 'tools',
    'crumbs'      => [['Free tools', '']],
    'schema'      => [[
        '@type' => 'ItemList',
        'name'  => 'Free online tools by ' . cfg('site.name'),
        'itemListElement' => array_map(
            static fn ($i, $t) => ['@type' => 'ListItem', 'position' => $i + 1, 'item' => ['@type' => 'WebApplication', 'name' => $t['name'], 'url' => $t['url'], 'applicationCategory' => 'UtilitiesApplication', 'description' => $t['desc']]],
            array_keys($flat), $flat
        ),
    ]],
]);
component('page-hero', ['eyebrow' => 'Handy utilities', 'title' => 'Free online tools', 'lead' => 'Quick utilities we built and maintain ourselves. Each opens in its own tab.', 'crumbs' => page('crumbs')]);
?>
<section class="section">
    <div class="container">
        <?php foreach ($groups as $name => $items): ?>
            <h2 class="group-title"><?= e($name) ?></h2>
            <div class="grid grid--3">
                <?php foreach ($items as $t): ?>
                    <a class="tool" href="<?= e($t['url']) ?>" target="_blank" rel="noopener">
                        <span class="card__icon"><?= icon($t['icon'], 22) ?></span>
                        <span><strong><?= e($t['name']) ?> <?= icon('external', 14) ?></strong><p><?= e($t['desc']) ?></p></span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php component('cta-band'); ?>
