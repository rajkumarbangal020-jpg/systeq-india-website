/**
 * SYSTEQ INDIA - Master Frontend Scripts
 * Company: SYSTEQ Facility Management & Security Services (India) Private Limited
 */

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // 1. Sticky Main Header with Scrolled Class
    const mainHeader = document.getElementById('mainHeader');
    const backToTopBtn = document.getElementById('backToTopBtn');

    window.addEventListener('scroll', () => {
        const scrollPos = window.scrollY || document.documentElement.scrollTop;

        // Sticky Header Effect
        if (mainHeader) {
            if (scrollPos > 40) {
                mainHeader.classList.add('scrolled');
            } else {
                mainHeader.classList.remove('scrolled');
            }
        }

        // Back to Top Button Visibility
        if (backToTopBtn) {
            if (scrollPos > 350) {
                backToTopBtn.classList.add('active');
            } else {
                backToTopBtn.classList.remove('active');
            }
        }
    }, { passive: true });

    // Back to Top Smooth Click
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 2. Animated Counters via IntersectionObserver
    const counters = document.querySelectorAll('.counter-val');
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseFloat(counter.getAttribute('data-target')) || 0;
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const duration = 1800; // milliseconds
                    const frameRate = 1000 / 60;
                    const totalFrames = Math.round(duration / frameRate);
                    let frame = 0;

                    const timer = setInterval(() => {
                        frame++;
                        const progress = frame / totalFrames;
                        // Ease-out cubic calculation
                        const current = Math.round(target * (1 - Math.pow(1 - progress, 3)));
                        
                        counter.textContent = current;

                        if (frame >= totalFrames) {
                            clearInterval(timer);
                            counter.textContent = target;
                        }
                    }, frameRate);

                    observer.unobserve(counter);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        counters.forEach(counter => counterObserver.observe(counter));
    }

    // 3. Scroll Reveal Animations
    const revealElements = document.querySelectorAll('.reveal-on-scroll');
    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // 4. Projects Filter Tabs (Projects & Clients Page)
    const filterButtons = document.querySelectorAll('.filter-btn');
    const filterableCards = document.querySelectorAll('.filterable-card');

    if (filterButtons.length > 0 && filterableCards.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const filterValue = this.getAttribute('data-filter');

                // Update Active Tab State
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Filter Cards with Animation
                filterableCards.forEach(card => {
                    const category = card.getAttribute('data-category');

                    if (filterValue === 'all' || category === filterValue) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0) scale(1)';
                        }, 50);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(15px) scale(0.96)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 250);
                    }
                });
            });
        });
    }

    // 5. Contact & Quote Form Handling (Web3Forms API + Validation + Spam Protection + Loading State + WhatsApp)
    const formsToHandle = ['#contactForm', '#quoteForm', '#heroQuickQuoteForm'];

    // Dynamic WhatsApp message update based on input
    const contactWhatsAppBtn = document.getElementById('contactWhatsAppBtn');
    if (contactWhatsAppBtn) {
        const updateWhatsAppMsg = () => {
            const name = document.getElementById('contactFullName')?.value?.trim() || '';
            const service = document.getElementById('contactService')?.value || '';
            let msg = 'Hello SYSTEQ India, I would like to request information about facility management services.';
            if (name || service) {
                msg = `Hello SYSTEQ India, my name is ${name || 'a visitor'}. I am inquiring about ${service || 'facility management services'}.`;
            }
            contactWhatsAppBtn.href = `https://wa.me/917355275805?text=${encodeURIComponent(msg)}`;
        };
        document.getElementById('contactFullName')?.addEventListener('input', updateWhatsAppMsg);
        document.getElementById('contactService')?.addEventListener('change', updateWhatsAppMsg);
    }

    formsToHandle.forEach(selector => {
        const formEl = document.querySelector(selector);
        if (formEl) {
            formEl.addEventListener('submit', async function (e) {
                e.preventDefault();

                // 1. Anti-Spam Honeypot Verification
                const botField = this.querySelector('input[name="botcheck"]');
                if (botField && botField.checked) {
                    console.warn('Spam submission detected by botcheck honeypot.');
                    return;
                }

                // 2. HTML5 Validation Check
                if (!this.checkValidity()) {
                    e.stopPropagation();
                    this.classList.add('was-validated');
                    return;
                }

                // UI Elements for Loading and Status
                const submitBtn = this.querySelector('#contactSubmitBtn') || this.querySelector('button[type="submit"]');
                const submitIcon = this.querySelector('#contactSubmitIcon');
                const submitText = this.querySelector('#contactSubmitText');
                const statusWrap = document.getElementById('contactStatusWrap');
                const statusAlert = document.getElementById('contactFormStatus');

                const origIconClass = submitIcon ? submitIcon.className : '';
                const origBtnText = submitText ? submitText.textContent : (submitBtn ? submitBtn.textContent : '');

                // 3. Set Loading State
                if (submitBtn) submitBtn.disabled = true;
                if (submitIcon) submitIcon.className = 'fa-solid fa-spinner fa-spin me-2';
                if (submitText) submitText.textContent = 'Submitting Inquiry...';
                if (statusWrap) statusWrap.style.display = 'none';

                // Extract form values
                const fullName = this.querySelector('[name="name"]')?.value || 'Guest';
                const email = this.querySelector('[name="email"]')?.value || 'Not provided';
                const phone = this.querySelector('[name="phone"]')?.value || 'Not provided';
                const service = this.querySelector('[name="service"]')?.value || 'General Facility Inquiry';
                const propertyType = this.querySelector('[name="property_type"]')?.value || 'Standard Facility';
                const message = this.querySelector('[name="message"]')?.value || 'No additional message entered.';
                const accessKey = this.querySelector('[name="access_key"]')?.value?.trim() || '';

                try {
                    // 4. Check for Web3Forms Access Key
                    const isPlaceholder = !accessKey || accessKey === 'YOUR_WEB3FORMS_ACCESS_KEY_HERE';

                    if (isPlaceholder) {
                        // Demo Mode / Placeholder Notice
                        if (statusAlert && statusWrap) {
                            statusAlert.className = 'alert alert-info py-3 px-4 rounded-3 border-0 shadow-sm';
                            statusAlert.innerHTML = `
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-circle-info text-primary fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Inquiry Received (Demo Mode)</h6>
                                        <p class="mb-2 small text-muted">Thank you, <strong>${escapeHtml(fullName)}</strong>. To send submissions to an actual email inbox, configure your free API key from <a href="https://web3forms.com" target="_blank" class="fw-bold text-primary">Web3Forms.com</a>.</p>
                                        <div class="mt-2 pt-2 border-top small">
                                            <span>Immediate inquiry? </span>
                                            <a href="https://wa.me/917355275805?text=${encodeURIComponent('Hello SYSTEQ India, I just submitted an inquiry for: ' + service)}" target="_blank" class="text-success fw-bold me-3"><i class="fa-brands fa-whatsapp me-1"></i>Chat on WhatsApp</a>
                                            <a href="tel:+917355275805" class="text-primary fw-bold"><i class="fa-solid fa-phone me-1"></i>+91 73552 75805</a>
                                        </div>
                                    </div>
                                </div>
                            `;
                            statusWrap.style.display = 'block';
                        }

                        // Also populate and show modal for UI Demonstration
                        const summaryList = document.getElementById('demoSummaryList');
                        if (summaryList) {
                            summaryList.innerHTML = `
                                <li class="mb-1"><strong>Client Name:</strong> ${escapeHtml(fullName)}</li>
                                <li class="mb-1"><strong>Contact Phone:</strong> ${escapeHtml(phone)}</li>
                                <li class="mb-1"><strong>Email Address:</strong> ${escapeHtml(email)}</li>
                                <li class="mb-1"><strong>Required Service:</strong> ${escapeHtml(service)}</li>
                                <li class="mb-1"><strong>Property Type:</strong> ${escapeHtml(propertyType)}</li>
                                <li class="mb-1"><strong>Message Notes:</strong> <span class="text-muted">${escapeHtml(message)}</span></li>
                            `;
                        }
                        const demoModalEl = document.getElementById('demoSubmissionModal');
                        if (demoModalEl && typeof bootstrap !== 'undefined') {
                            const modal = new bootstrap.Modal(demoModalEl);
                            modal.show();
                        }
                    } else {
                        // Live Web3Forms Submission via Fetch API
                        const formData = new FormData(this);
                        const response = await fetch('https://api.web3forms.com/submit', {
                            method: 'POST',
                            body: formData
                        });
                        const data = await response.json();

                        if (data.success) {
                            if (statusAlert && statusWrap) {
                                statusAlert.className = 'alert alert-success py-3 px-4 rounded-3 border-0 shadow-sm';
                                statusAlert.innerHTML = `
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-circle-check text-success fs-3 me-3"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1">Inquiry Sent Successfully!</h6>
                                            <p class="mb-0 small">Thank you, <strong>${escapeHtml(fullName)}</strong>. Our facility engineering desk has received your request and will contact you within 24 hours.</p>
                                        </div>
                                    </div>
                                `;
                                statusWrap.style.display = 'block';
                            }
                            this.reset();
                        } else {
                            throw new Error(data.message || 'Unable to submit inquiry at this time.');
                        }
                    }

                    // Reset form state after successful handling
                    if (isPlaceholder) {
                        this.reset();
                    }
                    this.classList.remove('was-validated');

                } catch (err) {
                    console.error('Contact Form Error:', err);
                    if (statusAlert && statusWrap) {
                        statusAlert.className = 'alert alert-danger py-3 px-4 rounded-3 border-0 shadow-sm';
                        statusAlert.innerHTML = `
                            <div class="d-flex align-items-start">
                                <i class="fa-solid fa-circle-exclamation text-danger fs-4 me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-1">Submission Failed</h6>
                                    <p class="mb-2 small">${escapeHtml(err.message || 'Network error occurred.')}</p>
                                    <div class="small">
                                        <span>Please reach us directly at: </span>
                                        <a href="tel:+917355275805" class="fw-bold text-dark me-2">+91 73552 75805</a> |
                                        <a href="mailto:sales@systeqindia.com" class="fw-bold text-dark ms-2">sales@systeqindia.com</a>
                                    </div>
                                </div>
                            </div>
                        `;
                        statusWrap.style.display = 'block';
                    }
                } finally {
                    // Restore button state
                    if (submitBtn) submitBtn.disabled = false;
                    if (submitIcon) submitIcon.className = origIconClass || 'fa-solid fa-paper-plane me-2';
                    if (submitText) submitText.textContent = origBtnText || 'Submit Inquiry & Request Audit';
                }
            });
        }
    });

    // Helper: Escape HTML strings to avoid XSS in demo output
    function escapeHtml(string) {
        const div = document.createElement('div');
        div.textContent = string;
        return div.innerHTML;
    }

    // 6. Mobile Nav Collapse on Item Click
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    const navbarCollapse = document.getElementById('systeqNavbar');

    if (navbarCollapse && navLinks.length > 0) {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navbarCollapse.classList.contains('show') && typeof bootstrap !== 'undefined') {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            });
        });
    }

    // 7. Full-Width Background Cinematic Video Slider
    const heroSlider = document.getElementById('heroVideoSlider');
    if (heroSlider) {
        const slides = heroSlider.querySelectorAll('.hero-video-slide');
        const indicators = heroSlider.querySelectorAll('.hero-indicator-btn');
        const prevBtn = document.getElementById('heroSliderPrev');
        const nextBtn = document.getElementById('heroSliderNext');
        const slideNameEl = document.getElementById('heroSlideName');
        const slideCaptionEl = document.getElementById('heroSlideCaption');
        const slideDuration = 7000; // ~7 seconds per slide
        let currentSlideIdx = 0;
        let slideTimer = null;
        let isTabHidden = false;
        const totalSlides = slides.length;

        // Check prefers-reduced-motion preference
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Safe play video helper
        function playSlideVideo(slide) {
            if (prefersReducedMotion) return;
            const video = slide.querySelector('video');
            if (video) {
                // Ensure proper attributes
                video.muted = true;
                video.playsInline = true;
                if (video.readyState === 0) {
                    video.load();
                }
                const playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.catch(() => {
                        // In case of browser autoplay block or low power mode, fallback poster handles display
                    });
                }
            }
        }

        // Safe pause video helper
        function pauseSlideVideo(slide) {
            const video = slide.querySelector('video');
            if (video && !video.paused) {
                video.pause();
            }
        }

        // Slide transition handler
        function goToSlide(newIdx) {
            if (newIdx === currentSlideIdx && slides[currentSlideIdx].classList.contains('active')) return;
            if (newIdx < 0) newIdx = totalSlides - 1;
            if (newIdx >= totalSlides) newIdx = 0;

            const oldSlide = slides[currentSlideIdx];
            const newSlide = slides[newIdx];

            // 1. Start playing new slide video
            playSlideVideo(newSlide);

            // 2. Crossfade classes
            oldSlide.classList.remove('active');
            newSlide.classList.add('active');

            // 3. Pause previous video after crossfade transition completes (saving CPU/RAM)
            const previousIdx = currentSlideIdx;
            setTimeout(() => {
                if (currentSlideIdx !== previousIdx) {
                    pauseSlideVideo(slides[previousIdx]);
                }
            }, 1250);

            // 4. Update Indicators & Active Progress Bar
            indicators.forEach((btn, idx) => {
                const isActive = idx === newIdx;
                btn.classList.toggle('active', isActive);
                btn.setAttribute('aria-selected', isActive ? 'true' : 'false');

                // Restart CSS animation for active progress bar
                const bar = btn.querySelector('.indicator-progress');
                if (bar) {
                    bar.style.animation = 'none';
                    if (isActive && !prefersReducedMotion && !isTabHidden) {
                        // Force DOM reflow to restart CSS animation
                        void bar.offsetWidth;
                        bar.style.animation = `indicatorProgress ${slideDuration / 1000}s linear forwards`;
                    }
                }
            });

            // 5. Update Caption Tag (Number & Title)
            const slideTitle = newSlide.getAttribute('data-slide-title') || 'Smart Facility Management';
            if (slideNameEl) {
                slideNameEl.textContent = slideTitle;
            }
            if (slideCaptionEl) {
                const numSpan = slideCaptionEl.querySelector('.slide-num');
                if (numSpan) {
                    numSpan.textContent = `0${newIdx + 1} / 0${totalSlides}`;
                }
            }

            currentSlideIdx = newIdx;
            resetSlideTimer();
        }

        function nextSlide() {
            goToSlide(currentSlideIdx + 1);
        }

        function prevSlide() {
            goToSlide(currentSlideIdx - 1);
        }

        function resetSlideTimer() {
            if (slideTimer) clearInterval(slideTimer);
            if (!isTabHidden && !prefersReducedMotion) {
                slideTimer = setInterval(nextSlide, slideDuration);
            }
        }

        // Indicator button clicks
        indicators.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetIdx = parseInt(this.getAttribute('data-slide-to'), 10);
                if (!isNaN(targetIdx)) {
                    goToSlide(targetIdx);
                }
            });
        });

        // Prev & Next arrow button clicks
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);

        // Visibility Change API (pause video & timer when user leaves tab)
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                isTabHidden = true;
                if (slideTimer) clearInterval(slideTimer);
                if (slides[currentSlideIdx]) {
                    pauseSlideVideo(slides[currentSlideIdx]);
                }
            } else {
                isTabHidden = false;
                if (slides[currentSlideIdx]) {
                    playSlideVideo(slides[currentSlideIdx]);
                }
                resetSlideTimer();
            }
        });

        // Initialize first slide
        if (slides.length > 0) {
            playSlideVideo(slides[0]);
            resetSlideTimer();
        }
    }
});
