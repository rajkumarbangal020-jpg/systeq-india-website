<?php
/**
 * SYSTEQ INDIA - Homepage (index.php)
 * Premium Corporate Website for SYSTEQ Facility Management & Security Services (India) Private Limited
 */
$current_page = 'index';
$page_title = 'SYSTEQ India | Premier Corporate Facility Management & Security Services';
$meta_description = 'Technology-driven, PSARA-certified facility management and security service provider in Bengaluru. Comprehensive IFMS, engineering MEP maintenance, and builder handovers.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ========================================================================
     SECTION 02: CINEMATIC 3D HERO
     Combining Architectural 3D WebGL Canvas, 4-Scene Cinematic Video Slider,
     Glassmorphic Typography & Floating 3D Micro-Badges
     ======================================================================== -->
<section class="hero-section-fullbg hero-cinematic-3d-wrap" id="heroCinematicSection">
    <!-- 4-Slide Video Background Slider Container -->
    <div class="hero-video-slider" id="heroVideoSlider" aria-hidden="true">
        <!-- Slide 1: Residential Facility Management -->
        <div class="hero-video-slide active" data-slide-index="0" data-slide-title="Residential Facility Management">
            <video class="hero-bg-video" autoplay muted loop playsinline preload="auto" poster="assets/images/poster-residential.jpg">
                <source src="assets/videos/slide-residential.mp4" type="video/mp4">
            </video>
            <div class="hero-video-fallback" style="background-image: url('assets/images/poster-residential.jpg');"></div>
        </div>

        <!-- Slide 2: Professional Housekeeping -->
        <div class="hero-video-slide" data-slide-index="1" data-slide-title="Professional Housekeeping">
            <video class="hero-bg-video" muted loop playsinline preload="metadata" poster="assets/images/poster-housekeeping.jpg">
                <source src="assets/videos/slide-housekeeping.mp4" type="video/mp4">
            </video>
            <div class="hero-video-fallback" style="background-image: url('assets/images/poster-housekeeping.jpg');"></div>
        </div>

        <!-- Slide 3: Security Management -->
        <div class="hero-video-slide" data-slide-index="2" data-slide-title="Security Management">
            <video class="hero-bg-video" muted loop playsinline preload="metadata" poster="assets/images/poster-security.jpg">
                <source src="assets/videos/slide-security.mp4" type="video/mp4">
            </video>
            <div class="hero-video-fallback" style="background-image: url('assets/images/poster-security.jpg');"></div>
        </div>

        <!-- Slide 4: Technical Facility Maintenance -->
        <div class="hero-video-slide" data-slide-index="3" data-slide-title="Technical Facility Maintenance">
            <video class="hero-bg-video" muted loop playsinline preload="metadata" poster="assets/images/poster-technical.jpg">
                <source src="assets/videos/slide-technical.mp4" type="video/mp4">
            </video>
            <div class="hero-video-fallback" style="background-image: url('assets/images/poster-technical.jpg');"></div>
        </div>
    </div>

    <!-- Soft Left-to-Right Glassmorphism Gradient Mask for Pristine Readability -->
    <div class="hero-gradient-overlay"></div>

    <!-- Hero Content Container -->
    <div class="container position-relative z-2">
        <div class="row align-items-center g-4 g-xl-5">
            <!-- Left Hero Column: Brand Messaging & Action CTAs -->
            <div class="col-lg-7 col-xl-6 hero-text-col reveal-on-scroll">
                <!-- Pill Badge: SMART FACILITY MANAGEMENT -->
                <div class="hero-pill-badge mb-3">
                    <span class="badge-dot pulse-glow"></span>
                    <span>SMART FACILITY MANAGEMENT</span>
                </div>

                <!-- Main Heading: SYSTEQ India Building Better Spaces, Together. -->
                <h1 class="hero-heading-exact">
                    SYSTEQ <span class="hero-text-accent">India</span><br>
                    Building Better Spaces, Together.
                </h1>

                <!-- Subtitle Description -->
                <p class="hero-desc-exact">
                    Professional facility management services tailored to your needs.
                </p>

                <!-- Action Buttons: Our Services & Contact Us -->
                <div class="hero-btn-group-exact">
                    <a href="services.php" class="btn btn-hero-primary-pill btn-magnetic">
                        <span class="btn-magnetic-inner">
                            <span>Our Services</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </span>
                    </a>
                    <a href="contact.php" class="btn btn-hero-outline-pill btn-magnetic">
                        <span class="btn-magnetic-inner">
                            <span>Contact Us</span>
                        </span>
                    </a>
                </div>

                <!-- Quick Assurance Pills -->
                <div class="hero-trust-row mt-4 pt-2 d-flex flex-wrap align-items-center gap-3">
                    <span class="hero-mini-tag">
                        <i class="fa-solid fa-shield-halved text-accent me-1"></i> PSARA Certified
                    </span>
                    <span class="hero-mini-tag">
                        <i class="fa-solid fa-award text-accent me-1"></i> ISO 9001:2015
                    </span>
                    <span class="hero-mini-tag">
                        <i class="fa-solid fa-bolt text-accent me-1"></i> 24/7 Operations Desk
                    </span>
                </div>
            </div>

            <!-- Right Hero Column: Clear Video Showcase & Floating Glass Cards -->
            <div class="col-lg-5 col-xl-6 d-none d-lg-block">
                <div class="hero-interactive-3d-container perspective-container">
                    <!-- Floating Information Card 1: SLA Assurance (Subtle & Compact) -->
                    <div class="hero-floating-glass-subtle card-pos-top-subtle floating-3d-slow tilt-3d">
                        <div class="d-flex align-items-center gap-2">
                            <div class="hero-card-icon-subtle text-primary">
                                <i class="fa-solid fa-chart-line-up"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-primary smaller-title">99.8% SLA Delivery</div>
                                <div class="text-muted smallest-sub">Zero-Downtime MEP Upkeep</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Information Card 2: PSARA Licensed (Subtle & Compact) -->
                    <div class="hero-floating-glass-subtle card-pos-bottom-subtle floating-3d-med tilt-3d">
                        <div class="d-flex align-items-center gap-2">
                            <div class="hero-card-icon-subtle text-success">
                                <i class="fa-solid fa-user-shield"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-primary smaller-title">100% Background Verified</div>
                                <div class="text-muted smallest-sub">PSARA Licensed Guards &amp; Crew</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Slider Controls (Indicator Bars, Caption & Arrows) -->
    <div class="hero-slider-controls">
        <div class="container d-flex align-items-center justify-content-between flex-wrap gap-2">
            <!-- Slide Caption Tag -->
            <div class="hero-slide-caption-tag" id="heroSlideCaption">
                <span class="slide-num">01 / 04</span>
                <span class="slide-sep">•</span>
                <span class="slide-name" id="heroSlideName">Residential Facility Management</span>
            </div>

            <!-- Slide Indicator Progress Bars -->
            <div class="hero-slider-indicators" role="tablist" aria-label="Hero Video Slider">
                <button type="button" class="hero-indicator-btn active" data-slide-to="0" aria-label="Slide 1: Residential Facility Management" aria-selected="true">
                    <span class="indicator-bar"><span class="indicator-progress"></span></span>
                    <span class="indicator-label">Residential</span>
                </button>
                <button type="button" class="hero-indicator-btn" data-slide-to="1" aria-label="Slide 2: Professional Housekeeping" aria-selected="false">
                    <span class="indicator-bar"><span class="indicator-progress"></span></span>
                    <span class="indicator-label">Housekeeping</span>
                </button>
                <button type="button" class="hero-indicator-btn" data-slide-to="2" aria-label="Slide 3: Security Management" aria-selected="false">
                    <span class="indicator-bar"><span class="indicator-progress"></span></span>
                    <span class="indicator-label">Security</span>
                </button>
                <button type="button" class="hero-indicator-btn" data-slide-to="3" aria-label="Slide 4: Technical Facility Maintenance" aria-selected="false">
                    <span class="indicator-bar"><span class="indicator-progress"></span></span>
                    <span class="indicator-label">Technical</span>
                </button>
            </div>

            <!-- Arrow Navigation -->
            <div class="hero-slider-arrows">
                <button type="button" class="hero-slider-arrow prev" id="heroSliderPrev" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="hero-slider-arrow next" id="heroSliderNext" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 03: 3D FLOATING STATISTICS
     Floating Glassmorphism Metrics with Count-Up Easing & 3D Tilt
     ======================================================================== -->
