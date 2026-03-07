<?php
include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">

            <h1 class="breadcumb-title" id="serviceTitle"></h1>

            <ul class="breadcumb-menu">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="services.php">
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
include_once('elements/contact-us.php');
include_once('elements/footer.php');
?>


<script>
    const params = new URLSearchParams(window.location.search);
    const service = params.get("service");

fetch("assets/data/services.json")
    .then(res => res.json())
    .then(data => {

    const serviceData = data[service];

    if (!serviceData) {
        console.log("Service not found");
        return;
    }

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
        <img src="assets/img/icon/${item.icon}" alt="Icon">
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
        <img src="assets/img/bg/service_card_bg.png" alt="bg">
    </div>

        </div>
    </div>
    `;

    });

    document.getElementById("serviceList").innerHTML = html;

    })
    .catch(error => console.log(error));
</script>