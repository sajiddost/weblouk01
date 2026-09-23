<?php
// =========================================================
// Small Business SEO — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'small-business-seo',
    'title'       => 'Small Business SEO',
    'pill'        => 'Small Business',
    'metaTitle'   => 'Small Business SEO Services | Weblo',
    'metaDesc'    => 'SEO built for small business budgets and timelines. We audit, prioritize, and fix what\'s actually limiting your visibility, not a templated package.',
    'h1'          => 'SEO That Actually Fits a Small Business',
    'lead'        => 'Not &ldquo;cutting-edge.&rdquo; Just your site showing up when the right person searches for what you sell &mdash; and someone who can explain why it isn&rsquo;t happening yet.',
    'image'       => 'assets/img/blog/2.jpg',
    'imageAlt'    => 'Small business SEO - visibility for local and online small businesses',
    'related'     => ['seo-management', 'on-page-seo', 'aeo-geo'],

    'intro' => [
        'Most small businesses don&rsquo;t need &ldquo;cutting-edge&rdquo; SEO. They need their site to actually show up when the right person searches for what they sell, and they need someone who can explain why it isn&rsquo;t happening yet.',
        'A small business site often ranks for its own name and not much else. The owner has read that SEO takes time, so they wait &mdash; while a competitor with a thinner product but a better-structured site keeps taking the searches that should be theirs. In many cases the issue isn&rsquo;t content volume. It&rsquo;s that the site was never built with search intent in mind, the technical basics are shaky, or nobody has looked at what&rsquo;s actually happening in Search Console in months. That&rsquo;s the gap we work in.',
    ],

    'split' => [
        'kicker'    => 'Audit &bull; Prioritize &bull; Fix &bull; Measure',
        'lead'      => 'Small business SEO has different constraints than enterprise SEO: a limited budget, a small team, and a real person who needs results tied to leads or sales, not just traffic. The approach has to reflect that.',
        'image'     => 'assets/img/blog/2.jpg',
        'imageAlt'  => 'Small business SEO - audit, prioritize, fix, measure',
        'points'    => [
            ['icon' => 'ri-file-search-line', 'title' => 'Start with an audit', 'text' => 'We cover indexation, site structure, on-page targeting, content gaps, and the competitive landscape for the terms that actually matter to the business.'],
            ['icon' => 'ri-list-check-2', 'title' => 'Build a prioritized plan', 'text' => 'Not every fix matters equally. A broken canonical tag on a page nobody visits is less urgent than a service page targeting the wrong keyword entirely.'],
            ['icon' => 'ri-refresh-line', 'title' => 'Consolidate over creating', 'text' => 'A small site rarely has a content-quantity problem. It has three thin pages that should be one good page &mdash; so our content work is mostly editing and merging.'],
            ['icon' => 'ri-line-chart-line', 'title' => 'Measure against leads', 'text' => 'Rankings alone don&rsquo;t pay the bills. If a page ranks well but isn&rsquo;t bringing in the right kind of visitor, that&rsquo;s a signal we act on.'],
        ],
        'matters'   => [
            ['icon' => 'ri-robot-line', 'title' => 'AI answers hit small sites first', 'text' => 'AI Overviews answer informational queries directly, and a lot of small business content exists to answer exactly those questions. See <a href="' . site_url('aeo-geo') . '">AEO &amp; GEO</a>.'],
            ['icon' => 'ri-wallet-3-line', 'title' => 'Budget-aware triage', 'text' => 'Large sites can afford to fix everything. Small sites sequence by what moves visibility fastest for the least development time.'],
            ['icon' => 'ri-chat-smile-line', 'title' => 'The plan follows the diagnosis', 'text' => 'The plan is decided only after we&rsquo;ve looked at the site &mdash; no templated packages with fixed blog posts and generic outreach.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'What&rsquo;s different about doing this for a small site',
            'paras'   => [
                'Content decisions favor consolidation over volume. A small site rarely needs more pages; it needs three thin pages merged into one good page, or a service page rewritten around how customers actually search instead of the business&rsquo;s internal org chart.',
                'Technical fixes get triaged by budget, not just severity. We sequence by what will move visibility fastest for the least development time, and we&rsquo;re clear about what can wait.',
                'And the same audit &rarr; prioritize &rarr; fix &rarr; measure &rarr; adjust loop described on our <a href="' . site_url('seo-management') . '">SEO Management</a> page applies here &mdash; what changes is the scale and the kind of decisions that come up.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-file-search-line', 'title' => 'Technical &amp; on-page audit', 'text' => 'Crawlability, indexation, site speed issues, and structural problems, with a clear fix order.'],
                ['icon' => 'ri-focus-3-line', 'title' => 'Keyword &amp; intent analysis', 'text' => 'Based on what your customers are actually searching for, not what a tool says you should chase.'],
                ['icon' => 'ri-edit-line', 'title' => 'On-page optimization', 'text' => 'Titles, headings, and internal linking for priority pages, plus what to add, consolidate, or leave alone.'],
                ['icon' => 'ri-line-chart-line', 'title' => 'Monthly reporting', 'text' => 'Reporting that shows what changed and why &mdash; not just a screenshot of rising numbers.'],
            ],
        ],
        [
            'heading' => 'How long before you see results',
            'paras'   => [
                'It depends on the site&rsquo;s starting point and how competitive the target keywords are. Technical fixes can show movement within a few weeks. Content and authority-related gains usually take longer &mdash; often three to six months before the trend is clear.',
                'And a note on guarantees: we won&rsquo;t promise a specific ranking position or a fixed percentage increase in traffic before we&rsquo;ve seen the site, because that number would be invented. What we can say honestly: most small business sites we look at have at least a few fixable issues costing them visibility right now.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'How long does small business SEO take to show results?', 'a' => 'It depends on the site\'s starting point and how competitive the target keywords are. Technical fixes can show movement within a few weeks. Content and authority-related gains usually take longer, often three to six months before the trend is clear.'],
        ['q' => 'Do I need new content every month?', 'a' => 'Not necessarily. If existing pages are strong but poorly optimized, fixing them often matters more than publishing new ones. New content earns its place when there\'s a real gap in what the site answers, which is why we run a content gap analysis before recommending anything new.'],
        ['q' => 'Will you guarantee a ranking?', 'a' => 'No. Nobody controls Google\'s algorithm, and any agency guaranteeing a specific ranking position is making a promise it can\'t back. We can commit to a clear process, transparent reporting, and prioritized work based on what the site actually needs.'],
        ['q' => 'Do you work with businesses that sell online rather than through a physical location?', 'a' => 'Yes. Most of our small business clients sell nationally or online rather than out of a single storefront, so the work is weighted toward content, site structure, and technical health rather than location-based visibility. If you run an online store on <a href="' . site_url('shopify-seo') . '">Shopify</a> or <a href="' . site_url('wordpress-seo') . '">WordPress</a>, those guides cover platform-specific priorities.'],
    ],

    'ctaTitle' => 'Get a clear picture of what&rsquo;s limiting your visibility',
    'ctaLead'  => 'We&rsquo;ll start with a free SEO audit and walk you through what we find &mdash; including what&rsquo;s worth fixing first and what can wait.',
];

