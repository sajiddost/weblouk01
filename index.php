<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'Weblo — Web Design, Development & SEO Agency';
$pageDescription = 'Weblo is a digital agency building high-converting websites and growing organic traffic through honest, white-hat SEO and AI search optimization. Based in Pakistan, serving the UK, US & beyond.';
$active          = 'home';

// FAQ content doubles as FAQPage structured data for answer engines (AEO).
$faqs = [
    ['q' => 'What does Weblo do?', 'a' => 'Weblo is a full-service digital agency. We design and build websites, run white-hat SEO programs, create marketing content, and keep sites fast, secure, and visible in search and AI answers. You can hire us for one project or as an ongoing partner.'],
    ['q' => 'How much does a website cost?', 'a' => 'It depends on scope. A focused business or portfolio site costs less than a large ecommerce build. We quote based on the actual work involved and give you a fixed price before we start - no hourly surprises, no hidden fees.'],
    ['q' => 'Do you only work with clients in Pakistan?', 'a' => 'No. We hire and operate from Kasur, Pakistan, but we work with clients across the UK, US, UAE, and beyond - building sites, running SEO, and supporting teams across time zones.'],
    ['q' => 'How long does a website take to build?', 'a' => 'A typical business website takes 2 to 4 weeks from kickoff to launch. Larger ecommerce or custom builds take longer. You get a clear timeline up front, and we hit it.'],
    ['q' => 'How do you charge for SEO?', 'a' => 'A project is charged at a fixed project fee. Ongoing SEO is a monthly retainer sized to your site and goals, not a one-size-fits-all package.'],
    ['q' => 'Do you guarantee rankings?', 'a' => 'No, and you should not trust anyone who does. What we guarantee is a clear process, honest reporting, and work that follows Google\'s guidelines.'],
    ['q' => 'Who owns the website when it\'s done?', 'a' => 'You do - the design, code, domain, and content\u2014plus a handover, so you\'re never locked in.'],
];

$faqJson = json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return [
            '@type'          => 'Question',
            'name'           => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ];
    }, $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$extraSchema = '<script type="application/ld+json">' . $faqJson . '</script>';

require __DIR__ . '/includes/header.php';
?>

<!-- ========== HERO ========== -->
<section id="home" class="hero section">
	<div class="container">
		<div class="col-lg-10 col-xs-12 mx-auto text-center no-padding fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-star-fill"></i>Digital Agency — Web Design, Development &amp; SEO</h3>
			<h1>Websites That Convert. SEO That Compounds.</h1>
			<p class="hero-lead">Weblo designs, builds, and grows websites that look sharp, load fast, and get found on Google and AI search. From a single landing page to a full ecommerce store, we handle everything in-house.</p>
			<div class="hero-audit">
				<form method="get" action="<?= site_url('audit') ?>" class="hero-audit-form" novalidate>
					<i class="ri-global-line"></i>
					<input type="text" name="url" placeholder="Enter your website URL - e.g. example.com" required aria-label="Your website URL">
					<button type="submit" class="btn btn-primary">Free SEO Audit <i class="ri-rocket-line"></i></button>
				</form>
				<p class="hero-audit-note"><i class="ri-cpu-line"></i>Instant, free technical audit - titles, meta, headings, schema, AI-readiness and speed</p>
			</div>
			<div class="hero-cta">
				<a href="<?= site_url('contact') ?>" class="btn btn-primary">Start a Project <i class="ri-rocket-line"></i></a>
				<a href="#services" class="btn btn-dark">Explore Services</a>
			</div>
		</div>
	</div>
</section>
<!-- ========== END HERO ========== -->

<!-- ========== STATS ========== -->
<section class="section section-dark pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.1">
					<h4>2017</h4>
					<p>Founded and shipping quality work ever since</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.2">
					<h4>120+</h4>
					<p>Websites designed, built, and successfully launched</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.3">
					<h4>5</h4>
					<p>Countries served - UK, US, UAE, Canada &amp; Pakistan</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
				<div class="stat-box fadeInUp" data-delay="0.4">
					<h4>100%</h4>
					<p>White-hat, Google-compliant work - no shortcuts</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END STATS ========== -->

