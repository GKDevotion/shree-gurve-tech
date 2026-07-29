<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'faqs',
    'title' => "Cookie Policy | Website Cookies & Tracking Technologies",
    'meta_description' => "This Cookie Policy explains how our website uses cookies and similar technologies to improve user experience, analyze traffic, and enhance our technology services.",
    'h1_tag' => "Cookie Policy",
    'description' => "This Cookie Policy explains how our website uses cookies and similar technologies to improve user experience, analyze traffic, and enhance our technology services.",
    'keyword' => "cookie policy, website cookies, tracking cookies, browser cookies policy, website tracking technology, cookies usage policy",
];

include_once('elements/header.php');
?>

<style>
/* CARD */

    .cookie-card{
        background:rgba(255,255,255,0.85);
        backdrop-filter:blur(10px);
        border-radius:15px;
        padding:30px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
        transition:.4s;
        height:100%;
    }

    .cookie-card:hover{
        transform:translateY(-8px);
        box-shadow:0 20px 40px rgba(0,0,0,0.15);
    }

    .icon{
        font-size:32px;
        color:#0d6efd;
        margin-bottom:15px;
    }

</style>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Cookie Policy</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url'];?>">Home</a></li>
                <li>Cookie Policy</li>
            </ul>
        </div>
    </div>
</div>

<section class="space-top">

    <div class="container mb-5">

        <div class="row g-4">

        <!-- WHAT ARE COOKIES -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="cookie-card">
                <div class="icon">
                    <i class="bi bi-cookie"></i>
                </div>
                <h5>What Are Cookies?</h5>
                <p>
                    Cookies are small text files stored on your device when you visit a website. They help websites remember user preferences and improve browsing experience.
                </p>
            </div>
        </div>

        <!-- HOW WE USE -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="cookie-card">
                <div class="icon">
                    <i class="bi bi-gear"></i>
                </div>
                <h5>How We Use Cookies</h5>
                <p>
                    We use cookies to enhance website functionality, analyze traffic, improve security, and provide better user experience across our technology services.
                </p>
            </div>
        </div>

        <!-- TYPES -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="cookie-card">
                <div class="icon">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <h5>Types of Cookies</h5>
                <ul>
                    <li>Essential Cookies</li>
                    <li>Performance Cookies</li>
                    <li>Analytics Cookies</li>
                    <li>Functional Cookies</li>
                </ul>
            </div>
        </div>

        <!-- THIRD PARTY -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="cookie-card">
                <div class="icon">
                    <i class="bi bi-link-45deg"></i>
                </div>
                <h5>Third-Party Cookies</h5>
                <p>
                    Some cookies may be placed by third-party services such as analytics tools, social media platforms, or advertising partners.
                </p>
            </div>
        </div>

        <!-- MANAGE -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="cookie-card">
                <div class="icon">
                    <i class="bi bi-sliders"></i>
                </div>
                <h5>Managing Cookies</h5>
                <p>
                    You can control or delete cookies through your browser settings. However, disabling cookies may affect some website features.
                </p>
            </div>
        </div>

        <!-- CONSENT -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="cookie-card">
                <div class="icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h5>Your Consent</h5>
                <p>
                    By continuing to use our website, you agree to the use of cookies as described in this Cookie Policy.
                </p>
            </div>
        </div>

        </div>
    </div>
</section>


<?php
include_once('elements/how-work-step.php');
include_once('elements/footer.php');
?>