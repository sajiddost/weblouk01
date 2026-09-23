<?php
// =========================================================
// Ongoing Website Support — service page
// Unique "health dashboard" layout (no shared layout).
// =========================================================
$service = [
    'slug'        => 'ongoing-website-support',
    'title'       => 'Ongoing Website Support',
    'pill'        => 'Website Support',
    'metaTitle'   => 'Ongoing Website Support for SEO Health | Weblo',
    'metaDesc'    => 'Ongoing website support that keeps your site crawlable, fast, and visible in search and AI answers. Prioritized fixes and clear reporting.',
    'h1'          => 'Ongoing Website Support That Protects Your Search Visibility',
    'lead'        => 'Ongoing website support is a recurring service that monitors your website, fixes problems as they appear, and keeps the site healthy enough to keep earning visibility in search and AI answers.',
    'image'       => 'assets/img/service/ongoing-website-support.webp',
    'imageAlt'    => 'Ongoing website support - monitoring, prioritized fixes, and clear reporting',
    'related'     => ['seo-management', 'technical-seo-audits', 'white-label-seo'],

    'intro' => [
        'At Weblo, that support is built around search performance. Every issue we find is ranked by what it does for your rankings and revenue, so your time and budget go to the fixes that matter, not to a list of everything that could be improved.',
        'If your site launched a while ago and nobody has been watching it since, this page explains what quietly goes wrong, what we do about it, and how the work is organized.',
    ],

    'split' => [
        'kicker'    => 'Monitor & Prioritize & Fix & Report',
        'lead'      => 'We keep the layer of website health in shape that decides whether people can find you: crawlability, relevance, and authority.',
'image'     => 'assets/img/service/technical-health-monitoring.webp',
    'imageAlt'  => 'A dedicated team keeping your site healthy after launch',
        'points'    => [
            ['icon' => 'ri-heart-pulse-line', 'title' => 'Technical health monitoring', 'text' => 'We check the technical foundations on a regular schedule: crawl errors, indexation status, sitemap and robots.txt changes, broken links, redirect chains, mobile usability, and Core Web Vitals.'],
            ['icon' => 'ri-list-check-2', 'title' => 'A prioritized fix list', 'text' => 'A typical site scan can flag dozens of problems. Most won&rsquo;t change your results, and a few will. We rank every finding by expected impact and effort.'],
            ['icon' => 'ri-tools-line', 'title' => 'Fixes made, or specified to be made', 'text' => 'Where we have access, we make the fixes directly. Where your developers handle the build, we provide specifications precise enough to act on without a follow-up meeting.'],
            ['icon' => 'ri-file-chart-line', 'title' => 'Reporting you can read', 'text' => 'Progress is tracked against metrics agreed up front. Reports say what changed, what we did, what it did or didn&rsquo;t do, and what comes next.'],
        ],
        'matters'   => [
            ['icon' => 'ri-robot-line', 'title' => 'AI answers depend on a healthy site', 'text' => 'A technically broken site won&rsquo;t be crawled well enough to be cited by an AI model, any more than it will rank in classic search.'],
            ['icon' => 'ri-calendar-check-line', 'title' => 'Caught while still a small fix', 'text' => 'Instead of fixing problems only after they cause a visible drop in traffic, a support program catches issues early and resolves them in priority order.'],
            ['icon' => 'ri-scales-3-line', 'title' => 'Honest about what we can&rsquo;t promise', 'text' => 'We can&rsquo;t promise citations or rankings, but we can make sure nothing on your site stops you from being considered.'],
        ],
    ],

    'symptoms' => [
        ['icon' => 'ri-code-s-slash-line', 'title' => 'Broken structured data', 'text' => 'A plugin or theme update quietly changes or removes schema, so it no longer matches what&rsquo;s on the page.'],
        ['icon' => 'ri-swap-2-line', 'title' => 'Redirect chains and loops', 'text' => 'Old redirects stack up after redesigns and migrations, slowing crawlers and diluting the signals your pages send.'],
        ['icon' => 'ri-shuffle-line', 'title' => 'Content cannibalization', 'text' => 'New pages start competing with older ones for the same query, and neither performs as well as one strong page would.'],
        ['icon' => 'ri-time-line', 'title' => 'Page speed creep', 'text' => 'Heavier images, extra scripts, and added apps slow the site a little at a time until Core Web Vitals slip.'],
        ['icon' => 'ri-arrow-up-down-line', 'title' => 'Indexation drift', 'text' => 'Pages that should be indexed fall out, while filters, duplicates, or test pages get in.'],
        ['icon' => 'ri-hourglass-line', 'title' => 'Stale content', 'text' => 'Pages that once ranked drift out of date, and searchers and search engines both notice.'],
        ['icon' => 'ri-link-m', 'title' => 'Broken and orphaned links', 'text' => 'Internal links point to pages that moved or vanished, and new pages never get linked from anywhere useful.'],
        ['icon' => 'ri-bar-chart-2-line', 'title' => 'Broken analytics and tags', 'text' => 'Tracking scripts get stripped during updates or migrations, so the site quietly stops reporting what\'s actually happening.'],
    ],

    'sections' => [
        [
            'heading' => 'Why a Finished Website Still Needs Support',
            'paras'   => [
                'A website is never really finished. Even a site nobody touches changes around itself, because search engines update how they evaluate pages, competitors publish new content, and the platform underneath the site keeps shifting. A site that gets edited regularly changes even faster, and each edit is a chance for something to break unnoticed.',
                'The usual outcome is a familiar one. Traffic drops, and nobody can say when the decline began or what caused it. By the time it&rsquo;s noticeable, the cause has usually been sitting there for months.',
            ],
        ],
        [
            'heading' => 'What Our Ongoing Website Support Includes',
            'points'  => [
                ['icon' => 'ri-heart-pulse-line', 'title' => 'Technical health monitoring', 'text' => 'Crawl errors, indexation, sitemap and robots.txt changes, broken links, redirect chains, mobile usability, and Core Web Vitals, on a regular schedule.'],
                ['icon' => 'ri-list-check-2', 'title' => 'A prioritized fix list', 'text' => 'Every finding ranked by expected impact and implementation effort &mdash; a short list your team will act on, not a report nobody reads.'],
                ['icon' => 'ri-tools-line', 'title' => 'Fix implementation or clear specifications', 'text' => 'Fixes made directly where we have access, or specifications precise enough for your developers to execute without a decoding meeting.'],
                ['icon' => 'ri-edit-line', 'title' => 'On-page and content upkeep', 'text' => 'Titles, meta, headers, and internal links reviewed against what each page is actually trying to rank for, with drift flagged for refresh.'],
                ['icon' => 'ri-code-s-slash-line', 'title' => 'Structured data and AI-readiness checks', 'text' => 'Schema verified valid and matched to the page, and answers stated plainly and early so answer engines and generative tools can rely on them.'],
                ['icon' => 'ri-link', 'title' => 'Authority and backlink review', 'text' => 'Periodic review of the backlink profile for toxic or irrelevant links &mdash; we&rsquo;d rather cut the weakest links than add more without relevance.'],
            ],
        ],
        [
            'heading' => 'Who Ongoing Website Support Is For',
            'points'  => [
                ['icon' => 'ri-rocket-2-line', 'title' => 'Small businesses', 'text' => 'If you don&rsquo;t have a dedicated web or SEO person, small problems tend to sit unnoticed. Our support is sized to small budgets and teams.'],
                ['icon' => 'ri-search-eye-line', 'title' => 'Marketing teams with a launched site', 'text' => 'After a redesign or migration, attention moves elsewhere. We provide the ongoing oversight that keeps the launch from slowly unraveling.'],
                ['icon' => 'ri-refresh-line', 'title' => 'Businesses that have tried SEO before', 'text' => 'A freelancer who disappeared after month two, or an in-house effort that stalled when the person running it was pulled away. We bring the consistency that was missing.'],
                ['icon' => 'ri-server-line', 'title' => 'Large sites with technical debt', 'text' => 'For sites with thousands of URLs, fixes need to be templated so they scale without breaking something else. We handle the governance and cross-team coordination.'],
                ['icon' => 'ri-user-star-line', 'title' => 'Agencies', 'text' => 'Clients eventually ask for ongoing support. Our white label SEO service delivers it under your brand, with reporting formatted for your clients.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'What is ongoing website support?', 'a' => 'It\'s a recurring service that monitors your website, fixes technical and content issues as they appear, and reports on progress. It keeps a site healthy after launch instead of addressing problems only after they cause a visible decline.'],
        ['q' => 'What\'s the difference between ongoing website support and SEO management?', 'a' => 'Ongoing support focuses on keeping your site technically sound, current, and easy for search engines and AI tools to understand. SEO Management is a broader program that also covers content strategy and authority building. Many clients begin with support and expand.'],
        ['q' => 'Do you make the fixes, or just tell us what\'s wrong?', 'a' => 'Both, depending on your setup. Where we have access, we implement fixes directly. Where your developers handle the build, we provide clear specifications they can act on.'],
        ['q' => 'How often will I hear from you?', 'a' => 'You\'ll get regular reporting on an agreed schedule, plus a response within 24 hours whenever you reach out. If something urgent turns up between reports, we\'ll flag it instead of saving it for the next one.'],
        ['q' => 'Will ongoing support guarantee higher rankings?', 'a' => 'No. No one can honestly guarantee rankings or traffic. What we can do is remove the technical and content issues holding your site back, prioritize the work that matters most, and report honestly on what\'s working.'],
        ['q' => 'Can you support a site built on WordPress, Shopify, or a custom platform?', 'a' => 'Yes. We work across platforms and adapt fixes to each one\'s constraints, from plugin conflicts on WordPress to app bloat on Shopify to template-level issues on large custom sites.'],
        ['q' => 'Do I have to commit to ongoing support, or can I start with a single audit?', 'a' => 'You can start with a single audit. Some clients need only one, and others move to continuous support afterward. We scope the engagement to what the site needs.'],
    ],

    'ctaTitle' => 'Find Out What Holding Your Site Back',
    'ctaLead'  => 'If you are trying to work out why a site has stalled, or you want it looked after so problems get caught early, start with an assessment instead of a sales pitch. Tell us about your site, and we&rsquo;ll show you the five fixes that matter most.',
];

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
				<span class="svc-kicker"><i class="ri-heart-pulse-line"></i>Monitor</span>
				<span class="svc-kicker"><i class="ri-list-check-2"></i>Prioritize</span>
				<span class="svc-kicker"><i class="ri-tools-line"></i>Fix</span>
				<span class="svc-kicker"><i class="ri-file-chart-line"></i>Report</span>
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

<!-- ========== IMAGE BAND 1: WHAT IT MEANS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 fadeInUp" data-delay="0.1">
				<div class="svc-media-figure">
					<img src="<?= site_url('assets/img/service/ongoing-website-support.webp') ?>" alt="Someone is responsible for your site&rsquo;s health after launch" loading="lazy">
					<span class="svc-media-badge"><i class="ri-heart-pulse-line"></i>Health check</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 fadeInUp" data-delay="0.2">
				<div class="svc-section" style="text-align:left;margin:0;">
					<h2 class="svc-section-title" style="text-align:left;margin-bottom:14px;">What Is Ongoing Website <span style="color:var(--primary-color);">Support?</span></h2>
					<p>Ongoing website support means someone is responsible for your site&rsquo;s health after launch. Instead of fixing problems only after they cause a visible drop in traffic or leads, a support program checks the site on a regular schedule, catches issues early, and resolves them in priority order.</p>
					<p>For many businesses, &ldquo;website support&rdquo; means keeping the lights on: software updates, backups, uptime. Those matter, but they don&rsquo;t tell you whether search engines can still crawl your pages, whether your content still matches what people search for, or whether AI tools can understand and cite what you publish.</p>
					<p class="mt-4 mb-0"><strong style="color:var(--black-100);">Our support covers that layer</strong> &mdash; the part of website health that decides whether people can find you.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== HEALTH STATS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>50 &rarr; 5</h4><p>From fifty flagged problems to the five that will move rankings and revenue this quarter.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>24 hrs</h4><p>Response to every message &mdash; no &ldquo;we&rsquo;ll circle back,&rdquo; wherever you&rsquo;re based.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Recurring</h4><p>A repeating cycle of assessment, prioritization, execution, and measurement &mdash; health maintained, not restored.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>100%</h4><p>White-hat, Google-compliant work so the visibility you build is sustainable.</p></div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== DARK SPLIT + IMAGE 2 ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Keeping the <span style="color:var(--primary-color);">Foundations in Shape</span></h2>
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
						<img src="<?= site_url('assets/img/service/technical-health-monitoring.webp') ?>" alt="A team of specialists keeping your site visible in search and AI answers" class="seo-vertical-img" loading="lazy">
						<h3>Why it matters more now</h3>
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

<!-- ========== THE QUIET FAILURES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][0]['heading']) ?></h2>
			<?php foreach ($service['sections'][0]['paras'] as $i => $p): ?>
				<?php if ($i === 0): ?>
					<p><?= $p ?></p>
				<?php endif; ?>
			<?php endforeach; ?>
			<div class="svc-symptoms">
				<?php foreach ($service['symptoms'] as $symptom): ?>
				<div class="svc-symptom">
					<span class="symptom-ic"><i class="<?= e($symptom['icon']) ?>"></i></span>
					<div>
						<h4><?= $symptom['title'] ?></h4>
						<p><?= $symptom['text'] ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<p>Each of these looks minor on its own. Together they cap performance. Search engines can only rank what they can crawl, understand, and trust &mdash; and a weakness in any one of those areas limits the other two.</p>
			<p class="mb-0"><strong style="color:var(--black-100);"><?= $service['sections'][0]['paras'][1] ?></strong></p>
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
			<div class="svc-report">
				<i class="ri-file-chart-line"></i>
				<div>
					<h4>Reporting you can read</h4>
					<p>Progress is tracked against metrics agreed up front. Reports say what changed, what we did, what it did or didn&rsquo;t do, and what comes next. If something isn&rsquo;t working, we tell you and adjust instead of waiting for a quarterly review to admit it.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== HOW IT WORKS: THE CYCLE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-refresh-line"></i>How it works</h3>
			<h2 class="sec-title">A Cycle, Not a <span>Crisis Response</span></h2>
			<p class="sec-lead">Each cycle feeds into the next, so the site&rsquo;s health gets maintained instead of restored every couple of years after a decline.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">1</span></div>
					<h4>Assessment</h4>
					<p>We review technical condition, current content, and the competitive landscape before recommending anything &mdash; a baseline to measure everything against.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-list-check-2"></i><span class="step-num">2</span></div>
					<h4>Prioritization</h4>
					<p>Findings get ranked by expected impact and effort &mdash; this is where fifty flagged problems become the five worth doing this quarter.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-tools-line"></i><span class="step-num">3</span></div>
					<h4>Execution</h4>
					<p>We implement fixes directly where we can, or write clear specifications for your development team. Nothing sits in a report waiting for interpretation.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-line-chart-line"></i><span class="step-num">4</span></div>
					<h4>Measurement</h4>
					<p>Progress is tracked against agreed benchmarks, with new issues fed into the queue and finished work checked to confirm it did what it was meant to.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== COMPARE TIERS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-scales-3-line"></i>Pick the level</h3>
			<h2 class="sec-title">Ongoing Support, One-Time Audit, or <span>Full SEO Management?</span></h2>
			<p class="sec-lead">Three different levels of involvement &mdash; the right one depends on where your site sits.</p>
		</div>
		<div class="svc-compare fadeInUp" data-delay="0.15">
			<div class="svc-tier">
				<h3>One-Time Audit</h3>
				<div class="tier-who">Starting point</div>
				<p>A diagnosis and a prioritized fix list, with your team handling the work. Suits a site that needs a clear picture before deciding what to do next.</p>
				<a class="tier-link" href="<?= site_url('technical-seo-audits') ?>">Explore audits <i class="ri-arrow-right-s-line"></i></a>
			</div>
			<div class="svc-tier featured">
				<span class="tier-tag">This service</span>
				<h3>Ongoing Website Support</h3>
				<div class="tier-who">Maintained, not restored</div>
				<p>Someone watching the site, fixing issues as they appear, and keeping its health from slipping &mdash; with the work prioritized by what it does for rankings and revenue.</p>
				<a class="tier-link" href="#faqs">See the FAQs <i class="ri-arrow-down-s-line"></i></a>
			</div>
			<div class="svc-tier">
				<h3>SEO Management</h3>
				<div class="tier-who">The broadest option</div>
				<p>Strategy, execution, and reporting run as one coordinated program, including content direction and authority building on top of ongoing health.</p>
				<a class="tier-link" href="<?= site_url('seo-management') ?>">See SEO management <i class="ri-arrow-right-s-line"></i></a>
			</div>
		</div>
		<p class="sec-lead text-center mt-5 fadeInUp" data-delay="0.2" style="font-weight:600;color:var(--black-100);">Many clients start with an audit, move to ongoing support, and expand from there. We scope every engagement to what your site actually needs.</p>
	</div>
