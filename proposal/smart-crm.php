<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        
        <!-- Primary Meta Tags -->
        <title>Smart CRM Software | Lead, Sales & Client Management Tool</title>

        <meta name="description" content="Powerful CRM software to manage leads, track sales, automate workflows, and grow your business. Easy, affordable, and scalable CRM solution.">
        <meta name="keywords" content="CRM software, Customer relationship management system, CRM system for business, Sales CRM software, CRM for small business, Lead management software, Sales automation tools, Client management system, CRM software India, Best CRM tools, Online CRM system, Cloud CRM software, CRM with analytics">
        <meta name="author" content="Shree Gurve Tech">

        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Robots -->
        <meta name="robots" content="index, follow">

        <!-- Canonical -->
        <link rel="canonical" href="https://shreegurvetech.com/smart-crm">

        <!-- Open Graph (Facebook / WhatsApp) -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Smart CRM Software | Lead, Sales & Client Management Tool">
        <meta property="og:description" content="Powerful CRM software to manage leads, track sales, automate workflows, and grow your business. Easy, affordable, and scalable CRM solution.">
        <meta property="og:image" content="https://shreegurvetech.com/assets/preview.jpg">
        <meta property="og:url" content="https://shreegurvetech.com/smart-crm">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Smart CRM Software | Lead, Sales & Client Management Tool">
        <meta name="twitter:description" content="Powerful CRM software to manage leads, track sales, automate workflows, and grow your business. Easy, affordable, and scalable CRM solution.">
        <meta name="twitter:image" content="https://shreegurvetech.com/assets/preview.jpg">
        
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Poppins Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <style>
            /* ═══════════════════════════════════════════
            COLOR PALETTE  —  CRM Professional Theme
            Primary   : #0d6e6e  (Deep Teal)
            Secondary : #134e4a  (Forest Green)
            Accent    : #10b981  (Emerald Green)
            Highlight : #f59e0b  (Amber)
            Dark      : #0f172a  (Slate 900)
            Surface   : #f0fdf9  (Mint Tint)
            ═══════════════════════════════════════════ */
            :root {
            --primary: #0d6e6e;
            --secondary: #134e4a;
            --accent: #10b981;
            --amber: #f59e0b;
            --dark: #0f172a;
            --muted: #64748b;
            --border: #d1fae5;
            --light-bg: #f0fdf9;
            --card-bg: #ffffff;
            --text: #0f172a;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: var(--light-bg);
                color: var(--text);
                font-size: 15px;
                line-height: 1.7;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
            font-family: 'Poppins', sans-serif;
            }

            a{
                text-decoration: none;
            }
            /* ── SCROLL TO TOP ── */
            #scrollTop {
                position: fixed;
                bottom: 28px;
                right: 28px;
                z-index: 999;
                width: 44px;
                height: 44px;
                background: var(--primary);
                color: #fff;
                border: none;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.1rem;
                box-shadow: 0 4px 18px rgba(13, 110, 110, .35);
                opacity: 0;
                pointer-events: none;
                transition: opacity .3s, transform .3s;
            }

            #scrollTop.show {
                opacity: 1;
                pointer-events: all;
            }

            #scrollTop:hover {
                transform: translateY(-3px);
            }

            /* ── NAV ── */
            .navbar {
                background: rgba(15, 23, 42, .97) !important;
                backdrop-filter: blur(10px);
                border-bottom: 1px solid rgba(16, 185, 129, .15);
            }

            .navbar-brand {
                font-family: 'Poppins', sans-serif;
                font-size: 1.25rem;
                font-weight: 800;
            }

            .navbar-brand .dot {
                color: var(--accent);
            }

            .nav-link {
                color: rgba(255, 255, 255, .8) !important;
                font-size: 1rem;
                font-weight: 500;
                transition: color .2s;
            }

            .nav-link:hover {
                color: var(--accent) !important;
            }

            .btn-nav {
                background: var(--accent);
                color: #fff;
                font-weight: 600;
                font-size: 1rem;
                padding: 7px 20px;
                border-radius: 8px;
                border: none;
                transition: background .2s, transform .2s;
            }

            .btn-nav:hover {
                background: #059669;
                color: #fff;
                transform: translateY(-1px);
            }

            /* ── HERO ── */
            .hero {
                background: linear-gradient(135deg, #0f172a 0%, #0d3535 45%, #134e4a 100%);
                color: #fff;
                padding: 90px 0 70px;
                position: relative;
                overflow: hidden;
            }

            .hero::before {
                content: '';
                position: absolute;
                top: -100px;
                right: -100px;
                width: 500px;
                height: 500px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(16, 185, 129, .12) 0%, transparent 70%);
            }

            .hero::after {
                content: '';
                position: absolute;
                bottom: -60px;
                left: -60px;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(245, 158, 11, .07) 0%, transparent 70%);
            }

            .hero-chip {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: rgba(16, 185, 129, .12);
                border: 1px solid rgba(16, 185, 129, .3);
                color: var(--accent);
                font-size: 11px;
                font-weight: 700;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                padding: 6px 14px;
                border-radius: 50px;
                margin-bottom: 22px;
            }

            .hero h1 {
                font-size: clamp(2.1rem, 5.5vw, 3.6rem);
                line-height: 1.1;
                font-weight: 800;
            }

            .hero h1 em {
                font-style: normal;
                color: var(--accent);
            }

            .hero .lead {
                color: rgba(255, 255, 255, .68);
                font-size: 1.05rem;
                max-width: 600px;
            }

            .hero-cta .btn-primary-hero {
                background: var(--accent);
                color: #fff;
                font-weight: 700;
                padding: 13px 32px;
                border-radius: 10px;
                border: none;
                font-size: .95rem;
                transition: all .2s;
            }

            .hero-cta .btn-primary-hero:hover {
                background: #059669;
                transform: translateY(-2px);
            }

            .hero-cta .btn-ghost {
                background: transparent;
                color: rgba(255, 255, 255, .75);
                border: 1.5px solid rgba(255, 255, 255, .25);
                font-weight: 600;
                padding: 13px 32px;
                border-radius: 10px;
                font-size: .95rem;
                transition: all .2s;
            }

            .hero-cta .btn-ghost:hover {
                border-color: var(--accent);
                color: var(--accent);
            }

            /* hero stat grid */
            .hero-stats-row {
                border-top: 1px solid rgba(255, 255, 255, .1);
                margin-top: 48px;
                padding-top: 36px;
            }

            .h-stat .val {
                font-family: 'Poppins', sans-serif;
                font-size: 2.2rem;
                font-weight: 800;
                color: var(--accent);
                line-height: 1;
            }

            .h-stat .lbl {
                font-size: .75rem;
                color: rgba(255, 255, 255, .5);
                text-transform: uppercase;
                letter-spacing: 1.2px;
                margin-top: 4px;
            }

            .h-stat-divider {
                width: 1px;
                background: rgba(255, 255, 255, .12);
            }

            /* ── SHARED SECTION ── */
            .section-py {
                padding: 80px 0;
            }

            .section-py-sm {
                padding: 60px 0;
            }

            .bg-white {
                background: #fff !important;
            }

            .bg-mint {
                background: var(--light-bg) !important;
            }

            .bg-dark-section {
                background: var(--dark) !important;
            }

            .sec-tag {
                display: inline-block;
                background: rgba(16, 185, 129, .1);
                color: var(--primary);
                font-size: 11px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                padding: 5px 14px;
                border-radius: 50px;
                margin-bottom: 12px;
                border: 1px solid rgba(13, 110, 110, .15);
            }

            .sec-title {
                font-size: clamp(1.6rem, 3vw, 2.3rem);
                color: var(--dark);
                margin-bottom: 12px;
            }

            .sec-sub {
                color: var(--muted);
                max-width: 580px;
                font-size: .93rem;
            }

            /* ── EXECUTIVE SUMMARY ── */
            .exec-box {
                background: linear-gradient(135deg, var(--primary), var(--secondary));
                border-radius: 20px;
                padding: 48px 40px;
                color: #fff;
                position: relative;
                overflow: hidden;
            }

            .exec-box::after {
                content: '"';
                position: absolute;
                right: 30px;
                top: -10px;
                font-size: 12rem;
                font-family: 'Poppins', serif;
                color: rgba(255, 255, 255, .05);
                line-height: 1;
            }

            .exec-box h3 {
                font-size: 1.5rem;
                margin-bottom: 16px;
            }

            .exec-box p {
                color: rgba(255, 255, 255, .78);
                font-size: .95rem;
                line-height: 1.75;
                margin-bottom: 0;
            }

            .exec-meta {
                margin-top: 28px;
                padding-top: 24px;
                border-top: 1px solid rgba(255, 255, 255, .15);
            }

            .exec-meta-item label {
                font-size: .7rem;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                color: rgba(255, 255, 255, .45);
                display: block;
                margin-bottom: 2px;
            }

            .exec-meta-item span {
                font-size: .88rem;
                font-weight: 600;
                color: #fff;
            }

            /* ── PROBLEM STATEMENT ── */
            .problem-card {
                background: #fff;
                border: 1px solid var(--border);
                border-radius: 14px;
                padding: 24px 20px;
                height: 100%;
                border-left: 4px solid var(--accent);
                transition: box-shadow .2s, transform .2s;
            }

            .problem-card:hover {
                box-shadow: 0 8px 28px rgba(13, 110, 110, .1);
                transform: translateY(-3px);
            }

            .problem-card .p-num {
                font-family: 'Poppins', sans-serif;
                font-size: 2rem;
                font-weight: 800;
                color: rgba(13, 110, 110, .15);
                line-height: 1;
                margin-bottom: 8px;
            }

            .problem-card h6 {
                font-family: 'Poppins', sans-serif;
                font-weight: 700;
                font-size: .92rem;
                color: var(--dark);
                margin-bottom: 6px;
            }

            .problem-card p {
                font-size: .83rem;
                color: var(--muted);
                margin: 0;
            }

            /* ── OVERVIEW CARDS ── */
            .mod-card {
                background: #fff;
                border: 1px solid #e2f0ed;
                border-radius: 16px;
                padding: 26px 22px;
                height: 100%;
                transition: transform .25s, box-shadow .25s, border-color .25s;
            }

            .mod-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 14px 40px rgba(13, 110, 110, .1);
                border-color: var(--accent);
            }

            .mod-icon {
                width: 54px;
                height: 54px;
                border-radius: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.4rem;
                margin-bottom: 16px;
            }

            .mod-card h5 {
                font-family: 'Poppins', sans-serif;
                font-weight: 700;
                font-size: .97rem;
                margin-bottom: 8px;
            }

            .mod-card p {
                font-size: .84rem;
                color: var(--muted);
                margin: 0;
            }

            /* ── FEATURE TABLE ── */
            .ftable {
                border-radius: 16px;
                overflow: hidden;
                border: 1px solid #d1fae5;
            }

            .ftable thead {
                background: var(--primary);
                color: #fff;
            }

            .ftable thead th {
                font-family: 'Poppins', sans-serif;
                font-weight: 600;
                font-size: .82rem;
                letter-spacing: .4px;
                padding: 14px 16px;
                border: none;
            }

            .ftable tbody tr {
                transition: background .15s;
            }

            .ftable tbody tr:hover {
                background: rgba(16, 185, 129, .04);
            }

            .ftable tbody td {
                padding: 12px 16px;
                vertical-align: middle;
                font-size: 1rem;
                border-color: #ecfdf5;
            }

            .bs {
                font-size: .73rem;
                font-weight: 700;
                padding: 4px 10px;
                border-radius: 50px;
            }

            .bs-core {
                background: rgba(16, 185, 129, .12);
                color: #065f46;
            }

            .bs-ext {
                background: rgba(245, 158, 11, .1);
                color: #92400e;
            }

            .bs-adv {
                background: rgba(13, 110, 110, .1);
                color: var(--primary);
            }

            .pri-h {
                color: #dc2626;
                font-size: .78rem;
                font-weight: 600;
            }

            .pri-m {
                color: #d97706;
                font-size: .78rem;
                font-weight: 600;
            }

            .pri-l {
                color: #16a34a;
                font-size: .78rem;
                font-weight: 600;
            }

            /* ── TIMELINE ── */
            .tl-wrap {
                position: relative;
            }

            .tl-item {
                display: flex;
                gap: 18px;
            }

            .tl-spine {
                display: flex;
                flex-direction: column;
                align-items: center;
                flex-shrink: 0;
            }

            .tl-circle {
                width: 44px;
                height: 44px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 800;
                font-size: .82rem;
                color: #fff;
                flex-shrink: 0;
                border: 3px solid transparent;
            }

            .tl-vline {
                width: 2px;
                flex: 1;
                min-height: 24px;
                background: #d1fae5;
            }

            .tl-item:last-child .tl-vline {
                display: none;
            }

            .tl-body {
                background: #fff;
                border: 1px solid #d1fae5;
                border-radius: 14px;
                padding: 18px 22px;
                margin-bottom: 18px;
                flex: 1;
            }

            .tl-week {
                display: inline-block;
                background: rgba(245, 158, 11, .1);
                color: #92400e;
                font-size: .73rem;
                font-weight: 700;
                padding: 3px 10px;
                border-radius: 50px;
                margin-bottom: 6px;
            }

            .tl-body h6 {
                font-family: 'Poppins', sans-serif;
                font-weight: 700;
                font-size: .9rem;
                color: var(--dark);
                margin-bottom: 4px;
            }

            .tl-body p {
                font-size: .83rem;
                color: var(--muted);
                margin: 0;
            }

            .tl-deliverables {
                margin-top: 10px;
                display: flex;
                flex-wrap: wrap;
                gap: 6px;
            }

            .tl-pill {
                background: #ecfdf5;
                color: #065f46;
                font-size: .72rem;
                font-weight: 600;
                padding: 3px 9px;
                border-radius: 50px;
            }

            /* ── TECH ── */
            .tech-pill {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: #fff;
                border: 1px solid #d1fae5;
                border-radius: 10px;
                padding: 10px 16px;
                font-size: .84rem;
                font-weight: 500;
                transition: box-shadow .2s, transform .2s, border-color .2s;
            }

            .tech-pill:hover {
                box-shadow: 0 4px 16px rgba(13, 110, 110, .1);
                transform: translateY(-2px);
                border-color: var(--accent);
            }

            /* ── RISK TABLE ── */
            .risk-row td {
                vertical-align: middle;
                font-size: 1rem;
            }

            .risk-high {
                background: rgba(220, 38, 38, .07) !important;
            }

            .risk-med {
                background: rgba(245, 158, 11, .06) !important;
            }

            .risk-low {
                background: rgba(22, 163, 74, .05) !important;
            }

            .risk-badge {
                font-size: .72rem;
                font-weight: 700;
                padding: 3px 10px;
                border-radius: 50px;
            }

            .risk-badge.h {
                background: rgba(220, 38, 38, .12);
                color: #991b1b;
            }

            .risk-badge.m {
                background: rgba(245, 158, 11, .15);
                color: #92400e;
            }

            .risk-badge.l {
                background: rgba(22, 163, 74, .12);
                color: #14532d;
            }

            /* ── PRICING ── */
            .price-card {
                background: #fff;
                border: 1.5px solid #d1fae5;
                border-radius: 22px;
                padding: 36px 28px;
                height: 100%;
                position: relative;
                transition: transform .25s, box-shadow .25s;
            }

            .price-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 20px 54px rgba(13, 110, 110, .12);
            }

            .price-card.featured {
                background: linear-gradient(160deg, var(--primary), var(--secondary));
                border-color: transparent;
                color: #fff;
            }

            .price-card.featured .price-sub {
                color: rgba(255, 255, 255, .6);
            }

            .price-card.featured .fli {
            color: rgba(255, 255, 255, .85);
            }

            .price-badge {
            position: absolute;
            top: -13px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--amber);
            color: var(--dark);
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 5px 16px;
            border-radius: 50px;
            white-space: nowrap;
            }

            .price-name {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 2px;
            }

            .price-sub {
            font-size: .8rem;
            color: var(--muted);
            margin-bottom: 20px;
            }

            .price-amt {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1;
            }

            .price-note {
            font-size: .78rem;
            color: var(--muted);
            margin-bottom: 24px;
            margin-top: 4px;
            }

            .fli {
            display: flex;
            gap: 9px;
            font-size: 1rem;
            margin-bottom: 9px;
            align-items: flex-start;
            }

            .fli i {
            font-size: 1rem;
            margin-top: 3px;
            flex-shrink: 0;
            }

            .fli-yes i {
            color: var(--accent);
            }

            .fli-no i {
            color: #cbd5e1;
            }

            .fli-no span {
            color: #94a3b8;
            }

            /* milestone */
            .milestone-row td {
            font-size: 1rem;
            vertical-align: middle;
            }

            .ms-badge {
            font-size: .75rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 50px;
            }

            .ms-1c {
            background: rgba(16, 185, 129, .12);
            color: #065f46;
            }

            .ms-2c {
            background: rgba(13, 110, 110, .1);
            color: var(--primary);
            }

            .ms-3c {
            background: rgba(245, 158, 11, .1);
            color: #92400e;
            }

            .ms-fc {
            background: rgba(15, 23, 42, .08);
            color: var(--dark);
            }

            /* ── TEAM ── */
            .team-card {
            background: #fff;
            border: 1px solid #d1fae5;
            border-radius: 18px;
            padding: 28px 20px;
            text-align: center;
            height: 100%;
            transition: transform .2s, box-shadow .2s;
            }

            .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 36px rgba(13, 110, 110, .1);
            }

            .team-av {
            width: 76px;
            height: 76px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.9rem;
            margin: 0 auto 16px;
            }

            .team-card h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: .93rem;
            margin-bottom: 4px;
            }

            .team-card .role {
            font-size: .78rem;
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 6px;
            }

            .team-card small {
            font-size: .78rem;
            color: var(--muted);
            }

            .exp-bar {
            height: 5px;
            border-radius: 5px;
            background: #ecfdf5;
            margin-top: 14px;
            overflow: hidden;
            }

            .exp-fill {
            height: 100%;
            border-radius: 5px;
            background: linear-gradient(90deg, var(--accent), var(--primary));
            }

            /* ── TESTIMONIALS ── */
            .testi-card {
            background: #fff;
            border: 1px solid #d1fae5;
            border-radius: 18px;
            padding: 28px 24px;
            height: 100%;
            position: relative;
            }

            .testi-card::before {
            content: '\201C';
            position: absolute;
            top: 16px;
            left: 20px;
            font-size: 3.5rem;
            color: rgba(16, 185, 129, .15);
            line-height: 1;
            font-family: 'Poppins', sans-serif;
            }

            .testi-text {
            font-size: .88rem;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 18px;
            padding-top: 20px;
            }

            .testi-name {
            font-weight: 700;
            font-size: .88rem;
            color: var(--dark);
            }

            .testi-co {
            font-size: .78rem;
            color: var(--accent);
            font-weight: 600;
            }

            .stars i {
            font-size: .75rem;
            color: var(--amber);
            }

            /* ── FAQ ── */
            .faq-accordion .accordion-button {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: .9rem;
            color: var(--dark);
            background: #fff;
            border-radius: 12px !important;
            }

            .faq-accordion .accordion-button:not(.collapsed) {
            background: rgba(16, 185, 129, .06);
            color: var(--primary);
            box-shadow: none;
            }

            .faq-accordion .accordion-button::after {
            filter: hue-rotate(120deg);
            }

            .faq-accordion .accordion-item {
            border: 1px solid #d1fae5 !important;
            border-radius: 12px !important;
            overflow: hidden;
            margin-bottom: 10px;
            }

            .faq-accordion .accordion-body {
            font-size: .86rem;
            color: var(--muted);
            background: #fff;
            }

            /* ── ASSUMPTIONS ── */
            .assump-item {
            display: flex;
            gap: 12px;
            padding: 14px 0;
            border-bottom: 1px solid #ecfdf5;
            }

            .assump-item:last-child {
            border-bottom: none;
            }

            .assump-item i {
            font-size: 1rem;
            flex-shrink: 0;
            margin-top: 2px;
            }

            /* ── CTA ── */
            .cta-wrap {
            background: linear-gradient(135deg, var(--dark) 0%, var(--primary) 100%);
            border-radius: 24px;
            padding: 64px 48px;
            color: #fff;
            position: relative;
            overflow: hidden;
            }

            .cta-wrap::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -80px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(16, 185, 129, .18) 0%, transparent 70%);
            }

            .btn-cta-main {
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            padding: 13px 32px;
            border-radius: 10px;
            border: none;
            font-size: .95rem;
            transition: all .2s;
            }

            .btn-cta-main:hover {
            background: #059669;
            color: #fff;
            transform: translateY(-2px);
            }

            .btn-cta-ghost {
            border: 2px solid rgba(255, 255, 255, .3);
            color: #fff;
            font-weight: 600;
            padding: 13px 32px;
            border-radius: 10px;
            background: transparent;
            font-size: .95rem;
            transition: all .2s;
            }

            .btn-cta-ghost:hover {
            border-color: var(--accent);
            color: var(--accent);
            }

            /* ── FOOTER ── */
            .site-footer {
            background: var(--dark);
            color: rgba(255, 255, 255, .8);
            font-size: 1rem;
            padding: 32px 0;
            }

            .site-footer .brand {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            color: #fff;
            font-weight: 800;
            }

            .site-footer .brand span {
            color: var(--accent);
            }

            .footer-links a {
            color: rgba(255, 255, 255, .8);
            font-size: 1rem;
            text-decoration: none;
            margin-left: 10px;
            transition: color .2s;
            }

            .footer-links a:hover {
            color: var(--accent);
            }

            /* responsive */
            @media(max-width:576px) {
            .hero {
                padding: 60px 0 48px;
            }

            .cta-wrap {
                padding: 40px 24px;
            }

            .exec-box {
                padding: 32px 24px;
            }
            }
        </style>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "CRM Software",
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

    <!-- SCROLL TOP -->
    <button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="bi bi-arrow-up"></i></button>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg sticky-top">
        <div class="container">
        <a class="navbar-brand text-white" href="#">SMART<span class="dot">.</span>CRM</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto gap-lg-1 align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="#summary">Summary</a></li>
            <li class="nav-item"><a class="nav-link" href="#modules">Modules</a></li>
            <li class="nav-item"><a class="nav-link" href="#timeline">Timeline</a></li>
            <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
            <li class="nav-item ms-lg-2"><a href="#contact" class="btn btn-nav">Request Demo</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="container position-relative" style="z-index:1;">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-8">
            <div class="hero-chip"><i class="bi bi-patch-check-fill"></i> Software Development Proposal · 2026</div>
            <h1>Build a <em>Smarter CRM</em><br>That Grows With You</h1>
            <p class="lead mt-3">A full-stack, scalable Customer Relationship Management platform built from the ground up
                — designed to unify your sales, support, and marketing into one powerful system.</p>
            <div class="hero-cta d-flex flex-wrap gap-3 mt-4">
                <a href="#modules" class="btn-primary-hero"><i class="bi bi-grid-3x3-gap-fill me-2"></i>Explore Modules</a>
                <a href="#pricing" class="btn-ghost"><i class="bi bi-currency-rupee me-1"></i>View Pricing</a>
            </div>
            </div>
        </div>
        <div class="hero-stats-row">
            <div class="row g-4 align-items-center">
            <div class="col-auto h-stat">
                <div class="val" data-target="8">0</div>
                <div class="lbl">Core Modules</div>
            </div>
            <div class="col-auto h-stat-divider" style="height:48px;"></div>
            <div class="col-auto h-stat">
                <div class="val" data-target="18">0</div>
                <div class="lbl">Week Delivery</div>
            </div>
            <div class="col-auto h-stat-divider" style="height:48px;"></div>
            <div class="col-auto h-stat">
                <div class="val">99%</div>
                <div class="lbl">Uptime SLA</div>
            </div>
            <div class="col-auto h-stat-divider" style="height:48px;"></div>
            <div class="col-auto h-stat">
                <div class="val" data-target="3">0</div>
                <div class="lbl">Dev Phases</div>
            </div>
            <div class="col-auto h-stat-divider" style="height:48px;"></div>
            <div class="col-auto h-stat">
                <div class="val">REST</div>
                <div class="lbl">API Included</div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- EXECUTIVE SUMMARY -->
    <section class="section-py bg-white" id="summary">
        <div class="container">
        <div class="row gy-4 align-items-stretch">
            <div class="col-lg-6">
            <div class="exec-box h-100">
                <div class="sec-tag"
                style="background:rgba(255,255,255,.12);color:rgba(255,255,255,.8);border-color:rgba(255,255,255,.2);">
                Executive Summary</div>
                <h3 class="mt-2">A Purpose-Built CRM to Transform How You Manage Customers</h3>
                <p>This proposal outlines the development of a web-based, multi-user CRM system tailored to your
                organisation's workflows. The platform will consolidate your sales pipeline, customer support, marketing
                outreach, and reporting into a single, intuitive interface — eliminating siloed tools and manual tracking.
                </p>
                <p class="mt-3" style="color:rgba(255,255,255,.78);">Developed in three structured phases, the system
                prioritises working software at every milestone, ensures continuous feedback loops, and delivers a
                production-ready platform by Week 18.</p>
                <div class="exec-meta row g-3">
                <div class="col-6 col-md-3 exec-meta-item"><label>Client</label><span>Your Organisation</span></div>
                <div class="col-6 col-md-3 exec-meta-item"><label>Prepared By</label><span>CRMPro Dev Team</span></div>
                <div class="col-6 col-md-3 exec-meta-item"><label>Date</label><span>June 2025</span></div>
                <div class="col-6 col-md-3 exec-meta-item"><label>Version</label><span>v2.0</span></div>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="sec-tag">Why a Custom CRM?</div>
            <h2 class="sec-title">Problems We're Solving</h2>
            <p class="sec-sub mb-4">Most businesses outgrow generic tools. Here's what a purpose-built CRM fixes.</p>
            <div class="row g-3">
                <div class="col-sm-6">
                <div class="problem-card">
                    <div class="p-num">01</div>
                    <h6>Scattered Customer Data</h6>
                    <p>Contacts spread across spreadsheets, email, and chat — no single source of truth.</p>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="problem-card">
                    <div class="p-num">02</div>
                    <h6>No Pipeline Visibility</h6>
                    <p>Sales team can't see deal stages, stuck opportunities, or accurate revenue forecasts.</p>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="problem-card">
                    <div class="p-num">03</div>
                    <h6>Slow Support Response</h6>
                    <p>Customer issues lost in inboxes, no SLA tracking, zero escalation workflows.</p>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="problem-card">
                    <div class="p-num">04</div>
                    <h6>Zero Actionable Analytics</h6>
                    <p>No reporting on conversion rates, churn risk, or campaign performance.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- MODULES -->
    <section class="section-py bg-mint" id="modules">
        <div class="container">
        <div class="text-center sec-header" style="margin-bottom:48px;">
            <div class="sec-tag">What We're Building</div>
            <h2 class="sec-title">8 Core CRM Modules</h2>
            <p class="sec-sub mx-auto">Covering the complete customer journey from first contact to ongoing retention.</p>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(13,110,110,.1);color:var(--primary);"><i
                    class="bi bi-people-fill"></i></div>
                <h5>Contact Management</h5>
                <p>Unified database for leads, prospects & customers with rich profiles, tags, and activity history.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(16,185,129,.1);color:#059669;"><i
                    class="bi bi-kanban-fill"></i></div>
                <h5>Sales Pipeline</h5>
                <p>Kanban-style deal board with stage tracking, weighted probability, and revenue forecasting.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(245,158,11,.1);color:#d97706;"><i class="bi bi-headset"></i>
                </div>
                <h5>Support Ticketing</h5>
                <p>Integrated help-desk with SLA timers, priority queues, escalation rules & customer portal.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(13,110,110,.1);color:var(--primary);"><i
                    class="bi bi-megaphone-fill"></i></div>
                <h5>Email Campaigns</h5>
                <p>Drag-and-drop email builder, audience segmentation, A/B testing & open-rate analytics.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(16,185,129,.1);color:#059669;"><i
                    class="bi bi-bar-chart-line-fill"></i></div>
                <h5>Analytics & Reports</h5>
                <p>Real-time KPI dashboards, custom report builder, exportable data (PDF/Excel).</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(245,158,11,.1);color:#d97706;"><i
                    class="bi bi-calendar2-check-fill"></i></div>
                <h5>Task & Activity Log</h5>
                <p>Team task manager, call logs, meeting scheduler, reminders, and follow-up automation.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(13,110,110,.1);color:var(--primary);"><i
                    class="bi bi-plug-fill"></i></div>
                <h5>API & Integrations</h5>
                <p>RESTful API, webhook system, native Slack/WhatsApp/Gmail connectors, and Zapier support.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="mod-card">
                <div class="mod-icon" style="background:rgba(16,185,129,.1);color:#059669;"><i class="bi bi-robot"></i>
                </div>
                <h5>AI Lead Scoring</h5>
                <p>ML-powered lead ranking, churn prediction, deal win probability, and smart follow-up triggers.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- FEATURE TABLE -->
    <section class="section-py bg-white" id="features">
        <div class="container">
        <div class="text-center" style="margin-bottom:40px;">
            <div class="sec-tag">Scope of Work</div>
            <h2 class="sec-title">Detailed Feature Matrix</h2>
            <p class="sec-sub mx-auto">All deliverables, modules, priorities, phases, and classifications in one place.</p>
        </div>
        <div class="table-responsive">
            <table class="table ftable mb-0">
            <thead>
                <tr>
                <th>#</th>
                <th>Feature</th>
                <th>Module</th>
                <th>Priority</th>
                <th>Phase</th>
                <th>Effort (days)</th>
                <th>Classification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>01</td>
                <td>User Auth, Roles & Permissions</td>
                <td>Admin</td>
                <td class="pri-h">● High</td>
                <td>Phase 1</td>
                <td>8</td>
                <td><span class="bs bs-core">Core</span></td>
                </tr>
                <tr>
                <td>02</td>
                <td>Contact & Lead Database</td>
                <td>CRM</td>
                <td class="pri-h">● High</td>
                <td>Phase 1</td>
                <td>10</td>
                <td><span class="bs bs-core">Core</span></td>
                </tr>
                <tr>
                <td>03</td>
                <td>Sales Pipeline (Kanban)</td>
                <td>Sales</td>
                <td class="pri-h">● High</td>
                <td>Phase 1</td>
                <td>12</td>
                <td><span class="bs bs-core">Core</span></td>
                </tr>
                <tr>
                <td>04</td>
                <td>Task & Activity Log</td>
                <td>CRM</td>
                <td class="pri-m">● Medium</td>
                <td>Phase 1</td>
                <td>6</td>
                <td><span class="bs bs-core">Core</span></td>
                </tr>
                <tr>
                <td>05</td>
                <td>KPI Dashboard & Widgets</td>
                <td>Analytics</td>
                <td class="pri-h">● High</td>
                <td>Phase 1</td>
                <td>10</td>
                <td><span class="bs bs-core">Core</span></td>
                </tr>
                <tr>
                <td>06</td>
                <td>Support Ticket System + SLA</td>
                <td>Support</td>
                <td class="pri-m">● Medium</td>
                <td>Phase 2</td>
                <td>14</td>
                <td><span class="bs bs-ext">Extended</span></td>
                </tr>
                <tr>
                <td>07</td>
                <td>Email Campaign Builder</td>
                <td>Marketing</td>
                <td class="pri-m">● Medium</td>
                <td>Phase 2</td>
                <td>12</td>
                <td><span class="bs bs-ext">Extended</span></td>
                </tr>
                <tr>
                <td>08</td>
                <td>Customer Self-Service Portal</td>
                <td>Support</td>
                <td class="pri-m">● Medium</td>
                <td>Phase 2</td>
                <td>8</td>
                <td><span class="bs bs-ext">Extended</span></td>
                </tr>
                <tr>
                <td>09</td>
                <td>Custom Report Builder</td>
                <td>Analytics</td>
                <td class="pri-m">● Medium</td>
                <td>Phase 2</td>
                <td>10</td>
                <td><span class="bs bs-ext">Extended</span></td>
                </tr>
                <tr>
                <td>10</td>
                <td>REST API & Webhooks</td>
                <td>Integration</td>
                <td class="pri-l">● Low</td>
                <td>Phase 3</td>
                <td>14</td>
                <td><span class="bs bs-adv">Advanced</span></td>
                </tr>
                <tr>
                <td>11</td>
                <td>WhatsApp / Slack Integration</td>
                <td>Integration</td>
                <td class="pri-l">● Low</td>
                <td>Phase 3</td>
                <td>8</td>
                <td><span class="bs bs-adv">Advanced</span></td>
                </tr>
                <tr>
                <td>12</td>
                <td>Mobile-Responsive PWA</td>
                <td>Frontend</td>
                <td class="pri-l">● Low</td>
                <td>Phase 3</td>
                <td>10</td>
                <td><span class="bs bs-adv">Advanced</span></td>
                </tr>
                <tr>
                <td>13</td>
                <td>AI-Assisted Lead Scoring</td>
                <td>AI / ML</td>
                <td class="pri-l">● Low</td>
                <td>Phase 3</td>
                <td>16</td>
                <td><span class="bs bs-adv">Advanced</span></td>
                </tr>
                <tr>
                <td>14</td>
                <td>Two-Factor Authentication (2FA)</td>
                <td>Security</td>
                <td class="pri-h">● High</td>
                <td>Phase 1</td>
                <td>4</td>
                <td><span class="bs bs-core">Core</span></td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </section>

    <!-- TIMELINE -->
    <section class="section-py bg-mint" id="timeline">
        <div class="container">
        <div class="row gy-5 align-items-start">
            <div class="col-lg-4">
            <div class="sec-tag">Delivery Plan</div>
            <h2 class="sec-title">Project Timeline</h2>
            <p class="sec-sub mb-4">Three structured phases with working software delivered at each milestone — not a
                big-bang release.</p>
            <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-3 align-items-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                    style="width:42px;height:42px;background:var(--primary);color:#fff;font-weight:800;font-size:1rem;">1
                </div>
                <div>
                    <div style="font-weight:700;font-size:.9rem;">Foundation</div>
                    <div style="font-size:.78rem;color:var(--muted);">Weeks 1–6 · Core CRM live</div>
                </div>
                </div>
                <div class="d-flex gap-3 align-items-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                    style="width:42px;height:42px;background:var(--accent);color:#fff;font-weight:800;font-size:1rem;">2
                </div>
                <div>
                    <div style="font-weight:700;font-size:.9rem;">Extended Features</div>
                    <div style="font-size:.78rem;color:var(--muted);">Weeks 7–12 · Marketing & Support</div>
                </div>
                </div>
                <div class="d-flex gap-3 align-items-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                    style="width:42px;height:42px;background:var(--amber);color:#fff;font-weight:800;font-size:1rem;">3
                </div>
                <div>
                    <div style="font-weight:700;font-size:.9rem;">Advanced & Launch</div>
                    <div style="font-size:.78rem;color:var(--muted);">Weeks 13–18 · API, AI, Deploy</div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="tl-wrap">
                <div class="tl-item">
                <div class="tl-spine">
                    <div class="tl-circle" style="background:var(--primary);">01</div>
                    <div class="tl-vline"></div>
                </div>
                <div class="tl-body">
                    <div class="tl-week">Weeks 1–2</div>
                    <h6>Discovery, Architecture & Setup</h6>
                    <p>Tech stack sign-off, DB schema design, dev environment, CI/CD pipeline setup, wireframe approval &
                    sprint planning.</p>
                    <div class="tl-deliverables">
                    <span class="tl-pill">PRD Document</span><span class="tl-pill">DB Schema</span><span
                        class="tl-pill">Wireframes</span><span class="tl-pill">CI/CD Pipeline</span>
                    </div>
                </div>
                </div>
                <div class="tl-item">
                <div class="tl-spine">
                    <div class="tl-circle" style="background:#059669;">02</div>
                    <div class="tl-vline"></div>
                </div>
                <div class="tl-body">
                    <div class="tl-week">Weeks 3–6</div>
                    <h6>Core CRM Modules (Phase 1)</h6>
                    <p>Auth/RBAC, contact & lead module, deal pipeline, activity logs, 2FA, basic analytics dashboard, and
                    unit tests.</p>
                    <div class="tl-deliverables">
                    <span class="tl-pill">Auth Module</span><span class="tl-pill">Contact DB</span><span
                        class="tl-pill">Kanban Pipeline</span><span class="tl-pill">Dashboard v1</span>
                    </div>
                </div>
                </div>
                <div class="tl-item">
                <div class="tl-spine">
                    <div class="tl-circle" style="background:var(--amber);">03</div>
                    <div class="tl-vline"></div>
                </div>
                <div class="tl-body">
                    <div class="tl-week">Weeks 7–10</div>
                    <h6>Support & Marketing (Phase 2A)</h6>
                    <p>Help-desk ticketing with SLA, escalation rules, email campaign builder with template library, and A/B
                    testing.</p>
                    <div class="tl-deliverables">
                    <span class="tl-pill">Ticket System</span><span class="tl-pill">SLA Engine</span><span
                        class="tl-pill">Campaign Builder</span>
                    </div>
                </div>
                </div>
                <div class="tl-item">
                <div class="tl-spine">
                    <div class="tl-circle" style="background:#0891b2;">04</div>
                    <div class="tl-vline"></div>
                </div>
                <div class="tl-body">
                    <div class="tl-week">Weeks 11–12</div>
                    <h6>Reporting & Customer Portal (Phase 2B)</h6>
                    <p>Custom report builder, data export (PDF/Excel), self-service customer portal with ticket tracking.
                    </p>
                    <div class="tl-deliverables">
                    <span class="tl-pill">Report Builder</span><span class="tl-pill">PDF Export</span><span
                        class="tl-pill">Customer Portal</span>
                    </div>
                </div>
                </div>
                <div class="tl-item">
                <div class="tl-spine">
                    <div class="tl-circle" style="background:#7c3aed;">05</div>
                    <div class="tl-vline"></div>
                </div>
                <div class="tl-body">
                    <div class="tl-week">Weeks 13–16</div>
                    <h6>Advanced Integrations & AI (Phase 3)</h6>
                    <p>REST API + webhooks, Slack/WhatsApp/Gmail connectors, PWA build, and AI-powered lead scoring model.
                    </p>
                    <div class="tl-deliverables">
                    <span class="tl-pill">REST API</span><span class="tl-pill">WhatsApp</span><span
                        class="tl-pill">PWA</span><span class="tl-pill">AI Scoring</span>
                    </div>
                </div>
                </div>
                <div class="tl-item">
                <div class="tl-spine">
                    <div class="tl-circle" style="background:var(--dark);">06</div>
                </div>
                <div class="tl-body">
                    <div class="tl-week">Weeks 17–18</div>
                    <h6>QA, UAT & Production Launch</h6>
                    <p>Full regression testing, performance & security audits, user acceptance testing, documentation, and
                    go-live deployment.</p>
                    <div class="tl-deliverables">
                    <span class="tl-pill">QA Report</span><span class="tl-pill">UAT Sign-off</span><span
                        class="tl-pill">Docs</span><span class="tl-pill">🚀 Go Live</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- TECH STACK -->
    <section class="section-py bg-white">
        <div class="container">
        <div class="text-center" style="margin-bottom:44px;">
            <div class="sec-tag">Technology</div>
            <h2 class="sec-title">Technology Stack</h2>
            <p class="sec-sub mx-auto">Battle-tested technologies chosen for performance, scalability, and developer
            velocity.</p>
        </div>
        <div class="row g-3 justify-content-center">
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-filetype-tsx" style="color:#61dafb;"></i>React.js 18</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-server" style="color:#68a063;"></i>Node.js + Express</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-database-fill" style="color:#4479a1;"></i>PostgreSQL</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-database-fill-gear" style="color:#47a248;"></i>MongoDB (logs)</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-lightning-charge-fill" style="color:#d97706;"></i>Redis (cache)</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-cloud-arrow-up-fill" style="color:#ff9900;"></i>AWS / GCP</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-box-seam-fill" style="color:#2496ed;"></i>Docker + K8s</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-github" style="color:#333;"></i>GitHub CI/CD</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-bootstrap-fill" style="color:#7952b3;"></i>Bootstrap 5</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-shield-lock-fill" style="color:var(--primary);"></i>JWT + OAuth2</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-cpu-fill" style="color:#7c3aed;"></i>Python (ML/AI)</div>
            </div>
            <div class="col-auto">
            <div class="tech-pill"><i class="bi bi-envelope-fill" style="color:#d97706;"></i>SendGrid / SES</div>
            </div>
        </div>
        </div>
    </section>

    <!-- RISK & MITIGATION -->
    <section class="section-py bg-mint" id="risks">
        <div class="container">
        <div class="text-center" style="margin-bottom:40px;">
            <div class="sec-tag">Risk Planning</div>
            <h2 class="sec-title">Risk & Mitigation Matrix</h2>
            <p class="sec-sub mx-auto">We proactively identify risks and have clear mitigation strategies for each.</p>
        </div>
        <div class="table-responsive">
            <table class="table ftable mb-0">
            <thead>
                <tr>
                <th>Risk</th>
                <th>Category</th>
                <th>Likelihood</th>
                <th>Impact</th>
                <th>Mitigation Strategy</th>
                </tr>
            </thead>
            <tbody>
                <tr class="risk-row risk-med">
                <td>Requirement scope creep</td>
                <td>Project</td>
                <td><span class="risk-badge m">Medium</span></td>
                <td><span class="risk-badge h">High</span></td>
                <td>Signed PRD + formal change-request process with timeline/cost impact review</td>
                </tr>
                <tr class="risk-row risk-low">
                <td>Key developer unavailability</td>
                <td>Resource</td>
                <td><span class="risk-badge l">Low</span></td>
                <td><span class="risk-badge m">Medium</span></td>
                <td>Cross-trained team members; documented codebase; backup developer on standby</td>
                </tr>
                <tr class="risk-row risk-med">
                <td>Third-party API changes (WhatsApp, Slack)</td>
                <td>Technical</td>
                <td><span class="risk-badge m">Medium</span></td>
                <td><span class="risk-badge m">Medium</span></td>
                <td>Abstraction layer over all external APIs; versioned integration tests</td>
                </tr>
                <tr class="risk-row risk-high">
                <td>Data security & GDPR compliance</td>
                <td>Security</td>
                <td><span class="risk-badge m">Medium</span></td>
                <td><span class="risk-badge h">High</span></td>
                <td>Encrypted at-rest & in-transit data; RBAC; regular security audits; GDPR data controls</td>
                </tr>
                <tr class="risk-row risk-low">
                <td>Cloud infrastructure cost overrun</td>
                <td>Financial</td>
                <td><span class="risk-badge l">Low</span></td>
                <td><span class="risk-badge l">Low</span></td>
                <td>AWS budgets + alerts; auto-scaling limits; monthly cost review</td>
                </tr>
                <tr class="risk-row risk-low">
                <td>User adoption challenges</td>
                <td>Business</td>
                <td><span class="risk-badge m">Medium</span></td>
                <td><span class="risk-badge m">Medium</span></td>
                <td>Training sessions, video walkthroughs, in-app onboarding tours included</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section-py bg-white" id="pricing">
        <div class="container">
        <div class="text-center" style="margin-bottom:48px;">
            <div class="sec-tag">Investment</div>
            <h2 class="sec-title">Pricing Packages</h2>
            <p class="sec-sub mx-auto">Transparent, phase-aligned pricing with no hidden costs. Source code ownership
            included in all plans.</p>
        </div>
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-md-6 col-lg-4">
            <div class="price-card">
                <div class="price-name">Starter</div>
                <div class="price-sub">Phase 1 · Core CRM Only</div>
                <div class="price-amt">₹X.XX</div>
                <div class="price-note">one-time · 6 weeks delivery</div>
                <hr style="border-color:#ecfdf5;">
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>User auth
                    & RBAC</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Contact &
                    lead database</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Sales
                    pipeline (Kanban)</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Activity
                    log & 2FA security</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Basic KPI
                    dashboard</span></div>
                <div class="fli fli-no"><i class="bi bi-x-circle-fill"></i><span>Support & marketing modules</span></div>
                <div class="fli fli-no"><i class="bi bi-x-circle-fill"></i><span>REST API & integrations</span></div>
                <a href="#contact" class="btn btn-outline-success w-100 rounded-3 mt-3">Get Started</a>
            </div>
            </div>
            <div class="col-md-6 col-lg-4">
            <div class="price-card featured">
                <div class="price-badge">Most Popular</div>
                <div class="price-name">Professional</div>
                <div class="price-sub">Phase 1 + 2 · Full Suite</div>
                <div class="price-amt">₹X.XX</div>
                <div class="price-note" style="color:rgba(255,255,255,.5);">one-time · 12 weeks delivery</div>
                <hr style="border-color:rgba(255,255,255,.15);">
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill"
                    style="color:var(--accent);"></i><span>Everything in Starter</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Support
                    ticketing + SLA engine</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Email
                    campaign builder + A/B</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Custom
                    report builder</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Customer
                    self-service portal</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>6-month
                    priority support</span></div>
                <div class="fli fli-no"><i class="bi bi-x-circle-fill" style="color:rgba(255,255,255,.25);"></i><span>REST
                    API & integrations</span></div>
                <a href="#contact" class="btn btn-light w-100 rounded-3 mt-3 fw-700" style="color:var(--primary);">Get
                Started</a>
            </div>
            </div>
            <div class="col-md-6 col-lg-4">
            <div class="price-card">
                <div class="price-name">Enterprise</div>
                <div class="price-sub">All 3 Phases · Complete Build</div>
                <div class="price-amt">₹X.XX</div>
                <div class="price-note">one-time · 18 weeks delivery</div>
                <hr style="border-color:#ecfdf5;">
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill"
                    style="color:var(--accent);"></i><span>Everything in Professional</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>REST API
                    + webhooks</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>WhatsApp
                    / Slack integration</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill"
                    style="color:var(--accent);"></i><span>AI-assisted lead scoring</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Mobile
                    PWA</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>12-month
                    SLA + dedicated PM</span></div>
                <div class="fli fli-yes"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span>Training
                    + onboarding sessions</span></div>
                <a href="#contact" class="btn w-100 rounded-3 mt-3 fw-700" style="background:var(--dark);color:#fff;">Get
                Started</a>
            </div>
            </div>
        </div>

        <!-- PAYMENT MILESTONES -->
        <div class="text-center mb-4">
            <div class="sec-tag">Payment Structure</div>
            <h3 class="sec-title" style="font-size:1.4rem;">Milestone-Based Payment Schedule</h3>
        </div>
        <div class="table-responsive">
            <table class="table ftable mb-0">
            <thead>
                <tr>
                <th>Milestone</th>
                <th>Deliverable</th>
                <th>Due</th>
                <th>% of Total</th>
                <th>Amount (Professional)</th>
                </tr>
            </thead>
            <tbody class="milestone-row">
                <tr>
                <td><span class="ms-badge ms-1c">M1 — Kickoff</span></td>
                <td>Signed agreement + PRD approval</td>
                <td>Week 0</td>
                <td>30%</td>
                <td>₹84,000</td>
                </tr>
                <tr>
                <td><span class="ms-badge ms-2c">M2 — Phase 1 UAT</span></td>
                <td>Core CRM delivered & tested</td>
                <td>Week 6</td>
                <td>30%</td>
                <td>₹84,000</td>
                </tr>
                <tr>
                <td><span class="ms-badge ms-3c">M3 — Phase 2 UAT</span></td>
                <td>Marketing & support modules live</td>
                <td>Week 12</td>
                <td>30%</td>
                <td>₹84,000</td>
                </tr>
                <tr>
                <td><span class="ms-badge ms-fc">M4 — Go Live</span></td>
                <td>Production launch + handover docs</td>
                <td>Week 12+</td>
                <td>10%</td>
                <td>₹28,000</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="section-py bg-mint" id="team">
        <div class="container">
        <div class="text-center" style="margin-bottom:44px;">
            <div class="sec-tag">Our Team</div>
            <h2 class="sec-title">Who Builds This</h2>
            <p class="sec-sub mx-auto">A dedicated squad of specialists with complementary skills — all assigned full-time.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-lg-3">
            <div class="team-card">
                <div class="team-av" style="background:rgba(13,110,110,.1);color:var(--primary);"><i
                    class="bi bi-person-badge-fill"></i></div>
                <h6>Project Manager</h6>
                <div class="role">Delivery Lead</div>
                <small>Sprint planning · Client comms · Risk tracking</small>
                <div class="exp-bar">
                <div class="exp-fill" style="width:92%;"></div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="team-card">
                <div class="team-av" style="background:rgba(16,185,129,.1);color:#059669;"><i class="bi bi-code-slash"></i>
                </div>
                <h6>Full-Stack Developer</h6>
                <div class="role">Tech Lead</div>
                <small>React · Node.js · PostgreSQL · REST API</small>
                <div class="exp-bar">
                <div class="exp-fill" style="width:96%;"></div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="team-card">
                <div class="team-av" style="background:rgba(245,158,11,.1);color:#d97706;"><i class="bi bi-palette2"></i>
                </div>
                <h6>UI/UX Designer</h6>
                <div class="role">Experience Designer</div>
                <small>Figma · Bootstrap 5 · Responsive · A11y</small>
                <div class="exp-bar">
                <div class="exp-fill" style="width:88%;"></div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3">
            <div class="team-card">
                <div class="team-av" style="background:rgba(13,110,110,.1);color:var(--primary);"><i
                    class="bi bi-shield-check"></i></div>
                <h6>QA Engineer</h6>
                <div class="role">Quality Assurance</div>
                <small>Unit · Integration · Performance · UAT</small>
                <div class="exp-bar">
                <div class="exp-fill" style="width:84%;"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="section-py bg-white" id="testimonials">
        <div class="container">
        <div class="text-center" style="margin-bottom:44px;">
            <div class="sec-tag">Social Proof</div>
            <h2 class="sec-title">What Our Clients Say</h2>
            <p class="sec-sub mx-auto">Real feedback from businesses we've built CRM and enterprise software for.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
            <div class="testi-card">
                <div class="stars mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p class="testi-text">The team delivered a fully functional CRM in just 14 weeks. Our sales conversion
                improved by 34% within two months of go-live. Outstanding communication throughout.</p>
                <div class="testi-name">Rakesh Sharma</div>
                <div class="testi-co">VP Sales, TechNova Pvt Ltd</div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4">
            <div class="testi-card">
                <div class="stars mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p class="testi-text">Replaced three different SaaS tools with this one platform. The milestone-based
                delivery gave us confidence and budget control at every step. Worth every rupee.</p>
                <div class="testi-name">Priya Mehta</div>
                <div class="testi-co">COO, GreenLeaf Logistics</div>
            </div>
            </div>
            <div class="col-md-6 col-lg-4">
            <div class="testi-card">
                <div class="stars mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
                <p class="testi-text">The WhatsApp and Slack integrations were game-changers for our support team. Ticket
                resolution time dropped by 58%. The AI lead scoring is surprisingly accurate.</p>
                <div class="testi-name">Aditya Bose</div>
                <div class="testi-co">Founder, CloudPeak Solutions</div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ASSUMPTIONS & EXCLUSIONS -->
    <section class="section-py bg-mint">
        <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
            <div class="sec-tag">Assumptions</div>
            <h2 class="sec-title" style="font-size:1.5rem;">Proposal Assumptions</h2>
            <p class="sec-sub mb-4">These are taken as true for the proposal to hold.</p>
            <div>
                <div class="assump-item"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span
                    style="font-size:.87rem;">Client will provide timely feedback within 2 business days at each
                    milestone.</span></div>
                <div class="assump-item"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span
                    style="font-size:.87rem;">All content, logo assets, and branding materials are supplied by the client
                    before design begins.</span></div>
                <div class="assump-item"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span
                    style="font-size:.87rem;">Cloud hosting costs (AWS/GCP) are billed separately and borne by the
                    client.</span></div>
                <div class="assump-item"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span
                    style="font-size:.87rem;">A dedicated point of contact is available for weekly stand-up calls.</span>
                </div>
                <div class="assump-item"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span
                    style="font-size:.87rem;">Third-party API keys (WhatsApp Business, SendGrid) are procured by the
                    client.</span></div>
                <div class="assump-item"><i class="bi bi-check-circle-fill" style="color:var(--accent);"></i><span
                    style="font-size:.87rem;">Up to 2 revision rounds per phase are included; additional revisions billed at
                    ₹1,800/hr.</span></div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="sec-tag" style="background:rgba(220,38,38,.06);color:#991b1b;border-color:rgba(220,38,38,.15);">
                Exclusions</div>
            <h2 class="sec-title" style="font-size:1.5rem;">What's Not Included</h2>
            <p class="sec-sub mb-4">The following are outside the scope of this proposal unless agreed separately.</p>
            <div>
                <div class="assump-item"><i class="bi bi-x-circle-fill" style="color:#ef4444;"></i><span
                    style="font-size:.87rem;">Domain registration, SSL certificate procurement, and DNS management.</span>
                </div>
                <div class="assump-item"><i class="bi bi-x-circle-fill" style="color:#ef4444;"></i><span
                    style="font-size:.87rem;">Data migration from existing CRM or spreadsheet systems (can be quoted
                    separately).</span></div>
                <div class="assump-item"><i class="bi bi-x-circle-fill" style="color:#ef4444;"></i><span
                    style="font-size:.87rem;">Native iOS / Android mobile app development (PWA is included in Phase
                    3).</span></div>
                <div class="assump-item"><i class="bi bi-x-circle-fill" style="color:#ef4444;"></i><span
                    style="font-size:.87rem;">Ongoing cloud infrastructure management after 12-month support period.</span>
                </div>
                <div class="assump-item"><i class="bi bi-x-circle-fill" style="color:#ef4444;"></i><span
                    style="font-size:.87rem;">Custom ERP or accounting system integration beyond the scope defined
                    herein.</span></div>
                <div class="assump-item"><i class="bi bi-x-circle-fill" style="color:#ef4444;"></i><span
                    style="font-size:.87rem;">Printed user manuals, on-site training travel expenses.</span></div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-py bg-white" id="faq">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <div class="text-center" style="margin-bottom:44px;">
                <div class="sec-tag">FAQs</div>
                <h2 class="sec-title">Frequently Asked Questions</h2>
                <p class="sec-sub mx-auto">Answers to the most common questions before signing off.</p>
            </div>
            <div class="accordion faq-accordion" id="faqAcc">
                <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#f1">Do we get the full source code?</button></h2>
                <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Yes. Upon final payment, complete source code ownership transfers to your
                    organisation. You receive the Git repository, deployment scripts, and full documentation with no
                    lock-in.</div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#f2">Can we start with Starter and upgrade later?</button>
                </h2>
                <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Absolutely. All packages are built on the same architecture. Upgrading from
                    Starter to Professional simply activates Phase 2 modules — no re-development needed. The price
                    difference applies.</div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#f3">What if we need changes mid-development?</button></h2>
                <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Minor changes within the agreed scope are handled at no cost during each
                    phase. Out-of-scope requests follow a formal change-request process with a written impact assessment
                    before any work begins.</div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#f4">Is the CRM multi-tenant (SaaS-ready)?</button></h2>
                <div id="f4" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">The base proposal covers a single-tenant deployment. Multi-tenant SaaS
                    architecture is available as an add-on — please request a separate quote as it requires additional
                    database isolation and billing logic.</div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#f5">What does post-launch support cover?</button></h2>
                <div id="f5" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Support covers bug fixes, critical security patches, and minor UI
                    adjustments. New feature development, performance upgrades, and third-party API changes after the
                    support period are billed at our standard rates.</div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#f6">How is data security handled?</button></h2>
                <div id="f6" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">All data is AES-256 encrypted at rest and TLS 1.3 in transit. Role-based
                    access control limits exposure. Regular automated backups, penetration test reports, and GDPR-ready
                    data-deletion workflows are included.</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section-py-sm bg-mint" id="contact">
        <div class="container">
        <div class="cta-wrap">
            <div class="row align-items-center gy-4 position-relative" style="z-index:1;">
            <div class="col-lg-7">
                <div class="sec-tag"
                style="background:rgba(16,185,129,.15);color:var(--accent);border-color:rgba(16,185,129,.3);">Ready to
                Begin?</div>
                <h2 style="font-size:clamp(1.5rem,3vw,2.1rem);color:#fff;margin-top:10px;">Let's Build Your CRM Together
                </h2>
                <p style="color:rgba(255,255,255,.65);font-size:.93rem;max-width:520px;margin-bottom:0;">Schedule a
                30-minute discovery call. We'll walk through your requirements, clarify scope, and send a final timeline
                within 48 hours.</p>
            </div>
            <div class="col-lg-5 d-flex flex-wrap gap-3 justify-content-lg-end">
                <a href="mailto:contact@shreegurvetech.com" class="btn-cta-main">
                    <i class="bi bi-envelope-fill me-2"></i>
                    Email Us
                </a>
                <a href="tel:+918200017181" class="btn-cta-ghost">
                    <i class="bi bi-telephone-fill me-2"></i>
                    +91 82000 17181
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
        <div class="row align-items-center gy-3">
            <div class="col-md-4">
            <div class="brand">CRM<span>.</span>Pro</div>
            <div class="mt-1">Software Development Proposal · 2025</div>
            </div>
            <div class="col-md-4 text-md-center">
            <small>Confidential — prepared exclusively for your organisation</small>
            </div>
            <div class="col-md-4 text-md-end footer-links">
            <a href="#summary">Summary</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scroll-to-top visibility
        const scrollBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', () => {
        scrollBtn.classList.toggle('show', window.scrollY > 400);
        });

        // Animated counters
        function animateCounter(el) {
        const target = parseInt(el.dataset.target);
        if (isNaN(target)) return;
        let current = 0;
        const step = Math.ceil(target / 40);
        const timer = setInterval(() => {
            current = Math.min(current + step, target);
            el.textContent = current;
            if (current >= target) clearInterval(timer);
        }, 35);
        }

        // Trigger counters on hero visible
        const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
            document.querySelectorAll('.val[data-target]').forEach(animateCounter);
            observer.disconnect();
            }
        });
        }, { threshold: 0.3 });
        const hero = document.querySelector('.hero');
        if (hero) observer.observe(hero);
    </script>
    </body>

</html>