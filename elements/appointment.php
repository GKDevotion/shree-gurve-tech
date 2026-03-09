<div class="space" id="contact-sec" data-bg-src="assets/img/bg/appointment_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 pe-xxl-5 mb-40 mb-xl-0">
                <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span> 
                            <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                        </div>
                        CONTACT NOW
                    </span>
                    <h2 class="sec-title">
                        We're Ready to Talk About Your <span class="text-theme">Opportunities</span>
                    </h2>
                </div>
                <p class="mt-n2 mb-30 text-xl-start text-center">
                    We're ready to talk about your opportunities and help you turn ideas into successful digital solutions through expert guidance, innovative technology, and strategic planning.
                </p>
                <div class="contact-feature-wrap">
                    <div class="contact-feature">
                        <div class="icon-btn"><i class="fa-solid fa-phone"></i></div>
                        <div class="media-body">
                            <p class="contact-feature_label">Call Us On:</p><a href="tel:+918200017181"
                                class="contact-feature_link">+918200017181</a>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="icon-btn"><i class="fa-solid fa-envelope"></i></div>
                        <div class="media-body">
                            <p class="contact-feature_label">Quick Mail Us:</p>
                            <a href="mailto:contact@shreegurve.com" class="contact-feature_link">
                                contact@shreegurve.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 ps-xl-4">
                <h3 class="h4 mt-n2 mb-30 text-center">Make An Contact</h3>
                <form id="appointmentForm" method="POST" action="save_appointment.php" class="appoitment-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group col-sm-6">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled="disabled" selected="selected" hidden>Select Subject</option>
                                <option value="IT Consult">IT Consult</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Branding Solution">Branding Solution</option>
                                <option value="Product Marketing">Product Marketing</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="form-btn col-12">
                            <button type="submit" class="th-btn w-100">SUBMIT</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form> 
            </div>
            
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

            <script>
            $("#appointmentForm").submit(function(e){
                e.preventDefault();

                $.ajax({
                    url: "save_appointment.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response){
                        
                        $(".form-messages").html("<span style='color:green'>Message Sent Successfully</span>");
                        $("#appointmentForm")[0].reset();
                    },
                    error: function(){
                        $(".form-messages").html("Something went wrong!");
                    }
                });
            });
            </script>
            
        </div>
    </div>
</div>