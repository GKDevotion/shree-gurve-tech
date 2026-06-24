<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Privacy Policy | Shree Gurve Technology – Surat, India';
$pageDesc      = 'Read the Privacy Policy of Shree Gurve Technology. Learn how we collect, use, store, and protect your personal data in compliance with applicable laws.';
$pageCanonical = 'https://shreegurvetech.com/privacy-policy';
$currentPage   = '';
$lastUpdated   = 'June 1, 2025';

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero" aria-label="Privacy Policy">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Privacy Policy</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Last updated: <?= $lastUpdated ?></p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="section-py" aria-label="Privacy Policy Content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-card" style="line-height:1.9;" data-aos="fade-up">

                    <div style="background:rgba(59,139,235,0.06);border:1px solid rgba(59,139,235,0.15);border-radius:10px;padding:16px 20px;margin-bottom:32px;">
                        <p style="margin:0;font-size:0.875rem;color:var(--gray-dark);">
                            <i class="bi bi-info-circle-fill me-2" style="color:var(--electric);"></i>
                            This Privacy Policy describes how <strong>Shree Gurve Technology</strong> ("we", "us", or "our") collects, uses, and protects personal information when you visit <strong>shreegurvetech.com</strong> or use our services.
                        </p>
                    </div>

                    <?php
                    $sections = [
                        ['title'=>'1. Information We Collect',
                         'content'=>'We collect the following types of information:
                         <ul>
                            <li><strong>Contact Information:</strong> Name, email address, phone number, and company name when you fill our contact or proposal forms.</li>
                            <li><strong>Usage Data:</strong> Pages visited, time spent, referring URLs, browser type, device type, and IP address — collected automatically via cookies and analytics tools.</li>
                            <li><strong>Communication Data:</strong> Content of emails, messages, or inquiries you send us.</li>
                            <li><strong>Project Information:</strong> Details about your project requirements that you voluntarily share with us.</li>
                         </ul>'],
                        ['title'=>'2. How We Use Your Information',
                         'content'=>'We use the information we collect to:
                         <ul>
                            <li>Respond to your inquiries and provide the services you request</li>
                            <li>Send project proposals, quotes, and status updates</li>
                            <li>Improve our website, services, and user experience</li>
                            <li>Analyze website traffic and usage patterns via Google Analytics</li>
                            <li>Send service-related communications (not marketing spam)</li>
                            <li>Comply with legal obligations</li>
                         </ul>
                         We <strong>do not sell, rent, or share your personal information</strong> with third parties for their marketing purposes.'],
                        ['title'=>'3. Cookies & Tracking Technologies',
                         'content'=>'Our website uses cookies to enhance your experience:
                         <ul>
                            <li><strong>Essential Cookies:</strong> Required for the website to function (session management, security).</li>
                            <li><strong>Analytics Cookies:</strong> Google Analytics 4 to understand how visitors interact with our site. This data is anonymized.</li>
                            <li><strong>Preference Cookies:</strong> To remember your settings and preferences.</li>
                         </ul>
                         You can control cookies through your browser settings. See our <a href="/cookie-policy">Cookie Policy</a> for full details.'],
                        ['title'=>'4. Data Storage & Security',
                         'content'=>'Your data is stored on secure servers. We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction, including:
                         <ul>
                            <li>SSL/TLS encryption for all data transmission</li>
                            <li>Encrypted database storage for sensitive information</li>
                            <li>Role-based access controls limiting who can view your data</li>
                            <li>Regular security audits and vulnerability assessments</li>
                         </ul>'],
                        ['title'=>'5. Third-Party Services',
                         'content'=>'We use the following trusted third-party services that may have access to your data solely to perform functions on our behalf:
                         <ul>
                            <li><strong>Google Analytics 4</strong> — Website analytics (anonymized)</li>
                            <li><strong>Google Maps</strong> — Location display on contact page</li>
                            <li><strong>Google Fonts</strong> — Typography (Poppins)</li>
                            <li><strong>WhatsApp Business</strong> — Customer communication (only when you initiate)</li>
                         </ul>
                         Each third party has their own privacy policy governing their use of data.'],
                        ['title'=>'6. Data Retention',
                         'content'=>'We retain your personal information only as long as necessary for the purposes outlined in this policy:
                         <ul>
                            <li><strong>Contact form submissions:</strong> Retained for 2 years from the date of submission</li>
                            <li><strong>Project data:</strong> Retained for the duration of the project plus 3 years</li>
                            <li><strong>Analytics data:</strong> Retained for 14 months per Google Analytics settings</li>
                         </ul>
                         You may request deletion of your data at any time by contacting us.'],
                        ['title'=>'7. Your Rights',
                         'content'=>'You have the following rights regarding your personal data:
                         <ul>
                            <li><strong>Access:</strong> Request a copy of the personal data we hold about you</li>
                            <li><strong>Correction:</strong> Request correction of inaccurate or incomplete data</li>
                            <li><strong>Deletion:</strong> Request deletion of your personal data ("right to be forgotten")</li>
                            <li><strong>Objection:</strong> Object to processing of your data for specific purposes</li>
                            <li><strong>Portability:</strong> Request your data in a portable, machine-readable format</li>
                         </ul>
                         To exercise any of these rights, email us at <a href="mailto:contact@shreegurvetech.com">contact@shreegurvetech.com</a>.'],
                        ['title'=>'8. Children\'s Privacy',
                         'content'=>'Our website and services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe we have inadvertently collected information from a minor, please contact us immediately.'],
                        ['title'=>'9. Changes to This Policy',
                         'content'=>'We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated revision date. We encourage you to review this policy periodically. Continued use of our website after changes constitutes acceptance of the revised policy.'],
                        ['title'=>'10. Contact Us',
                         'content'=>'If you have any questions, concerns, or requests regarding this Privacy Policy or your personal data, please contact us:
                         <ul>
                            <li><strong>Email:</strong> <a href="mailto:contact@shreegurvetech.com">contact@shreegurvetech.com</a></li>
                            <li><strong>Phone:</strong> <a href="tel:+918200017181">+91 82000 17181</a></li>
                            <li><strong>Address:</strong> Shree Gurve Technology, Surat – 395004, Gujarat, India</li>
                         </ul>'],
                    ];
                    foreach ($sections as $sec): ?>
                        <div style="margin-bottom:32px;">
                            <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid var(--gray-light);">
                                <?= htmlspecialchars($sec['title']) ?>
                            </h2>
                            <div style="font-size:0.9rem;color:var(--gray-dark);"><?= $sec['content'] ?></div>
                        </div>
                    <?php endforeach; ?>

                    <div style="background:var(--gray-light);border-radius:var(--radius-md);padding:20px;margin-top:16px;text-align:center;">
                        <p style="font-size:0.875rem;color:var(--gray-mid);margin:0;">
                            This policy was last updated on <strong><?= $lastUpdated ?></strong>.
                            If you have questions, <a href="/contact-us">contact us</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
