<section class="bg-auto space" data-bg-src="assets/img/bg/testi_bg_2.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> 
                    <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
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

                <div class="swiper-wrapper" id="testimonialContainer"></div>

            </div>

            <button data-slider-prev="#testiSlider2" class="slider-arrow style3 slider-prev">
                <i class="far fa-arrow-left"></i></button> <button data-slider-next="#testiSlider2" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i>
            </button>

        </div>
    </div>
    <script>
        fetch("assets/data/testimonials.json")
        .then(response => response.json())
        .then(data => {

            let container = document.getElementById("testimonialContainer");
            let html = "";

            data.testimonials.forEach(item => {

                let stars = "";
                for(let i = 0; i < item.rating; i++){
                    stars += `<i class="fa-solid fa-star-sharp"></i>`;
                }

                html += `
                <div class="swiper-slide">
                    <div class="testi-box">
                        <div class="testi-box_img">
                            <img src="${item.image}" alt="Avatar">
                            <div class="testi-box_quote">
                                <img src="assets/img/icon/quote_left_2.svg" alt="quote">
                            </div>
                        </div>
                        <div class="testi-box_content">
                            <p class="testi-box_text">${item.text}</p>
                            <div class="testi-box_review">${stars}</div>
                            <h3 class="box-title">${item.name}</h3>
                            <p class="testi-box_desig">${item.designation}</p>
                        </div>
                    </div>
                </div>
                `;
            });

            container.innerHTML = html;
        });
</script>

    <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-left="10%">
        <img src="assets/img/shape/line_1.png" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="2%">
        <img src="assets/img/shape/line_2.png" alt="shape">
    </div>
</section>