<?php /** @var array $sections  [{id,title,text[],list[]}] */ ?>
<section class="section">
    <div class="container legal">
        <nav class="legal__toc" aria-label="On this page">
            <ul>
                <?php foreach ($sections as $s): ?><li><a href="#<?= e($s['id']) ?>"><?= e($s['title']) ?></a></li><?php endforeach; ?>
            </ul>
        </nav>
        <div class="legal__body prose">
            <p class="note">Last reviewed: <?= date('F Y') ?>. Questions? Email <a href="mailto:<?= e(cfg('contact.email')) ?>"><?= e(cfg('contact.email')) ?></a>.</p>
            <?php foreach ($sections as $s): ?>
                <section id="<?= e($s['id']) ?>">
                    <h2><?= e($s['title']) ?></h2>
                    <?php foreach ($s['text'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
                    <?php if ($s['list']): ?><ul><?php foreach ($s['list'] as $li): ?><li><?= e($li) ?></li><?php endforeach; ?></ul><?php endif; ?>
                </section>
            <?php endforeach; ?>
        </div>
    </div>
</section>
