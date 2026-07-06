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

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph":[

    {
      "@type":"WebPage",
      "@id":"https://www.shreegurvetech.com/terms-conditions#webpage",
      "url":"https://www.shreegurvetech.com/terms-conditions",
      "name":"Terms & Conditions | Shree Gurve Technology",
      "headline":"Terms & Conditions",
      "description":"Read the Terms & Conditions of Shree Gurve Technology covering website usage, technology services, payments, intellectual property, third-party links, and policy updates.",
      "isPartOf":{
        "@id":"https://www.shreegurvetech.com/#website"
      },
      "about":{
        "@id":"https://www.shreegurvetech.com/#organization"
      },
      "primaryImageOfPage":{
        "@type":"ImageObject",
        "url":"https://www.shreegurvetech.com/assets/images/banner.jpg"
      },
      "breadcrumb":{
        "@id":"https://www.shreegurvetech.com/terms-conditions#breadcrumb"
      },
      "dateModified":"2026-07-06",
      "inLanguage":"en"
    },

    {
      "@type":"BreadcrumbList",
      "@id":"https://www.shreegurvetech.com/terms-conditions#breadcrumb",
      "itemListElement":[
        {
          "@type":"ListItem",
          "position":1,
          "name":"Home",
          "item":"https://www.shreegurvetech.com/"
        },
        {
          "@type":"ListItem",
          "position":2,
          "name":"Terms & Conditions",
          "item":"https://www.shreegurvetech.com/terms-conditions"
        }
      ]
    },

    {
      "@type":"DefinedTermSet",
      "@id":"https://www.shreegurvetech.com/terms-conditions#terms",
      "name":"Terms & Conditions",
      "description":"Terms governing the use of the Shree Gurve Technology website and services.",
      "hasDefinedTerm":[

        {
          "@type":"DefinedTerm",
          "name":"Use of Website",
          "description":"Users agree to use the website responsibly and must not attempt to disrupt, damage, or gain unauthorized access to systems."
        },
        {
          "@type":"DefinedTerm",
          "name":"Technology Services",
          "description":"Services include web development, mobile app development, custom software development, UI/UX design, digital marketing, cloud solutions, AI, cybersecurity, and IT consulting."
        },
        {
          "@type":"DefinedTerm",
          "name":"Intellectual Property",
          "description":"All website content including logos, graphics, source code, and designs are protected intellectual property of Shree Gurve Technology."
        },
        {
          "@type":"DefinedTerm",
          "name":"Payments",
          "description":"Projects may require advance payments. Final deliverables are released after completion of payment as agreed."
        },
        {
          "@type":"DefinedTerm",
          "name":"Third Party Links",
          "description":"The website may contain links to external websites. Shree Gurve Technology is not responsible for third-party content or policies."
        },
        {
          "@type":"DefinedTerm",
          "name":"Changes to Terms",
          "description":"Shree Gurve Technology reserves the right to update these Terms & Conditions at any time."
        }

      ]
    },

    {
      "@type":"HowTo",
      "@id":"https://www.shreegurvetech.com/terms-conditions#workflow",
      "name":"Project Work Process",
      "description":"Our standard workflow for delivering successful technology solutions.",
      "totalTime":"P30D",
      "step":[

        {
          "@type":"HowToStep",
          "position":1,
          "name":"Select a Project",
          "text":"Discuss business requirements, objectives, and project scope."
        },
        {
          "@type":"HowToStep",
          "position":2,
          "name":"Project Analysis",
          "text":"Analyze requirements, technology stack, feasibility, and implementation plan."
        },
        {
          "@type":"HowToStep",
          "position":3,
          "name":"Plan & Execute",
          "text":"Develop, test, and execute the project following industry best practices."
        },
        {
          "@type":"HowToStep",
          "position":4,
          "name":"Deliver Result",
          "text":"Deliver the completed solution with quality assurance and client satisfaction."
        }

      ]
    },

    {
      "@type":"FAQPage",
      "@id":"https://www.shreegurvetech.com/terms-conditions#faq",
      "mainEntity":[

        {
          "@type":"Question",
          "name":"What services are covered under these Terms & Conditions?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"These terms apply to services including web development, software development, UI/UX design, mobile app development, digital marketing, cloud services, AI solutions, cybersecurity, blockchain development, data analytics, and IT consulting."
          }
        },
        {
          "@type":"Question",
          "name":"Does Shree Gurve Technology require advance payment?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Certain projects may require advance payments based on project scope. Final deliverables are typically released after agreed payment completion."
          }
        },
        {
          "@type":"Question",
          "name":"Who owns the intellectual property on this website?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"All logos, graphics, code, content, and design elements on this website are the intellectual property of Shree Gurve Technology unless otherwise stated."
          }
        },
        {
          "@type":"Question",
          "name":"Can the Terms & Conditions change?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. Shree Gurve Technology reserves the right to update or modify these Terms & Conditions at any time."
          }
        }

      ]
    },

    {
      "@type":"Organization",
      "@id":"https://www.shreegurvetech.com/#organization",
      "name":"Shree Gurve Technology",
      "url":"https://www.shreegurvetech.com/",
      "logo":{
        "@type":"ImageObject",
        "url":"https://www.shreegurvetech.com/assets/images/logo.png"
      },
      "telephone":"+91-8200017181",
      "email":"contact@shreegurvetech.com"
    },

    {
      "@type":"WebSite",
      "@id":"https://www.shreegurvetech.com/#website",
      "url":"https://www.shreegurvetech.com/",
      "name":"Shree Gurve Technology",
      "publisher":{
        "@id":"https://www.shreegurvetech.com/#organization"
      },
      "inLanguage":"en"
    }

  ]
}
</script>

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