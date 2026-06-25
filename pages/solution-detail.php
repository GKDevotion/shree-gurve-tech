<?php 
include_once('config.php'); 

$slug = basename($_SERVER['REQUEST_URI']);
$slug = preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));

$solutionsData = [
    'crm-solutions' => [
        'title'       => 'CRM Solutions',
        'icon'        => 'bi-people',
        'tagline'     => 'Manage Every Customer Relationship — From First Contact to Loyal Client',
        'description' => 'Our custom CRM (Customer Relationship Management) solution helps businesses track leads, manage customer interactions, automate follow-ups, and close more deals. Built to fit your sales process — not a generic template.',
        'features'    => [
            'Lead capture from website, phone, email & social media',
            'Visual sales pipeline with drag-and-drop deal stages',
            'Customer interaction history & communication logs',
            'Automated follow-up reminders & task scheduling',
            'Quotation & proposal generation',
            'Sales performance dashboard & forecasting',
            'Role-based access for sales team & managers',
            'Email & WhatsApp integration for direct outreach',
            'Mobile-friendly interface for field sales teams',
            'Custom reports & export to Excel/PDF',
        ],
        'modules'     => ['Lead Management', 'Contact Database', 'Deal Pipeline', 'Task & Follow-up', 'Quotation Builder', 'Sales Reports', 'Team Management', 'Email Integration'],
        'benefits'    => [
            ['icon'=>'bi-graph-up-arrow', 'title'=>'Increase Sales', 'desc'=>'Never miss a follow-up. Systematic lead nurturing increases conversion rates by up to 30%.'],
            ['icon'=>'bi-clock-history',  'title'=>'Save Time',      'desc'=>'Automate repetitive tasks — reminders, emails, reports — and focus your team on selling.'],
            ['icon'=>'bi-eye',            'title'=>'Full Visibility', 'desc'=>'See the complete picture of your sales pipeline, team performance, and revenue forecast.'],
        ],
        'ideal'       => 'Sales teams, real estate agencies, service businesses, B2B companies, insurance firms',
        'timeline'    => '3–6 Weeks',
        'faqs'        => [
            ['q'=>'Can the CRM be customized to our sales process?', 'a'=>'Absolutely. We build the CRM around your exact sales stages, terminology, and workflow — not the other way around. Every field, stage, and report is tailored to your business.'],
            ['q'=>'Can it send automated WhatsApp or email reminders?', 'a'=>'Yes. We can integrate automated WhatsApp messages (via WhatsApp Business API) and email reminders for follow-ups, birthdays, renewal alerts, and custom triggers.'],
            ['q'=>'Is the CRM mobile-friendly?', 'a'=>'Yes. The CRM is fully responsive and works on any device. We can also build a dedicated mobile app if your team needs offline access or native features.'],
            ['q'=>'Can multiple team members use it simultaneously?', 'a'=>'Yes. The CRM supports unlimited users with role-based access — admins see everything, sales reps see only their leads, and managers see team performance.'],
            ['q'=>'Can it integrate with our website contact form?', 'a'=>'Yes. We integrate the CRM directly with your website so all form submissions automatically create leads in the system — eliminating manual data entry.'],
        ],
    ],

    'erp-solutions' => [
        'title'       => 'ERP Solutions',
        'icon'        => 'bi-diagram-3',
        'tagline'     => 'Unify All Your Business Operations in One Powerful Platform',
        'description' => 'Our custom ERP (Enterprise Resource Planning) solution integrates all your core business functions — inventory, finance, procurement, sales, HR, and production — into a single unified system. Eliminate data silos, reduce errors, and get real-time visibility across your entire business.',
        'features'    => [
            'Inventory & stock management with barcode scanning',
            'Purchase order & vendor management',
            'Sales order processing & invoicing',
            'Financial accounting with GST compliance',
            'Production planning & bill of materials (BOM)',
            'Warehouse management with multi-location support',
            'HR & payroll module',
            'Real-time business dashboard & KPI tracking',
            'Multi-branch & multi-currency support',
            'Tally integration & data migration support',
        ],
        'modules'     => ['Inventory', 'Finance & GST', 'Purchase', 'Sales & Invoicing', 'Production', 'Warehouse', 'HR & Payroll', 'Reports & Analytics'],
        'benefits'    => [
            ['icon'=>'bi-arrow-repeat',  'title'=>'Eliminate Silos',   'desc'=>'All departments work from the same data — no duplicate entry, no reconciliation headaches.'],
            ['icon'=>'bi-shield-check',  'title'=>'Reduce Errors',     'desc'=>'Automated calculations, validation rules, and approval workflows eliminate costly manual errors.'],
            ['icon'=>'bi-speedometer2',  'title'=>'Real-time Insights','desc'=>'Live dashboards give management instant visibility into stock levels, cash flow, and business health.'],
        ],
        'ideal'       => 'Manufacturing companies, trading & distribution firms, retail chains, construction businesses',
        'timeline'    => '8–16 Weeks',
        'faqs'        => [
            ['q'=>'Can you migrate data from our existing Tally or Excel?', 'a'=>'Yes. We handle complete data migration from Tally, Excel, or any other system. We map, clean, and import your historical data so you start fresh without losing your records.'],
            ['q'=>'Is the ERP GST compliant?', 'a'=>'Yes. Our ERP is fully GST compliant — it generates GST-ready invoices, calculates CGST/SGST/IGST automatically, and produces GSTR-1, GSTR-2 reports for easy filing.'],
            ['q'=>'Can it handle multiple warehouses or branches?', 'a'=>'Yes. The ERP supports multi-location inventory, inter-branch stock transfers, and consolidated reporting across all your branches and warehouses.'],
            ['q'=>'How long does ERP implementation take?', 'a'=>'Typically 8–16 weeks depending on complexity, number of modules, and data migration requirements. We follow a phased implementation approach to minimize business disruption.'],
            ['q'=>'Do you provide staff training?', 'a'=>'Yes. We provide comprehensive training — role-specific training for each user type (admin, accounts, warehouse, sales) plus detailed user manuals and video tutorials.'],
        ],
    ],

    'hrms-solutions' => [
        'title'       => 'HRMS Solutions',
        'icon'        => 'bi-person-badge',
        'tagline'     => 'Automate Your Entire HR Operation — From Hire to Retire',
        'description' => 'Our HRMS (Human Resource Management System) digitizes and automates every aspect of your HR department — employee records, attendance, leave management, payroll processing, appraisals, and compliance reporting. Save hours every month and eliminate HR errors.',
        'features'    => [
            'Employee onboarding & digital document management',
            'Biometric & app-based attendance tracking',
            'Leave management with approval workflows',
            'Automated payroll with tax & PF/ESI calculation',
            'Performance appraisal & goal tracking',
            'Employee self-service portal & mobile app',
            'Offer letters, appointment letters & HR documents',
            'Grievance management system',
            'Training & skill development tracking',
            'Compliance reports — PF, ESI, TDS, Form 16',
        ],
        'modules'     => ['Employee Records', 'Attendance', 'Leave Management', 'Payroll', 'Performance', 'Self-Service Portal', 'Recruitment', 'Compliance Reports'],
        'benefits'    => [
            ['icon'=>'bi-calculator',   'title'=>'Error-Free Payroll', 'desc'=>'Automated salary calculations with all deductions, taxes, and compliance — zero manual errors.'],
            ['icon'=>'bi-person-check', 'title'=>'Employee Satisfaction','desc'=>'Self-service portal lets employees view payslips, apply leave, and update details without HR intervention.'],
            ['icon'=>'bi-file-earmark-check','title'=>'Compliance Ready','desc'=>'Auto-generated PF, ESI, TDS, and Form 16 reports keep you audit-ready at all times.'],
        ],
        'ideal'       => 'Any business with 10+ employees, HR departments, manufacturing plants, IT companies, hospitals',
        'timeline'    => '4–8 Weeks',
        'faqs'        => [
            ['q'=>'Can it integrate with biometric attendance devices?', 'a'=>'Yes. We integrate with all major biometric attendance machines (ZKTeco, Realtime, eSSL) to automatically sync attendance data into the HRMS.'],
            ['q'=>'Does it calculate PF, ESI, and TDS automatically?', 'a'=>'Yes. The payroll module automatically calculates PF (12%), ESI (3.25%), PT, TDS, and other deductions based on employee salary structure and compliance rules.'],
            ['q'=>'Can employees access their payslips on mobile?', 'a'=>'Yes. The employee self-service portal is mobile-responsive and also available as a mobile app. Employees can view payslips, apply for leave, check attendance, and update personal information.'],
            ['q'=>'Can it handle different salary structures for different departments?', 'a'=>'Yes. You can create unlimited salary templates — different structures for different employee grades, departments, or employment types (permanent, contract, part-time).'],
            ['q'=>'Is employee data secure?', 'a'=>'Yes. All employee data is stored encrypted, access is role-based, and audit logs track every action. Only authorized HR and management personnel can access sensitive information.'],
        ],
    ],

    'ecommerce-management-systems' => [
        'title'       => 'E-Commerce Management Systems',
        'icon'        => 'bi-cart3',
        'tagline'     => 'Sell Online 24/7 With a Powerful, Custom E-Commerce Platform',
        'description' => 'Our custom e-commerce platform gives you complete control over your online store — product catalog, inventory, orders, payments, shipping, and customer management. No monthly SaaS fees. Full ownership. Built exactly for your business model.',
        'features'    => [
            'Multi-category product catalog with variants (size, color, etc.)',
            'Advanced search, filters & product comparison',
            'Shopping cart & secure checkout with Razorpay/PayU/Stripe',
            'Order management, tracking & status notifications',
            'Customer accounts with order history & wishlists',
            'Discount codes, coupons & promotional campaigns',
            'Inventory management with low-stock alerts',
            'GST invoice generation & tax management',
            'Mobile-first responsive design',
            'SEO-optimized product & category pages',
            'Admin dashboard with sales analytics',
            'Multi-vendor marketplace support (optional)',
        ],
        'modules'     => ['Product Catalog', 'Shopping Cart', 'Payment Gateway', 'Order Management', 'Customer Portal', 'Inventory', 'Promotions', 'Analytics Dashboard'],
        'benefits'    => [
            ['icon'=>'bi-shop',          'title'=>'Sell 24/7',         'desc'=>'Your online store works round the clock — generating revenue even while you sleep.'],
            ['icon'=>'bi-currency-rupee','title'=>'Zero SaaS Fees',    'desc'=>'One-time development cost with full ownership. No monthly fees like Shopify or WooCommerce hosting.'],
            ['icon'=>'bi-bar-chart-line','title'=>'Actionable Analytics','desc'=>'Real-time sales dashboards, best-seller reports, and customer behavior insights to grow your store.'],
        ],
        'ideal'       => 'Retail brands, wholesale suppliers, D2C businesses, fashion, electronics, food & grocery stores',
        'timeline'    => '6–12 Weeks',
        'faqs'        => [
            ['q'=>'Which payment gateways do you integrate?', 'a'=>'We integrate with all major Indian and international payment gateways — Razorpay, PayU, CCAvenue, Instamojo, Stripe, PayPal, and UPI payment options.'],
            ['q'=>'Can customers track their orders?', 'a'=>'Yes. Customers receive automated SMS/email updates at each order stage. We also integrate with Shiprocket, Delhivery, and other logistics APIs for real-time shipment tracking.'],
            ['q'=>'Is it different from Shopify or WooCommerce?', 'a'=>'Yes. Unlike Shopify (monthly fees) or WooCommerce (hosting + plugin costs), our custom solution is a one-time investment with full code ownership, unlimited products, no transaction fees, and complete flexibility to add any feature.'],
            ['q'=>'Can you build a multi-vendor marketplace?', 'a'=>'Yes. We can build a multi-vendor marketplace where multiple sellers list their products, with individual seller dashboards, commission management, and payout systems.'],
            ['q'=>'Will the store be SEO-optimized?', 'a'=>'Yes. All product pages, category pages, and URLs are SEO-optimized with structured data (Product schema), meta tags, fast loading, and mobile-first design — essential for Google ranking.'],
        ],
    ],

    'education-management-systems' => [
        'title'       => 'Education Management Systems',
        'icon'        => 'bi-mortarboard',
        'tagline'     => 'Digitize Your Institution — From Admissions to Alumni',
        'description' => 'Our Education Management System (EMS/ERP) helps schools, colleges, coaching institutes, and training centers manage every aspect of their operations digitally — student enrollment, attendance, fees, examinations, results, and parent communication.',
        'features'    => [
            'Online student admission & enrollment management',
            'Fee collection with online payment & receipts',
            'Attendance tracking (class-wise & subject-wise)',
            'Timetable & academic calendar management',
            'Examination management & result processing',
            'Grade sheets & report card generation (PDF)',
            'Parent & student self-service portal',
            'Teacher & staff management',
            'Library management system',
            'SMS & WhatsApp notifications to parents',
            'Transport & hostel management (optional)',
            'Multi-branch support for coaching chains',
        ],
        'modules'     => ['Admissions', 'Fee Management', 'Attendance', 'Timetable', 'Examinations', 'Results & Reports', 'Parent Portal', 'Staff Management'],
        'benefits'    => [
            ['icon'=>'bi-person-check', 'title'=>'Paperless Operations','desc'=>'Eliminate registers and manual records. All data is digital, searchable, and backed up automatically.'],
            ['icon'=>'bi-chat-dots',    'title'=>'Parent Engagement',   'desc'=>'Instant SMS/WhatsApp notifications keep parents informed about attendance, fees, and results.'],
            ['icon'=>'bi-graph-up',     'title'=>'Better Outcomes',     'desc'=>'Data-driven insights help identify struggling students early and improve academic performance.'],
        ],
        'ideal'       => 'Schools, colleges, coaching institutes, training academies, tutoring centers, skill development centers',
        'timeline'    => '6–10 Weeks',
        'faqs'        => [
            ['q'=>'Can parents pay fees online through the system?', 'a'=>'Yes. The fee management module supports online payment via Razorpay, UPI, and net banking. Parents receive automatic receipts via email/SMS.'],
            ['q'=>'Can it generate report cards automatically?', 'a'=>'Yes. The system automatically calculates grades, ranks, and generates formatted PDF report cards ready for printing — saving teachers hours of manual work.'],
            ['q'=>'Does it work for coaching institutes with batch management?', 'a'=>'Yes. We customize the system for coaching institutes with batch-based enrollment, subject-wise attendance, test series management, and performance tracking per student.'],
            ['q'=>'Can parents track their child\'s attendance in real time?', 'a'=>'Yes. Parents can log into the parent portal or receive daily SMS/WhatsApp notifications when their child\'s attendance is marked.'],
            ['q'=>'Does it support multiple branches?', 'a'=>'Yes. The system supports multi-branch management with centralized admin control and branch-wise reporting — ideal for coaching chains and school groups.'],
        ],
    ],

    'healthcare-management-systems' => [
        'title'       => 'Healthcare Management Systems',
        'icon'        => 'bi-heart-pulse',
        'tagline'     => 'Modern Digital Solutions for Clinics, Hospitals & Diagnostic Centers',
        'description' => 'Our Healthcare Management System digitizes clinical operations — from patient registration and appointment booking to electronic medical records, billing, and staff management. Reduce paperwork, improve patient experience, and run a more efficient practice.',
        'features'    => [
            'Online & walk-in appointment booking system',
            'Patient registration & electronic medical records (EMR)',
            'Doctor scheduling & consultation management',
            'Prescription management & drug database',
            'Lab test ordering & result management',
            'Billing, invoicing & insurance claim support',
            'Pharmacy inventory management (optional)',
            'SMS/WhatsApp appointment reminders',
            'Patient history & follow-up tracking',
            'Staff & doctor attendance management',
            'Financial reports & revenue dashboard',
            'Multi-doctor & multi-department support',
        ],
        'modules'     => ['Appointments', 'Patient Records (EMR)', 'Billing', 'Prescriptions', 'Lab Management', 'Pharmacy', 'Staff Management', 'Reports'],
        'benefits'    => [
            ['icon'=>'bi-clipboard2-pulse','title'=>'Better Patient Care',  'desc'=>'Complete patient history at your fingertips — doctors make faster, more informed decisions.'],
            ['icon'=>'bi-calendar-check',  'title'=>'Reduce No-Shows',     'desc'=>'Automated appointment reminders via SMS/WhatsApp reduce missed appointments by up to 40%.'],
            ['icon'=>'bi-cash-stack',      'title'=>'Faster Billing',      'desc'=>'One-click invoice generation with insurance support speeds up revenue collection significantly.'],
        ],
        'ideal'       => 'General clinics, specialty hospitals, dental practices, diagnostic centers, physiotherapy centers, eye care centers',
        'timeline'    => '5–10 Weeks',
        'faqs'        => [
            ['q'=>'Is patient data secure and private?', 'a'=>'Yes. All patient records are encrypted, access is strictly role-based, and audit logs track every action. The system is designed with healthcare data privacy standards in mind.'],
            ['q'=>'Can patients book appointments online?', 'a'=>'Yes. We can build a patient-facing booking portal or mobile app where patients self-schedule appointments, receive confirmation, and get reminders — without calling the clinic.'],
            ['q'=>'Does it support multiple doctors and departments?', 'a'=>'Yes. The system handles multiple doctors, departments, and consultation rooms — each with their own schedule, patient queue, and records.'],
            ['q'=>'Can it integrate with lab equipment?', 'a'=>'Yes. We can integrate with lab analyzers and diagnostic equipment that support HL7 or API-based data export to automatically pull test results into patient records.'],
            ['q'=>'Can it generate GST-compliant bills?', 'a'=>'Yes. The billing module generates GST-compliant invoices with proper HSN codes for medical services and medicines, supporting both cash and insurance billing workflows.'],
        ],
    ],
];

