<?php
/**
 * SYSTEQ INDIA - Footer Component
 */
require_once __DIR__ . '/data.php';
?>
    </main>

    <!-- Main Footer -->
    <footer class="site-footer">
        <!-- Footer Top Waves / Decorative Glow -->
        <div class="footer-glow-shape"></div>

        <div class="container position-relative z-1">
            <!-- Footer Pre-Banner / Contact CTA -->
            <div class="footer-cta-strip">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <div class="d-flex align-items-center">
                            <div class="cta-icon-box me-3 me-sm-4">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div>
                                <span class="badge-accent-subtle">24/7 Operations Desk</span>
                                <h3 class="footer-cta-title mb-1">Need Immediate Facility Support in Bengaluru?</h3>
                                <p class="footer-cta-sub mb-0 text-white-75">Connect directly with our engineering operations &amp; site inspection team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <div class="d-inline-flex flex-wrap gap-2">
                            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $company['phone']) ?>" class="btn btn-light-pill">
                                <i class="fa-solid fa-phone me-2 text-primary"></i> <?= htmlspecialchars($company['phone_formatted']) ?>
                            </a>
                            <a href="contact.php#quoteForm" class="btn btn-accent-pill">
                                <span>Get a Free Quote</span>
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Columns -->
            <div class="footer-main-row">
                <div class="row g-4 g-lg-5">
                    <!-- Column 1: Company Info -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-brand mb-3">
                            <a href="index.php" class="d-inline-block">
                                <img src="assets/images/logo.png" alt="SYSTEQ India Logo" class="footer-logo" width="150" height="80">
                            </a>
                        </div>
                        <p class="footer-desc">
                            <strong>SYSTEQ Facility Management &amp; Security Services (India) Private Limited</strong> is a technology-driven, PSARA-certified enterprise delivering reliable IFMS, civil engineering handovers, and technical MEP operations with 100% statutory transparency.
                        </p>
                        <div class="footer-cert-tags">
                            <span class="cert-tag"><i class="fa-solid fa-certificate text-accent me-1"></i> PSARA Certified</span>
                            <span class="cert-tag"><i class="fa-solid fa-award text-accent me-1"></i> ISO 9001:2015</span>
                        </div>
                        <div class="footer-social-bar mt-3">
                            <a href="https://wa.me/917355275805" target="_blank" aria-label="WhatsApp" class="footer-social-link"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn" class="footer-social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook" class="footer-social-link"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="mailto:<?= htmlspecialchars($company['email']) ?>" aria-label="Email" class="footer-social-link"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-2 col-md-6 col-6">
                        <h4 class="footer-heading">Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="index.php"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                            <li><a href="about.php"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
                            <li><a href="services.php"><i class="fa-solid fa-chevron-right"></i> All Services</a></li>
                            <li><a href="industries.php"><i class="fa-solid fa-chevron-right"></i> Industries</a></li>
                            <li><a href="projects.php"><i class="fa-solid fa-chevron-right"></i> Projects &amp; Clients</a></li>
                            <li><a href="faq.php"><i class="fa-solid fa-chevron-right"></i> FAQ</a></li>
                            <li><a href="contact.php"><i class="fa-solid fa-chevron-right"></i> Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Services -->
                    <div class="col-lg-3 col-md-6 col-6">
                        <h4 class="footer-heading">Core Services</h4>
                        <ul class="footer-links">
                            <li><a href="services.php#housekeeping"><i class="fa-solid fa-chevron-right"></i> Housekeeping</a></li>
                            <li><a href="services.php#security-services"><i class="fa-solid fa-chevron-right"></i> Security Services (PSARA)</a></li>
                            <li><a href="services.php#electrical-maintenance"><i class="fa-solid fa-chevron-right"></i> Electrical Maintenance</a></li>
                            <li><a href="services.php#plumbing-maintenance"><i class="fa-solid fa-chevron-right"></i> Plumbing Maintenance</a></li>
                            <li><a href="services.php#gardening-landscaping"><i class="fa-solid fa-chevron-right"></i> Gardening &amp; Landscape</a></li>
                            <li><a href="services.php#stp-wtp-ro"><i class="fa-solid fa-chevron-right"></i> STP / WTP / RO Plants</a></li>
                            <li><a href="services.php#builder-handover"><i class="fa-solid fa-chevron-right"></i> Builder Society Handover</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact & Office -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="footer-heading">Headquarters</h4>
                        <ul class="footer-contact-list">
                            <li>
                                <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div>
                                    <strong>Registered Office:</strong><br>
                                    <?= htmlspecialchars($company['address_line1']) ?>,<br>
                                    <?= htmlspecialchars($company['address_line2']) ?>,<br>
                                    <?= htmlspecialchars($company['city']) ?>, <?= htmlspecialchars($company['state']) ?> – <?= htmlspecialchars($company['pincode']) ?>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                                <div>
                                    <strong>Phone:</strong><br>
                                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $company['phone']) ?>" class="footer-contact-link"><?= htmlspecialchars($company['phone_formatted']) ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div>
                                    <strong>Official Email:</strong><br>
                                    <a href="mailto:<?= htmlspecialchars($company['email']) ?>" class="footer-contact-link"><?= htmlspecialchars($company['email']) ?></a>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa-solid fa-clock"></i></div>
                                <div>
                                    <strong>Working Hours:</strong><br>
                                    <?= htmlspecialchars($company['working_hours']) ?><br>
                                    <span class="text-accent small font-monospace"><i class="fa-solid fa-bolt"></i> <?= htmlspecialchars($company['emergency_support']) ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom / Copyright -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-7 text-center text-md-start mb-2 mb-md-0">
                        <p class="copyright-text mb-0">
                            &copy; <?= date('Y') ?> <strong><?= htmlspecialchars($company['name']) ?></strong>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-5 text-center text-md-end">
                        <div class="footer-bottom-links">
                            <span>Benguru, Karnataka, India</span>
                            <span class="separator">•</span>
                            <a href="#mainHeader" class="back-to-top-inline">Top <i class="fa-solid fa-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Floating Button -->
    <button type="button" class="btn-back-to-top" id="backToTopBtn" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Floating WhatsApp Action -->
    <a href="https://wa.me/917355275805?text=Hello%20SYSTEQ%20India,%20I%20would%20like%20to%20request%20information%20about%20facility%20management%20services." target="_blank" class="floating-whatsapp-btn" aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="whatsapp-tooltip">Chat with us</span>
    </a>

    <!-- UI Demo Modal for Contact Form (Frontend-Only Notification) -->
    <div class="modal fade" id="demoSubmissionModal" tabindex="-1" aria-labelledby="demoSubmissionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header bg-primary text-white border-0 py-3">
                    <h5 class="modal-title d-flex align-items-center" id="demoSubmissionModalLabel">
                        <i class="fa-solid fa-circle-check text-accent me-2"></i> Inquiry Received (UI Demo)
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="text-center mb-4">
                        <div class="demo-modal-icon">
                            <i class="fa-solid fa-paper-plane text-accent"></i>
                        </div>
                        <h4 class="fw-bold text-primary mt-2">Thank You for Inquiring!</h4>
                        <p class="text-muted small">
                            This corporate website is a <strong>frontend demonstration</strong>. In a live production environment, your request will be delivered directly to the SYSTEQ operational desk.
                        </p>
                    </div>

                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-primary mb-2 small text-uppercase">Demonstration Summary:</h6>
                        <ul class="list-unstyled small mb-0" id="demoSummaryList">
                            <!-- Populated dynamically via JS -->
                        </ul>
                    </div>

                    <div class="alert alert-info py-2 px-3 small d-flex align-items-center mb-0">
                        <i class="fa-solid fa-phone me-2 fs-5"></i>
                        <div>
                            For real immediate inquiries, please call <a href="tel:+917355275805" class="fw-bold text-dark">+91 73552 75805</a> or email <a href="mailto:sales@systeqindia.com" class="fw-bold text-dark">sales@systeqindia.com</a>.
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-primary w-100 rounded-pill py-2" data-bs-dismiss="modal">Close Window</button>
                </div>
            </div>
        </div>
    </div>

    <!-- External Vendor Libraries -->
    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lenis Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>

    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Three.js (WebGL 3D Engine) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- Swiper.js (Carousel & Sliders) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom Modular Scripts -->
    <script src="assets/js/three-scene.js"></script>
    <script src="assets/js/hero-slider.js"></script>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