<section class="stats-section-standalone" id="statsSection">
    <div class="container">
        <div class="hero-stats-pill-inner glass-panel-light tilt-3d shadow-lg">
            <div class="row align-items-center g-3 g-lg-4 text-center text-sm-start">
                <!-- Stat 1: 500+ Happy Clients -->
                <div class="col-6 col-lg-3 stat-pill-col border-end-desktop">
                    <div class="stat-pill-item tilt-3d-inner">
                        <div class="stat-pill-svg">
                            <svg width="42" height="42" viewBox="0 0 44 44" fill="none" aria-hidden="true">
                                <rect x="6" y="16" width="13" height="22" rx="3" fill="#078BFF" fill-opacity="0.12" stroke="#078BFF" stroke-width="2"/>
                                <rect x="22" y="8" width="16" height="30" rx="3" fill="#078BFF" fill-opacity="0.22" stroke="#078BFF" stroke-width="2"/>
                                <circle cx="12.5" cy="23" r="2" fill="#078BFF"/>
                                <circle cx="12.5" cy="30" r="2" fill="#078BFF"/>
                                <circle cx="30" cy="16" r="2" fill="#078BFF"/>
                                <circle cx="30" cy="23" r="2" fill="#078BFF"/>
                                <circle cx="30" cy="30" r="2" fill="#078BFF"/>
                            </svg>
                        </div>
                        <div class="stat-pill-details">
                            <div class="stat-pill-val">
                                <span class="counter-val" data-target="500" data-suffix="+">500</span><span class="stat-pill-suffix">+</span>
                            </div>
                            <div class="stat-pill-title">Happy Clients</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 2: 99.8% Service Quality -->
                <div class="col-6 col-lg-3 stat-pill-col border-end-desktop">
                    <div class="stat-pill-item tilt-3d-inner">
                        <div class="stat-pill-svg">
                            <svg width="42" height="42" viewBox="0 0 44 44" fill="none" aria-hidden="true">
                                <path d="M22 5L35 10V20.5C35 29.5 29.5 36.8 22 39.5C14.5 36.8 9 29.5 9 20.5V10L22 5Z" fill="#078BFF" fill-opacity="0.1" stroke="#078BFF" stroke-width="2.2" stroke-linejoin="round"/>
                                <path d="M16 22L20.5 26.5L29 17" stroke="#10B981" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="stat-pill-details">
                            <div class="stat-pill-val">
                                <span class="counter-val" data-target="99" data-suffix=".8%">99</span><span class="stat-pill-suffix">.8%</span>
                            </div>
                            <div class="stat-pill-title">Service Quality</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 3: 24/7 Support -->
                <div class="col-6 col-lg-3 stat-pill-col border-end-desktop">
                    <div class="stat-pill-item tilt-3d-inner">
                        <div class="stat-pill-svg">
                            <svg width="42" height="42" viewBox="0 0 44 44" fill="none" aria-hidden="true">
                                <circle cx="22" cy="22" r="14" stroke="#078BFF" stroke-width="2" stroke-dasharray="3.5 3.5"/>
                                <path d="M22 13V22L26.5 25" stroke="#078BFF" stroke-width="2" stroke-linecap="round"/>
                                <path d="M12 22C12 16.477 16.477 12 22 12C27.523 12 32 16.477 32 22" stroke="#082B59" stroke-width="2.2" stroke-linecap="round"/>
                                <rect x="9.5" y="19" width="4.5" height="8" rx="2" fill="#078BFF"/>
                                <rect x="30" y="19" width="4.5" height="8" rx="2" fill="#078BFF"/>
                            </svg>
                        </div>
                        <div class="stat-pill-details">
                            <div class="stat-pill-val">
                                <span class="counter-val" data-target="24" data-suffix="/7">24</span><span class="stat-pill-suffix">/7</span>
                            </div>
                            <div class="stat-pill-title">Support</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 4: 15+ Years Experience -->
                <div class="col-6 col-lg-3 stat-pill-col">
                    <div class="stat-pill-item tilt-3d-inner">
                        <div class="stat-pill-svg">
                            <svg width="42" height="42" viewBox="0 0 44 44" fill="none" aria-hidden="true">
                                <path d="M22 6L25.8 14.5L34.5 15.6L28 21.6L29.6 30.5L22 26L14.4 30.5L16 21.6L9.5 15.6L18.2 14.5L22 6Z" fill="#FFA800" stroke="#E69500" stroke-width="1.6" stroke-linejoin="round"/>
                                <path d="M17.5 28L15 37L22 32.5L29 37L26.5 28" fill="#078BFF" stroke="#0077D6" stroke-width="1.4"/>
                            </svg>
                        </div>
                        <div class="stat-pill-details">
                            <div class="stat-pill-val">
                                <span class="counter-val" data-target="15" data-suffix="+">15</span><span class="stat-pill-suffix">+</span>
                            </div>
                            <div class="stat-pill-title">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 04: WHY CHOOSE SYSTEQ INDIA?
     4 Premium 3D Perspective Tilt Cards with Gradient Accents
     ======================================================================== -->
