<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Terms & Conditions | Shree Gurve Technology – Surat, India';
$pageDesc      = 'Read the Terms and Conditions of Shree Gurve Technology. Understand the rules, responsibilities, and agreements governing use of our website and IT services.';
$pageCanonical = 'https://shreegurvetech.com/terms-conditions';
$currentPage   = '';
$lastUpdated   = 'June 1, 2025';

include __DIR__ . '/includes/header.php';
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
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Terms &amp; Conditions</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Last updated: <?= $lastUpdated ?></p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Terms &amp; Conditions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="section-py" aria-label="Terms Content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-card" style="line-height:1.9;" data-aos="fade-up">

                    <div style="background:rgba(244,98,58,0.06);border:1px solid rgba(244,98,58,0.15);border-radius:10px;padding:16px 20px;margin-bottom:32px;">
                        <p style="margin:0;font-size:0.875rem;color:var(--gray-dark);">
                            <i class="bi bi-exclamation-triangle-fill me-2" style="color:var(--accent);"></i>
                            Please read these Terms &amp; Conditions carefully before using the services offered by <strong>Shree Gurve Technology</strong>. By accessing our website or engaging our services, you agree to be bound by these terms.
                        </p>
                    </div>

                    <?php
                    $sections = [
                        ['title'=>'1. Acceptance of Terms',
                         'content'=>'By accessing the website at <a href="https://shreegurvetech.com">shreegurvetech.com</a> or using any of our services, you confirm that you are at least 18 years of age and agree to comply with and be bound by these Terms &amp; Conditions. If you do not agree with any part of these terms, please do not use our website or services.'],
                        ['title'=>'2. Services',
                         'content'=>'Shree Gurve Technology provides IT services including but not limited to:
                         <ul>
                            <li>Web development, software development, and mobile app development</li>
                            <li>UI/UX design and digital marketing</li>
                            <li>Cloud services, cybersecurity, and IT consulting</li>
                            <li>AI &amp; automation, data analytics, and IT support</li>
                         </ul>
                         All services are subject to separate Service Agreements or Statements of Work (SOW) signed between the parties prior to commencement of any project.'],
                        ['title'=>'3. Intellectual Property',
                         'content'=>'<ul>
                            <li><strong>Client Deliverables:</strong> Upon receipt of full payment, intellectual property rights for all custom work created specifically for a client (code, design, content) are transferred to the client, as outlined in the project agreement.</li>
                            <li><strong>Our Property:</strong> Pre-existing tools, frameworks, libraries, templates, and methodologies developed by Shree Gurve Technology remain our property. We grant clients a perpetual license to use these as part of their deliverables.</li>
                            <li><strong>Website Content:</strong> All content on shreegurvetech.com — including text, graphics, logos, and code — is the property of Shree Gurve Technology and may not be reproduced without written permission.</li>
                         </ul>'],
                        ['title'=>'4. Payment Terms',
                         'content'=>'<ul>
                            <li>Payment terms are defined in individual project agreements. Typically: 40–50% advance, milestone payment, and balance on completion.</li>
                            <li>All prices are in Indian Rupees (INR) unless otherwise agreed. GST is applicable as per Indian law.</li>
                            <li>Late payments may attract interest at 2% per month.</li>
                            <li>Work may be paused or withheld if payments are significantly overdue.</li>
                         </ul>'],
                        ['title'=>'5. Project Delivery & Client Responsibilities',
                         'content'=>'<ul>
                            <li>Project timelines assume timely provision of content, feedback, and approvals from the client.</li>
                            <li>Delays caused by late client feedback, content provision, or approval will not be attributed to Shree Gurve Technology.</li>
                            <li>Clients are responsible for providing accurate project requirements. Changes to scope after project commencement may result in additional cost and time estimates.</li>
                         </ul>'],
                        ['title'=>'6. Confidentiality',
                         'content'=>'Both parties agree to treat all information shared during the course of a project as confidential and not to disclose it to third parties without written consent. We are willing to sign NDAs (Non-Disclosure Agreements) upon request before any project discussion.'],
                        ['title'=>'7. Limitation of Liability',
                         'content'=>'To the maximum extent permitted by law, Shree Gurve Technology shall not be liable for:
                         <ul>
                            <li>Any indirect, incidental, special, or consequential damages</li>
                            <li>Loss of profits, data, or business opportunities</li>
                            <li>Damages arising from third-party services, hosting providers, or infrastructure failures beyond our control</li>
                         </ul>
                         Our total liability shall not exceed the total fees paid for the specific service giving rise to the claim.'],
                        ['title'=>'8. Warranties & Disclaimers',
                         'content'=>'<ul>
                            <li>We warrant that our work will be performed with reasonable care and professional skill.</li>
                            <li>We provide a warranty period (typically 1–3 months) for bug fixes on delivered projects, as specified in the project agreement.</li>
                            <li>We do not warrant that websites or software will be error-free or uninterrupted at all times, particularly due to third-party hosting or infrastructure factors.</li>
                         </ul>'],
                        ['title'=>'9. Termination',
                         'content'=>'Either party may terminate a project engagement with 14 days written notice. In such cases:
                         <ul>
                            <li>The client is liable for payment for all work completed up to the termination date.</li>
                            <li>Deliverables completed and paid for will be handed over to the client.</li>
                            <li>Advance payments are non-refundable unless otherwise agreed in writing.</li>
                         </ul>'],
                        ['title'=>'10. Governing Law',
                         'content'=>'These Terms &amp; Conditions are governed by the laws of India. Any disputes arising out of or related to these terms or our services shall be subject to the exclusive jurisdiction of the courts of Surat, Gujarat, India.'],
                        ['title'=>'11. Changes to These Terms',
                         'content'=>'We reserve the right to update these Terms &amp; Conditions at any time. The updated version will be posted on this page with a revised date. Continued use of our website or services after changes constitutes acceptance of the new terms.'],
                        ['title'=>'12. Contact',
                         'content'=>'For any questions about these Terms &amp; Conditions, please contact us:
                         <ul>
                            <li><strong>Email:</strong> <a href="mailto:contact@shreegurvetech.com">contact@shreegurvetech.com</a></li>
                            <li><strong>Phone:</strong> <a href="tel:+918200017181">+91 82000 17181</a></li>
                            <li><strong>Address:</strong> Shree Gurve Technology, Surat – 395004, Gujarat, India</li>
                         </ul>'],
                    ];
                    foreach ($sections as $sec): ?>
                        <div style="margin-bottom:32px;">
                            <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid var(--gray-light);">
                                <?= htmlspecialchars($sec['title']) ?>
                            </h2>
                            <div style="font-size:0.9rem;color:var(--gray-dark);"><?= $sec['content'] ?></div>
                        </div>
                    <?php endforeach; ?>

                    <div style="background:var(--gray-light);border-radius:var(--radius-md);padding:20px;margin-top:16px;text-align:center;">
                        <p style="font-size:0.875rem;color:var(--gray-mid);margin:0;">
                            Last updated: <strong><?= $lastUpdated ?></strong>. Questions? <a href="/contact-us">Contact us</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