<!-- ========== WHY BUSINESSES COME TO US ========== -->
<section class="section section-white pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="sec-header left fadeInUp" data-delay="0.1">
					<h3 class="pill"><i class="ri-arrow-right-up-line"></i>Why Businesses Come to Weblo</h3>
					<h2 class="sec-title">One Team From First Sketch to First Rank.</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.2">
				<div class="hs-split-text">
					<p>Every business that contacts an agency has usually been burned by one. A freelancer who disappeared mid-project. A "web company" that outsourced the build and delivered a bloated template. Another that charged monthly for SEO and sent PDFs nobody opened. It fails when design, development, and marketing are handed to different people who never talk to each other.</p>
					<p>That gap is where we operate. We're a senior, cross-functional team that designs, builds, writes, and optimizes your site as one system - so the pages we launch are the pages Google can crawl, understand, and rank.</p>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="feature-card h-100 fadeInUp" data-delay="0.2">
					<i class="ri-rocket-line"></i>
					<h4>A pretty site is not a working site</h4>
					<p>A site can look beautiful and still fail to load, rank, or convert. We build on performance budgets, not vibes - so fast is a feature from day one.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="feature-card h-100 fadeInUp" data-delay="0.4">
					<i class="ri-search-line"></i>
					<h4>Design and SEO are one discipline</h4>
					<p>We structure content, headings, and schema while we design, not after. That's the difference between a site Google reads and a site Google skips.</p>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- ========== END WHY ========== -->

<!-- ========== WHAT WE ACTUALLY DO ========== -->
<section class="section-dark pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>What We Actually Do</h3>
			<h2 class="sec-title">Every Service You Need, Under One Roof</h2>
			<p class="sec-lead section-sub">Web design, web development, SEO, content, and ongoing support - owned by one team so nothing falls through the cracks.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-palette-line"></i></div>
					<h4>Design</h4>
					<p>Brand identities, UI/UX, and responsive designs that make your business look worth the price you charge.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">See what we build <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-code-s-slash-line"></i></div>
					<h4>Development</h4>
					<p>Fast, secure websites and ecommerce stores - custom-coded or on WordPress &amp; Shopify, with clean handover.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">How we build <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.3">
					<div class="industry-icon"><i class="ri-line-chart-line"></i></div>
					<h4>Grow</h4>
					<p>White-hat SEO, content, and authority building that turns your site into a predictable source of leads.</p>
					<a href="<?= site_url('seo-management') ?>" class="industry-link">SEO that grows <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.4">
					<div class="industry-icon"><i class="ri-heart-pulse-line"></i></div>
					<h4>Support</h4>
					<p>Monitoring, updates, and prioritized fixes that keep your site fast, secure, and visible after launch.</p>
					<a href="<?= site_url('ongoing-website-support') ?>" class="industry-link">Ongoing care <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END WHAT WE DO ========== -->

