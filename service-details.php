<?php
include_once('helper/function.php');

$servicesData = json_decode( file_get_contents( __DIR__ . '/assets/data/services.json' ), true );

$slug = $_GET['slug'] ?? '';
if ( $slug === '' ) {
    // fallback for direct access without query string
    $pathParts = explode( '/', trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' ) );
    $slug = end( $pathParts );
}

$service = $servicesData[ $slug ] ?? null;

// Fallback to first service if slug not found, so page never renders blank
if ( $service === null ) {
    $slug = array_key_first( $servicesData );
    $service = $servicesData[ $slug ];
}

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'service-details/' . $slug,
    'title' => $service['meta_title'],
    'description' => $service['meta_description'],
    'h1_tag' => $service['h1_tag'],
    'keyword' => $service['keyword'],
];

include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">

            <h1 class="breadcumb-title"><?php echo htmlspecialchars( $service['h1_tag'] );?></h1>

            <ul class="breadcumb-menu">
                <li>
                    <a href="<?php echo $seoArr['base_url'];?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo $seoArr['base_url'].'services';?>">
                        Services
                    </a>
                </li>
                <li><?php echo htmlspecialchars( $service['h1_tag'] );?></li>
            </ul>

        </div>
    </div>
</div>

<section class="premium-services">

    <div class="container">

        <div class="text-center mt-5">
            <h2 class="section-heading"><?php echo htmlspecialchars( $service['meta_title'] );?></h2>
            <p class="section-sub"><?php echo htmlspecialchars( $service['description'] );?></p>
        </div>

        <div class="row gy-4 mb-5">
            <?php foreach ( $service['services'] as $index => $item ) : ?>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">

                        <div class="service-card_number"><?php echo str_pad( $index + 1, 1, '0', STR_PAD_LEFT );?></div>

                        <div class="shape-icon">
                            <img src="<?php echo $seoArr['base_url'].'assets/img/icon/'.htmlspecialchars( $item['icon'] );?>" alt="<?php echo htmlspecialchars( $item['title'] );?>">
                            <span class="dots"></span>
                        </div>

                        <h3 class="box-title">
                            <?php echo htmlspecialchars( $item['title'] );?>
                        </h3>

                        <p class="service-card_text">
                            <?php echo htmlspecialchars( $item['text'] );?>
                        </p>

                        <div class="bg-shape">
                            <img src="<?php echo $seoArr['base_url'].'assets/img/bg/service_card_bg.png';?>" alt="bg">
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</section>

<?php if ( ! empty( $service['ld_json'] ) ) :
    // Source JSON uses "/services/{slug}" URLs; live site actually serves "/service-details/{slug}".
    // Correct the URLs so schema matches the real, crawlable page address.
    $ldJsonStr = json_encode( $service['ld_json'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    $ldJsonStr = str_replace( '/services/', '/service-details/', $ldJsonStr );
?>
<script type="application/ld+json">
<?php echo $ldJsonStr;?>
</script>
<?php endif; ?>

<?php
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>
