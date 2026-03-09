<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'services',
    'title' => "Custom Software Development | Shree Gurve Technology",
    'meta_description' => "Shree Gurve Technology provides professional web development services including custom websites, web applications, and scalable digital solutions.",
    'h1_tag' => "Professional Web Development Services",
    'description' => "Shree Gurve Technology offers professional web development services designed to help businesses establish a strong online presence. Our experienced team develops high-quality, responsive, and scalable websites using modern technologies and best development practices.",
    'keyword' => "web development services, custom website development, web application development, professional web development company, IT services company, website development company in India, Shree Gurve Technology services",
];

include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Services</h1>
            <ul class="breadcumb-menu">
                <li><a href="index">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</div>

<section class="space" id="service-sec">
    <div class="container">
        <div class="row gy-4" id="servicesContainer"></div>
    </div>
</section>

<section class="position-relative space">
    <div class="th-bg-img" data-bg-src="assets/img/bg/cta_bg_2.jpg">
        <img src="assets/img/bg/bg_overlay_1.png" alt="overlay">
    </div>
    <div class="container z-index-common">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                <div class="title-area mb-35">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                            <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
                        </div>
                        CONTACT US
                    </span>
                    <h2 class="sec-title text-white">
                        Need Any Kind Of IT Solution For
                        <span class="text-theme fw-normal">Your Business?</span>
                    </h2>
                </div>
                <a href="#contact-sec" class="th-btn style3">Get In Touch</a>
            </div>
        </div>
    </div>
</section>
<script>
    fetch("assets/data/services.json")
        .then(res => res.json())
        .then(data => {

            let html = "";
            let index = 1;

            Object.keys(data).forEach(key => {

                let service = data[key];
                let number = index.toString().padStart(2, '0');

                html += `
                <div class="col-md-6 col-xl-4">
                <div class="service-card">

                <div class="service-card_number">${number}</div>

                <div class="shape-icon">
                <img src="assets/img/icon/${service.icon}" alt="Icon">
                <span class="dots"></span>
                </div>

                <h3 class="box-title">
                <a href="service-details/service=${key}">
                ${service.title}
                </a>
                </h3>

                <p class="service-card_text">
                ${service.description}
                </p>

                <a href="service-details/service=${key}" class="th-btn">
                Read More<i class="fa-regular fa-arrow-right ms-2"></i>
                </a>

                <div class="bg-shape">
                <img src="assets/img/bg/service_card_bg.png" alt="bg">
                </div>

                </div>
                </div>
                `;

                index++;

            });

            document.getElementById("servicesContainer").innerHTML = html;

        });
</script>
<?php
include_once('elements/how-work-step.php');
include_once('elements/happy-client.php');
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>