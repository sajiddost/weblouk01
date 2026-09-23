<?php
// =========================================================
// Service registry — single source of truth for service
// names, URLs and icons. Used by the header dropdown,
// footer services column, related-service cards on each
// service page, and by the shared service-page layout.
// =========================================================

$SERVICES = [
    'technical-seo-audits' => [
        'slug'     => 'technical-seo-audits',
        'name'     => 'Technical SEO Audits',
        'icon'     => 'ri-file-search-line',
        'tagline'  => 'Crawl, indexing, sitemap and Core Web Vitals fixes, prioritized by impact.',
        'purpose'  => 'Audit',
    ],
    'seo-management' => [
        'slug'     => 'seo-management',
        'name'     => 'SEO Management',
        'icon'     => 'ri-dashboard-3-line',
        'tagline'  => 'Ongoing strategy, execution, and reporting run as one coordinated program.',
        'purpose'  => 'Ongoing',
    ],
    'small-business-seo' => [
        'slug'     => 'small-business-seo',
        'name'     => 'Small Business SEO',
        'icon'     => 'ri-store-line',
        'tagline'  => 'SEO sized to small budgets and teams, tied to leads rather than vanity metrics.',
        'purpose'  => 'Business',
    ],
    'on-page-seo' => [
        'slug'     => 'on-page-seo',
        'name'     => 'On-Page SEO',
        'icon'     => 'ri-window-2-line',
        'tagline'  => 'Intent-first content, headings, internal links, and cannibalization cleanup.',
        'purpose'  => 'Content',
    ],
    'enterprise-seo' => [
        'slug'     => 'enterprise-seo',
        'name'     => 'Enterprise SEO',
        'icon'     => 'ri-building-line',
        'tagline'  => 'Template-level audits, governance, and architecture for 10,000+ page sites.',
        'purpose'  => 'Scale',
    ],
    'semantic-entity-seo' => [
        'slug'     => 'semantic-entity-seo',
        'name'     => 'Semantic & Entity SEO',
        'icon'     => 'ri-node-tree',
        'tagline'  => 'Brand disambiguation, accurate schema, and topical authority structure.',
        'purpose'  => 'Structure',
    ],
    'authority-link-building' => [
        'slug'     => 'authority-link-building',
        'name'     => 'Authority & Link Building',
        'icon'     => 'ri-link',
        'tagline'  => 'Relevance over volume: backlink audits, toxic-link cleanup, and earned outreach.',
        'purpose'  => 'Authority',
    ],
    'aeo-geo' => [
        'slug'     => 'aeo-geo',
        'name'     => 'AEO & GEO Optimization',
        'icon'     => 'ri-robot-line',
        'tagline'  => 'Get cited in AI Overviews, ChatGPT, and Perplexity answers, honestly measured.',
        'purpose'  => 'AI Search',
    ],
    'wordpress-seo' => [
        'slug'     => 'wordpress-seo',
        'name'     => 'WordPress SEO',
        'icon'     => 'ri-wordpress-line',
        'tagline'  => 'Plugin conflicts, theme bloat, and taxonomy issues fixed the WordPress way.',
        'purpose'  => 'Platform',
    ],
    'shopify-seo' => [
        'slug'     => 'shopify-seo',
        'name'     => 'Shopify SEO',
        'icon'     => 'ri-shopping-bag-3-line',
        'tagline'  => 'App bloat, duplicate collections, and platform limits managed within Shopify.',
        'purpose'  => 'Platform',
    ],
    'white-label-seo' => [
        'slug'     => 'white-label-seo',
        'name'     => 'White Label SEO',
        'icon'     => 'ri-user-star-line',
        'tagline'  => 'SEO execution under your agency brand: confidential, consistent, at any scope.',
        'purpose'  => 'Agencies',
    ],
    'ongoing-website-support' => [
        'slug'     => 'ongoing-website-support',
        'name'     => 'Ongoing Website Support',
        'icon'     => 'ri-heart-pulse-line',
        'tagline'  => 'Recurring monitoring and prioritized fixes that keep a site crawlable, fast, and visible in search and AI answers.',
        'purpose'  => 'Support',
    ],
];