if (!isset($solutionsData[$slug])) {
    header('Location: /solutions');
    exit;
}

$sol = $solutionsData[$slug];

$pageTitle     = $sol['title'] . ' | Custom Business Software | Shree Gurve Technology Surat';
$pageDesc      = $sol['tagline'] . '. Custom ' . $sol['title'] . ' built by Shree Gurve Technology, Surat India. Tailored to your business. Get a free demo.';
$pageKeywords  = strtolower($sol['title']) . ' India, custom ' . strtolower($sol['title']) . ' Surat, ' . strtolower($sol['title']) . ' software Gujarat, Shree Gurve Technology';
$pageCanonical = getBaseUrl('solution-details/' . $slug );
$currentPage   = 'solutions';

$faqSchema = json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(fn($f) => [
        "@type" => "Question",
        "name" => $f['q'],
        "acceptedAnswer" => ["@type" => "Answer", "text" => $f['a']]
    ], $sol['faqs'])
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include_once('includes/footer.php'); 
?>

<script type="application/ld+json"><?= $faqSchema ?></script>

<!-- Page Hero -->
<section class="page-hero" aria-label="<?= htmlspecialchars($sol['title']) ?> Solution">
    <div class="container">
        <div class="row">
            <div class="col-lg-9" data-aos="fade-right">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div style="width:56px;height:56px;border-radius:12px;background:rgba(244,98,58,0.2);display:flex;align-items:center;justify-content:center;font-size:1.6rem;color:var(--accent);">
                        <i class="bi <?= htmlspecialchars($sol['icon']) ?>"></i>
                    </div>
                    <div class="badge-pill" style="color:rgba(255,255,255,0.8);border-color:rgba(255,255,255,0.2);background:rgba(255,255,255,0.1);">
                        ⏱ <?= htmlspecialchars($sol['timeline']) ?>
                    </div>
                </div>
                <h1 class="page-hero-title"><?= htmlspecialchars($sol['title']) ?></h1>
                <p style="color:rgba(255,255,255,0.75);font-size:1.05rem;margin-bottom:16px;"><?= htmlspecialchars($sol['tagline']) ?></p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/solutions">Solutions</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($sol['title']) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Solution Content -->
