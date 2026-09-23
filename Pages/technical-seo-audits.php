<?php
// =========================================================
// Technical SEO Audits — service page
// Edit the $service array below, then save. The rest of the
// page (hero, schema, FAQ, layout) is rendered automatically.
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'technical-seo-audits',
    'title'       => 'Technical SEO Audits',
    'pill'        => 'Technical SEO',
    'metaTitle'   => 'Technical SEO Audits | Weblo',
    'metaDesc'    => 'Find and fix the crawl, indexing, sitemap, and Core Web Vitals issues limiting your site, prioritized by impact so you know what to fix first.',
    'h1'          => 'Find the Technical Issues Holding Your Site Back',
    'lead'        => 'A technical audit that ranks every finding by business impact and hands your team a fix-list they can act on &mdash; not a 40-page PDF nobody reads.',
    'image'       => 'assets/img/blog/1.jpg',
    'imageAlt'    => 'Technical SEO audit covering crawlability, indexing, sitemaps and Core Web Vitals',
    'related'     => ['seo-management', 'wordpress-seo', 'shopify-seo'],

    'intro' => [
        'Most sites that struggle in search aren&rsquo;t short on content. They&rsquo;re held back by problems search engines can&rsquo;t work around: pages that don&rsquo;t get crawled, sitemaps that list URLs that no longer exist, redirect chains nobody&rsquo;s cleaned up in years. None of that shows up when you look at a page in a browser. It only shows up when someone goes looking for it.',
        'That&rsquo;s what a <strong>technical audit</strong> is for. Not a checklist exercise, and not a 40-page PDF that gets skimmed once and filed away. The point is to find what&rsquo;s actually limiting the site, rank it by impact, and hand over something a developer or content team can act on without needing a translator.',
    ],

    'split' => [
        'kicker'    => 'Crawl &bull; Index &bull; Vitals &bull; Architecture',
        'lead'      => 'We review the areas that cause the most damage when they go unnoticed, then rank what we find by impact and effort.',
        'image'     => 'assets/img/blog/1.jpg',
        'imageAlt'  => 'Technical SEO audit - crawl, indexing, sitemap and Core Web Vitals review',
        'points'    => [
            ['icon' => 'ri-search-eye-line', 'title' => 'Crawl &amp; access', 'text' => 'Crawl budget is validated with log files where available, not just simulated crawls. Blocked resources, budget wasted on low-value URLs, and broken internal paths get flagged.'],
            ['icon' => 'ri-database-2-line', 'title' => 'Indexing problems', 'text' => 'Pages that should be indexed and aren&rsquo;t, pages that are indexed and shouldn&rsquo;t be, and mismatches between the sitemap and what Google is actually indexing.'],
            ['icon' => 'ri-global-line', 'title' => 'Sitemap accuracy', 'text' => 'Sitemaps that include noindexed pages, redirects, 404s, or robots.txt-blocked URLs create confusion for crawlers and waste crawl budget.'],
            ['icon' => 'ri-rocket-line', 'title' => 'Core Web Vitals &amp; speed', 'text' => 'LCP, INP, and CLS checked with field data from real visitors across page templates, since performance issues are often template-specific.'],
        ],
        'matters'   => [
            ['icon' => 'ri-list-check-2', 'title' => 'Ranked by impact', 'text' => 'Every issue is scored by how much it affects visibility and how much effort it takes to fix.'],
            ['icon' => 'ri-shield-check-line', 'title' => 'Grouped by cause', 'text' => 'Findings are traced to one underlying cause rather than listed by tool output.'],
            ['icon' => 'ri-refresh-line', 'title' => 'Actionable handoff', 'text' => 'You get fix specifications a developer can implement, plus a walkthrough call.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'How the process works',
            'paras'   => [
                'We start by crawling the site and pulling data from Google Search Console, Google Analytics, and server log files where they&rsquo;re available. Log files matter because they show what search engines actually did on the site, not what a third-party crawler assumes they did.',
                'From there, findings get grouped by cause rather than by tool output. A page with low organic traffic might show up as a content issue, an indexing issue, or an internal linking issue in three different tools, but there&rsquo;s usually one underlying cause. We trace it back before recommending a fix.',
                'Every issue gets a priority based on two things: how much it&rsquo;s likely affecting visibility or rankings, and how much effort it takes to fix. A site-wide canonical tag error usually outranks a handful of missing alt tags, even though both show up as &ldquo;issues&rdquo; in an automated scan. An audit that lists 200 problems with no ranking is a data dump, not a plan.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-file-search-line', 'title' => 'Full crawl &amp; log analysis', 'text' => 'A complete technical crawl plus log file review so we see what search engines actually did, not what a tool assumes.'],
                ['icon' => 'ri-list-check-2', 'title' => 'Prioritized findings', 'text' => 'Issues organized by impact and effort, with specific fix recommendations for each one, not just &ldquo;improve page speed.&rdquo;'],
                ['icon' => 'ri-chat-smile-line', 'title' => 'Walkthrough call', 'text' => 'A working session to go through the findings with your team or developer, so nothing sits waiting for a translator.'],
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-pie-chart-2-line', 'title' => 'Sites that have plateaued', 'text' => 'Reasonable content and link efforts exist, but visibility stopped moving. The technical foundation is usually the missing piece.'],
                ['icon' => 'ri-refresh-line', 'title' => 'Sites after a migration', 'text' => 'Recently migrated, redesigned, or changed platforms and seen a drop in visibility since? Redirect and canonicalization issues are common culprits.'],
                ['icon' => 'ri-server-line', 'title' => 'Sites nobody has audited in a year', 'text' => 'For most growing sites, a year is long enough for problems to accumulate quietly. A fresh technical pass surfaces them.'],
            ],
        ],
        [
            'heading' => 'A quick example of what an audit catches',
            'paras'   => [
                'Take a hypothetical site with a sitemap listing 4,000 URLs, but a crawl shows only 2,600 of those return a 200 status. The rest are redirects, 404s, or noindexed pages still sitting in the sitemap. Crawl budget gets spent checking URLs that don&rsquo;t need checking, while newer or updated pages wait longer to get crawled. Cleaning the sitemap doesn&rsquo;t fix rankings by itself, but it removes friction that was making everything else slower to take effect.',
                'Not sure whether a full audit is right for you? Running <a href="<?= site_url(\'shopify-seo\') ?>">Shopify</a> or <a href="<?= site_url(\'wordpress-seo\') ?>">WordPress</a>? Audit findings tend to cluster around platform-specific issues, so those guides are worth a look first.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'How long does an audit take?', 'a' => 'Most audits take one to two weeks for smaller sites. Larger or more complex sites, especially those with international versions or heavy JavaScript, take longer because log file analysis and rendering checks need more time to do properly.'],
        ['q' => 'Will fixing these issues guarantee higher rankings?', 'a' => 'No, and we won\'t tell you otherwise. Technical fixes remove obstacles; they don\'t replace the need for relevant content and a credible link profile. What they do is make sure the rest of your SEO work actually has a chance to register with search engines.'],
        ['q' => 'Do you implement the fixes too?', 'a' => 'Yes, or we hand the findings to your existing developer with clear instructions, depending on the engagement. Some fixes are a five-minute change; others need a developer\'s involvement, and we\'ll tell you which is which.'],
        ['q' => 'How is this different from a free SEO audit tool?', 'a' => 'Automated tools are useful for surfacing symptoms, but they\'re not good at telling you which of 150 flagged issues is actually costing you traffic. That judgment comes from reviewing the data manually against how the site is actually performing.'],
    ],

    'ctaTitle' => 'Get a technical audit that tells you what to fix first',
    'ctaLead'  => 'If you want to know what&rsquo;s actually holding your site back &mdash; not just a list of everything a crawler can flag &mdash; start with a free assessment and we&rsquo;ll walk you through it.',
];

// ---------------------------------------------------------
// Unique audit-console layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Crawl &amp; logs</span>
				<span class="svc-kicker"><i class="ri-database-2-line"></i>Indexing</span>
				<span class="svc-kicker"><i class="ri-rocket-line"></i>Core Web Vitals</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== FINDINGS SUMMARY ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>Crawl &amp; logs</h4><p>Validated against what search engines actually did, not just a simulated crawl.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>Grouped by cause</h4><p>Findings traced to one underlying issue rather than a raw list of tool output.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Impact-scored</h4><p>Every issue ranked by likely effect on visibility against effort to fix.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>Dev-ready</h4><p>Fix specifications a developer can implement without a translator.</p></div>
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

<?php $s = $service['split']; ?>
<!-- ========== REVIEW SCOPE (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>What the <span style="color:var(--primary-color);">Review Covers</span></h2>
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
						<h3>Why the output matters</h3>
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

<!-- ========== PRIORITY FINDINGS TABLE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">How findings are <span style="color:var(--primary-color);">prioritized</span></h2>
			<p class="svc-section-lead">Not every issue is worth the same attention and budget. This is how a real report sorts them.</p>
			<div class="svc-table-wrap">
				<table class="svc-table">
					<tr><th>Finding</th><th>Impact</th><th>Effort</th><th>Why it ranks this way</th></tr>
					<tr><td>Sitemap lists dead URLs (404s, redirects, noindexed pages)</td><td><span class="tag high">High</span></td><td><span class="tag low">Low</span></td><td>Wastes crawl budget and delays newer pages from getting crawled.</td></tr>
					<tr><td>Canonical tag error on a template covering thousands of pages</td><td><span class="tag high">High</span></td><td><span class="tag high">High</span></td><td>Huge surface area; needs a dev cycle, but the payoff compounds across every page.</td></tr>
					<tr><td>LCP slow on the templates that carry the most traffic</td><td><span class="tag med">Medium</span></td><td><span class="tag med">Medium</span></td><td>Template-specific performance fixes take time but improve a whole page type.</td></tr>
					<tr><td>Missing alt text on a handful of images</td><td><span class="tag low">Low</span></td><td><span class="tag low">Low</span></td><td>Fixable in minutes but rarely moves rankings on its own.</td></tr>
				</table>
			</div>
			<p>Your own report ends with the same kind of sorted list &mdash; nothing labeled &ldquo;fix everything.&rdquo; If core visibility is limited by content or authority rather than technical issues, we&rsquo;ll say so and point you to <a href="<?= site_url('on-page-seo') ?>">On-Page</a> or <a href="<?= site_url('authority-link-building') ?>">Authority &amp; Link Building</a> instead.</p>
		</div>
	</div>
</section>

<!-- ========== PROCESS STEPS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-settings-4-line"></i>Process</h3>
			<h2 class="sec-title">How the audit <span>Runs</span></h2>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-database-2-line"></i><span class="step-num">1</span></div>
					<h4>Data intake</h4>
					<p>Crawl plus Search Console, Analytics, and log files where available &mdash; so findings rest on what search engines actually did.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-shuffle-line"></i><span class="step-num">2</span></div>
					<h4>Group by cause</h4>
					<p>Outputs get traced to one underlying cause, not repeated as three separate &ldquo;issues&rdquo; from three different tools.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-list-check-2"></i><span class="step-num">3</span></div>
					<h4>Score by impact</h4>
					<p>Every finding is ranked by likely effect on visibility against the effort to fix it &mdash; a plan, not a data dump.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-chat-smile-line"></i><span class="step-num">4</span></div>
					<h4>Walkthrough handoff</h4>
					<p>Findings are walked through with your team or developer so the fix-list is acted on, not filed away.</p>
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