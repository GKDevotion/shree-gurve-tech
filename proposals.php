<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'proposals',
    'title' => "Custom Software Development Solutions in India | IT Company & Software Development Services",
    'meta_description' => "Learn about Shree Gurve Technology, a trusted IT company offering web development, software solutions, mobile apps, UI/UX design, and digital services since 2019.",
    'h1_tag' => "Software Development Services | E-commerce, CRM, HRM, ERP Solutions",
    'description' => "Shree Gurve Technology is a professional IT solutions company providing innovative digital services to businesses worldwide. Since our journey began in 2019, we have been delivering reliable technology solutions including web development, software development, mobile application development, UI/UX design, and digital marketing services.",
    'keyword' => "Shree Gurve Technology, IT company in India, software development company, web development company, mobile app development services, custom software development, IT solutions company, technology consulting services, digital transformation services, IT service provider in Surat",
];

include_once('elements/header.php');
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Shree Gurve Technology",
  "url": "<?php echo $seoArr['base_url'];?>",
  "service": [
    {"@type": "Service", "name": "E-Commerce Development"},
    {"@type": "Service", "name": "CRM Software Development"},
    {"@type": "Service", "name": "HRM Software Development"},
    {"@type": "Service", "name": "ERP Software Development"},
    {"@type": "Service", "name": "SaaS Development"}
  ]
}
</script>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Proposals</h1>
            <ul class="breadcumb-menu">
                <li><a href="index">Home</a></li>
                <li>Proposals</li>
            </ul>
        </div>
    </div>
</div>

<section class="space" id="service-sec">
    <div class="container">
        <div class="row gy-4" id="servicesContainer">
            <div class="col-md-6 col-xl-4">
                <div class="service-card">

                    <div class="service-card_number">ECommerce</div>

                    <div class="shape-icon">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/proposal/jewellery-e-commerce-icon.png" alt="Icon">
                        <span class="dots"></span>
                    </div>

                    <h3 class="box-title">
                        <a href="<?php echo $seoArr['base_url'];?>proposal/jewellery-e-commerce" target="_blank">
                            Jewellery
                        </a>
                    </h3>

                    <p class="service-card_text">
                        Jewelry E-Commerce Website Development using Laravel & Bootstrap. Includes admin panel, payment integration, scalable and SEO optimization online store features.
                    </p>

                    <a href="<?php echo $seoArr['base_url'];?>proposal/jewellery-e-commerce" class="th-btn" target="_blank">
                        Read More<i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>

                    <div class="bg-shape">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/bg/service_card_bg.png" alt="bg">
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">

                    <div class="service-card_number">CRM</div>

                    <div class="shape-icon">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/proposal/smart-crm.png" alt="Icon">
                        <span class="dots"></span>
                    </div>

                    <h3 class="box-title">
                        <a href="<?php echo $seoArr['base_url'];?>proposal/smart-crm" target="_blank">
                        Smart CRM
                        </a>
                    </h3>

                    <p class="service-card_text">
                        All-in-one CRM system for managing customers, sales pipelines and team productivity. Boost conversions with automation.
                    </p>

                    <a href="<?php echo $seoArr['base_url'];?>proposal/smart-crm" class="th-btn" target="_blank">
                        Read More<i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>

                    <div class="bg-shape">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/bg/service_card_bg.png" alt="bg">
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">

                    <div class="service-card_number">ERP</div>

                    <div class="shape-icon">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/proposal/erp-solutions.png" alt="ERP Solutions">
                        <span class="dots"></span>
                    </div>

                    <h3 class="box-title">
                        <a href="<?php echo $seoArr['base_url'];?>proposal/erp-solutions" target="_blank">
                        ERP Solutions
                        </a>
                    </h3>

                    <p class="service-card_text">
                        Powerful ERP solutions to manage accounting, inventory, HR, and operations in one system. Boost efficiency with our scalable ERP software.
                    </p>

                    <a href="<?php echo $seoArr['base_url'];?>proposal/erp-solutions" class="th-btn" target="_blank">
                        Read More<i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>

                    <div class="bg-shape">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/bg/service_card_bg.png" alt="Proposal ERP Solutions">
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="service-card">

                    <div class="service-card_number">HRMS</div>

                    <div class="shape-icon">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/proposal/hrm-solutions.png" alt="HRM Solutions">
                        <span class="dots"></span>
                    </div>

                    <h3 class="box-title">
                        <a href="<?php echo $seoArr['base_url'];?>proposal/hrm-solutions" target="_blank">
                        HRM Solutions
                        </a>
                    </h3>

                    <p class="service-card_text">
                        PeopleCore HRMS is a cloud-based Human Resource Management System offering payroll, attendance, recruitment, performance & compliance tools for SMEs and enterprises in India.
                    </p>

                    <a href="<?php echo $seoArr['base_url'];?>proposal/erp-solutions" class="th-btn" target="_blank">
                        Read More<i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>

                    <div class="bg-shape">
                        <img src="<?php echo $seoArr['base_url'];?>assets/img/bg/service_card_bg.png" alt="Proposal ERP Solutions">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


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