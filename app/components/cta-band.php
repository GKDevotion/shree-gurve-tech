<?php
/**
 * Closing call-to-action used at the bottom of most pages.
 * @var string|null $title
 * @var string|null $text
 */
$title = $title ?? 'Have an idea? Let’s build it together.';
$text  = $text ?? 'Tell us what you need - a website, an app or a full business system. We reply within one working day with next steps and a clear estimate.';
?>
<section class="section section--dark cta-band" aria-labelledby="cta-title">
    <div class="container cta-band__grid">
        <div class="cta-band__copy">
            <p class="eyebrow eyebrow--light">Let’s talk</p>
            <h2 id="cta-title"><?= e($title) ?></h2>
            <p class="lead"><?= e($text) ?></p>
            <ul class="cta-band__links">
                <li><?= icon('phone', 20) ?><a href="<?= e(tel_href()) ?>"><?= e(cfg('contact.phone')) ?></a></li>
                <li><?= icon('mail', 20) ?><a href="mailto:<?= e(cfg('contact.email')) ?>"><?= e(cfg('contact.email')) ?></a></li>
                <li><?= icon('clock', 20) ?><span><?= e(cfg('contact.hours')) ?></span></li>
            </ul>
        </div>
        <div class="cta-band__form card card--form">
            <?php component('lead-form', ['form_id' => 'cta-form', 'source' => request_path() ?: 'home']); ?>
        </div>
    </div>
</section>
