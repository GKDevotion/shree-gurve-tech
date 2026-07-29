<?php
include_once('../helper/function.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <!-- Primary Meta Tags -->
    <title>Jewelry E-Commerce Website Development | Laravel + Bootstrap Solution | Shree Gurve Tech</title>

    <meta name="description" content="Professional Jewelry E-Commerce Website Development using Laravel & Bootstrap. Includes admin panel, payment integration, SEO optimization, and scalable online store features.">
    <meta name="keywords" content="jewelry ecommerce website, online jewelry store development, laravel ecommerce website, jewelry website design india, ecommerce development services, gold jewelry website, online jewelry shop system">
    <meta name="author" content="Shree Gurve Tech">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="<?= getBaseUrl(); ?>/proposals">

    <!-- Open Graph (Facebook / WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Jewelry E-Commerce Website Development">
    <meta property="og:description" content="Build your online jewelry store with Laravel. Fully responsive, SEO-ready, and scalable solution.">
    <meta property="og:image" content="<?= getBaseUrl(); ?>/assets/img/header-250.png">
    <meta property="og:url" content="<?= getBaseUrl(); ?>/proposal/jewelry-ecommerce-proposal">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jewelry E-Commerce Development">
    <meta name="twitter:description" content="Complete jewelry eCommerce solution with admin panel & payment integration.">
    <meta name="twitter:image" content="<?= getBaseUrl(); ?>/assets/img/header-250.png">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="../assets/css/minify/jewellery-e-commerce.css" rel="stylesheet">
    
    <style>
      :root {
        --gold:        #C49A2A;
        --gold-light:  #E0B84A;
        --gold-pale:   #FDF6E3;
        --gold-dark:   #9A7520;
        --ink:         #1C1C1E;
        --ink-mid:     #3A3A3C;
        --ink-soft:    #636366;
        --bg-main:     #f8f6f175;
        --bg-card:     #FFFFFF;
        --bg-section:  #F2EFE8;
        --border:      #E5DCC8;
        --border-gold: #C8A84B;
        --green:       #1B6B44;
        --green-bg:    #EBF7F1;
        --blue:        #1A4480;
        --blue-bg:     #EBF1FA;
        --amber:       #7A5000;
        --amber-bg:    #FFF8E6;
        --radius:      10px;
        --shadow-sm:   0 2px 8px rgba(0,0,0,0.06);
        --shadow-md:   0 4px 16px rgba(0,0,0,0.10);
      }

      * { box-sizing: border-box; }

      body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--bg-main);
        color: var(--ink);
        font-size: 14px;
        line-height: 1.75;
        -webkit-font-smoothing: antialiased;
      }

      /* ── COVER ── */
      .cover-section {
        background: var(--ink);
        color: #fff;
        position: relative;
        overflow: hidden;
      }
      .cover-section::before {
        content: '';
        position: absolute; inset: 0;
        background: repeating-linear-gradient(
          45deg, transparent, transparent 60px,
          rgba(196,154,42,0.05) 60px, rgba(196,154,42,0.05) 120px
        );
      }
      .cover-section .cover-inner { position: relative; z-index: 1; }
      .cover-badge {
        display: inline-block;
        border: 1px solid var(--gold);
        color: var(--gold-light);
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        padding: 5px 16px;
        border-radius: 3px;
      }
      .cover-title {
        font-size: clamp(28px, 5vw, 52px);
        font-weight: 800;
        line-height: 1.1;
        color: #fff;
      }
      .cover-title span { color: var(--gold-light); }
      .cover-subtitle {
        font-size: 15px;
        color: rgba(255,255,255,0.55);
        font-weight: 300;
      }
      .cover-divider {
        width: 56px; height: 3px;
        background: linear-gradient(to right, var(--gold), transparent);
        border-radius: 2px;
      }
      .cover-meta-label {
        font-size: 12px;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--gold);
        font-weight: 600;
        display: block;
        margin-bottom: 3px;
      }
      .cover-meta-val {
        font-size: 13px;
        color: rgba(255,255,255,0.88);
        font-weight: 400;
      }
      .cover-meta-row {
        border-top: 1px solid rgba(196,154,42,0.25);
      }

      /* ── SECTION LAYOUT ── */
      .proposal-section {
        border-bottom: 1px solid var(--border);
        padding: 56px 0;
      }
      .proposal-section:last-child { border-bottom: none; }

      .sec-label {
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--gold-dark);
        margin-bottom: 4px;
      }
      .sec-title {
        font-size: clamp(20px, 3vw, 28px);
        font-weight: 700;
        color: var(--ink);
        line-height: 1.2;
        margin-bottom: 6px;
      }
      .sec-subtitle {
        font-size: 16px;
        color: var(--ink-soft);
        margin-bottom: 0;
      }

      /* ── STAT CARDS ── */
      .stat-card {
        background: var(--bg-section);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 22px 16px;
        text-align: center;
        transition: box-shadow 0.2s;
      }
      .stat-card:hover { box-shadow: var(--shadow-md); }
      .stat-num {
        font-size: 34px;
        font-weight: 800;
        color: var(--gold-dark);
        line-height: 1;
        margin-bottom: 4px;
      }
      .stat-lbl {
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--ink-soft);
      }

      /* ── CARDS ── */
      .prop-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 20px 22px;
        height: 100%;
        transition: box-shadow 0.2s;
      }
      .prop-card:hover { box-shadow: var(--shadow-sm); }
      .prop-card-gold { border-left: 3px solid var(--gold); }
      .prop-card-green { border-left: 3px solid var(--green); background: var(--green-bg); }
      .prop-card-blue  { border-left: 3px solid var(--blue);  background: var(--blue-bg);  }
      .prop-card-amber { border-left: 3px solid var(--amber); background: var(--amber-bg); }

      .card-icon-wrap {
        width: 50px; 
      height: 50px;
        border-radius: 10px;
        background: var(--gold-pale);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin-bottom: 10px;
      }
      .page-card-title {
        font-size: 20px;
        font-weight: 600;
        color: var(--ink);
        margin-bottom: 10px;
      }
      .page-card-list {
        list-style: none;
        padding: 0; margin: 0;
      }
      .page-card-list li {
        font-size: 15px;
        color: var(--ink-soft);
        padding: 3px 0 3px 14px;
        position: relative;
        line-height: 1.5;
      }
      .page-card-list li::before {
        content: '–';
        position: absolute; left: 0;
        color: var(--gold);
        font-weight: 500;
      }

      /* ── FEATURE LIST ── */
      .feat-list { list-style: none; padding: 0; margin: 0; }
      .feat-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 8px 0;
        border-bottom: 1px solid var(--border);
        font-size: 15px;
        line-height: 1.5;
      }
      .feat-list li:last-child { border-bottom: none; }
      .feat-icon {
        width: 20px; height: 20px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center; justify-content: center;
        font-size: 10px;
        font-weight: 700;
        flex-shrink: 0;
        margin-top: 1px;
      }
      .fi-check { background: var(--green-bg); color: var(--green); }
      .fi-plus  { background: var(--blue-bg);  color: var(--blue);  }
      .fi-star  { background: var(--gold-pale); color: var(--gold-dark); }

      /* ── TECH PILLS ── */
      .tech-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 6px;
        padding: 6px 13px;
        font-size: 15px;
        font-weight: 500;
        color: var(--ink-mid);
        margin: 3px;
        transition: box-shadow 0.15s;
      }
      .tech-pill:hover { box-shadow: var(--shadow-sm); }
      .tech-dot {
        width: 8px; height: 8px;
        border-radius: 50%;
        flex-shrink: 0;
      }
      .tech-cat-label {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--ink-soft);
        margin-bottom: 10px;
        display: block;
      }

      /* ── HIGHLIGHT BAR ── */
      .highlight-bar {
        background: var(--gold-pale);
        border: 1px solid var(--border-gold);
        border-radius: var(--radius);
        padding: 16px 20px;
        display: flex;
        align-items: center;
        gap: 14px;
      }
      .hl-icon {
        width: 36px; height: 36px;
        border-radius: 8px;
        background: var(--gold);
        display: flex; align-items: center; justify-content: center;
        color: #fff;
        font-size: 16px;
        flex-shrink: 0;
      }
      .hl-title { font-size: 16px; font-weight: 600; margin-bottom: 1px; }
      .hl-desc  { font-size: 14px; color: var(--ink-soft); margin: 0; }

      /* ── BADGES ── */
      .mod-badge {
        display: inline-block;
        padding: 3px 11px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        white-space: nowrap;
      }
      .mb-included { background: var(--green-bg);  color: var(--green); }
      .mb-added    { background: var(--blue-bg);   color: var(--blue);  }
      .mb-enhanced { background: var(--gold-pale); color: var(--gold-dark); }

      /* ── MODULE TABLE ── */
      .module-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
      }
      .module-table thead tr {
        background: var(--bg-section);
      }
      .module-table th {
        font-size: 10.5px;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--ink-soft);
        padding: 11px 14px;
        border-bottom: 1px solid var(--border);
        text-align: left;
      }
      .module-table td {
        padding: 11px 14px;
        border-bottom: 1px solid var(--border);
        vertical-align: middle;
      }
      .module-table tbody tr:last-child td { border-bottom: none; }
      .module-table tbody tr:hover td { background: var(--bg-section); }
      .module-table .mod-name { font-weight: 600; color: var(--ink); }
      .module-table .mod-desc { color: var(--ink-soft); font-size: 15px; }

      /* ── TIMELINE ── */
      .timeline-wrap { position: relative; padding-left: 30px; }
      .timeline-wrap::before {
        content: '';
        position: absolute;
        left: 9px; top: 6px; bottom: 6px;
        width: 2px;
        background: linear-gradient(to bottom, var(--gold), var(--border));
        border-radius: 2px;
      }
      .tl-item { position: relative; margin-bottom: 30px; }
      .tl-item:last-child { margin-bottom: 0; }
      .tl-dot {
        position: absolute;
        left: -26px; top: 5px;
        width: 14px; height: 14px;
        border-radius: 50%;
        background: var(--gold);
        border: 2.5px solid var(--bg-main);
        box-shadow: 0 0 0 2px var(--gold-light);
      }
      .tl-phase {
        font-size: 9.5px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 1px;
      }
      .tl-title { font-size: 15px; font-weight: 600; margin-bottom: 3px; }
      .tl-desc  { font-size: 15px; color: var(--ink-soft); line-height: 1.6; }
      .tl-week  {
        display: inline-block;
        background: var(--gold-pale);
        color: var(--gold-dark);
        font-size: 11px;
        font-weight: 600;
        padding: 2px 12px;
        border-radius: 20px;
        margin-top: 6px;
      }

      /* ── PRICING BOX ── */
      .pricing-dark {
        background: var(--ink);
        border-radius: var(--radius);
        padding: 32px 30px;
        color: #fff;
        position: relative;
        overflow: hidden;
        height: 100%;
      }
      .pricing-dark::after {
        content: '';
        position: absolute;
        bottom: -50px; right: -50px;
        width: 180px; height: 180px;
        border-radius: 50%;
        border: 1px solid rgba(196,154,42,0.15);
      }
      .pricing-dark::before {
        content: '';
        position: absolute;
        bottom: -10px; right: -10px;
        width: 110px; height: 110px;
        border-radius: 50%;
        border: 1px solid rgba(196,154,42,0.1);
      }
      .pricing-inner { position: relative; z-index: 1; }
      .pricing-lbl {
        font-size: 9.5px;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.4);
        font-weight: 600;
        margin-bottom: 8px;
      }
      .pricing-amount {
        font-size: clamp(36px, 6vw, 54px);
        font-weight: 800;
        color: var(--gold-light);
        line-height: 1;
        margin-bottom: 4px;
      }
      .pricing-amount sup { font-size: 22px; font-weight: 500; vertical-align: top; margin-top: 8px; }
      .pricing-note {
        font-size: 12px;
        color: rgba(255,255,255,0.4);
        margin-bottom: 18px;
      }
      .pricing-list { list-style: none; padding: 0; margin: 0; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 18px; }
      .pricing-list li {
        display: flex;
        justify-content: space-between;
        font-size: 15px;
        color: rgba(255,255,255,0.6);
        padding: 5px 0;
        gap: 8px;
      }
      .pricing-list li span:last-child { color: rgba(255,255,255,0.88); font-weight: 500; }
      .pricing-free { color: var(--gold-light) !important; }

      /* ── MILESTONE TABLE ── */
      .milestone-table { width: 100%; border-collapse: collapse; font-size: 13px; }
      .milestone-table td { padding: 10px 0; border-bottom: 1px solid var(--border); }
      .milestone-table tr:last-child td { border-bottom: none; }
      .ms-pct { font-weight: 700; color: var(--gold-dark); font-size: 15px; text-align: right; }

      /* ── NOTE BOX ── */
      .note-box {
        background: var(--gold-pale);
        border: 1px solid var(--border-gold);
        border-radius: var(--radius);
        padding: 16px 20px;
        display: flex;
        gap: 12px;
        align-items: flex-start;
        font-size: 15px;
        color: var(--ink-mid);
      }

      /* ── FOOTER ── */
      .doc-footer {
        background: var(--ink);
        color: #fff;
        font-size: 14px;
        padding: 10px 0;
      }
      .doc-footer strong { color: var(--gold-light); }

      /* ── UTIL ── */
      .text-gold    { color: var(--gold-dark); }
      .text-soft    { color: var(--ink-soft); }
      .fw-600       { font-weight: 600; }
      .fs-11        { font-size: 11px; }
      .bg-section   { background: var(--bg-section); }
      .border-custom { border: 1px solid var(--border) !important; }
      .rounded-custom { border-radius: var(--radius) !important; }

      /* ── PRINT ── */
      @media print {
        .cover-section, .doc-footer { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
        body { background: white; }
      }

      /* ── RESPONSIVE TWEAKS ── */
      @media (max-width: 575.98px) {
        .cover-section .py-5 { padding-top: 2.5rem !important; padding-bottom: 2.5rem !important; }
        .cover-meta-row { gap: 20px !important; }
        .proposal-section { padding: 36px 0; }
        .module-table th:nth-child(2), .module-table td:nth-child(2) { display: none; }
        .pricing-dark { padding: 24px 20px; }
      }
      @media (max-width: 767.98px) {
        .doc-footer .row > div:not(:first-child) { text-align: center !important; }
      }
    </style>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Jewelry E-Commerce Website Development",
        "provider": {
          "@type": "Organization",
          "name": "Shree Gurve Technology"
        },
        "areaServed": "India",
        "description": "Professional jewelry e-commerce website development using Laravel with admin panel, payment gateway, and SEO optimization.",
        "offers": {
          "@type": "Offer",
          "priceCurrency": "INR",
          "price": "50000",
          "availability": "https://schema.org/InStock"
        }
      }
    </script>
  </head>
