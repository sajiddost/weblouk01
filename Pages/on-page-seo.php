<?php
// =========================================================
// On-Page SEO â€” service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'on-page-seo',
    'title'       => 'On-Page SEO',
    'pill'        => 'Content &amp; Intent',
    'metaTitle'   => 'On-Page SEO Services | Weblo',
    'metaDesc'    => 'Content that ranks but doesn\'t convert usually has an intent problem, not a keyword problem. We fix structure, cannibalization, and content gaps.',
    'h1'          => 'Make Every Page Match What Searchers Actually Want',
    'lead'        => 'A page can target the exact right keyword, follow every checklist item, and still underperform because it answers a question nobody was asking. That gap is where on-page SEO happens.',
    'image'       => 'assets/img/blog/3.jpg',
    'imageAlt'    => 'On-page SEO - search intent, content structure and internal linking',
    'related'     => ['technical-seo-audits', 'semantic-entity-seo', 'aeo-geo'],

    'intro' => [
        'The most common problem isn&rsquo;t missing content. It&rsquo;s content built around the wrong assumption about what the searcher wants. A page targeting a commercial keyword with a purely informational article, or a product page trying to rank for a question that belongs on a blog, tends to plateau no matter how well it&rsquo;s written &mdash; because it&rsquo;s solving the wrong problem for that search.',
        '<strong>On-page SEO</strong> is rarely about whether a keyword appears in the title tag. It&rsquo;s about whether the page does what the searcher needed it to do. Checklists don&rsquo;t rank pages. Search intent does.',
    ],

    'split' => [
        'kicker'    => 'Intent &bull; Structure &bull; Cannibalization',
        'lead'      => 'We map search intent against what already exists, then fix the page in the context of the site around it.',
        'image'     => 'assets/img/blog/3.jpg',
        'imageAlt'  => 'On-page SEO - mapping search intent to existing content',
        'points'    => [
            ['icon' => 'ri-crosshair-2-line', 'title' => 'Search intent mapping', 'text' => 'For each target term we check what&rsquo;s actually ranking, what kind of content search engines are rewarding, and where the current page falls short.'],
            ['icon' => 'ri-shuffle-line', 'title' => 'Cannibalization review', 'text' => 'Two or three pages competing for the same term get flagged, then consolidated into one strong page or clearly differentiated around different intents.'],
            ['icon' => 'ri-link', 'title' => 'Internal linking at page level', 'text' => 'Connecting related content in ways that help both users and search engines understand how pages relate &mdash; not links that exist because a template requires them.'],
            ['icon' => 'ri-edit-line', 'title' => 'Titles, headers &amp; descriptions', 'text' => 'Reviewed against how they&rsquo;d actually perform in a search result, since a technically correct title that nobody clicks isn&rsquo;t doing its job.'],
        ],
        'matters'   => [
            ['icon' => 'ri-robot-line', 'title' => 'AI answers need extractable content', 'text' => 'Pages that clearly answer a question, with a structure that&rsquo;s easy to lift from, are more likely to get pulled into AI-generated answers.'],
            ['icon' => 'ri-double-quotes-l', 'title' => 'Ranking isn&rsquo;t proof it works', 'text' => 'We check what happens after someone clicks, not just whether the page ranks.'],
            ['icon' => 'ri-scales-3-line', 'title' => 'Length matches the query', 'text' => 'A narrow question doesn&rsquo;t need a broad topic&rsquo;s word count. Forcing both into the same template hurts the shorter one.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'Where on-page content usually falls short',
            'paras'   => [
                'Padding is one pattern: content stretched to hit a word count because somewhere along the way &ldquo;longer ranks better&rdquo; became conventional wisdom. It doesn&rsquo;t, not reliably, and it often makes a page harder to read without making it more useful.',
                'Structure is another. Headings that don&rsquo;t reflect how someone would actually skim the page, internal links placed by template rather than value, and title tags optimized for keyword density instead of the click. These rarely get fixed because they&rsquo;re not obvious from a quick read-through; they show up when you check the page against what it&rsquo;s actually trying to rank for.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-file-search-line', 'title' => 'Page-level audits', 'text' => 'Titles, headers, meta descriptions, and content structure checked against actual search intent.'],
                ['icon' => 'ri-crosshair-2-line', 'title' => 'Intent mapping', 'text' => 'A review of what&rsquo;s ranking for your targets and where existing content falls short.'],
                ['icon' => 'ri-shuffle-line', 'title' => 'Cannibalization cleanup', 'text' => 'Pages competing with each other identified, with consolidation or differentiation recommended.'],
                ['icon' => 'ri-edit-line', 'title' => 'Rewrites or briefs', 'text' => 'Full drafts or detailed briefs, matching intent rather than hitting a length target.'],
            ],
        ],
        [
            'heading' => 'Why this approach is different',
            'paras'   => [
                'More content is not always the answer, even when a gap analysis suggests one exists. In many cases the higher-leverage fix is improving or restructuring what&rsquo;s already published rather than adding more pages that will compete with it.',
                'Where a rewrite is the right call, we provide either full content or a detailed brief your internal team can write from, depending on scope. Either way, the goal is matching the page to what the searcher needs.',
                'And if the core issue is technical &mdash; pages that aren&rsquo;t getting crawled at all &mdash; <a href="' . site_url('technical-seo-audits') . '">technical SEO</a> needs to happen first. If visibility is limited by a lack of external authority instead of page quality, <a href="' . site_url('authority-link-building') . '">authority &amp; link building</a> is usually the better starting point.',
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'How is this different from your Technical SEO service?', 'a' => 'Technical SEO covers whether pages can be crawled, indexed, and rendered correctly. On-page SEO assumes the page is technically accessible and focuses on whether the content itself matches search intent and is structured well enough to rank and convert.'],
        ['q' => 'Do you write the content yourselves?', 'a' => 'It depends on scope. Some clients want fully drafted content ready to publish. Others have an internal writing team and prefer a detailed brief covering intent, structure, and key points to include.'],
        ['q' => 'What if two of our pages are targeting the same keyword?', 'a' => 'That\'s keyword cannibalization, and it\'s one of the more common issues we find. The fix is usually consolidating into one strong page or clearly differentiating the two around different intents, rather than trying to optimize both at once.'],
        ['q' => 'Does this include schema or structured data?', 'a' => 'Not directly. Structured data and entity-level optimization are covered on our Semantic & Entity SEO page. On-page work focuses on the content and structure a reader actually sees.'],
        ['q' => 'Will longer content always perform better?', 'a' => 'No. Content length should match the query, not a target word count. A page answering a narrow, specific question doesn\'t need to be as long as one covering a broad topic.'],
    ],

    'ctaTitle' => 'Start with a working conversation',
    'ctaLead'  => 'If you have content that&rsquo;s ranking but not converting, or a site that&rsquo;s grown without a consistent approach to search intent, request a free SEO analysis and we&rsquo;ll look at what&rsquo;s actually happening on the page.',
];