<section class="why-choose-section" id="whyChooseSection">
    <div class="container position-relative z-2">
        <div class="why-header-wrapper text-center reveal-on-scroll">
            <h2 class="why-main-heading">
                Why Choose <span class="why-brand-accent">SYSTEQ India?</span>
            </h2>
            <p class="why-main-subtitle">
                Your trusted partner for comprehensive facility management solutions.
            </p>
        </div>

        <div class="row g-3 g-lg-4 justify-content-center">
            <!-- Card 1: Professional & Trained Team -->
            <div class="col-6 col-lg-3 reveal-on-scroll reveal-delay-1">
                <div class="why-pill-card tilt-3d shine-sweep-card">
                    <div class="why-pill-icon">
                        <i class="fa-solid fa-user-shield text-accent fs-2"></i>
                    </div>
                    <h3 class="why-pill-title">Professional<br>&amp; Trained Team</h3>
                    <div class="why-card-badge-subtle">PSARA Verified</div>
                </div>
            </div>

            <!-- Card 2: Advanced Technology -->
            <div class="col-6 col-lg-3 reveal-on-scroll reveal-delay-2">
                <div class="why-pill-card tilt-3d shine-sweep-card">
                    <div class="why-pill-icon">
                        <i class="fa-solid fa-microchip text-accent fs-2"></i>
                    </div>
                    <h3 class="why-pill-title">Advanced<br>Technology</h3>
                    <div class="why-card-badge-subtle">IoT Telemetry</div>
                </div>
            </div>

            <!-- Card 3: Customized Solutions -->
            <div class="col-6 col-lg-3 reveal-on-scroll reveal-delay-3">
                <div class="why-pill-card tilt-3d shine-sweep-card">
                    <div class="why-pill-icon">
                        <i class="fa-solid fa-sliders text-accent fs-2"></i>
                    </div>
                    <h3 class="why-pill-title">Customized<br>Solutions</h3>
                    <div class="why-card-badge-subtle">Tailored SLAs</div>
                </div>
            </div>

            <!-- Card 4: Cost-Effective Services -->
            <div class="col-6 col-lg-3 reveal-on-scroll reveal-delay-4">
                <div class="why-pill-card tilt-3d shine-sweep-card">
                    <div class="why-pill-icon">
                        <i class="fa-solid fa-chart-line-up text-accent fs-2"></i>
                    </div>
                    <h3 class="why-pill-title">Cost-Effective<br>Services</h3>
                    <div class="why-card-badge-subtle">Open-Book Audit</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 05: OUR SERVICES (ALL TWELVE PROFESSIONAL SERVICE CARDS)
     3D Perspective Hover, Light Reflection, Image Zoom & Scope Link
     ======================================================================== -->
