<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'about-us',
    'title' => "About Shree Gurve Technology | IT Company & Software Development Services",
    'meta_description' => "Learn about Shree Gurve Technology, a trusted IT company offering web development, software solutions, mobile apps, UI/UX design, and digital services since 2019.",
    'h1_tag' => "About Shree Gurve Technology",
    'description' => "Shree Gurve Technology is a professional IT solutions company providing innovative digital services to businesses worldwide. Since our journey began in 2019, we have been delivering reliable technology solutions including web development, software development, mobile application development, UI/UX design, and digital marketing services.",
    'keyword' => "Shree Gurve Technology, IT company in India, software development company, web development company, mobile app development services, custom software development, IT solutions company, technology consulting services, digital transformation services, IT service provider in Surat",
];

include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-30 mb-xl-0">
                <div class="img-box1">
                    <div class="img1"><img src="<?php echo $seoArr['base_url'].'assets/img/normal/about_1_1.png';?>" alt="About-us"></div>
                    <div class="shape1"><img src="<?php echo $seoArr['base_url'].'assets/img/normal/about_shape_1.png';?>" alt="shape"></div>
                    <div class="year-counter">
                        <h3 class="year-counter_number"><span class="counter-number">25</span></h3>
                        <p class="year-counter_text">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xxl-4 ms-xl-3">
                    <div class="title-area mb-35"><span class="sub-title">
                            <div class="icon-masking me-2">
                                <div class="mask-icon" data-mask-src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_1.svg';?>"></div> 
                                <img src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_1.svg';?>" alt="shape">
                            </div>
                            About Us
                        </span>
                        <h2 class="sec-title">
                            We Are Increasing Business Success With <span class="text-theme">IT Solution</span>
                            </h2>
                    </div>
                    <p class="mt-n2 mb-25">
                        Collaboratively envisioneer user friendly supply chains and cross unit imperative. Authoritativel fabricate competitive resource and holistic synergy. Uniquely generate efficient schemas before future.
                    </p>
                    <div class="about-feature-wrap">
                        <div class="about-feature">
                            <div class="about-feature_icon">
                                <img src="<?php echo $seoArr['base_url'].'assets/img/icon/about_feature_1_1.svg';?>" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-feature_title">
                                    Certified Company
                                </h3>
                                <p class="about-feature_text">
                                    Best Provide Skills Services
                                </p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature_icon">
                                <img src="<?php echo $seoArr['base_url'].'assets/img/icon/about_feature_1_2.svg';?>" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Expart Team</h3>
                                <p class="about-feature_text">100% Expert Team</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a href="about-us" class="th-btn"> 
                            DISCOVER MORE<i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                        <div class="call-btn">
                            <div class="play-btn">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <span class="btn-text">Call Us On:</span> 
                                <a href="tel:+19088000393" class="btn-title">+190-8800-0393</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-theme space-extra" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/counter_bg_1.png';?>">
    <div class="container py-2">
        <div class="row gy-40 justify-content-between">
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon"><img src="<?php echo $seoArr['base_url'].'assets/img/icon/counter_1_1.svg';?>" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">986</span>+</h2>
                        <p class="counter-card_text">Finished Project</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon"><img src="<?php echo $seoArr['base_url'].'assets/img/icon/counter_1_2.svg';?>" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">896</span>+</h2>
                        <p class="counter-card_text">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon"><img src="<?php echo $seoArr['base_url'].'assets/img/icon/counter_1_3.svg';?>" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">396</span>+</h2>
                        <p class="counter-card_text">Skilled Experts</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-auto">
                <div class="counter-card">
                    <div class="counter-card_icon"><img src="<?php echo $seoArr['base_url'].'assets/img/icon/counter_1_4.svg';?>" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">496</span>+</h2>
                        <p class="counter-card_text">Honorable Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/why_bg_1.png';?>">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-xxl-7 col-xl-6 mb-30 mb-xl-0">
                <div class="img-box2">
                    <div class="img1"><img src="<?php echo $seoArr['base_url'].'assets/img/normal/why_1_1.jpg';?>" alt="Why"></div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area mb-35"><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon"
                                data-mask-src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_1.svg';?>"></span> <img
                                src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_1.svg';?>" alt="shape"></div>WHY CHOOSE US
                    </span>
                    <h2 class="sec-title">We Deal With The Aspects Professional <span class="text-theme">IT
                            Services</span></h2>
                </div>
                <p class="mt-n2 mb-30">Collaboratively envisioneer user friendly supply chains and cross unit
                    imperative. Authoritativel fabricate competitive resource and holistic.</p>
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

<?php
include_once('elements/how-work-step.php');
include_once('elements/happy-client.php');
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>