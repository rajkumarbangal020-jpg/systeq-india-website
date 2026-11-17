/**
 * SYSTEQ INDIA - Hero Cinematic Video Slider
 * 4 Visual Scenes: Residential, Housekeeping, Security, Technical
 * Smooth Crossfading, Autoplay, Indicators, Mobile Fallback, Resource Saving
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        const heroSlider = document.getElementById('heroVideoSlider');
        if (!heroSlider) return;

        const slides = heroSlider.querySelectorAll('.hero-video-slide');
        const indicators = heroSlider.querySelectorAll('.hero-indicator-btn');
        const prevBtn = document.getElementById('heroSliderPrev');
        const nextBtn = document.getElementById('heroSliderNext');
        const slideNameEl = document.getElementById('heroSlideName');
        const slideCaptionEl = document.getElementById('heroSlideCaption');
        const slideDuration = 7000; // 7 seconds per slide
        let currentSlideIdx = 0;
        let slideTimer = null;
        let isTabHidden = false;
        const totalSlides = slides.length;

        // Check user preferences
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Play video safely
        function playSlideVideo(slide) {
            if (prefersReducedMotion) return;
            const video = slide.querySelector('video');
            if (video) {
                video.muted = true;
                video.playsInline = true;
                if (video.readyState === 0) {
                    video.load();
                }
                const promise = video.play();
                if (promise !== undefined) {
                    promise.catch(() => {
                        // Poster fallback handles display on battery saver / policy block
                    });
                }
            }
        }

        // Pause video safely
        function pauseSlideVideo(slide) {
            const video = slide.querySelector('video');
            if (video && !video.paused) {
                video.pause();
            }
        }

        // Transition logic
        function goToSlide(newIdx) {
            if (newIdx === currentSlideIdx && slides[currentSlideIdx].classList.contains('active')) return;
            if (newIdx < 0) newIdx = totalSlides - 1;
            if (newIdx >= totalSlides) newIdx = 0;

            const oldSlide = slides[currentSlideIdx];
            const newSlide = slides[newIdx];

            // 1. Play incoming slide video
            playSlideVideo(newSlide);

            // 2. Crossfade classes
            oldSlide.classList.remove('active');
            newSlide.classList.add('active');

            // 3. Pause previous video after transition completes to save resources
            const previousIdx = currentSlideIdx;
            setTimeout(() => {
                if (currentSlideIdx !== previousIdx) {
                    pauseSlideVideo(slides[previousIdx]);
                }
            }, 1200);

            // 4. Update Indicators & Active Progress Bar
            indicators.forEach((btn, idx) => {
                const isActive = idx === newIdx;
                btn.classList.toggle('active', isActive);
                btn.setAttribute('aria-selected', isActive ? 'true' : 'false');

                const bar = btn.querySelector('.indicator-progress');
                if (bar) {
                    bar.style.animation = 'none';
                    if (isActive && !prefersReducedMotion && !isTabHidden) {
                        void bar.offsetWidth; // Trigger reflow
                        bar.style.animation = `indicatorProgress ${slideDuration / 1000}s linear forwards`;
                    }
                }
            });

            // 5. Update Caption Tag
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

        // Click listeners on indicator buttons
        indicators.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetIdx = parseInt(this.getAttribute('data-slide-to'), 10);
                if (!isNaN(targetIdx)) {
                    goToSlide(targetIdx);
                }
            });
        });

        // Arrow navigation
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);

        // Touch Swipe Handling on Mobile
        let touchStartX = 0;
        let touchEndX = 0;

        heroSlider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        heroSlider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            if (touchEndX < touchStartX - swipeThreshold) {
                nextSlide();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                prevSlide();
            }
        }

        // Visibility Change (pause loop when tab inactive)
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

        // Initialize First Slide
        if (slides.length > 0) {
            playSlideVideo(slides[0]);
            resetSlideTimer();
        }
    });
})();
