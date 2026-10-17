<?php
/** @var array $p  @var bool|null $priority */
$priority = $priority ?? false;
$img = 'img/project/' . preg_replace('/\.jpe?g$/i', '.webp', $p['icon']);
$host = parse_url($p['link'] ?? '', PHP_URL_HOST) ?: '';
?>
<article class="project" data-hay="<?= e(strtolower($p['title'] . ' ' . ($p['description'] ?? ''))) ?>">
    <a class="project__media" href="<?= e($p['link']) ?>" target="_blank" rel="noopener" tabindex="-1" aria-hidden="true">
        <img src="<?= asset($img) ?>" width="960" height="540" alt="" <?= $priority ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"' ?>>
    </a>
    <div class="project__body">
        <h3 class="project__title"><a href="<?= e($p['link']) ?>" target="_blank" rel="noopener"><?= e($p['title']) ?><span class="sr-only"> (opens in a new tab)</span></a></h3>
        <p><?= e(excerpt($p['description'] ?? '', 120)) ?></p>
        <?php if ($host): ?><span class="project__host"><?= icon('external', 14) ?> <?= e(preg_replace('/^www\./', '', $host)) ?></span><?php endif; ?>
    </div>
</article>
