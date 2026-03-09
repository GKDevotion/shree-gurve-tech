<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'contact-us',
    'title' => "Gallery – Shree Gurve Technology | Our Projects & Work Portfolio",
    'meta_description' => "Explore the Shree Gurve Technology gallery to view our web development, software projects, mobile apps, UI/UX designs, and digital solutions portfolio.",
    'h1_tag' => "Project & Development Gallery",
    'description' => "Welcome to the gallery of Shree Gurve Technology, where we showcase our completed projects, development work, and creative digital solutions. Our gallery highlights various projects including website development, software applications, mobile app development, UI/UX designs, and digital solutions delivered to clients across different industries.",
    'keyword' => "IT company portfolio, web development portfolio, software development projects, mobile app development portfolio, IT company gallery, website design portfolio, technology solutions portfolio, Shree Gurve Technology projects",
];

include_once('elements/header.php');
?>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-xl-4">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image"> 
                            <a href="assets/img/gallery/gallery_1_1.jpg" class="play-btn style3 popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image"> 
                            <a href="assets/img/gallery/gallery_1_1.jpg" class="play-btn style3 popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image"> 
                            <a href="assets/img/gallery/gallery_1_1.jpg" class="play-btn style3 popup-image">
                                <i class="far fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>