// ---------------------------------------------------------
// Unique page-anatomy layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-crosshair-2-line"></i>Search intent</span>
				<span class="svc-kicker"><i class="ri-shuffle-line"></i>Cannibalization</span>
				<span class="svc-kicker"><i class="ri-link"></i>Internal linking</span>
				<span class="svc-kicker"><i class="ri-edit-line"></i>Titles &amp; headers</span>
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

<!-- ========== INTENT TABLE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Match the page to the <span style="color:var(--primary-color);">intent</span></h2>
			<p class="svc-section-lead">The same query shape can demand a completely different page. This is the mapping we start from.</p>
			<div class="svc-table-wrap">
				<table class="svc-table">
					<tr><th>Search intent</th><th>What wins</th><th>Page that fits</th></tr>
					<tr><td>Informational</td><td>Direct answer, easy-to-lift structure</td><td>Blog guide / explainer written for the question</td></tr>
					<tr><td>Commercial</td><td>Comparison and proof detail</td><td>Category or landing page built to be compared</td></tr>
					<tr><td>Transactional</td><td>Decision friction removed</td><td>Product page exposing price, stock, and next step</td></tr>
					<tr><td>Navigational</td><td>Brand clarity and trust</td><td>Brand / about page that confirms identity</td></tr>
				</table>
			</div>
			<p>A product page trying to rank for a question that belongs on a blog tends to plateau no matter how well it&rsquo;s written &mdash; it&rsquo;s solving the wrong problem. That&rsquo;s also why two pages competing for the same term hurt each other; consolidation or clear differentiation is usually the fix.</p>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== PAGE WORK (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>The Page <span style="color:var(--primary-color);">Work We Do</span></h2>
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
						<h3>Beyond ranking</h3>
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

<!-- ========== PAGE ANATOMY CHECKLIST ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Anatomy of a page that <span style="color:var(--primary-color);">converts</span></h2>
			<p class="svc-section-lead">Quick ways a page tells you whether it was written for a searcher or for a keyword.</p>
			<div class="svc-checks">
				<div class="svc-check">
					<i class="check-ic good ri-check-line"></i>
					<div>
						<h4>Direct answer, early</h4>
						<p>If the query is a question, the page says the answer before the build-up.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-list-ordered"></i>
					<div>
						<h4>Headings match skimming</h4>
						<p>Headers reflect how a real reader would scan, not a keyword outline.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-crosshair-2-line"></i>
					<div>
						<h4>CTA matches intent</h4>
						<p>Informational pages inform; commercial pages compare; transactional pages convert.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-link"></i>
					<div>
						<h4>Links placed for value</h4>
						<p>Internal links connect related content where it&rsquo;s actually useful, not by template.</p>
					</div>
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

<!-- ========== WHY DIFFERENT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Why this approach is <span style="color:var(--primary-color);">different</span></h2>
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