// ---------------------------------------------------------
// Unique grow-plan layout for this service (no shared layout).
// ---------------------------------------------------------
require __DIR__ . '/_page-head.php';
?>
<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<nav class="hs-breadcrumb fadeInUp" data-delay="0.05" aria-label="Breadcrumb">
			<a href="<?= site_url('') ?>">Home</a><i class="ri-arrow-right-s-line"></i>
			<a href="<?= site_url('') ?>#services">Services</a><i class="ri-arrow-right-s-line"></i>
			<span><?= e($service['title']) ?></span>
		</nav>
		<div class="col-lg-9 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($service['pill']) ?></h3>
			<h1><?= e($service['h1']) ?></h1>
			<p class="sec-lead mx-auto" style="max-width:780px;"><?= $service['lead'] ?></p>
			<div class="svc-kicker-row">
				<span class="svc-kicker"><i class="ri-file-search-line"></i>Audit first</span>
				<span class="svc-kicker"><i class="ri-list-check-2"></i>Prioritized plan</span>
				<span class="svc-kicker"><i class="ri-refresh-line"></i>Consolidate</span>
				<span class="svc-kicker"><i class="ri-line-chart-line"></i>Measure leads</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== INTRO ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-intro fadeInUp" data-delay="0.1">
			<?php foreach ($service['intro'] as $p): ?>
				<p><?= $p ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== EXPECTATION STATS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>Weeks</h4><p>Typical window for technical fixes to start showing movement in Search Console.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>3&ndash;6 months</h4><p>Before the content and authority trend line is usually clear enough to read.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Audit &rarr; plan</h4><p>The plan is decided only after we&rsquo;ve looked at the site &mdash; no templated packages.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>Leads, not ranks</h4><p>If a page ranks but brings the wrong visitor, that&rsquo;s a signal we act on.</p></div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== BUILD BACK (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Built for <span style="color:var(--primary-color);">Real Constraints</span></h2>
						<?php if (!empty($s['lead'])): ?><p class="seo-lead"><?= $s['lead'] ?></p><?php endif; ?>
						<?php foreach ($s['points'] as $pt): ?>
						<div class="seo-feature-item">
							<div class="seo-icon"><i class="<?= e($pt['icon']) ?>"></i></div>
							<div>
								<h3><?= $pt['title'] ?></h3>
								<p><?= $pt['text'] ?></p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="seo-content-right">
						<h3>What you should know</h3>
						<?php foreach ($s['matters'] as $m): ?>
						<div class="seo-point">
							<i class="<?= e($m['icon']) ?>"></i>
							<div>
								<strong><?= $m['title'] ?></strong>
								<span><?= $m['text'] ?></span>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== THREE-PHASE PLAN ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-road-map-line"></i>The plan</h3>
			<h2 class="sec-title">Three Phases, <span>Tied to Results</span></h2>
			<p class="sec-lead">A way to think about what small business SEO typically looks like &mdash; sequenced by what moves visibility fastest for the least effort.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-tools-line"></i><span class="step-num">Phase 1</span></div>
					<h4>Fix the basics</h4>
					<p>Crawlability, indexation, and structural problems that block visibility &mdash; the moves that can show movement within weeks.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-edit-line"></i><span class="step-num">Phase 2</span></div>
					<h4>Shape the right pages</h4>
					<p>Titles, headings, and internal linking on the pages that matter &mdash; mostly consolidating and editing, not publishing more.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">Phase 3</span></div>
					<h4>Measure for leads</h4>
					<p>Track whether the right kind of visitor arrives. If a page ranks but converts poorly, that&rsquo;s the next problem to solve.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHAT'S INCLUDED ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][1]['heading']) ?></h2>
			<div class="row">
				<?php foreach ($service['sections'][1]['points'] as $pt): ?>
				<div class="col-lg-3 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="<?= e($pt['icon']) ?>"></i>
						<h4><?= $pt['title'] ?></h4>
						<p><?= $pt['text'] ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<!-- ========== WHAT'S DIFFERENT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][0]['heading']) ?></h2>
			<?php foreach ($service['sections'][0]['paras'] as $p): ?>
				<p><?= $p ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== HONEST TIMELINE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][2]['heading']) ?></h2>
			<?php foreach ($service['sections'][2]['paras'] as $p): ?>
				<p><?= $p ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Frequently Asked <span>Questions</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12 mb-4">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-question-answer-line"></i>
					<h2>Have a different question?</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Get a free assessment</a>
					<p>Prefer to email? <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></p>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 mb-4">
				<div class="accordion-holder fadeInUp" data-delay="0.3">
					<?php foreach ($service['faqs'] as $i => $faq) { $open = $i === 0 ? 'true' : 'false'; ?>
						<div class="accordion-item" data-open="<?= $open ?>">
							<h3 class="accordion-header"><?= $faq['q'] ?><span></span></h3>
							<div class="accordion-body"><p><?= $faq['a'] ?></p></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== RELATED (internal links into other services) ========== -->
<?php if (!empty($related)): ?>
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-arrow-right-up-line"></i>Related Services</h3>
			<h2 class="sec-title">Explore More <span>Ways We Help</span></h2>
			<p class="sec-lead">This service rarely works alone. These are the areas it connects with most.</p>
		</div>
		<div class="row">
			<?php foreach ($related as $i => $r): ?>
			<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
				<a class="industry-card fadeInUp" href="<?= site_url($r['slug']) ?>" data-delay="<?= min(0.1 + $i * 0.12, 0.4) ?>">
					<div class="industry-icon"><i class="<?= e($r['icon']) ?>"></i></div>
					<h4><?= e($r['name']) ?></h4>
					<p><?= e($r['tagline']) ?></p>
					<span class="industry-link">Explore service <i class="ri-arrow-right-s-line"></i></span>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- ========== CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
					<h2><?= e($service['ctaTitle']) ?></h2>
					<p><?= $service['ctaLead'] ?></p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('audit') ?>" class="btn btn-white mb-2">Free Automated Audit</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require __DIR__ . '/../includes/footer.php';