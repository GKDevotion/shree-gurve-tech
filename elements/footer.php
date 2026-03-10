        <footer class="footer-wrapper footer-layout1">
            <div class="footer-top">
                <div class="logo-bg"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <div class="footer-logo">
                                <a class="icon-masking" href="<?php echo $seoArr['base_url'];?>">
                                    <span data-mask-src="<?php echo $seoArr['base_url'].'assets/img/footer-white.png';?>" class="mask-icon"></span>
                                    <img src="<?php echo $seoArr['base_url'].'assets/img/footer-white.png';?>" alt="Shree Gurve Tech">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="footer-contact-wrap">
                                <div class="footer-contact">
                                    <div class="footer-contact_icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="footer-contact_text">Quick Call Us:</span> 
                                        <a href="tel:+918200017181" class="footer-contact_link">
                                            <?php echo callNumber();?>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-contact">
                                    <div class="footer-contact_icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="footer-contact_text">Mail Us On:</span> 
                                        <a href="mailto:<?php echo contactEmail();?>" class="footer-contact_link">
                                            <?php echo contactEmail();?>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-contact">
                                    <div class="footer-contact_icon"><i class="fas fa-location-dot"></i></div>
                                    <div class="media-body">
                                        <span class="footer-contact_text">Visit Location:</span> 
                                        <a href="https://www.google.com/maps" class="footer-contact_link">
                                            <?php echo representativeOfficeAddress();?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xxl-4 col-xl-4">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">About Company</h3>
                                <div class="th-widget-about">
                                    <p class="about-text">
                                        Shree Gurve Technology is a professional IT solutions company offering web development, UI/UX design, digital marketing, software services, and business consulting. We focus on delivering innovative, reliable, and scalable technology solutions that help businesses grow, improve efficiency, and succeed in the digital world.
                                    </p>
                                    <div class="th-social">
                                        <a href="<?php echo facebookLink();?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?php echo twitterLink();?>"><i class="fab fa-twitter"></i></a>
                                        <a href="<?php echo linkedinLink();?>"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="<?php echo instagramLink();?>"><i class="fab fa-instagram"></i></a>
                                        <a href="<?php echo youtubeLink();?>"><i class="fab fa-youtube"></i></a>
                                        <a href="<?php echo whatsappLink();?>"><i class="fab fa-whatsapp"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Quick Links</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="<?php echo $seoArr['base_url'].'about-us';?>">About Us</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'projects';?>">Our Projects</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'faqs';?>">Help & FAQs</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'contact-us';?>">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">IT SERVICES</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/web-development';?>">Web Development</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/software-development';?>">Software Development</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/it-support-maintenance';?>">IT Support & Maintenance</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/ui-ux-design';?>">UI/UX Design</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/cloud-services';?>">Cloud services</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/IT-consulting-services';?>">IT Consulting Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">IT SERVICES</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/digital-marketing';?>">Digital Marketing Services</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/mobile-app-development';?>">Mobile App Development</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/cyber-security-services';?>">Cybersecurity Services</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/data-analytics';?>">Data & Analytics Services</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/ai-automation';?>">AI & Automation Services</a></li>
                                        <li><a href="<?php echo $seoArr['base_url'].'service-details/blockchain-development';?>">Blockchain Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap bg-title">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright-text">
                                Copyright <i class="fal fa-copyright"></i> 
                                <?php echo date("Y"); ?> ShreeGurve. All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-lg-6 text-end d-none d-lg-block">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="<?php echo $seoArr['base_url'].'terms-conditions';?>">Terms & Condition</a></li>
                                    <li><a href="<?php echo $seoArr['base_url'].'cookie-policy';?>">Cookie Policy</a></li>
                                    <li><a href="<?php echo $seoArr['base_url'].'privacy-policy';?>">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-left">
                <img src="assets/img/shape/footer_shape_2.svg" alt="shape">
            </div>
            <div class="shape-right">
                <div class="particle-1" id="particle-5"></div>
            </div>
        </footer>

        <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>
        
        <script src="<?php echo $seoArr['base_url'].'assets/js/vendor/jquery-3.7.1.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/swiper-bundle.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/bootstrap.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/jquery.counterup.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/circle-progress.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/jquery-ui.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/imagesloaded.pkgd.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/isotope.pkgd.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/tilt.jquery.min.js';?>"></script>
        <!-- <script src="assets/js/gsap.min.js"></script> -->
        <script src="<?php echo $seoArr['base_url'].'assets/js/ScrollTrigger.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/smooth-scroll.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/particles.min.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/particles-config.js';?>"></script>
        <script src="<?php echo $seoArr['base_url'].'assets/js/main.js';?>"></script>
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

        <script>
        AOS.init({
            duration:1000,
            once:true
        });
        </script>
    </body>

</html>