<section class="services-section" id="servicesPreview">
    <div class="container">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-layer-group me-1"></i> Comprehensive Facility Solutions
            </span>
            <h2 class="section-title">Our Facility Management Services</h2>
            <p class="section-subtitle">
                From daily mechanized soft sanitization to high-voltage HT/LT electrical substations and builder society handovers, explore our 12 specialized departments.
            </p>
        </div>

        <div class="row g-4">
            <?php 
            $sIdx = 0;
            foreach ($services as $sKey => $service): 
                $sIdx++;
            ?>
                <div class="col-md-6 col-lg-4 col-xl-3 reveal-on-scroll reveal-delay-<?= ($sIdx % 4) + 1 ?>">
                    <div class="service-card tilt-3d shine-sweep-card">
                        <div class="service-img-wrapper">
                            <img src="<?= e($service['image']) ?>" alt="<?= e($service['title']) ?>" onerror="this.src='<?= e($service['fallback_unsplash']) ?>'" loading="lazy">
                            <span class="service-category-tag"><?= e($service['category']) ?></span>
                            <div class="service-icon-floating">
                                <i class="<?= e($service['icon']) ?>"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <h3 class="service-title"><?= e($service['short_title']) ?></h3>
                            <p class="service-summary"><?= e($service['summary']) ?></p>
                            
                            <div class="service-feature-pills">
                                <?php foreach (array_slice($service['features'], 0, 2) as $feat): ?>
                                    <span class="feature-pill-small"><?= e($feat) ?></span>
                                <?php endforeach; ?>
                            </div>

                            <a href="services.php#<?= e($service['id']) ?>" class="service-link">
                                <span>Learn More &amp; Scope</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5">
            <a href="services.php" class="btn btn-primary-pill btn-magnetic">
                <span class="btn-magnetic-inner">
                    <span>Explore Complete Service Scope</span>
                    <i class="fa-solid fa-arrow-right ms-2"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 06: INDUSTRIES WE SERVE
     3 Large Premium 3D Visual Cards (Residential, Commercial, Industrial)
     ======================================================================== -->
