<?php
// =========================================================
// Semantic & Entity SEO — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'semantic-entity-seo',
    'title'       => 'Semantic & Entity SEO',
    'pill'        => 'Structure &amp; Understanding',
    'metaTitle'   => 'Semantic & Entity SEO Services | Weblo',
    'metaDesc'    => 'Fix brand disambiguation, inaccurate schema, and disconnected content so search engines and AI systems understand your business as one clear entity.',
    'h1'          => 'Be Understood as a Clear, Specific Entity',
    'lead'        => 'Search engines stopped matching strings a long time ago. Semantic and entity SEO makes sure engines &mdash; and increasingly AI systems &mdash; know what your business is, and what you&rsquo;re an authority on.',
    'image'       => 'assets/img/blog/5.jpg',
    'imageAlt'    => 'Semantic and entity SEO - schema, disambiguation and topical authority',
    'related'     => ['on-page-seo', 'authority-link-building', 'aeo-geo'],

    'intro' => [
        'A site can use every right keyword and still leave a basic question unanswered: what is this business, and what is it about? Keywords describe what a page says, not what it means. <strong>Semantic &amp; entity SEO</strong> is the work of closing that gap &mdash; making sure the web actually says, in a way machines can parse, who you are and what you&rsquo;re an authority on.',
        'This matters more as search results lean harder on structured understanding rather than raw keyword matching, but it&rsquo;s not a new idea dressed up in new language. It&rsquo;s about clarity.',
    ],

    'split' => [
        'kicker'    => 'Entities &bull; Schema &bull; Topical Depth',
        'lead'      => 'We check how search engines currently understand the entity, then fix the identity and structural gaps that make a brand hard to describe.',
        'image'     => 'assets/img/blog/5.jpg',
        'imageAlt'  => 'Semantic and entity SEO - brand disambiguation and schema audit',
        'points'    => [
            ['icon' => 'ri-user-heart-line', 'title' => 'Entity audit', 'text' => 'How the brand appears in knowledge panels, structured data, and the third-party sources that feed search engines &mdash; including what&rsquo;s tangled or contradictory.'],
            ['icon' => 'ri-code-s-slash-line', 'title' => 'Schema reviewed for accuracy', 'text' => 'Markup that doesn&rsquo;t match the visible page gets removed; markup that would genuinely help gets added. Incorrect schema is often worse than none.'],
            ['icon' => 'ri-shuffle-line', 'title' => 'Disambiguation work', 'text' => 'Name conflicts and brand history creating confusion get fixed with sameAs references and consistent info across owned properties.'],
            ['icon' => 'ri-node-tree', 'title' => 'Topical content mapping', 'text' => 'Where a pillar page and its supporting content are missing, thin, or disconnected &mdash; so the site reads as an authority on a subject, not a keyword grab-bag.'],
        ],
        'matters'   => [
            ['icon' => 'ri-robot-line', 'title' => 'AI systems need to know who&rsquo;s cited', 'text' => 'A poorly disambiguated entity is a harder one to quote confidently. Entity clarity underpins <a href="' . site_url('aeo-geo') . '">AEO &amp; GEO</a>.'],
            ['icon' => 'ri-shield-check-line', 'title' => 'Accuracy over presence', 'text' => 'We&rsquo;ve turned down requests to add schema types that wouldn&rsquo;t apply, because incorrect markup creates more risk than upside.'],
            ['icon' => 'ri-scales-3-line', 'title' => 'Depth over page count', 'text' => 'Three well-structured, thorough pieces rarely lose to ten thin disconnected ones. Coverage and structure beat volume.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'Where entity clarity usually breaks down',
            'paras'   => [
                'Disambiguation is the most common problem. Two businesses with similar names, a founder who shares a name with someone more famous, or a brand that changed names can all end up tangled together in how search engines represent the entity. When that happens, structured data and consistent citations matter more than any single page&rsquo;s content.',
                'Schema markup causes its own set of problems, usually from being applied without much thought about accuracy. We regularly see the same schema type copied across every page on a site regardless of whether it fits, or markup that describes something the page doesn&rsquo;t actually contain.',
                'Then there&rsquo;s topical coverage: a site can publish dozens of pages around a subject without any of them adding up to a coherent signal of expertise, because the content was built keyword by keyword rather than around the actual shape of the topic.',
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-user-heart-line', 'title' => 'Entity &amp; schema audit', 'text' => 'How the brand is represented across knowledge panels, structured data, and third-party sources, with fixes prioritized.'],
                ['icon' => 'ri-node-tree', 'title' => 'Topical content map', 'text' => 'Pillar and supporting content gaps within core subject areas, with a clear structure connecting them.'],
                ['icon' => 'ri-link', 'title' => 'Internal linking for topics', 'text' => 'Recommendations built around topical relationships rather than page-level conversion paths alone.'],
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-medal-line', 'title' => 'Specialist &amp; competitive niches', 'text' => 'Businesses that want to be recognized as an authority on a specific topic, not just rank for a few phrases.'],
                ['icon' => 'ri-shuffle-line', 'title' => 'Brands with name confusion', 'text' => 'Companies dealing with disambiguation issues, founder name conflicts, or a history of name changes.'],
                ['icon' => 'ri-draft-line', 'title' => 'Rebrands &amp; new topic areas', 'text' => 'Businesses preparing for a rebrand or expansion who want the entity groundwork done properly from the start.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Does adding schema guarantee rich results or AI citations?', 'a' => 'No, and anyone who tells you otherwise is oversimplifying it. Schema helps search engines and AI systems parse content more accurately, but it doesn\'t override thin content or force a citation that wouldn\'t otherwise make sense.'],
        ['q' => 'What\'s the difference between this and on-page SEO?', 'a' => 'On-page SEO looks at whether an individual page matches search intent and is structured well. Semantic and entity SEO looks at whether the site as a whole is clearly understood as an entity and an authority on its subject, which usually spans many pages and structured data beyond any single page.'],
        ['q' => 'What counts as an entity in this context?', 'a' => 'Broadly, anything search engines try to identify and understand distinctly: your business, a founder or author, a product line, or a specific concept your content covers repeatedly. Entity work is about making sure those things are represented clearly and consistently.'],
        ['q' => 'Is this only relevant for large sites?', 'a' => 'No. Disambiguation and schema accuracy matter for a five-person business as much as a large one. Topical mapping tends to matter more as a site grows, but the entity clarity work is relevant at almost any size.'],
    ],

    'ctaTitle' => 'Check how your entity is actually being understood',
    'ctaLead'  => 'If your brand deals with name confusion, inconsistent schema, or content that&rsquo;s grown without a clear topical structure, request a free SEO analysis and we&rsquo;ll look at what&rsquo;s really happening.',
];

// ---------------------------------------------------------
// Unique entity-map layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-user-heart-line"></i>Entity audit</span>
				<span class="svc-kicker"><i class="ri-code-s-slash-line"></i>Schema accuracy</span>
				<span class="svc-kicker"><i class="ri-shuffle-line"></i>Disambiguation</span>
				<span class="svc-kicker"><i class="ri-node-tree"></i>Topical depth</span>
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

<!-- ========== MACHINES SHOULD KNOW ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">What machines should be able to <span style="color:var(--primary-color);">say about you</span></h2>
			<p class="svc-section-lead">If these statements aren&rsquo;t cleanly parseable from the web, that&rsquo;s the gap we close.</p>
			<div class="svc-checks">
				<div class="svc-check">
					<i class="check-ic good ri-check-line"></i>
					<div>
						<h4>Who you are</h4>
						<p>One identity across your site, knowledge panels, and third-party sources.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-check-line"></i>
					<div>
						<h4>What you do</h4>
						<p>Consistent descriptions of products, services, and people &mdash; no contradictions between pages.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-check-line"></i>
					<div>
						<h4>What matches the page</h4>
						<p>Schema only reflects what a page actually contains &mdash; incorrect markup removed.</p>
					</div>
				</div>
				<div class="svc-check">
					<i class="check-ic good ri-check-line"></i>
					<div>
						<h4>What you&rsquo;re an authority on</h4>
						<p>Topical structure across pages that reads as depth, not a keyword grab-bag.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== CLOSING THE GAP (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Closing the <span style="color:var(--primary-color);">Understanding Gap</span></h2>
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
						<h3>Standards we don&rsquo;t bend</h3>
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

<!-- ========== WHERE IT BREAKS ========== -->
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