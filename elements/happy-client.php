<?php
    $testimonialData = json_decode( file_get_contents( __DIR__ . '/../assets/data/testimonials.json' ), true );
    $testimonials = $testimonialData['testimonials'] ?? [];

    $ratingSum = 0;
    foreach ( $testimonials as $t ) {
        $ratingSum += (int) ( $t['rating'] ?? 0 );
    }
    $reviewCount = count( $testimonials );
    $avgRating = $reviewCount > 0 ? round( $ratingSum / $reviewCount, 1 ) : 0;
?>
<section class="bg-auto space" data-bg-src="<?php echo $seoArr['base_url'].'assets/img/bg/testi_bg_2.png';?>">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_2.svg';?>"></span> 
                    <img src="<?php echo $seoArr['base_url'].'assets/img/theme-img/title_shape_2.svg';?>" alt="shape">
                </div>
                CUSTOMER FEEDBACK
            </span>
            <h2 class="sec-title">
                What Happy Clients Says<br><span class="text-theme fw-normal">About Us?</span>
            </h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="testiSlider2"
                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>

                <div class="swiper-wrapper" id="testimonialContainer">
                    <?php foreach ( $testimonials as $item ) : ?>
                    <div class="swiper-slide">
                        <div class="testi-box">
                            <div class="testi-box_img">
                                <img src="<?php echo $seoArr['base_url'].htmlspecialchars( $item['image'] );?>" alt="<?php echo htmlspecialchars( $item['name'] );?>" loading="lazy" decoding="async">
                                <div class="testi-box_quote">
                                    <img src="<?php echo $seoArr['base_url'].'assets/img/icon/quote_left_2.svg';?>" alt="quote">
                                </div>
                            </div>
                            <div class="testi-box_content">
                                <p class="testi-box_text"><?php echo htmlspecialchars( $item['text'] );?></p>
                                <div class="testi-box_review"><?php echo str_repeat( '<i class="fa-solid fa-star-sharp"></i>', (int) $item['rating'] );?></div>
                                <h3 class="box-title"><?php echo htmlspecialchars( $item['name'] );?></h3>
                                <p class="testi-box_desig"><?php echo htmlspecialchars( $item['designation'] );?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <button data-slider-prev="#testiSlider2" class="slider-arrow style3 slider-prev">
                <i class="far fa-arrow-left"></i></button> <button data-slider-next="#testiSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i>
            </button>

        </div>
    </div>

    <?php if ( $reviewCount > 0 ) : ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "<?php echo $seoArr['base_url'];?>#organization",
        "name": "Shree Gurve Tech",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "<?php echo $avgRating;?>",
            "reviewCount": "<?php echo $reviewCount;?>",
            "bestRating": "5"
        },
        "review": [
            <?php foreach ( $testimonials as $i => $item ) : ?>
            {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "<?php echo (int) $item['rating'];?>",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": <?php echo json_encode( $item['name'] );?>
                },
                "reviewBody": <?php echo json_encode( $item['text'] );?>
            }<?php echo ( $i < $reviewCount - 1 ) ? ',' : '';?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>

    <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-left="10%">
        <img src="<?php echo $seoArr['base_url'].'assets/img/shape/line_1.png';?>" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="2%">
        <img src="<?php echo $seoArr['base_url'].'assets/img/shape/line_2.png';?>" alt="shape">
    </div>
</section>