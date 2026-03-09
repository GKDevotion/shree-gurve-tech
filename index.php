<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => '',
    'title' => "Shree Gurve Technology – Web Development, Software Development & IT Services",
    'meta_description' => "Shree Gurve Technology is a professional IT company offering web development, software development, mobile app development, UI/UX design, and digital solutions.",
    'h1_tag' => "Professional IT Services & Technology Solutions",
    'description' => "Shree Gurve Technology is a leading IT solutions company providing innovative and reliable digital services for businesses worldwide. Since 2019, we have been helping startups, small businesses, and enterprises build powerful digital platforms and scalable technology solutions.",
    'keyword' => "IT company in India, web development company, software development services, mobile app development company, custom software development, IT solutions provider, digital transformation services, technology consulting services, web design company, Shree Gurve Technology",
];

include_once( 'elements/header.php' );
include_once( 'elements/home-top-slider.php' );
?>

<section class="space-top">
    <div class="container z-index-common">
        <div class="slider-area">
            <div class="swiper th-slider has-shadow"
                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-featured">
                            <div class="service-featured_content">
                                <div class="shape-icon"><img src="assets/img/icon/service_featured_1.svg"
                                        alt="Icon"> <span class="dots"></span></div>
                                <h3 class="box-title"><a href="service-details.html">IT Management</a></h3>
                                <p class="service-featured_text">Conveniently promote transparent materials and
                                    stand-alone strategic theme areas.</p><a href="service-details.html"
                                    class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-featured">
                            <div class="service-featured_content">
                                <div class="shape-icon"><img src="assets/img/icon/service_featured_2.svg"
                                        alt="Icon"> <span class="dots"></span></div>
                                <h3 class="box-title"><a href="service-details.html">Cloud Computing</a></h3>
                                <p class="service-featured_text">Conveniently promote transparent materials and
                                    stand-alone strategic theme areas.</p><a href="service-details.html"
                                    class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-featured">
                            <div class="service-featured_content">
                                <div class="shape-icon"><img src="assets/img/icon/service_featured_3.svg"
                                        alt="Icon"> <span class="dots"></span></div>
                                <h3 class="box-title"><a href="service-details.html">Backup & Recovery</a></h3>
                                <p class="service-featured_text">Conveniently promote transparent materials and
                                    stand-alone strategic theme areas.</p><a href="service-details.html"
                                    class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-featured">
                            <div class="service-featured_content">
                                <div class="shape-icon"><img src="assets/img/icon/service_featured_4.svg"
                                        alt="Icon"> <span class="dots"></span></div>
                                <h3 class="box-title"><a href="service-details.html">Machine Learning</a></h3>
                                <p class="service-featured_text">Conveniently promote transparent materials and
                                    stand-alone strategic theme areas.</p><a href="service-details.html"
                                    class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box1">
                    <div class="img1"><img src="assets/img/normal/about_1_1.png" alt="About"></div>
                    <div class="shape1"><img src="assets/img/normal/about_shape_1.png" alt="shape"></div>
                    <div class="year-counter">
                        <h3 class="year-counter_number"><span class="counter-number">25</span></h3>
                        <p class="year-counter_text">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xxl-4 ms-xl-3">
                    <div class="title-area mb-35"><span class="sub-title">
                            <div class="icon-masking me-2"><span class="mask-icon"
                                    data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> <img
                                    src="assets/img/theme-img/title_shape_1.svg" alt="shape"></div>About Us
                        </span>
                        <h2 class="sec-title">We Are Increasing Business Success With <span class="text-theme">IT
                                Solution</span></h2>
                    </div>
                    <p class="mt-n2 mb-25">Collaboratively envisioneer user friendly supply chains and cross unit
                        imperative. Authoritativel fabricate competitive resource and holistic synergy. Uniquely
                        generate efficient schemas before future.</p>
                    <div class="about-feature-wrap">
                        <div class="about-feature">
                            <div class="about-feature_icon"><img src="assets/img/icon/about_feature_1_1.svg"
                                    alt="Icon"></div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Certified Company</h3>
                                <p class="about-feature_text">Best Provide Skills Services</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature_icon"><img src="assets/img/icon/about_feature_1_2.svg"
                                    alt="Icon"></div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Expart Team</h3>
                                <p class="about-feature_text">100% Expert Team</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group"><a href="javascript:voic(0)" class="th-btn">DISCOVER MORE<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="call-btn">
                            <div class="play-btn"><i class="fas fa-phone"></i></div>
                            <div class="media-body"><span class="btn-text">Call Us On:</span> <a
                                    href="tel:+91 82000 17181" class="btn-title">+91 82000 17181</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-sec space" id="service-sec" data-bg-src="assets/img/bg/service_bg_1.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-10 px-xl-4">
                <div class="title-area text-center">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> 
                            <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                        </div>
                        OUR SERVICES
                    </span>
                    <h2 class="sec-title">
                        We Provide Exclusive <span class="text-theme">Service</span> For Your Business
                    </h2>
                </div>
            </div>
        </div>

        <div class="row gy-4">

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">01</div>
                    <div class="shape-icon">
                        <img src="assets/img/icon/service_card_1.svg" alt="Icon"> 
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title">
                        <a href="service-details/web-development">Web Development</a>
                    </h3>
                    <p class="service-card_text">
                        Shree Gurve Technology provides professional web development services designed to build fast, secure, and modern websites tailored to your business needs. We create responsive, user-friendly, and SEO-optimized websites that enhance your online presence, improve customer engagement, and support business growth across all digital platforms.
                    </p>
                    <a href="service-details/web-development" class="th-btn">
                        Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>
                    <div class="bg-shape">
                        <img src="assets/img/bg/service_card_bg.png" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">02</div>
                    <div class="shape-icon">
                        <img src="assets/img/icon/service_card_2.svg" alt="Icon"> 
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title">
                        <a href="service-details/ui-ux-design">UI/UX Design</a>
                    </h3>
                    <p class="service-card_text">
                        Shree Gurve Technology offers creative UI/UX design services focused on delivering intuitive, visually appealing, and user-centered digital experiences. We design modern interfaces that improve usability, enhance customer satisfaction, and ensure seamless interaction across websites, web applications, and mobile platforms.
                    </p>
                    <a href="service-details/ui-ux-design" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    <div class="bg-shape">
                        <img src="assets/img/bg/service_card_bg.png" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">03</div>
                    <div class="shape-icon">
                        <img src="assets/img/icon/service_card_3.svg" alt="Icon"> 
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title">
                        <a href="service-details/digital-marketing">Digital Marketing</a>
                    </h3>
                    <p class="service-card_text">
                        Shree Gurve Technology provides result-driven digital marketing services to help businesses grow their online presence and reach the right audience. Our strategies include SEO, social media marketing, paid advertising, and content marketing to increase brand visibility, generate quality leads, and drive measurable business growth.
                    </p>
                    <a href="service-details/digital-marketing" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    <div class="bg-shape">
                        <img src="assets/img/bg/service_card_bg.png" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">04</div>
                    <div class="shape-icon">
                        <img src="assets/img/icon/service_card_4.svg" alt="Icon"> 
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="service-details/data-analytics">Data & Analytics </a></h3>
                    <p class="service-card_text">
                        Shree Gurve Technology provides advanced data and analytics solutions that help businesses transform raw data into meaningful insights. Our experts analyze complex datasets to uncover trends, patterns, and opportunities that support smarter decision-making. Through data visualization, reporting, and predictive analytics, we help organizations improve operational efficiency, enhance customer experiences, and drive strategic growth with data-driven intelligence.
                    </p>
                    <a href="service-details/data-analytics" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    <div class="bg-shape">
                        <img src="assets/img/bg/service_card_bg.png" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">05</div>
                    <div class="shape-icon">
                        <img src="assets/img/icon/service_card_5.svg" alt="Icon"> 
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="service-details/software-development">Software Development</a></h3>
                    <p class="service-card_text">
                        Shree Gurve Technology delivers comprehensive software services tailored to meet diverse business requirements. We design, develop, integrate, and maintain custom software solutions that enhance productivity, streamline operations, and ensure scalability, security, and long-term performance for your organization.
                    </p>
                    <a href="service-details/software-development" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    <div class="bg-shape">
                        <img src="assets/img/bg/service_card_bg.png" alt="bg">
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">
                    <div class="service-card_number">06</div>
                    <div class="shape-icon">
                        <img src="assets/img/icon/service_card_6.svg" alt="Icon"> 
                        <span class="dots"></span>
                    </div>
                    <h3 class="box-title"><a href="service-details/IT-consulting-services">IT Consulting Services</a></h3>
                    <p class="service-card_text">
                        Shree Gurve Technology provides professional IT consulting services to help businesses leverage technology for growth and efficiency. Our experts analyze your current systems, identify opportunities for improvement, and recommend strategic technology solutions that align with your business goals. We assist organizations in optimizing IT infrastructure, enhancing security, and implementing scalable digital solutions to improve productivity and drive long-term success.
                    </p>
                    <a href="service-details/IT-consulting-services" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    <div class="bg-shape">
                        <img src="assets/img/bg/service_card_bg.png" alt="bg">
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="services.php" class="th-btn">
                VIEW ALL SERVICES <i class="fa-regular fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<section class="bg-bottom-right position-relative" data-bg-src="assets/img/bg/cta_bg_1.png" data-bg-color="#080E1C">
    <div class="img-half img-left th-video2"><img src="assets/img/normal/cta_1.jpg" alt="video"> <a
            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                class="fas fa-play"></i></a></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-5 space">
                <div class="title-area mb-35">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> 
                            <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                        </div>
                        GET BEST IT SOLUTION 2019
                    </span>
                    <h2 class="sec-title text-white">
                        We Help Businesses To Achieve Their <span class="text-theme">Objectives</span>
                    </h2>
                </div>
                <p class="mt-n2 mb-30 text-white">
                    We Help Businesses Achieve Their Goals with Innovative Technology Solutions
                </p>
                <p class="mt-n2 mb-30 text-white">
                    We help businesses achieve their objectives by providing innovative technology solutions, strategic insights, and digital services that drive growth, efficiency, and long-term success.
                </p>
                <a href="javascript:voic(0)" class="th-btn style3">
                    DISCOVER MORE<i class="fa-regular fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-bottom="0" data-right="0">
        <div class="particle-1" id="particle-1"></div>
    </div>
