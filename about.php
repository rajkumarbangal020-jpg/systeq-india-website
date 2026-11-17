<?php
/**
 * SYSTEQ INDIA - About Us Page (about.php)
 * Company: SYSTEQ Facility Management & Security Services (India) Private Limited
 */
$current_page = 'about';
$page_title = 'About Us | SYSTEQ India Facility Management & Security Services';
$meta_description = 'Learn about SYSTEQ India, our engineering-led facility management philosophy, leadership under Gyanti Chaubey and Nitesh Chaubey, core values, and proven working methodology.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Hero Banner -->
<section class="inner-hero-banner">
    <div class="inner-hero-ambient"></div>
    <div class="container position-relative z-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
        <span class="badge-accent-subtle mb-2">Corporate Profile &amp; Ethos</span>
        <h1 class="inner-hero-title">About SYSTEQ India</h1>
        <p class="inner-hero-desc">
            A technology-driven, engineering-centric facility management and PSARA security enterprise committed to radical transparency, statutory compliance, and operational excellence across Bengaluru.
        </p>
    </div>
</section>

<!-- Company Overview & Background Section -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 reveal-on-scroll">
                <span class="section-tag">
                    <i class="fa-solid fa-landmark"></i> Company Background
                </span>
                <h2 class="section-title">Built On Engineering Integrity &amp; Customer Trust</h2>
                <p class="lead text-dark fw-semibold">
                    <strong><?= htmlspecialchars($company['name']) ?></strong> is a Bengaluru-headquartered enterprise redefining corporate facility management and residential estate operations.
                </p>
                <p class="text-muted">
                    The traditional facility management landscape in India has long suffered from fragmented manpower agencies, non-technical oversight, opaque contractor markups, and inadequate statutory records. SYSTEQ India was formed specifically to eliminate these systemic inefficiencies.
                </p>
                <p class="text-muted">
                    By embedding qualified civil and electro-mechanical engineers directly into daily operations, we deliver predictive preventive maintenance, rigorous statutory compliance (EPF, ESIC, PSARA), and an open-book billing system where every single consumable invoice and statutory challan is accessible to our clients.
                </p>

                <div class="row g-3 mt-4 pt-2">
                    <div class="col-sm-4">
                        <div class="p-3 bg-light rounded-3 border text-center">
                            <div class="h3 fw-bold text-accent mb-0">50+</div>
                            <div class="small fw-semibold text-primary">Managed Sites in Karnataka</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-light rounded-3 border text-center">
                            <div class="h3 fw-bold text-accent mb-0">100%</div>
                            <div class="small fw-semibold text-primary">Audited Transparency</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-light rounded-3 border text-center">
                            <div class="h3 fw-bold text-accent mb-0">32+</div>
                            <div class="small fw-semibold text-primary">Years Executive Wisdom</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 reveal-on-scroll reveal-delay-2">
                <div class="position-relative">
                    <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
                        <img src="assets/images/about-inspection.jpg" alt="SYSTEQ Corporate Engineering Audit" class="w-100" onerror="this.src='https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="position-absolute bottom-0 end-0 bg-primary text-white p-4 rounded-4 shadow-lg d-none d-sm-block me-3 mb-3" style="max-width: 280px; background-color: var(--primary-blue) !important;">
                        <i class="fa-solid fa-shield-halved fs-2 text-accent mb-2 d-block"></i>
                        <h5 class="fw-bold mb-1 text-white">PSARA Certified</h5>
                        <p class="small mb-0 text-white-75">Legally authorized security force with regular physical drills, background verification, and fire safety training.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-compass"></i> Guiding Principles
            </span>
            <h2 class="section-title">Our Vision &amp; Mission</h2>
            <p class="section-subtitle">
                Guiding every operational protocol, safety checklist, and client interaction we undertake.
            </p>
        </div>

        <div class="row g-4">
            <!-- Vision -->
            <div class="col-lg-6 reveal-on-scroll">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white position-relative overflow-hidden">
                    <div class="feature-icon-wrapper mb-4">
                        <div class="stat-icon-bubble">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                    </div>
                    <h3 class="h3 fw-bold text-primary mb-3">Our Vision</h3>
                    <p class="lead text-primary fw-semibold mb-3">
                        To be India's benchmark engineering-led facility management and security enterprise.
                    </p>
                    <p class="text-muted">
                        We envision living and working environments where every infrastructure asset—from high-voltage substations to clean common corridors—operates seamlessly, securely, and sustainably, powered by transparent digital governance and zero operational disruptions.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="col-lg-6 reveal-on-scroll reveal-delay-2">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white position-relative overflow-hidden">
                    <div class="feature-icon-wrapper mb-4">
                        <div class="stat-icon-bubble">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                    </div>
                    <h3 class="h3 fw-bold text-primary mb-3">Our Mission</h3>
                    <p class="lead text-primary fw-semibold mb-3">
                        Delivering safe, seamless, eco-friendly, and transparent environments.
                    </p>
                    <p class="text-muted">
                        Our mission is to put the property owner at the center of every decision by combining engineering-grade preventive maintenance, disciplined PSARA-trained manpower, continuous employee upskilling, and a real-time digital management portal that empowers customer committees.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-users-crown"></i> Executive Leadership
            </span>
            <h2 class="section-title">Leadership Behind SYSTEQ India</h2>
            <p class="section-subtitle">
                Distinguished professionals uniting civil engineering expertise, financial governance, legal acumen, and operational field rigor.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($leadership as $lIndex => $leader): ?>
                <div class="col-md-6 col-lg-3 reveal-on-scroll reveal-delay-<?= $lIndex + 1 ?>">
                    <div class="leadership-card tilt-3d shine-sweep-card shadow-sm h-100">
                        <div class="leadership-img-wrapper">
                            <img src="<?= e($leader['image']) ?>" alt="<?= e($leader['name']) ?>" loading="lazy">
                        </div>
                        <div class="leadership-body">
                            <h3 class="leadership-name"><?= e($leader['name']) ?></h3>
                            <div class="leadership-role"><?= e($leader['role']) ?></div>
                            <div class="small fw-bold text-muted mb-2 font-monospace"><?= e($leader['qualification']) ?></div>
                            <div class="leadership-quote"><?= e($leader['quote']) ?></div>
                            <p class="leadership-bio"><?= e($leader['bio']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-hand-holding-heart"></i> Foundational Pillars
            </span>
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-subtitle">
                Six foundational tenets that guide how our staff, engineers, and management conduct operations every day.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4 reveal-on-scroll">
                <div class="value-box">
                    <div class="value-icon-circle">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="value-title">Radical Transparency</h3>
                    <p class="value-desc">
                        Zero hidden contractor markups or kickbacks. Detailed statutory EPF/ESIC challans, consumable bills, and utility logs are shared monthly with the client committee.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 reveal-on-scroll reveal-delay-1">
                <div class="value-box">
                    <div class="value-icon-circle">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="value-title">Safety First Culture</h3>
                    <p class="value-desc">
                        From high-voltage electrical lock-out/tag-out (LOTO) protocols to PSARA security drills and certified personal protective equipment (PPE), safety is non-negotiable.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 reveal-on-scroll reveal-delay-2">
                <div class="value-box">
                    <div class="value-icon-circle">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h3 class="value-title">Engineering Excellence</h3>
                    <p class="value-desc">
                        Root-cause analysis on recurring pump or electrical trips rather than superficial band-aids, maximizing equipment lifespan and reducing capital replacement expenses.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 reveal-on-scroll reveal-delay-1">
                <div class="value-box">
                    <div class="value-icon-circle">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h3 class="value-title">Eco-Friendly &amp; Sustainable</h3>
                    <p class="value-desc">
                        Use of certified biodegradable cleaning chemicals, organic waste composting (OWC), solar panel dusting, and recycled STP water testing for zero-waste communities.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 reveal-on-scroll reveal-delay-2">
                <div class="value-box">
                    <div class="value-icon-circle">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <h3 class="value-title">Staff Dignity &amp; Welfare</h3>
                    <p class="value-desc">
                        Timely statutory wages, EPF/ESIC social security, hygienic staff resting quarters, and merit-based career progression leading to exceptionally low staff attrition rates.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 reveal-on-scroll reveal-delay-3">
                <div class="value-box">
                    <div class="value-icon-circle">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3 class="value-title">Agile Response Times</h3>
                    <p class="value-desc">
                        Strict SLA matrices for both routine maintenance requests and sudden emergencies, supported by a 24/7 dedicated escalation desk in Bengaluru.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Working Methodology Section -->
<section class="methodology-section">
    <div class="container">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-diagram-project"></i> Operational Framework
            </span>
            <h2 class="section-title">Our Working Methodology</h2>
            <p class="section-subtitle">
                How SYSTEQ India systematically assesses, deploys, and manages large-scale properties without service downtime.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($methodology as $mIndex => $step): ?>
                <div class="col-md-6 col-lg-3 reveal-on-scroll reveal-delay-<?= $mIndex + 1 ?>">
                    <div class="methodology-card">
                        <span class="step-num-bubble"><?= htmlspecialchars($step['step']) ?></span>
                        <div class="methodology-icon-box">
                            <i class="<?= htmlspecialchars($step['icon']) ?>"></i>
                        </div>
                        <h3 class="methodology-title"><?= htmlspecialchars($step['title']) ?></h3>
                        <p class="methodology-desc"><?= htmlspecialchars($step['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner-card reveal-on-scroll">
            <div class="cta-banner-glow"></div>
            <div class="row align-items-center g-4 position-relative z-1">
                <div class="col-lg-8">
                    <h2 class="cta-banner-title">Ready to Elevate Your Property Management?</h2>
                    <p class="cta-banner-desc">
                        Speak directly with our technical leadership team to discuss custom facility management, security deployment, or builder handover snag audits.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="contact.php#quoteForm" class="btn btn-accent-pill">
                            <span>Get a Free Quote</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $company['phone']) ?>" class="cta-contact-phone">
                            <i class="fa-solid fa-phone"></i>
                            <span><?= htmlspecialchars($company['phone_formatted']) ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end d-none d-lg-block">
                    <a href="contact.php" class="btn btn-light-pill">
                        <i class="fa-solid fa-location-dot me-2 text-primary"></i> Visit Our Bengaluru Office
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
