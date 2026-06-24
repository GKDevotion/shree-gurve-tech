<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Contact Shree Gurve Technology | Get a Free IT Consultation – Surat, India';
$pageDesc      = 'Contact Shree Gurve Technology for web development, software development, mobile app development, and IT services. Based in Surat, India. Free consultation available. Call +91 82000 17181.';
$pageKeywords  = 'contact Shree Gurve Technology, IT company Surat contact, web development inquiry, free consultation IT services India';
$pageCanonical = 'https://shreegurvetech.com/contact-us';
$currentPage   = 'contact';

$faqSchema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        ["@type" => "Question", "name" => "How quickly will Shree Gurve Technology respond to my inquiry?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "We typically respond to all inquiries within 2-4 business hours. For urgent matters, call us directly at +91 82000 17181."]],
        ["@type" => "Question", "name" => "Is the initial consultation free?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Yes, the initial consultation is completely free. We discuss your project requirements and provide a no-obligation quote."]],
        ["@type" => "Question", "name" => "Do you work with international clients?",
         "acceptedAnswer" => ["@type" => "Answer", "text" => "Absolutely. While we are based in Surat, India, we serve clients worldwide. We use modern collaboration tools to ensure seamless communication across time zones."]],
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json"><?= $faqSchema ?></script>

<!-- Page Hero -->
<section class="page-hero" aria-label="Contact Page Header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Get In Touch</h1>
                <p style="color:rgba(255,255,255,0.7); margin-bottom:16px;">Have a project in mind? Let's talk about how we can help.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section-py" aria-label="Contact Information and Form">
    <div class="container">
        <div class="row g-5">

            <!-- Contact Info -->
            <div class="col-lg-4" data-aos="fade-right">
                <div class="section-label">Reach Out</div>
                <h2 class="section-title" style="font-size:1.8rem;">Let's Build <span>Something Great</span></h2>
                <p class="mb-4 text-secondary">We're ready to help you transform your business with the right technology. Reach out to us via any channel below.</p>

                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="contact-info-text">
                        <span>Our Office</span>
                        <p>Surat – 395004, Gujarat, India</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div class="contact-info-text">
                        <span>Call Us Anytime</span>
                        <a href="tel:+918200017181">+91 82000 17181</a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
                    <div class="contact-info-text">
                        <span>Email Us</span>
                        <a href="mailto:contact@shreegurvetech.com">contact@shreegurvetech.com</a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-icon"><i class="bi bi-clock-fill"></i></div>
                    <div class="contact-info-text">
                        <span>Business Hours</span>
                        <p>Mon – Sat: 9:00 AM – 7:00 PM IST</p>
                    </div>
                </div>

                <!-- Social -->
                <div class="mt-4">
                    <p class="fw-600 mb-3" style="font-size:0.85rem;font-weight:600;">Follow Us</p>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/profile.php?id=61589868721671" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/gautam-kakadiya-816297a1/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.youtube.com/@ShreeGurave" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="https://wa.me/918200017181" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="contact-card">
                    <h3 class="mb-2" style="font-size:1.4rem;">Send Us a Message</h3>
                    <p class="text-secondary mb-4" style="font-size:0.875rem;">Fill out the form below and we'll get back to you within 2-4 business hours.</p>

                    <div id="formResult"></div>

                    <form id="contactForm" novalidate>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generateCSRFToken()) ?>">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="name">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Your full name"
                                       required minlength="2" maxlength="100" autocomplete="name">
                                <div class="invalid-feedback">Please enter your name (min. 2 characters).</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="email">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="your@email.com"
                                       required maxlength="150" autocomplete="email">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                       placeholder="+91 98765 43210"
                                       maxlength="20" autocomplete="tel">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="service">Service Interested In</label>
                                <select class="form-select" id="service" name="service">
                                    <option value="">-- Select a Service --</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Cloud Services">Cloud Services</option>
                                    <option value="IT Consulting">IT Consulting</option>
                                    <option value="Cybersecurity">Cybersecurity</option>
                                    <option value="Data & Analytics">Data & Analytics</option>
                                    <option value="AI & Automation">AI & Automation</option>
                                    <option value="IT Support & Maintenance">IT Support & Maintenance</option>
                                    <option value="Blockchain Development">Blockchain Development</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Brief subject of your inquiry"
                                       maxlength="200">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="5"
                                          placeholder="Tell us about your project, goals, and timeline..."
                                          required minlength="20" maxlength="2000"></textarea>
                                <div class="invalid-feedback">Please describe your inquiry (min. 20 characters).</div>
                                <div class="form-text">Maximum 2000 characters.</div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                Send Message <i class="bi bi-send-fill ms-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map Embed -->
<section aria-label="Office Location Map">
    <div style="height:380px; background:var(--gray-light);">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7411.834073534487!2d72.84963031592!3d21.170240186956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e8a09ad5f85%3A0x8ca1c45cd6a52fd7!2sSurat%2C%20Gujarat%20395004!5e0!3m2!1sen!2sin!4v1700000000000"
            width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Shree Gurve Technology Office Location – Surat, Gujarat, India"></iframe>
    </div>
</section>

<!-- Contact FAQs -->
<section class="faq-section section-py" aria-label="Contact FAQs">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="section-label d-inline-flex">FAQs</div>
                <h2 class="section-title">Contact <span>FAQs</span></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="contactFAQ">
                    <?php
                    $faqs = [
                        ['q' => 'How quickly will you respond to my inquiry?', 'a' => 'We typically respond to all inquiries within 2-4 business hours during our working hours (Mon-Sat, 9 AM - 7 PM IST). For urgent matters, please call us directly at +91 82000 17181.'],
                        ['q' => 'Is the initial consultation free?', 'a' => 'Yes, absolutely. We offer a free initial consultation to understand your project requirements, goals, and timeline. There is no obligation to proceed after the consultation.'],
                        ['q' => 'Do you work with international clients?', 'a' => 'We serve clients worldwide. We use modern collaboration tools (Zoom, Teams, Slack) to ensure seamless communication across different time zones. Payments can be processed internationally.'],
                        ['q' => 'What information should I include in my inquiry?', 'a' => 'To help us provide an accurate quote, include your project type, key features needed, expected timeline, budget range, and any reference websites or apps you like. The more detail you provide, the better we can assist you.'],
                        ['q' => 'Can I visit your office in Surat?', 'a' => 'Yes, we welcome in-person meetings at our Surat office. Please contact us first to schedule an appointment to ensure our team is available to meet with you.'],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $i * 50 ?>">
                            <h3 class="accordion-header">
                                <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#cfaq<?= $i ?>">
                                    <?= htmlspecialchars($faq['q']) ?>
                                </button>
                            </h3>
                            <div id="cfaq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#contactFAQ">
                                <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
