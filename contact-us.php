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

$json = file_get_contents('assets/data/services.json');
$services = json_decode($json, true);
?>

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="index">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png" id="contact-sec">
    <div class="container">
        <div class="row">

            <div class="col-xl-8">
                <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon"
                                data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img
                                src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>contact with us!
                    </span>
                    <h2 class="sec-title">Have Any Questions?</h2>
                    <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business
                        e-commerce. Dramatically reintermediate compelling process improvements rather than
                        empowered relationships.</p>
                </div>

                <form id="contactForm" method="POST" action="save_contact.php"
                    class="contact-form ajax-contact">

                    <div class="row">
                        <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                id="name" placeholder="Your Name"> <i class="fal fa-user"></i>
                        </div>

                        <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i>
                        </div>

                        <div class="form-group col-md-6">

                            <select name="subject" class="form-select">

                                <option value="" disabled selected hidden>Select Subject</option>

                                <?php
                                foreach ($services as $key => $service) {
                                    echo '<option value="' . $key . '">' . $service['title'] . '</option>';
                                }
                                ?>

                            </select>

                        </div>

                        <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i>
                        </div>

                        <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                class="form-control" placeholder="Your Message"></textarea> <i
                                class="fal fa-comment"></i>
                        </div>

                        <div class="form-btn text-xl-start text-center col-12">
                            <button type="submit" class="th-btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
                        </div>

                    </div>

                    <p class="form-messages mb-0 mt-3"></p>
                </form>

            </div>

            <script>
            $("#contactForm").submit(function(e){
                e.preventDefault();

                $.ajax({
                    url: "save_contact.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response){
                        
                        $(".form-messages").html("<span style='color:green'>Message Sent Successfully</span>");
                        $("#contactForm")[0].reset();
                    },
                    error: function(){
                        $(".form-messages").html("Something went wrong!");
                    }
                });
            });
            </script>

            <div class="col-xl-4 d-flex flex-column gy-4">

                <div class="col">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-location-dot"></i></div>
                        <div class="media-body">
                            <h4 class="box-title">Our Office Address</h4><span class="contact-info_text">B710, Westgate by True value, Ahmedabad</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-phone"></i></div>
                        <div class="media-body">
                            <h4 class="box-title">Call Us Anytime</h4><span class="contact-info_text"><a
                                    href="tel:+91 82000 17181">+91 82000 17181</a></span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <h4 class="box-title">Send An Email</h4><span class="contact-info_text"><a
                                    href="mailto:contact@shareegurve.com">contact@shareegurve.com</a></span>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

<?php
include_once('elements/happy-client.php');
include_once('elements/footer.php');
?>