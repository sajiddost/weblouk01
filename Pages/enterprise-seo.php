<?php
// =========================================================
// Enterprise SEO — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'enterprise-seo',
    'title'       => 'Enterprise SEO',
    'pill'        => 'Enterprise',
    'metaTitle'   => 'Enterprise SEO Services | Weblo',
    'metaDesc'    => 'SEO for large, complex sites: template-level audits, governance, and internal linking architecture built to fit existing dev and content workflows.',
    'h1'          => 'SEO That Scales Across 10,000+ Pages',
    'lead'        => 'At enterprise scale, SEO problems rarely stay isolated. We find the template-level causes, then build fixes your engineering and content teams can actually ship.',
    'image'       => 'assets/img/blog/4.jpg',
    'imageAlt'    => 'Enterprise SEO - template-level audits and governance for large websites',
    'related'     => ['technical-seo-audits', 'semantic-entity-seo', 'white-label-seo'],

    'intro' => [
        'A single broken template can touch ten thousand pages before anyone notices. A content team in one region publishes on top of a page another region already owns. A page that ranked well during a staging review loses its title tag three sprints later because a CMS update reset a default. None of this happens because anyone is careless. It happens because large websites move through more systems, more approvals, and more people than most SEO advice was written for.',
        'That&rsquo;s the environment we work in when a business asks for <strong>enterprise SEO</strong>.',
    ],

    'split' => [
        'kicker'    => 'Templates &bull; Governance &bull; Architecture',
        'lead'      => 'On a site with 50,000 URLs, auditing pages one at a time doesn&rsquo;t scale and doesn&rsquo;t produce fixes anyone can ship. We group pages by template and content type, then find which template-level issues cost the most visibility.',
        'image'     => 'assets/img/blog/4.jpg',
        'imageAlt'  => 'Enterprise SEO - template-level audit and governance',
        'points'    => [
            ['icon' => 'ri-braces-line', 'title' => 'Template-level audits', 'text' => 'Crawlability, indexation, rendering, and speed patterns reviewed across the page types that carry the most traffic and revenue, not page by page.'],
            ['icon' => 'ri-database-2-line', 'title' => 'Log file analysis', 'text' => 'We see how search engines are actually spending crawl budget, not just how the site is structured on paper.'],
            ['icon' => 'ri-link', 'title' => 'Linking architecture', 'text' => 'Link equity mapped to business priority &mdash; between brands, subdomains, and regional sites, not just down the main navigation.'],
            ['icon' => 'ri-earth-line', 'title' => 'International &amp; multi-domain', 'text' => 'hreflang implementation and duplicate content risk across ccTLDs or subfolders, where the business operates in multiple markets.'],
        ],
        'matters'   => [
            ['icon' => 'ri-tools-line', 'title' => 'Fixes fit your workflow', 'text' => 'Recommendations are built around how your org actually ships changes: sprints, editorial calendars, legal and brand review.'],
            ['icon' => 'ri-check-line', 'title' => 'One error x 30,000 URLs', 'text' => 'A canonicalization bug baked into a category template is a major fix &mdash; and we find it before it compounds.'],
            ['icon' => 'ri-robot-line', 'title' => 'AI-answer visibility', 'text' => 'Templated content checked for how it shows up in AI-generated answers, under <a href="' . site_url('aeo-geo') . '">AEO &amp; GEO</a>.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'The problem with SEO at scale',
            'paras'   => [
                'Most SEO frameworks assume one team, one CMS, and enough authority to ship a fix the same week it&rsquo;s found. Enterprise sites rarely work that way. Content lives across multiple subdomains, brand microsites, country-code domains, or headless CMS setups managed by different departments. A technical fix might need IT sign-off, legal review for anything customer-facing, and a place in a development backlog that already has a quarter of other work queued ahead of it.',
                'The result is a specific set of failure patterns: templates that generate thousands of near-duplicate pages, internal linking that reflects the org chart instead of user intent, crawl budget spent on faceted navigation and filtered URLs instead of revenue pages, and content standards that differ by region because no one owns SEO governance across the whole site.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-file-search-line', 'title' => 'Template-level audits', 'text' => 'Crawlability, indexation, rendering, and speed patterns across the page types that carry the most traffic and revenue.'],
                ['icon' => 'ri-list-check-2', 'title' => 'Prioritized roadmap', 'text' => 'Ranked by estimated impact and implementation effort, built to fit inside existing sprint and content capacity.'],
                ['icon' => 'ri-book-open-line', 'title' => 'Governance documentation', 'text' => 'Docs that decentralized content and dev teams can use without needing an SEO specialist to review every page.'],
                ['icon' => 'ri-medal-line', 'title' => 'Structured data scoped to need', 'text' => 'Schema recommendations scoped to what actually needs markup &mdash; see <a href="' . site_url('semantic-entity-seo') . '">Semantic &amp; Entity SEO</a>.'],
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-building-2-line', 'title' => 'Large or complex properties', 'text' => '10,000-plus indexed pages, multiple brands or subdomains, or international sites across several markets.'],
                ['icon' => 'ri-team-line', 'title' => 'In-house teams that outgrew audit tools', 'text' => 'Marketing teams that have run SEO for years but have never had someone map the site at template level.'],
                ['icon' => 'ri-git-branch-line', 'title' => 'Sites built by many agencies', 'text' => 'Teams that inherited a site built by several agencies over time with no single technical standard behind it.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Does this replace our in-house SEO team?', 'a' => 'No. Most enterprise engagements work alongside an existing marketing or SEO team, adding the template-level audit work, cross-department coordination, and technical depth that\'s hard to staff internally.'],
        ['q' => 'Do you work with agencies managing enterprise client accounts?', 'a' => 'Yes. If you\'re an agency handling an enterprise client and need technical depth or execution support behind the scenes, our White Label SEO service is built for that.'],
        ['q' => 'How long before we see results?', 'a' => 'It depends on the technical condition of the site, how fast fixes get implemented, and how competitive the market is. Template-level fixes on a large site tend to compound faster than page-by-page changes, but there\'s no fixed timeline that applies to every site, and we won\'t pretend otherwise.'],
        ['q' => 'What if our site is small?', 'a' => 'Enterprise SEO is a poor fit for a five-page marketing site or a business that needs one focused improvement. For that kind of work, a technical audit or our Small Business SEO service is usually the better starting point.'],
    ],

    'ctaTitle' => 'Start with a working conversation',
    'ctaLead'  => 'If you&rsquo;re managing SEO across a large or complex website and want a clearer picture of what&rsquo;s actually limiting growth, request a free SEO analysis and we&rsquo;ll talk through what an engagement would look like.',
];

// ---------------------------------------------------------
// Unique governance-dashboard layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-braces-line"></i>Template-level</span>
				<span class="svc-kicker"><i class="ri-tools-line"></i>Governance</span>
				<span class="svc-kicker"><i class="ri-link"></i>Architecture</span>
				<span class="svc-kicker"><i class="ri-earth-line"></i>Multi-domain</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== INTRO / FIT CARD ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
				<div class="svc-intro svc-intro-left fadeInUp" data-delay="0.1" style="text-align:left;max-width:100%;">
					<?php foreach ($service['intro'] as $p): ?>
						<p><?= $p ?></p>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="svc-sidecard fadeInUp" data-delay="0.2">
					<h3>Know when this fits</h3>
					<ul>
						<li><i class="ri-building-2-line"></i><span>10,000+ indexed pages, multiple brands, or international markets</span></li>
						<li><i class="ri-team-line"></i><span>In-house teams that outgrew audit-tool-level SEO</span></li>
						<li><i class="ri-scales-3-line"></i><span>Insights stay relevant to revenue pages, not every URL</span></li>
						<li><i class="ri-user-star-line"></i><span>Agencies running enterprise clients: <a href="<?= site_url('white-label-seo') ?>">White Label SEO</a></span></li>
						<li><i class="ri-window-2-line"></i><span>Not sure? Start with a <a href="<?= site_url('technical-seo-audits') ?>">Technical SEO audit</a></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== SCALE STATS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>50,000+</h4><p>URLs handled by grouping pages by template and content type, not one by one.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>1 &times; 30,000</h4><p>A single template bug multiplied across thousands of pages is found before it compounds.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Sprint-ready</h4><p>Fixes sized to fit existing dev backlogs, editorial calendars, and review cycles.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>Governance docs</h4><p>Standards decentralized content and dev teams can follow without SEO review on every page.</p></div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== SCALE WORK (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Working at <span style="color:var(--primary-color);">Scale</span></h2>
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
						<h3>Made to ship</h3>
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

<!-- ========== GOVERNANCE STEPS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-settings-4-line"></i>Method</h3>
			<h2 class="sec-title">How We Work at <span>Org Scale</span></h2>
			<p class="sec-lead">Not page-by-page. Template-by-template, sized for how your organization actually ships changes.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-braces-line"></i><span class="step-num">1</span></div>
					<h4>Inventory templates</h4>
					<p>Group pages by template and content type so one fix can cover thousands of URLs.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-traffic-light-line"></i><span class="step-num">2</span></div>
					<h4>Rank by revenue</h4>
					<p>Focus on the page types carrying the most traffic and revenue, not the whole catalog.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">3</span></div>
					<h4>Trace root causes</h4>
					<p>One canonicalization bug baked into a category template is found before it costs 30,000 pages.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-book-open-line"></i><span class="step-num">4</span></div>
					<h4>Fit to your workflow</h4>
					<p>Recommendations and governance docs slot into sprints, calendars, and review cycles.</p>
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
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
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

<!-- ========== WHO THIS IS FOR ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][2]['heading']) ?></h2>
			<div class="row">
				<?php foreach ($service['sections'][2]['points'] as $pt): ?>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
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

<!-- ========== FAQ ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-question-answer-line"></i>FAQ</h3>
			<h2 class="sec-title">Frequently Asked <span>Questions</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-12 mb-4 order-lg-2">
				<div class="accordion-holder fadeInUp" data-delay="0.3">
					<?php foreach ($service['faqs'] as $i => $faq) { $open = $i === 0 ? 'true' : 'false'; ?>
						<div class="accordion-item" data-open="<?= $open ?>">
							<h3 class="accordion-header"><?= $faq['q'] ?><span></span></h3>
							<div class="accordion-body"><p><?= $faq['a'] ?></p></div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 mb-4 order-lg-1">
				<div class="faq-wrap fadeInUp" data-delay="0.2">
					<i class="ri-question-answer-line"></i>
					<h2>Have a different question?</h2>
					<a href="<?= site_url('contact') ?>" class="btn btn-primary mb-2">Get a free assessment</a>
					<p>Prefer to email? <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></p>
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