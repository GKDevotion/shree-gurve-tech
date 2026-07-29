<?php
include_once('../helper/function.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <!-- Primary Meta Tags -->
        <title>ERP Software Solutions for Business | All-in-One ERP System | Shree Gurve Tech</title>

        <meta name="description" content="All-in-one ERP software for businesses to automate workflows, manage resources, and improve productivity with real-time insights.">
        <meta name="keywords" content="ERP software, ERP solutions, Enterprise resource planning system, ERP system for business, Cloud ERP software, ERP software India, Inventory management system, Accounting ERP software, HR management ERP, ERP for small business, Manufacturing ERP software, ERP with CRM integration">
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
        <meta property="og:url" content="<?= getBaseUrl(); ?>/proposals/erp-solutions">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Jewelry E-Commerce Development">
        <meta name="twitter:description" content="Complete jewelry eCommerce solution with admin panel & payment integration.">
        <meta name="twitter:image" content="<?= getBaseUrl(); ?>/assets/img/header-250.png">

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

        <style>
            :root {
            --navy:   #0a1628;
            --ink:    #111827;
            --gold:   #c9a84c;
            --gold-lt:#f0d080;
            --slate:  #1e2d45;
            --muted:  #6b7280;
            --light:  #f4f6fa;
            --white:  #ffffff;
            --radius: 1rem;
            --shadow: 0 8px 40px rgba(10,22,40,.14);
            }

            /* ── Base ── */
            *, *::before, *::after { box-sizing: border-box; }
            html { scroll-behavior: smooth; }
            body {
            font-family: 'DM Sans', sans-serif;
            background: var(--light);
            color: var(--ink);
            overflow-x: hidden;
            }
            h1,h2,h3,h4,h5 { font-family: 'Playfair Display', serif; }

            /* ── Scroll-reveal helper ── */
            .reveal {
            opacity: 0;
            transform: translateY(36px);
            transition: opacity .7s ease, transform .7s ease;
            }
            .reveal.visible {
            opacity: 1;
            transform: none;
            }
            .reveal-left  { opacity:0; transform:translateX(-40px); transition: opacity .7s ease, transform .7s ease; }
            .reveal-right { opacity:0; transform:translateX( 40px); transition: opacity .7s ease, transform .7s ease; }
            .reveal-left.visible, .reveal-right.visible { opacity:1; transform:none; }
            .delay-1 { transition-delay:.1s; }
            .delay-2 { transition-delay:.2s; }
            .delay-3 { transition-delay:.3s; }
            .delay-4 { transition-delay:.4s; }

            /* ── Navbar ── */
            .navbar {
            background: var(--navy);
            border-bottom: 2px solid var(--gold);
            padding: 1rem 0;
            position: sticky; top:0; z-index:1050;
            box-shadow: 0 2px 20px rgba(0,0,0,.35);
            }
            .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--white) !important;
            letter-spacing: .04em;
            }
            .navbar-brand span { color: var(--gold); }
            .nav-link { color: rgba(255,255,255,.75) !important; font-weight:500; transition:.25s; }
            .nav-link:hover { color: var(--gold) !important; }
            .btn-nav {
            background: var(--gold);
            color: var(--navy) !important;
            border-radius: 6px;
            padding: .45rem 1.2rem;
            font-weight:600;
            transition: .25s;
            }
            .btn-nav:hover { background: var(--gold-lt); }

            /* ── Hero ── */
            .hero {
            background: linear-gradient(135deg, var(--navy) 0%, var(--slate) 60%, #1a3050 100%);
            color: var(--white);
            padding: 110px 0 90px;
            position: relative;
            overflow: hidden;
            }
            .hero::before {
            content:'';
            position:absolute; inset:0;
            background: radial-gradient(ellipse 70% 60% at 80% 40%, rgba(201,168,76,.12), transparent);
            pointer-events:none;
            }
            .hero-grid {
            position:absolute; inset:0;
            background-image: repeating-linear-gradient(0deg,transparent,transparent 59px,rgba(255,255,255,.03) 60px),
                                repeating-linear-gradient(90deg,transparent,transparent 59px,rgba(255,255,255,.03) 60px);
            pointer-events:none;
            }
            .hero-eyebrow {
            display:inline-block;
            background: rgba(201,168,76,.15);
            border: 1px solid var(--gold);
            color: var(--gold);
            font-size:.78rem;
            font-weight:600;
            letter-spacing:.12em;
            text-transform:uppercase;
            padding:.35rem 1rem;
            border-radius:50px;
            margin-bottom:1.25rem;
            }
            .hero h1 {
            font-size: clamp(2.4rem, 5.5vw, 4rem);
            line-height:1.1;
            margin-bottom:1.2rem;
            }
            .hero h1 span { color: var(--gold); }
            .hero p.lead { color: rgba(255,255,255,.72); font-size:1.1rem; max-width:520px; }
            .btn-gold {
            background: var(--gold);
            color: var(--navy);
            font-weight:700;
            padding:.75rem 2rem;
            border-radius: 8px;
            border:none;
            transition:.3s;
            box-shadow: 0 4px 20px rgba(201,168,76,.35);
            }
            .btn-gold:hover { background: var(--gold-lt); transform:translateY(-2px); box-shadow:0 8px 28px rgba(201,168,76,.45); color:var(--navy); }
            .btn-outline-light-custom {
            border: 2px solid rgba(255,255,255,.4);
            color: var(--white);
            background:transparent;
            padding:.75rem 2rem;
            border-radius:8px;
            font-weight:600;
            transition:.3s;
            }
            .btn-outline-light-custom:hover { border-color:var(--white); background:rgba(255,255,255,.08); color:var(--white); }

            .hero-card {
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: var(--radius);
            backdrop-filter: blur(12px);
            padding: 2rem;
            animation: floatCard 5s ease-in-out infinite alternate;
            }
            @keyframes floatCard {
            from { transform:translateY(0); }
            to   { transform:translateY(-14px); }
            }
            .stat-pill {
            background: rgba(201,168,76,.15);
            border:1px solid rgba(201,168,76,.3);
            border-radius:50px;
            padding:.4rem 1rem;
            font-size:.82rem;
            color: var(--gold-lt);
            display:inline-flex;
            align-items:center;
            gap:.4rem;
            }
            .progress-thin { height:6px; border-radius:3px; }

            /* ── Section base ── */
            section { padding: 90px 0; }
            .section-tag {
            font-size:.75rem; letter-spacing:.14em; text-transform:uppercase;
            color: var(--gold); font-weight:700;
            }
            .section-title { font-size: clamp(1.8rem, 3.5vw, 2.8rem); color: var(--navy); }

            /* ── About Band ── */
            .band {
            background: var(--navy);
            color: var(--white);
            padding: 48px 0;
            }
            .band .stat-block { text-align:center; }
            .band .stat-block h3 { font-size:2.6rem; color:var(--gold); margin:0; }
            .band .stat-block p  { color:rgba(255,255,255,.6); margin:0; font-size:.88rem; }
            .band-divider { width:1px; background:rgba(255,255,255,.12); align-self:stretch; }

            /* ── Module Cards ── */
            .module-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 2rem;
            border: 1px solid #e5e8ef;
            transition: .35s;
            height:100%;
            position:relative;
            overflow:hidden;
            }
            .module-card::before {
            content:'';
            position:absolute; top:0; left:0; right:0; height:3px;
            background: linear-gradient(90deg, var(--gold), var(--gold-lt));
            opacity:0;
            transition:.35s;
            }
            .module-card:hover { transform:translateY(-6px); box-shadow: var(--shadow); border-color:var(--gold); }
            .module-card:hover::before { opacity:1; }
            .module-icon {
            width:54px; height:54px;
            background: linear-gradient(135deg, var(--navy), var(--slate));
            border-radius:12px;
            display:flex; align-items:center; justify-content:center;
            font-size:1.4rem; color:var(--gold);
            margin-bottom:1.2rem;
            }
            .module-card h5 { color:var(--navy); font-size:1.1rem; margin-bottom:.6rem; }
            .module-card p  { color:var(--muted); font-size:.9rem; margin:0; }

            /* ── Phase Timeline ── */
            .timeline { position:relative; padding-left:0; }
            .tl-item { display:flex; gap:1.5rem; margin-bottom:2.5rem; position:relative; }
            .tl-line {
            display:flex; flex-direction:column; align-items:center;
            flex-shrink:0; width:44px;
            }
            .tl-dot {
            width:44px; height:44px;
            background: var(--navy);
            border:3px solid var(--gold);
            border-radius:50%;
            display:flex; align-items:center; justify-content:center;
            font-weight:700; color:var(--gold); font-size:.9rem;
            flex-shrink:0;
            }
            .tl-connector {
            width:2px; flex:1; background:linear-gradient(to bottom, var(--gold), rgba(201,168,76,.15));
            margin-top:.25rem;
            }
            .tl-body {
            background:var(--white);
            border-radius:var(--radius);
            padding:1.5rem;
            border:1px solid #e5e8ef;
            flex:1;
            transition:.3s;
            }
            .tl-body:hover { box-shadow: var(--shadow); border-color:var(--gold); }
            .tl-body h5 { color:var(--navy); margin-bottom:.3rem; }
            .phase-badge {
            font-size:.72rem; font-weight:700; text-transform:uppercase; letter-spacing:.1em;
            background:rgba(201,168,76,.12);
            color:var(--gold);
            border:1px solid rgba(201,168,76,.3);
            border-radius:50px;
            padding:.2rem .75rem;
            margin-bottom:.75rem;
            display:inline-block;
            }

            /* ── Pricing ── */
            .pricing-card {
            background:var(--white);
            border-radius:var(--radius);
            border:1px solid #e5e8ef;
            padding:2.5rem 2rem;
            transition:.35s;
            height:100%;
            position:relative;
            }
            .pricing-card.featured {
            background: var(--navy);
            border-color:var(--gold);
            color:var(--white);
            }
            .pricing-card.featured h4 { color:var(--white); }
            .pricing-card.featured .price-amt { color:var(--gold); }
            .pricing-card.featured .check-item { color:rgba(255,255,255,.8); }
            .pricing-card:hover:not(.featured) { transform:translateY(-6px); box-shadow:var(--shadow); }
            .pricing-card.featured:hover { transform:translateY(-6px); box-shadow:0 12px 48px rgba(201,168,76,.25); }
            .popular-badge {
            position:absolute; top:-14px; left:50%; transform:translateX(-50%);
            background:var(--gold); color:var(--navy);
            font-size:.72rem; font-weight:700; text-transform:uppercase; letter-spacing:.1em;
            padding:.3rem 1rem; border-radius:50px;
            white-space:nowrap;
            }
            .price-amt { font-size:2.8rem; font-family:'Playfair Display',serif; color:var(--navy); line-height:1; }
            .price-per { font-size:.82rem; color:var(--muted); }
            .check-item { font-size:.9rem; color:var(--muted); }
            .check-item i { color:var(--gold); }

            /* ── Tech Stack ── */
            .tech-pill {
            background:var(--white);
            border:1px solid #dde2ec;
            border-radius:50px;
            padding:.5rem 1.25rem;
            font-size:.85rem;
            font-weight:500;
            color:var(--ink);
            display:inline-flex; align-items:center; gap:.5rem;
            transition:.25s;
            }
            .tech-pill:hover { border-color:var(--gold); box-shadow:0 4px 14px rgba(201,168,76,.2); }
            .tech-pill i { color:var(--gold); }

            /* ── CTA ── */
            .cta-section {
            background: linear-gradient(135deg, var(--navy) 0%, var(--slate) 100%);
            color:var(--white);
            padding:90px 0;
            text-align:center;
            position:relative;
            overflow:hidden;
            }
            .cta-section::before {
            content:'';
            position:absolute; inset:0;
            background: radial-gradient(ellipse 60% 80% at 50% 50%, rgba(201,168,76,.1), transparent);
            pointer-events:none;
            }
            .cta-section h2 { font-size: clamp(2rem,4vw,3rem); }

            /* ── Footer ── */
            footer {
                background: #060e1a;
                color:rgba(255,255,255,.8);
                padding:28px 0;
            }

            /* ── Pulse animation on hero icon ── */
            @keyframes pulse-ring {
            0%   { transform:scale(1);   opacity:.6; }
            100% { transform:scale(1.5); opacity:0;  }
            }
            .pulse-wrap { position:relative; display:inline-flex; align-items:center; justify-content:center; }
            .pulse-wrap::before {
            content:'';
            position:absolute; inset:-8px;
            border:2px solid var(--gold);
            border-radius:50%;
            animation: pulse-ring 2s ease-out infinite;
            }

            /* ── Counter animation ── */
            .count-up { display:inline-block; }

            @media(max-width:767px){
            .hero { padding:70px 0 60px; }
            section { padding:60px 0; }
            .tl-item { flex-direction:column; }
            .tl-connector { display:none; }
            }
        </style>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "ERP Software",
            "applicationCategory": "BusinessApplication",
            "operatingSystem": "Web",
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "INR"
            }
        }
        </script>
    </head>
    <body>

        <!-- ══════════ NAVBAR ══════════ -->
        <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">SG<span>ERP</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span style="color:#fff;font-size:1.4rem;"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-2 py-2 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#modules">Modules</a></li>
                <li class="nav-item"><a class="nav-link" href="#phases">Phases</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#tech">Tech Stack</a></li>
                <li class="nav-item ms-2"><a class="nav-link btn-nav" href="#cta">Get Proposal</a></li>
            </ul>
            </div>
        </div>
        </nav>

        <!-- ══════════ HERO ══════════ -->
        <section class="hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="hero-eyebrow reveal">Software Development Proposal</span>
                <h1 class="reveal delay-1">Enterprise <span>ERP</span> Solution<br>Built for Growth</h1>
                <p class="lead reveal delay-2">A modular, scalable ERP platform covering Finance, HR, Inventory, CRM & more — engineered for your business from ground up.</p>
                <div class="d-flex flex-wrap gap-3 mt-4 reveal delay-3">
                <a href="#modules" class="btn btn-gold">Explore Modules</a>
                <a href="#pricing" class="btn btn-outline-light-custom">View Pricing</a>
                </div>
                <div class="d-flex flex-wrap gap-2 mt-4 reveal delay-4">
                <span class="stat-pill"><i class="bi bi-check-circle-fill"></i>ISO 27001 Ready</span>
                <span class="stat-pill"><i class="bi bi-check-circle-fill"></i>Cloud & On-Prem</span>
                <span class="stat-pill"><i class="bi bi-check-circle-fill"></i>24/7 Support</span>
                </div>
            </div>
            <div class="col-lg-6 reveal delay-2">
                <div class="hero-card">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="pulse-wrap">
                    <div style="width:46px;height:46px;background:rgba(201,168,76,.2);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <i class="bi bi-graph-up-arrow" style="color:var(--gold);font-size:1.3rem;"></i>
                    </div>
                    </div>
                    <div>
                    <div style="color:rgba(255,255,255,.5);font-size:.78rem;">SYSTEM OVERVIEW</div>
                    <div style="color:#fff;font-weight:600;">SG-ERP v2.0 Dashboard</div>
                    </div>
                </div>
                <div class="row g-3 mb-3 text-white">
                    <div class="col-6">
                    <div style="background:rgba(255,255,255,.07);border-radius:.75rem;padding:1rem;">
                        <div style="font-size:.75rem;color:rgba(255,255,255,.5);">Revenue</div>
                        <div style="font-size:1.4rem;font-weight:700;color:var(--gold);">₹4.2Cr</div>
                        <div style="font-size:.72rem;color:#4ade80;"><i class="bi bi-arrow-up-short"></i>+18.4%</div>
                    </div>
                    </div>
                    <div class="col-6">
                    <div style="background:rgba(255,255,255,.07);border-radius:.75rem;padding:1rem;">
                        <div style="font-size:.75rem;color:rgba(255,255,255,.5);">Active Users</div>
                        <div style="font-size:1.4rem;font-weight:700;color:var(--gold);">1,284</div>
                        <div style="font-size:.72rem;color:#4ade80;"><i class="bi bi-arrow-up-short"></i>+24 today</div>
                    </div>
                    </div>
                    <div class="col-6">
                    <div style="background:rgba(255,255,255,.07);border-radius:.75rem;padding:1rem;">
                        <div style="font-size:.75rem;color:rgba(255,255,255,.5);">Orders</div>
                        <div style="font-size:1.4rem;font-weight:700;color:var(--gold);">3,891</div>
                        <div style="font-size:.72rem;color:#4ade80;"><i class="bi bi-arrow-up-short"></i>+6.2%</div>
                    </div>
                    </div>
                    <div class="col-6">
                    <div style="background:rgba(255,255,255,.07);border-radius:.75rem;padding:1rem;">
                        <div style="font-size:.75rem;color:rgba(255,255,255,.5);">Efficiency</div>
                        <div style="font-size:1.4rem;font-weight:700;color:var(--gold);">94%</div>
                        <div style="font-size:.72rem;color:#4ade80;"><i class="bi bi-arrow-up-short"></i>+2.1%</div>
                    </div>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between mb-1">
                    <span style="font-size:.8rem;color:rgba(255,255,255,.6);">Project Completion</span>
                    <span style="font-size:.8rem;color:var(--gold);">72%</span>
                    </div>
                    <div class="progress progress-thin bg-white bg-opacity-10">
                    <div class="progress-bar" style="width:72%;background:linear-gradient(90deg,var(--gold),var(--gold-lt));"></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ STATS BAND ══════════ -->
        <div class="band">
        <div class="container">
            <div class="row justify-content-center g-4 align-items-center">
            <div class="col-6 col-md-3 reveal">
                <div class="stat-block">
                <h3 class="count-up" data-target="12">0</h3>
                <p>ERP Modules</p>
                </div>
            </div>
            <div class="col-6 col-md-3 reveal delay-1">
                <div class="stat-block">
                <h3 class="count-up" data-target="180">0</h3>
                <p>Days Timeline</p>
                </div>
            </div>
            <div class="col-6 col-md-3 reveal delay-2">
                <div class="stat-block">
                <h3 class="count-up" data-target="99">0</h3>
                <p>% Uptime SLA</p>
                </div>
            </div>
            <div class="col-6 col-md-3 reveal delay-3">
                <div class="stat-block">
                <h3 class="count-up" data-target="50">0</h3>
                <p>+ Integrations</p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- ══════════ MODULES ══════════ -->
        <section id="modules" class="bg-white">
        <div class="container">
            <div class="text-center mb-5 reveal">
            <div class="section-tag mb-2">Core Modules</div>
            <h2 class="section-title">Everything Your Business Needs</h2>
            <p class="text-muted mx-auto" style="max-width:540px;">Each module is independently deployable yet deeply integrated — giving you flexibility without fragmentation.</p>
            </div>
            <div class="row g-4">
            <!-- Module cards -->
            <div class="col-sm-6 col-lg-4 reveal delay-1">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-cash-stack"></i></div>
                <h5>Financial Management</h5>
                <p>General ledger, accounts payable/receivable, GST compliance, financial reporting & budget control.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-2">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-people-fill"></i></div>
                <h5>HR & Payroll</h5>
                <p>Employee lifecycle management, attendance, leave tracking, payroll processing with statutory compliance.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-3">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-boxes"></i></div>
                <h5>Inventory & Warehouse</h5>
                <p>Real-time stock tracking, barcode/QR scanning, multi-warehouse management, reorder automation.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-1">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-graph-up"></i></div>
                <h5>Sales & CRM</h5>
                <p>Lead pipeline, quotation to invoice automation, customer 360° view, sales analytics dashboard.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-2">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-gear-wide-connected"></i></div>
                <h5>Production & MRP</h5>
                <p>Bill of materials, work orders, production planning, quality control & shop floor management.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-3">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-truck"></i></div>
                <h5>Purchase & Procurement</h5>
                <p>Vendor management, RFQ/PO workflow, three-way matching, supplier performance tracking.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-1">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-headset"></i></div>
                <h5>Customer Support</h5>
                <p>Ticketing system, SLA management, live chat integration, customer satisfaction reporting.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-2">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-bar-chart-line"></i></div>
                <h5>Business Intelligence</h5>
                <p>Custom KPI dashboards, drill-down reports, scheduled exports & executive analytics.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 reveal delay-3">
                <div class="module-card">
                <div class="module-icon"><i class="bi bi-shield-lock-fill"></i></div>
                <h5>Security & Access Control</h5>
                <p>Role-based access, audit logs, two-factor authentication, SSO/LDAP integration.</p>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ PHASES ══════════ -->
        <section id="phases">
        <div class="container">
            <div class="row g-5 align-items-start">
            <div class="col-lg-4 reveal-left">
                <div class="section-tag mb-2">Development Roadmap</div>
                <h2 class="section-title">5 Phases to a Live ERP</h2>
                <p class="text-muted">A structured, milestone-driven delivery plan with full transparency at every stage.</p>
                <div class="mt-4 p-3" style="background:var(--white);border-radius:var(--radius);border:1px solid #e5e8ef;">
                <div class="mb-2" style="font-size:.82rem;color:var(--muted);">Total Estimated Duration</div>
                <div style="font-size:2rem;color:var(--navy);font-family:'Playfair Display',serif;">6 Months</div>
                <div class="progress progress-thin bg-light mt-2">
                    <div class="progress-bar" style="width:100%;background:linear-gradient(90deg,var(--gold),var(--gold-lt));"></div>
                </div>
                </div>
            </div>
            <div class="col-lg-8 reveal-right">
                <div class="timeline">
                <div class="tl-item">
                    <div class="tl-line">
                    <div class="tl-dot">01</div>
                    <div class="tl-connector"></div>
                    </div>
                    <div class="tl-body">
                    <div class="phase-badge">Weeks 1–3</div>
                    <h5>Discovery & Requirements</h5>
                    <p class="text-muted mb-0" style="font-size:.9rem;">Stakeholder interviews, process mapping, BRD documentation, system architecture design, and technology stack finalization.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-line">
                    <div class="tl-dot">02</div>
                    <div class="tl-connector"></div>
                    </div>
                    <div class="tl-body">
                    <div class="phase-badge">Weeks 4–8</div>
                    <h5>UI/UX Design & Prototyping</h5>
                    <p class="text-muted mb-0" style="font-size:.9rem;">Wireframes, high-fidelity mockups, design system creation, interactive prototypes, and client sign-off.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-line">
                    <div class="tl-dot">03</div>
                    <div class="tl-connector"></div>
                    </div>
                    <div class="tl-body">
                    <div class="phase-badge">Weeks 9–18</div>
                    <h5>Core Development</h5>
                    <p class="text-muted mb-0" style="font-size:.9rem;">Agile sprints for module development, database architecture, REST API layer, role-based access, and integration pipelines.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-line">
                    <div class="tl-dot">04</div>
                    <div class="tl-connector"></div>
                    </div>
                    <div class="tl-body">
                    <div class="phase-badge">Weeks 19–22</div>
                    <h5>Testing & QA</h5>
                    <p class="text-muted mb-0" style="font-size:.9rem;">Unit, integration & regression testing, load testing (1000+ concurrent users), UAT sessions, and bug resolution.</p>
                    </div>
                </div>
                <div class="tl-item">
                    <div class="tl-line">
                    <div class="tl-dot">05</div>
                    </div>
                    <div class="tl-body">
                    <div class="phase-badge">Weeks 23–26</div>
                    <h5>Deployment, Training & Go-Live</h5>
                    <p class="text-muted mb-0" style="font-size:.9rem;">Cloud/on-prem deployment, data migration, staff training, hypercare support & 30-day post-go-live monitoring.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ PRICING ══════════ -->
        <section id="pricing" class="bg-white">
        <div class="container">
            <div class="text-center mb-5 reveal">
            <div class="section-tag mb-2">Investment</div>
            <h2 class="section-title">Transparent Pricing Plans</h2>
            <p class="text-muted">Choose a package that fits your scale. All plans include source code, documentation & 1-year support.</p>
            </div>
            <div class="row g-4 justify-content-center align-items-start">
            <div class="col-md-6 col-lg-4 reveal delay-1">
                <div class="pricing-card">
                <h4 class="mb-1" style="color:var(--navy);">Starter</h4>
                <p class="text-muted" style="font-size:.88rem;">Ideal for SMEs up to 25 users</p>
                <div class="price-amt my-3">₹X.XX</div>
                <div class="price-per text-muted mb-4">one-time · 4 core modules</div>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Finance + HR + Inventory + Sales</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Web App (Responsive)</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Basic Reporting</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>1 Year Bug-fix Support</li>
                    <li class="check-item text-muted"><i class="bi bi-x-circle me-2"></i>Mobile App</li>
                    <li class="check-item text-muted"><i class="bi bi-x-circle me-2"></i>Custom Integrations</li>
                </ul>
                <a href="#cta" class="btn w-100" style="border:2px solid var(--navy);color:var(--navy);border-radius:8px;font-weight:600;">Get Started</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal delay-2" style="margin-top:1.5rem;">
                <div class="pricing-card featured">
                <div class="popular-badge">Most Popular</div>
                <h4 class="mb-1">Professional</h4>
                <p style="color:rgba(255,255,255,.6);font-size:.88rem;">For growing businesses up to 100 users</p>
                <div class="price-amt my-3">₹X.XX</div>
                <div class="price-per mb-4" style="color:rgba(255,255,255,.5);">one-time · 9 modules + mobile app</div>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2" style="color:var(--gold);"></i>All Starter Modules</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2" style="color:var(--gold);"></i>CRM + Production + Purchase</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2" style="color:var(--gold);"></i>Android & iOS Apps</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2" style="color:var(--gold);"></i>Advanced BI Dashboard</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2" style="color:var(--gold);"></i>5 Custom Integrations</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2" style="color:var(--gold);"></i>2 Year Priority Support</li>
                </ul>
                <a href="#cta" class="btn btn-gold w-100">Get Started</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal delay-3">
                <div class="pricing-card">
                <h4 class="mb-1" style="color:var(--navy);">Enterprise</h4>
                <p class="text-muted" style="font-size:.88rem;">Unlimited users · custom scope</p>
                <div class="price-amt my-3">Custom</div>
                <div class="price-per text-muted mb-4">tailored quote · all 12 modules</div>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>All Professional Features</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Custom Module Development</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Dedicated Dev Team</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Multi-company / Multi-branch</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>SSO / LDAP / ERP Bridge</li>
                    <li class="check-item"><i class="bi bi-check-circle-fill me-2"></i>Lifetime Support Contract</li>
                </ul>
                <a href="#cta" class="btn w-100" style="border:2px solid var(--navy);color:var(--navy);border-radius:8px;font-weight:600;">Contact Us</a>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ TECH STACK ══════════ -->
        <section id="tech">
        <div class="container">
            <div class="row g-5 align-items-center">
            <div class="col-lg-5 reveal-left">
                <div class="section-tag mb-2">Technology</div>
                <h2 class="section-title">Modern, Battle-Tested Stack</h2>
                <p class="text-muted">We choose proven, enterprise-grade technologies that ensure performance, security, and long-term maintainability.</p>
                <div class="mt-4 p-3" style="background:var(--navy);border-radius:var(--radius);color:white;">
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-fill-check" style="font-size:2rem;color:var(--gold);"></i>
                    <div>
                    <div style="font-weight:600;">SOC 2 & GDPR Ready</div>
                    <div style="font-size:.82rem;color:rgba(255,255,255,.6);">Architecture designed for compliance from day one</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-7 reveal-right">
                <div class="d-flex flex-wrap gap-2">
                <span class="tech-pill"><i class="bi bi-braces"></i>React.js / Next.js</span>
                <span class="tech-pill"><i class="bi bi-server"></i>Node.js + Express</span>
                <span class="tech-pill"><i class="bi bi-database-fill"></i>PostgreSQL</span>
                <span class="tech-pill"><i class="bi bi-diagram-3-fill"></i>Redis Cache</span>
                <span class="tech-pill"><i class="bi bi-cloud-fill"></i>AWS / Azure</span>
                <span class="tech-pill"><i class="bi bi-box-fill"></i>Docker + Kubernetes</span>
                <span class="tech-pill"><i class="bi bi-phone-fill"></i>React Native</span>
                <span class="tech-pill"><i class="bi bi-lock-fill"></i>OAuth 2.0 / JWT</span>
                <span class="tech-pill"><i class="bi bi-activity"></i>Elasticsearch</span>
                <span class="tech-pill"><i class="bi bi-code-slash"></i>REST + GraphQL</span>
                <span class="tech-pill"><i class="bi bi-robot"></i>OpenAI Integration</span>
                <span class="tech-pill"><i class="bi bi-shield-check"></i>SSL / WAF</span>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ CTA ══════════ -->
        <section id="cta" class="cta-section">
        <div class="container position-relative">
            <div class="reveal">
            <div class="section-tag mb-3" style="color:var(--gold);">Ready to Begin?</div>
            <h2 class="text-white mb-3">Let's Build Your ERP Together</h2>
            <p class="mb-4" style="color:rgba(255,255,255,.65);max-width:500px;margin:0 auto 2rem;">Schedule a free discovery call. We'll walk you through a demo and create a custom proposal within 48 hours.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="mailto:contact@shreegurvetech.com" class="btn btn-gold px-4">
                <i class="bi bi-envelope-fill me-2"></i>Contact Us
                </a>
                <a href="tel:+918200017181" class="btn btn-outline-light-custom px-4">
                <i class="bi bi-telephone-fill me-2"></i>+91 82000 17181
                </a>
            </div>
            <div class="mt-4" style="color:rgba(255,255,255,.4);font-size:.82rem;">
                <i class="bi bi-geo-alt-fill me-1" style="color:var(--gold);"></i>Surat, Gujarat · India
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ FOOTER ══════════ -->
        <footer>
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2" style="font-size:.82rem;">
                <span>&copy; 2026 ShreeGurveTech. All rights reserved.</span>
                <span>Designed & Developed in Surat, Gujarat 🇮🇳</span>
            </div>
        </div>
        </footer>

        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
        // ── Scroll Reveal ──
        const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                observer.unobserve(e.target);
            }
            });
        }, { threshold: 0.12 });
        revealEls.forEach(el => observer.observe(el));

        // ── Count-Up Animation ──
        function countUp(el) {
            const target = parseInt(el.dataset.target);
            const duration = 1800;
            const step = target / (duration / 16);
            let current = 0;
            const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = Math.floor(current) + (el.dataset.target == '99' ? '%' : '+');
            }, 16);
        }
        const counters = document.querySelectorAll('.count-up');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
            if (e.isIntersecting) {
                countUp(e.target);
                counterObserver.unobserve(e.target);
            }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => counterObserver.observe(c));

        // ── Navbar shrink on scroll ──
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.navbar');
            if (window.scrollY > 60) {
            nav.style.padding = '.6rem 0';
            } else {
            nav.style.padding = '1rem 0';
            }
        });
        </script>
    </body>
</html>