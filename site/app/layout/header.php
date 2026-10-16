<?php
$svc   = services();
$sol   = solutions();
$toolG = tools();

$company = [['About us', 'about-us'], ['Proposals', 'proposals'], ['FAQs', 'faqs'], ['Contact', 'contact-us']];
if (count(gallery_images()) >= (int) cfg('gallery_min_images')) {
    array_splice($company, 2, 0, [['Gallery', 'gallery']]);
}

/** One mega-menu column of links with icons. */
$megaLinks = static function (array $items, string $base, callable $iconFor): string {
    $html = '';
    foreach ($items as $slug => $item) {
        $html .= '<li><a href="' . e(url($base . '/' . $slug)) . '">'
            . '<span class="mega__icon">' . icon($iconFor($slug), 18) . '</span>'
            . '<span>' . e(short_title((string) $slug, $item)) . '</span></a></li>';
    }
    return $html;
};
?>
<header class="site-header" data-header>
    <div class="container header__inner">
        <a class="brand" href="<?= e(url()) ?>" aria-label="<?= e(cfg('site.name')) ?> - home">
            <img src="<?= asset('img/logo.png') ?>" width="115" height="48" alt="<?= e(cfg('site.name')) ?>" fetchpriority="high">
        </a>

        <!-- Desktop navigation -->
        <nav class="nav" aria-label="Primary">
            <ul class="nav__list">
                <li class="nav__item nav__item--mega<?= is_current('services') || is_current('service-details') ? ' is-active' : '' ?>">
                    <button class="nav__link" type="button" aria-expanded="false" aria-controls="panel-services">Services <?= icon('chevron-down', 16, 'nav__caret') ?></button>
                    <div class="nav__panel" id="panel-services">
                        <div class="mega">
                            <div class="mega__head">
                                <strong>What we build</strong>
                                <a href="<?= e(url('services')) ?>">All services <?= icon('arrow-right', 16) ?></a>
                            </div>
                            <div class="mega__cols">
                                <?php foreach (columns($svc, 3) as $col): ?>
                                    <ul><?= $megaLinks($col, 'service-details', 'service_icon') ?></ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav__item nav__item--mega<?= is_current('solutions') || is_current('solution-details') ? ' is-active' : '' ?>">
                    <button class="nav__link" type="button" aria-expanded="false" aria-controls="panel-solutions">Solutions <?= icon('chevron-down', 16, 'nav__caret') ?></button>
                    <div class="nav__panel" id="panel-solutions">
                        <div class="mega">
                            <div class="mega__head">
                                <strong>Business software</strong>
                                <a href="<?= e(url('solutions')) ?>">All solutions <?= icon('arrow-right', 16) ?></a>
                            </div>
                            <div class="mega__cols">
                                <?php foreach (columns($sol, 3) as $col): ?>
                                    <ul><?= $megaLinks($col, 'solution-details', 'solution_icon') ?></ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav__item"><a class="nav__link" href="<?= e(url('projects')) ?>"<?= is_current('projects') ? ' aria-current="page"' : '' ?>>Projects</a></li>

                <li class="nav__item nav__item--mega<?= is_current('tools') ? ' is-active' : '' ?>">
                    <button class="nav__link" type="button" aria-expanded="false" aria-controls="panel-tools">Free tools <?= icon('chevron-down', 16, 'nav__caret') ?></button>
                    <div class="nav__panel" id="panel-tools">
                        <div class="mega">
                            <div class="mega__head">
                                <strong>Free online tools</strong>
                                <a href="<?= e(url('tools')) ?>">View all tools <?= icon('arrow-right', 16) ?></a>
                            </div>
                            <div class="mega__cols">
                                <?php foreach ($toolG as $group => $items): ?>
                                    <ul>
                                        <li class="mega__label"><?= e($group) ?></li>
                                        <?php foreach ($items as $t): ?>
                                            <li><a href="<?= e($t['url']) ?>" target="_blank" rel="noopener">
                                                <span class="mega__icon"><?= icon($t['icon'], 18) ?></span><span><?= e($t['name']) ?></span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav__item nav__item--drop<?= is_current('about-us') || is_current('proposals') || is_current('faqs') || is_current('gallery') ? ' is-active' : '' ?>">
                    <button class="nav__link" type="button" aria-expanded="false" aria-controls="panel-company">Company <?= icon('chevron-down', 16, 'nav__caret') ?></button>
                    <div class="nav__panel nav__panel--sm" id="panel-company">
                        <ul class="drop">
                            <?php foreach ($company as [$label, $path]): ?>
                                <li><a href="<?= e(url($path)) ?>"><?= e($label) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="header__actions">
            <button class="search-btn" type="button" data-search-open aria-label="Search services and solutions"><?= icon('search', 18) ?><span>Search</span><kbd>Ctrl K</kbd></button>
            <button class="icon-btn search-icon" type="button" data-search-open aria-label="Search"><?= icon('search', 20) ?></button>
            <a class="header__phone" href="<?= e(tel_href()) ?>"><?= icon('phone', 18) ?><span><?= e(cfg('contact.phone')) ?></span></a>
            <a class="btn btn--dark btn--sm header__cta" href="<?= e(url('contact-us')) ?>">Start a project</a>
            <button class="nav-toggle menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="drawer" data-drawer-open>
                <?= icon('menu', 24) ?>
            </button>
        </div>
    </div>
