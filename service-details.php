<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'contact-us',
    'title' => "Contact Shree Gurve Technology | Web & Software Development Company",
    'meta_description' => "Get in touch with Shree Gurve Technology for web development, mobile apps, software solutions, and IT consulting. Contact our experts for your project today.",
    'h1_tag' => "Contact Our Technology Experts",
    'description' => "Shree Gurve Technology is a professional IT services company providing innovative digital solutions for businesses worldwide. If you are looking for reliable web development, software development, mobile application development, UI/UX design, or digital transformation services, our experienced team is ready to help.",
    'keyword' => "IT company in India, web development company, custom software development services, mobile app development company, technology consulting services, IT solutions company, digital transformation services",
];

include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">

            <h1 class="breadcumb-title" id="serviceTitle"></h1>

            <ul class="breadcumb-menu">
                <li>
                    <a href="index">
                        Home
                    </a>
                </li>
                <li>
                    <a href="services">
                        Services
                    </a>
                </li>
                <li id="serviceTitle2"></li>
            </ul>

        </div>
    </div>
</div>

<section class="premium-services">

    <div class="container">

        <div class="text-center mt-5">
            <h2 class="section-heading" id="serviceTitle3"></h2>
            <p class="section-sub" id="serviceDescription"></p>
        </div>

        <div class="row gy-4 mb-5" id="serviceList"></div>

    </div>

</section>

<?php
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>


<script>
    const params = window.location.pathname;
    let service = params.split("/");

    const count = service.length;

    if(count > 3){
        service = service[4];
    }else{
        service = service[2];
    }

    fetch("assets/data/services.json")
    .then(res => res.json())
    .then(data => {

        const serviceData = data[service];

        if (!serviceData) {
            console.log("Service not found");
            return;
        }

        // Title
        $("#pageTitle").text( serviceData.meta_title );

        // Canonical
        $("#canonicalLink").attr("href", "<?php echo getBaseUrl();?>"+serviceData.canonical);

        // Description
        $("#metaDescription").attr("content", serviceData.meta_description);

        // Keywords
        $("#metaKeywords").attr("content", serviceData.keyword);
        
        // breadcrumb
        document.getElementById("serviceTitle").innerText = serviceData.title;
        document.getElementById("serviceTitle2").innerText = serviceData.title;

        // section
        document.getElementById("serviceTitle3").innerText = serviceData.title;
        document.getElementById("serviceDescription").innerText = serviceData.description;

        let html = "";

        serviceData.services.forEach((item, index) => {

        let number = (index + 1).toString().padStart(1, '0');

        html += `
            <div class="col-md-6 col-xl-4">
                <div class="service-card">

                <div class="service-card_number">${number}</div>

                <div class="shape-icon">
                    <img src="${base_url}assets/img/icon/${item.icon}" alt="Icon">
                    <span class="dots"></span>
                </div>

                <h3 class="box-title">
                    <a href="${item.link}">
                        ${item.title}
                    </a>
                </h3>

                <p class="service-card_text">
                    ${item.text}
                </p>

                <div class="bg-shape">
                    <img src="${base_url}assets/img/bg/service_card_bg.png" alt="bg">
                </div>

            </div>
        </div>
        `;

        });

        document.getElementById("serviceList").innerHTML = html;

    })
    .catch(error => console.log(error));
</script>