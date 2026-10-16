<?php
$socials = [
    'linkedin'  => ['LinkedIn', 'linkedin'],
    'instagram' => ['Instagram', 'instagram'],
    'facebook'  => ['Facebook', 'facebook'],
    'youtube'   => ['YouTube', 'youtube'],
];
?>
<footer class="site-footer">
    <div class="container footer__grid">
        <div class="footer__brand">
            <a href="<?= e(url()) ?>" aria-label="<?= e(cfg('site.name')) ?> - home">
                <img src="<?= asset('img/logo-white.png') ?>" width="140" height="59" alt="<?= e(cfg('site.name')) ?>" loading="lazy">
            </a>
            <p><?= e(cfg('site.name')) ?> designs and builds websites, mobile apps and custom business software for startups and growing companies - since <?= (int) cfg('site.founded') ?>.</p>
            <ul class="footer__contact">
                <li><?= icon('phone', 18) ?><a href="<?= e(tel_href()) ?>"><?= e(cfg('contact.phone')) ?></a></li>
                <li><?= icon('mail', 18) ?><a href="mailto:<?= e(cfg('contact.email')) ?>"><?= e(cfg('contact.email')) ?></a></li>
                <li><?= icon('pin', 18) ?><a href="<?= e(cfg('contact.maps_url')) ?>" target="_blank" rel="noopener"><?= e(cfg('contact.address')) ?></a></li>
            </ul>
            <ul class="socials" aria-label="Social media">
                <?php foreach ($socials as $key => [$label, $ic]): if (!cfg("social.$key")) continue; ?>
                    <li><a href="<?= e(cfg("social.$key")) ?>" target="_blank" rel="noopener" aria-label="<?= e($label) ?>"><?= icon($ic, 20) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <nav class="footer__col" aria-label="Services">
            <h2 class="footer__title">Services</h2>
            <ul>
                <?php foreach (array_slice(services(), 0, 7, true) as $slug => $s): ?>
                    <li><a href="<?= e(url('service-details/' . $slug)) ?>"><?= e($s['title']) ?></a></li>
                <?php endforeach; ?>
                <li><a class="footer__more" href="<?= e(url('services')) ?>">All services <?= icon('arrow-right', 14) ?></a></li>
            </ul>
        </nav>

        <nav class="footer__col" aria-label="Solutions">
            <h2 class="footer__title">Solutions</h2>
            <ul>
                <?php foreach (array_slice(solutions(), 0, 7, true) as $slug => $s): ?>
                    <li><a href="<?= e(url('solution-details/' . $slug)) ?>"><?= e($s['title']) ?></a></li>
                <?php endforeach; ?>
                <li><a class="footer__more" href="<?= e(url('solutions')) ?>">All solutions <?= icon('arrow-right', 14) ?></a></li>
            </ul>
        </nav>

        <nav class="footer__col" aria-label="Company">
            <h2 class="footer__title">Company</h2>
            <ul>
                <li><a href="<?= e(url('about-us')) ?>">About us</a></li>
                <li><a href="<?= e(url('projects')) ?>">Projects</a></li>
                <li><a href="<?= e(url('proposals')) ?>">Proposals</a></li>
                <li><a href="<?= e(url('tools')) ?>">Free tools</a></li>
                <li><a href="<?= e(url('faqs')) ?>">FAQs</a></li>
                <li><a href="<?= e(url('contact-us')) ?>">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="footer__bar">
        <div class="container footer__bar-inner">
            <p>&copy; <?= date('Y') ?> <?= e(cfg('site.name')) ?>. All rights reserved.</p>
            <ul>
                <li><a href="<?= e(url('terms-conditions')) ?>">Terms &amp; Conditions</a></li>
                <li><a href="<?= e(url('privacy-policy')) ?>">Privacy Policy</a></li>
                <li><a href="<?= e(url('cookie-policy')) ?>">Cookie Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
