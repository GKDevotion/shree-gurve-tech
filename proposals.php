<?php
require_once __DIR__ . '/config.php';

$pageTitle     = 'Request a Project Proposal | Shree Gurve Technology – Surat IT Company';
$pageDesc      = 'Request a detailed project proposal from Shree Gurve Technology. Tell us about your web development, software, mobile app, or IT project and we\'ll deliver a comprehensive proposal within 24–48 hours.';
$pageKeywords  = 'request project proposal IT Surat, web development proposal India, software project quote, IT company proposal Gujarat';
$pageCanonical = 'https://shreegurvetech.com/proposals';
$currentPage   = 'proposals';

include __DIR__ . '/includes/header.php';
?>

<section class="page-hero" aria-label="Proposals Page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right">
                <h1 class="page-hero-title">Request a Project Proposal</h1>
                <p style="color:rgba(255,255,255,0.7);margin-bottom:16px;">Fill in your project details and we'll deliver a comprehensive, no-obligation proposal within 24–48 hours.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Proposals</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Process Steps -->
<section style="background:var(--gray-light);padding:50px 0;" aria-label="Proposal Process">
    <div class="container">
        <div class="row g-4 text-center">
            <?php
            $steps = [
                ['num'=>'01','icon'=>'bi-file-earmark-text','title'=>'Submit Details',    'desc'=>'Fill the proposal form with your project requirements.'],
                ['num'=>'02','icon'=>'bi-telephone',        'title'=>'Discovery Call',    'desc'=>'We schedule a free call to understand your vision clearly.'],
                ['num'=>'03','icon'=>'bi-file-earmark-ruled','title'=>'Receive Proposal', 'desc'=>'Get a detailed proposal with scope, timeline & pricing.'],
                ['num'=>'04','icon'=>'bi-rocket-takeoff',   'title'=>'Project Kickoff',   'desc'=>'Once approved, we begin work on your project immediately.'],
            ];
            foreach ($steps as $i => $s): ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
                    <div class="process-step">
                        <div class="process-num"><?= $s['num'] ?></div>
                        <h5><?= $s['title'] ?></h5>
                        <p><?= $s['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Proposal Form -->
<section class="section-py" aria-label="Proposal Request Form">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-8">
                <div class="contact-card" data-aos="fade-up">
                    <div class="mb-4">
                        <div class="section-label">Proposal Request</div>
                        <h2 style="font-size:1.6rem;font-weight:800;">Tell Us About Your Project</h2>
                        <p style="color:var(--gray-mid);font-size:0.875rem;">The more detail you provide, the more accurate and useful our proposal will be.</p>
                    </div>

                    <div id="proposalResult"></div>

                    <form id="proposalForm" novalidate>
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(generateCSRFToken()) ?>">
                        <input type="hidden" name="subject"    value="Project Proposal Request">

                        <h5 style="font-size:0.85rem;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;color:var(--gray-mid);margin-bottom:16px;padding-bottom:10px;border-bottom:1px solid var(--border);">
                            Contact Information
                        </h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Your full name" required minlength="2" maxlength="100">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="your@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" placeholder="+91 98765 43210">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Company / Business Name</label>
                                <input type="text" class="form-control" name="company" placeholder="Your company name" maxlength="100">
                            </div>
                        </div>

                        <h5 style="font-size:0.85rem;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;color:var(--gray-mid);margin-bottom:16px;padding-bottom:10px;border-bottom:1px solid var(--border);">
                            Project Details
                        </h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Service Required <span class="text-danger">*</span></label>
                                <select class="form-select" name="service" required>
                                    <option value="">-- Select Service --</option>
                                    <optgroup label="Development">
                                        <option>Web Development</option>
                                        <option>Software Development</option>
                                        <option>Mobile App Development</option>
                                        <option>Blockchain Development</option>
                                    </optgroup>
                                    <optgroup label="Design & Marketing">
                                        <option>UI/UX Design</option>
                                        <option>Digital Marketing</option>
                                    </optgroup>
                                    <optgroup label="Cloud & Security">
                                        <option>Cloud Services</option>
                                        <option>Cybersecurity</option>
                                        <option>IT Support & Maintenance</option>
                                    </optgroup>
                                    <optgroup label="Intelligence">
                                        <option>Data & Analytics</option>
                                        <option>AI & Automation</option>
                                        <option>IT Consulting</option>
                                    </optgroup>
                                    <optgroup label="Solutions">
                                        <option>CRM Solution</option>
                                        <option>ERP Solution</option>
                                        <option>HRMS Solution</option>
                                        <option>E-Commerce System</option>
                                        <option>Education Management System</option>
                                        <option>Healthcare Management System</option>
                                    </optgroup>
                                    <option value="Other">Other / Not Sure</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Estimated Budget</label>
                                <select class="form-select" name="budget">
                                    <option value="">-- Select Budget Range --</option>
                                    <option>Under ₹25,000</option>
                                    <option>₹25,000 – ₹75,000</option>
                                    <option>₹75,000 – ₹2,00,000</option>
                                    <option>₹2,00,000 – ₹5,00,000</option>
                                    <option>₹5,00,000 – ₹15,00,000</option>
                                    <option>Above ₹15,00,000</option>
                                    <option>Not Sure / Open to Discussion</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Expected Timeline</label>
                                <select class="form-select" name="timeline">
                                    <option value="">-- Select Timeline --</option>
                                    <option>ASAP (within 1 month)</option>
                                    <option>1–3 Months</option>
                                    <option>3–6 Months</option>
                                    <option>6+ Months</option>
                                    <option>Not Sure / Flexible</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Platform / Target</label>
                                <select class="form-select" name="platform">
                                    <option value="">-- Select Platform --</option>
                                    <option>Website (Web)</option>
                                    <option>Mobile App (Android)</option>
                                    <option>Mobile App (iOS)</option>
                                    <option>Mobile App (Both)</option>
                                    <option>Desktop Software</option>
                                    <option>Web + Mobile App</option>
                                    <option>Not Sure</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Project Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" rows="6"
                                          placeholder="Please describe your project in detail: What does your business do? What problem are you trying to solve? What key features do you need? Do you have reference websites or apps you like?&#10;&#10;The more detail you share, the more accurate our proposal will be."
                                          required minlength="50" maxlength="5000"></textarea>
                                <div class="form-text">Minimum 50 characters. Be as detailed as possible.</div>
                                <div class="invalid-feedback">Please describe your project (min. 50 characters).</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Reference Websites / Apps (optional)</label>
                                <input type="text" class="form-control" name="references"
                                       placeholder="e.g. https://example.com, https://anothersite.com" maxlength="500">
                                <div class="form-text">Links to websites or apps you like or want to be inspired by.</div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            Submit Proposal Request <i class="bi bi-send-fill ms-2"></i>
                        </button>
                        <p style="font-size:0.78rem;color:var(--gray-mid);margin-top:12px;margin-bottom:0;">
                            <i class="bi bi-shield-check me-1" style="color:var(--accent);"></i>
                            Your information is 100% confidential. We sign NDAs on request.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div class="col-lg-4">
                <div data-aos="fade-left">
                    <h4 style="font-size:1.1rem;font-weight:700;margin-bottom:20px;">What's Included in Our Proposal</h4>
                    <?php
                    $includes = [
                        ['icon'=>'bi-list-check',      'title'=>'Detailed Scope of Work',   'desc'=>'Exact features, pages, and functionalities we will build.'],
                        ['icon'=>'bi-calendar3',       'title'=>'Project Timeline',          'desc'=>'Week-by-week delivery milestones and go-live date.'],
                        ['icon'=>'bi-currency-rupee',  'title'=>'Transparent Pricing',       'desc'=>'Fixed-price quote with no hidden costs or surprises.'],
                        ['icon'=>'bi-stack',           'title'=>'Tech Stack Recommendation', 'desc'=>'Best technology choices for your specific project needs.'],
                        ['icon'=>'bi-person-gear',     'title'=>'Team Allocation',           'desc'=>'Who will work on your project and their expertise.'],
                        ['icon'=>'bi-patch-question',  'title'=>'Q&A Section',              'desc'=>'Answers to all your specific questions and concerns.'],
                    ];
                    foreach ($includes as $inc): ?>
                        <div style="display:flex;gap:14px;padding:14px;border:1px solid var(--border);border-radius:var(--radius-md);margin-bottom:10px;background:var(--white);">
                            <div style="width:40px;height:40px;border-radius:8px;background:linear-gradient(135deg,var(--primary),var(--electric));color:white;display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;">
                                <i class="bi <?= $inc['icon'] ?>"></i>
                            </div>
                            <div>
                                <strong style="font-size:0.85rem;color:var(--dark);display:block;"><?= $inc['title'] ?></strong>
                                <span style="font-size:0.78rem;color:var(--gray-mid);"><?= $inc['desc'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div style="background:linear-gradient(135deg,var(--primary),var(--electric));border-radius:var(--radius-md);padding:24px;color:white;margin-top:24px;text-align:center;">
                        <i class="bi bi-clock" style="font-size:1.8rem;margin-bottom:10px;display:block;"></i>
                        <strong style="display:block;font-size:1rem;margin-bottom:6px;">Fast Turnaround</strong>
                        <p style="font-size:0.82rem;color:rgba(255,255,255,0.8);margin:0;">We deliver proposals within <strong style="color:var(--accent);">24–48 hours</strong> of receiving your details.</p>
                    </div>

                    <div style="margin-top:20px;padding:16px;background:var(--gray-light);border-radius:var(--radius-md);text-align:center;">
                        <p style="font-size:0.82rem;color:var(--gray-dark);margin-bottom:12px;"><strong>Prefer to talk directly?</strong></p>
                        <a href="tel:+918200017181" class="btn btn-primary btn-sm w-100 mb-2">
                            <i class="bi bi-telephone-fill me-2"></i>+91 82000 17181
                        </a>
                        <a href="https://wa.me/918200017181?text=Hi,%20I%20need%20a%20project%20proposal" target="_blank" rel="noopener" class="btn btn-sm w-100" style="background:#25D366;color:white;border:none;">
                            <i class="bi bi-whatsapp me-2"></i>WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('proposalForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    if (!e.target.checkValidity()) { e.target.classList.add('was-validated'); return; }
    const btn = e.target.querySelector('[type="submit"]');
    const res = document.getElementById('proposalResult');
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting…';
    // Merge extra fields into message
    const fd = new FormData(e.target);
    const extra = `\n\nCompany: ${fd.get('company')||'N/A'}\nBudget: ${fd.get('budget')||'N/A'}\nTimeline: ${fd.get('timeline')||'N/A'}\nPlatform: ${fd.get('platform')||'N/A'}\nReferences: ${fd.get('references')||'N/A'}`;
    fd.set('message', fd.get('message') + extra);
    try {
        const r = await fetch('/contact/submit.php', { method:'POST', body:fd, headers:{'X-Requested-With':'XMLHttpRequest'} });
        const d = await r.json();
        res.innerHTML = `<div class="alert alert-${d.success?'success':'danger'} mb-4">${d.message}</div>`;
        res.scrollIntoView({ behavior:'smooth', block:'nearest' });
        if (d.success) { e.target.reset(); e.target.classList.remove('was-validated'); }
    } catch { res.innerHTML = '<div class="alert alert-danger mb-4">Something went wrong. Please try again.</div>'; }
    finally { btn.disabled = false; btn.innerHTML = orig; }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
