<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'projects',
    'title' => "Our Projects - Shree Gurve Technology | Web, Software & Mobile App Portfolio",
    'meta_description' => "Get in touch with Shree Gurve Technology for web development, mobile apps, software solutions, and IT consulting. Contact our experts for your project today.",
    'h1_tag' => "Our Development Portfolio",
    'description' => "Welcome to the project portfolio of Shree Gurve Technology. Here you can explore some of the innovative technology solutions we have developed for businesses across various industries. Our portfolio includes web development projects, custom software systems, mobile applications, UI/UX designs, and digital platforms designed to improve business performance.",
    'keyword' => "IT company portfolio, web development projects, software development portfolio, mobile app development projects, custom software projects, website design portfolio, technology solutions portfolio, Shree Gurve Technology projects",
];

include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Projects</h1>
            <ul class="breadcumb-menu">
                <li><a href="index">Home</a></li>
                <li>Our Projects</li>
            </ul>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="row gy-4" >
            <div class="col-lg-4 col-md-6 d-none">
                <div class="project-card">
                    <div class="project-img">
                        <img src="assets/img/project/devotion-bullion.jpg" alt="project image">
                    </div>
                    <div class="project-content-wrap">
                        <div class="project-content">
                            <div class="box-particle" id="project-p1"></div>
                            <h3 class="box-title">
                                <a href="https://devotionbullion.com" target="__blank">
                                    Devotion Bullion
                                </a>
                            </h3>
                            <a href="assets/img/project/devotion-bullion.jpg" class="icon-btn popup-image" title="">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <div class="row gy-4" id="projectList">
        </div>
    </div>
    <div class="shape-mockup" data-top="0%" data-right="0%">
        <img src="assets/img/shape/tech_shape_1.png" alt="shape">
    </div>
    <div class="shape-mockup" data-bottom="0%" data-left="0%">
        <img src="assets/img/shape/tech_shape_2.png" alt="shape">
    </div>
</section>

<script>
    fetch("assets/data/projects.json")
        .then(res => res.json())
        .then(data => {

            let html = "";

            Object.keys(data).forEach(key => {
            
                let project = data[key];

                html += `
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="${base_url}assets/img/project/${project.icon}" alt="${project.title}">
                        </div>
                        <div class="project-content-wrap">
                            <div class="project-content">
                                <div class="box-particle" id="project-p1"></div>
                                <h3 class="box-title">
                                    <a href="${project.link}" target="_blank">
                                        ${project.title}
                                    </a>
                                </h3>
                                <a href="${base_url}assets/img/project/${project.icon}" class="icon-btn popup-image">
                                    <i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            });

            $('#projectList').append(html);

            // 🔥 Important: Reinitialize popup
            $('.popup-image').magnificPopup({
                type: 'image',
                gallery: { enabled: true }
            });

        });
</script>

<?php
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>