</header>

<!-- Mobile / tablet drawer -->
<div class="drawer" id="drawer" inert data-drawer>
    <div class="drawer__backdrop" data-drawer-close></div>
    <div class="drawer__panel" role="dialog" aria-modal="true" aria-label="Site menu">
        <div class="drawer__top">
            <a class="brand" href="<?= e(url()) ?>"><img src="<?= asset('img/logo.png') ?>" width="96" height="40" alt="<?= e(cfg('site.name')) ?>"></a>
            <button class="nav-toggle" type="button" aria-label="Close menu" data-drawer-close><?= icon('x', 24) ?></button>
        </div>

        <nav class="drawer__nav" aria-label="Mobile">
            <a class="drawer__link" href="<?= e(url()) ?>">Home</a>

            <details class="drawer__group">
                <summary>Services <?= icon('chevron-down', 18) ?></summary>
                <ul>
                    <?php foreach ($svc as $slug => $s): ?>
                        <li><a href="<?= e(url('service-details/' . $slug)) ?>"><?= e(short_title((string) $slug, $s)) ?></a></li>
                    <?php endforeach; ?>
                    <li><a class="drawer__all" href="<?= e(url('services')) ?>">All services <?= icon('arrow-right', 16) ?></a></li>
                </ul>
            </details>

            <details class="drawer__group">
                <summary>Solutions <?= icon('chevron-down', 18) ?></summary>
                <ul>
                    <?php foreach ($sol as $slug => $s): ?>
                        <li><a href="<?= e(url('solution-details/' . $slug)) ?>"><?= e(short_title((string) $slug, $s)) ?></a></li>
                    <?php endforeach; ?>
                    <li><a class="drawer__all" href="<?= e(url('solutions')) ?>">All solutions <?= icon('arrow-right', 16) ?></a></li>
                </ul>
            </details>

            <a class="drawer__link" href="<?= e(url('projects')) ?>">Projects</a>

            <details class="drawer__group">
                <summary>Free tools <?= icon('chevron-down', 18) ?></summary>
                <ul>
                    <?php foreach ($toolG as $items): foreach ($items as $t): ?>
                        <li><a href="<?= e($t['url']) ?>" target="_blank" rel="noopener"><?= e($t['name']) ?></a></li>
                    <?php endforeach; endforeach; ?>
                    <li><a class="drawer__all" href="<?= e(url('tools')) ?>">View all tools <?= icon('arrow-right', 16) ?></a></li>
                </ul>
            </details>

            <details class="drawer__group">
                <summary>Company <?= icon('chevron-down', 18) ?></summary>
                <ul>
                    <?php foreach ($company as [$label, $path]): ?>
                        <li><a href="<?= e(url($path)) ?>"><?= e($label) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </details>
        </nav>

        <div class="drawer__foot">
            <a class="btn btn--primary btn--block" href="<?= e(url('contact-us')) ?>">Start a project <?= icon('arrow-right', 18) ?></a>
            <a class="btn btn--ghost btn--block" href="<?= e(tel_href()) ?>"><?= icon('phone', 18) ?> <?= e(cfg('contact.phone')) ?></a>
        </div>
    </div>
</div>
