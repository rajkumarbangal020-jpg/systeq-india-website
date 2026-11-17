<?php
/**
 * SYSTEQ INDIA - Industries Page (industries.php)
 * Industries We Serve: Residential, Commercial, Industrial
 */
$current_page = 'industries';
$page_title = 'Industries We Serve | SYSTEQ India Facility Management';
$meta_description = 'Discover how SYSTEQ India adapts its integrated facility management and PSARA security across residential communities, commercial IT tech parks, and industrial hubs in Bengaluru.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Hero Banner -->
<section class="inner-hero-banner">
    <div class="inner-hero-ambient"></div>
    <div class="container position-relative z-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Industries</li>
            </ol>
        </nav>
        <span class="badge-accent-subtle mb-2">Specialized Sector Solutions</span>
        <h1 class="inner-hero-title">Industries We Serve</h1>
        <p class="inner-hero-desc">
            From high-density residential towers and gated villa townships to multi-tenant tech campuses and manufacturing logistics hubs, we deliver precision facility management matched to your operational demands.
        </p>
    </div>
</section>

<!-- Sector Navigation Strip -->
<section class="py-3 bg-light border-bottom sticky-top d-none d-md-block" style="top: 80px; z-index: 1020;">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between overflow-x-auto py-1">
            <span class="small fw-bold text-primary text-uppercase me-3 text-nowrap"><i class="fa-solid fa-layer-group me-1"></i> Sectors:</span>
            <div class="d-flex gap-2 text-nowrap">
                <a href="#residential" class="btn btn-sm btn-outline-pill py-1 px-3"><i class="fa-solid fa-house-chimney-window me-1"></i> Residential Communities</a>
                <a href="#commercial" class="btn btn-sm btn-outline-pill py-1 px-3"><i class="fa-solid fa-building me-1"></i> Commercial &amp; Tech Parks</a>
                <a href="#industrial" class="btn btn-sm btn-outline-pill py-1 px-3"><i class="fa-solid fa-warehouse me-1"></i> Industrial &amp; Logistics</a>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Industry Sections -->
