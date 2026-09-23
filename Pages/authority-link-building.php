<?php
// =========================================================
// Authority & Link Building â€” service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'authority-link-building',
    'title'       => 'Authority & Link Building',
    'pill'        => 'Off-Page &amp; Authority',
    'metaTitle'   => 'Authority & Link Building Services | Weblo',
    'metaDesc'    => 'Link volume isn\'t authority. We audit for quality and toxic risk, then build relevance through outreach worth doing, not links for their own sake.',
    'h1'          => 'Build Authority That Actually Moves Rankings',
    'lead'        => 'A hundred links from irrelevant, low-quality sites can do less for a site than ten links from sources that truly matter. Authority is earned through relevance and trust &mdash; not volume.',
    'image'       => 'assets/img/blog/6.jpg',
    'imageAlt'    => 'Authority and link building - relevant, trusted backlinks',
    'related'     => ['technical-seo-audits', 'semantic-entity-seo', 'aeo-geo'],

    'intro' => [
        'A large backlink profile does not necessarily mean a strong authority profile. We say that upfront because it&rsquo;s the single most common misunderstanding we run into &mdash; usually from a business that&rsquo;s watched a competitor&rsquo;s link count climb and assumed more is automatically better. It isn&rsquo;t.',
        'Metrics like Domain Authority or Domain Rating make this worse, because they&rsquo;re easy to chase and easy to misread as a goal in themselves rather than a rough proxy for something else. This page is about the something else: relevance and trust.',
    ],

    'split' => [
        'kicker'    => 'Audit &bull; Clean &bull; Earn',
        'lead'      => 'Most link building is outreach without a reason behind it. We start from what a site already has, then build links a search engine would actually take seriously.',
        'image'     => 'assets/img/blog/6.jpg',
        'imageAlt'  => 'Authority and link building - backlink audit and digital PR',
        'points'    => [
            ['icon' => 'ri-database-2-line', 'title' => 'Full backlink audit', 'text' => 'Source quality, topical relevance, anchor text distribution, and risk indicators &mdash; checked in context, not as a spreadsheet of domain scores.'],
            ['icon' => 'ri-shield-check-line', 'title' => 'Toxic link identification', 'text' => 'Link patterns that carry real risk get disavow recommendations when the risk genuinely warrants it, not as a blanket first step.'],
            ['icon' => 'ri-crosshair-2-line', 'title' => 'Competitor gap analysis', 'text' => 'Where relevant sites are linking to competitors but not to you, mapped to what you already have worth linking to.'],
            ['icon' => 'ri-megaphone-line', 'title' => 'Digital PR &amp; outreach', 'text' => 'Built around content or resources worth referencing, rather than outreach for its own sake with low response rates.'],
        ],
        'matters'   => [
            ['icon' => 'ri-error-warning-line', 'title' => 'No PBNs, no paid schemes', 'text' => 'Not because they never produce short-term movement, but because the risk of a manual action outweighs the temporary gain.'],
            ['icon' => 'ri-scales-3-line', 'title' => 'Not every weak link is an emergency', 'text' => 'Most profiles carry some dead weight. Disavowing everything indiscriminately can hurt more than leaving mediocre links alone.'],
            ['icon' => 'ri-robot-line', 'title' => 'AI systems weigh credibility too', 'text' => 'A source with weak external credibility is harder for an answer engine to cite with confidence. See <a href="' . site_url('aeo-geo') . '">AEO &amp; GEO</a>.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'Where authority profiles usually go wrong',
            'paras'   => [
                'The most common issue is a mismatch between link volume and link quality. A site accumulates links over years &mdash; some from genuine outreach, some from directories, some from guest posts that were more about getting a link than saying anything useful &mdash; and the resulting profile looks substantial on paper while doing very little for actual rankings.',
                'Toxic or manipulative patterns are another recurring problem, often left over from an earlier SEO effort that used tactics which have since become risky. Private blog networks, heavily reciprocal exchanges, and over-optimized anchor text can all sit quietly in a profile for years before triggering a problem.',
                'There&rsquo;s also a strategy gap. A lot of businesses want more links without having anything genuinely worth linking to. Outreach without a linkable asset behind it &mdash; a piece of content, data, or a resource that gives someone an actual reason to reference it &mdash; tends to produce links that feel forced because they are.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-file-search-line', 'title' => 'Backlink audit', 'text' => 'Source quality, topical relevance, anchor text distribution, and risk indicators, reviewed in context.'],
                ['icon' => 'ri-shield-check-line', 'title' => 'Disavow recommendations', 'text' => 'Applied only where the risk genuinely warrants it, plus ongoing monitoring for unnatural patterns.'],
                ['icon' => 'ri-line-chart-line', 'title' => 'Prioritized roadmap', 'text' => 'Separating quick cleanup work from longer-term authority building, with outreach targets that matter.'],
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-line-chart-line', 'title' => 'Thin or inconsistent profiles', 'text' => 'Sites that rank well locally but can&rsquo;t break into more competitive terms because they lack referring domains that matter.'],
                ['icon' => 'ri-refresh-line', 'title' => 'Inherited profiles', 'text' => 'Businesses that took over a backlink profile from a previous SEO effort and aren&rsquo;t sure whether it&rsquo;s helping or creating risk.'],
                ['icon' => 'ri-mail-send-line', 'title' => 'Failed manual outreach', 'text' => 'Teams that tried manual outreach without much success and want a more targeted approach built around actual linkable assets.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Do you guarantee a certain number of links per month?', 'a' => 'No. A monthly link quota encourages exactly the volume-over-quality thinking this page argues against. We report on outreach activity and results, not a fixed number of placements.'],
        ['q' => 'Do you use private blog networks or paid link schemes?', 'a' => 'No. The short-term gain isn\'t worth the risk of a manual action, and it\'s not the kind of work we\'ll put our name behind.'],
        ['q' => 'Is guest posting still worth doing?', 'a' => 'In relevant cases, yes, but only on sites that make sense for the topic and audience. Guest posting purely for the link tends to produce weak results and occasionally contributes to the kind of pattern that draws unwanted attention.'],
        ['q' => 'How is this different from Semantic & Entity SEO?', 'a' => 'Semantic and entity SEO focuses on how search engines and AI systems understand your brand as a distinct entity, including schema and disambiguation. This service focuses specifically on earning and evaluating external links. They often work together, but they\'re solving different problems.'],
        ['q' => 'Do backlinks still matter if we\'re focused on AI search visibility?', 'a' => 'Yes, though the mechanism is different from traditional rankings. Authority still factors into whether a source gets cited in an AI-generated answer, which is covered in more depth on our AEO & GEO page.'],
    ],

    'ctaTitle' => 'Start with a working conversation',
    'ctaLead'  => 'If you&rsquo;re dealing with a backlink profile that looks substantial but isn&rsquo;t producing results, request a free SEO analysis and we&rsquo;ll look at what&rsquo;s actually in your link profile.',
];

// ---------------------------------------------------------
// Unique authority layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-database-2-line"></i>Backlink audit</span>
				<span class="svc-kicker"><i class="ri-shield-check-line"></i>Risk review</span>
				<span class="svc-kicker"><i class="ri-crosshair-2-line"></i>Competitor gaps</span>
				<span class="svc-kicker"><i class="ri-megaphone-line"></i>Digital PR</span>
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

<!-- ========== AUTHORITY STATS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>Quality &gt; volume</h4><p>Ten relevant, trusted refs have beaten a hundred irrelevant ones more times than we can count.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>Context, not scores</h4><p>Domain scores are checked in context &mdash; a profile isn&rsquo;t a spreadsheet of metrics.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Disavow when warranted</h4><p>Not as a blanket first step. Indiscriminate disavowing can hurt more than leaving mediocre links alone.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>Linkable assets first</h4><p>Outreach without something worth referencing tends to fail &mdash; so we build the reason before the ask.</p></div>
		</div>
	</div>
</section>

<!-- ========== DO / DON'T ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">The line we <span style="color:var(--primary-color);">don&rsquo;t blur</span></h2>
			<p class="svc-section-lead">Comparative calls that separate authority from link chasing.</p>
			<div class="svc-table-wrap">
				<table class="svc-table">
					<tr><th>Situation</th><th>What weak profiles do</th><th>What we do</th></tr>
					<tr><td>Link count dips</td><td>Gamble on low-quality volume to pad the number</td><td>Audit the profile and fix what actually matters</td></tr>
					<tr><td>Directories &amp; listings</td><td>Buy bulk directory links</td><td>Keep genuinely relevant citations, skip the rest</td></tr>
					<tr><td>Guest posting</td><td>Post anywhere for the backlink</td><td>Only where the topic and audience genuinely fit</td></tr>
					<tr><td>A weak link found</td><td>Disavow everything indiscriminately</td><td>Disavow only when the risk genuinely warrants it</td></tr>
					<tr><td>Outreach</td><td>Mass email with no reason behind it</td><td>Built around content or resources worth referencing</td></tr>
				</table>
			</div>
			<p>Two related areas feed this service: entity clarity determines how confidently a source can be treated as what it claims to be (<a href="<?= site_url('semantic-entity-seo') ?>">Semantic &amp; Entity SEO</a>), and authority is one of the factors answer engines weigh when deciding what to cite (<a href="<?= site_url('aeo-geo') ?>">AEO &amp; GEO</a>).</p>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== EARN (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>From Profile to <span style="color:var(--primary-color);">Authority</span></h2>
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
						<h3>Non-negotiables</h3>
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

<!-- ========== WHERE PROFILES GO WRONG ========== -->
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