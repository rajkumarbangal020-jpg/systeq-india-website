<?php
/**
 * SYSTEQ INDIA - Premium Header Component
 * Company: SYSTEQ Facility Management & Security Services (India) Private Limited
 */
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$current_page = $current_page ?? get_current_page();
$page_title = $page_title ?? 'SYSTEQ India | Premier Facility Management & Security Services';
$meta_description = $meta_description ?? 'SYSTEQ India is a technology-led, PSARA-certified facility management and security service provider in Bengaluru, delivering transparent IFMS, MEP maintenance, housekeeping, and builder handovers.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($meta_description) ?>">
    <meta name="keywords" content="facility management Bangalore, PSARA security services, housekeeping services, electrical maintenance, plumbing AMC, builder society handover, STP maintenance, SYSTEQ India">
    <meta name="author" content="SYSTEQ India">
    
    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($meta_description) ?>">
    <meta property="og:image" content="assets/images/logo.png">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    <!-- Google Fonts: Manrope & DM Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Swiper.js Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Design System Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <!-- Top Utility Bar (Desktop Only) -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="top-bar-inner">
                <div class="top-bar-left">
                    <span class="top-bar-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>AECS Layout, Singasandra, Bengaluru - 560068</span>
                    </span>
                    <span class="top-bar-item">
                        <i class="fa-solid fa-phone"></i>
                        <a href="<?= tel_link($company['phone']) ?>"><?= e($company['phone_formatted']) ?></a>
                    </span>
                    <span class="top-bar-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:<?= e($company['email']) ?>"><?= e($company['email']) ?></a>
                    </span>
                </div>
                <div class="top-bar-right">
                    <span class="cert-pill">
                        <i class="fa-solid fa-shield-check"></i> PSARA Certified • ISO 9001:2015
                    </span>
                    <div class="social-links">
                        <a href="<?= get_whatsapp_url() ?>" target="_blank" aria-label="WhatsApp" class="social-link"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar (Glassmorphism & Sticky) -->
    <header class="main-header glass-header" id="mainHeader">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- 3D Brand Logo Presentation -->
                <a class="navbar-brand brand-logo-3d-wrap" href="index.php" aria-label="SYSTEQ India Home">
                    <img src="assets/images/logo.png" alt="SYSTEQ India Logo" class="brand-logo" width="140" height="75">
                </a>

                <!-- Mobile Hamburger Button -->
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#systeqNavbar" aria-controls="systeqNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar-icon"></span>
                    <span class="toggler-icon middle-bar-icon"></span>
                    <span class="toggler-icon bottom-bar-icon"></span>
                </button>

                <!-- Navigation Links with Animated Underline -->
                <div class="collapse navbar-collapse" id="systeqNavbar">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-underline-animated">
                        <li class="nav-item">
                            <a class="nav-link <?= is_active('index', $current_page) ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= is_active('about', $current_page) ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= is_active('services', $current_page) ?>" href="services.php" id="navbarServicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu dropdown-menu-animated shadow-lg" aria-labelledby="navbarServicesDropdown">
                                <li>
                                    <a class="dropdown-item dropdown-overview-link" href="services.php">
                                        <i class="fa-solid fa-layer-group me-2 text-accent"></i> <strong>All 12 Services Overview</strong>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="dropdown-header text-uppercase fw-bold text-muted small">Core Offerings</li>
                                <li><a class="dropdown-item" href="services.php#housekeeping"><i class="fa-solid fa-broom me-2 text-primary"></i> Housekeeping Services</a></li>
                                <li><a class="dropdown-item" href="services.php#security-services"><i class="fa-solid fa-shield-cat me-2 text-primary"></i> PSARA Security Services</a></li>
                                <li><a class="dropdown-item" href="services.php#electrical-maintenance"><i class="fa-solid fa-bolt me-2 text-primary"></i> Electrical Maintenance</a></li>
                                <li><a class="dropdown-item" href="services.php#plumbing-maintenance"><i class="fa-solid fa-faucet-drip me-2 text-primary"></i> Plumbing Maintenance</a></li>
                                <li><a class="dropdown-item" href="services.php#stp-wtp-ro"><i class="fa-solid fa-industry me-2 text-primary"></i> STP / WTP / RO Plants</a></li>
                                <li><a class="dropdown-item" href="services.php#builder-handover"><i class="fa-solid fa-file-contract me-2 text-primary"></i> Builder-to-Society Handover</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= is_active('industries', $current_page) ?>" href="industries.php">Industries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= is_active('projects', $current_page) ?>" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= is_active('faq', $current_page) ?>" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= is_active('contact', $current_page) ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>

                    <!-- Header CTA Button (Magnetic Hover with Arrow) -->
                    <div class="nav-cta-wrapper">
                        <a href="contact.php#quoteForm" class="btn btn-quote-pill btn-magnetic">
                            <span class="btn-magnetic-inner">
                                <span>Get a Free Quote</span>
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Wrapper -->
    <main class="site-main">
