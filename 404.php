<?php
include_once('helper/function.php');

// Tell browsers and search engines this really is a 404, not a normal page
http_response_code(404);

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => '404',
    'title' => "Page Not Found (404) - Shree Gurve Technology",
    'description' => "The page you're looking for doesn't exist or may have been moved. Explore our services, projects, or get in touch with Shree Gurve Technology.",
    'h1_tag' => "Page Not Found",
    'keyword' => "404, page not found, Shree Gurve Technology",
];

include_once('elements/header.php');
?>

<meta name="robots" content="noindex, follow">

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">404</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url'];?>">Home</a></li>
                <li>Page Not Found</li>
            </ul>
        </div>
    </div>
</div>

<div class="space text-center">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">ERROR 404</span>
            <h2 class="sec-title">
                Oops! This Page <span class="text-theme fw-normal">Went Missing</span>
            </h2>
            <p class="mt-3" style="max-width:600px;margin-left:auto;margin-right:auto;">
                The page you're looking for doesn't exist, may have been moved, or the link you followed is broken. Don't worry — the rest of the site is working fine. Here are some helpful places to go instead:
            </p>
        </div>

        <div class="row justify-content-center gy-3 mt-4">
            <div class="col-auto">
                <a href="<?php echo $seoArr['base_url'];?>" class="th-btn">Back to Home</a>
            </div>
            <div class="col-auto">
                <a href="<?php echo $seoArr['base_url'].'services';?>" class="th-btn style3">Our Services</a>
            </div>
            <div class="col-auto">
                <a href="<?php echo $seoArr['base_url'].'projects';?>" class="th-btn style3">Our Projects</a>
            </div>
            <div class="col-auto">
                <a href="<?php echo $seoArr['base_url'].'contact-us';?>" class="th-btn style3">Contact Us</a>
            </div>
        </div>

    </div>
</div>

<?php
include_once('elements/footer.php');
?>
