<?php
/**
 * @var array $items         [['question'=>, 'answer'=> string|[intro, [bullets]]], ...]
 * @var bool|null $open_first
 */
$open_first = $open_first ?? false;
?>
<div class="faq">
    <?php foreach ($items as $i => $faq): ?>
        <details class="faq__item"<?= $open_first && $i === 0 ? ' open' : '' ?>>
            <summary><span><?= e($faq['question']) ?></span><?= icon('plus', 20, 'faq__plus') ?></summary>
            <div class="faq__answer">
                <?php if (is_array($faq['answer'])): ?>
                    <p><?= e($faq['answer'][0]) ?></p>
                    <?php if (!empty($faq['answer'][1])): ?>
                        <ul><?php foreach ($faq['answer'][1] as $li): ?><li><?= e($li) ?></li><?php endforeach; ?></ul>
                    <?php endif; ?>
                <?php else: ?>
                    <p><?= e($faq['answer']) ?></p>
                <?php endif; ?>
            </div>
        </details>
    <?php endforeach; ?>
</div>
