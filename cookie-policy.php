<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Cookie Policy | Shree Gurve Technology – Surat, India';
$pageDesc      = 'Learn how Shree Gurve Technology uses cookies on our website, what types of cookies we use, and how you can control them.';
$pageCanonical = 'https://shreegurvetech.com/cookie-policy';
$currentPage   = '';
$lastUpdated   = 'June 1, 2025';

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero" aria-label="Cookie Policy">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Cookie Policy</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Last updated: <?= $lastUpdated ?></p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cookie Policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="section-py" aria-label="Cookie Policy Content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-card" style="line-height:1.9;" data-aos="fade-up">

                    <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:12px;">What Are Cookies?</h2>
                    <p style="font-size:0.9rem;color:var(--gray-dark);margin-bottom:28px;">
                        Cookies are small text files that are stored on your device (computer, tablet, or mobile) when you visit a website. They help the website remember your preferences, analyze how you use the site, and provide a better experience. Cookies are widely used by websites to make them work efficiently.
                    </p>

                    <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:16px;padding-bottom:8px;border-bottom:2px solid var(--gray-light);">Types of Cookies We Use</h2>

                    <!-- Cookie Table -->
                    <div style="overflow-x:auto;margin-bottom:32px;">
                        <table style="width:100%;border-collapse:collapse;font-size:0.875rem;">
                            <thead>
                                <tr style="background:var(--primary);color:white;">
                                    <th style="padding:12px 16px;text-align:left;border-radius:8px 0 0 0;">Cookie Type</th>
                                    <th style="padding:12px 16px;text-align:left;">Purpose</th>
                                    <th style="padding:12px 16px;text-align:left;">Duration</th>
                                    <th style="padding:12px 16px;text-align:left;border-radius:0 8px 0 0;">Can You Opt Out?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cookies = [
                                    ['Essential / Strictly Necessary', 'Required for core website functions: session management, CSRF protection, security. The website cannot function properly without these.', 'Session / 1 year', 'No (required)'],
                                    ['Analytics (Google Analytics 4)', 'Helps us understand how visitors interact with our website — pages visited, time spent, traffic sources. Data is anonymized.', '14 months', 'Yes'],
                                    ['Preference / Functional', 'Remembers your choices (e.g. language, cookie consent decision) to improve your experience.', '1 year', 'Yes'],
                                    ['Third-party (Google Fonts, Maps)', 'Google Fonts loads typography; Google Maps displays our location. These may set cookies from Google\'s domain.', 'Varies', 'Yes (block via browser)'],
                                ];
                                foreach ($cookies as $i => $row): ?>
                                    <tr style="background:<?= $i % 2 === 0 ? 'var(--gray-light)' : 'white' ?>;">
                                        <td style="padding:12px 16px;font-weight:600;color:var(--dark);vertical-align:top;"><?= htmlspecialchars($row[0]) ?></td>
                                        <td style="padding:12px 16px;color:var(--gray-dark);vertical-align:top;"><?= htmlspecialchars($row[1]) ?></td>
                                        <td style="padding:12px 16px;color:var(--gray-dark);vertical-align:top;white-space:nowrap;"><?= htmlspecialchars($row[2]) ?></td>
                                        <td style="padding:12px 16px;vertical-align:top;">
                                            <?php if (str_starts_with($row[3], 'No')): ?>
                                                <span style="background:rgba(220,53,69,0.1);color:#dc3545;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;"><?= htmlspecialchars($row[3]) ?></span>
                                            <?php else: ?>
                                                <span style="background:rgba(25,135,84,0.1);color:#198754;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;"><?= htmlspecialchars($row[3]) ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid var(--gray-light);">How to Control Cookies</h2>
                    <p style="font-size:0.9rem;color:var(--gray-dark);margin-bottom:16px;">You can control and manage cookies in several ways:</p>
                    <ul style="font-size:0.9rem;color:var(--gray-dark);margin-bottom:28px;">
                        <li><strong>Browser Settings:</strong> Most browsers allow you to refuse or delete cookies via settings. Note: disabling essential cookies may affect website functionality.</li>
                        <li><strong>Google Analytics Opt-out:</strong> Install the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</li>
                        <li><strong>Browser-Specific Instructions:</strong>
                            <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Chrome</a> |
                            <a href="https://support.mozilla.org/kb/enable-and-disable-cookies-website-preferences" target="_blank" rel="noopener">Firefox</a> |
                            <a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471" target="_blank" rel="noopener">Safari</a> |
                            <a href="https://support.microsoft.com/topic/delete-and-manage-cookies" target="_blank" rel="noopener">Edge</a>
                        </li>
                    </ul>

                    <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid var(--gray-light);">Updates to This Policy</h2>
                    <p style="font-size:0.9rem;color:var(--gray-dark);margin-bottom:28px;">We may update this Cookie Policy from time to time to reflect changes in technology or regulations. Please check back periodically.</p>

                    <h2 style="font-size:1.15rem;font-weight:700;color:var(--dark);margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid var(--gray-light);">Contact Us</h2>
                    <p style="font-size:0.9rem;color:var(--gray-dark);margin-bottom:0;">
                        For questions about this Cookie Policy, contact us at
                        <a href="mailto:contact@shreegurvetech.com">contact@shreegurvetech.com</a> or
                        call <a href="tel:+918200017181">+91 82000 17181</a>.
                    </p>

                    <div style="background:var(--gray-light);border-radius:var(--radius-md);padding:20px;margin-top:28px;text-align:center;">
                        <p style="font-size:0.875rem;color:var(--gray-mid);margin:0;">
                            Also read our <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-conditions">Terms &amp; Conditions</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
