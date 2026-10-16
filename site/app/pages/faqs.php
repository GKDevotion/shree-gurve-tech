<?php
$groups = faqs();
$flat = [];
foreach ($groups as $g) foreach ($g['faqs'] as $f) $flat[] = $f;
page([
    'title'       => 'FAQs | Web, Software, Mobile, Cloud & IT Services - Shree Gurve Technology',
    'description' => 'Answers to common questions about web development, software, mobile apps, UI/UX, marketing, cloud, security, AI and more.',
    'canonical'   => 'faqs',
    'crumbs'      => [['FAQs', '']],
    'schema'      => [faq_schema($flat, abs_url('faqs'))],
]);
component('page-hero', ['eyebrow' => 'Help centre', 'title' => 'Frequently asked questions', 'lead' => count($flat) . ' answers across all our services.', 'crumbs' => page('crumbs')]);
?>
<section class="section">
    <div class="container" style="max-width:62rem">
        <nav class="faq-nav" aria-label="Jump to topic">
            <?php foreach ($groups as $slug => $g): ?><a href="#<?= e($slug) ?>"><?= e($g['title']) ?></a><?php endforeach; ?>
        </nav>
        <?php foreach ($groups as $slug => $g): ?>
            <div class="faq-group" id="<?= e($slug) ?>">
                <h2><?= e($g['title']) ?></h2>
                <?php component('faq-list', ['items' => $g['faqs']]); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php component('cta-band', ['title' => 'Still have a question?', 'text' => 'Send it over - a real person replies within one working day.']); ?>
