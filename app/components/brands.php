<?php
$brands = [
    ['adbookee', 'ADbookee'], ['cosmos-globe', 'Cosmos Globe'], ['crest-view-tech', 'Crest View Technologies'],
    ['devotion-group-1', 'Devotion Group'], ['keshav-tech', 'Keshav Technologies'], ['pvl-tourism', 'PVL Tours & Travels'],
    ['rishaan-tech', 'Rishaan Techno'], ['select-stock-1', 'Select Stock'], ['zedcapital', 'Zed Capital'],
];
?>
<section class="brands" aria-label="Companies we have worked with">
    <div class="container">
        <p class="brands__label">Trusted by growing businesses</p>
        <ul class="brands__list">
            <?php foreach ($brands as [$file, $name]): ?>
                <li><img src="<?= asset('img/brand/' . $file . '.png') ?>" width="155" height="45" alt="<?= e($name) ?>" loading="lazy"></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
