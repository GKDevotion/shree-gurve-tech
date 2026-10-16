<?php /** @var string $title  @var string|null $text  @var array|null $link [label, path] */ $text = $text ?? null; $link = $link ?? null; ?>
<div class="head">
    <div>
        <h2><?= e($title) ?></h2>
        <?php if ($text): ?><p><?= e($text) ?></p><?php endif; ?>
    </div>
    <?php if ($link): ?><a class="link-arrow" href="<?= e(url($link[1])) ?>"><?= e($link[0]) ?> <?= icon('arrow-right', 16) ?></a><?php endif; ?>
</div>
