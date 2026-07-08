<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'faqs',
    'title' => "FAQs - Shree Gurve Technology | IT Services & Software Development Questions",
    'meta_description' => "Find answers to common questions about Shree Gurve Technology services including web development, software development, mobile apps, and IT solutions.",
    'h1_tag' => "Frequently Asked Questions (FAQs)",
    'description' => "Welcome to the Frequently Asked Questions (FAQ) page of Shree Gurve Technology. Here you can find answers to common questions about our IT services, including web development, software development, mobile application development, UI/UX design, digital marketing, cloud solutions, and technology consulting.",
    'keyword' => "Shree Gurve Technology provides web development, software development, mobile apps, UI/UX design, and digital marketing services.",
];

include_once('elements/header.php');
?>

<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph":[

    {
      "@type":"FAQPage",
      "@id":"https://www.shreegurvetech.com/faq#faq",
      "url":"https://www.shreegurvetech.com/faq",
      "name":"Frequently Asked Questions | Shree Gurve Technology",
      "headline":"Frequently Asked Questions",
      "description":"Find answers to common questions about Shree Gurve Technology's web development, software development, mobile apps, UI/UX, digital marketing, cloud services, AI, cybersecurity, blockchain, and IT consulting.",
      "inLanguage":"en",
      "mainEntity":[

        {
          "@type":"Question",
          "name":"What web development services do you offer?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We build responsive business websites, corporate websites, eCommerce stores, CMS websites, custom web applications, portals, and enterprise web solutions using modern technologies."
          }
        },

        {
          "@type":"Question",
          "name":"Do you develop custom software?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We design and develop custom software solutions tailored to your business processes, including ERP, CRM, inventory systems, HRMS, billing software, and enterprise applications."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide Android and iOS mobile app development?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We develop Android, iOS, and cross-platform mobile applications with intuitive UI, secure architecture, and scalable performance."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide UI/UX design services?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. Our UI/UX experts create wireframes, prototypes, dashboards, web interfaces, mobile app designs, and user-centric digital experiences."
          }
        },

        {
          "@type":"Question",
          "name":"What digital marketing services do you provide?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Our digital marketing services include SEO, Google Ads (PPC), social media marketing, content marketing, email marketing, conversion optimization, and online branding."
          }
        },

        {
          "@type":"Question",
          "name":"Do you offer cloud services?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We provide AWS, Microsoft Azure, and Google Cloud solutions including migration, cloud infrastructure, cloud security, backup, disaster recovery, and managed cloud services."
          }
        },

        {
          "@type":"Question",
          "name":"What IT consulting services do you provide?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We help businesses with digital transformation, IT strategy, technology consulting, startup consulting, automation planning, and scalable technology solutions."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide cybersecurity services?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We offer security audits, firewall setup, penetration testing, network security, endpoint protection, vulnerability assessments, and data security solutions."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide data analytics services?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. Our services include business intelligence dashboards, big data analytics, reporting, data visualization, data warehousing, and decision support solutions."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide AI and automation solutions?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We develop AI-powered applications, chatbots, machine learning solutions, business automation systems, workflow automation, and AI integrations."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide IT support and maintenance?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We provide ongoing technical support, server monitoring, software updates, backup management, infrastructure maintenance, and managed IT services."
          }
        },

        {
          "@type":"Question",
          "name":"Do you offer blockchain development services?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We build blockchain applications, smart contracts, crypto wallets, NFT marketplaces, token solutions, and enterprise blockchain platforms."
          }
        }

      ]
    },

    {
      "@type":"WebPage",
      "@id":"https://www.shreegurvetech.com/faq#webpage",
      "url":"https://www.shreegurvetech.com/faq",
      "name":"Frequently Asked Questions",
      "isPartOf":{
        "@id":"https://www.shreegurvetech.com/#website"
      },
      "breadcrumb":{
        "@id":"https://www.shreegurvetech.com/faq#breadcrumb"
      },
      "about":{
        "@id":"https://www.shreegurvetech.com/#organization"
      }
    },

    {
      "@type":"BreadcrumbList",
      "@id":"https://www.shreegurvetech.com/faq#breadcrumb",
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
          "name":"Frequently Asked Questions",
          "item":"https://www.shreegurvetech.com/faq"
        }
      ]
    },

    {
      "@type":"HowTo",
      "@id":"https://www.shreegurvetech.com/faq#workflow",
      "name":"Our Project Workflow",
      "step":[
        {
          "@type":"HowToStep",
          "position":1,
          "name":"Select Project",
          "text":"Discuss business requirements and project objectives."
        },
        {
          "@type":"HowToStep",
          "position":2,
          "name":"Project Analysis",
          "text":"Analyze technical requirements and prepare implementation strategy."
        },
        {
          "@type":"HowToStep",
          "position":3,
          "name":"Plan & Execute",
          "text":"Develop, test, and deploy the solution."
        },
        {
          "@type":"HowToStep",
          "position":4,
          "name":"Deliver Result",
          "text":"Launch the project and provide ongoing maintenance and support."
        }
      ]
    },

    {
      "@type":"Organization",
      "@id":"https://www.shreegurvetech.com/#organization",
      "name":"Shree Gurve Technology",
      "url":"https://www.shreegurvetech.com/",
      "logo":"https://www.shreegurvetech.com/assets/images/logo.png",
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
      }
    }

  ]
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">
                Frequently Asked Question
            </h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url']; ?>">Home</a></li>
                <li>Frequently Asked Question</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <div class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></div> 
                    <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
                </div>
                FAQ
            </span>
            <h2 class="sec-title">
                Talk To About Any 
                <span class="text-theme">
                    Question?
                </span>
            </h2>
        </div>

        <?php foreach ( getFAQsList() as $sectionKey => $section): ?>

            <div class="accordion mt-3" id="<?= $section['accordion_id'] ?>">

                <div class="accordion-item">

                    <h2 class="accordion-header" id="<?= $section['heading_id'] ?>">

                        <button class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#<?= $section['collapse_id'] ?>"
                            aria-expanded="true">

                            <span class="faq-title">
                                <?= $section['title'] ?>
                            </span>

                        </button>

                    </h2>

                    <div id="<?= $section['collapse_id'] ?>"
                        class="accordion-collapse collapse"
                        data-bs-parent="#<?= $section['accordion_id'] ?>">

                        <div class="accordion-body">

                            <div class="row">

                                <?php
                                $faqChunks = array_chunk(
                                    $section['faqs'],
                                    ceil(count($section['faqs']) / 2)
                                );
                                ?>

                                <?php foreach ($faqChunks as $colIndex => $faqColumn): ?>

                                    <div class="col-xl-6">

                                        <div class="accordion-area accordion"
                                            id="<?= $sectionKey ?>-faqAccordion-<?= $colIndex ?>">

                                            <?php foreach ($faqColumn as $faqIndex => $faq):

                                                $number = ($colIndex * count($faqChunks[0])) + $faqIndex + 1;

                                                $headingId = $sectionKey . '-heading-' . $number;
                                                $collapseId = $sectionKey . '-collapse-' . $number;

                                            ?>

                                                <div class="accordion-card style2">

                                                    <div class="accordion-header"
                                                        id="<?= $headingId ?>">

                                                        <button class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#<?= $collapseId ?>"
                                                            aria-expanded="false"
                                                            aria-controls="<?= $collapseId ?>">

                                                            <?= $number ?>.
                                                            <?= $faq['question'] ?>

                                                        </button>

                                                    </div>

                                                    <div id="<?= $collapseId ?>"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#<?= $sectionKey ?>-faqAccordion-<?= $colIndex ?>">

                                                        <div class="accordion-body">

                                                            <?php if (is_array($faq['answer'])): ?>

                                                                <p class="faq-text">
                                                                    <?= $faq['answer'][0] ?>
                                                                </p>

                                                                <ul class="faq-text">

                                                                    <?php foreach ($faq['answer'][1] as $list): ?>

                                                                        <li><?= $list ?></li>

                                                                    <?php endforeach; ?>

                                                                </ul>

                                                            <?php else: ?>

                                                                <p class="faq-text">
                                                                    <?= $faq['answer'] ?>
                                                                </p>

                                                            <?php endif; ?>

                                                        </div>

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>
</div>

<?php
include_once('elements/how-work-step.php');
include_once('elements/happy-client.php');
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>