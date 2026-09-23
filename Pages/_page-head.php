<?php
// =========================================================
// Shared service page HEAD (SEO only — no page layout).
// Each service page defines its own `$service` array and its
// own unique body markup below this include. This file only
// prepares meta tags, structured data, the header/nav, and the
// `$related` / `$SERVICES` variables used for internal linking.
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/_services.php';

if (empty($service) || !isset($SERVICES[$service['slug']])) {
    http_response_code(404);
    exit('Page not found');
}

$pageTitle       = $service['metaTitle'];
$pageDescription = $service['metaDesc'];
$active          = 'services';
$canonicalPath   = $service['slug'];
$ogType          = 'website';
$ogImage         = $service['image'] ?? 'assets/img/brands/fav.png';
$metaRobots      = $service['noindex'] ?? 'index, follow';

$related = [];
foreach (($service['related'] ?? []) as $slug) {
    if (isset($SERVICES[$slug])) {
        $related[] = $SERVICES[$slug];
    }
}

// ---- Structured data: BreadcrumbList + Service + FAQPage ----
$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => absolute_url('') . '#services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $service['title'], 'item' => absolute_url($canonicalPath)],
    ],
];

$serviceSchema = [
    '@context'      => 'https://schema.org',
    '@type'         => 'Service',
    'name'          => $service['title'],
    'serviceType'   => $service['title'],
    'url'           => absolute_url($canonicalPath),
    'description'   => $service['metaDesc'],
    'provider'      => [
        '@type' => 'Organization',
        'name'  => SITE_NAME,
        'url'   => absolute_url(''),
        'logo'  => ['@type' => 'ImageObject', 'url' => absolute_url('assets/img/logo.png')],
    ],
    'areaServed'    => ['@type' => 'Place', 'name' => 'Worldwide'],
    'audience'      => ['@type' => 'BusinessAudience', 'name' => 'Businesses seeking professional SEO services'],
    'offers'        => ['@type' => 'Offer', 'availability' => 'https://schema.org/InStock'],
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ];
    }, $service['faqs'] ?? []),
];

$extraSchema = '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require __DIR__ . '/../includes/header.php';