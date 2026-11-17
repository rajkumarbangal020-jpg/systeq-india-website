<?php
/**
 * SYSTEQ INDIA - Contact Us Page (contact.php)
 * Premium Contact Form UI & Verified Corporate Headquarters Contact Details
 */
$current_page = 'contact';
$page_title = 'Contact Us | SYSTEQ India Facility Management & Security';
$meta_description = 'Connect with SYSTEQ India headquarters in Bengaluru. Inquire about Integrated Facility Management, PSARA security, MEP contracts, and builder handover snag audits.';

require_once __DIR__ . '/includes/header.php';

// Check if pre-selected service was passed in query parameter
$selected_service = $_GET['service'] ?? '';
$project_inquiry = $_GET['project_inquiry'] ?? '';
?>

<!-- Inner Hero Banner -->
<section class="inner-hero-banner">
    <div class="inner-hero-ambient"></div>
    <div class="container position-relative z-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
        <span class="badge-accent-subtle mb-2">Operational Head Office • Bengaluru</span>
        <h1 class="inner-hero-title">Connect with Our Engineering Desk</h1>
        <p class="inner-hero-desc">
            Request an on-site operational evaluation, schedule a builder handover snag audit, or discuss customized facility management and PSARA security contracts.
        </p>
    </div>
</section>

<!-- Contact Info & Form Section -->
<section class="py-5 bg-white" id="quoteForm">
    <div class="container py-lg-4">
        <div class="row g-5">
            <!-- Left Column: Contact Details Card -->
            <div class="col-lg-5 reveal-on-scroll">
                <div class="contact-info-card">
                    <div class="contact-info-glow"></div>
                    <span class="badge-accent-subtle mb-2">Corporate Headquarters</span>
                    <h2 class="contact-info-title">Let's Discuss Your Facility Needs</h2>
                    <p class="contact-info-desc">
                        Our technical leadership and operational desk are available to review your property specifications, analyze existing vendor gaps, and formulate an open-book SLA proposal.
                    </p>

                    <ul class="contact-card-list">
                        <li>
                            <div class="contact-card-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h6>Registered Office Address</h6>
                                <p>
                                    <?= htmlspecialchars($company['address_line1']) ?>,<br>
                                    <?= htmlspecialchars($company['address_line2']) ?>,<br>
                                    <?= htmlspecialchars($company['city']) ?>, <?= htmlspecialchars($company['state']) ?> – <?= htmlspecialchars($company['pincode']) ?>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="contact-card-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h6>Direct Phone &amp; Escalation</h6>
                                <p>
                                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $company['phone']) ?>" class="fw-bold fs-6">
                                        <?= htmlspecialchars($company['phone_formatted']) ?>
                                    </a><br>
                                    <span class="small text-white-50">Direct Operational Escalation</span>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="contact-card-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h6>Official Email Inquiries</h6>
                                <p>
                                    <a href="mailto:<?= htmlspecialchars($company['email']) ?>" class="fw-bold">
                                        <?= htmlspecialchars($company['email']) ?>
                                    </a><br>
                                    <a href="mailto:<?= htmlspecialchars($company['alt_email']) ?>" class="small text-white-50">
                                        <?= htmlspecialchars($company['alt_email']) ?>
                                    </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="contact-card-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <h6>Working Hours &amp; Response</h6>
                                <p>
                                    <?= htmlspecialchars($company['working_hours']) ?><br>
                                    <span class="text-accent small font-monospace"><i class="fa-solid fa-bolt"></i> <?= htmlspecialchars($company['emergency_support']) ?></span>
                                </p>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-4 pt-3 border-top border-white-20">
                        <div class="d-flex align-items-center gap-2">
                            <span class="cert-pill"><i class="fa-solid fa-certificate"></i> PSARA Certified</span>
                            <span class="cert-pill"><i class="fa-solid fa-award"></i> ISO 9001:2015</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Premium Contact Form UI (Demonstration) -->
            <div class="col-lg-7 reveal-on-scroll reveal-delay-2">
                <div class="contact-form-container">
                    <div class="mb-4">
                        <span class="section-tag">
                            <i class="fa-solid fa-file-pen"></i> Free Proposal &amp; Inspection
                        </span>
                        <h2 class="h3 fw-bold text-primary mb-2">Request a Facility Audit &amp; Quote</h2>
                        <p class="text-muted small">
                            Fill out the inquiry form below. In this frontend demonstration, your entered parameters will trigger an interactive summary modal showcasing the proposal workflow.
                        </p>
                    </div>

                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="contactFullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-user text-muted"></i></span>
                                    <input type="text" class="form-control border-start-0" id="contactFullName" name="name" placeholder="e.g. Ramesh Hegde" required>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label for="contactPhone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-phone text-muted"></i></span>
                                    <input type="tel" class="form-control border-start-0" id="contactPhone" name="phone" placeholder="+91 98765 43210" pattern="[0-9+\s-]{10,15}" required>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label for="contactEmail" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-envelope text-muted"></i></span>
                                    <input type="email" class="form-control border-start-0" id="contactEmail" name="email" placeholder="ramesh@community.in" required>
                                </div>
                            </div>

                            <!-- Property / Facility Type -->
                            <div class="col-md-6">
                                <label for="contactPropertyType" class="form-label">Property Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="contactPropertyType" name="property_type" required>
                                    <option value="" selected disabled>Select Property Type</option>
                                    <option value="Residential Apartment / Society">Residential High-Rise Society</option>
                                    <option value="Gated Villa Community">Gated Villa Community</option>
                                    <option value="Commercial Office / Tech Park">Commercial Tech Park / Corporate Office</option>
                                    <option value="Industrial / Warehouse Facility">Industrial &amp; Logistics Hub</option>
                                    <option value="Builder Pre-Handover Property">Upcoming Property (Builder Handover)</option>
                                </select>
                            </div>

                            <!-- Service Selection -->
                            <div class="col-12">
                                <label for="contactService" class="form-label">Primary Service Required <span class="text-danger">*</span></label>
                                <select class="form-select" id="contactService" name="service" required>
                                    <option value="" disabled <?= empty($selected_service) ? 'selected' : '' ?>>Select Required Service</option>
                                    <option value="Full Integrated Facility Management (IFMS)">Full Integrated Facility Management (All-in-One)</option>
                                    <option value="Housekeeping & Facility Sanitization" <?= ($selected_service === 'Housekeeping') ? 'selected' : '' ?>>Housekeeping &amp; Facility Sanitization</option>
                                    <option value="PSARA-Certified Security Services" <?= ($selected_service === 'Security') ? 'selected' : '' ?>>PSARA-Certified Security Services</option>
                                    <option value="Electrical Maintenance & Substation Care">Electrical Maintenance &amp; Substation Care</option>
                                    <option value="Plumbing & Hydro-Pneumatics">Plumbing Maintenance &amp; Hydro-Pneumatics</option>
                                    <option value="Gardening & Landscaping">Gardening &amp; Landscape Maintenance</option>
                                    <option value="Swimming Pool Operation & Maintenance">Swimming Pool Operation &amp; Maintenance</option>
                                    <option value="Waste Management & Composting">Waste Management &amp; Organic Composting</option>
                                    <option value="Integrated Pest Control">Integrated Pest Control &amp; Fumigation</option>
                                    <option value="STP / WTP / RO Plant Operations">STP / WTP / RO Plant Operation &amp; Maintenance</option>
                                    <option value="Technical & Mechanical MEP Services">Technical &amp; Mechanical MEP Services</option>
                                    <option value="Facility Staff Management & Helpdesk">Facility Staff &amp; Helpdesk Management</option>
                                    <option value="Builder-to-Association Society Handover Snag Audit" <?= ($selected_service === 'Builder Handover Audit') ? 'selected' : '' ?>>Builder-to-Association Handover Snag Audit</option>
                                </select>
                            </div>

                            <!-- Message / Property Specifications -->
                            <div class="col-12">
                                <label for="contactMessage" class="form-label">Message / Property Details</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="4" placeholder="Tell us about your property location, number of units/floors, current challenges, or specific audit needs..."><?= !empty($project_inquiry) ? 'Inquiry regarding scope similar to: ' . htmlspecialchars($project_inquiry) : '' ?></textarea>
                            </div>

                            <!-- Frontend Demo Notice -->
                            <div class="col-12">
                                <div class="p-2 px-3 bg-light rounded-3 border small text-muted d-flex align-items-center">
                                    <i class="fa-solid fa-circle-info text-accent me-2 fs-5"></i>
                                    <span><strong>UI Demonstration:</strong> Submitting will demonstrate form validation and show an interactive summary modal. Data is not stored in a database.</span>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-pill w-100 py-3">
                                    <i class="fa-solid fa-paper-plane me-2"></i>
                                    <span>Submit Inquiry &amp; Request Audit</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Map & Office Guidance -->
