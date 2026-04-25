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

        <script>
            var base_url = "<?php echo $seoArr['base_url'];?>";
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0YED9EGZHR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-0YED9EGZHR');
        </script>
        
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "vxkx0virmg");
        </script>
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
                    <a class="icon-masking" href="<?php echo $seoArr['base_url'];?>">
                        <span data-mask-src="<?php echo $seoArr['base_url'].'assets/img/header-250.png';?>" class="mask-icon"></span>
                        <img src="<?php echo $seoArr['base_url'].'assets/img/header-white-250.png';?>" alt="Shree Gurve Tech">
                    </a>
                </div>
                <div class="th-mobile-menu">
                    <ul>
                        <li class="mega-menu-wrap">
                            <a href="<?php echo $seoArr['base_url'];?>" >Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="<?php echo $seoArr['base_url'].'services';?>">Services</a>
                            <ul class="sub-menu">
                                <?php echo getServiceChildMenu( $seoArr, 1 );?>
                                <?php echo getServiceChildMenu( $seoArr, 2 );?>
                                <?php echo getServiceChildMenu( $seoArr, 3 );?>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Company</a>
                            <ul class="sub-menu">
                                <?php echo getCompanyChildMenu( $seoArr, 1 );?>
                                <?php echo getCompanyChildMenu( $seoArr, 2 );?>
                                <?php echo getCompanyChildMenu( $seoArr, 3 );?>
                                <?php echo getCompanyChildMenu( $seoArr, 4 );?>
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?php echo $seoArr['base_url'].'projects';?>">Projects</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Solutions</a>
                            <ul class="sub-menu">
                                <?php echo getSolutionChildMenu( $seoArr, 1 );?>
                                <?php echo getSolutionChildMenu( $seoArr, 2 );?>
                                <?php echo getSolutionChildMenu( $seoArr, 3 );?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo $seoArr['base_url'].'contact-us';?>">Contact US</a>
                        </li>
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
                                    <li class="d-none">
                                        <i class="fas fa-map-location"></i>
                                        <?php echo representativeOfficeAddress();?>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:<?php echo callNumber();?>">
                                            <?php echo callNumber();?>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:<?php echo contactEmail();?>">
                                            <?php echo contactEmail();?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-social">
                                <a href="<?php echo facebookLink();?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo twitterLink();?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo linkedinLink();?>"><i class="fab fa-linkedin-in"></i></a>
                                <a href="<?php echo instagramLink();?>"><i class="fab fa-instagram"></i></a>
                                <a href="<?php echo youtubeLink();?>"><i class="fab fa-youtube"></i></a>
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
                                    <a class="icon-masking" href="<?php echo $seoArr['base_url'];?>">
                                        <span data-mask-src="assets/img/header-250.png" class="mask-icon"></span>
                                        <img src="assets/img/header-250.png" alt="Shree Gurve Tech">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="<?php echo $seoArr['base_url'].'services';?>">Services</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <?php echo getServiceChildMenu( $seoArr, 1 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getServiceChildMenu( $seoArr, 2 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getServiceChildMenu( $seoArr, 3 );?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="javascript:void(0)">Company</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <?php echo getCompanyChildMenu( $seoArr, 1 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getCompanyChildMenu( $seoArr, 2 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getCompanyChildMenu( $seoArr, 3 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getCompanyChildMenu( $seoArr, 4 );?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo $seoArr['base_url'].'projects';?>">Projects</a>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="javascript:void(0)">Solutions</a>
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                                        <?php echo getSolutionChildMenu( $seoArr, 1 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getSolutionChildMenu( $seoArr, 2 );?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <?php echo getSolutionChildMenu( $seoArr, 3 );?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo $seoArr['base_url'].'contact-us';?>">Contact US</a>
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
                                    <a href="<?php echo $seoArr['base_url'].$checkURL; ?>" class="th-btn style3 shadow-none">
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