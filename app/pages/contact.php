<?php
page([
    'title'       => 'Contact Shree Gurve Technology | Web & Software Development Company',
    'description' => 'Contact Shree Gurve Technology for web development, mobile apps, software and IT consulting. Call, email, WhatsApp or send a message.',
    'canonical'   => 'contact-us',
    'crumbs'      => [['Contact', '']],
    'schema'      => [['@type' => 'ContactPage', 'url' => abs_url('contact-us'), 'about' => ['@id' => abs_url('#organization')]]],
]);
component('page-hero', ['eyebrow' => 'Contact', 'title' => 'Let’s talk about your project', 'lead' => 'Fill in the form or reach us directly. We reply within one working day.', 'crumbs' => page('crumbs')]);
?>
<section class="section">
    <div class="container contact-grid">
        <div class="contact-list">
            <a class="contact-item" href="<?= e(tel_href()) ?>"><span class="feature__icon"><?= icon('phone', 22) ?></span><span><strong>Call us</strong><span><?= e(cfg('contact.phone')) ?></span></span></a>
            <a class="contact-item" href="mailto:<?= e(cfg('contact.email')) ?>"><span class="feature__icon"><?= icon('mail', 22) ?></span><span><strong>Email</strong><span><?= e(cfg('contact.email')) ?></span></span></a>
            <a class="contact-item" href="<?= e(cfg('social.whatsapp')) ?>" target="_blank" rel="noopener"><span class="feature__icon"><?= icon('whatsapp', 22) ?></span><span><strong>WhatsApp</strong><span>Chat with our team</span></span></a>
            <a class="contact-item" href="<?= e(cfg('contact.maps_url')) ?>" target="_blank" rel="noopener"><span class="feature__icon"><?= icon('pin', 22) ?></span><span><strong>Office</strong><span><?= e(cfg('contact.address')) ?></span></span></a>
            <div class="contact-item"><span class="feature__icon"><?= icon('clock', 22) ?></span><span><strong>Hours</strong><span><?= e(cfg('contact.hours')) ?></span></span></div>
        </div>
        <div class="card card--form">
            <h2 style="font-size:var(--step-3);margin-bottom:1.25rem">Send us a message</h2>
            <?php component('lead-form', ['form_id' => 'contact-form', 'source' => 'contact-us']); ?>
        </div>
    </div>
</section>
