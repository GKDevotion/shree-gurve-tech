<?php
/** @var string|null $slug */
$all = services();
$it  = $all[$slug ?? ''] ?? null;
if ($it === null) {
    not_found();
}
$path = 'service-details/' . $slug;
$faqs = array_slice(faqs()[$slug]['faqs'] ?? [], 0, 6);
$schema = clean_ld($it['ld_json'] ?? null, $path);
if ($faqs) {
    $schema[] = faq_schema($faqs, abs_url($path));
}
page([
    'title'       => $it['meta_title'],
    'description' => $it['meta_description'],
    'canonical'   => $path,
    'crumbs'      => [['Services', 'services'], [short_title($slug, $it), '']],
    'schema'      => $schema,
]);

component('page-hero', [
    'eyebrow' => 'Service',
    'title'   => $it['h1_tag'] ?: $it['title'],
    'lead'    => $it['description'],
    'crumbs'  => page('crumbs'),
    'actions' => '<a class="btn btn--primary btn--lg" href="' . e(url('contact-us')) . '">Discuss your project ' . icon('arrow-right', 18) . '</a>'
               . '<a class="btn btn--ghost btn--lg" href="' . e(tel_href()) . '">' . icon('phone', 18) . ' ' . e(cfg('contact.phone')) . '</a>',
]);
?>
<section class="section">
    <div class="container detail">
        <div class="detail__main">
            <h2 style="font-size:var(--step-3);margin-bottom:1.5rem">What’s included</h2>
            <div class="offer">
                <?php foreach ($it['services'] as $i => $item): ?>
                    <div class="offer__item">
                        <span class="offer__n"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <span class="card__icon"><?= icon(service_icon($slug), 22) ?></span>
                        <h3><?= e($item['title']) ?></h3>
                        <p><?= e($item['text']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if ($faqs): ?>
                <h2 style="font-size:var(--step-3);margin:3.5rem 0 1.5rem">Frequently asked questions</h2>
                <?php component('faq-list', ['items' => $faqs, 'open_first' => true]); ?>
                <p style="margin-top:1.5rem"><a class="link-arrow" href="<?= e(url('faqs#' . $slug)) ?>">More questions about this service <?= icon('arrow-right', 18) ?></a></p>
            <?php endif; ?>
        </div>

        <aside class="detail__aside" aria-label="Related">
            <div class="aside-card aside-card--dark">
                <h2>Ready to start?</h2>
                <p>Share a few details and we’ll reply within one working day with next steps.</p>
                <a class="btn btn--primary btn--block" href="<?= e(url('contact-us')) ?>">Get a free quote</a>
            </div>
            <nav class="aside-card" aria-label="All services">
                <h2>All services</h2>
                <ul class="side-nav">
                    <?php foreach ($all as $s2 => $x): ?>
                        <li><a href="<?= e(url('service-details/' . $s2)) ?>"<?= $s2 === $slug ? ' aria-current="page"' : '' ?>><?= e(short_title($s2, $x)) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>
    </div>
</section>
<?php component('cta-band'); ?>
