<?php
/**
 * Shree Gurve Technology - Header Include
 * Variables expected: $pageTitle, $pageDesc, $pageKeywords, $pageCanonical
 */

$pageTitle     = $pageTitle     ?? 'Shree Gurve Technology – Web Development, Software & IT Services';
$pageDesc      = $pageDesc      ?? 'Shree Gurve Technology is a professional IT solutions company in Surat, India. We deliver web development, software development, mobile apps, UI/UX design, digital marketing, and AI automation services since 2019.';
$pageKeywords  = $pageKeywords  ?? 'IT company Surat, web development India, software development services, mobile app development, UI UX design, digital marketing, Shree Gurve Technology';
$pageCanonical = $pageCanonical ?? 'https://shreegurvetech.com/';
$currentPage   = $currentPage   ?? 'home';

// Schema.org structured data
$orgSchema = json_encode([
    "@context" => "https://schema.org",
    "@type"    => "ITService",
    "name"     => "Shree Gurve Technology",
    "url"      => "https://shreegurvetech.com",
    "logo"     => "https://shreegurvetech.com/assets/img/header-250.png",
    "description" => "Professional IT solutions company in Surat, India providing web development, software development, mobile apps, and digital marketing services.",
    "foundingDate" => "2019",
    "address"  => [
        "@type"           => "PostalAddress",
        "addressLocality" => "Surat",
        "addressRegion"   => "Gujarat",
        "postalCode"      => "395004",
        "addressCountry"  => "IN"
    ],
    "telephone" => "+918200017181",
    "email"     => "contact@shreegurvetech.com",
    "sameAs"    => [
        "https://www.facebook.com/profile.php?id=61589868721671",
        "https://www.linkedin.com/in/gautam-kakadiya-816297a1/",
        "https://www.youtube.com/@ShreeGurave"
    ],
    "areaServed" => "Worldwide",
    "serviceType" => ["Web Development", "Software Development", "Mobile App Development", "Digital Marketing", "IT Consulting", "Cybersecurity"]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO / GEO / AEO Meta -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <meta name="author" content="Shree Gurve Technology">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($pageCanonical) ?>">

    <!-- Geo Tags (GEO SEO) -->
    <meta name="geo.region" content="IN-GJ">
    <meta name="geo.placename" content="Surat, Gujarat, India">
    <meta name="geo.position" content="21.1702;72.8311">
    <meta name="ICBM" content="21.1702, 72.8311">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($pageCanonical) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:image" content="https://shreegurvetech.com/assets/img/og-image.jpg">
    <meta property="og:site_name" content="Shree Gurve Technology">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="https://shreegurvetech.com/assets/img/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

    <!-- Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Schema.org Structured Data (AEO) -->
    <script type="application/ld+json"><?= $orgSchema ?></script>

    <!-- Google tag manager placeholder (add your GTM ID) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script> -->
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-logo">SGT</div>
        <div class="preloader-bar"><span></span></div>
    </div>
</div>

<!-- Top Bar -->
<div class="topbar d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="topbar-info">
                    <a href="tel:+918200017181"><i class="bi bi-telephone-fill me-1"></i> +91 82000 17181</a>
                    <a href="mailto:contact@shreegurvetech.com"><i class="bi bi-envelope-fill me-1"></i> contact@shreegurvetech.com</a>
                    <span><i class="bi bi-geo-alt-fill me-1"></i> Surat, Gujarat, India</span>
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <div class="topbar-social">
                    <a href="https://www.facebook.com/profile.php?id=61589868721671" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/gautam-kakadiya-816297a1/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.youtube.com/@ShreeGurave" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://wa.me/918200017181?text=Hi%2C%20I%20need%20IT%20services" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mainNav" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand" href="/" aria-label="Shree Gurve Technology Home">
            <div class="brand-text">
                <span class="brand-sgt">SGT</span>
                <div class="brand-name">
                    <strong>Shree Gurve</strong>
                    <small>Technology</small>
                </div>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>" href="/" aria-current="<?= $currentPage === 'home' ? 'page' : 'false' ?>">Home</a>
                </li>

                <!-- Services Mega Dropdown -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle <?= $currentPage === 'services' ? 'active' : '' ?>" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <div class="dropdown-menu mega-menu">
                        <div class="container">
                            <div class="row g-3 py-3">
                                <div class="col-lg-3">
                                    <h6 class="mega-cat">Development</h6>
                                    <a class="dropdown-item" href="/service-details/web-development"><i class="bi bi-globe2"></i> Web Development</a>
                                    <a class="dropdown-item" href="/service-details/software-development"><i class="bi bi-code-slash"></i> Software Development</a>
                                    <a class="dropdown-item" href="/service-details/mobile-app-development"><i class="bi bi-phone"></i> Mobile App Development</a>
                                    <a class="dropdown-item" href="/service-details/blockchain-development"><i class="bi bi-link-45deg"></i> Blockchain Development</a>
                                </div>
                                <div class="col-lg-3">
                                    <h6 class="mega-cat">Design & Marketing</h6>
                                    <a class="dropdown-item" href="/service-details/ui-ux-design"><i class="bi bi-palette"></i> UI/UX Design</a>
                                    <a class="dropdown-item" href="/service-details/digital-marketing"><i class="bi bi-graph-up-arrow"></i> Digital Marketing</a>
                                </div>
                                <div class="col-lg-3">
                                    <h6 class="mega-cat">Cloud & Security</h6>
                                    <a class="dropdown-item" href="/service-details/cloud-services"><i class="bi bi-cloud-check"></i> Cloud Services</a>
                                    <a class="dropdown-item" href="/service-details/cyber-security-services"><i class="bi bi-shield-check"></i> Cybersecurity</a>
                                    <a class="dropdown-item" href="/service-details/it-support-maintenance"><i class="bi bi-tools"></i> IT Support & Maintenance</a>
                                </div>
                                <div class="col-lg-3">
                                    <h6 class="mega-cat">Intelligence</h6>
                                    <a class="dropdown-item" href="/service-details/data-analytics"><i class="bi bi-bar-chart-line"></i> Data & Analytics</a>
                                    <a class="dropdown-item" href="/service-details/ai-automation"><i class="bi bi-robot"></i> AI & Automation</a>
                                    <a class="dropdown-item" href="/service-details/it-consulting-services"><i class="bi bi-briefcase"></i> IT Consulting</a>
                                </div>
                            </div>
                            <div class="mega-footer">
                                <a href="/services" class="btn btn-primary btn-sm">View All Services <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Solutions Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= $currentPage === 'solutions' ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solutions</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/solution-details/crm-solutions"><i class="bi bi-people"></i> CRM Solutions</a></li>
                        <li><a class="dropdown-item" href="/solution-details/erp-solutions"><i class="bi bi-diagram-3"></i> ERP Solutions</a></li>
                        <li><a class="dropdown-item" href="/solution-details/hrms-solutions"><i class="bi bi-person-badge"></i> HRMS Solutions</a></li>
                        <li><a class="dropdown-item" href="/solution-details/ecommerce-management-systems"><i class="bi bi-cart3"></i> E-Commerce Systems</a></li>
                        <li><a class="dropdown-item" href="/solution-details/education-management-systems"><i class="bi bi-mortarboard"></i> Education Management</a></li>
                        <li><a class="dropdown-item" href="/solution-details/healthcare-management-systems"><i class="bi bi-heart-pulse"></i> Healthcare Management</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/solutions"><strong>View All Solutions</strong></a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'projects' ? 'active' : '' ?>" href="/projects">Projects</a>
                </li>

                <!-- Company Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array($currentPage, ['about','faqs','gallery']) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/about-us"><i class="bi bi-building"></i> About Us</a></li>
                        <li><a class="dropdown-item" href="/faqs"><i class="bi bi-question-circle"></i> FAQs</a></li>
                        <li><a class="dropdown-item" href="/gallery"><i class="bi bi-images"></i> Gallery</a></li>
                        <li><a class="dropdown-item" href="/proposals"><i class="bi bi-file-earmark-text"></i> Proposals</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-lg-2">
                    <a class="btn btn-primary nav-cta <?= $currentPage === 'contact' ? 'active' : '' ?>" href="/contact-us">
                        Get a Quote <i class="bi bi-arrow-right-short"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas Nav -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header">
        <div class="brand-text">
            <span class="brand-sgt">SGT</span>
            <div class="brand-name">
                <strong>Shree Gurve</strong>
                <small>Technology</small>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="/solutions">Solutions</a></li>
            <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="/faqs">FAQs</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
        </ul>
        <div class="mt-4">
            <a href="/contact-us" class="btn btn-primary w-100">Get a Free Quote</a>
        </div>
        <div class="offcanvas-contact mt-4">
            <a href="tel:+918200017181"><i class="bi bi-telephone-fill"></i> +91 82000 17181</a>
            <a href="mailto:contact@shreegurvetech.com"><i class="bi bi-envelope-fill"></i> contact@shreegurvetech.com</a>
        </div>
    </div>
</div>