<section class="industries-section" id="industriesSection">
    <div class="container">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-city me-1"></i> Purpose-Built Workflows
            </span>
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-subtitle">
                Engineered facility solutions matching the distinct operational, architectural, and statutory demands of every property asset.
            </p>
        </div>

        <div class="row g-4">
            <?php 
            $ind_idx = 0;
            foreach ($industries as $indKey => $industry): 
                $ind_idx++;
            ?>
                <div class="col-lg-4 reveal-on-scroll reveal-delay-<?= $ind_idx ?>">
                    <div class="industry-card tilt-3d shine-sweep-card">
                        <div class="industry-img-box">
                            <img src="<?= e($industry['image']) ?>" alt="<?= e($industry['title']) ?>" loading="lazy">
                            <span class="industry-badge-floating">
                                <i class="<?= e($industry['icon']) ?> me-1"></i> <?= e($industry['badge']) ?>
                            </span>
                        </div>
                        <div class="industry-body">
                            <h3 class="industry-title"><?= e($industry['title']) ?></h3>
                            <p class="industry-desc"><?= e($industry['summary']) ?></p>

                            <ul class="industry-checklist">
                                <?php foreach (array_slice($industry['key_points'], 0, 3) as $pt): ?>
                                    <li>
                                        <i class="fa-solid fa-circle-check text-accent"></i>
                                        <span><?= e($pt) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="industry-clients-box">
                                <strong>Trusted At:</strong> <?= e($industry['clients_served']) ?>
                            </div>

                            <div class="mt-4">
                                <a href="industries.php#<?= e($industry['id']) ?>" class="btn btn-outline-pill w-100 text-center py-2 btn-magnetic">
                                    <span class="btn-magnetic-inner">
                                        <span>Explore Sector Solutions</span>
                                        <i class="fa-solid fa-arrow-right ms-1"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 07: OUR PROJECTS & CLIENTS
     Horizontal Swiper Showcase with Auto-Slide, Drag, & Verified Client Badges
     ======================================================================== -->
