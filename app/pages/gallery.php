<?php
$imgs = gallery_images();
page([
    'title'       => 'Gallery | Shree Gurve Technology',
    'description' => 'Photos from Shree Gurve Technology.',
    'canonical'   => 'gallery',
    'crumbs'      => [['Gallery', '']],
    'noindex'     => count($imgs) < (int) cfg('gallery_min_images'),
]);
component('page-hero', ['eyebrow' => 'Gallery', 'title' => 'Life at ' . cfg('site.short_name'), 'crumbs' => page('crumbs')]);
?>
<section class="section">
    <div class="container">
        <div class="gallery">
            <?php foreach ($imgs as $i => $im): ?>
                <button type="button" data-lightbox="<?= e(asset($im)) ?>" aria-label="Open image <?= $i + 1 ?>"><img src="<?= asset($im) ?>" alt="Gallery image <?= $i + 1 ?>" loading="lazy"></button>
            <?php endforeach; ?>
        </div>
        <dialog class="lightbox" id="lightbox"><button type="button" data-lightbox-close aria-label="Close"><?= icon('x', 22) ?></button><img src="" alt=""></dialog>
    </div>
</section>
