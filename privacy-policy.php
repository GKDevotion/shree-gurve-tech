<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'faqs',
    'title' => "Privacy Policy | Data Protection & User Privacy Information",
    'meta_description' => "Learn how we collect, use, and protect your personal information when using our website and technology services including web development and software solutions.",
    'h1_tag' => "Frequently Asked Questions (FAQs)",
    'description' => "Learn how we collect, use, and protect your personal information when using our website and technology services including web development and software solutions.",
    'keyword' => "privacy policy, user data protection, website privacy policy, personal data security, IT company privacy policy, online privacy protection",
];

include_once('elements/header.php');
?>

<style>
/* CARD */

    .privacy-card{
        background:rgba(255,255,255,0.85);
        backdrop-filter:blur(10px);
        border-radius:15px;
        padding:30px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
        transition:.4s;
        height:100%;
    }

    .privacy-card:hover{
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
            <h1 class="breadcumb-title">Privacy Policy</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url'];?>">Home</a></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</div>

<section class="space-top">

    <div class="container mb-5">

        <div class="row g-4">

            <!-- INFO COLLECTION -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="privacy-card">
                    <div class="icon">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <h5>
                        Information We Collect
                    </h5>
                    <p>
                        We may collect personal information such as your name, email address, phone number, and project details when you contact us or use our services.
                    </p>
                </div>
            </div>

            <!-- HOW WE USE -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="privacy-card">
                    <div class="icon">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h5>
                        How We Use Information
                    </h5>
                    <p>
                        Your information is used to provide services, respond to inquiries, improve our website, and communicate project updates.
                    </p>
                </div>

            </div>


            <!-- DATA SECURITY -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

                <div class="privacy-card">
                    <div class="icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h5>
                        Data Security
                    </h5>
                    <p>
                        We implement appropriate security measures to protect your personal data from unauthorized access, misuse, or disclosure.
                    </p>
                </div>
            </div>

            <!-- COOKIES -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up">

                <div class="privacy-card">
                    <div class="icon">
                        <i class="bi bi-cookie"></i>
                    </div>
                    <h5>
                        Cookies
                    </h5>
                    <p>
                        Our website may use cookies to improve user experience and analyze website traffic. You can control cookies through browser settings.
                    </p>
                </div>
            </div>


            <!-- THIRD PARTY -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="privacy-card">
                    <div class="icon">
                        <i class="bi bi-link-45deg"></i>
                    </div>
                    <h5>
                        Third-Party Services
                    </h5>
                    <p>
                        We may use trusted third-party tools such as analytics or hosting providers that process data to help operate our services.
                    </p>
                </div>
            </div>

            <!-- USER RIGHTS -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="privacy-card">
                    <div class="icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h5>
                        Your Rights
                    </h5>
                    <p>
                        You have the right to request access, correction, or deletion of your personal information stored with us.
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