<section class="projects-section-home" id="projectsSection">
    <div class="wave-top-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#FFFFFF"></path>
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag tag-white">
                <i class="fa-solid fa-buildings me-1"></i> Verified Project Footprint
            </span>
            <h2 class="section-title section-title-white">Our Projects &amp; Clients</h2>
            <p class="section-subtitle text-white-75">
                Delivering operational excellence, technical asset stewardship, and measurable cost optimization across active client locations in Bengaluru.
            </p>
        </div>

        <!-- Horizontal Swiper Container for Projects -->
        <div class="swiper projects-swiper mb-5">
            <div class="swiper-wrapper">
                <?php foreach ($projects as $pIndex => $project): ?>
                    <div class="swiper-slide">
                        <div class="project-card-glass tilt-3d h-100">
                            <div class="project-card-img">
                                <img src="<?= e($project['image']) ?>" alt="<?= e($project['title']) ?>" loading="lazy">
                                <span class="project-category-badge"><?= e($project['category_name']) ?></span>
                                <span class="project-status-badge">
                                    <i class="fa-solid fa-circle-check me-1"></i> <?= e($project['status']) ?>
                                </span>
                            </div>
                            <div class="project-card-body">
                                <div class="project-location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span><?= e($project['location']) ?></span>
                                </div>
                                <h3 class="project-title"><?= e($project['title']) ?></h3>
                                <p class="project-desc"><?= e($project['description']) ?></p>
                                <div class="project-tags">
                                    <?php foreach ($project['tags'] as $tag): ?>
                                        <span class="project-tag"><?= e($tag) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Swiper Controls -->
            <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                <button type="button" class="btn btn-outline-light rounded-circle projects-swiper-prev" aria-label="Previous Project" style="width: 44px; height: 44px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <div class="swiper-pagination projects-swiper-pagination position-relative d-inline-block w-auto"></div>
                <button type="button" class="btn btn-outline-light rounded-circle projects-swiper-next" aria-label="Next Project" style="width: 44px; height: 44px;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Verified Client Name Strip -->
        <div class="client-logo-strip">
            <div class="row g-3 justify-content-center">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-pill-card">
                        <div class="client-pill-name">Mana Candela</div>
                        <div class="client-pill-scope">Sarjapur Rd • IFMS</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-pill-card">
                        <div class="client-pill-name">Mahaveer Orchids</div>
                        <div class="client-pill-scope">Bangalore S • MEP</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-pill-card">
                        <div class="client-pill-name">SJR Palazza City</div>
                        <div class="client-pill-scope">E-City • Handover</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-pill-card">
                        <div class="client-pill-name">BrenWoods</div>
                        <div class="client-pill-scope">Residential Enclave</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-pill-card">
                        <div class="client-pill-name">Tech Horizon</div>
                        <div class="client-pill-scope">ORR IT Campus</div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="client-pill-card">
                        <div class="client-pill-name">AECS Logistics</div>
                        <div class="client-pill-scope">Industrial Hub</div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 pt-2">
                <a href="projects.php" class="btn btn-accent-pill btn-magnetic">
                    <span class="btn-magnetic-inner">
                        <span>Explore Full Client Portfolio</span>
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 08: OUR WORKING PROCESS
     Modern Animated Timeline with 5 Steps & Connecting Glow Line
     ======================================================================== -->
