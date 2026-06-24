/**
 * Shree Gurve Technology - Main JS
 * Bootstrap 5 | Poppins | AOS
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {

    // ── Preloader ───────────────────────────────────────────
    const preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            setTimeout(() => preloader.classList.add('loaded'), 400);
        });
    }

    // ── AOS Init ────────────────────────────────────────────
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 700,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60,
        });
    }

    // ── Navbar Scroll ────────────────────────────────────────
    const mainNav = document.getElementById('mainNav');
    if (mainNav) {
        const onScroll = () => {
            mainNav.classList.toggle('scrolled', window.scrollY > 60);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    // ── Back to Top ──────────────────────────────────────────
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ── Counter Animation ─────────────────────────────────────
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length && typeof CountUp !== 'undefined') {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.dataset.count, 10);
                    const suffix = el.dataset.suffix || '';
                    const cu = new CountUp.CountUp(el, target, {
                        duration: 2.5,
                        suffix: suffix,
                        useEasing: true,
                    });
                    if (!cu.error) cu.start();
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => observer.observe(c));
    }

    // ── Contact Form AJAX ─────────────────────────────────────
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const btn = contactForm.querySelector('[type="submit"]');
            const resultDiv = document.getElementById('formResult');
            const originalText = btn.innerHTML;

            // Basic client-side validation
            if (!contactForm.checkValidity()) {
                contactForm.classList.add('was-validated');
                return;
            }

            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending…';

            try {
                const formData = new FormData(contactForm);
                const res = await fetch('/contact/submit.php', {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const data = await res.json();

                resultDiv.innerHTML = `<div class="alert alert-${data.success ? 'success' : 'danger'} mt-3">${data.message}</div>`;
                resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                if (data.success) {
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                }
            } catch {
                resultDiv.innerHTML = '<div class="alert alert-danger mt-3">Something went wrong. Please try again.</div>';
            } finally {
                btn.disabled = false;
                btn.innerHTML = originalText;
            }
        });
    }

    // ── Smooth scroll for anchor links ───────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ── Mega menu hover (desktop) ─────────────────────────────
    const megaDropdown = document.querySelector('.mega-dropdown');
    if (megaDropdown && window.innerWidth >= 992) {
        let timer;
        megaDropdown.addEventListener('mouseenter', () => {
            clearTimeout(timer);
            const menu = megaDropdown.querySelector('.dropdown-menu');
            if (menu) { menu.classList.add('show'); }
        });
        megaDropdown.addEventListener('mouseleave', () => {
            timer = setTimeout(() => {
                const menu = megaDropdown.querySelector('.dropdown-menu');
                if (menu) { menu.classList.remove('show'); }
            }, 150);
        });
    }

    // ── FAQ accordion keyboard nav ────────────────────────────
    document.querySelectorAll('.accordion-button').forEach(btn => {
        btn.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') btn.click();
        });
    });

});
