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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Frequently Asked Question</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url']; ?>">Home</a></li>
                <li>Frequently Asked Question</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">

        <div class="title-area text-center"><span class="sub-title">
                <div class="icon-masking me-2"><div class="mask-icon"
                        data-mask-src="assets/img/theme-img/title_shape_2.svg"></div> <img
                        src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>FAQ
            </span>
            <h2 class="sec-title">Talk To About Any <span class="text-theme">Question?</span></h2>
        </div>

        <!-- Web Development Accordion -->
        <div class="accordion" id="webAccordion"> 
            <div class="accordion-item">
                <h2 class="accordion-header" id="webheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWeb" aria-expanded="true">
                        <span class="faq-title">Web Development Services</span>
                    </button>
                </h2>

                <div id="collapseWeb" class="accordion-collapse collapse" role="region" aria-labelledby="webheadingService" data-bs-parent="#webAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="faqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Web Development Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Web Development Services include designing, developing, and maintaining websites or web applications. These services cover front-end development, back-end development, database integration, and website optimization to create fast, secure, and user-friendly websites.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What types of websites can you develop?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We develop different types of websites including:
                                                    <ul>
                                                        <li>Business Websites</li>
                                                        <li>E-commerce Websites</li>
                                                        <li>Corporate Websites </li>
                                                        <li>Portfolio Websites</li>
                                                        <li>Custom Web Applications</li>
                                                        <li>CMS-based Websites (WordPress, Drupal, Joomla)</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. How long does it take to develop a website?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    The development time depends on the project complexity.
                                                    <ul>
                                                        <li>Basic website: 5-10 days</li>
                                                        <li>Business website: 2-4 weeks</li>
                                                        <li>E-commerce website: 3-6 weeks</li>
                                                        <li>Custom web application: 1-3 months</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. Which technologies do you use for web development?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We use modern technologies such as:
                                                    <ul>
                                                        <li><b>Frontend:</b>HTML5, CSS3, JavaScript, Bootstrap, React</li>
                                                        <li><b>Backend:</b>PHP, Laravel, Node.js</li>
                                                        <li><b>Database:</b>MySQL, PostgreSQL, MongoDB</li>
                                                        <li><b>CMS:</b>WordPress, Shopify</li>
                                                    </ul>
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. Will my website be mobile-friendly?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. All websites we develop are fully responsive, meaning they work perfectly on mobiles, tablets, laptops, and desktops.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="faqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. Do you provide SEO-friendly website development?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We build websites following <b>SEO best practices</b>, including fast loading speed, optimized code, proper meta tags, structured content, and mobile-friendly design.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Can you redesign my existing website?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes, we offer website redesign services to improve design, performance, security, and user experience.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Do you provide website maintenance and support?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide ongoing website maintenance services including updates, security monitoring, backups, and performance optimization.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. What is the cost of web development services?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Website development cost depends on features, design complexity, and functionality. Basic websites start from affordable pricing, while custom applications require a higher budget.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you develop custom web applications?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-10" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We specialize in custom web application development tailored to business requirements such as CRM systems, ERP systems, booking systems, and management portals.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> 
        </div>

        <!-- Software Development Services Accordion -->
        <div class="accordion mt-3" id="softwareAccordion"> 
            <!-- Web Development Accordion -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="swheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSoftware" aria-expanded="true">
                        <span class="faq-title">Software Development Services</span>
                    </button>
                </h2>

                <div id="collapseSoftware" class="accordion-collapse collapse" role="region" aria-labelledby="swheadingService" data-bs-parent="#softwareAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="sfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="scollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Software Development Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Software Development Services involve designing, building, testing, and maintaining software applications that help businesses automate processes, improve efficiency, and deliver better user experiences. These services include custom software development, application development, system integration, and ongoing support.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What types of software can you develop?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We develop various types of software solutions, including:
                                                    <ul>
                                                        <li>Custom Business Software</li>
                                                        <li>Web Applications</li>
                                                        <li>Mobile Applications (Android & iOS)</li>
                                                        <li>Enterprise Software (ERP, CRM)</li>
                                                        <li>SaaS Platforms</li>
                                                        <li>API Integrations and Automation Tools</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. What technologies do you use for software development?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We use modern and reliable technologies such as:
                                                    <ul>
                                                        <li><b>Frontend:</b> HTML, CSS, JavaScript, React, Angular</li>
                                                        <li><b>Backend:</b> Node.js, PHP, Laravel, Python, .NET</li>
                                                        <li><b>Mobile:</b> Flutter, React Native, Kotlin, Swift</li>
                                                        <li><b>Database:</b> MySQL, PostgreSQL, MongoDB</li>
                                                        <li><b>Cloud:</b> AWS, Google Cloud, Azure</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. How long does it take to develop custom software?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    The timeline depends on the complexity and features of the project:
                                                    <ul>
                                                        <li>Small application: <b>2–4 weeks</b></li>
                                                        <li>Medium business software: <b>1–3 months</b></li>
                                                        <li>Enterprise-level solution: <b>3–6 months or more</b></li> 
                                                    </ul>
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. Do you provide custom software development services?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We build <b>custom software solutions tailored to your business needs</b>, ensuring the system aligns with your workflow, goals, and scalability requirements.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="sfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="scollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. What is the cost of software development?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Software development costs vary depending on features, integrations, platform requirements, and development time. A basic project may start from an affordable range, while complex enterprise systems require a larger investment.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Do you provide software maintenance and support?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide <b>ongoing maintenance and technical support</b>, including bug fixes, security updates, feature enhancements, and performance optimization.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Can you upgrade or modernize existing software?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We offer <b>software modernization services</b> that improve system performance, update technologies, enhance security, and add new features to outdated systems.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Is the software secure and scalable?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We follow industry best practices for security, scalability, and performance, ensuring the software can grow with your business and protect sensitive data.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="collapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you provide post-development support?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="collapse-item-10" data-bs-parent="#faqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. After development, we provide deployment, training, documentation, and long-term support to ensure smooth operation of your software.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> 
        </div>

        <!-- Mobile App Development Accordion -->
        <div class="accordion mt-3" id="mobileAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="mblheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseMobile" aria-expanded="true">
                       <span class="faq-title"> Mobile App Development </span>
                    </button>
                </h2>

                <div id="collapseMobile" class="accordion-collapse collapse" role="region" aria-labelledby="mblheadingService" data-bs-parent="#mobileAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="mfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Mobile App Development Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Mobile App Development Services involve designing, building, testing, and launching applications for smartphones and tablets. These apps can run on platforms like Android and iOS and help businesses improve customer engagement, automate processes, and provide services directly to users.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="mcollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What types of mobile apps do you develop?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="mcollapse-item-2" data-bs-parent="#mfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We develop different types of mobile applications, including:
                                                    <ul>
                                                        <li>Android Applications</li>
                                                        <li>iOS Applications</li>
                                                        <li>Cross-Platform Apps</li>
                                                        <li>E-commerce Apps</li>
                                                        <li>On-Demand Service Apps</li>
                                                        <li>Business and Enterprise Apps</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="mcollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Which technologies do you use for mobile app development?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-3" data-bs-parent="#mfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We use modern technologies to ensure performance and scalability:
                                                    <ul>
                                                        <li>Native Development: Kotlin (Android), Swift (iOS)</li>
                                                        <li>Cross-Platform: Flutter, React Native</li>
                                                        <li>Backend: Node.js, PHP, Laravel</li>
                                                        <li>Database: MySQL, Firebase, MongoDB</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. How long does it take to develop a mobile app?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-4" data-bs-parent="#mfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    The development timeline depends on the complexity and features:
                                                    <ul>
                                                        <li>Basic app: <b>3–6 weeks</b></li>
                                                        <li>Medium complexity app: <b>2–3 months</b></li>
                                                        <li>Advanced app with integrations: <b>3–6 months</b></li> 
                                                    </ul>
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is the cost of developing a mobile app?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-5" data-bs-parent="#mfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">The cost varies based on app features, design complexity, integrations, and platforms. Basic apps cost less, while advanced apps with custom features and APIs require a higher investment.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="mfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. Do you develop apps for both Android and iOS?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-6" data-bs-parent="#mfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We develop apps for <b>both Android and iOS platforms</b> using native technologies or cross-platform frameworks that allow one codebase to run on multiple platforms.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Will my mobile app be secure?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-7" data-bs-parent="#mfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We follow best practices in <b>data security, encryption, authentication, and secure APIs</b>to ensure your application and user data remain protected.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Do you provide UI/UX design for mobile apps?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-8" data-bs-parent="#mfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. Our team creates <b>user-friendly and visually appealing UI/UX designs</b> to ensure a smooth and engaging user experience.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Can you publish the app on app stores?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-9" data-bs-parent="#mfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We help with app deployment and publishing on platforms like Google Play Store and Apple App Store, including compliance and submission guidelines.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="mcollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you provide maintenance and updates after launch?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="mcollapse-item-10" data-bs-parent="#mfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We offer ongoing app maintenance, including bug fixes, feature updates, performance improvements, and compatibility updates for new OS versions.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> 
        </div>

        <!-- UI/UX Design Services Accordion -->
        <div class="accordion mt-3" id="uiuxAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="uixheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseUiUx" aria-expanded="true">
                       <span class="faq-title"> UI/UX Design Services </span>
                    </button>
                </h2>

                <div id="collapseUiUx" class="accordion-collapse collapse" role="region" aria-labelledby="uixheadingService" data-bs-parent="#uiuxAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="ufaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are UI/UX Design Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-1" data-bs-parent="#ufaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">UI/UX Design Services focus on creating visually appealing and user-friendly digital experiences. <b>UI (User Interface)</b> design deals with the layout, colors, typography, and visual elements, while <b>UX (User Experience)</b> design focuses on usability, navigation, and overall user satisfaction.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="ucollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. Why is UI/UX design important for a website or app?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="ucollapse-item-2" data-bs-parent="#ufaqAccordion">

                                        <div class="accordion-body">
                                            <p class="faq-text">Good UI/UX design improves user engagement, increases conversions, and ensures that users can easily navigate your website or application. A well-designed interface helps businesses build trust and deliver a better digital experience. 
                                            </p>
                                        </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="ucollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. What services are included in UI/UX design?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-3" data-bs-parent="#ufaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Our UI/UX design services typically include:
                                                    <ul>
                                                        <li>User Research & Analysis</li>
                                                        <li>Wireframing and Prototyping</li>
                                                        <li>Mobile App UI Design</li>
                                                        <li>Website UI Design</li>
                                                        <li>Interaction Design</li>
                                                        <li>Usability Testing</li>
                                                        <li>Design System Creation</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. Which tools do you use for UI/UX design?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-4" data-bs-parent="#ufaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We use industry-standard design tools such as:
                                                    <ul>
                                                        <li>Figma</li>
                                                        <li>Adobe XD</li>
                                                        <li>Sketch</li>
                                                        <li>Adobe Photoshop</li>
                                                        <li>Adobe Illustrator</li>
                                                    </ul>
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is the difference between UI and UX design?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-5" data-bs-parent="#ufaqAccordion">

                                            <div class="accordion-body">
                                                <ul>
                                                    <li><b>UI (User Interface):</b> Focuses on visual design elements such as buttons, layouts, colors, and typography.</li>
                                                    <li><b>UX (User Experience):</b> Focuses on how users interact with the product and ensuring a smooth and intuitive journey.</li>
                                                </ul> 
                                                <p class="faq-text">Both work together to create an effective digital product.</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="ufaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. Do you provide responsive UI/UX design?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-6" data-bs-parent="#ufaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We create responsive and adaptive designs that work seamlessly across desktops, tablets, and mobile devices.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Can you redesign an existing website or app UI?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-7" data-bs-parent="#ufaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide UI/UX redesign services to improve usability, modernize the interface, and enhance overall user experience for existing websites or applications.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Do you create prototypes before development?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-8" data-bs-parent="#ufaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We build interactive prototypes that allow you to visualize the product’s functionality and user flow before the development phase begins.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. How long does a UI/UX design project take?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-9" data-bs-parent="#ufaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    The timeline depends on project complexity:
                                                    <ul>
                                                        <li><b>Small project:</b>1–2 weeks</li>
                                                        <li><b>Medium project:</b>2–4 weeks</li>
                                                        <li><b>Large application design:</b>4–8 weeks</li> 
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="ucollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you collaborate with development teams?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="ucollapse-item-10" data-bs-parent="#ufaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. Our design team works closely with developers to ensure the final product matches the design specifications and provides the best possible user experience.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- Digital Marketing Services Accordion -->
        <div class="accordion mt-3" id="digitalmarketingAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="dmheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseDigitalMarketing" aria-expanded="true">
                       <span class="faq-title"> Digital Marketing Services </span>
                    </button>
                </h2>

                <div id="collapseDigitalMarketing" class="accordion-collapse collapse" role="region" aria-labelledby="dmheadingService" data-bs-parent="#digitalmarketingAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="dmfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Digital Marketing Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-1" data-bs-parent="#dmfaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Digital Marketing Services include online strategies and techniques used to promote businesses, products, or services through digital channels such as search engines, social media, email, and websites. These services help businesses increase online visibility, generate leads, and grow sales.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="dmcollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What services are included in digital marketing?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="dmcollapse-item-2" data-bs-parent="#dmfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Digital marketing typically includes:
                                                    <ul>
                                                        <li>Search Engine Optimization (SEO)</li>
                                                        <li>Social Media Marketing (SMM)</li>
                                                        <li>Pay-Per-Click Advertising (PPC)</li>
                                                        <li>Content Marketing</li>
                                                        <li>Email Marketing</li>
                                                        <li>Online Reputation Management (ORM)</li>
                                                        <li>Conversion Rate Optimization (CRO)</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="dmcollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Which platforms do you use for digital marketing?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-3" data-bs-parent="#dmfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We use popular marketing platforms such as:
                                                    <ul>
                                                        <li>Google Ads</li>
                                                        <li>Google Analytics</li>
                                                        <li>Facebook</li>
                                                        <li>Instagram</li>
                                                        <li>LinkedIn</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. How long does it take to see results from digital marketing?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-4" data-bs-parent="#dmfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    The timeline depends on the strategy used:
                                                    <ul>
                                                        <li><b>SEO:</b> 3–6 months for noticeable results</li>
                                                        <li><b>PPC Ads:</b> Immediate traffic once campaigns start</li>
                                                        <li><b>Social Media Marketing:</b> 1–3 months for engagement growth</li>
                                                    </ul>
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is SEO in digital marketing?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-5" data-bs-parent="#dmfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">SEO (Search Engine Optimization) is the process of optimizing a website to rank higher in search engine results, especially on Google Search. It involves keyword optimization, technical improvements, content creation, and link building.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="dmfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. What is PPC advertising?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-6" data-bs-parent="#dmfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">PPC (Pay-Per-Click) advertising is a model where businesses pay only when someone clicks on their ad. It allows companies to quickly reach potential customers through search engines and social media platforms.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Do you provide social media marketing services?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-7" data-bs-parent="#dmfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We manage and grow your brand presence on platforms like Facebook, Instagram, and LinkedIn by creating engaging content, running ad campaigns, and interacting with your audience.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Can digital marketing help increase sales?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-8" data-bs-parent="#dmfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. A well-planned digital marketing strategy helps attract targeted audiences, generate quality leads, improve brand awareness, and ultimately increase conversions and sales.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Do you provide performance reports for campaigns?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-9" data-bs-parent="#dmfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide detailed performance reports using tools like Google Analytics, showing traffic, conversions, engagement metrics, and campaign performance.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dmcollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Is digital marketing suitable for small businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="dmcollapse-item-10" data-bs-parent="#dmfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. Digital marketing is highly effective for small businesses because it allows them to reach a targeted audience with a flexible budget and measurable results.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- Cloud Services Accordion -->
        <div class="accordion mt-3" id="cloudAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="cldheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseCloud" aria-expanded="true">
                       <span class="faq-title"> Cloud Services </span>
                    </button>
                </h2>

                <div id="collapseCloud" class="accordion-collapse collapse" role="region" aria-labelledby="cldheadingService" data-bs-parent="#cloudAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="cafaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Cloud Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-1" data-bs-parent="#cafaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Cloud Services refer to computing resources such as servers, storage, databases, networking, and software that are delivered over the internet instead of being hosted locally on a physical computer or server. Businesses can access these resources on demand without managing complex infrastructure.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="cacollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What types of cloud services do you offer?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="cacollapse-item-2" data-bs-parent="#cafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We provide a wide range of cloud solutions, including:
                                                    <ul>
                                                        <li>Cloud Infrastructure Setup</li>
                                                        <li>Cloud Migration Services</li>
                                                        <li>Cloud Storage Solutions</li>
                                                        <li>Cloud Application Development</li>
                                                        <li>Cloud Backup & Disaster Recovery</li>
                                                        <li>Cloud Security and Monitoring</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="cacollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Which cloud platforms do you work with?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-3" data-bs-parent="#cafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We work with leading cloud platforms such as:
                                                    <ul>
                                                        <li>Amazon Web Services</li>
                                                        <li>Microsoft Azure</li>
                                                        <li>Google Cloud Platform</li> 
                                                    </ul>
                                                    These platforms provide scalable and secure infrastructure for modern applications.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. What are the benefits of using cloud services?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-4" data-bs-parent="#cafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Cloud services offer several advantages, including:
                                                    <ul>
                                                        <li>Scalability and flexibility</li>
                                                        <li>Cost efficiency (pay-as-you-go model)</li>
                                                        <li>High availability and reliability</li>
                                                        <li>Improved data security</li>
                                                        <li>Easy remote access from anywhere</li>
                                                    </ul>
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is cloud migration?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-5" data-bs-parent="#cafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Cloud migration is the process of moving applications, data, and IT infrastructure from on-premise servers to a cloud environment. This helps businesses improve performance, scalability, and cost management.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="cafaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. Are cloud services secure?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-6" data-bs-parent="#cafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. Modern cloud platforms use advanced security measures such as data encryption, identity management, firewalls, and continuous monitoring to protect sensitive business data.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Can you migrate my existing website or application to the cloud?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-7" data-bs-parent="#cafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide cloud migration services to move your existing website, database, or application to platforms like <b>Amazon Web Services</b> or <b>Google Cloud Platform</b> with minimal downtime.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. What is the cost of cloud services?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-8" data-bs-parent="#cafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Cloud costs depend on factors such as storage, computing power, bandwidth usage, and service type. Most cloud providers follow a pay-as-you-use pricing model, which helps businesses control costs effectively.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Do you provide cloud backup and disaster recovery?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-9" data-bs-parent="#cafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We implement secure cloud backup and disaster recovery solutions to protect your data and ensure quick recovery in case of system failures or unexpected events.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cacollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you offer ongoing cloud management and support?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="cacollapse-item-10" data-bs-parent="#cafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide <b>cloud monitoring, maintenance, and optimization services</b> to ensure your infrastructure runs smoothly, securely, and efficiently.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- IT Consulting Services Accordion -->
        <div class="accordion mt-3" id="it_consultingAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="itcheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseITconsulting" aria-expanded="true">
                       <span class="faq-title"> IT Consulting Services </span>
                    </button>
                </h2>

                <div id="collapseITconsulting" class="accordion-collapse collapse" role="region" aria-labelledby="itcheadingService" data-bs-parent="#it_consultingAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="icfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are IT Consulting Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-1" data-bs-parent="#icfaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">IT Consulting Services help businesses plan, implement, and manage their technology strategies. IT consultants analyze business needs, recommend the right technology solutions, and help organizations improve efficiency, security, and overall performance.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="iccollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What services are included in IT consulting?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="iccollapse-item-2" data-bs-parent="#icfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    IT consulting typically includes:
                                                    <ul>
                                                        <li>IT Strategy and Planning</li>
                                                        <li>Technology Assessment and Audits</li>
                                                        <li>IT Infrastructure Design</li>
                                                        <li>Cloud Consulting and Migration</li>
                                                        <li>Cybersecurity Consulting</li>
                                                        <li>Software and System Integration</li>
                                                        <li>Digital Transformation Strategy</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="iccollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Why does a business need IT consulting services?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-3" data-bs-parent="#icfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Businesses need IT consulting to make better technology decisions, reduce operational costs, improve security, and ensure their systems support long-term growth and innovation. 
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. Do you provide cloud consulting services?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-4" data-bs-parent="#icfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We help businesses select and implement cloud solutions using platforms like Amazon Web Services, Microsoft Azure, and Google Cloud Platform.
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. Can IT consulting help with digital transformation?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-5" data-bs-parent="#icfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. IT consulting plays a key role in digital transformation by helping businesses adopt modern technologies, automate processes, and improve customer experiences through digital solutions.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="icfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. What industries do you provide IT consulting for?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-6" data-bs-parent="#icfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    IT consulting services can support many industries, including:
                                                    <ul>
                                                        <li>Healthcare</li>
                                                        <li>Finance and Banking</li>
                                                        <li>E-commerce</li>
                                                        <li>Education</li>
                                                        <li>Manufacturing</li>
                                                        <li>Travel and Hospitality</li> 
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. How do IT consultants improve business efficiency?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-7" data-bs-parent="#icfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">IT consultants analyze existing systems and workflows, identify inefficiencies, and recommend optimized technologies or automation tools that improve productivity and reduce operational costs.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Do you help with IT infrastructure setup?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-8" data-bs-parent="#icfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We design and implement secure and scalable IT infrastructure, including servers, networks, cloud environments, and security systems tailored to your business needs.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. How long does an IT consulting project take?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-9" data-bs-parent="#icfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">The duration depends on the scope of the project. Small assessments may take a few days, while large digital transformation or infrastructure projects may take several weeks or months.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="iccollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you provide ongoing IT consulting and support?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="iccollapse-item-10" data-bs-parent="#icfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We offer continuous IT consulting, monitoring, and strategic guidance to ensure your technology systems remain secure, efficient, and aligned with your business goals.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- Cybersecurity Services Accordion -->
        <div class="accordion mt-3" id="cybersecurityAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="csheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseCybersecurity" aria-expanded="true">
                       <span class="faq-title"> Cybersecurity Services  </span>
                    </button>
                </h2>

                <div id="collapseCybersecurity" class="accordion-collapse collapse" role="region" aria-labelledby="csheadingService" data-bs-parent="#cybersecurityAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="csfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Cybersecurity Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-1" data-bs-parent="#csfaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Cybersecurity Services help protect computer systems, networks, and data from cyber threats such as hacking, malware, and unauthorized access. These services include security monitoring, vulnerability assessments, threat detection, and incident response to keep digital assets safe.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="cscollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. Why are cybersecurity services important for businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="cscollapse-item-2" data-bs-parent="#csfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Cybersecurity is essential for protecting sensitive data, maintaining customer trust, and preventing financial losses caused by cyberattacks. Strong security measures help businesses safeguard their systems and ensure uninterrupted operations.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="cscollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. What types of cybersecurity services do you offer?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-3" data-bs-parent="#csfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Our cybersecurity services include:
                                                    <ul>
                                                        <li>Security Risk Assessment</li>
                                                        <li>Network Security</li>
                                                        <li>Application Security</li>
                                                        <li>Vulnerability Scanning and Penetration Testing</li>
                                                        <li>Security Monitoring and Incident Response</li>
                                                        <li>Data Protection and Encryption</li>
                                                        <li>Security Compliance and Audits</li> 
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. What is a cybersecurity risk assessment?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-4" data-bs-parent="#csfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">A cybersecurity risk assessment identifies potential security vulnerabilities in your IT systems and evaluates the likelihood and impact of cyber threats. It helps businesses prioritize security improvements and strengthen their defenses.
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is penetration testing?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-5" data-bs-parent="#csfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Penetration testing (also called ethical hacking) is the process of simulating cyberattacks on a system to identify weaknesses before malicious attackers can exploit them.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="csfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. How can businesses protect their data from cyber threats?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-6" data-bs-parent="#csfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Businesses can improve cybersecurity by:
                                                    <ul>
                                                        <li>Using strong passwords and multi-factor authentication</li>
                                                        <li>Installing firewalls and antivirus software</li>
                                                        <li>Encrypting sensitive data</li>
                                                        <li>Regularly updating software and systems</li>
                                                        <li>Monitoring networks for suspicious activities</li> 
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Do you provide cloud security services?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-7" data-bs-parent="#csfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We help secure cloud environments on platforms like Amazon Web Services, Microsoft Azure, and Google Cloud Platform by implementing strong access controls, monitoring, and encryption.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. What is malware and how can it affect businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-8" data-bs-parent="#csfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Malware is malicious software designed to damage systems, steal data, or disrupt operations. It can cause financial losses, data breaches, and downtime if not properly detected and prevented.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Do you offer ongoing cybersecurity monitoring?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-9" data-bs-parent="#csfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide continuous monitoring and threat detection to identify suspicious activities and respond quickly to potential security incidents.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="cscollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. How often should businesses perform cybersecurity audits?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="cscollapse-item-10" data-bs-parent="#csfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Businesses should perform security audits regularly, typically once or twice a year, or whenever major system changes occur to ensure their security measures remain effective.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- Data & Analytics Services Accordion -->
        <div class="accordion mt-3" id="data_analyticsAccordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="daheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseDataAnalytics" aria-expanded="true">
                       <span class="faq-title"> Data & Analytics Services  </span>
                    </button>
                </h2>

                <div id="collapseDataAnalytics" class="accordion-collapse collapse" role="region" aria-labelledby="daheadingService" data-bs-parent="#data_analyticsAccordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="dafaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are Data & Analytics Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-1" data-bs-parent="#dafaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Data & Analytics Services help businesses collect, process, and analyze large amounts of data to gain valuable insights. These insights support better decision-making, improve business performance, and help identify trends, opportunities, and risks.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="dacollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What services are included in Data & Analytics?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="dacollapse-item-2" data-bs-parent="#dafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    Our Data & Analytics services typically include:
                                                    <ul>
                                                        <li>Data Collection and Integration</li>
                                                        <li>Data Warehousing</li>
                                                        <li>Data Visualization and Dashboards </li>
                                                        <li>Business Intelligence (BI) Solutions</li>
                                                        <li>Predictive Analytics</li>
                                                        <li>Big Data Processing</li>
                                                        <li>Data Governance and Management</li>
                                                    </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="dacollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Why are data analytics services important for businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-3" data-bs-parent="#dafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Data analytics helps businesses make data-driven decisions, understand customer behavior, optimize operations, and improve marketing strategies. It enables organizations to identify trends and opportunities that may otherwise go unnoticed.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. Which tools are commonly used for data analytics?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-4" data-bs-parent="#dafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">
                                                    We use industry-leading tools such as:
                                                    <ul>
                                                        <li>Microsoft Power BI</li>
                                                        <li>Tableau</li>
                                                        <li>Google Analytics</li>
                                                        <li>Apache Hadoop</li>
                                                    </ul> 
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is Business Intelligence (BI)?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-5" data-bs-parent="#dafaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Business Intelligence refers to technologies and processes used to analyze business data and present actionable insights through reports, dashboards, and visualizations using tools like Microsoft Power BI and Tableau.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="dafaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. What is predictive analytics?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-6" data-bs-parent="#dafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Predictive analytics uses historical data, statistical algorithms, and machine learning techniques to predict future outcomes, trends, and customer behavior.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Can you integrate data from multiple sources?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-7" data-bs-parent="#dafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We integrate data from various sources such as databases, CRM systems, websites, and marketing platforms to create a unified and comprehensive data analysis environment.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Do you provide data visualization services?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-8" data-bs-parent="#dafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We create interactive dashboards and visual reports using tools like Tableau and Microsoft Power BI to make complex data easy to understand.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Is data security maintained during analytics processes?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="dacollapse-item-9" data-bs-parent="#dafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We implement strict data security measures, encryption, and access controls to ensure that sensitive business data remains protected throughout the analytics process.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="dacollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. How can Data & Analytics improve business performance?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby=da"collapse-item-10" data-bs-parent="#dafaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">By analyzing business data, companies can optimize operations, improve customer experience, increase marketing effectiveness, and make strategic decisions based on accurate insights.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- AI & Automation Services Accordion -->
        <div class="accordion mt-3" id="ai_automation_Accordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="aiheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseAiAutomation" aria-expanded="true">
                       <span class="faq-title"> AI & Automation Services </span>
                    </button>
                </h2>

                <div id="collapseAiAutomation" class="accordion-collapse collapse" role="region" aria-labelledby="aiheadingService" data-bs-parent="#ai_automation_Accordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="aifaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are AI & Automation Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-1" data-bs-parent="#aifaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">AI & Automation Services use advanced technologies such as Artificial Intelligence and Machine Learning to automate repetitive tasks, analyze data, and improve business processes. These services help organizations increase efficiency, reduce manual work, and make smarter decisions.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="aicollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What types of AI and automation solutions do you offer?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="aicollapse-item-2" data-bs-parent="#aifaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Our AI & Automation services include:</p>
                                                <ul> 
                                                    <li>Intelligent Process Automation</li>
                                                    <li>AI Chatbot Development</li>
                                                    <li>Workflow Automation </li>
                                                    <li>Predictive Analytics</li>
                                                    <li>AI-Based Data Processing</li>
                                                    <li>Robotic Process Automation (RPA)</li>
                                                    <li>AI Integration with Business Systems</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="aicollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. How can AI help businesses improve efficiency?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-3" data-bs-parent="#aifaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">AI can analyze large datasets, automate routine tasks, and provide insights that help businesses make faster and more accurate decisions. Automation also reduces human errors and increases productivity. 
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. What is Robotic Process Automation (RPA)?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-4" data-bs-parent="#aifaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Robotic Process Automation uses software robots (bots) to automate repetitive tasks such as data entry, report generation, and workflow management across business systems.
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. Do you develop AI chatbots for businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-5" data-bs-parent="#aifaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We create intelligent chatbots that can answer customer questions, provide support, and automate customer interactions on websites, apps, and messaging platforms.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="aifaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. Which technologies are used for AI development?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-6" data-bs-parent="#aifaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">We use modern AI technologies and frameworks such as:</p>
                                                <ul> 
                                                <li>TensorFlow</li>
                                                    <li>PyTorch</li>
                                                    <li>OpenAI API</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Can AI integrate with existing business systems?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-7" data-bs-parent="#aifaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. AI solutions can integrate with existing systems such as CRM, ERP, and data platforms to automate workflows, analyze data, and improve operational efficiency.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. What industries can benefit from AI and automation?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-8" data-bs-parent="#aifaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">AI & Automation services benefit many industries, including:</p>
                                                <ul>
                                                    <li>Healthcare</li>
                                                    <li>Finance and Banking</li>
                                                    <li>E-commerce</li>
                                                    <li>Manufacturing</li>
                                                    <li>Logistics and Supply Chain</li>
                                                    <li>Customer Support</li> 
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Is AI implementation expensive for small businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-9" data-bs-parent="#aifaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">AI solutions can be customized based on business needs and budget. Many scalable and cloud-based AI tools make it possible for small and medium businesses to adopt automation affordably.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="aicollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you provide maintenance and support for AI solutions?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="aicollapse-item-10" data-bs-parent="#aifaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We offer ongoing support, performance monitoring, updates, and optimization to ensure AI systems continue delivering accurate and reliable results.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- IT Support & Maintenance Accordion -->
        <div class="accordion mt-3" id="it_support_Accordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="itsheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseITsupport" aria-expanded="true">
                      <span class="faq-title">  IT Support & Maintenance </span> 
                    </button>
                </h2>

                <div id="collapseITsupport" class="accordion-collapse collapse" role="region" aria-labelledby="itsheadingService" data-bs-parent="#it_support_Accordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="itfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What are IT Support & Maintenance Services?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-1" data-bs-parent="#itfaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">IT Support & Maintenance Services help businesses manage, monitor, and maintain their IT systems, networks, and software. These services ensure that systems run smoothly, reduce downtime, and quickly resolve technical issues.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="itcollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What services are included in IT support and maintenance?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="itcollapse-item-2" data-bs-parent="#itfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Our IT support services typically include:
                                                <ul>
                                                    <li>System Monitoring and Troubleshooting</li>
                                                    <li>Network Support and Management</li>
                                                    <li>Software Updates and Patch Management</li>
                                                    <li>Hardware Maintenance</li>
                                                    <li>Data Backup and Recovery</li>
                                                    <li>Security Monitoring and Threat Prevention</li>
                                                    <li>Helpdesk and Technical Support</li>
                                                </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="itcollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Why are IT support services important for businesses?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-3" data-bs-parent="#itfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">IT support services help businesses maintain stable and secure technology infrastructure, minimize downtime, protect data, and ensure employees can work efficiently without technical interruptions.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. Do you provide remote IT support?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-4" data-bs-parent="#itfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We offer remote technical support using secure tools that allow our experts to diagnose and resolve issues quickly without needing an on-site visit.
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What is proactive IT maintenance?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-5" data-bs-parent="#itfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Proactive IT maintenance involves regularly monitoring systems, updating software, and identifying potential issues before they cause major problems. This approach helps prevent downtime and improves overall system performance.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="itfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. Do you provide cloud system support?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-6" data-bs-parent="#itfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We support cloud environments hosted on platforms like Amazon Web Services, Microsoft Azure, and Google Cloud Platform.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. How quickly can IT issues be resolved?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-7" data-bs-parent="#itfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Resolution time depends on the complexity of the issue. Simple problems can often be resolved within minutes, while more complex technical issues may require additional troubleshooting time.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Do you provide data backup and disaster recovery services?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-8" data-bs-parent="#itfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We implement secure backup solutions and disaster recovery plans to ensure your business data is protected and can be restored quickly in case of hardware failures or cyber incidents.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. Can you maintain both hardware and software systems?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-9" data-bs-parent="#itfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. Our IT support covers both hardware devices (servers, computers, networking equipment) and software systems (applications, operating systems, and databases).</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="itcollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you offer ongoing IT support contracts?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="itcollapse-item-10" data-bs-parent="#itfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide flexible IT support and maintenance plans that include regular monitoring, updates, security checks, and technical assistance to keep your IT infrastructure running efficiently.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div> 
        </div>

        <!-- Blockchain Development Accordion -->
        <div class="accordion mt-3" id="blockchain_Accordion"> 
 
            <div class="accordion-item">
                <h2 class="accordion-header" id="bcheadingService">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseBlockchain" aria-expanded="true">
                       <span class="faq-title"> Blockchain Development </span> 
                    </button>
                </h2>

                <div id="collapseBlockchain" class="accordion-collapse collapse" role="region" aria-labelledby="bcheadingService" data-bs-parent="#blockchain_Accordion">

                    <div class="accordion-body">

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="bcfaqAccordion">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-1">
                                            <button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">1. What is Blockchain Development?
                                            </button>
                                        </div>

                                        <div id="collapse-1" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-1" data-bs-parent="#bcfaqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Blockchain Development involves creating decentralized applications and systems using Blockchain. It enables secure, transparent, and tamper-proof transactions without relying on a central authority.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="bccollapse-item-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">2. What services are included in blockchain development?
                                            </button>
                                        </div>

                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            role="region" aria-labelledby="bccollapse-item-2" data-bs-parent="#bcfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">Our blockchain development services include:
                                                <ul>
                                                    <li>Smart Contract Development</li>
                                                    <li>Decentralized Application (DApp) Development</li>
                                                    <li>Blockchain Consulting</li>
                                                    <li>Portfolio Websites</li>
                                                    <li>Cryptocurrency Wallet Development</li>
                                                    <li>NFT Marketplace Development</li>
                                                    <li>Private and Public Blockchain Solutions</li>
                                                </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">
                                        <div class="accordion-header" id="bccollapse-item-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">3. Which blockchain platforms do you work with?
                                            </button>
                                        </div>

                                        <div id="collapse-3" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-3" data-bs-parent="#bcfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">We work with popular blockchain platforms such as:
                                                <ul>
                                                    <li>Ethereum</li>
                                                    <li>Polygon</li>
                                                    <li>Binance Smart Chain</li>
                                                    <li>Solana</li>
                                                </ul>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">4. What is a smart contract?
                                            </button>
                                        </div>

                                        <div id="collapse-4" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-4" data-bs-parent="#bcfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">A smart contract is a self-executing digital contract where the terms are written directly into code and stored on a blockchain. These contracts automatically execute actions when predefined conditions are met.
                                                </p> 
                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">5. What are decentralized applications (DApps)?
                                            </button>
                                        </div>

                                        <div id="collapse-5" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-5" data-bs-parent="#bcfaqAccordion">

                                            <div class="accordion-body">
                                                <p class="faq-text">DApps are applications that run on a blockchain network instead of centralized servers. They offer higher transparency, security, and control for users.</p> 
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="accordion-area accordion" id="bcfaqAccordion2">

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">6. How secure is blockchain technology?
                                            </button>
                                        </div>

                                        <div id="collapse-6" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-6" data-bs-parent="#bcfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Blockchain is highly secure because data is stored across multiple nodes and protected using Cryptography. This makes it extremely difficult for hackers to alter transaction records.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">7. Which industries benefit from blockchain development?
                                            </button>
                                        </div>

                                        <div id="collapse-7" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-7" data-bs-parent="#bcfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Blockchain technology is widely used in industries such as:</p>
                                                <ul>
                                                    <li>Finance and Banking</li>
                                                    <li>Supply Chain Management</li>
                                                    <li>Healthcare</li>
                                                    <li>Real Estate</li>
                                                    <li>E-commerce</li>
                                                    <li>Digital Identity Management</li> 
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">8. Can blockchain integrate with existing systems?
                                            </button>
                                        </div>

                                        <div id="collapse-8" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-8" data-bs-parent="#bcfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. Blockchain solutions can be integrated with existing applications, databases, and enterprise systems to enhance security, transparency, and automation.</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false"
                                                aria-controls="collapse-9">9. What is the cost of blockchain development?
                                            </button>
                                        </div>

                                        <div id="collapse-9" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-9" data-bs-parent="#bcfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">The cost depends on project complexity, features, blockchain platform, and development time. Simple blockchain solutions cost less, while large decentralized platforms require more investment.</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-card style2">

                                        <div class="accordion-header" id="bccollapse-item-10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">10. Do you provide blockchain consulting and support?
                                            </button>
                                        </div>

                                        <div id="collapse-10" class="accordion-collapse collapse" role="region" aria-labelledby="bccollapse-item-10" data-bs-parent="#bcfaqAccordion2">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes. We provide blockchain consulting, development, deployment, and ongoing maintenance to help businesses adopt blockchain technology effectively.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

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