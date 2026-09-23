<?php
// =========================================================
// SEO Management — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'seo-management',
    'title'       => 'SEO Management',
    'pill'        => 'Ongoing Program',
    'metaTitle'   => 'SEO Management Services | Weblo',
    'metaDesc'    => 'Ongoing SEO management from Weblo, covering technical health, content, authority, and reporting, run as one coordinated program instead of separate one-off jobs.',
    'h1'          => 'One Accountable Partner for Your Entire SEO Program',
    'lead'        => 'We prioritize, execute, and report on a recurring cycle &mdash; so the fixes in your audit actually get done, in the right order.',
    'image'       => 'assets/img/seo-services.webp',
    'imageAlt'    => 'SEO management program - coordinated technical, content and authority work',
    'related'     => ['technical-seo-audits', 'on-page-seo', 'authority-link-building'],

    'intro' => [
        'Most businesses don&rsquo;t fail at SEO because nobody told them what to fix. They fail because the fixes never happen in the right order, or never happen at all. An audit gets delivered, sits in a shared drive, and six months later the same issues are still there. <strong>SEO management</strong> is what closes that gap: someone accountable for deciding what gets worked on this month, doing the work, and checking whether it actually changed anything.',
        'At Weblo, SEO management means we run your organic search program the way an in-house SEO lead would if they had the time and tooling most companies can&rsquo;t justify hiring for. We don&rsquo;t hand you a report and disappear. We prioritize, execute, and report on a recurring cycle, adjusting the plan as your site, competitors, and search results change.',
    ],

    'split' => [
        'kicker'    => 'Strategy &bull; Execution &bull; Reporting',
        'lead'      => 'An SEO program touches several disciplines, and treating them as separate purchases is usually where things go wrong. Management sequences them against each other instead of letting them run in isolation.',
        'image'     => 'assets/img/seo-services.webp',
        'imageAlt'  => 'SEO management - a coordinated program across technical, content and authority work',
        'points'    => [
            ['icon' => 'ri-file-search-line', 'title' => 'Technical health', 'text' => 'So search engines can actually crawl and index the pages worth ranking. We diagnose and fix these in depth on our <a href="' . site_url('technical-seo-audits') . '">Technical SEO</a> page.'],
            ['icon' => 'ri-edit-line', 'title' => 'On-page &amp; content work', 'text' => 'Matching pages to what searchers are actually trying to do, not what a keyword tool suggested. Covered on the <a href="' . site_url('on-page-seo') . '">On-Page SEO</a> page.'],
            ['icon' => 'ri-link', 'title' => 'Authority building', 'text' => 'Earning and structuring links and mentions that support credibility rather than padding a link count. Detailed on <a href="' . site_url('authority-link-building') . '">Authority &amp; Link Building</a>.'],
            ['icon' => 'ri-node-tree', 'title' => 'Semantic &amp; entity SEO', 'text' => 'Helping search engines understand what your business is, how your pages relate, and where you&rsquo;re an authority. See <a href="' . site_url('semantic-entity-seo') . '">Semantic &amp; Entity SEO</a>.'],
        ],
        'matters'   => [
            ['icon' => 'ri-robot-line', 'title' => 'AI visibility', 'text' => 'Visibility in AI answers and search overviews behaves differently than ranking, and gets its own approach. Covered on <a href="' . site_url('aeo-geo') . '">AEO &amp; GEO</a>.'],
            ['icon' => 'ri-line-chart-line', 'title' => 'Roadmaps, not vanity metrics', 'text' => 'Strategic direction tied to business goals is built into the plan, not bolted on at review time.'],
            ['icon' => 'ri-check-line', 'title' => 'Sequenced work', 'text' => 'Technical, content, and authority work get sequenced against each other instead of running in isolation.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'How the engagement runs',
            'paras'   => [
                'We start with a technical and content audit &mdash; not to produce a document for its own sake, but to build a prioritized list ranked by expected impact against effort required. A site with a handful of high-authority pages held back by a broken template gets treated differently than one that simply lacks content depth. The audit tells us which situation we&rsquo;re in.',
                'From there, work moves in monthly or quarterly cycles depending on the size of the site and the scope agreed. Each cycle has a defined set of fixes, content, or link targets, plus a review of what happened as a result of the last cycle. Search results move slowly enough that judging a change after two weeks tells you almost nothing. We report against a longer window and say so plainly when it&rsquo;s still too early to draw conclusions.',
                'Reporting focuses on the things that connect to revenue: organic traffic to commercially relevant pages, ranking movement on terms tied to actual demand, and technical issues resolved versus outstanding. We don&rsquo;t lead with impression counts or keywords ranking on page four, because those numbers look good in a slide and mean very little to the business paying for the work.',
            ],
        ],
        [
            'heading' => 'Who this is built for',
            'points'  => [
                ['icon' => 'ri-rocket-2-line', 'title' => 'SaaS on competitive terms', 'text' => 'Companies competing on crowded product terms that need coordinated, ongoing SEO rather than a one-off deliverable.'],
                ['icon' => 'ri-shopping-bag-3-line', 'title' => 'Ecommerce stores', 'text' => 'Category and product pages need continuous attention; a management program keeps them in motion.'],
                ['icon' => 'ri-earth-line', 'title' => 'Local &amp; multi-location', 'text' => 'Businesses managing visibility across several markets, plus agencies that need <a href="' . site_url('white-label-seo') . '">white-label fulfillment</a>.'],
            ],
        ],
        [
            'heading' => 'Deliverables you can expect',
            'points'  => [
                ['icon' => 'ri-map-2-line', 'title' => 'A living roadmap', 'text' => 'A prioritized roadmap at the start, updated as priorities shift and evidence comes in.'],
                ['icon' => 'ri-line-chart-line', 'title' => 'Honest reporting', 'text' => 'Monthly or quarterly reporting that ties activity to organic performance, not just activity counts.'],
                ['icon' => 'ri-user-heart-line', 'title' => 'Direct access', 'text' => 'You talk to the person doing the work, not a rotating account manager relaying updates from someone else.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'How long before we see results?', 'a' => 'Meaningful movement usually takes a few months, and longer for competitive terms or sites with significant technical debt. Anyone promising fast, guaranteed rankings for competitive terms isn\'t describing how search engines actually work.'],
        ['q' => 'Do you guarantee rankings?', 'a' => 'No. Rankings depend on factors outside any agency\'s control, including algorithm changes and competitor activity. We commit to a defined scope of work and transparent reporting on what that work produced.'],
        ['q' => 'Can this replace our internal marketing team?', 'a' => 'It\'s designed to sit alongside one, handling the SEO execution and strategy that most internal teams don\'t have the specialized time for. For larger organizations, we typically work directly with an in-house marketing or content lead.'],
        ['q' => 'What if we only need one part of this, like technical fixes?', 'a' => 'That\'s a reasonable starting point. Our individual service pages, including Technical SEO and On-Page SEO, cover scoped engagements for teams that aren\'t ready for a full management program.'],
    ],

    'ctaTitle' => 'Get a clear view of where your site stands',
    'ctaLead'  => 'A short technical and visibility review will tell you whether ongoing management is the right next step, or whether a narrower fix would do the job first.',
];

// ---------------------------------------------------------
// Unique program-roadmap layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-node-tree"></i>Strategy</span>
				<span class="svc-kicker"><i class="ri-tools-line"></i>Execution</span>
				<span class="svc-kicker"><i class="ri-line-chart-line"></i>Reporting</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== INTRO TWO-COLUMN ========== -->
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
					<h3>What an engagement ships</h3>
					<ul>
						<li><i class="ri-map-2-line"></i><span>A living, prioritized roadmap that changes as results come in</span></li>
						<li><i class="ri-line-chart-line"></i><span>Reporting tied to revenue and commercially relevant pages, not screenshots</span></li>
						<li><i class="ri-user-heart-line"></i><span>Direct access to the person doing the work &mdash; no rotating account managers</span></li>
						<li><i class="ri-user-star-line"></i><span>Agencies handling overflow? See <a href="<?= site_url('white-label-seo') ?>">White Label SEO</a>.</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== OPERATING RHYTHM ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-settings-4-line"></i>Program</h3>
			<h2 class="sec-title">The Operating <span>Rhythm</span></h2>
			<p class="sec-lead">Manageable cycles, each with a defined set of fixes and a review of what actually happened last cycle.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-file-search-line"></i><span class="step-num">1</span></div>
					<h4>Audit &amp; prioritize</h4>
					<p>Technical and content audit built into a prioritized list ranked by expected impact against effort.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-rocket-2-line"></i><span class="step-num">2</span></div>
					<h4>First cycle</h4>
					<p>A closed set of fixes, content, or link targets for the first monthly or quarterly cycle.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-refresh-line"></i><span class="step-num">3</span></div>
					<h4>Recurring cycles</h4>
					<p>The plan adjusts as your site, competitors, and the search results change between cycles.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">4</span></div>
					<h4>Review &amp; report</h4>
					<p>Judged over a longer window &mdash; and we say so plainly when it&rsquo;s still too early to draw conclusions.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== WHY MANAGEMENT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Why <span style="color:var(--primary-color);">Management</span> Beats Separate Hires</h2>
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
						<h3>What that looks like day to day</h3>
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

<!-- ========== DELIVERABLES ========== -->
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
			<p class="text-center mt-2">Starting narrower? <a href="<?= site_url('technical-seo-audits') ?>">Technical SEO</a> and <a href="<?= site_url('on-page-seo') ?>">On-Page SEO</a> cover scoped engagements for teams not ready for a full program.</p>
		</div>
	</div>
</section>

<!-- ========== WHO THIS IS BUILT FOR ========== -->
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