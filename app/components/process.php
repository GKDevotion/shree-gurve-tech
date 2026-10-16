<?php
$steps = [
    ['Discover',  'We start with your goals, users and budget, and agree on scope and objectives.'],
    ['Plan',      'We analyse requirements, choose the right technology and map out a delivery plan.'],
    ['Build',     'Design, development and testing in short milestones - you see progress throughout.'],
    ['Launch & support', 'We deploy, hand over, and stay on for maintenance, fixes and improvements.'],
];
?>
<ol class="steps">
    <?php foreach ($steps as $i => [$t, $d]): ?>
        <li class="step">
            <span class="step__num"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
            <h3><?= e($t) ?></h3>
            <p><?= e($d) ?></p>
        </li>
    <?php endforeach; ?>
</ol>
