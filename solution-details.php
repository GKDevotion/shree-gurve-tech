<?php
include_once('helper/function.php');

$solutionsData = json_decode( file_get_contents( __DIR__ . '/assets/data/solutions.json' ), true );

$slug = $_GET['slug'] ?? '';
if ( $slug === '' ) {
    $pathParts = explode( '/', trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' ) );
    $slug = end( $pathParts );
}

$solution = $solutionsData[ $slug ] ?? null;

if ( $solution === null ) {
    $slug = array_key_first( $solutionsData );
    $solution = $solutionsData[ $slug ];
}

$seoArr = [
    'base_url' => getBaseUrl(),
    'canonical' => 'solution-details/' . $slug,
    'title' => $solution['meta_title'],
    'description' => $solution['meta_description'],
    'h1_tag' => $solution['h1_tag'],
    'keyword' => $solution['keyword'],
];

include_once('elements/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/breadcumb-bg.jpg';?>">
    <div class="container">
        <div class="breadcumb-content">

            <h1 class="breadcumb-title"><?php echo htmlspecialchars( $solution['h1_tag'] );?></h1>

            <ul class="breadcumb-menu">
                <li>
                    <a href="<?php echo $seoArr['base_url'];?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo $seoArr['base_url'].'proposals';?>">
                        Solutions
                    </a>
                </li>
                <li><?php echo htmlspecialchars( $solution['h1_tag'] );?></li>
            </ul>

        </div>
    </div>
</div>

<section class="premium-services">

    <div class="container">

        <div class="text-center mt-5">
            <h2 class="section-heading"><?php echo htmlspecialchars( $solution['meta_title'] );?></h2>
            <p class="section-sub"><?php echo htmlspecialchars( $solution['description'] );?></p>
        </div>

        <div class="row gy-4 mb-5">
            <?php foreach ( $solution['solutions'] as $index => $item ) : ?>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">

                        <div class="service-card_number"><?php echo str_pad( $index + 1, 1, '0', STR_PAD_LEFT );?></div>

                        <div class="shape-icon">
                            <img src="<?php echo $seoArr['base_url'].'assets/img/icon/'.htmlspecialchars( $item['icon'] );?>" alt="<?php echo htmlspecialchars( $item['title'] );?>">
                            <span class="dots"></span>
                        </div>

                        <h3 class="box-title">
                            <a href="<?php echo $seoArr['base_url'].htmlspecialchars( $item['link'] );?>" title="<?php echo htmlspecialchars( $item['h1_tag'] );?>">
                                <?php echo htmlspecialchars( $item['title'] );?>
                            </a>
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

<?php if ( ! empty( $solution['ld_json'] ) ) :
    $ldJsonStr = json_encode( $solution['ld_json'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    // Source JSON uses www + long descriptive slugs under "/solutions/...".
    // Live site serves non-www + short slug under "/solution-details/{slug}" - align schema to reality.
    $ldJsonStr = str_replace( 'https://www.shreegurvetech.com', 'https://shreegurvetech.com', $ldJsonStr );
    $ldJsonStr = preg_replace( '#/solutions/[a-z0-9\-]+#', '/solution-details/' . $slug, $ldJsonStr );
?>
<script type="application/ld+json">
<?php echo $ldJsonStr;?>
</script>
<?php endif; ?>

<?php
include_once('elements/appointment.php');
include_once('elements/footer.php');
?>
