<?php /** Search box that filters [data-hay] items inside $for. @var string $label @var string $placeholder @var string $for */ ?>
<div class="finder" data-finder data-target="<?= e($for) ?>">
    <div class="finder__box">
        <?= icon('search', 18) ?>
        <label class="sr-only" for="finder-input"><?= e($label) ?></label>
        <input id="finder-input" type="search" placeholder="<?= e($placeholder) ?>" autocomplete="off">
    </div>
    <p class="finder__count" aria-live="polite"></p>
</div>
