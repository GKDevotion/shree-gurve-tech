<?php
include_once('helper/function.php');

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'tools',
    'title' => "Free Online Tools - PDF, Image & Business Utilities | Shree Gurve Technology",
    'description' => "Explore free online tools by Shree Gurve Technology - merge, split and edit PDFs, compress images, remove watermarks, create flipbooks, and more.",
    'h1_tag' => "Our Free Online Tools",
    'keyword' => "free online tools, pdf tools, image tools, merge pdf, split pdf, compress image, remove watermark, Shree Gurve Technology tools",
];

include_once('elements/header.php');

$toolGroups = [
    'PDF Tools' => [
        [ 'name' => 'Merge PDF', 'url' => 'https://merge-pdf.shreegurvetech.com', 'icon' => 'fa-object-union', 'desc' => 'Combine multiple PDF files into a single document in seconds.' ],
        [ 'name' => 'Split PDF Pages', 'url' => 'https://split-page.shreegurvetech.com', 'icon' => 'fa-scissors', 'desc' => 'Extract or divide PDF pages into separate, standalone files.' ],
        [ 'name' => 'Remove PDF Pages', 'url' => 'https://remove-page.shreegurvetech.com', 'icon' => 'fa-file-circle-minus', 'desc' => 'Delete unwanted pages from any PDF instantly.' ],
        [ 'name' => 'PDF Editor', 'url' => 'https://pdf-editor.shreegurvetech.com', 'icon' => 'fa-file-pen', 'desc' => 'Edit text, images, and pages directly inside your PDF.' ],
        [ 'name' => 'Stamp & Sign PDF', 'url' => 'https://stamp-sign-pdf.shreegurvetech.com', 'icon' => 'fa-signature', 'desc' => 'Add signatures, stamps, and initials to PDF documents.' ],
        [ 'name' => 'PDF Image Studio', 'url' => 'https://pdf-image-studio.shreegurvetech.com', 'icon' => 'fa-images', 'desc' => 'Convert, extract, and manage images inside PDF files.' ],
    ],
    'Image & Media Tools' => [
        [ 'name' => 'Image Compressor', 'url' => 'https://img-compress.shreegurvetech.com', 'icon' => 'fa-file-zipper', 'desc' => 'Reduce image file size without losing visible quality.' ],
        [ 'name' => 'Remove Image Watermark', 'url' => 'https://rmiwm.shreegurvetech.com', 'icon' => 'fa-image', 'desc' => 'Clean unwanted watermarks off your images.' ],
        [ 'name' => 'Remove Video Watermark', 'url' => 'https://rmvwm.shreegurvetech.com', 'icon' => 'fa-video', 'desc' => 'Clean unwanted watermarks off your videos.' ],
        [ 'name' => 'Flipbook Maker', 'url' => 'https://flipbook.shreegurvetech.com', 'icon' => 'fa-book-open', 'desc' => 'Turn PDFs into interactive, page-flipping digital flipbooks.' ],
    ],
    'Business Tools' => [
        [ 'name' => 'Social Genius', 'url' => 'https://social-genius.shreegurvetech.com', 'icon' => 'fa-share-nodes', 'desc' => 'Plan, schedule, and manage your social media content.' ],
        [ 'name' => 'LeadScout', 'url' => 'https://leadscout.shreegurvetech.com', 'icon' => 'fa-magnifying-glass-dollar', 'desc' => 'Find and capture new business leads automatically.' ],
        [ 'name' => 'Secure Gateway', 'url' => 'https://secure-gateway.shreegurvetech.com', 'icon' => 'fa-shield-halved', 'desc' => 'Secure gateway for protected data and file transfers.' ],
    ],
];
?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Free Online Tools</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo $seoArr['base_url'];?>">Home</a></li>
                <li>Tools</li>
            </ul>
        </div>
    </div>
</div>

<section class="space">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">HANDY UTILITIES</span>
            <h2 class="sec-title">
                Free Tools Built <span class="text-theme fw-normal">By Shree Gurve Technology</span>
            </h2>
            <p class="mt-3" style="max-width:700px;margin-left:auto;margin-right:auto;">
                Quick, free utilities we've built and maintain ourselves. Each opens in its own tab on its own subdomain.
            </p>
        </div>

        <?php foreach ( $toolGroups as $groupName => $tools ) : ?>
        <div class="mt-5">
            <h3 class="box-title mb-4"><?php echo htmlspecialchars( $groupName );?></h3>
            <div class="row gy-4">
                <?php foreach ( $tools as $tool ) : ?>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape-icon">
                            <i class="fas <?php echo htmlspecialchars( $tool['icon'] );?> fa-2x"></i>
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title">
                            <a href="<?php echo htmlspecialchars( $tool['url'] );?>" target="_blank" rel="noopener" title="<?php echo htmlspecialchars( $tool['name'] );?>">
                                <?php echo htmlspecialchars( $tool['name'] );?>
                            </a>
                        </h3>
                        <p class="service-card_text"><?php echo htmlspecialchars( $tool['desc'] );?></p>
                        <div class="bg-shape">
                            <img src="<?php echo $seoArr['base_url'].'assets/img/bg/service_card_bg.png';?>" alt="bg">
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>

<?php
// ItemList schema so search/AI engines understand this is a directory of tools
$toolsSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => 'Free Online Tools by Shree Gurve Technology',
    'itemListElement' => [],
];
$position = 1;
foreach ( $toolGroups as $tools ) {
    foreach ( $tools as $tool ) {
        $toolsSchema['itemListElement'][] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'item' => [
                '@type' => 'WebApplication',
                'name' => $tool['name'],
                'url' => $tool['url'],
                'applicationCategory' => 'Utility',
                'description' => $tool['desc'],
            ],
        ];
    }
}
?>
<script type="application/ld+json">
<?php echo json_encode( $toolsSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );?>
</script>

<?php
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>