<body>

<!-- ═══════════════════════════════════════
     COVER SECTION
════════════════════════════════════════ -->
<section class="cover-section">
  <div class="cover-inner container-lg py-5 px-4 px-md-5">
    <div class="py-md-3">
      <div class="cover-badge mb-4">Project Proposal &nbsp;·&nbsp; 2026</div>

      <h1 class="cover-title mt-3 mb-0">Jewellery E-Commerce</h1>
      <h1 class="cover-title mb-3"><span>Management System</span></h1>
      <div class="cover-divider mb-3"></div>
      <p class="cover-subtitle mb-1">Full-Stack Online Retail Platform — Frontend, Admin Panel &amp; API Integration</p>
      <p class="cover-subtitle">Built with <strong class="text-white">Laravel (Latest)</strong> + <strong class="text-white">Bootstrap 5</strong></p>

      <div class="cover-meta-row pt-4 mt-4 d-flex flex-wrap gap-4">
        <div>
          <span class="cover-meta-label">Prepared by</span>
          <span class="cover-meta-val">Shree Gurve</span>
        </div>
        <div>
          <span class="cover-meta-label">Technology</span>
          <span class="cover-meta-val">Laravel 11+ &amp; Bootstrap 5</span>
        </div>
        <div>
          <span class="cover-meta-label">Document Type</span>
          <span class="cover-meta-val">Detailed Project Quotation</span>
        </div>
        <div>
          <span class="cover-meta-label">Version</span>
          <span class="cover-meta-val">1.0 — Enhanced</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-lg px-4 px-md-5">

  <!-- ═══════════════════════════════════════
       01 · OVERVIEW
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">01 · Overview</div>
    <h2 class="sec-title">Project Overview</h2>
    <p class="sec-subtitle mb-4">A complete, professional Jewellery e-commerce platform designed for scalable online retail.</p>

    <!-- Stat Cards -->
    <div class="row g-3 mb-4">
      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-num">15+</div>
          <div class="stat-lbl">Website Pages</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-num">9</div>
          <div class="stat-lbl">Admin Modules</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-num">100%</div>
          <div class="stat-lbl">Responsive UI</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-num">API</div>
          <div class="stat-lbl">Integrated</div>
        </div>
      </div>
    </div>

    <div class="prop-card prop-card-gold">
      <p class="mb-0" style="font-size:16px; color: var(--ink-mid); line-height:1.85;">
        Shree Gurve proposes to develop a complete and professional Jewellery E-Commerce Website to help your business transition from offline retail to a structured and scalable online sales model. The website will be <strong>fully responsive, secure, SEO-optimized</strong>, and designed to support dynamic pricing, pincode-based shipping logic, and smooth order management — all built on <strong>Laravel (latest version)</strong> with a <strong>Bootstrap 5</strong> frontend.
      </p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       02 · TECHNOLOGY STACK
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">02 · Technology</div>
    <h2 class="sec-title">Technology Stack</h2>
    <p class="sec-subtitle mb-4">Modern, production-grade technologies for reliability and long-term maintainability.</p>

    <div class="row g-4">
      <div class="col-12 col-md-6">
        <span class="tech-cat-label">Frontend &amp; UI</span>
        <div>
          <span class="tech-pill"><span class="tech-dot" style="background:#7952B3;"></span>Bootstrap 5</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#F7DF1E;"></span>Vanilla JS / jQuery</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#E44D26;"></span>HTML5 / CSS3</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#38BDF8;"></span>Blade Templates</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#FF6B6B;"></span>AJAX / Fetch API</span>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <span class="tech-cat-label">Backend &amp; Infrastructure</span>
        <div>
          <span class="tech-pill"><span class="tech-dot" style="background:#FF2D20;"></span>Laravel 11+</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#4479A1;"></span>MySQL 8</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#8892BF;"></span>PHP 8.2+</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#4EA94B;"></span>RESTful APIs</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#CB3837;"></span>Redis Cache</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#0EA5E9;"></span>AWS S3</span>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <span class="tech-cat-label">Payment &amp; Integrations</span>
        <div>
          <span class="tech-pill"><span class="tech-dot" style="background:#002D62;"></span>Razorpay</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#009CDE;"></span>PayU / CCAvenue</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#00B900;"></span>WhatsApp API</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#EA4335;"></span>SMTP / Mail</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#FF6900;"></span>SMS (2Factor)</span>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <span class="tech-cat-label">DevOps &amp; Security</span>
        <div>
          <span class="tech-pill"><span class="tech-dot" style="background:#F05032;"></span>Git / GitHub</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#326CE5;"></span>cPanel / VPS</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#00C7B7;"></span>SSL / HTTPS</span>
          <span class="tech-pill"><span class="tech-dot" style="background:#FF9500;"></span>Laravel Sanctum</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       03 · WEBSITE PAGES
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">03 · Website Structure</div>
    <h2 class="sec-title">Complete Website Pages</h2>
    <p class="sec-subtitle mb-4">All 15+ pages with full feature sets, SEO meta tags, and responsive layout.</p>

    <div class="row g-3">
      <!-- Home -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">🏠</div>
          <div class="page-card-title">Home Page</div>
          <ul class="page-card-list">
            <li>Premium hero banner / slider</li>
            <li>Featured collections grid</li>
            <li>Best-selling products</li>
            <li>New arrivals section</li>
            <li>Promotional banners</li>
            <li>Trust badges</li>
            <li>Customer testimonials</li>
            <li>Newsletter subscription</li>
            <li>Mega footer with quick links</li>
          </ul>
        </div>
      </div>
      <!-- Shop -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">🛍️</div>
          <div class="page-card-title">Shop / Category Pages</div>
          <ul class="page-card-list">
            <li>Full product listing</li>
            <li>Category-based browsing</li>
            <li>Price range filter</li>
            <li>Sort: Latest, Price, Popularity</li>
            <li>Pagination / load more</li>
            <li>Category banner</li>
            <li>SEO-friendly descriptions</li>
            <li>Availability filter</li>
          </ul>
        </div>
      </div>
      <!-- Product -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">💎</div>
          <div class="page-card-title">Product Detail Page</div>
          <ul class="page-card-list">
            <li>Image gallery with zoom</li>
            <li>MRP + sale pricing</li>
            <li>Stock status display</li>
            <li>Quantity selector</li>
            <li>Add to Cart / Wishlist</li>
            <li>Specifications tab</li>
            <li>Related products</li>
            <li>Reviews &amp; ratings</li>
          </ul>
        </div>
      </div>
      <!-- Cart -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">🛒</div>
          <div class="page-card-title">Cart Page</div>
          <ul class="page-card-list">
            <li>Product summary</li>
            <li>Qty update / remove item</li>
            <li>Pincode shipping calculator</li>
            <li>Auto discount display</li>
            <li>Coupon code field</li>
            <li>Subtotal &amp; grand total</li>
          </ul>
        </div>
      </div>
      <!-- Checkout -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">💳</div>
          <div class="page-card-title">Checkout Page</div>
          <ul class="page-card-list">
            <li>Billing details form</li>
            <li>Shipping address</li>
            <li>Payment method selector</li>
            <li>Order summary panel</li>
            <li>Terms &amp; conditions</li>
            <li>Secure payment gateway</li>
          </ul>
        </div>
      </div>
      <!-- My Account -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">👤</div>
          <div class="page-card-title">My Account</div>
          <ul class="page-card-list">
            <li>Dashboard overview</li>
            <li>Order history + tracking</li>
            <li>Address book</li>
            <li>Wishlist management</li>
            <li>Profile management</li>
            <li>Password change</li>
            <li>Login / Register</li>
          </ul>
        </div>
      </div>
      <!-- Static -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">📄</div>
          <div class="page-card-title">Static / Policy Pages</div>
          <ul class="page-card-list">
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Privacy Policy</li>
            <li>Refund &amp; Cancellation</li>
            <li>Shipping Policy</li>
            <li>Terms &amp; Conditions</li>
            <li>FAQ Page</li>
          </ul>
        </div>
      </div>
      <!-- Wishlist -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">❤️</div>
          <div class="page-card-title">Wishlist</div>
          <ul class="page-card-list">
            <li>Save products for later</li>
            <li>Move to cart action</li>
            <li>Share wishlist link</li>
            <li>Guest wishlist (session)</li>
          </ul>
        </div>
      </div>
      <!-- Search -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="prop-card h-100">
          <div class="card-icon-wrap">🔍</div>
          <div class="page-card-title">Live Search</div>
          <ul class="page-card-list">
            <li>AJAX live suggestions</li>
            <li>Search results page</li>
            <li>Filter on results</li>
            <li>No-results UX</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       04 · CORE FEATURES
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">04 · Core Features</div>
    <h2 class="sec-title">Functional Feature Set</h2>
    <p class="sec-subtitle mb-4">All business logic, shipping, discounts, and customer-facing features built-in.</p>

    <div class="row g-4 mb-4">
      <div class="col-12 col-md-6">
        <div class="highlight-bar mb-3">
          <div class="hl-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div>
            <div class="hl-title">Pincode-Based Shipping</div>
            <p class="hl-desc">Automatic charges by delivery location. Fully manageable from Admin.</p>
          </div>
        </div>
        <ul class="feat-list">
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Ahmedabad — ₹30 flat rate</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Other cities — custom configurable rates</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Free shipping threshold (admin-configurable)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> COD availability by pincode</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Serviceability check at cart/checkout</li>
        </ul>
      </div>
      <div class="col-12 col-md-6">
        <div class="highlight-bar mb-3">
          <div class="hl-icon"><i class="bi bi-tags-fill"></i></div>
          <div>
            <div class="hl-title">Smart Discount System</div>
            <p class="hl-desc">Quantity-based auto discount + manual product-level sale pricing.</p>
          </div>
        </div>
        <ul class="feat-list">
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> No discount for 1–49 items</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> 5–10% auto bulk discount (50+ items)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Product-wise manual discount by Admin</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Sale pricing / promotional pricing</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Coupon code system (added)</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Flash sale / time-limited offers</li>
        </ul>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-12 col-md-6">
        <p class="tech-cat-label">Customer Features</p>
        <ul class="feat-list">
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> User registration &amp; login (Email + OTP)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Social login (Google)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Order tracking page</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Wishlist management</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Product reviews &amp; star ratings</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Loyalty points / reward system</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Refer &amp; earn module</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Return &amp; exchange request</li>
        </ul>
      </div>
      <div class="col-12 col-md-6">
        <p class="tech-cat-label">Order &amp; Payment</p>
        <ul class="feat-list">
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Razorpay / PayU integration</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Cash on Delivery (COD)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> UPI / Net banking / Cards</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Order confirmation Email + SMS</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Invoice PDF generation</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Payment failure retry flow</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Partial refund management</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> WhatsApp order notification</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       05 · ADMIN PANEL
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">05 · Admin Panel</div>
    <h2 class="sec-title">Admin Panel Capabilities</h2>
    <p class="sec-subtitle mb-4">A complete backend control center for products, orders, customers, and reports.</p>

    <div class="row g-3">
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">📦</span>
            <span class="fw-600" style="font-size:14px;">Product Management</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Add / edit / delete products</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Bulk import via Excel/CSV</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Multiple images per product</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> SEO meta per product</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Product variants (size, metal)</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">🗂️</span>
            <span class="fw-600" style="font-size:14px;">Category Management</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Category / subcategory tree</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Category banners</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> SEO per category</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Sorting &amp; visibility</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Featured category tags</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">📊</span>
            <span class="fw-600" style="font-size:14px;">Inventory Control</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Stock quantity tracking</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Low stock alerts</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Out-of-stock management</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Stock audit log</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Restock notifications</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">🚚</span>
            <span class="fw-600" style="font-size:14px;">Shipping Config</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Pincode rate management</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Zone-based pricing</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Free shipping threshold</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Courier partner config</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Estimated delivery days</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">📋</span>
            <span class="fw-600" style="font-size:14px;">Order Management</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Order list with status filter</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Status update flow</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Invoice PDF print</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Bulk order export</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Return request processing</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">👥</span>
            <span class="fw-600" style="font-size:14px;">Customer Management</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Customer list &amp; details</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Order history per customer</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Block / activate users</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Customer groups (VIP, Bulk)</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Loyalty points management</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">📈</span>
            <span class="fw-600" style="font-size:14px;">Sales Reports</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Revenue dashboard</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Product-wise sales report</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Date range filters</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Export to Excel / PDF</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> GST-ready report format</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">🎨</span>
            <span class="fw-600" style="font-size:14px;">Content Manager</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Home banner management</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Static page editor</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> FAQ management</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Blog / news module</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Popup / announcement bar</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="prop-card h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span style="font-size:18px;">⚙️</span>
            <span class="fw-600" style="font-size:14px;">Settings &amp; Config</span>
          </div>
          <ul class="feat-list" style="font-size:15px;">
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Site settings (logo, name)</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Payment gateway toggle</li>
            <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Email / SMS templates</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Admin roles &amp; permissions</li>
            <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Maintenance mode switch</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       06 · ADDED MODULES
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">06 · Enhanced Scope</div>
    <h2 class="sec-title">Added &amp; Enhanced Modules</h2>
    <p class="sec-subtitle mb-4">Modules recommended beyond original scope to make the platform more competitive.</p>

    <!-- Mobile: stacked cards | Desktop: table -->
    <div class="d-none d-md-block">
      <div class="rounded-custom border-custom overflow-hidden">
        <table class="module-table">
          <thead>
            <tr>
              <th style="width:22%;">Module</th>
              <th>Description</th>
              <th style="width:12%; text-align:center;">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="mod-name">Wishlist System</td><td class="mod-desc">Save products, move to cart, share link, guest session support</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Coupon Code Engine</td><td class="mod-desc">Fixed / percentage / free shipping coupons with usage limits and expiry</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Product Variants</td><td class="mod-desc">Size, metal type, karat — each variant can have distinct price &amp; stock</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">GST &amp; Tax Engine</td><td class="mod-desc">Per-category GST rates, CGST/SGST/IGST split on invoices</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Reviews &amp; Ratings</td><td class="mod-desc">Verified purchase reviews, star ratings, admin moderation</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">WhatsApp Notifications</td><td class="mod-desc">Order placed, shipped, delivered via WhatsApp API messages</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Return &amp; Refund Module</td><td class="mod-desc">Customer return requests, admin approval, refund to wallet/bank</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Live Search (AJAX)</td><td class="mod-desc">Instant product suggestions as user types, no page reload</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Blog / News Module</td><td class="mod-desc">Jewellery care tips, collection launches — drives organic SEO traffic</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Multi-Admin Roles</td><td class="mod-desc">Super Admin, Order Manager, Content Manager — role-based permissions</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">Customer Wallet</td><td class="mod-desc">Store refund credits, loyalty bonuses; usable at checkout</td><td class="text-center"><span class="mod-badge mb-added">Added</span></td></tr>
            <tr><td class="mod-name">SEO Enhancement</td><td class="mod-desc">Dynamic OG tags, JSON-LD schema, XML sitemap, robots.txt, canonical URLs</td><td class="text-center"><span class="mod-badge mb-enhanced">Enhanced</span></td></tr>
            <tr><td class="mod-name">Security Hardening</td><td class="mod-desc">CSRF, XSS, SQL injection protection, rate limiting, 2FA for Admin</td><td class="text-center"><span class="mod-badge mb-enhanced">Enhanced</span></td></tr>
            <tr><td class="mod-name">Performance Optimization</td><td class="mod-desc">Image compression, lazy loading, Redis caching, query optimization</td><td class="text-center"><span class="mod-badge mb-enhanced">Enhanced</span></td></tr>
            <tr><td class="mod-name">Basic SEO Setup</td><td class="mod-desc">Meta tags, sitemap, robots.txt, on-page basics — as per original scope</td><td class="text-center"><span class="mod-badge mb-included">Included</span></td></tr>
            <tr><td class="mod-name">Security Basics</td><td class="mod-desc">Login protection, malware guard, backup config — as per original scope</td><td class="text-center"><span class="mod-badge mb-included">Included</span></td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Mobile cards -->
    <div class="d-md-none">
      <div class="row g-3">
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Wishlist System</div><div class="text-soft" style="font-size:12px;">Save products, move to cart, share link, guest session</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Coupon Code Engine</div><div class="text-soft" style="font-size:12px;">Fixed / percentage / free shipping coupons</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Product Variants</div><div class="text-soft" style="font-size:12px;">Size, metal type, karat with distinct price &amp; stock</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">GST &amp; Tax Engine</div><div class="text-soft" style="font-size:12px;">Per-category GST, CGST/SGST/IGST invoices</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Reviews &amp; Ratings</div><div class="text-soft" style="font-size:12px;">Verified purchase reviews, admin moderation</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">WhatsApp Notifications</div><div class="text-soft" style="font-size:12px;">Order status messages via WhatsApp API</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Return &amp; Refund Module</div><div class="text-soft" style="font-size:12px;">Return requests, admin approval, wallet refund</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Multi-Admin Roles</div><div class="text-soft" style="font-size:12px;">Role-based permissions for admins</div></div><span class="mod-badge mb-added flex-shrink-0">Added</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">SEO Enhancement</div><div class="text-soft" style="font-size:12px;">OG tags, JSON-LD, sitemap, canonical URLs</div></div><span class="mod-badge mb-enhanced flex-shrink-0">Enhanced</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Security Hardening</div><div class="text-soft" style="font-size:12px;">CSRF, XSS, rate limiting, admin 2FA</div></div><span class="mod-badge mb-enhanced flex-shrink-0">Enhanced</span></div></div>
        <div class="col-12"><div class="prop-card d-flex justify-content-between align-items-start gap-2"><div><div class="fw-600" style="font-size:16px;">Performance Optimization</div><div class="text-soft" style="font-size:12px;">Lazy loading, Redis caching, query optimization</div></div><span class="mod-badge mb-enhanced flex-shrink-0">Enhanced</span></div></div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       07 · TIMELINE
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">07 · Delivery Plan</div>
    <h2 class="sec-title">Project Timeline</h2>
    <p class="sec-subtitle mb-4">Structured delivery in 5 phases with milestones and client review checkpoints.</p>

    <div class="row g-4">
      <div class="col-12 col-md-7">
        <div class="timeline-wrap">
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-phase">Phase 1</div>
            <div class="tl-title">Discovery &amp; Setup</div>
            <div class="tl-desc">Requirement finalization, DB schema design, project scaffolding, server setup, wireframes approval.</div>
            <span class="tl-week">Week 1 – 2</span>
          </div>
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-phase">Phase 2</div>
            <div class="tl-title">Frontend Development</div>
            <div class="tl-desc">All pages with Bootstrap 5, responsive Blade templates, product, cart, checkout pages.</div>
            <span class="tl-week">Week 3 – 5</span>
          </div>
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-phase">Phase 3</div>
            <div class="tl-title">Backend &amp; Admin Panel</div>
            <div class="tl-desc">Laravel backend, all APIs, admin panel, shipping logic, discount engine, payment gateway integration.</div>
            <span class="tl-week">Week 6 – 9</span>
          </div>
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-phase">Phase 4</div>
            <div class="tl-title">Testing &amp; QA</div>
            <div class="tl-desc">Cross-browser, mobile testing, security audit, performance optimization, UAT with client.</div>
            <span class="tl-week">Week 10 – 11</span>
          </div>
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-phase">Phase 5</div>
            <div class="tl-title">Launch &amp; Handover</div>
            <div class="tl-desc">Production deployment, DNS config, SSL setup, admin training, documentation handover.</div>
            <span class="tl-week">Week 12</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-5">
        <div class="prop-card mb-3">
          <div class="fw-600 mb-3" style="font-size:14px;">Deliverables Included</div>
          <ul class="feat-list">
            <li><span class="feat-icon fi-star">★</span> Complete source code (GitHub)</li>
            <li><span class="feat-icon fi-star">★</span> Database schema &amp; ER diagram</li>
            <li><span class="feat-icon fi-star">★</span> API documentation</li>
            <li><span class="feat-icon fi-star">★</span> Admin panel user manual</li>
            <li><span class="feat-icon fi-star">★</span> Video walkthrough recording</li>
            <li><span class="feat-icon fi-star">★</span> 30-day post-launch support</li>
          </ul>
        </div>
        <div class="prop-card prop-card-blue">
          <div class="fw-600 mb-1" style="font-size:16px; color: var(--blue);">Post-Launch Support</div>
          <p class="mb-0" style="font-size:15px; color: var(--ink-soft);">30 days complimentary bug fixing and minor change support included. Extended AMC packages available separately.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       08 · PRICING
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">08 · Investment</div>
    <h2 class="sec-title">Project Pricing</h2>
    <p class="sec-subtitle mb-4">Transparent, milestone-based payment structure with full scope included.</p>

    <div class="row g-4">
      <div class="col-12 col-md-6">
        <div class="pricing-dark">
          <div class="pricing-inner">
            <p class="pricing-lbl">Total Project Investment</p>
            <div class="pricing-amount"><sup>₹</sup>XX,XXX</div>
            <p class="pricing-note">Final quote provided after requirement discussion</p>
            <ul class="pricing-list">
              <li><span>Frontend + UI (15+ pages)</span><span>Included</span></li>
              <li><span>Backend + Laravel APIs</span><span>Included</span></li>
              <li><span>Admin Panel (9 modules)</span><span>Included</span></li>
              <li><span>Payment Gateway Integration</span><span>Included</span></li>
              <li><span>SEO Setup</span><span>Included</span></li>
              <li><span>Security Hardening</span><span>Included</span></li>
              <li><span>30-Day Support</span><span class="pricing-free">FREE</span></li>
              <li><span>Source Code + Docs</span><span class="pricing-free">FREE</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex flex-column gap-3">
        <div class="prop-card flex-grow-1">
          <div class="fw-600 mb-3" style="font-size:14px;">Payment Milestones</div>
          <table class="milestone-table">
            <tr>
              <td style="color: var(--ink-soft);">Advance (on agreement)</td>
              <td class="ms-pct">30%</td>
            </tr>
            <tr>
              <td style="color: var(--ink-soft);">On Frontend Delivery</td>
              <td class="ms-pct">30%</td>
            </tr>
            <tr>
              <td style="color: var(--ink-soft);">On Backend + Admin Delivery</td>
              <td class="ms-pct">25%</td>
            </tr>
            <tr>
              <td style="color: var(--ink-soft);">On Final Launch</td>
              <td class="ms-pct">15%</td>
            </tr>
          </table>
        </div>
        <div class="prop-card prop-card-amber">
          <div class="fw-600 mb-2" style="font-size:13px; color: var(--amber);">Not Included in Scope</div>
          <ul style="font-size:15px; color: var(--ink-soft); padding-left:16px; margin:0;">
            <li>Domain &amp; hosting charges</li>
            <li>Third-party API fees (SMS, WhatsApp, Payment Gateway)</li>
            <li>Product data entry / photography</li>
            <li>Ongoing AMC (available on request)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       09 · SEO & SECURITY
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">09 · SEO &amp; Security</div>
    <h2 class="sec-title">SEO &amp; Security Setup</h2>
    <p class="sec-subtitle mb-4">Production-ready optimization and protection included from day one.</p>

    <div class="row g-4">
      <div class="col-12 col-md-6">
        <p class="tech-cat-label">SEO Setup</p>
        <ul class="feat-list">
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> SEO-friendly URL slugs</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Dynamic meta title &amp; description</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> XML sitemap auto-generation</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> robots.txt configuration</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Canonical URL handling</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> JSON-LD structured data (Product, BreadcrumbList)</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Open Graph &amp; Twitter Card tags</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Core Web Vitals optimization</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Image alt text management via Admin</li>
        </ul>
      </div>
      <div class="col-12 col-md-6">
        <p class="tech-cat-label">Security Setup</p>
        <ul class="feat-list">
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> SSL / HTTPS enforced</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> CSRF token protection (Laravel default)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> XSS &amp; SQL injection prevention</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Brute-force login protection</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Admin 2FA (optional)</li>
          <li><span class="feat-icon fi-check"><i class="bi bi-check"></i></span> Automated DB backup</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Rate limiting on APIs</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Sensitive data encryption</li>
          <li><span class="feat-icon fi-plus"><i class="bi bi-plus"></i></span> Activity log for Admin actions</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       10 · TERMS
  ════════════════════════════════════════ -->
  <section class="proposal-section">
    <div class="sec-label">10 · Terms</div>
    <h2 class="sec-title">Terms &amp; Conditions</h2>
    <div class="row g-3 mt-1">
      <div class="col-12 col-md-6">
        <div class="prop-card h-100">
          <ul class="feat-list" style="font-size:13px;">
            <li><span class="feat-icon fi-star">★</span> Source code ownership transfers after final payment</li>
            <li><span class="feat-icon fi-star">★</span> Client must provide brand assets &amp; product content</li>
            <li><span class="feat-icon fi-star">★</span> 30-day support for bug fixes post-launch</li>
            <li><span class="feat-icon fi-star">★</span> Feature additions billed separately</li>
            <li><span class="feat-icon fi-star">★</span> Quotation valid for 30 days from issue date</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="prop-card h-100">
          <ul class="feat-list" style="font-size:13px;">
            <li><span class="feat-icon fi-star">★</span> Timeline begins after advance payment received</li>
            <li><span class="feat-icon fi-star">★</span> Revisions included as per agreed scope only</li>
            <li><span class="feat-icon fi-star">★</span> Hosting / domain setup by client or extra charge</li>
            <li><span class="feat-icon fi-star">★</span> Testing on latest Chrome, Firefox, Safari, Mobile</li>
            <li><span class="feat-icon fi-star">★</span> Governed under Indian IT law</li>
          </ul>
        </div>
      </div>
      <div class="col-12">
        <div class="note-box">
          <i class="bi bi-lightbulb-fill mt-1 flex-shrink-0" style="color: var(--gold-dark); font-size:16px;"></i>
          <div>
            <strong style="font-weight:600;">Note:</strong>
            Items marked <span class="mod-badge mb-added">Added</span> are recommended enhancements beyond the original quotation scope. These are included as best-practice additions. Final pricing may be adjusted based on mutual agreement on which modules to include.
          </div>
        </div>
      </div>
    </div>
  </section>

</div><!-- /container -->

<!-- ═══════════════════════════════════════
     FOOTER
════════════════════════════════════════ -->
<footer class="doc-footer mt-0">
  <div class="container-lg px-4 px-md-5">
    <div class="row align-items-center gy-2 text-center text-md-start">
      <div class="col-12 col-md-4">
		<a href="www.shreegurvetech.com" target="_blank" class="text-decoration-none">
			<strong>Shree Gurve Tech</strong>
		</a>
      </div>
      <div class="col-12 col-md-4 text-md-center">
        Laravel + Bootstrap 5 &nbsp;·&nbsp; Version 1.0 &nbsp;·&nbsp; 2026
      </div>
      <div class="col-12 col-md-4 text-md-end">
        Confidential — For Client Use Only
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>