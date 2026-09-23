<?php
// =========================================================
// WordPress SEO — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'wordpress-seo',
    'title'       => 'WordPress SEO',
    'pill'        => 'Platform &amp; CMS',
    'metaTitle'   => 'WordPress SEO Services | Weblo',
    'metaDesc'    => 'Fix plugin conflicts, theme bloat, and taxonomy issues holding your WordPress site back. Practical SEO audits built for how WordPress actually works.',
    'h1'          => 'Fix the WordPress-Specific Issues Others Skip',
    'lead'        => 'The same plugin conflict shows up on a marketing site in Ohio and an online store in Manchester. WordPress SEO is about fixing the platform-specific patterns generic advice tends to skip over.',
    'image'       => 'assets/img/blog/c2.jpg',
    'imageAlt'    => 'WordPress SEO - plugin conflicts, theme bloat and taxonomy fixes',
    'related'     => ['technical-seo-audits', 'shopify-seo', 'on-page-seo'],

    'intro' => [
        'WordPress runs a large share of the web, which means a large share of SEO problems on the web are actually WordPress problems repeating themselves. Two SEO plugins fight over the same meta tags. A page builder bloats page weight on every template. A migration leaves behind broken permalinks nobody tested. These issues are common enough that we&rsquo;ve stopped treating them as edge cases.',
        'That&rsquo;s what <strong>WordPress SEO work</strong> actually looks like: fixing the platform-specific patterns that generic SEO advice tends to skip over.',
    ],

    'split' => [
        'kicker'    => 'Plugins &bull; Theme &bull; Taxonomy',
        'lead'      => 'We start by looking at what&rsquo;s actually installed and running &mdash; not just what the site looks like on the front end.',
        'image'     => 'assets/img/blog/c2.jpg',
        'imageAlt'  => 'WordPress SEO - plugin and theme performance review',
        'points'    => [
            ['icon' => 'ri-puzzle-2-line', 'title' => 'Plugin conflict review', 'text' => 'Conflicts between SEO, caching, and security plugins that can silently affect indexing &mdash; two systems fighting over the same canonical tag is a classic.'],
            ['icon' => 'ri-palette-line', 'title' => 'Theme &amp; builder bloat', 'text' => 'Render-blocking scripts and stylesheets the page builder adds by default, and unused CSS that drags down Core Web Vitals.'],
            ['icon' => 'ri-folder-chart-line', 'title' => 'Taxonomy cleanup', 'text' => 'Categories and tags that generate thin, duplicated archives &mdash; with recommendations on what to keep, merge, or noindex.'],
            ['icon' => 'ri-arrow-right-left-line', 'title' => 'Redirect mapping', 'text' => 'Old permalink structures and migrated URLs mapped so months of indexed pages don&rsquo;t start returning soft 404s.'],
        ],
        'matters'   => [
            ['icon' => 'ri-tools-line', 'title' => 'Fixes split by owner', 'text' => 'What we can change inside WordPress vs. what needs a developer is flagged clearly so nothing waits on the wrong person.'],
            ['icon' => 'ri-shopping-bag-3-line', 'title' => 'WooCommerce covered', 'text' => 'Duplicated content from filtered views, variations, and out-of-stock pages gets its own look where it applies.'],
            ['icon' => 'ri-scales-3-line', 'title' => 'No replatform drive-by', 'text' => 'Most performance issues are fixable without rebuilding the site. Replatforming is a last resort, not a default.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'Where WordPress sites usually lose ground',
            'paras'   => [
                'Most WordPress SEO problems come from how easy the platform is to extend &mdash; which is also its biggest strength. A marketing team installs a page builder for design flexibility, and the builder injects extra markup on every page, adding load time a template-based site wouldn&rsquo;t carry. Someone installs a second SEO plugin without deactivating the first, and now two systems are generating conflicting sitemaps.',
                'Then there&rsquo;s the taxonomy problem. WordPress creates category and tag archive pages by default, and on a lot of sites those archives end up thin, duplicated across near-identical tag combinations, or indexed when they shouldn&rsquo;t be. None of this is a WordPress flaw exactly. It&rsquo;s what happens when a flexible system gets built out by different people over time without anyone checking how the pieces interact.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-tools-line', 'title' => 'Plugin &amp; config review', 'text' => 'Conflicts between SEO, caching, and security plugins that can silently affect indexing.'],
                ['icon' => 'ri-rocket-line', 'title' => 'Performance review', 'text' => 'Render-blocking scripts, unused CSS, and image handling issues that hurt Core Web Vitals.'],
                ['icon' => 'ri-folder-chart-line', 'title' => 'Taxonomy audit', 'text' => 'Categories, tags, and custom post types, with recommendations to keep, merge, or noindex.'],
                ['icon' => 'ri-file-list-3-line', 'title' => 'Sitemap &amp; robots verification', 'text' => 'Confirming search engines see what they&rsquo;re supposed to see &mdash; and nothing else.'],
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-draft-line', 'title' => 'Sites that outgrew defaults', 'text' => 'Brochure sites with a content library built up over years, blogs with inconsistent tagging, and growing WooCommerce stores.'],
                ['icon' => 'ri-refresh-line', 'title' => 'Recent migrations', 'text' => 'Sites that recently migrated to WordPress, or between hosts, and are seeing ranking drops that line up with that timing.'],
                ['icon' => 'ri-building-2-line', 'title' => 'Multi-brand or headless builds', 'text' => 'Where WordPress is one piece of a bigger stack, the work usually needs the coordination covered on our <a href="' . site_url('enterprise-seo') . '">Enterprise SEO</a> page.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'We already use Yoast or RankMath. Why do we need this?', 'a' => 'Those plugins handle useful basics like meta tags and readability scoring, but they don\'t catch conflicts between plugins, taxonomy problems, or theme-level performance issues. We work alongside whichever SEO plugin is already installed rather than replacing it.'],
        ['q' => 'Do you need admin access to our WordPress site?', 'a' => 'For most of the audit work, no. For implementation, it depends on scope. Some clients give us direct access to make changes; others prefer we hand off a prioritized list to their internal team or developer.'],
        ['q' => 'Does this cover WooCommerce specifically?', 'a' => 'Yes, where it applies. WooCommerce sites have their own set of duplicate content and page speed issues on top of standard WordPress concerns, and we review those separately.'],
        ['q' => 'How is this different from your Technical SEO service?', 'a' => 'Technical SEO covers crawlability, indexation, and site architecture on any platform. This page focuses on the WordPress-specific causes behind those problems: plugin conflicts, theme bloat, and taxonomy structure that are unique to how WordPress is built and extended.'],
        ['q' => 'What if our site was recently migrated to WordPress?', 'a' => 'Migrations are one of the most common reasons WordPress sites lose rankings, usually from broken redirects or URL structure changes. If that timing matches what you\'re seeing, this is exactly the kind of case we\'d start with.'],
    ],

    'ctaTitle' => 'Start with a working conversation',
    'ctaLead'  => 'If your WordPress site is dealing with plugin conflicts, slow load times, or a drop in visibility that started around a migration, request a free SEO analysis and we&rsquo;ll walk through what&rsquo;s actually going on.',
];

// ---------------------------------------------------------
// Unique platform fix-list layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-puzzle-2-line"></i>Plugin conflicts</span>
				<span class="svc-kicker"><i class="ri-palette-line"></i>Theme bloat</span>
				<span class="svc-kicker"><i class="ri-folder-chart-line"></i>Taxonomy cleanup</span>
				<span class="svc-kicker"><i class="ri-arrow-right-left-line"></i>Redirect mapping</span>
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

<?php $s = $service['split']; ?>
<!-- ========== PLATFORM DIAGNOSTIC (dark split first) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>What We <span style="color:var(--primary-color);">Diagnose First</span></h2>
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
						<h3>How fixes get split</h3>
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

<!-- ========== SIGNS CHECKLIST ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Signs the basics are <span style="color:var(--primary-color);">leaking</span></h2>
			<p class="svc-section-lead">Fast self-diagnostics that usually point at one of these WordPress-specific causes.</p>
			<div class="svc-checks">
				<div class="svc-check">
					<i class="check-ic warn ri-alert-line"></i>
					<div>
						<h4>Two SEO plugins fighting</h4>
						<p>Conflicting canonicals, sitemaps, or meta tags &mdash; the classic silent indexing killer.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic warn ri-dashboard-line"></i>
					<div>
						<h4>Page builder bloat</h4>
						<p>Render-blocking scripts and unused CSS dragging every template&rsquo;s Core Web Vitals down.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic warn ri-folder-chart-line"></i>
					<div>
						<h4>Thin, duplicated archives</h4>
						<p>Category and tag pages indexed for content that just repeats the same categories over each other.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic warn ri-arrow-right-left-line"></i>
					<div>
						<h4>Broken permalinks after migration</h4>
						<p>Old URL structures returning soft 404s &mdash; months of indexed pages working against you.</p>
					</div>
				</div>
			</div>
			<p class="text-center mt-4">Same patterns on a different stack? See <a href="<?= site_url('shopify-seo') ?>">Shopify SEO</a> for hosted-platform limits, or <a href="<?= site_url('technical-seo-audits') ?>">Technical SEO</a> for cross-platform crawl and indexing work.</p>
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

<!-- ========== MIGRATION STEPS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-tools-line"></i>Migration path</h3>
			<h2 class="sec-title">Recovering After a <span>Move or Change</span></h2>
			<p class="sec-lead">Migrations are the most common reason a WordPress site loses rankings. This is the recovery order we follow.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-puzzle-2-line"></i><span class="step-num">1</span></div>
					<h4>Audit plugins &amp; config</h4>
					<p>Map what&rsquo;s installed, what conflicts, and what&rsquo;s injecting scripts into every page load.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-arrow-right-left-line"></i><span class="step-num">2</span></div>
					<h4>Map redirects</h4>
					<p>Old permalinks and migrated URLs mapped so none of them start throwing soft 404s.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-folder-chart-line"></i><span class="step-num">3</span></div>
					<h4>Clean taxonomy</h4>
					<p>Categories and tags consolidated or noindexed so thin archives stop competing with real pages.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-shield-check-line"></i><span class="step-num">4</span></div>
					<h4>Re-verify in Search Console</h4>
					<p>Confirm search engines see exactly what they&rsquo;re supposed to see &mdash; and nothing else.</p>
				</div>
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