<!-- ========== CORE SERVICES ========== -->
<section id="services" class="section section-white pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>Our Services</h3>
			<h2 class="sec-title">Pick a Service or Let Us Build the Whole Thing</h2>
			<p class="sec-lead">Every service links to a detailed page, so you know exactly what&rsquo;s included before you contact us.</p>
		</div>
		<div class="row dark-tiles">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-dashboard-3-line"></i></div>
					<h4>SEO Management</h4>
					<p>Ongoing strategy, execution, and reporting run as one coordinated program - not a pile of random optimizations.</p>
					<a href="<?= site_url('seo-management') ?>" class="industry-link">Explore program <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-store-line"></i></div>
					<h4>Small Business SEO</h4>
					<p>Local relevance, tighter keyword targeting, and a content plan a smaller team can realistically maintain.</p>
					<a href="<?= site_url('small-business-seo') ?>" class="industry-link">Small business SEO <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-building-line"></i></div>
					<h4>Enterprise SEO</h4>
					<p>Templated fixes that scale across thousands of URLs, plus the governance and cross-team coordination large sites require.</p>
					<a href="<?= site_url('enterprise-seo') ?>" class="industry-link">Enterprise SEO <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.15">
					<div class="industry-icon"><i class="ri-wordpress-line"></i></div>
					<h4>WordPress SEO &amp; Builds</h4>
					<p>Plugin conflicts, theme bloat, duplicate archive pages, and schema that actually matches what's on the page.</p>
					<a href="<?= site_url('wordpress-seo') ?>" class="industry-link">WordPress fixes <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-window-2-line"></i></div>
					<h4>On-Page SEO</h4>
					<p>Title tags, header structure, and internal linking built around what a page is actually trying to rank for.</p>
					<a href="<?= site_url('on-page-seo') ?>" class="industry-link">On-page work <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-robot-line"></i></div>
					<h4>AEO &amp; GEO / AI Search</h4>
					<p>Structuring content so it can be understood, summarized, and cited by AI answer engines like ChatGPT, Perplexity, and AI Overviews.</p>
					<a href="<?= site_url('aeo-geo') ?>" class="industry-link">AI search optimization <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.15">
					<div class="industry-icon"><i class="ri-link"></i></div>
					<h4>Authority &amp; Link Building</h4>
					<p>We'd rather cut the weakest 20% of a client's backlink profile than add ten more links that carry no topical relevance.</p>
					<a href="<?= site_url('authority-link-building') ?>" class="industry-link">Build authority <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-shopping-bag-3-line"></i></div>
					<h4>Shopify SEO &amp; Stores</h4>
					<p>App bloat, duplicate collections, and platform limits managed within Shopify - built for speed and conversions.</p>
					<a href="<?= site_url('shopify-seo') ?>" class="industry-link">Shopify work <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.25">
					<div class="industry-icon"><i class="ri-user-star-line"></i></div>
					<h4>White Label SEO</h4>
					<p>Full-service SEO delivered under your agency's brand, from audits through client-ready reporting.</p>
					<a href="<?= site_url('white-label-seo') ?>" class="industry-link">White label for agencies <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.15">
					<div class="industry-icon"><i class="ri-file-search-line"></i></div>
					<h4>Technical SEO Audits</h4>
					<p>Crawlability, indexation, site architecture, and Core Web Vitals, narrowed to the fixes that actually move the needle.</p>
					<a href="<?= site_url('technical-seo-audits') ?>" class="industry-link">Request an audit <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-node-tree"></i></div>
					<h4>Semantic &amp; Entity SEO</h4>
					<p>Entity coverage and topical depth, so a page includes what a search engine - or an AI model - would expect to find.</p>
					<a href="<?= site_url('semantic-entity-seo') ?>" class="industry-link">Semantic SEO <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.25">
					<div class="industry-icon"><i class="ri-settings-3-line"></i></div>
					<h4>Ongoing Website Support</h4>
					<p>Recurring monitoring and prioritized fixes that keep a site crawlable, fast, and visible in search and AI answers.</p>
					<a href="<?= site_url('ongoing-website-support') ?>" class="industry-link">Ongoing care <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END CORE SERVICES ========== -->

<!-- ========== WHO THIS IS FOR ========== -->
<section class="section section-dark pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>Who This Is For</h3>
			<h2 class="sec-title">Different Businesses. Different Priorities.</h2>
			<p class="sec-lead">None of these situations call for the same tactics, which is one reason we're cautious about agencies that pitch identical packages regardless of client size or type.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.1">
					<div class="industry-icon"><i class="ri-rocket-2-line"></i></div>
					<h4>Starting From Zero</h4>
					<p>Need a brand-new site or a first SEO push? We build the foundation - a fast, clear website plus realistic early keywords you can actually compete for.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Start from zero <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.2">
					<div class="industry-icon"><i class="ri-refresh-line"></i></div>
					<h4>Rebuilding a Weak Site</h4>
					<p>If your current site is slow, outdated, or failing to convert, the priority is a rebuild that fixes design, speed, and SEO in one pass instead of three separate projects.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Rebuild the site <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.3">
					<div class="industry-icon"><i class="ri-server-line"></i></div>
					<h4>Large Sites With Technical Debt</h4>
					<p>If you're dealing with a large site carrying years of technical debt, the priority changes again: scale, governance, and fixes that can be templated across thousands of pages.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">Tackle technical debt <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
				<div class="industry-card fadeInUp" data-delay="0.4">
					<div class="industry-icon"><i class="ri-building-2-line"></i></div>
					<h4>Agency Owners</h4>
					<p>If you're an agency owner, the priority isn't strategy at all. It's finding a partner who can deliver consistent, white-labeled work without you managing the details.</p>
					<a href="<?= site_url('contact') ?>" class="industry-link">White label partner <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END WHO THIS IS FOR ========== -->

<!-- ========== HOW WE WORK ========== -->
<section id="how" class="section section-white pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>How We Work</h3>
			<h2 class="sec-title">A Process Built Around Delivery</h2>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-chat-3-line"></i><span class="step-num">1</span></div>
					<h4>Discover</h4>
					<p>A short call to understand your goals, audience, and current website. You get a clear scope and a fixed price.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-palette-line"></i><span class="step-num">2</span></div>
					<h4>Design</h4>
					<p>Wireframes and visual design built around your brand and your customers - you approve the look before we code it.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-code-s-slash-line"></i><span class="step-num">3</span></div>
					<h4>Build</h4>
					<p>We develop, write, and optimize in parallel - fast pages, clean code, and on-page SEO built in from the first commit.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">4</span></div>
					<h4>Grow &amp; Measure</h4>
					<p>After launch we track what matters. If something isn't working, we say so and adjust rather than waiting for a quarterly review.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END HOW WE WORK ========== -->

