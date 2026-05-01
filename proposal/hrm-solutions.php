<?php
include_once('helper/function.php');
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

    <head>
        <!-- ═══════════════════════════════════════════
            FULL SEO META BLOCK
        ═══════════════════════════════════════════ -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Primary SEO -->
        <title>SGTech HRMS | Human Resource Management Software for Indian Businesses</title>
        <meta name="title" content="SGTech HRMS | Human Resource Management Software for Indian Businesses" />
        <meta name="description"
            content="SGTech HRMS is a cloud-based Human Resource Management System offering payroll, attendance, recruitment, performance & compliance tools for SMEs and enterprises in India." />
        <meta name="keywords"
            content="HRMS, HR software India, payroll software, attendance management, employee management system, recruitment software, HR management system, cloud HRMS, SME HR software, SGTech HRMS" />
        <meta name="author" content="SGTech Technologies Pvt. Ltd." />
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="theme-color" content="#0d2137" />
        <link rel="canonical" href="<?= getBaseUrl(); ?>/proposals/" />

        <!-- Geo SEO -->
        <meta name="geo.region" content="IN-GJ" />
        <meta name="geo.placename" content="Surat, Gujarat, India" />
        <meta name="geo.position" content="21.1702;72.8311" />
        <meta name="ICBM" content="21.1702, 72.8311" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= getBaseUrl(); ?>/proposal/hrm-solutions" />
        <meta property="og:title" content="SGTech HRMS | Smart HR Software for India" />
        <meta property="og:description"
            content="Automate payroll, attendance, leave, recruitment & compliance with SGTech — the all-in-one HRMS built for Indian businesses." />
        <meta property="og:image" content="<?= getBaseUrl(); ?>/assets/img/header-250.png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:site_name" content="SGTech HRMS" />
        <meta property="og:locale" content="en_IN" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@SGTechHR" />
        <meta name="twitter:creator" content="@SGTechHR" />
        <meta name="twitter:title" content="SGTech HRMS | Smart HR Software for India" />
        <meta name="twitter:description"
            content="Automate payroll, attendance, leave, recruitment & compliance with SGTech HRMS." />
        <meta name="twitter:image" content="<?= getBaseUrl(); ?>/assets/img/header-250.png" />

        <!-- Structured Data – Organization -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Shree Gurve Technology",
            "url": "<?= getBaseUrl(); ?>",
            "logo": "<?= getBaseUrl(); ?>/assets/img/header-250.png",
            "description": "Cloud-based HRMS software for Indian SMEs and enterprises.",
            "foundingDate": "2020",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Ring Road, Surat",
                "addressLocality": "Surat",
                "addressRegion": "Gujarat",
                "postalCode": "395002",
                "addressCountry": "IN"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-98765-43210",
                "contactType": "sales",
                "availableLanguage": ["English","Hindi","Gujarati"]
            },
            "sameAs": [
                "https://www.linkedin.com/company/sgtech",
            ]
        }
        </script>

        <!-- Structured Data – SoftwareApplication -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "SGTech HRMS",
            "operatingSystem": "Web, Android, iOS",
            "applicationCategory": "BusinessApplication",
            "offers": {
                "@type": "Offer",
                "price": "2999",
                "priceCurrency": "INR",
                "priceSpecification": {
                    "@type": "UnitPriceSpecification",
                    "price": "2999",
                    "priceCurrency": "INR",
                    "unitText": "per month"
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "312"
            },
            "description": "All-in-one cloud HRMS for payroll, attendance, leave, recruitment and performance management.",
            "url": "<?= getBaseUrl(); ?>"
        }
        </script>

        <!-- Structured Data – FAQ -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
            {
                "@type": "Question",
                "name": "What is SGTech HRMS?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "SGTech HRMS is a cloud-based Human Resource Management System that automates payroll, attendance, leave, recruitment, performance reviews, and statutory compliance for Indian businesses."
                }
            },
            {
                "@type": "Question",
                "name": "Is SGTech HRMS suitable for small businesses?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. SGTech offers flexible pricing starting at ₹2,999/month, making it ideal for SMEs with as few as 10 employees."
                }
            },
            {
                "@type": "Question",
                "name": "Does SGTech support Indian payroll compliance?",
                "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. SGTech handles EPF, ESIC, PT, TDS, and GST computations automatically and generates Form 16, ECR, and other statutory reports."
                }
            }
            ]
        }
        </script>

        <!-- Preconnect performance hints -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://cdn.jsdelivr.net" />

        <!-- Favicon placeholders -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="manifest" href="/site.webmanifest" />

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Nunito:wght@300;400;500;600;700&display=swap"
            rel="stylesheet" />

        <style>
            /* ─── Design System ─── */
            :root {
            --teal: #0a7c6e;
            --teal-lt: #12a896;
            --teal-xlt: #d0f0ec;
            --navy: #0d2137;
            --ink: #1a2634;
            --slate: #2c4a63;
            --muted: #607080;
            --silver: #f0f4f8;
            --white: #ffffff;
            --green: #22c997;
            --warn: #f59e0b;
            --rad: 1rem;
            --rad-sm: .6rem;
            --sh: 0 6px 36px rgba(10, 30, 50, .1);
            --sh-lg: 0 16px 60px rgba(10, 30, 50, .16);
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
            font-family: 'Nunito', sans-serif;
            background: var(--white);
            color: var(--ink);
            overflow-x: hidden;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
            font-family: 'Syne', sans-serif;
            }

            /* ─── Scroll Reveal ─── */
            .reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: .65s ease;
            }

            .reveal-left {
            opacity: 0;
            transform: translateX(-36px);
            transition: .65s ease;
            }

            .reveal-right {
            opacity: 0;
            transform: translateX(36px);
            transition: .65s ease;
            }

            .reveal.in,
            .reveal-left.in,
            .reveal-right.in {
            opacity: 1;
            transform: none;
            }

            .d1 {
            transition-delay: .08s
            }

            .d2 {
            transition-delay: .16s
            }

            .d3 {
            transition-delay: .24s
            }

            .d4 {
            transition-delay: .32s
            }

            .d5 {
            transition-delay: .40s
            }

            .d6 {
            transition-delay: .48s
            }

            /* ─── Navbar ─── */
            .navbar {
            background: var(--navy);
            border-bottom: 1px solid rgba(255, 255, 255, .07);
            padding: .85rem 0;
            position: sticky;
            top: 0;
            z-index: 1050;
            transition: padding .3s, box-shadow .3s;
            }

            .navbar.scrolled {
            padding: .55rem 0;
            box-shadow: 0 4px 28px rgba(0, 0, 0, .4);
            }

            .navbar-brand {
            font-family: 'Syne', sans-serif;
            font-size: 1.45rem;
            color: #fff !important;
            letter-spacing: .02em;
            }

            .navbar-brand em {
            font-style: normal;
            color: var(--green);
            }

            .nav-link {
            color: rgba(255, 255, 255, .7) !important;
            font-weight: 500;
            font-size: .93rem;
            transition: .2s;
            }

            .nav-link:hover {
            color: var(--green) !important;
            }

            .btn-demo {
            background: var(--teal-lt);
            color: #fff !important;
            border-radius: 50px;
            padding: .42rem 1.3rem;
            font-weight: 700;
            font-size: .88rem;
            transition: .25s;
            border: none;
            }

            .btn-demo:hover {
            background: var(--green);
            transform: translateY(-1px);
            }

            /* ─── Hero ─── */
            .hero {
            background: linear-gradient(145deg, var(--navy) 0%, #0c2d44 55%, #0d3a30 100%);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
            color: #fff;
            }

            .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 65% 55% at 75% 45%, rgba(18, 168, 150, .14), transparent);
            pointer-events: none;
            }

            .hero-dots {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(255, 255, 255, .06) 1px, transparent 1px);
            background-size: 36px 36px;
            pointer-events: none;
            }

            .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: rgba(34, 201, 151, .12);
            border: 1px solid rgba(34, 201, 151, .35);
            color: var(--green);
            font-size: .78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            padding: .35rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.4rem;
            }

            .hero h1 {
            font-size: clamp(2.4rem, 5.5vw, 4.2rem);
            line-height: 1.08;
            margin-bottom: 1.3rem;
            }

            .hero h1 em {
            font-style: normal;
            color: var(--green);
            }

            .hero p.lead {
            color: rgba(255, 255, 255, .68);
            font-size: 1.08rem;
            max-width: 530px;
            line-height: 1.7;
            }

            .btn-primary-custom {
            background: var(--teal-lt);
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: .8rem 2.2rem;
            font-weight: 700;
            font-size: .95rem;
            transition: .3s;
            box-shadow: 0 6px 24px rgba(18, 168, 150, .4);
            }

            .btn-primary-custom:hover {
            background: var(--green);
            transform: translateY(-2px);
            box-shadow: 0 10px 32px rgba(34, 201, 151, .45);
            color: #fff;
            }

            .btn-ghost {
            border: 2px solid rgba(255, 255, 255, .28);
            color: #fff;
            border-radius: 50px;
            padding: .78rem 2rem;
            font-weight: 600;
            background: transparent;
            transition: .3s;
            font-size: .95rem;
            }

            .btn-ghost:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, .08);
            color: #fff;
            }

            /* Hero dashboard mockup */
            .hero-mockup {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 1.2rem;
            backdrop-filter: blur(10px);
            padding: 1.75rem;
            animation: floatY 6s ease-in-out infinite alternate;
            }

            @keyframes floatY {
            from {
                transform: translateY(0)
            }

            to {
                transform: translateY(-16px)
            }
            }

            .mock-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            }

            .mock-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            }

            .mock-metric {
            background: rgba(255, 255, 255, .08);
            border-radius: .75rem;
            padding: 1rem .9rem;
            text-align: center;
            }

            .mock-metric .val {
            font-family: 'Syne', sans-serif;
            font-size: 1.5rem;
            color: var(--green);
            }

            .mock-metric .lbl {
            font-size: .72rem;
            color: rgba(255, 255, 255, .5);
            margin-top: .1rem;
            }

            .mock-bar-wrap {
            margin-top: .5rem;
            }

            .mock-bar-label {
            display: flex;
            justify-content: space-between;
            font-size: .75rem;
            color: rgba(255, 255, 255, .55);
            margin-bottom: .25rem;
            }

            .mock-bar {
            height: 7px;
            border-radius: 4px;
            background: rgba(255, 255, 255, .1);
            overflow: hidden;
            }

            .mock-bar-fill {
            height: 100%;
            border-radius: 4px;
            background: linear-gradient(90deg, var(--teal-lt), var(--green));
            }

            .mock-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--teal-lt), var(--green));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .75rem;
            font-weight: 700;
            color: #fff;
            }

            /* ─── Trusted By ─── */
            .trusted {
            background: var(--silver);
            padding: 30px 0;
            border-top: 1px solid #e0e8ef;
            border-bottom: 1px solid #e0e8ef;
            }

            .trusted-label {
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--muted);
            }

            .trust-logo {
            background: #fff;
            border: 1px solid #dde4ef;
            border-radius: .5rem;
            padding: .5rem 1.2rem;
            font-family: 'Syne', sans-serif;
            font-size: .85rem;
            font-weight: 700;
            color: var(--slate);
            white-space: nowrap;
            transition: .2s;
            }

            .trust-logo:hover {
            border-color: var(--teal-lt);
            color: var(--teal);
            }

            /* ─── Sections ─── */
            section {
            padding: 96px 0;
            }

            .sec-tag {
            font-size: .75rem;
            letter-spacing: .15em;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--teal-lt);
            }

            .sec-title {
            font-size: clamp(1.85rem, 3.5vw, 2.85rem);
            color: var(--navy);
            line-height: 1.15;
            }

            /* ─── Feature Cards ─── */
            .feat-card {
            background: var(--white);
            border: 1px solid #dde8f0;
            border-radius: var(--rad);
            padding: 2rem 1.75rem;
            transition: .35s;
            height: 100%;
            position: relative;
            overflow: hidden;
            }

            .feat-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--teal-lt), var(--green));
            transform: scaleX(0);
            transform-origin: left;
            transition: .35s;
            }

            .feat-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--sh-lg);
            border-color: var(--teal-lt);
            }

            .feat-card:hover::after {
            transform: scaleX(1);
            }

            .feat-icon {
            width: 52px;
            height: 52px;
            background: var(--teal-xlt);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.45rem;
            color: var(--teal);
            margin-bottom: 1.2rem;
            }

            .feat-card h5 {
            color: var(--navy);
            font-size: 1.08rem;
            margin-bottom: .55rem;
            }

            .feat-card p {
            color: var(--muted);
            font-size: .9rem;
            line-height: 1.65;
            margin: 0;
            }

            /* ─── Stats Band ─── */
            .stat-band {
            background: linear-gradient(135deg, var(--navy) 0%, var(--slate) 100%);
            padding: 60px 0;
            color: #fff;
            }

            .stat-item h3 {
            font-family: 'Syne', sans-serif;
            font-size: 2.8rem;
            color: var(--green);
            margin: 0;
            }

            .stat-item p {
            color: rgba(255, 255, 255, .6);
            font-size: .88rem;
            margin: 0;
            }

            /* ─── How It Works ─── */
            .step-card {
            background: var(--silver);
            border-radius: var(--rad);
            padding: 2rem 1.75rem;
            height: 100%;
            border: 1px solid #dde8f0;
            transition: .3s;
            position: relative;
            }

            .step-card:hover {
            box-shadow: var(--sh);
            border-color: var(--teal-lt);
            }

            .step-num {
            font-family: 'Syne', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: var(--teal-xlt);
            line-height: 1;
            margin-bottom: .75rem;
            }

            .step-card h5 {
            color: var(--navy);
            margin-bottom: .5rem;
            }

            .step-card p {
            color: var(--muted);
            font-size: .9rem;
            margin: 0;
            }

            .step-connector {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--teal-lt);
            font-size: 1.5rem;
            }

            /* ─── Compliance Section ─── */
            .compliance-bg {
            background: linear-gradient(135deg, #f0faf8 0%, #e8f5f0 100%);
            }

            .compliance-badge {
            background: #fff;
            border: 1px solid #c8e8e0;
            border-radius: .6rem;
            padding: .6rem 1rem;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            font-size: .85rem;
            font-weight: 600;
            color: var(--teal);
            transition: .2s;
            }

            .compliance-badge:hover {
            border-color: var(--teal-lt);
            box-shadow: 0 4px 14px rgba(10, 124, 110, .12);
            }

            .compliance-badge i {
            color: var(--teal-lt);
            }

            /* ─── Testimonials ─── */
            .testi-card {
            background: #fff;
            border: 1px solid #dde8f0;
            border-radius: var(--rad);
            padding: 2rem;
            height: 100%;
            transition: .3s;
            }

            .testi-card:hover {
            box-shadow: var(--sh-lg);
            border-color: var(--teal-lt);
            }

            .stars {
            color: var(--warn);
            font-size: .9rem;
            }

            .testi-card blockquote {
            font-size: .93rem;
            color: var(--muted);
            line-height: 1.7;
            margin: 1rem 0;
            font-style: italic;
            }

            .testi-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--teal-lt), var(--green));
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            color: #fff;
            font-size: .9rem;
            }

            /* ─── Pricing ─── */
            .price-card {
            background: #fff;
            border: 1px solid #dde8f0;
            border-radius: var(--rad);
            padding: 2.25rem 2rem;
            transition: .35s;
            height: 100%;
            }

            .price-card.featured {
            background: var(--navy);
            border-color: var(--teal-lt);
            color: #fff;
            }

            .price-card.featured h4,
            .price-card.featured .price-num {
            color: #fff;
            }

            .price-card:hover:not(.featured) {
            transform: translateY(-5px);
            box-shadow: var(--sh-lg);
            }

            .price-card.featured:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 56px rgba(12, 168, 150, .25);
            }

            .pop-badge {
            display: inline-block;
            background: var(--green);
            color: var(--navy);
            font-size: .72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .1em;
            padding: .25rem .9rem;
            border-radius: 50px;
            margin-bottom: 1rem;
            }

            .price-num {
            font-family: 'Syne', sans-serif;
            font-size: 2.6rem;
            color: var(--navy);
            line-height: 1;
            }

            .price-per {
            font-size: .8rem;
            color: var(--muted);
            }

            .price-card.featured .price-per {
            color: rgba(255, 255, 255, .5);
            }

            .chk {
            font-size: .9rem;
            color: var(--muted);
            }

            .chk i {
            color: var(--teal-lt);
            }

            .price-card.featured .chk {
            color: rgba(255, 255, 255, .7);
            }

            .price-card.featured .chk i {
            color: var(--green);
            }

            .btn-teal {
            background: var(--teal-lt);
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: .72rem 2rem;
            font-weight: 700;
            transition: .25s;
            }

            .btn-teal:hover {
            background: var(--green);
            color: #fff;
            }

            .btn-outline-teal {
            border: 2px solid var(--teal-lt);
            color: var(--teal);
            border-radius: 50px;
            padding: .7rem 2rem;
            font-weight: 700;
            background: transparent;
            transition: .25s;
            }

            .btn-outline-teal:hover {
            background: var(--teal-lt);
            color: #fff;
            }

            /* ─── FAQ ─── */
            .faq-acc .accordion-button {
            font-family: 'Syne', sans-serif;
            font-size: .97rem;
            font-weight: 700;
            color: var(--navy);
            background: var(--silver);
            }

            .faq-acc .accordion-button:not(.collapsed) {
            background: var(--teal-xlt);
            color: var(--teal);
            box-shadow: none;
            }

            .faq-acc .accordion-button::after {
            filter: hue-rotate(160deg) saturate(1.5);
            }

            .faq-acc .accordion-body {
            color: var(--muted);
            font-size: .92rem;
            line-height: 1.7;
            }

            .faq-acc .accordion-item {
            border: 1px solid #dde8f0;
            border-radius: .6rem !important;
            margin-bottom: .75rem;
            overflow: hidden;
            }

            /* ─── CTA ─── */
            .cta-section {
            background: linear-gradient(135deg, var(--navy) 0%, #0c3a30 100%);
            padding: 96px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            color: #fff;
            }

            .cta-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 55% 75% at 50% 50%, rgba(34, 201, 151, .1), transparent);
            pointer-events: none;
            }

            .cta-section h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            }

            /* ─── Footer ─── */
            footer {
            background: #06121e;
            color: rgba(255, 255, 255, .5);
            padding: 56px 0 28px;
            }

            footer h6 {
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            letter-spacing: .05em;
            margin-bottom: 1rem;
            }

            footer a {
            color: rgba(255, 255, 255, .5);
            text-decoration: none;
            font-size: .88rem;
            transition: .2s;
            display: block;
            margin-bottom: .4rem;
            }

            footer a:hover {
            color: var(--green);
            }

            .footer-brand {
            font-family: 'Syne', sans-serif;
            font-size: 1.4rem;
            color: #fff;
            }

            .footer-brand em {
            font-style: normal;
            color: var(--green);
            }

            .foot-hr {
            border-color: rgba(255, 255, 255, .07);
            }

            .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .2);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, .5);
            font-size: .95rem;
            transition: .25s;
            }

            .social-icon:hover {
            border-color: var(--green);
            color: var(--green);
            }

            /* ─── Mobile tweaks ─── */
            @media(max-width:991px) {
            .hero {
                padding: 80px 0 60px;
            }

            section {
                padding: 64px 0;
            }
            }

            @media(max-width:575px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .stat-item h3 {
                font-size: 2rem;
            }
            }
        </style>
    </head>

    <body>

    <!-- ══════════ NAVBAR ══════════ -->
    <header>
        <nav class="navbar navbar-expand-lg" role="navigation" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand" href="/" aria-label="SGTech HRMS Home">People<em>Core</em></a>
            <button class="navbar-toggler border-0 p-1" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list text-white" style="font-size:1.5rem;"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-center gap-1 py-3 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#how-it-works">How It Works</a></li>
                <li class="nav-item"><a class="nav-link" href="#compliance">Compliance</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                <li class="nav-item ms-lg-2"><a class="nav-link btn-demo" href="#cta">Free Demo</a></li>
            </ul>
            </div>
        </div>
        </nav>
    </header>

    <!-- ══════════ HERO ══════════ -->
    <main>
        <section class="hero" aria-label="Hero section">
        <div class="hero-dots"></div>
        <div class="container">
            <div class="row align-items-center g-5">

            <!-- Copy -->
            <div class="col-lg-6">
                <div class="hero-eyebrow reveal">
                <i class="bi bi-stars"></i>
                #1 Rated HRMS for Indian SMEs
                </div>
                <h1 class="reveal d1">
                Smarter <em>HR</em> for a<br>Faster-Moving World
                </h1>
                <p class="lead reveal d2">
                SGTech HRMS automates payroll, attendance, leave, recruitment & performance — giving your HR team
                hours back every day and your employees a seamless experience.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-4 reveal d3">
                <a href="#cta" class="btn btn-primary-custom">Start Free Trial</a>
                <a href="#features" class="btn btn-ghost">Explore Features</a>
                </div>
                <div class="d-flex flex-wrap gap-3 mt-4 reveal d4">
                <span style="color:rgba(255,255,255,.55);font-size:.85rem;"><i class="bi bi-check-circle-fill me-1"
                    style="color:var(--green);"></i>No credit card needed</span>
                <span style="color:rgba(255,255,255,.55);font-size:.85rem;"><i class="bi bi-check-circle-fill me-1"
                    style="color:var(--green);"></i>14-day free trial</span>
                <span style="color:rgba(255,255,255,.55);font-size:.85rem;"><i class="bi bi-check-circle-fill me-1"
                    style="color:var(--green);"></i>Setup in &lt; 1 hour</span>
                </div>
                <!-- Rating snippet -->
                <div class="d-flex align-items-center gap-2 mt-4 reveal d5">
                <div class="d-flex">
                    <div class="mock-avatar">A</div>
                    <div class="mock-avatar" style="margin-left:-8px;">R</div>
                    <div class="mock-avatar" style="margin-left:-8px;">P</div>
                </div>
                <div style="font-size:.82rem;color:rgba(255,255,255,.6);">
                    <span style="color:var(--warn);">★★★★★</span> 4.8/5 from 312 reviews
                </div>
                </div>
            </div>

            <!-- Mockup -->
            <div class="col-lg-6 reveal d2">
                <div class="hero-mockup">
                <div class="mock-topbar">
                    <div class="d-flex gap-2">
                    <div class="mock-dot" style="background:#ff5f57;"></div>
                    <div class="mock-dot" style="background:#ffbd2e;"></div>
                    <div class="mock-dot" style="background:#28c940;"></div>
                    </div>
                    <span style="font-size:.78rem;color:rgba(255,255,255,.4);">SGTech Dashboard</span>
                    <div class="mock-avatar">HR</div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-3">
                    <div class="mock-metric">
                        <div class="val">284</div>
                        <div class="lbl">Employees</div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="mock-metric">
                        <div class="val">98%</div>
                        <div class="lbl">Attendance</div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="mock-metric">
                        <div class="val">12</div>
                        <div class="lbl">Open Roles</div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="mock-metric">
                        <div class="val">₹42L</div>
                        <div class="lbl">Payroll</div>
                    </div>
                    </div>
                </div>
                <div style="background:rgba(255,255,255,.06);border-radius:.75rem;padding:1rem;">
                    <div style="font-size:.75rem;color:rgba(255,255,255,.5);margin-bottom:.75rem;">Department Attendance
                    </div>
                    <div class="mock-bar-wrap">
                    <div class="mock-bar-label"><span>Engineering</span><span>96%</span></div>
                    <div class="mock-bar mb-2">
                        <div class="mock-bar-fill" style="width:96%;"></div>
                    </div>
                    <div class="mock-bar-label"><span>Sales</span><span>91%</span></div>
                    <div class="mock-bar mb-2">
                        <div class="mock-bar-fill" style="width:91%;"></div>
                    </div>
                    <div class="mock-bar-label"><span>Operations</span><span>88%</span></div>
                    <div class="mock-bar mb-2">
                        <div class="mock-bar-fill" style="width:88%;"></div>
                    </div>
                    <div class="mock-bar-label"><span>Marketing</span><span>94%</span></div>
                    <div class="mock-bar">
                        <div class="mock-bar-fill" style="width:94%;"></div>
                    </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span style="font-size:.78rem;color:rgba(255,255,255,.4);">Payroll runs in 2 clicks</span>
                    <span
                    style="background:rgba(34,201,151,.2);color:var(--green);font-size:.75rem;font-weight:700;padding:.25rem .75rem;border-radius:50px;">
                    <i class="bi bi-check2-circle me-1"></i>Compliant
                    </span>
                </div>
                </div>
            </div>

            </div>
        </div>
        </section>

        <!-- ══════════ TRUSTED BY ══════════ -->
        <div class="trusted" aria-label="Trusted by companies">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
            <span class="trusted-label me-2">Trusted by 500+ companies</span>
            <span class="trust-logo">Adani Wilmar</span>
            <span class="trust-logo">SuratTex</span>
            <span class="trust-logo">DiamondCity Co.</span>
            <span class="trust-logo">GreenLeaf Foods</span>
            <span class="trust-logo">NovaTech IT</span>
            <span class="trust-logo">Sunrise Exports</span>
            </div>
        </div>
        </div>

        <!-- ══════════ FEATURES ══════════ -->
        <section id="features" aria-labelledby="features-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
            <div class="sec-tag mb-2">Core Features</div>
            <h2 id="features-heading" class="sec-title">Everything HR Needs — One Platform</h2>
            <p class="text-muted mx-auto" style="max-width:560px;">10 integrated modules that eliminate spreadsheets,
                manual errors, and compliance headaches.</p>
            </div>
            <div class="row g-4">
            <div class="col-sm-6 col-lg-4 reveal d1">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-cash-coin"></i></div>
                <h5>Payroll Automation</h5>
                <p>Auto-calculate salaries, deductions, bonuses, and reimbursements. Generate payslips and bank transfer
                    files in one click.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d2">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-calendar2-check"></i></div>
                <h5>Attendance & Leave</h5>
                <p>Biometric, GPS & mobile punch-in. Configurable leave policies, comp-off management, and holiday
                    calendar.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d3">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-person-badge"></i></div>
                <h5>Employee Self-Service</h5>
                <p>Employees can apply for leave, view payslips, update personal info, and raise helpdesk tickets — all
                    from mobile.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d1">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-people"></i></div>
                <h5>Recruitment & ATS</h5>
                <p>Job postings, resume parsing, interview scheduling, offer letters — end-to-end hiring pipeline with
                    candidate portal.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d2">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-graph-up-arrow"></i></div>
                <h5>Performance Management</h5>
                <p>Goal setting (OKR/KRA), 360° feedback, performance appraisals, and promotion workflows with analytics.
                </p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d3">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-mortarboard"></i></div>
                <h5>Training & LMS</h5>
                <p>Create courses, track completion, assign certifications, and measure training ROI for every department.
                </p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d1">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-shield-check"></i></div>
                <h5>Statutory Compliance</h5>
                <p>Auto-compute EPF, ESIC, PT, TDS. Generate Form 16, ECR, and PF challan — fully updated for Indian laws.
                </p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d2">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-bar-chart-line"></i></div>
                <h5>HR Analytics</h5>
                <p>Attrition forecasting, headcount planning, cost-per-hire, absenteeism trends — visual dashboards for
                    leadership.</p>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 reveal d3">
                <article class="feat-card">
                <div class="feat-icon"><i class="bi bi-phone"></i></div>
                <h5>Mobile App (iOS & Android)</h5>
                <p>Full-featured HR app for employees and managers — punch, approve, review, and communicate on the go.
                </p>
                </article>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ STATS BAND ══════════ -->
        <div class="stat-band" aria-label="Key statistics">
        <div class="container">
            <div class="row g-4 text-center">
            <div class="col-6 col-md-3 reveal">
                <div class="stat-item">
                <h3 class="count" data-target="500">0</h3>
                <p>Companies Onboarded</p>
                </div>
            </div>
            <div class="col-6 col-md-3 reveal d1">
                <div class="stat-item">
                <h3 class="count" data-target="50000">0</h3>
                <p>Employees Managed</p>
                </div>
            </div>
            <div class="col-6 col-md-3 reveal d2">
                <div class="stat-item">
                <h3 class="count" data-target="99">0</h3>
                <p>% Payroll Accuracy</p>
                </div>
            </div>
            <div class="col-6 col-md-3 reveal d3">
                <div class="stat-item">
                <h3 class="count" data-target="4">0</h3>
                <p>Hours Saved / Week</p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- ══════════ HOW IT WORKS ══════════ -->
        <section id="how-it-works" class="bg-white" aria-labelledby="hiw-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
            <div class="sec-tag mb-2">Simple Onboarding</div>
            <h2 id="hiw-heading" class="sec-title">Up & Running in 4 Steps</h2>
            </div>
            <div class="row align-items-center g-3">
            <div class="col-md-2 col-lg-2 reveal d1">
                <div class="step-card">
                <div class="step-num">01</div>
                <h5>Sign Up</h5>
                <p>Create your account and choose your plan — no IT team needed.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-flex step-connector reveal d2">
                <i class="bi bi-arrow-right"></i>
            </div>
            <div class="col-md-2 col-lg-2 reveal d2">
                <div class="step-card">
                <div class="step-num">02</div>
                <h5>Import Data</h5>
                <p>Bulk upload employees, salaries and org structure via Excel or API.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-flex step-connector reveal d3">
                <i class="bi bi-arrow-right"></i>
            </div>
            <div class="col-md-2 col-lg-2 reveal d3">
                <div class="step-card">
                <div class="step-num">03</div>
                <h5>Configure</h5>
                <p>Set shifts, leave policies, payroll cycles, and approval workflows.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-flex step-connector reveal d4">
                <i class="bi bi-arrow-right"></i>
            </div>
            <div class="col-md-2 col-lg-2 reveal d4">
                <div class="step-card">
                <div class="step-num">04</div>
                <h5>Go Live</h5>
                <p>Invite employees to the app. Your HRMS is live — enjoy automation.</p>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ COMPLIANCE ══════════ -->
        <section id="compliance" class="compliance-bg" aria-labelledby="comp-heading">
        <div class="container">
            <div class="row g-5 align-items-center">
            <div class="col-lg-5 reveal-left">
                <div class="sec-tag mb-2">100% Indian Compliance</div>
                <h2 id="comp-heading" class="sec-title">Built for Indian Labour Laws</h2>
                <p class="text-muted mt-3">From Surat's textile mills to Bangalore's tech startups — SGTech keeps every
                statutory requirement up to date, automatically.</p>
                <ul class="list-unstyled mt-4 d-flex flex-column gap-2">
                <li style="color:var(--ink);font-size:.92rem;"><i class="bi bi-check-circle-fill me-2"
                    style="color:var(--teal-lt);"></i>Real-time law updates pushed automatically</li>
                <li style="color:var(--ink);font-size:.92rem;"><i class="bi bi-check-circle-fill me-2"
                    style="color:var(--teal-lt);"></i>TRACES & EPFO portal integration</li>
                <li style="color:var(--ink);font-size:.92rem;"><i class="bi bi-check-circle-fill me-2"
                    style="color:var(--teal-lt);"></i>Multi-state professional tax support</li>
                <li style="color:var(--ink);font-size:.92rem;"><i class="bi bi-check-circle-fill me-2"
                    style="color:var(--teal-lt);"></i>Automatic Form 16 generation & distribution</li>
                </ul>
            </div>
            <div class="col-lg-7 reveal-right">
                <div class="d-flex flex-wrap gap-2">
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>EPF / ECR</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>ESIC Filing</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>TDS / Form 24Q</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Form 16 / 16A</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Professional Tax</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Gratuity Calc</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Labour Welfare Fund</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>New Tax Regime</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Maternity Benefit Act</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Shops & Estab. Act</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>Minimum Wages Act</span>
                <span class="compliance-badge"><i class="bi bi-shield-fill-check"></i>POSH Compliance</span>
                </div>
                <div class="mt-4 p-3 d-flex align-items-center gap-3"
                style="background:#fff;border-radius:var(--rad);border:1px solid #c8e8e0;">
                <i class="bi bi-patch-check-fill" style="font-size:2rem;color:var(--teal-lt);flex-shrink:0;"></i>
                <p class="mb-0" style="font-size:.88rem;color:var(--muted);">
                    <strong style="color:var(--navy);">Audited & Certified.</strong> SGTech's payroll engine is audited
                    quarterly by chartered accountants to ensure 100% statutory accuracy.
                </p>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ TESTIMONIALS ══════════ -->
        <section aria-labelledby="testi-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
            <div class="sec-tag mb-2">Customer Stories</div>
            <h2 id="testi-heading" class="sec-title">HR Teams Love SGTech</h2>
            </div>
            <div class="row g-4">
            <div class="col-md-4 reveal d1">
                <div class="testi-card">
                <div class="stars">★★★★★</div>
                <blockquote>"Payroll that used to take 3 days now runs in under an hour. EPF and ESIC filings are
                    automatic. Honestly transformed how our HR team operates."</blockquote>
                <div class="d-flex align-items-center gap-2">
                    <div class="testi-avatar">MK</div>
                    <div>
                    <div style="font-weight:700;font-size:.9rem;color:var(--navy);">Manisha Kothari</div>
                    <div style="font-size:.78rem;color:var(--muted);">HR Head · SuratTex Pvt. Ltd.</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 reveal d2">
                <div class="testi-card">
                <div class="stars">★★★★★</div>
                <blockquote>"The mobile app is a game-changer. Our 200+ field staff punch in via GPS and managers approve
                    leaves instantly. Zero attendance disputes now."</blockquote>
                <div class="d-flex align-items-center gap-2">
                    <div class="testi-avatar" style="background:linear-gradient(135deg,#1a7a4a,#22c997);">RP</div>
                    <div>
                    <div style="font-weight:700;font-size:.9rem;color:var(--navy);">Rohan Patel</div>
                    <div style="font-size:.78rem;color:var(--muted);">COO · GreenLeaf Foods</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 reveal d3">
                <div class="testi-card">
                <div class="stars">★★★★★</div>
                <blockquote>"Setup was done in 45 minutes. The support team is incredibly responsive. Best investment we
                    made for our 80-person team."</blockquote>
                <div class="d-flex align-items-center gap-2">
                    <div class="testi-avatar" style="background:linear-gradient(135deg,#2c4a63,#12a896);">DS</div>
                    <div>
                    <div style="font-weight:700;font-size:.9rem;color:var(--navy);">Dimple Shah</div>
                    <div style="font-size:.78rem;color:var(--muted);">MD · DiamondCity Co.</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ PRICING ══════════ -->
        <section id="pricing" class="bg-white" aria-labelledby="pricing-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
            <div class="sec-tag mb-2">Pricing</div>
            <h2 id="pricing-heading" class="sec-title">Simple, Transparent Pricing</h2>
            <p class="text-muted">No hidden fees. Cancel anytime. All plans include free onboarding support.</p>
            </div>
            <div class="row g-4 justify-content-center align-items-start">
            <!-- Starter -->
            <div class="col-md-6 col-lg-4 reveal d1">
                <div class="price-card">
                <h4 class="mb-1" style="color:var(--navy);">Starter</h4>
                <p class="text-muted" style="font-size:.88rem;">For teams up to 50 employees</p>
                <div class="price-num mt-3">₹2,999</div>
                <div class="price-per text-muted mb-4">/ month · billed annually</div>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Core HR + Payroll</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Attendance & Leave</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Employee Self-Service</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Statutory Compliance</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Mobile App</li>
                    <li class="chk" style="color:#bcc8d4;"><i class="bi bi-x-circle me-2"></i>Recruitment ATS</li>
                    <li class="chk" style="color:#bcc8d4;"><i class="bi bi-x-circle me-2"></i>Performance Module</li>
                </ul>
                <a href="#cta" class="btn btn-outline-teal w-100">Start Free Trial</a>
                </div>
            </div>
            <!-- Growth (featured) -->
            <div class="col-md-6 col-lg-4 reveal d2" style="margin-top:1rem;">
                <div class="price-card featured">
                <div class="pop-badge">Most Popular</div>
                <h4 class="mb-1">Growth</h4>
                <p style="color:rgba(255,255,255,.6);font-size:.88rem;">For teams up to 200 employees</p>
                <div class="price-num mt-3" style="color:var(--green);">₹7,499</div>
                <div class="price-per mb-4">/ month · billed annually</div>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Everything in Starter</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Recruitment ATS</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Performance Management</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Training & LMS</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>HR Analytics Dashboard</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Multi-location Support</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Priority Support</li>
                </ul>
                <a href="#cta" class="btn btn-teal w-100">Start Free Trial</a>
                </div>
            </div>
            <!-- Enterprise -->
            <div class="col-md-6 col-lg-4 reveal d3">
                <div class="price-card">
                <h4 class="mb-1" style="color:var(--navy);">Enterprise</h4>
                <p class="text-muted" style="font-size:.88rem;">Unlimited employees · custom scope</p>
                <div class="price-num mt-3">Custom</div>
                <div class="price-per text-muted mb-4">tailored quote</div>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>All Growth Features</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Custom Modules</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>Dedicated Account Manager</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>SSO / LDAP / AD Integration</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>On-premise Deployment</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>SLA 99.9% + 24×7 Support</li>
                    <li class="chk"><i class="bi bi-check-circle-fill me-2"></i>White-labelling</li>
                </ul>
                <a href="#cta" class="btn btn-outline-teal w-100">Contact Sales</a>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ FAQ ══════════ -->
        <section id="faq" aria-labelledby="faq-heading">
        <div class="container">
            <div class="row g-5 align-items-start">
            <div class="col-lg-4 reveal-left">
                <div class="sec-tag mb-2">FAQ</div>
                <h2 id="faq-heading" class="sec-title">Frequently Asked Questions</h2>
                <p class="text-muted mt-3">Can't find your answer? <a href="#cta"
                    style="color:var(--teal-lt);font-weight:600;">Talk to our team.</a></p>
            </div>
            <div class="col-lg-8 reveal-right">
                <div class="accordion faq-acc" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                        aria-expanded="true" aria-controls="faq1">
                        What is SGTech HRMS?
                    </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">SGTech HRMS is a cloud-based Human Resource Management System that
                        automates payroll, attendance, leave, recruitment, performance reviews, and statutory compliance —
                        built specifically for Indian businesses of all sizes.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq2" aria-controls="faq2">
                        Is it suitable for small businesses?
                    </button>
                    </h3>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Absolutely. Our Starter plan starts at ₹2,999/month and is designed for
                        SMEs with 10–50 employees. You get full payroll, attendance, leave, and compliance features without
                        paying for modules you don't need.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq3" aria-controls="faq3">
                        How does Indian payroll compliance work?
                    </button>
                    </h3>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">SGTech auto-computes EPF, ESIC, Professional Tax, TDS, and Labour
                        Welfare Fund for every state. It generates Form 16, Form 24Q, and ECR files ready for direct upload
                        to government portals — and updates automatically when laws change.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq4" aria-controls="faq4">
                        Can I migrate from my existing HR software?
                    </button>
                    </h3>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Yes. We offer free data migration support. Our onboarding team will help
                        you import employee records, salary structures, and historical data from Excel, Tally, or any legacy
                        HRMS within your first week.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq5" aria-controls="faq5">
                        Is my data secure?
                    </button>
                    </h3>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">We use AES-256 encryption at rest and TLS 1.3 in transit. Data is hosted
                        on AWS Mumbai region with daily backups, 99.9% uptime SLA, and SOC 2 Type II compliance in progress.
                        Your employee data never leaves India.</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- ══════════ CTA ══════════ -->
        <section id="cta" class="cta-section" aria-labelledby="cta-heading">
        <div class="container position-relative">
            <div class="reveal">
            <div class="sec-tag mb-3" style="color:var(--green);">Get Started Today</div>
            <h2 id="cta-heading" class="text-white mb-3">Start Your Free 14-Day Trial</h2>
            <p class="mb-5" style="color:rgba(255,255,255,.65);max-width:500px;margin:0 auto 2rem;">No credit card. No IT
                team. Just sign up and experience the difference in 15 minutes.</p>
            <form class="row g-2 justify-content-center" novalidate aria-label="Trial signup form">
                <div class="col-md-4">
                <label for="heroEmail" class="visually-hidden">Work email address</label>
                <input type="email" id="heroEmail" class="form-control form-control-lg" placeholder="Your work email"
                    style="border-radius:50px;border:none;font-size:.95rem;" required />
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-primary-custom btn-lg">
                    Start Free Trial <i class="bi bi-arrow-right ms-1"></i>
                </button>
                </div>
            </form>
            <div class="mt-4 d-flex flex-wrap justify-content-center gap-4"
                style="color:rgba(255,255,255,.5);font-size:.82rem;">
                <span><i class="bi bi-check2 me-1" style="color:var(--green);"></i>14-day free trial</span>
                <span><i class="bi bi-check2 me-1" style="color:var(--green);"></i>No credit card</span>
                <span><i class="bi bi-check2 me-1" style="color:var(--green);"></i>Free onboarding support</span>
                <span><i class="bi bi-check2 me-1" style="color:var(--green);"></i>Cancel anytime</span>
            </div>
            </div>
        </div>
        </section>
    </main>

    <!-- ══════════ FOOTER ══════════ -->
    <footer role="contentinfo">
        <div class="container">
        <div class="row g-4 pb-4">
            <div class="col-lg-4">
            <div class="footer-brand mb-2">People<em>Core</em></div>
            <p style="font-size:.88rem;max-width:300px;line-height:1.65;">Cloud HRMS built for Indian businesses. Trusted
                by 500+ companies across Gujarat, Maharashtra, Karnataka & more.</p>
            <div class="d-flex gap-2 mt-3">
                <a href="https://linkedin.com/company/SGTech" class="social-icon" aria-label="LinkedIn"><i
                    class="bi bi-linkedin"></i></a>
                <a href="https://twitter.com/SGTechHR" class="social-icon" aria-label="Twitter/X"><i
                    class="bi bi-twitter-x"></i></a>
                <a href="https://youtube.com/@SGTech" class="social-icon" aria-label="YouTube"><i
                    class="bi bi-youtube"></i></a>
                <a href="https://instagram.com/SGTech.hr" class="social-icon" aria-label="Instagram"><i
                    class="bi bi-instagram"></i></a>
            </div>
            </div>
            <div class="col-6 col-lg-2">
            <h6>Product</h6>
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            <a href="#">Integrations</a>
            <a href="#">Changelog</a>
            <a href="#">Roadmap</a>
            </div>
            <div class="col-6 col-lg-2">
            <h6>Solutions</h6>
            <a href="#">SME HR Software</a>
            <a href="#">Payroll Software</a>
            <a href="#">Attendance System</a>
            <a href="#">Recruitment ATS</a>
            <a href="#">Performance Mgmt</a>
            </div>
            <div class="col-6 col-lg-2">
            <h6>Company</h6>
            <a href="#">About Us</a>
            <a href="#">Careers</a>
            <a href="#">Blog</a>
            <a href="#">Press</a>
            <a href="#">Partners</a>
            </div>
            <div class="col-6 col-lg-2">
            <h6>Support</h6>
            <a href="#">Help Center</a>
            <a href="#">Documentation</a>
            <a href="#">Community</a>
            <a href="#">Status Page</a>
            <a href="#cta">Contact</a>
            </div>
        </div>
        <hr class="foot-hr" />
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 pt-2" style="font-size:.82rem;">
            <span>&copy; 2025 SGTech Technologies Pvt. Ltd. All rights reserved.</span>
            <div class="d-flex flex-wrap gap-3">
            <a href="#" style="display:inline;">Privacy Policy</a>
            <a href="#" style="display:inline;">Terms of Service</a>
            <a href="#" style="display:inline;">Cookie Policy</a>
            </div>
            <span style="font-size:.78rem;">Made with ♥ in Surat, Gujarat 🇮🇳</span>
        </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ── Scroll Reveal ── */
        const observer = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('in'); observer.unobserve(e.target); }
        });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal,.reveal-left,.reveal-right').forEach(el => observer.observe(el));

        /* ── Count-up ── */
        const countObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const el = e.target, target = +el.dataset.target;
            const suffix = target === 99 ? '%' : target >= 1000 ? 'K+' : '+';
            const displayTarget = target >= 1000 ? target / 1000 : target;
            const duration = 1600, steps = 60;
            let i = 0;
            const timer = setInterval(() => {
            i++;
            const val = Math.round((displayTarget * i) / steps);
            el.textContent = val + suffix;
            if (i >= steps) { el.textContent = displayTarget + suffix; clearInterval(timer); }
            }, duration / steps);
            countObs.unobserve(el);
        });
        }, { threshold: 0.5 });
        document.querySelectorAll('.count').forEach(el => countObs.observe(el));

        /* ── Navbar shrink ── */
        window.addEventListener('scroll', () => {
        document.querySelector('.navbar').classList.toggle('scrolled', scrollY > 50);
        });

        /* ── CTA form ── */
        document.querySelector('form[aria-label="Trial signup form"]').addEventListener('submit', e => {
        e.preventDefault();
        const input = document.getElementById('heroEmail');
        if (input.value) {
            input.value = '';
            input.placeholder = '✓ Thank you! Check your email.';
            input.style.color = 'var(--teal)';
        }
        });
    </script>
    </body>

</html>