<?php
/**
 * Inner-page header.
 * @var string $title
 * @var string|null $eyebrow
 * @var string|null $lead
 * @var array $crumbs   [[label, path], ...]  (last item = current page, path may be '')
 * @var string|null $actions  pre-rendered HTML for buttons
 */
$eyebrow = $eyebrow ?? null;
$lead    = $lead ?? null;
$crumbs  = $crumbs ?? [];
$actions = $actions ?? null;
?>
<section class="page-hero">
    <div class="container">
        <?php if ($crumbs): ?>
            <nav class="crumbs" aria-label="Breadcrumb">
                <ol>
                    <li><a href="<?= e(url()) ?>">Home</a></li>
                    <?php foreach ($crumbs as $i => [$label, $path]): ?>
                        <?php if ($i === count($crumbs) - 1 || $path === ''): ?>
                            <li aria-current="page"><?= e($label) ?></li>
                        <?php else: ?>
                            <li><a href="<?= e(url($path)) ?>"><?= e($label) ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>
        <?php endif; ?>
        <div class="page-hero__body">
            <?php if ($eyebrow): ?><p class="eyebrow"><?= e($eyebrow) ?></p><?php endif; ?>
            <h1><?= e($title) ?></h1>
            <?php if ($lead): ?><p class="lead"><?= e($lead) ?></p><?php endif; ?>
            <?php if ($actions): ?><div class="page-hero__actions"><?= $actions ?></div><?php endif; ?>
        </div>
    </div>
</section>
