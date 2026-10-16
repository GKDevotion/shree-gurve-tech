/* Shree Gurve Technology - site behaviour. Vanilla JS, no dependencies. */
(function () {
    'use strict';
    var $ = function (s, c) { return (c || document).querySelector(s); };
    var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
    var mqDesktop = window.matchMedia('(min-width: 1100px)');

    /* Sticky header shadow */
    var header = $('[data-header]');
    var onScroll = function () { header && header.classList.toggle('is-stuck', window.scrollY > 8); };
    onScroll(); window.addEventListener('scroll', onScroll, { passive: true });

    /* Desktop mega-menu: click/keyboard toggle (hover handled in CSS) */
    var items = $$('.nav__item--mega, .nav__item--drop');
    var closeAll = function (except) {
        items.forEach(function (li) {
            if (li === except) return;
            li.classList.remove('is-open');
            var b = $('.nav__link', li); b && b.setAttribute('aria-expanded', 'false');
        });
    };
    items.forEach(function (li) {
        var btn = $('.nav__link', li);
        if (!btn) return;
        btn.addEventListener('click', function () {
            var open = !li.classList.contains('is-open');
            closeAll(li);
            li.classList.toggle('is-open', open);
            btn.setAttribute('aria-expanded', String(open));
        });
    });
    document.addEventListener('click', function (e) { if (!e.target.closest('.nav')) closeAll(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { closeAll(); closeDrawer(); } });

    /* Mobile drawer */
    var drawer = $('[data-drawer]');
    var opener = $('[data-drawer-open]');
    var lastFocus = null;
    function openDrawer() {
        if (!drawer) return;
        lastFocus = document.activeElement;
        drawer.removeAttribute('inert');
        drawer.classList.add('is-open');
        document.body.classList.add('no-scroll');
        opener && opener.setAttribute('aria-expanded', 'true');
        var c = $('.drawer__top .nav-toggle', drawer); c && c.focus();
    }
    function closeDrawer() {
        if (!drawer || !drawer.classList.contains('is-open')) return;
        drawer.classList.remove('is-open');
        drawer.setAttribute('inert', '');
        document.body.classList.remove('no-scroll');
        opener && opener.setAttribute('aria-expanded', 'false');
        lastFocus && lastFocus.focus && lastFocus.focus();
    }
    opener && opener.addEventListener('click', openDrawer);
    $$('[data-drawer-close]').forEach(function (b) { b.addEventListener('click', closeDrawer); });
    if (drawer) $$('a', drawer).forEach(function (a) { a.addEventListener('click', closeDrawer); });
    (mqDesktop.addEventListener ? mqDesktop.addEventListener.bind(mqDesktop, 'change') : mqDesktop.addListener.bind(mqDesktop))(function (e) { if (e.matches) closeDrawer(); });

    /* Scroll reveal */
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        var targets = $$('.section .card, .section .project, .section .step, .section .quote, .section .proposal, .section .tool, .section .offer__item');
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('is-in'); io.unobserve(en.target); } });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
        targets.forEach(function (t, i) { t.classList.add('reveal'); t.style.transitionDelay = ((i % 3) * 70) + 'ms'; io.observe(t); });
    }

    /* Lead forms */
    $$('[data-lead-form]').forEach(function (form) {
        var status = $('.form__status', form);
        var btn = $('button[type=submit]', form);
        var label = $('.btn__label', btn);
        var say = function (msg, cls) { status.textContent = msg; status.className = 'form__status ' + (cls || ''); };
        form.addEventListener('submit', function (e) {
            if (!window.fetch) return;           // no-JS style fallback: normal POST
            e.preventDefault();
            $$('[aria-invalid]', form).forEach(function (f) { f.removeAttribute('aria-invalid'); });
            if (!form.checkValidity()) {
                var bad = $('input:invalid, textarea:invalid', form);
                bad && (bad.setAttribute('aria-invalid', 'true'), bad.focus());
                say('Please fill in the required fields correctly.', 'is-error');
                return;
            }
            btn.disabled = true; label.textContent = 'Sending…'; say('');
            fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } })
                .then(function (r) { return r.json().catch(function () { return { ok: false }; }); })
                .then(function (d) {
                    if (d.ok) { form.reset(); say(d.message, 'is-ok'); }
                    else {
                        Object.keys(d.errors || {}).forEach(function (k) { var f = form.elements[k]; f && f.setAttribute('aria-invalid', 'true'); });
                        say(d.message || 'Something went wrong. Please try again.', 'is-error');
                    }
                })
                .catch(function () { say('Network error. Please check your connection or call us.', 'is-error'); })
                .finally(function () { btn.disabled = false; label.textContent = 'Send message'; });
        });
    });

    /* Gallery lightbox */
    var lb = $('#lightbox');
    if (lb && lb.showModal) {
        var lbImg = $('img', lb);
        $$('[data-lightbox]').forEach(function (b) { b.addEventListener('click', function () { lbImg.src = b.getAttribute('data-lightbox'); lb.showModal(); }); });
        $('[data-lightbox-close]', lb).addEventListener('click', function () { lb.close(); });
        lb.addEventListener('click', function (e) { if (e.target === lb) lb.close(); });
    }
})();