<div class="py-5 bg-white">
    <div class="container py-lg-4">

        <!-- 1. Residential Properties -->
        <section class="mb-5 pb-lg-5" id="residential">
            <div class="row align-items-center g-5 reveal-on-scroll">
                <div class="col-lg-6">
                    <span class="section-tag">
                        <i class="fa-solid fa-house-chimney-user"></i> Sector 01
                    </span>
                    <h2 class="section-title">Residential Properties &amp; Gated Communities</h2>
                    <p class="lead text-dark fw-semibold">
                        Luxury high-rises, gated villa townships, and multi-block apartment societies across Bengaluru.
                    </p>
                    <p class="text-muted">
                        Managing a residential community is about safeguarding resident peace of mind, family safety, and common amenity value. SYSTEQ India works hand-in-hand with Management Committees and Resident Welfare Associations (RWAs) to deliver 24/7 technical stability, pristine swimming pools, spotless lobbies, and vigilant gate security.
                    </p>

                    <h5 class="fw-bold text-primary mb-3 small text-uppercase">Key Residential Capabilities:</h5>
                    <ul class="industry-checklist mb-4">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Continuous MEP Uptime:</strong> DG synchronization, transformer oil checks, booster pump regulation, and zero water cutoffs.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>PSARA Security with App Integration:</strong> Smart visitor and delivery verification via MyGate/ADDA, CCTV assist, and RFID night guard patrols.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Clubhouse &amp; Pool Care:</strong> Daily titration of pool chlorine &amp; pH, gym sanitization, and children play area safety checks.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Open-Book Accounting:</strong> Complete statutory challans (EPF/ESIC) and consumable invoices shared transparently every month.</span>
                        </li>
                    </ul>

                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <span class="small text-muted"><strong>Verified Managed Properties:</strong> Mana Candela (Sarjapur Road), Mahaveer Orchids (Bangalore South), BrenWoods (Electronic City Phase 2).</span>
                    </div>

                    <a href="contact.php?service=Residential+IFMS#quoteForm" class="btn btn-quote-pill">
                        <span>Get Residential SLA Proposal</span>
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=900&q=80" alt="Residential High-Rise Community in Bengaluru" class="w-100" style="height: 440px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 border-secondary-subtle">

        <!-- 2. Commercial Properties -->
        <section class="mb-5 pb-lg-5" id="commercial">
            <div class="row align-items-center g-5 flex-lg-row-reverse reveal-on-scroll">
                <div class="col-lg-6">
                    <span class="section-tag">
                        <i class="fa-solid fa-building"></i> Sector 02
                    </span>
                    <h2 class="section-title">Commercial Complexes &amp; Tech Parks</h2>
                    <p class="lead text-dark fw-semibold">
                        Corporate headquarters, IT tech campuses, multi-tenant commercial towers, and modern co-working complexes.
                    </p>
                    <p class="text-muted">
                        Corporate environments demand zero operational downtime, impeccable indoor air quality, and flawless executive impression. SYSTEQ India provides facility management engineered to protect real estate valuations and create an impressive, productive workplace for corporate tenants and visitors.
                    </p>

                    <h5 class="fw-bold text-primary mb-3 small text-uppercase">Key Commercial Capabilities:</h5>
                    <ul class="industry-checklist mb-4">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>HVAC &amp; Central Chillers:</strong> Preventative chiller tube descaling, AHU filter cleaning, and indoor air quality (IAQ) compliance.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Substation &amp; Critical Power:</strong> 100% DG backup synchronization, APFC capacitor tuning to prevent low power-factor penalties.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Executive Hygiene &amp; Sanitization:</strong> Day and night shift mechanized floor scrubbing and high-frequency executive washroom checks.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Access &amp; Turnstile Control:</strong> Professional security marshals, visitor badging, loading dock coordination, and fire evacuation readiness.</span>
                        </li>
                    </ul>

                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <span class="small text-muted"><strong>Verified Managed Properties:</strong> Tech Horizon IT Campus (Outer Ring Road corridor, Bengaluru).</span>
                    </div>

                    <a href="contact.php?service=Commercial+Facility+Management#quoteForm" class="btn btn-quote-pill">
                        <span>Get Commercial Proposal</span>
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80" alt="Corporate Tech Park in Bengaluru" class="w-100" style="height: 440px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 border-secondary-subtle">

        <!-- 3. Industrial Properties -->
        <section class="mb-5" id="industrial">
            <div class="row align-items-center g-5 reveal-on-scroll">
                <div class="col-lg-6">
                    <span class="section-tag">
                        <i class="fa-solid fa-warehouse"></i> Sector 03
                    </span>
                    <h2 class="section-title">Industrial Facilities &amp; Logistics Hubs</h2>
                    <p class="lead text-dark fw-semibold">
                        Manufacturing plants, logistics warehouses, and distribution centers along Singasandra, Hosur Road, and industrial belts.
                    </p>
                    <p class="text-muted">
                        Industrial operations present severe environmental and safety challenges. From heavy warehouse floor tire-mark scrubbing to high-pressure fire fighting ring main pressure tests, hazardous waste containment, and weighbridge security, SYSTEQ India enforces occupational health and industrial continuity.
                    </p>

                    <h5 class="fw-bold text-primary mb-3 small text-uppercase">Key Industrial Capabilities:</h5>
                    <ul class="industry-checklist mb-4">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Industrial Floor Scrubbing:</strong> Heavy-duty ride-on scrubber sweepers removing oil spills, grime, and forklift rubber marks.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Fire Hydrant Ring Mains:</strong> Weekly diesel fire pump auto-start tests and fire safety equipment audits under factory inspectorate norms.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Perimeter Security &amp; Gate Logistics:</strong> Heavy vehicle entry logging, weighbridge assist, material outward pass verification, and perimeter fence patrolling.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span><strong>Hazardous Waste &amp; Effluent Oversight:</strong> Spill kit readiness, battery room exhaust monitoring, and waste segregation to approved recyclers.</span>
                        </li>
                    </ul>

                    <div class="p-3 bg-light rounded-3 border mb-4">
                        <span class="small text-muted"><strong>Verified Managed Properties:</strong> AECS Logistics &amp; Industrial Hub (Singasandra / Hosur Road, Bengaluru).</span>
                    </div>

                    <a href="contact.php?service=Industrial+Facility+Management#quoteForm" class="btn btn-quote-pill">
                        <span>Get Industrial Proposal</span>
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=900&q=80" alt="Industrial Logistics & Warehousing Hub" class="w-100" style="height: 440px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<!-- Call to Action -->
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner-card reveal-on-scroll">
            <div class="cta-banner-glow"></div>
            <div class="row align-items-center g-4 position-relative z-1">
                <div class="col-lg-8">
                    <h2 class="cta-banner-title">Empower Your Property with SYSTEQ India.</h2>
                    <p class="cta-banner-desc">
                        Schedule a complimentary property operational audit with our senior civil and MEP engineering specialists. We analyze your maintenance costs, inspect critical plant machinery, and tailor a transparent SLA proposal.
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
                    <a href="services.php" class="btn btn-light-pill">
                        <i class="fa-solid fa-layer-group me-2 text-primary"></i> Browse All Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
