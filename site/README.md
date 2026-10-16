# Shree Gurve Technology - restructured site

PHP 8.1+ · no framework · no jQuery/Bootstrap · one CSS file (~35 KB) · one JS file (~10 KB) · fonts: DM Serif Display + Inter.

## Structure
```
index.php            front controller (all routes)
app/
  config.php         phone, email, socials, analytics IDs, subjects  <- edit here
  routes.php         URL -> page template (URLs unchanged from old site)
  helpers.php        url(), asset(), icon(), SEO/JSON-LD helpers
  layout/            main, header (mega menu + drawer), footer, sprite (SVG icons)
  components/        card-link, project-card, faq-list, lead-form, cta-band, ...
  pages/             one template per page
  data/              services.json, solutions.json, projects.json, testimonials.json, faqs.php, tools.php, proposals.php
  api/               lead.php (form endpoint), sitemap.php (auto XML sitemap)
assets/css/main.css  design tokens + all components
assets/js/main.js    nav, drawer, form submit, reveal, lightbox
storage/leads/       leads.jsonl (blocked from web by .htaccess)
proposal/            original proposal documents (kept as-is, bootstrap path fixed)
```
Local test: `php -S localhost:8000 dev-router.php`

## Add content
- New project: add entry in `app/data/projects.json`, put image in `assets/img/project/<name>.webp` (960px wide).
- New service/solution: add in the matching JSON; menu, cards, sitemap update automatically.
- Gallery appears in menu automatically once `assets/img/gallery/` has 4+ images.

## Search
- Header search (Ctrl/Cmd+K or `/`) reads `/search-index.json`, built from the JSON/PHP data automatically.
- `/services`, `/solutions`, `/projects`, `/faqs` have live filters. Short menu names live in `app/data/short.php`.

## Colours
All colours are CSS variables at the top of `assets/css/main.css` (`--accent` = cobalt #1f4fd8, `--accent-dark` = same blue lightened for use on black). Change there only.
