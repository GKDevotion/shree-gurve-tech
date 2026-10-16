<?php
/** @var string $title @var string|null $eyebrow @var string|null $lead @var string|null $align @var array|null $link [label, path] */
$eyebrow = $eyebrow ?? null; $lead = $lead ?? null; $align = $align ?? 'left'; $link = $link ?? null;
?>
<div class="section-head section-head--<?= e($align) ?>">
    <div class="section-head__text">
        <?php if ($eyebrow): ?><p class="eyebrow"><?= e($eyebrow) ?></p><?php endif; ?>
        <h2><?= e($title) ?></h2>
        <?php if ($lead): ?><p class="lead"><?= e($lead) ?></p><?php endif; ?>
    </div>
    <?php if ($link): ?>
        <a class="link-arrow" href="<?= e(url($link[1])) ?>"><?= e($link[0]) ?> <?= icon('arrow-right', 18) ?></a>
    <?php endif; ?>
</div>
