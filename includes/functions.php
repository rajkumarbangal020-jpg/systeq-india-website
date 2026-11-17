<?php
/**
 * SYSTEQ INDIA - Reusable Helper Functions
 * Company: SYSTEQ Facility Management & Security Services (India) Private Limited
 */

declare(strict_types=1);

/**
 * Returns sanitized string for safe HTML output
 */
function e(?string $string): string {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Returns tel: link href formatted safely
 */
function tel_link(string $phone): string {
    return 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
}

/**
 * Renders star rating HTML
 */
function render_stars(int $rating = 5): string {
    $out = '<div class="star-rating" aria-label="' . $rating . ' out of 5 stars">';
    for ($i = 0; $i < $rating; $i++) {
        $out .= '<i class="fa-solid fa-star text-warning"></i>';
    }
    $out .= '</div>';
    return $out;
}

/**
 * Renders Section Header with 3D aesthetic badge and typography
 */
function render_section_header(string $badge, string $title, string $subtitle, bool $isLight = false, string $align = 'center'): string {
    $lightClass = $isLight ? 'text-white' : '';
    $subLightClass = $isLight ? 'text-white-75' : 'text-muted';
    $tagLightClass = $isLight ? 'tag-white' : 'section-tag';
    $alignClass = $align === 'center' ? 'text-center' : ($align === 'start' ? 'text-start' : 'text-center');

    $html = <<<HTML
    <div class="section-header-block {$alignClass} mb-5 reveal-on-scroll">
        <span class="{$tagLightClass}">
            <i class="fa-solid fa-sparkles me-1"></i> {$badge}
        </span>
        <h2 class="section-title {$lightClass}">{$title}</h2>
        <p class="section-subtitle {$subLightClass}">{$subtitle}</p>
    </div>
HTML;
    return $html;
}

/**
 * Returns formatted WhatsApp link with custom encoded message
 */
function get_whatsapp_url(string $customMessage = ''): string {
    global $company;
    $phone = preg_replace('/[^0-9]/', '', $company['phone'] ?? '917355275805');
    $msg = !empty($customMessage) 
        ? $customMessage 
        : 'Hello SYSTEQ India, I would like to request an inspection and quotation for facility management services.';
    return 'https://wa.me/' . $phone . '?text=' . urlencode($msg);
}

/**
 * Renders Breadcrumbs navigation
 */
function render_breadcrumbs(array $crumbs): string {
    $html = '<nav aria-label="breadcrumb" class="systeq-breadcrumbs-nav mb-4">';
    $html .= '<ol class="breadcrumb mb-0">';
    $html .= '<li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house-chimney me-1"></i> Home</a></li>';
    
    $total = count($crumbs);
    $idx = 0;
    foreach ($crumbs as $label => $url) {
        $idx++;
        if ($idx === $total || empty($url)) {
            $html .= '<li class="breadcrumb-item active" aria-current="page">' . e($label) . '</li>';
        } else {
            $html .= '<li class="breadcrumb-item"><a href="' . e($url) . '">' . e($label) . '</a></li>';
        }
    }
    $html .= '</ol></nav>';
    return $html;
}
