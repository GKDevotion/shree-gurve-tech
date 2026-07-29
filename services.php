<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'services',
    'title' => "Custom Software Development | Shree Gurve Technology",
    'meta_description' => "Shree Gurve Technology provides professional web development services including custom websites, web applications, and scalable digital solutions.",
    'h1_tag' => "Professional Web Development Services",
    'description' => "Shree Gurve Technology offers professional web development services designed to help businesses establish a strong online presence. Our experienced team develops high-quality, responsive, and scalable websites using modern technologies and best development practices.",
    'keyword' => "web development services, custom website development, web application development, professional web development company, IT services company, website development company in India, Shree Gurve Technology services",
];

include_once('elements/header.php');
?>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [

            {
                "@type": "Organization",
                "@id": "https://shreegurvetech.com/#organization",
                "name": "Shree Gurve Tech",
                "url": "https://shreegurvetech.com",
                "logo": "https://shreegurvetech.com/assets/images/logo.png",
                "telephone": "+91-8200017181",
                "email": "contact@shreegurvetech.com",
                "description": "Shree Gurve Tech is a software development company providing custom web development, mobile app development, AI automation, cybersecurity, cloud computing, digital marketing, blockchain development, and IT consulting services worldwide."
            },

            {
                "@type": "WebSite",
                "@id": "https://shreegurvetech.com/#website",
                "url": "https://shreegurvetech.com",
                "name": "Shree Gurve Tech",
                "publisher": {
                    "@id": "https://shreegurvetech.com/#organization"
                }
            },

            {
                "@type": "WebPage",
                "@id": "https://shreegurvetech.com/services/#webpage",
                "url": "https://shreegurvetech.com/services",
                "name": "IT Services | Shree Gurve Tech",
                "description": "Explore professional IT services including web development, software development, mobile app development, digital marketing, cloud computing, AI automation, cybersecurity, blockchain development and IT consulting.",
                "isPartOf": {
                    "@id": "https://shreegurvetech.com/#website"
                },
                "about": {
                    "@id": "https://shreegurvetech.com/#organization"
                },
                "breadcrumb": {
                    "@id": "https://shreegurvetech.com/services/#breadcrumb"
                },
                "primaryImageOfPage": {
                    "@type": "ImageObject",
                    "url": "https://shreegurvetech.com/assets/images/services-banner.jpg"
                }
            },

            {
                "@type": "BreadcrumbList",
                "@id": "https://shreegurvetech.com/services/#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://shreegurvetech.com"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Services",
                        "item": "https://shreegurvetech.com/services"
                    }
                ]
            },

            {
                "@type": "OfferCatalog",
                "@id": "https://shreegurvetech.com/services/#catalog",
                "name": "IT Services",
                "itemListElement": [

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/web-development",
                            "name": "Web Development Services",
                            "serviceType": "Website Development",
                            "provider": {
                            "@id": "https://shreegurvetech.com/#organization"
                            }
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/software-development",
                            "name": "Software Development Services",
                            "provider": {
                            "@id": "https://shreegurvetech.com/#organization"
                            }
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/mobile-app-development",
                            "name": "Mobile App Development"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/ui-ux-design",
                            "name": "UI UX Design Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/digital-marketing",
                            "name": "Digital Marketing Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/cloud-services",
                            "name": "Cloud Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/it-consulting",
                            "name": "IT Consulting Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/cyber-security",
                            "name": "Cybersecurity Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/data-analytics",
                            "name": "Data & Analytics Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/ai-automation",
                            "name": "AI & Automation Services"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/it-support",
                            "name": "IT Support & Maintenance"
                        }
                    },

                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "@id": "https://shreegurvetech.com/services/blockchain-development",
                            "name": "Blockchain Development"
                        }
                    }

                ]
            },

            {
                "@type": "FAQPage",
                "@id": "https://shreegurvetech.com/services/#faq",
                "mainEntity": [

                    {
                        "@type": "Question",
                        "name": "What IT services does Shree Gurve Tech provide?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Shree Gurve Tech provides web development, software development, mobile app development, UI UX design, cloud computing, AI automation, blockchain development, cybersecurity, IT consulting, digital marketing, and IT support services."
                        }
                    },

                    {
                        "@type": "Question",
                        "name": "Do you build custom software solutions?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. We design and develop custom software tailored to startups, SMEs, and enterprise businesses."
                        }
                    },

                    {
                        "@type": "Question",
                        "name": "Do you work with international clients?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes. We deliver IT services for businesses worldwide."
                        }
                    }

                ]
            },

            {
                "@type": "AggregateRating",
                "@id": "https://shreegurvetech.com/services/#rating",
                "itemReviewed": {
                    "@id": "https://shreegurvetech.com/#organization"
                },
                "ratingValue": "5",
                "bestRating": "5",
                "reviewCount": "2"
            }

        ]
    }
</script>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Services</h1>
            <ul class="breadcumb-menu">
                <li><a href="index">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</div>

<section class="space" id="service-sec">
    <div class="container">
        <div class="row gy-4" id="servicesContainer"></div>
    </div>
</section>

<section class="position-relative space">
    <div class="th-bg-img" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/cta_bg_2.jpg';?>" style="background-color: #000;">
        <img src="<?php echo $seoArr['base_url'].'assets/img/bg/blog_bg_1.png';?>" alt="overlay">
    </div>
    <div class="container z-index-common">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                <div class="title-area mb-35">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <div class="mask-icon" data-mask-src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_2.svg';?>"></div>
                            <img src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_2.svg';?>" alt="shape">
                        </div>
                        CONTACT US
                    </span>
                    <h2 class="sec-title text-white">
                        Need Any Kind Of IT Solution For
                        <span class="text-theme fw-normal">Your Business?</span>
                    </h2>
                </div>
                <a href="#contact-sec" class="th-btn style3">Get In Touch</a>
            </div>
        </div>
    </div>
</section>

<script>
    fetch("assets/data/services.json")
        .then(res => res.json())
        .then(data => {

            let html = "";
            let index = 1;

            Object.keys(data).forEach(key => {

                let service = data[key];
                let number = index.toString().padStart(2, '0');

                html += `
                    <div class="col-md-6 col-xl-4">
                        <div class="service-card">

                            <div class="service-card_number">${number}</div>

                            <div class="shape-icon">
                                <img src="${base_url}assets/img/icon/${service.icon}" alt="Icon">
                                <span class="dots"></span>
                            </div>

                            <h3 class="box-title">
                                <a href="${base_url}service-details/${key}">
                                ${service.title}
                                </a>
                            </h3>

                            <p class="service-card_text">
                                ${service.description}
                            </p>

                            <a href="${base_url}service-details/${key}" class="th-btn">
                                ${service.title} <i class="fa-regular fa-arrow-right ms-2"></i>
                            </a>

                            <div class="bg-shape">
                                <img src="${base_url}assets/img/bg/service_card_bg.png" alt="bg">
                            </div>

                        </div>
                    </div>
                `;

                index++;

            });

            document.getElementById("servicesContainer").innerHTML = html;

        });
</script>

<?php
include_once('elements/how-work-step.php');
include_once('elements/happy-client.php');
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>