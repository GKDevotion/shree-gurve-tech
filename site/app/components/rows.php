<?php
/**
 * Searchable list of services or solutions.
 * @var array  $items  slug => record
 * @var string $type   'service' | 'solution'
 * @var string|null $id  list id (default type)
 * @var int|null $limit  show only the first N (no search UI is rendered by this component)
 */
$base  = $type === 'solution' ? 'solution-details' : 'service-details';
$unit  = $type === 'solution' ? 'modules' : 'offerings';
$id    = $id ?? $type . '-rows';
$limit = $limit ?? null;
$list  = $limit ? array_slice($items, 0, $limit, true) : $items;
?>
<div class="rows rows--2" id="<?= e($id) ?>" data-rows>
    <?php foreach ($list as $slug => $it):
        $subs = $it['services'] ?? $it['solutions'] ?? [];
        $hay  = strtolower(short_title((string) $slug, $it) . ' ' . $it['title'] . ' ' . $it['description'] . ' ' . implode(' ', array_map(static fn ($x) => $x['title'] . ' ' . ($x['text'] ?? ''), $subs)));
    ?>
        <a class="row" href="<?= e(url($base . '/' . $slug)) ?>" data-hay="<?= e($hay) ?>">
            <span class="row__title"><?= e(short_title((string) $slug, $it)) ?></span>
            <span class="row__text"><?= e(excerpt($it['description'], 105)) ?></span>
            <span class="row__meta"><?= count($subs) ?> <?= $unit ?> <?= icon('arrow-right', 16) ?></span>
        </a>
    <?php endforeach; ?>
</div>
<p class="empty" data-empty hidden>Nothing matches that. <a href="<?= e(url('contact-us')) ?>">Tell us what you need</a> - we build custom software too.</p>
