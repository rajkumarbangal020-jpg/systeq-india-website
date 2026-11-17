/**
 * SYSTEQ INDIA - Master Animations Engine
 * Features: Lenis Smooth Scroll, GSAP ScrollTrigger, 3D Tilt, Magnetic Hover, Swiper.js
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', () => {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        /* ==========================================================================
           1. LENIS SMOOTH SCROLLING
           ========================================================================== */
        let lenis = null;
        if (typeof Lenis !== 'undefined' && !prefersReducedMotion) {
            try {
                lenis = new Lenis({
                    duration: 1.2,
                    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                    orientation: 'vertical',
                    gestureOrientation: 'vertical',
                    smoothWheel: true,
                    wheelMultiplier: 1,
                    touchMultiplier: 2,
                    infinite: false
                });

                function raf(time) {
                    lenis.raf(time);
                    requestAnimationFrame(raf);
                }
                requestAnimationFrame(raf);

                // Integrate with GSAP ScrollTrigger if available
                if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
                    lenis.on('scroll', ScrollTrigger.update);
                    gsap.ticker.add((time) => {
                        lenis.raf(time * 1000);
                    });
                    gsap.ticker.lagSmoothing(0);
                }
            } catch (err) {
                console.warn('Lenis smooth scroll failed to initialize:', err);
            }
        }

        /* ==========================================================================
           2. 3D CARD MOUSE TILT EFFECT (Perspective 3D)
           ========================================================================== */
        const tiltCards = document.querySelectorAll('.why-pill-card, .service-card, .industry-card, .stat-pill-item, .trust-shield-card, .project-card-glass');
        
        if (!prefersReducedMotion && window.innerWidth > 991) {
            tiltCards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = ((y - centerY) / centerY) * -8;
                    const rotateY = ((x - centerX) / centerX) * 8;

                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(8px)`;
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
                    card.style.transition = 'transform 0.5s ease';
                });

                card.addEventListener('mouseenter', () => {
                    card.style.transition = 'none';
                });
            });
        }

        /* ==========================================================================
           3. MAGNETIC CTA BUTTONS
           ========================================================================== */
        const magneticBtns = document.querySelectorAll('.btn-quote-pill, .btn-hero-primary-pill, .btn-accent-pill, .btn-primary-pill');

        if (!prefersReducedMotion && window.innerWidth > 991) {
            magneticBtns.forEach(btn => {
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    btn.style.transform = `translate(${x * 0.22}px, ${y * 0.22}px)`;
                });

                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'translate(0px, 0px)';
                    btn.style.transition = 'transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1)';
                });

                btn.addEventListener('mouseenter', () => {
                    btn.style.transition = 'none';
                });
            });
        }

        /* ==========================================================================
           4. GSAP SCROLLTRIGGER & STAGGER REVEALS
           ========================================================================== */
        if (typeof gsap !== 'undefined') {
            if (typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                // Section 08: Working Process Timeline Scroll Activation
                const timelineSection = document.getElementById('workingProcessSection');
                if (timelineSection) {
                    const progressLine = timelineSection.querySelector('.process-timeline-progress');
                    const steps = timelineSection.querySelectorAll('.process-step-node');

                    ScrollTrigger.create({
                        trigger: timelineSection,
                        start: 'top 75%',
                        end: 'bottom 40%',
                        onUpdate: (self) => {
                            if (progressLine) {
                                progressLine.style.width = `${Math.min(self.progress * 115, 100)}%`;
                            }
                            steps.forEach((step, idx) => {
                                if (self.progress >= idx / (steps.length - 1) * 0.85) {
                                    step.classList.add('active');
                                } else {
                                    step.classList.remove('active');
                                }
                            });
                        }
                    });
                }

                // General ScrollTrigger Reveals
                gsap.utils.toArray('.reveal-on-scroll').forEach(el => {
                    gsap.fromTo(el, 
                        { opacity: 0, y: 35 }, 
                        {
                            opacity: 1, 
                            y: 0, 
                            duration: 0.85, 
                            ease: 'power2.out',
                            scrollTrigger: {
                                trigger: el,
                                start: 'top 88%',
                                toggleActions: 'play none none none'
                            }
                        }
                    );
                });
            }
        }

        /* ==========================================================================
           5. SWIPER.JS INITIALIZATION (Projects & Testimonials)
           ========================================================================== */
        if (typeof Swiper !== 'undefined') {
            // Projects Horizontal Carousel
            const projectSwiperEl = document.querySelector('.projects-swiper');
            if (projectSwiperEl) {
                new Swiper(projectSwiperEl, {
                    slidesPerView: 1,
                    spaceBetween: 24,
                    grabCursor: true,
                    loop: true,
                    autoplay: {
                        delay: 4500,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true
                    },
                    pagination: {
                        el: '.projects-swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.projects-swiper-next',
                        prevEl: '.projects-swiper-prev'
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 28
                        }
                    }
                });
            }

            // Testimonials Slider
            const testimonialSwiperEl = document.querySelector('.testimonial-swiper');
            if (testimonialSwiperEl) {
                new Swiper(testimonialSwiperEl, {
                    slidesPerView: 1,
                    spaceBetween: 24,
                    grabCursor: true,
                    loop: true,
                    autoplay: {
                        delay: 5500,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true
                    },
                    pagination: {
                        el: '.testimonial-swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.testimonial-swiper-next',
                        prevEl: '.testimonial-swiper-prev'
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 24
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        }
                    }
                });
            }
        }
    });
})();