</section>

<div class="space-top" data-bg-src="assets/img/bg/why_bg_1.png">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-xxl-7 col-xl-6 mb-30 mb-xl-0">
                <div class="img-box2">
                    <div class="img1"><img src="assets/img/normal/why_1_1.jpg" alt="Why"></div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area mb-35">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> 
                            <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                        </div>
                        WHY CHOOSE US
                    </span>
                    <h2 class="sec-title">
                        We Deal With The Aspects Professional <span class="text-theme">IT Services</span>
                    </h2>
                </div>
                <p class="mt-n2 mb-30">
                    We deal with all aspects of professional IT services, delivering reliable technology solutions, expert support, and innovative digital strategies to help businesses operate efficiently and grow successfully.
                </p>
                <div class="two-column">
                    <div class="checklist style2">
                        <ul>
                            <li><i class="far fa-check"></i> Big Data Analysis</li>
                            <li><i class="far fa-check"></i> 24/7 Online Support</li>
                            <li><i class="far fa-check"></i> Business Improvement</li>
                        </ul>
                    </div>
                    <div class="checklist style2">
                        <ul>
                            <li><i class="far fa-check"></i> High Quality Sicurity</li>
                            <li><i class="far fa-check"></i> 24/7 Support Team</li>
                            <li><i class="far fa-check"></i> Easy Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-top" data-pos-for=".team-sec" data-sec-pos="bottom-half">
    <div class="container z-index-common">
        <div class="counter-card-wrap" data-bg-src="assets/img/bg/counter_bg_2.png">
            <div class="row gy-40 justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_1.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">986</span>+</h2>
                            <p class="counter-card_text">Finished Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_2.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">896</span>+</h2>
                            <p class="counter-card_text">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_3.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">396</span>+</h2>
                            <p class="counter-card_text">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="assets/img/icon/counter_1_4.svg" alt="Icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">496</span>+</h2>
                            <p class="counter-card_text">Honorable Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="overflow-hidden space" data-bg-src="assets/img/bg/testi_bg_1.jpg" data-overlay="overlay1" data-opacity="9">
    <div class="container z-index-common pt-5">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="pe-xxl-5 text-xl-start text-center">
                    <div class="title-area mb-35"><span class="sub-title">
                            <div class="icon-masking me-2"><span class="mask-icon"
                                    data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> <img
                                    src="assets/img/theme-img/title_shape_1.svg" alt="shape"></div>TESTIMONIALS
                        </span>
                        <h2 class="sec-title text-white">Let’s Here What Are The Customer <span
                                class="text-theme">Saying</span></h2>
                    </div>
                    <p class="mt-n2 mb-35 text-white">Appropriately envisioneer leveraged information through 2.0
                        communities. Synergistically parallel task inexpensive products whereas cross-media ideas.
                    </p><a href="javascript:voic(0)" class="th-btn style3 shadow-none">VIEW MORE<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            
            <div class="col-xl-7 mt-40 mt-xl-0">
                <div class="testi-card-area slider-area">

                    <div class="swiper testi-card-slide th-slider" id="testiSlide1"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“Phosfluorescently reinvent prospective metrics
                                        before granular schema. Professionally metrics before expedite
                                        client-centric methods of empow ment whereas effective solut ion.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img
                                                src="assets/img/testimonial/testi_1_1.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Alex Farnandes</h3><span
                                                class="testi-card_desig">UI/UX Designer</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg"
                                            alt="quote"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“Dnosflu orescent reinvent prospective metrics before
                                        granular schema. Professionally metrics before expedite client-centric
                                        methods of empow ment whereas effective coverless.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img
                                                src="assets/img/testimonial/testi_1_2.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Mariana Sonia</h3><span
                                                class="testi-card_desig">CEO at Corola</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg"
                                            alt="quote"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“The best service reinvent prospective metrics before
                                        granular schema. Professionally metrics before expedite client-centric
                                        methods of empow ment whereas effective turnings.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img
                                                src="assets/img/testimonial/testi_1_3.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Abraham Khalil</h3><span
                                                class="testi-card_desig">UI/UX Designer</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg"
                                            alt="quote"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_review"><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i></div>
                                    <p class="testi-card_text">“Five star he reinvent prospective metrics before
                                        granular schema. Professionally metrics before expedite client-centric
                                        methods of empow ment whereas effective gotoning.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img
                                                src="assets/img/testimonial/testi_1_4.jpg" alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="testi-card_name">Alexa Jenifer</h3><span
                                                class="testi-card_desig">CEO at Morosto</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_quote"><img src="assets/img/icon/quote_left.svg"
                                            alt="quote"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-thumb-wrap">
                        <div class="testi-thumb testi-card-tab" data-slider-tab="#testiSlide1">
                            <div class="tab-btn active"><img src="assets/img/testimonial/testi_1_1.jpg" alt="Image">
                            </div>
                            <div class="tab-btn"><img src="assets/img/testimonial/testi_1_2.jpg" alt="Image"></div>
                            <div class="tab-btn"><img src="assets/img/testimonial/testi_1_3.jpg" alt="Image"></div>
                            <div class="tab-btn"><img src="assets/img/testimonial/testi_1_4.jpg" alt="Image"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php
    include_once( 'elements/appointment.php' );
    include_once( 'elements/footer.php' );
?>