<?php
/** Service / solution card. @var string $slug @var array $item @var string $type 'service'|'solution' */
$type  = $type ?? 'service';
$base  = $type === 'solution' ? 'solution-details' : 'service-details';
$glyph = $type === 'solution' ? solution_icon($slug) : service_icon($slug);
$subs  = $item['services'] ?? $item['solutions'] ?? [];
$count = count($subs);
$hay   = strtolower(short_title((string) $slug, $item) . ' ' . $item['title'] . ' ' . $item['description'] . ' '
    . implode(' ', array_map(static fn ($x) => $x['title'] . ' ' . ($x['text'] ?? ''), $subs)));
?>
<a class="card card--link" href="<?= e(url($base . '/' . $slug)) ?>" data-hay="<?= e($hay) ?>">
    <span class="card__icon"><?= icon($glyph, 26) ?></span>
    <h3 class="card__title"><?= e(short_title((string) $slug, $item)) ?></h3>
    <p class="card__text"><?= e(excerpt($item['description'] ?? '', 120)) ?></p>
    <span class="card__foot">
        <?php if ($count): ?><span class="card__meta"><?= $count ?> <?= $type === 'solution' ? 'modules' : 'offerings' ?></span><?php endif; ?>
        <span class="card__go" aria-hidden="true"><?= icon('arrow-right', 18) ?></span>
    </span>
</a>
