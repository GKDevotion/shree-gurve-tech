<?php
/**
 * Service / solution card.
 * @var string $slug
 * @var array  $item   JSON record (title, description)
 * @var string $type   'service' | 'solution'
 * @var int|null $index  optional numeric label
 */
$type  = $type ?? 'service';
$base  = $type === 'solution' ? 'solution-details' : 'service-details';
$glyph = $type === 'solution' ? solution_icon($slug) : service_icon($slug);
$count = count($item['services'] ?? $item['solutions'] ?? []);
?>
<a class="card card--link" href="<?= e(url($base . '/' . $slug)) ?>">
    <span class="card__icon"><?= icon($glyph, 26) ?></span>
    <h3 class="card__title"><?= e($item['title']) ?></h3>
    <p class="card__text"><?= e(excerpt($item['description'] ?? '', 120)) ?></p>
    <span class="card__foot">
        <?php if ($count): ?><span class="card__meta"><?= $count ?> <?= $type === 'solution' ? 'modules' : 'offerings' ?></span><?php endif; ?>
        <span class="card__go" aria-hidden="true"><?= icon('arrow-right', 18) ?></span>
    </span>
</a>
