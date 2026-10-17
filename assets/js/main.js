/* Shree Gurve Technology - site behaviour. Vanilla JS, no dependencies. */
(function () {
    'use strict';
    var $ = function (s, c) { return (c || document).querySelector(s); };
    var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
    var norm = function (s) { return (s || '').toLowerCase().replace(/[^a-z0-9&+# ]+/g, ' ').replace(/\s+/g, ' ').trim(); };

    /* ---------- Header: desktop menus ---------- */
    var items = $$('.nav__item--mega, .nav__item--drop');
    var closeMenus = function (except) {
        items.forEach(function (li) {
            if (li === except) return;
            li.classList.remove('is-open');
            var b = $('.nav__link', li); b && b.setAttribute('aria-expanded', 'false');
        });
    };
    items.forEach(function (li) {
        var btn = $('.nav__link', li); if (!btn) return;
        btn.addEventListener('click', function () {
            var open = !li.classList.contains('is-open');
            closeMenus(li); li.classList.toggle('is-open', open); btn.setAttribute('aria-expanded', String(open));
        });
    });
    document.addEventListener('click', function (e) { if (!e.target.closest('.nav')) closeMenus(); });

    /* ---------- Mobile drawer ---------- */
    var drawer = $('[data-drawer]'), opener = $('[data-drawer-open]'), lastFocus = null;
    function openDrawer() {
        if (!drawer) return;
        lastFocus = document.activeElement;
        drawer.removeAttribute('inert'); drawer.classList.add('is-open'); document.body.classList.add('no-scroll');
        opener && opener.setAttribute('aria-expanded', 'true');
        var c = $('.drawer__top button', drawer); c && c.focus();
    }
    function closeDrawer() {
        if (!drawer || !drawer.classList.contains('is-open')) return;
        drawer.classList.remove('is-open'); drawer.setAttribute('inert', ''); document.body.classList.remove('no-scroll');
        opener && opener.setAttribute('aria-expanded', 'false');
        lastFocus && lastFocus.focus && lastFocus.focus();
    }
    opener && opener.addEventListener('click', openDrawer);
    $$('[data-drawer-close]').forEach(function (b) { b.addEventListener('click', closeDrawer); });
    drawer && $$('a', drawer).forEach(function (a) { a.addEventListener('click', closeDrawer); });
    var mq = window.matchMedia('(min-width: 1100px)');
    (mq.addEventListener ? mq.addEventListener.bind(mq, 'change') : mq.addListener.bind(mq))(function (e) { if (e.matches) closeDrawer(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { closeMenus(); closeDrawer(); } });

    /* ---------- Search palette (Ctrl/Cmd+K, "/" or any [data-search-open]) ---------- */
    var pal = $('#palette');
    if (pal && pal.showModal) {
        var pin = $('#palette-input'), plist = $('#palette-list'), index = null, loading = false, sel = -1, shown = [];
        var order = ['Service', 'Solution', 'Free tool', 'Project', 'Page'];
        var load = function (cb) {
            if (index) return cb();
            if (loading) return; loading = true;
            fetch(pal.getAttribute('data-index')).then(function (r) { return r.json(); })
                .then(function (d) { index = d.map(function (x) { x._t = norm(x.t); x._k = norm(x.t + ' ' + x.k + ' ' + x.d); return x; }); cb(); })
                .catch(function () { plist.innerHTML = '<p class="palette__hint">Search is unavailable right now.</p>'; });
        };
        var esc = function (s) { return String(s).replace(/[&<>"]/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[c]; }); };
        var render = function () {
            var q = norm(pin.value), toks = q ? q.split(' ') : [];
            var res = index.map(function (x) {
                var s = 0;
                for (var i = 0; i < toks.length; i++) {
                    var t = toks[i];
                    if (t.length < 3) { if ((' ' + x._t).indexOf(' ' + t) > -1) s += 6; else return null; }
                    else if (x._t.indexOf(t) === 0) s += 6; else if (x._t.indexOf(t) > -1) s += 4; else if (x._k.indexOf(t) > -1) s += 1; else return null;
                }
                return { x: x, s: s };
            }).filter(Boolean);
            if (!toks.length) res = res.filter(function (r) { return r.x.g === 'Service' || r.x.g === 'Solution'; }).slice(0, 8);
            res.sort(function (a, b) { return b.s - a.s || order.indexOf(a.x.g) - order.indexOf(b.x.g); });
            shown = res.slice(0, 9).map(function (r) { return r.x; });
            sel = shown.length ? 0 : -1;
            plist.innerHTML = shown.length
                ? (toks.length ? '' : '<p class="palette__hint" style="padding:.4rem .75rem">Popular</p>') + shown.map(function (x, i) {
                    return '<a role="option" href="' + esc(x.u) + '"' + (x.x ? ' target="_blank" rel="noopener"' : '') + ' aria-selected="' + (i === 0) + '"><b>' + esc(x.t) + '</b><em>' + esc(x.g) + '</em>' + (x.d ? '<small>' + esc(x.d) + '</small>' : '') + '</a>';
                }).join('')
                : '<p class="palette__hint">Nothing found for “' + esc(pin.value) + '”. <a href="' + esc(pal.getAttribute('data-index').replace('search-index.json', 'contact-us')) + '">Ask us</a> - we build custom software.</p>';
        };
        var move = function (d) {
            if (!shown.length) return;
            var opts = $$('a[role=option]', plist); if (!opts.length) return;
            opts[sel] && opts[sel].setAttribute('aria-selected', 'false');
            sel = (sel + d + opts.length) % opts.length;
            opts[sel].setAttribute('aria-selected', 'true'); opts[sel].scrollIntoView({ block: 'nearest' });
        };
        var openPal = function () {
            closeDrawer();
            if (!pal.open) pal.showModal();
            pin.value = ''; pin.focus();
            load(render);
        };
        $$('[data-search-open]').forEach(function (b) { b.addEventListener('click', function (e) { e.preventDefault(); openPal(); }); });
        $$('[data-search-close]').forEach(function (b) { b.addEventListener('click', function () { pal.close(); }); });
        pal.addEventListener('click', function (e) { if (e.target === pal) pal.close(); });
        pin.addEventListener('input', function () { index && render(); });
        pin.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowDown') { e.preventDefault(); move(1); }
            else if (e.key === 'ArrowUp') { e.preventDefault(); move(-1); }
            else if (e.key === 'Escape') { e.preventDefault(); pal.close(); }
            else if (e.key === 'Enter') { var a = $('a[aria-selected=true]', plist); if (a) { e.preventDefault(); a.click(); } }
        });
        document.addEventListener('keydown', function (e) {
            var typing = /^(input|textarea|select)$/i.test((e.target.tagName || '')) || e.target.isContentEditable;
            if ((e.key === 'k' || e.key === 'K') && (e.ctrlKey || e.metaKey)) { e.preventDefault(); openPal(); }
            else if (e.key === '/' && !typing) { e.preventDefault(); openPal(); }
        });
        if ('requestIdleCallback' in window) requestIdleCallback(function () { load(function () {}); }, { timeout: 4000 });
    } else {
        $$('[data-search-open]').forEach(function (b) { b.style.display = 'none'; });
    }

    /* ---------- On-page filter (services, solutions, projects) ---------- */
    $$('[data-finder]').forEach(function (f) {
        var target = $(f.getAttribute('data-target')); if (!target) return;
        var input = $('input', f), count = $('.finder__count', f);
        var rows = $$('[data-hay]', target), empty = $('[data-empty]', target.parentNode);
        var apply = function () {
            var toks = norm(input.value).split(' ').filter(Boolean), n = 0;
            rows.forEach(function (r) {
                var ok = toks.every(function (t) { return r.getAttribute('data-hay').indexOf(t) > -1; });
                r.hidden = !ok; if (ok) n++;
            });
            count.textContent = toks.length ? (n + ' of ' + rows.length + ' match') : '';
            empty && (empty.hidden = n > 0);
        };
        input.addEventListener('input', apply);
        input.addEventListener('keydown', function (e) { if (e.key === 'Escape') { input.value = ''; apply(); } });
    });

    /* Sidebar list filter on detail pages */
    $$('[data-sidelist]').forEach(function (box) {
        var input = $('input', box), lis = $$('li', box);
        input.addEventListener('input', function () {
            var q = norm(input.value);
            lis.forEach(function (li) { li.hidden = q && norm(li.textContent).indexOf(q) < 0; });
        });
        var cur = $('[aria-current]', box); cur && cur.scrollIntoView({ block: 'nearest' });
    });

    /* ---------- Tabs (home) ---------- */
    $$('[data-tabs]').forEach(function (list) {
        var tabs = $$('[role=tab]', list);
        var show = function (t) {
            tabs.forEach(function (x) {
                var on = x === t; x.setAttribute('aria-selected', String(on)); x.tabIndex = on ? 0 : -1;
                var p = document.getElementById(x.getAttribute('aria-controls')); p && (p.hidden = !on);
            });
        };
        tabs.forEach(function (t, i) {
            t.addEventListener('click', function () { show(t); });
            t.addEventListener('keydown', function (e) {
                var n = e.key === 'ArrowRight' ? 1 : e.key === 'ArrowLeft' ? -1 : 0; if (!n) return;
                var nx = tabs[(i + n + tabs.length) % tabs.length]; nx.focus(); show(nx);
            });
        });
    });

    /* ---------- FAQ page: topic chips + search ---------- */
    $$('[data-faqpage]').forEach(function (page) {
        var groups = $$('[data-group]', page), chips = $$('[data-topic]', page), input = $('input[type=search]', page);
        var count = $('.finder__count', page), empty = $('[data-empty]', page);
        var topic = chips.length ? chips[0].getAttribute('data-topic') : null;
        var pick = function (slug) {
            topic = slug; chips.forEach(function (c) { c.setAttribute('aria-pressed', String(c.getAttribute('data-topic') === slug)); }); apply();
        };
        var apply = function () {
            var toks = norm(input.value).split(' ').filter(Boolean), total = 0;
            groups.forEach(function (g) {
                var n = 0;
                $$('.faq__item', g).forEach(function (d) {
                    var ok = toks.every(function (t) { return d.getAttribute('data-hay').indexOf(t) > -1; });
                    d.hidden = !ok; if (ok) n++;
                });
                g.hidden = toks.length ? n === 0 : g.getAttribute('data-group') !== topic;
                if (!g.hidden) total += n;
            });
            chips.forEach(function (c) { c.setAttribute('aria-pressed', toks.length ? 'false' : String(c.getAttribute('data-topic') === topic)); });
            count.textContent = toks.length ? (total + ' match' + (total === 1 ? '' : 'es')) : '';
            empty && (empty.hidden = total > 0);
        };
        chips.forEach(function (c) { c.addEventListener('click', function () { input.value = ''; pick(c.getAttribute('data-topic')); }); });
        input.addEventListener('input', apply);
        var h = location.hash.slice(1);
        if (h && groups.some(function (g) { return g.getAttribute('data-group') === h; })) topic = h;
        apply();
    });

    /* ---------- Scroll reveal ---------- */
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        var targets = $$('.section .card, .section .project, .section .step, .section .quote, .section .proposal, .section .tool, .section .offer__item');
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('is-in'); io.unobserve(en.target); } });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
        targets.forEach(function (t, i) { t.classList.add('reveal'); t.style.transitionDelay = ((i % 3) * 70) + 'ms'; io.observe(t); });
    }

    /* ---------- Sticky header shadow ---------- */
    var hdr = $('[data-header]');
    var onScroll = function () { hdr && hdr.classList.toggle('is-stuck', window.scrollY > 8); };
    onScroll(); window.addEventListener('scroll', onScroll, { passive: true });

    /* ---------- Lead forms ---------- */
    $$('[data-lead-form]').forEach(function (form) {
        var status = $('.form__status', form), btn = $('button[type=submit]', form), label = $('.btn__label', btn);
        var say = function (msg, cls) { status.textContent = msg; status.className = 'form__status ' + (cls || ''); };
        form.addEventListener('submit', function (e) {
            if (!window.fetch) return;
            e.preventDefault();
            $$('[aria-invalid]', form).forEach(function (f) { f.removeAttribute('aria-invalid'); });
            if (!form.checkValidity()) {
                var bad = $('input:invalid, textarea:invalid', form);
                bad && (bad.setAttribute('aria-invalid', 'true'), bad.focus());
                say('Please fill in the required fields correctly.', 'is-error'); return;
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

    /* ---------- Gallery lightbox ---------- */
    var lb = $('#lightbox');
    if (lb && lb.showModal) {
        var lbImg = $('img', lb);
        $$('[data-lightbox]').forEach(function (b) { b.addEventListener('click', function () { lbImg.src = b.getAttribute('data-lightbox'); lb.showModal(); }); });
        $('[data-lightbox-close]', lb).addEventListener('click', function () { lb.close(); });
        lb.addEventListener('click', function (e) { if (e.target === lb) lb.close(); });
    }
})();