<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="text-center mb-5 reveal-on-scroll">
            <span class="section-tag">
                <i class="fa-solid fa-map-location-dot"></i> Physical Location
            </span>
            <h2 class="section-title">Visit Our Headquarters in Bengaluru</h2>
            <p class="section-subtitle">
                Strategically situated in Singasandra (AECS Layout) for rapid operational dispatch across South Bengaluru, Hosur Road, and Electronic City tech corridors.
            </p>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-8">
                <div class="rounded-4 overflow-hidden shadow-sm border border-white" style="height: 380px;">
                    <!-- Google Maps Embed for Singasandra Bengaluru -->
                    <iframe 
                        title="SYSTEQ India Headquarters Map Location"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15556.376839352923!2d77.64332924151705!3d12.87909385966453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14cf07897b7b%3A0x6338b813735e5a26!2sSingasandra%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 bg-white rounded-4 shadow-sm border h-100 d-flex flex-column justify-content-center">
                    <div class="stat-icon-bubble mb-3">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <h4 class="fw-bold text-primary mb-2">Transit &amp; Accessibility</h4>
                    <p class="text-muted small mb-3">
                        Our Singasandra facility management office is directly accessible via the Bangalore Elevated Tollway (Hosur Road) and the Namma Metro Yellow Line corridor.
                    </p>
                    <ul class="list-unstyled small text-muted mb-4">
                        <li><i class="fa-solid fa-check text-success me-2"></i> 5 mins from Electronic City Phase 1</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i> 15 mins from Sarjapur Road / HSR Layout</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i> Fast technician mobile fleet access</li>
                    </ul>
                    <a href="https://maps.google.com/?q=AECS+Layout+Singasandra+Bangalore" target="_blank" class="btn btn-outline-pill w-100 py-2">
                        <i class="fa-solid fa-arrow-up-right-from-square me-2 text-accent"></i> Open in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