<!-- ========== TESTIMONIALS ========== -->
<section class="section-dark pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-star-fill"></i>Client Stories</h3>
			<h2 class="sec-title">What Clients Say About Weblo</h2>
		</div>
		<div class="testi-grid fadeInUp" data-delay="0.2">
			<div class="testi-card">
				<div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
				<p>"Weblo rebuilt our site in three weeks and our online orders doubled within two months. The design finally looks like our brand and it loads instantly."</p>
				<div class="testi-person">
					<i class="ri-store-3-line"></i>
					<div><strong>Alex Carter</strong><span>Fashion boutique owner, London</span></div>
				</div>
			</div>
			<div class="testi-card">
				<div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
				<p>"Most agencies oversell and underdeliver. Weblo did the opposite - a clear audit, realistic timelines, and rankings that actually improved."</p>
				<div class="testi-person">
					<i class="ri-building-line"></i>
					<div><strong>Sarah Mitchell</strong><span>Marketing director, Manchester</span></div>
				</div>
			</div>
			<div class="testi-card">
				<div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
				<p>"They took over our WordPress site, fixed years of plugin bloat, and now we show up in AI Overviews too. Best agency decision we made."</p>
				<div class="testi-person">
					<i class="ri-user-3-line"></i>
					<div><strong>Hamza Raza</strong><span>Founder, Digital agency, Karachi</span></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END TESTIMONIALS ========== -->

<!-- ========== GLOBAL REACH / PRICING / HONESTY ========== -->
<section class="section section-white pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="feature-card fadeInUp" data-delay="0.1">
					<i class="ri-earth-line"></i>
					<h4>Global Reach, Local Support</h4>
					<p>Weblo operates from Kasur, Pakistan, and works with clients across the UK, US, UAE, Canada, and Pakistan. Time-zone overlap, direct communication, and WhatsApp or Slack updates whenever you need them.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="feature-card fadeInUp" data-delay="0.2">
					<i class="ri-money-dollar-circle-line"></i>
					<h4>On Pricing</h4>
					<p>A landing page costs less than a custom ecommerce build. A small SEO fix-up costs less than a multi-market enterprise program. What stays consistent is that pricing is tied to the actual work involved - not a fixed package designed to look comprehensive on a sales page.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="feature-card fadeInUp" data-delay="0.3">
					<i class="ri-shield-check-line"></i>
					<h4>A Note on What We Won't Promise</h4>
					<p>We won't guarantee a specific ranking position or a fixed traffic percentage. Anyone who does is overconfident or not being straight with you. What we commit to is clear process, honest reporting, and work that follows Google's guidelines.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END GLOBAL REACH ========== -->

<!-- ========== FAQ ========== -->
<section id="faqs" class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>FAQ</h3>
			<h2 class="sec-title">Frequently Asked Questions</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-chat-question-line"></i>
					<h2>Still have a question? Let's talk.</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark mb-2">Get a free assessment</a>
					<p>Prefer to email? <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></p>
					<p>Call <a href="tel:+923334832348"><?= e(CONTACT_PHONE) ?></a></p>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 mb-4">
				<div class="accordion-holder fadeInUp" data-delay="0.3">
					<?php foreach ($faqs as $i => $faq) {
						$open = $i === 0 ? 'true' : 'false';
						?>
						<div class="accordion-item" data-open="<?= $open ?>">
							<h3 class="accordion-header"><?= e($faq['q']) ?><span></span></h3>
							<div class="accordion-body"><p><?= e($faq['a']) ?></p></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END FAQ ========== -->

<!-- ========== CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="band-yellow fadeInUp text-center" data-delay="0.1">
			<h2>Ready to Build Something Worth Finding?</h2>
			<p>Tell us about your website, your goals, or the project stuck in your head - we'll reply within one business day with a clear answer, not a sales pitch.</p>
			<a href="<?= site_url('contact') ?>" class="btn btn-dark">Start My Project <i class="ri-arrow-right-line"></i></a>
		</div>
	</div>
</section>
<!-- ========== END CTA ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>