<section class="methodology-section" id="workingProcessSection">
    <div class="container">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-route me-1"></i> Systematic Execution
            </span>
            <h2 class="section-title">Our Working Process</h2>
            <p class="section-subtitle">
                A disciplined 5-stage transition and management lifecycle that transforms ad-hoc operations into high-uptime engineering reliability.
            </p>
        </div>

        <div class="process-timeline-wrap">
            <div class="process-timeline-track">
                <div class="process-timeline-progress"></div>
            </div>

            <div class="row g-4 position-relative z-1">
                <?php foreach ($working_process as $pIdx => $proc): ?>
                    <div class="col-lg process-step-node reveal-on-scroll reveal-delay-<?= $pIdx + 1 ?>" data-step="<?= $proc['step'] ?>">
                        <div class="process-step-badge">
                            <i class="<?= e($proc['icon']) ?>"></i>
                            <span class="process-step-num"><?= e($proc['step']) ?></span>
                        </div>
                        <h3 class="h5 fw-bold text-primary mb-1"><?= e($proc['title']) ?></h3>
                        <div class="text-accent smaller fw-semibold mb-2"><?= e($proc['subtitle']) ?></div>
                        <p class="small text-muted mb-2"><?= e($proc['description']) ?></p>
                        <div class="badge bg-light text-primary border rounded-pill px-2 py-1 smaller">
                            <i class="fa-solid fa-check text-success me-1"></i> <?= e($proc['deliverable']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 09: WHY OUR CLIENTS TRUST US
     Split Layout: Company Benefits & Trust Factors on Left,
     Professional 3D Security Shield WebGL Visualization on Right
     ======================================================================== -->
<section class="trust-us-section py-5 my-4" id="trustSection">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left: Company Benefits & Trust Factors -->
            <div class="col-lg-6 reveal-on-scroll">
                <span class="section-tag">
                    <i class="fa-solid fa-shield-halved me-1"></i> Absolute Reliability
                </span>
                <h2 class="section-title mb-4">Why Our Clients Trust Us</h2>
                <p class="text-muted mb-4 lead fs-6">
                    Resident Welfare Associations and corporate facility heads rely on SYSTEQ India because we replace opaque contractor markups with civil engineering governance, PSARA license enforcement, and open-book statutory deposits.
                </p>

                <div class="trust-factors-list">
                    <?php foreach ($trust_factors as $tf): ?>
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="trust-icon-box text-accent bg-light rounded-circle p-3 shadow-sm">
                                <i class="<?= e($tf['icon']) ?> fs-4"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-primary mb-1"><?= e($tf['title']) ?></h4>
                                <p class="small text-muted mb-0"><?= e($tf['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-4 pt-2">
                    <a href="about.php" class="btn btn-primary-pill btn-magnetic">
                        <span class="btn-magnetic-inner">
                            <span>Learn About Our Leadership</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right: 3D Security Shield Visualization Canvas -->
            <div class="col-lg-6 reveal-on-scroll reveal-delay-2">
                <div class="trust-shield-card position-relative text-center perspective-container">
                    <!-- Three.js 3D WebGL Shield Canvas -->
                    <div id="trustShieldCanvas" style="width: 100%; height: 380px;" aria-hidden="true"></div>

                    <!-- Floating Badge: PSARA Licensed -->
                    <div class="trust-shield-badge-floating floating-3d-slow" style="top: 25px; left: 20px;">
                        <i class="fa-solid fa-certificate text-accent"></i>
                        <span>PSARA Certified</span>
                    </div>

                    <!-- Floating Badge: ISO 9001:2015 -->
                    <div class="trust-shield-badge-floating floating-3d-med" style="bottom: 30px; right: 20px;">
                        <i class="fa-solid fa-award text-success"></i>
                        <span>ISO 9001:2015</span>
                    </div>

                    <!-- Floating Badge: 100% EPF/ESIC -->
                    <div class="trust-shield-badge-floating floating-3d-rev" style="top: 40px; right: 20px;">
                        <i class="fa-solid fa-file-invoice-dollar text-primary"></i>
                        <span>100% EPF/ESIC Filed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 10: TESTIMONIALS
     Professional Testimonial Slider (Swiper.js) with Verified Client Reviews
     ======================================================================== -->
<section class="testimonials-section" id="testimonialsSection">
    <div class="container">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-quote-left me-1"></i> Client Voice &amp; Endorsement
            </span>
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">
                Real feedback from Resident Welfare Associations and property management boards who rely on SYSTEQ India every day.
            </p>
        </div>

        <div class="swiper testimonial-swiper pb-5">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $tIndex => $test): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card tilt-3d h-100">
                            <div class="testimonial-highlight-pill">
                                <i class="fa-solid fa-circle-check me-1"></i> <?= e($test['highlight']) ?>
                            </div>
                            <div class="testimonial-rating">
                                <?php for ($i = 0; $i < $test['rating']; $i++): ?>
                                    <i class="fa-solid fa-star text-warning"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-quote"><?= e($test['quote']) ?></p>
                            
                            <div class="testimonial-author-box">
                                <div class="author-avatar-icon">
                                    <i class="fa-solid fa-building-user"></i>
                                </div>
                                <div>
                                    <h4 class="author-name"><?= e($test['client']) ?></h4>
                                    <div class="author-property"><?= e($test['property']) ?></div>
                                    <div class="small text-muted font-monospace"><?= e($test['author_role']) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Swiper Controls -->
            <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
                <button type="button" class="btn btn-outline-primary rounded-circle testimonial-swiper-prev" aria-label="Previous Review" style="width: 44px; height: 44px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <div class="swiper-pagination testimonial-swiper-pagination position-relative d-inline-block w-auto"></div>
                <button type="button" class="btn btn-outline-primary rounded-circle testimonial-swiper-next" aria-label="Next Review" style="width: 44px; height: 44px;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 11: FAQ
     Premium Interactive Accordion with Plus/Minus Icons & Clean Layout
     ======================================================================== -->
<section class="faq-section" id="faqSection">
    <div class="container">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-circle-question me-1"></i> Clarifications &amp; Details
            </span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">
                Clear answers regarding our facility management scope, statutory compliance, builder handover audits, and financial governance.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion custom-accordion" id="homepageFaqAccordion">
                    <?php 
                    $preview_faqs = array_slice($faqs, 0, 5);
                    foreach ($preview_faqs as $fIndex => $faq): 
                        $collapseId = 'homeFaq' . $fIndex;
                    ?>
                        <div class="accordion-item reveal-on-scroll reveal-delay-<?= $fIndex + 1 ?>">
                            <h3 class="accordion-header" id="heading<?= $fIndex ?>">
                                <button class="accordion-button <?= ($fIndex !== 0) ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= ($fIndex === 0) ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                                    <i class="fa-solid fa-circle-dot me-3 text-accent small"></i>
                                    <span><?= e($faq['question']) ?></span>
                                </button>
                            </h3>
                            <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= ($fIndex === 0) ? 'show' : '' ?>" aria-labelledby="heading<?= $fIndex ?>" data-bs-parent="#homepageFaqAccordion">
                                <div class="accordion-body">
                                    <?= e($faq['answer']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-4">
                    <a href="faq.php" class="btn btn-outline-pill btn-magnetic">
                        <span class="btn-magnetic-inner">
                            <span>Read All Frequently Asked Questions</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 12: PREMIUM CTA
     Deep Blue Gradient, Wave Transition, City Skyline & Magnetic Button
     ======================================================================== -->
<section class="cta-banner-section" id="ctaSection">
    <div class="container">
        <div class="cta-banner-card reveal-on-scroll">
            <div class="cta-banner-glow"></div>
            <div class="row align-items-center g-4 position-relative z-1">
                <div class="col-lg-8">
                    <span class="badge-accent-subtle mb-2">
                        <i class="fa-solid fa-bolt me-1"></i> Complimentary Site Audit
                    </span>
                    <h2 class="cta-banner-title">Let's Build Better Spaces Together.</h2>
                    <p class="cta-banner-desc">
                        Partner with SYSTEQ India for comprehensive facility management solutions. Schedule a site inspection with our senior civil and MEP engineering specialists to optimize maintenance costs and safeguard property assets.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="contact.php#quoteForm" class="btn btn-accent-pill btn-magnetic">
                            <span class="btn-magnetic-inner">
                                <span>Get a Free Quote</span>
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                        <a href="<?= tel_link($company['phone']) ?>" class="cta-contact-phone">
                            <i class="fa-solid fa-phone"></i>
                            <span><?= e($company['phone_formatted']) ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end d-none d-lg-block">
                    <div class="p-4 bg-white-10 rounded-4 border border-white-20 text-start glass-panel-navy">
                        <div class="text-accent fw-bold small text-uppercase mb-1">
                            <i class="fa-solid fa-shield-check"></i> Statutory Guarantee
                        </div>
                        <h4 class="text-white fw-bold mb-2">Open-Book Audits</h4>
                        <p class="small text-white-75 mb-0">
                            Every challan, consumable invoice, and inspection report is verifiable by your association committee every month.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     SECTION 13: PREMIUM FOOTER
     ======================================================================== -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>