</section>

<!-- ========== PLATFORM SUPPORT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Support for the <span style="color:var(--primary-color);">Platform You Use</span></h2>
			<p class="svc-section-lead">The principles of crawlability, relevance, and authority apply to every site &mdash; the fixes depend on the platform.</p>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="ri-wordpress-line"></i>
						<h4>WordPress</h4>
						<p>Plugin conflicts, theme bloat, duplicate archive and taxonomy pages, and schema that doesn&rsquo;t match the page.</p>
						<a class="tier-link" href="<?= site_url('wordpress-seo') ?>" style="margin-top:12px;display:inline-flex;">WordPress SEO <i class="ri-arrow-right-s-line"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="ri-shopping-bag-3-line"></i>
						<h4>Shopify</h4>
						<p>App bloat, duplicate collection and product URLs, and platform limitations &mdash; worked within Shopify&rsquo;s constraints, not against them.</p>
						<a class="tier-link" href="<?= site_url('shopify-seo') ?>" style="margin-top:12px;display:inline-flex;">Shopify SEO <i class="ri-arrow-right-s-line"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<div class="feature-card h-100">
						<i class="ri-building-2-line"></i>
						<h4>Enterprise / custom</h4>
						<p>Template-level fixes so a single change applies across thousands of pages, with the governance large sites require.</p>
						<a class="tier-link" href="<?= site_url('enterprise-seo') ?>" style="margin-top:12px;display:inline-flex;">Enterprise SEO <i class="ri-arrow-right-s-line"></i></a>
					</div>
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
				<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
					<a class="feature-card h-100" href="<?= site_url('contact') ?>" style="display:flex;flex-direction:column;text-decoration:none;background:rgba(255,79,1,.05);border-color:rgba(255,79,1,.25);">
						<i class="ri-question-line"></i>
						<h4 style="color:var(--black-100);">Not sure which fits?</h4>
						<p>Start with a free assessment. We&rsquo;ll look at the site and tell you whether you need a one-off audit, ongoing support, or full management.</p>
						<span class="industry-link" style="margin-top:auto;padding-top:18px;opacity:1;transform:none;color:var(--primary-color);font-weight:600;font-size:15px;display:inline-flex;align-items:center;gap:6px;">Get a free assessment <i class="ri-arrow-right-s-line"></i></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== WORLDWIDE + NO PROMISES ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">The Same Standard, <span style="color:var(--primary-color);">Wherever You Are</span></h2>
			<p>We provide ongoing website support to businesses in the USA and across countries all over the world. Whether your site serves customers in one city, one country, or several markets at once, the same standards apply: crawlability, relevance, and authority.</p>
			<p class="mb-0">A site targeting the US needs different competitive research, search behavior analysis, and content decisions than one serving customers in another country &mdash; and a multilingual, multi-region site adds technical requirements like correct language and region targeting. We adjust the specifics to your market while keeping the quality consistent. Our team works Monday to Friday, 9am to 6pm US time, and we respond to every message within 24 hours.</p>
		</div>
		<div class="svc-section fadeInUp" data-delay="0.15">
			<h2 class="svc-section-title">What We <span style="color:var(--primary-color);">Won&rsquo;t Promise</span></h2>
			<p>We won&rsquo;t guarantee a specific ranking position, a fixed percentage increase in traffic, or a set number of AI citations. Algorithms change, competitors adjust, and results depend on factors outside any agency&rsquo;s control. Anyone who guarantees those outcomes is either overconfident or not being straight with you.</p>
			<p class="mb-0">What we commit to is a clear process, honest reporting, and prioritization based on evidence rather than guesswork. All of our work is white-hat and Google-compliant, so the growth we help you build is sustainable &mdash; and we respond to every message within 24 hours, with no &ldquo;we&rsquo;ll circle back.&rdquo;</p>
		</div>
	</div>
</section>

<!-- ========== FAQ ========== -->
<section id="faqs" class="section pt-0">
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
			<p class="sec-lead">This service is the starting point for most engagements. These are the areas it expands into.</p>
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
<?php require __DIR__ . '/../includes/footer.php'; ?>