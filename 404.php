<?php
require_once __DIR__ . '/config.php';
http_response_code(404);
$pageTitle = '404 – Page Not Found | Shree Gurve Technology';
$pageDesc  = 'The page you are looking for could not be found.';
$pageCanonical = 'https://shreegurvetech.com/404';
$currentPage = '';
include __DIR__ . '/includes/header.php';
?>
<section style="min-height:70vh;display:flex;align-items:center;background:var(--gray-light);" aria-label="404 Error Page">
    <div class="container text-center" data-aos="zoom-in">
        <div style="font-size:8rem;font-weight:900;line-height:1;background:linear-gradient(135deg,var(--primary),var(--electric));-webkit-background-clip:text;-webkit-text-fill-color:transparent;margin-bottom:8px;">404</div>
        <h1 style="font-size:1.8rem;font-weight:700;margin-bottom:12px;">Oops! Page Not Found</h1>
        <p style="color:var(--gray-mid);max-width:440px;margin:0 auto 32px;">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/" class="btn btn-primary btn-lg">Go to Homepage</a>
            <a href="/contact-us" class="btn btn-outline-primary btn-lg">Contact Us</a>
        </div>
        <div class="mt-5">
            <p style="font-size:0.85rem;color:var(--gray-mid);">Or jump to:</p>
            <div class="d-flex gap-2 justify-content-center flex-wrap">
                <a href="/services" class="btn btn-sm btn-outline-primary">Services</a>
                <a href="/solutions" class="btn btn-sm btn-outline-primary">Solutions</a>
                <a href="/projects" class="btn btn-sm btn-outline-primary">Projects</a>
                <a href="/about-us" class="btn btn-sm btn-outline-primary">About</a>
                <a href="/faqs" class="btn btn-sm btn-outline-primary">FAQs</a>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
