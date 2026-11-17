<?php
/**
 * SYSTEQ INDIA - Projects & Clients Page (projects.php)
 * Real Verified Managed Properties, Handover Audits & Client Portfolio
 */
$current_page = 'projects';
$page_title = 'Our Projects & Clients | SYSTEQ India Facility Management';
$meta_description = 'Explore verified facility management contracts and builder-to-association handover audits managed by SYSTEQ India across Bengaluru: Mana Candela, SJR Palazza City, Mahaveer Orchids, and more.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Inner Hero Banner -->
<section class="inner-hero-banner">
    <div class="inner-hero-ambient"></div>
    <div class="container position-relative z-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
        <span class="badge-accent-subtle mb-2">Verified Operational Portfolio</span>
        <h1 class="inner-hero-title">Our Projects &amp; Clients</h1>
        <p class="inner-hero-desc">
            Explore our active Integrated Facility Management contracts, technical engineering turnarounds, and builder-to-association handover audits across Bengaluru.
        </p>
    </div>
</section>

<!-- Filter Tabs & Gallery Section -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-building-circle-check"></i> Proven Track Record
            </span>
            <h2 class="section-title">Facilities Managed with Precision</h2>
            <p class="section-subtitle">
                Filter through our residential societies, commercial tech campuses, and builder handover projects to inspect our real-world impact.
            </p>

            <!-- Filter Tab Bar -->
            <div class="filter-tab-bar mt-4">
                <button type="button" class="filter-btn active" data-filter="all">All Facilities</button>
                <button type="button" class="filter-btn" data-filter="residential">Residential Societies</button>
                <button type="button" class="filter-btn" data-filter="commercial">Commercial Tech Parks</button>
                <button type="button" class="filter-btn" data-filter="handover">Builder Handovers</button>
                <button type="button" class="filter-btn" data-filter="industrial">Industrial Hubs</button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4" id="projectsGrid">
            <?php foreach ($projects as $idx => $proj): ?>
                <div class="col-md-6 col-lg-4 filterable-card reveal-on-scroll reveal-delay-<?= ($idx % 3) + 1 ?>" data-category="<?= htmlspecialchars($proj['category']) ?>">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white border border-light-subtle">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="<?= htmlspecialchars($proj['image']) ?>" alt="<?= htmlspecialchars($proj['title']) ?>" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'" loading="lazy">
                            <span class="service-category-tag" style="background: var(--primary-blue);">
                                <?= htmlspecialchars($proj['category_name']) ?>
                            </span>
                            <span class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-dark bg-opacity-75 text-white rounded-pill small">
                                <i class="fa-solid fa-circle-check text-accent me-1"></i> <?= htmlspecialchars($proj['status']) ?>
                            </span>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="text-accent small fw-bold mb-1">
                                <i class="fa-solid fa-location-dot me-1"></i> <?= htmlspecialchars($proj['location']) ?>
                            </div>
                            <h3 class="h4 fw-bold text-primary mb-2"><?= htmlspecialchars($proj['title']) ?></h3>
                            <p class="text-muted small mb-4 flex-grow-1"><?= htmlspecialchars($proj['description']) ?></p>

                            <div class="d-flex flex-wrap gap-1 mb-3">
                                <?php foreach ($proj['tags'] as $tag): ?>
                                    <span class="badge bg-light text-primary border rounded-pill px-2 py-1 small"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>

                            <a href="contact.php?project_inquiry=<?= urlencode($proj['title']) ?>#quoteForm" class="btn btn-outline-pill w-100 py-2 small">
                                <span>Inquire About Similar Scope</span>
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Deep Dive Case Study: SJR Palazza City Handover -->
<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5 reveal-on-scroll">
            <div class="col-lg-6">
                <span class="section-tag">
                    <i class="fa-solid fa-microscope"></i> Case Study in Excellence
                </span>
                <h2 class="section-title">Society Handover Excellence: SJR Palazza City</h2>
                <p class="lead text-dark fw-semibold">
                    How our civil and MEP engineering leadership saved the resident welfare association critical capital during developer handover.
                </p>
                <div class="mb-4">
                    <h5 class="fw-bold text-danger mb-1"><i class="fa-solid fa-triangle-exclamation me-1"></i> The Pre-Handover Challenge:</h5>
                    <p class="text-muted small">
                        The resident association was scheduled to take over common amenities from the developer. Unclear structural crack status in basements, frequent sewage treatment plant (STP) odour issues, and unverified transformer warranties placed huge financial liability on the apartment owners.
                    </p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold text-success mb-1"><i class="fa-solid fa-circle-check me-1"></i> SYSTEQ Engineering Intervention:</h5>
                    <p class="text-muted small">
                        Led by Managing Director Nitesh Chaubey (B.Tech Civil Engineering), our team conducted a 14-day comprehensive snagging audit. We catalogued 140+ civil, plumbing, and electrical snags, negotiated remediation with the builder, and formalized the legal MoU handover.
                    </p>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="p-3 bg-white rounded-3 border text-center">
                        <div class="h4 fw-bold text-accent mb-0">140+</div>
                        <div class="small fw-semibold text-primary">Snags Audited</div>
                    </div>
                    <div class="p-3 bg-white rounded-3 border text-center">
                        <div class="h4 fw-bold text-success mb-0">100%</div>
                        <div class="small fw-semibold text-primary">Builder Rectified</div>
                    </div>
                    <div class="p-3 bg-white rounded-3 border text-center">
                        <div class="h4 fw-bold text-primary mb-0">RWA MoU</div>
                        <div class="small fw-semibold text-primary">Successfully Registered</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
                    <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=900&q=80" alt="SJR Palazza City Handover Audit" class="w-100" style="height: 420px; object-fit: cover;">
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
                    <h2 class="cta-banner-title">Is Your Property Approaching Builder Handover?</h2>
                    <p class="cta-banner-desc">
                        Protect your association's long-term maintenance funds. Schedule an independent civil and MEP snag audit with SYSTEQ India before signing your society handover MoU.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="contact.php?service=Builder+Handover+Audit#quoteForm" class="btn btn-accent-pill">
                            <span>Book Handover Audit</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $company['phone']) ?>" class="cta-contact-phone">
                            <i class="fa-solid fa-phone"></i>
                            <span><?= htmlspecialchars($company['phone_formatted']) ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end d-none d-lg-block">
                    <a href="faq.php" class="btn btn-light-pill">
                        <i class="fa-solid fa-circle-question me-2 text-primary"></i> Handover FAQs
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
