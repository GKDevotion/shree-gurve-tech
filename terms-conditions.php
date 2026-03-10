<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'faqs',
    'title' => "Terms & Conditions | IT Services, Web Development & Software Solutions",
    'meta_description' => "Read the Terms and Conditions for using our website and technology services including web development, software development, mobile apps, and IT consulting.",
    'h1_tag' => "Terms & Conditions",
    'description' => "Read the Terms and Conditions for using our website and technology services including web development, software development, mobile apps, and IT consulting.",
    'keyword' => "terms and conditions, website terms, IT services terms, web development terms, software development agreement, technology services policy, company terms",
];

include_once('elements/header.php');
?>

<style>

    /* HERO SECTION */

    .hero{
        background: linear-gradient(-45deg,#0d6efd,#6610f2,#0dcaf0,#6f42c1);
        background-size:400% 400%;
        animation:gradientMove 10s ease infinite;
        padding:120px 0;
        color:white;
        text-align:center;
    }

    @keyframes gradientMove{
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }

    /* TERMS CARD */

    .terms-card{
        background:rgba(255,255,255,0.8);
        backdrop-filter:blur(12px);
        border-radius:15px;
        padding:30px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
        transition:all .4s ease;
        height:100%;
    }

    .terms-card:hover{
        transform:translateY(-8px);
        box-shadow:0 20px 40px rgba(0,0,0,0.15);
    }

    /* ICON STYLE */

    .icon-box{
        font-size:30px;
        color:#0d6efd;
        margin-bottom:15px;
    }

   

</style>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Terms & Conditions</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url'];?>">Home</a></li>
                <li>Terms & Conditions</li>
            </ul>
        </div>
    </div>
</div>

<section class="space-top">

    <div class="container mb-5">

        <div class="row g-4">

        <!-- ITEM -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="terms-card">

                <div class="icon-box">
                    <i class="bi bi-globe"></i>
                </div>

                <h5>Use of Website</h5>

                <p>
                    Users agree to use this website responsibly and must not attempt to disrupt, damage or gain unauthorized access to our systems.
                </p>

                </div>

            </div>

        <!-- ITEM -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="terms-card">

                    <div class="icon-box">
                        <i class="bi bi-cpu"></i>
                    </div>

                    <h5>Technology Services</h5>

                    <p>
                        We provide services including web development, mobile app development, custom software development, and IT consulting.
                    </p>

                </div>

            </div>


        <!-- ITEM -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

                <div class="terms-card">

                    <div class="icon-box">
                        <i class="bi bi-shield-lock"></i>
                    </div>

                    <h5>Intellectual Property</h5>

                    <p>
                        All content including logos, code, graphics, and design are protected intellectual property of our company.
                    </p>

                </div>

            </div>


        <!-- ITEM -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="terms-card">

                    <div class="icon-box">
                        <i class="bi bi-credit-card"></i>
                    </div>

                    <h5>Payments</h5>

                    <p>
                        Projects may require advance payments. Final deliverables are released after full payment completion.
                    </p>

                </div>

            </div>


        <!-- ITEM -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="terms-card">

                    <div class="icon-box">
                        <i class="bi bi-link-45deg"></i>
                    </div>

                    <h5>Third Party Links</h5>

                    <p>
                        Our website may contain links to external websites. We are not responsible for their policies or content.
                    </p>

                </div>

            </div>


        <!-- ITEM -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

                <div class="terms-card">

                    <div class="icon-box">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>

                    <h5>Changes to Terms</h5>

                    <p>
                        We reserve the right to update our Terms & Conditions at any time. Continued use means acceptance of changes.
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