<section class="section-py" aria-label="Solution Details">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Overview -->
                <div data-aos="fade-up">
                    <div class="section-label">Solution Overview</div>
                    <h2 class="section-title" style="font-size:1.8rem;">What Is Our <span><?= htmlspecialchars($sol['title']) ?>?</span></h2>
                    <p style="font-size:1rem;line-height:1.85;color:var(--gray-dark);"><?= htmlspecialchars($sol['description']) ?></p>
                </div>

                <!-- Key Benefits -->
                <div class="row g-4 mt-2" data-aos="fade-up">
                    <?php foreach ($sol['benefits'] as $b): ?>
                        <div class="col-md-4">
                            <div class="strip-card text-center h-100">
                                <div class="strip-icon"><i class="bi <?= htmlspecialchars($b['icon']) ?>"></i></div>
                                <h5><?= htmlspecialchars($b['title']) ?></h5>
                                <p><?= htmlspecialchars($b['desc']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Features -->
                <div class="mt-5" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:20px;">Key Features</h3>
                    <div class="row g-3">
                        <?php foreach ($sol['features'] as $i => $f): ?>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 50 ?>">
                                <div style="display:flex;align-items:flex-start;gap:12px;padding:14px;background:var(--gray-light);border-radius:10px;border:1px solid var(--border);">
                                    <i class="bi bi-check-circle-fill" style="color:var(--accent);margin-top:2px;flex-shrink:0;"></i>
                                    <span style="font-size:0.875rem;font-weight:500;color:var(--dark);"><?= htmlspecialchars($f) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Modules -->
                <div class="mt-5" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:16px;">Included Modules</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <?php foreach ($sol['modules'] as $m): ?>
                            <div style="background:var(--primary);color:white;border-radius:8px;padding:8px 18px;font-size:0.82rem;font-weight:600;display:flex;align-items:center;gap:6px;">
                                <i class="bi bi-grid-fill" style="font-size:0.7rem;"></i> <?= htmlspecialchars($m) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Ideal For -->
                <div class="mt-5" data-aos="fade-up">
                    <div style="background:linear-gradient(135deg,rgba(10,36,99,0.05),rgba(59,139,235,0.08));border:1px solid var(--border);border-radius:var(--radius-md);padding:24px;">
                        <h4 style="font-size:1rem;font-weight:700;margin-bottom:8px;color:var(--dark);">
                            <i class="bi bi-bullseye me-2" style="color:var(--accent);"></i>Ideal For
                        </h4>
                        <p style="margin:0;color:var(--gray-dark);font-size:0.9rem;"><?= htmlspecialchars($sol['ideal']) ?></p>
                    </div>
                </div>

                <!-- FAQs -->
                <div class="mt-5" id="faqs" data-aos="fade-up">
                    <h3 style="font-size:1.3rem;font-weight:700;margin-bottom:20px;"><?= htmlspecialchars($sol['title']) ?> — Frequently Asked Questions</h3>
                    <div class="accordion" id="solDetailFAQ">
                        <?php foreach ($sol['faqs'] as $i => $faq): ?>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#solFaq<?= $i ?>">
                                        <?= htmlspecialchars($faq['q']) ?>
                                    </button>
                                </h4>
                                <div id="solFaq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#solDetailFAQ">
                                    <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="contact-card sticky-top" style="top:100px;" data-aos="fade-left">
                    <div class="text-center mb-4">
                        <div style="width:64px;height:64px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--electric));color:white;font-size:1.8rem;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
                            <i class="bi <?= htmlspecialchars($sol['icon']) ?>"></i>
                        </div>
                        <h4 style="font-size:1.1rem;">Request a Free Demo</h4>
                        <p style="font-size:0.82rem;color:var(--gray-mid);">See the <?= htmlspecialchars($sol['title']) ?> in action before you commit.</p>
                    </div>
                    <div id="solSidebarResult"></div>
                    <form id="solSidebarForm" novalidate>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generateCSRFToken()) ?>">
                        <input type="hidden" name="service" value="<?= htmlspecialchars($sol['title']) ?>">
                        <input type="hidden" name="subject" value="Demo Request: <?= htmlspecialchars($sol['title']) ?>">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Name *" required minlength="2">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="3" placeholder="Tell us about your business..." required minlength="20"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Request Free Demo <i class="bi bi-play-circle ms-2"></i></button>
                    </form>
                    <div class="mt-3 text-center">
                        <small class="text-muted">Or call us:</small><br>
                        <a href="tel:+918200017181" style="font-weight:700;color:var(--primary);font-size:0.95rem;">
                            <i class="bi bi-telephone-fill me-1"></i>+91 82000 17181
                        </a>
                    </div>
                </div>

                <!-- Other Solutions -->
                <div class="mt-4" data-aos="fade-left" data-aos-delay="100">
                    <h5 style="font-size:0.85rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--gray-mid);margin-bottom:16px;">Other Solutions</h5>
                    <?php
                    foreach (array_filter($solutionsData, fn($k) => $k !== $slug, ARRAY_FILTER_USE_KEY) as $otherSlug => $other): ?>
                        <a href="/solution-details/<?= htmlspecialchars($otherSlug) ?>"
                           style="display:flex;align-items:center;gap:10px;padding:12px;border:1px solid var(--border);border-radius:10px;margin-bottom:8px;font-size:0.85rem;font-weight:600;color:var(--dark);transition:var(--transition);"
                           onmouseover="this.style.borderColor='var(--electric)'"
                           onmouseout="this.style.borderColor='var(--border)'">
                            <i class="bi <?= htmlspecialchars($other['icon']) ?>" style="color:var(--electric);font-size:1.1rem;flex-shrink:0;"></i>
                            <?= htmlspecialchars($other['title']) ?>
                            <i class="bi bi-arrow-right ms-auto" style="color:var(--gray-mid);font-size:0.8rem;"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('solSidebarForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const btn = e.target.querySelector('[type="submit"]');
        const res = document.getElementById('solSidebarResult');
        const orig = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending…';
        try {
            const r = await fetch('/contact/submit.php', { method:'POST', body:new FormData(e.target), headers:{'X-Requested-With':'XMLHttpRequest'} });
            const d = await r.json();
            res.innerHTML = `<div class="alert alert-${d.success?'success':'danger'} mb-3">${d.message}</div>`;
            if (d.success) e.target.reset();
        } catch { res.innerHTML = '<div class="alert alert-danger mb-3">Error. Please try again.</div>'; }
        finally { btn.disabled = false; btn.innerHTML = orig; }
    });
</script>

<section class="cta-section" aria-label="Call to Action">
    <div class="container text-center" data-aos="zoom-in">
        <h2 style="color:white;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:12px;">
            Ready to Implement <span style="color:var(--accent)"><?= htmlspecialchars($sol['title']) ?>?</span>
        </h2>
        <p style="color:rgba(255,255,255,0.75);max-width:520px;margin:0 auto 32px;">Free demo. Customized to your business. No obligation.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/contact-us" class="btn btn-light btn-lg">Get a Free Demo</a>
            <a href="/solutions" class="btn btn-outline-light btn-lg">All Solutions</a>
        </div>
    </div>
</section>

<?php 
include_once('includes/footer.php'); 
?>
