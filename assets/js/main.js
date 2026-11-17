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

    // 5. Frontend Interactive Contact & Quote Form UI Demonstration
    const formsToHandle = ['#contactForm', '#quoteForm', '#heroQuickQuoteForm'];

    formsToHandle.forEach(selector => {
        const formEl = document.querySelector(selector);
        if (formEl) {
            formEl.addEventListener('submit', function (e) {
                e.preventDefault();

                // Simple HTML5 validation check
                if (!this.checkValidity()) {
                    e.stopPropagation();
                    this.classList.add('was-validated');
                    return;
                }

                // Extract entered values for demo modal presentation
                const fullName = this.querySelector('[name="name"]')?.value || 'Guest';
                const email = this.querySelector('[name="email"]')?.value || 'Not provided';
                const phone = this.querySelector('[name="phone"]')?.value || 'Not provided';
                const service = this.querySelector('[name="service"]')?.value || 'General Facility Inquiry';
                const propertyType = this.querySelector('[name="property_type"]')?.value || 'Standard Facility';
                const message = this.querySelector('[name="message"]')?.value || 'No additional message entered.';

                // Populate Demo Summary List in Modal
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

                // Show Bootstrap Modal
                const demoModalEl = document.getElementById('demoSubmissionModal');
                if (demoModalEl && typeof bootstrap !== 'undefined') {
                    const modal = new bootstrap.Modal(demoModalEl);
                    modal.show();
                } else {
                    alert(`Inquiry Received (Demo)!\nThank you, ${fullName}. For real direct inquiries, contact +91 73552 75805.`);
                }

                // Reset form state
                this.reset();
                this.classList.remove('was-validated');
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
