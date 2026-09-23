<?php
// =========================================================
// llms.txt — plain-text, machine-readable site overview for
// LLM / AI crawlers (GEO). Served at /llms.txt
// =========================================================
require_once __DIR__ . '/config.php';

header('Content-Type: text/markdown; charset=UTF-8');

$home = absolute_url('');
$contact = absolute_url('contact');
$blog = absolute_url('blog');
?>
# Weblo

> Digital agency from Kasur, Pakistan (est. 2017): web design, web development, and white-hat SEO for clients across the UK, US, UAE, Canada, and Pakistan.

Weblo is a full-service digital agency. We design and build fast, secure websites and ecommerce stores, write the content that sells them, and run the SEO programs that get them found on Google and in AI search (Google's AI Overview, ChatGPT, Perplexity). Design, development, copy, technical SEO, and ongoing support all happen under one roof, so the site we launch is the site search engines can crawl, understand, and rank.

Key differentiator: honesty. Fixed quotes based on real scope, white-hat and Google-compliant work, no ranking guarantees, and reporting measured against metrics that actually mean something to the business.

## Core Services

- Technical SEO Audits: crawlability, indexation, site architecture, Core Web Vitals, prioritized by impact.
- SEO Management: ongoing strategy, execution, and reporting run as a continuous function.
- Small Business SEO: local relevance, tighter keyword targeting, maintainable content plans.
- Enterprise SEO: templated fixes that scale across thousands of URLs, plus governance.
- WordPress SEO & Builds: plugin conflicts, theme bloat, duplicate archives, accurate schema.
- Shopify SEO & Stores: app bloat, duplicate collections, platform limits managed within Shopify.
- On-Page SEO: title tags, header structure, and internal linking built around page intent.
- Semantic SEO: entity coverage and topical depth so pages satisfy search engines and AI models.
- Authority & Link Building: relevance over volume; we cut weak links before adding new ones.
- AEO & GEO / AI Search Optimization: content structured to be understood, summarized, and cited by answer engines.
- White Label SEO: full-service SEO delivered under an agency's brand.
- Ongoing Website Support: monitoring and prioritized fixes that keep a site fast, secure, and visible.

## Who It Is For

- Companies starting from zero (new builds, foundings, first SEO pushes).
- Businesses rebuilding a slow or outdated website.
- Large sites with years of technical debt (scale, governance, templated fixes).
- Agency owners who need white-label fulfillment rather than building an in-house team.

## How Weblo Works

1. Discover: a short call to understand goals, audience, and the current site. Fixed quote up front.
2. Design: wireframes and visual design approved before any code is written.
3. Build: development, copy, and on-page SEO in parallel — fast pages, clean code.
4. Grow & Measure: post-launch tracking against agreed metrics, with honest adjustment.

## Key Pages

- [Home](<?= $home ?>) — overview of services, approach, and FAQ.
- [About](<?= absolute_url('about') ?>) — the story behind Weblo, est. 2017 in Kasur, Pakistan.
- [Contact](<?= $contact ?>) — request a quote or free SEO assessment. Contact email: <?= CONTACT_EMAIL ?>.
- [Blog & Guides](<?= $blog ?>) — practical articles on audits, AEO & GEO, semantic SEO, and web design.

### Service Pages

- [Technical SEO Audits](<?= absolute_url('technical-seo-audits') ?>) — crawlability, indexation, architecture, Core Web Vitals.
- [SEO Management](<?= absolute_url('seo-management') ?>) — ongoing strategy, execution, and reporting.
- [Small Business SEO](<?= absolute_url('small-business-seo') ?>) — SEO sized to small budgets and teams.
- [On-Page SEO](<?= absolute_url('on-page-seo') ?>) — intent-first titles, headings, and internal linking.
- [Enterprise SEO](<?= absolute_url('enterprise-seo') ?>) — templated fixes and governance for 10,000+ page sites.
- [Semantic & Entity SEO](<?= absolute_url('semantic-entity-seo') ?>) — disambiguation, accurate schema, topical depth.
- [Authority & Link Building](<?= absolute_url('authority-link-building') ?>) — relevance over volume, toxic-link cleanup.
- [AEO & GEO Optimization](<?= absolute_url('aeo-geo') ?>) — being cited by AI Overviews, ChatGPT, and Perplexity.
- [WordPress SEO](<?= absolute_url('wordpress-seo') ?>) — plugin conflicts, theme bloat, taxonomy cleanup.
- [Shopify SEO](<?= absolute_url('shopify-seo') ?>) — app bloat, duplicate collections, platform limits.
- [White Label SEO](<?= absolute_url('white-label-seo') ?>) — SEO execution delivered under an agency's brand.
- [Ongoing Website Support](<?= absolute_url('ongoing-website-support') ?>) — monitoring and prioritized fixes after launch.

## Blog Topic Clusters

- Technical SEO, audits, and prioritization.
- AEO & GEO: being cited by AI answers and generative engines.
- Semantic SEO: entities over keywords.
- Web design and development best practices.
- Small business SEO and enterprise SEO at scale.

## Contact

- Email: <?= CONTACT_EMAIL ?>
- Phone (Pakistan): <?= CONTACT_PHONE ?>
- Phone (UK): <?= CONTACT_PHONE_UK ?>
- Office: <?= CONTACT_ADDRESS ?>
- Response time: within one business day (Mon-Fri).
- Working with clients across the UK, US, UAE, Canada, and Pakistan; English-language work, white-hat only.

This file is maintained as a plain-text snapshot of the site for AI readers. For exact pages and structured data, crawl the site directly.