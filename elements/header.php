<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Base URL -->
        <base href="<?php echo $seoArr['base_url'];?>">

        <title id="pageTitle"><?php echo $seoArr['title'];?></title>
        
        <!-- Canonical URL -->
        <link id="canonicalLink" rel="canonical" href="<?php echo $seoArr['base_url'].$seoArr['canonical'];?>">

        <meta name="author" content="ShreeGurve">
        <meta id="metaDescription" name="description" content="<?php echo $seoArr['description'];?>">
        <meta id="metaKeywords" name="keywords" content="<?php echo $seoArr['keyword'];?>">
        <meta name="robots" content="INDEX,FOLLOW">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $seoArr['base_url'];?>/assets/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $seoArr['base_url'];?>/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $seoArr['base_url'];?>assets/img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $seoArr['base_url'];?>/assets/img/favicon-16x16.png">        
        
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo $seoArr['base_url'];?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $seoArr['base_url'];?>/assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="<?php echo $seoArr['base_url'];?>/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="<?php echo $seoArr['base_url'];?>/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="<?php echo $seoArr['base_url'];?>/assets/css/style.css">

        <!-- AOS Animation -->
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    </head>

    <body>

        <div id="preloader" class="preloader">
            <div id="loader" class="th-preloader">
                <div class="animation-preloader">
                    <div class="txt-loading">
                        <span preloader-text="S" class="characters">S</span>
                        <span preloader-text="H" class="characters">H</span>
                        <span preloader-text="R" class="characters">R</span>
                        <span preloader-text="E" class="characters">E</span>
                        <span preloader-text="E" class="characters">E</span>
                        <span preloader-text="&nbsp;" class="characters">&nbsp;</span>
                        <span preloader-text="G" class="characters">G</span>
                        <span preloader-text="U" class="characters">U</span>
                        <span preloader-text="R" class="characters">R</span>
                        <span preloader-text="V" class="characters">V</span>
                        <span preloader-text="E" class="characters">E</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidemenu-wrapper">
            <div class="sidemenu-content">
                <button class="closeButton sideMenuCls">
                    <i class="far fa-times"></i>
                </button>
            </div>
        </div>

        <div class="th-menu-wrapper">
            <div class="th-menu-area text-center">
                <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a class="icon-masking" href="index.html">
                        <span data-mask-src="assets/img/header-250.png" class="mask-icon"></span>
                        <img src="assets/img/header-250.png" alt="Webteck">
                    </a>
                </div>
                <div class="th-mobile-menu">
                    <ul>
                        <li class="mega-menu-wrap">
                            <a href="#">Home</a>
                        </li>
                        <li><a href="javascript:voic(0)">About Us</a></li>
                        <li class="menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="service.html">Services</a></li>
                                <li><a href="service-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="project.html">Project</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="faq.html">Faq Page</a></li>
                                <li><a href="error.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <header class="th-header header-layout1 onepage-nav">
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-links">
                                <ul>
                                    <li>
                                        <i class="fas fa-map-location"></i>
                                        Makaraba, Ahemdabad 380015
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:+918200017181">+91 82000 17181</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:contact@shreegurve.com">contact@shreegurve.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-wrapper">
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a class="icon-masking" href="index">
                                        <span data-mask-src="assets/img/header-250.png" class="mask-icon"></span>
                                        <img src="assets/img/header-250.png" alt="Webteck">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="services">Services</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="service-details/web-development">Web Development Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/software-development">Software Development Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/mobile-app-development">Mobile App Development</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/ui-ux-design">UI/UX Design Services</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="service-details/digital-marketing">Digital Marketing Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/cloud-services">Cloud Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/IT-consulting-services">IT Consulting Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/cyber-security-services">Cybersecurity Services</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="service-details/data-analytics">Data & Analytics Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/ai-automation">AI & Automation Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/it-support-maintenance">IT Support & Maintenance</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-details/blockchain-development">Blockchain Development</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="javascript:void(0)">Company</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="about-us">About US</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)">Career</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery">Gallery</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="faqs">FAQs</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="projects">Projects</a>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="javascript:void(0)">Solutions</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="solution-details/crm-solutions">CRM Solutions</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/erp-solutions">ERP Solutions</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/hrms-solutions">HRMS Solutions</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/project-management-systems">Project Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/helpdesk-systems">Helpdesk / Ticketing Systems</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="solution-details/education-management-systems">School / Education Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/healthcare-management-systems">Hospital / Healthcare Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/inventory-management-systems">Inventory Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/accounting-finance-systems">Accounting & Finance Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/ecommerce-management-systems">E-Commerce Management Systems</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a href="solution-details/real-estate-management-systems">Real Estate Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/travel-tourism-management-systems">Travel & Tourism Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/document-management-systems">Document Management Systems</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/learning-management-systems">Learning Management Systems (LMS)</a>
                                                        </li>

                                                        <li>
                                                            <a href="solution-details/business-intelligenceanalytics-systems">Business Intelligence & Analytics Systems</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact-us">Contact US</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header-button">
                                    <button type="button" class="th-menu-toggle d-inline-block d-lg-none">
                                        <i class="far fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <div class="header-button">
                                    <?php
                                    $checkURL = "#contact-sec";
                                    if (str_contains( $seoArr['canonical'], "contact-us")) {
                                        $checkURL = "index#contact-sec";
                                    }
                                    ?>
                                    <a href="<?php echo $checkURL; ?>" class="th-btn style3 shadow-none">
                                        Make Appointment <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo-bg"></div>
                </div>
            </div>
        </header>