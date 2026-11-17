<?php
/**
 * SYSTEQ INDIA - Services Page (services.php)
 * All 12 Specialized Corporate & Residential Facility Management Services
 */
$current_page = 'services';
$page_title = 'Our Services | SYSTEQ India Facility Management & Security';
$meta_description = 'Explore all 12 specialized services of SYSTEQ India: Housekeeping, Gardening, Electrical, Plumbing, Swimming Pool, PSARA Security, Waste, Pest Control, STP/WTP/RO, Mechanical MEP, Staff, and Builder Handovers.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Hero Banner -->
<section class="inner-hero-banner">
    <div class="inner-hero-ambient"></div>
    <div class="container position-relative z-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
        <span class="badge-accent-subtle mb-2">Integrated Facility Management Services (IFMS)</span>
        <h1 class="inner-hero-title">Engineering-Grade Facility Solutions</h1>
        <p class="inner-hero-desc">
            A comprehensive suite of 12 specialized soft, technical, security, and transition services designed to protect infrastructure longevity, maximize uptime, and deliver total financial accountability.
        </p>
    </div>
</section>

<!-- Services Quick Jump Bar -->
<section class="py-3 bg-light border-bottom sticky-top d-none d-md-block" style="top: 80px; z-index: 1020;">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between overflow-x-auto py-1">
            <span class="small fw-bold text-primary text-uppercase me-3 text-nowrap"><i class="fa-solid fa-list me-1"></i> Quick Jump:</span>
            <div class="d-flex gap-2 text-nowrap">
                <a href="#housekeeping" class="btn btn-sm btn-outline-pill py-1 px-3">Housekeeping</a>
                <a href="#gardening-landscaping" class="btn btn-sm btn-outline-pill py-1 px-3">Gardening</a>
                <a href="#electrical-maintenance" class="btn btn-sm btn-outline-pill py-1 px-3">Electrical</a>
                <a href="#plumbing-maintenance" class="btn btn-sm btn-outline-pill py-1 px-3">Plumbing</a>
                <a href="#swimming-pool" class="btn btn-sm btn-outline-pill py-1 px-3">Pool Care</a>
                <a href="#security-services" class="btn btn-sm btn-outline-pill py-1 px-3">Security</a>
                <a href="#stp-wtp-ro" class="btn btn-sm btn-outline-pill py-1 px-3">STP / WTP</a>
                <a href="#builder-handover" class="btn btn-sm btn-outline-pill py-1 px-3">Builder Handover</a>
            </div>
        </div>
    </div>
</section>

<!-- All 12 Services Detailed Section -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-screwdriver-wrench"></i> Full Service Directory
            </span>
            <h2 class="section-title">All 12 Core Facility Services</h2>
            <p class="section-subtitle">
                Each service is backed by standard operating procedures (SOPs), qualified supervisory staff, and preventive maintenance checklists.
            </p>
        </div>

        <div class="row g-4 g-lg-5">
            <?php 
            $sCount = 0;
            foreach ($services as $sId => $srv): 
                $sCount++;
                $isReversed = ($sCount % 2 === 0);
            ?>
                <div class="col-12" id="<?= htmlspecialchars($srv['id']) ?>">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden p-4 p-lg-5 bg-light reveal-on-scroll">
                        <div class="row align-items-center g-4 g-lg-5 <?= $isReversed ? 'flex-lg-row-reverse' : '' ?>">
                            <!-- Service Imagery -->
                            <div class="col-lg-5">
                                <div class="position-relative rounded-4 overflow-hidden shadow-md">
                                    <img src="<?= htmlspecialchars($srv['image']) ?>" alt="<?= htmlspecialchars($srv['title']) ?>" class="w-100" style="height: 320px; object-fit: cover;" onerror="this.src='<?= htmlspecialchars($srv['fallback_unsplash']) ?>'" loading="lazy">
                                    <span class="service-category-tag"><?= htmlspecialchars($srv['category']) ?></span>
                                    <div class="service-icon-floating">
                                        <i class="<?= htmlspecialchars($srv['icon']) ?>"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Service Details -->
                            <div class="col-lg-7">
                                <span class="badge-accent-subtle mb-2">Service #<?= sprintf('%02d', $sCount) ?></span>
                                <h3 class="h2 fw-bold text-primary mb-3"><?= htmlspecialchars($srv['title']) ?></h3>
                                <p class="lead text-dark fw-semibold mb-3"><?= htmlspecialchars($srv['summary']) ?></p>
                                <p class="text-muted mb-4"><?= htmlspecialchars($srv['description']) ?></p>

                                <h5 class="fw-bold text-primary mb-2 small text-uppercase">Key Benefits &amp; Delivery Standards:</h5>
                                <div class="row g-2 mb-4">
                                    <?php foreach ($srv['benefits'] as $benefit): ?>
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-start gap-2 text-muted small">
                                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                                <span><?= htmlspecialchars($benefit) ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <?php foreach ($srv['features'] as $f): ?>
                                        <span class="feature-pill-small bg-white border"><?= htmlspecialchars($f) ?></span>
                                    <?php endforeach; ?>
                                </div>

                                <div class="mt-4 pt-2">
                                    <a href="contact.php?service=<?= urlencode($srv['title']) ?>#quoteForm" class="btn btn-quote-pill">
                                        <span>Request Quote for <?= htmlspecialchars($srv['short_title']) ?></span>
                                        <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose SYSTEQ Service Delivery Standard -->
<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-shield-check"></i> Service Guarantee
            </span>
            <h2 class="section-title">The SYSTEQ Service Standard</h2>
            <p class="section-subtitle">
                Why residential committees and corporate clients choose our facility management model.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3 reveal-on-scroll">
                <div class="why-card">
                    <div class="why-icon-box"><i class="fa-solid fa-clipboard-check"></i></div>
                    <h3 class="why-card-title">Audited Operations</h3>
                    <p class="why-card-desc">Scheduled weekly and monthly supervisory checklists covering every single plant room, pump, and public zone.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal-on-scroll reveal-delay-1">
                <div class="why-card">
                    <div class="why-icon-box"><i class="fa-solid fa-scale-balanced"></i></div>
                    <h3 class="why-card-title">Statutory Compliance</h3>
                    <p class="why-card-desc">100% adherence to minimum wages, EPF, ESIC, and PSARA security mandates. Zero compliance liability for client committees.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal-on-scroll reveal-delay-2">
                <div class="why-card">
                    <div class="why-icon-box"><i class="fa-solid fa-tools"></i></div>
                    <h3 class="why-card-title">Modern Equipment</h3>
                    <p class="why-card-desc">Deployment of industrial auto-scrubbers, pressure washers, submersible pumps, thermal foggers, and acoustic leak detectors.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal-on-scroll reveal-delay-3">
                <div class="why-card">
                    <div class="why-icon-box"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                    <h3 class="why-card-title">Cost Optimization</h3>
                    <p class="why-card-desc">Transparent consumable procurement at wholesale distributor prices without hidden broker markups.</p>
                </div>
            </div>
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
                    <h2 class="cta-banner-title">Need a Tailored Maintenance Proposal?</h2>
                    <p class="cta-banner-desc">
                        Our technical team conducts a free on-site operational evaluation and prepares a customized scope of work tailored to your facility’s exact MEP and soft service needs.
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
                    <a href="projects.php" class="btn btn-light-pill">
                        <i class="fa-solid fa-buildings me-2 text-primary"></i> View Managed Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
