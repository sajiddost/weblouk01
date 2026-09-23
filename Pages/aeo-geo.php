<?php
// =========================================================
// AEO & GEO Optimization — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'aeo-geo',
    'title'       => 'AEO & GEO Optimization',
    'pill'        => 'AI Search Visibility',
    'metaTitle'   => 'AEO & GEO Optimization Services | Weblo',
    'metaDesc'    => 'Get found in AI Overviews, ChatGPT, and Perplexity answers. Honest, measurement-aware optimization for how generative and answer engines select sources.',
    'h1'          => 'Show Up in the Answers, Not Just the Results',
    'lead'        => 'Ranking and being cited as the source of an AI answer are different games. AEO and GEO make sure your content is structured and credible enough to be selected when the answer is being built.',
    'image'       => 'assets/img/blog/c1.jpg',
    'imageAlt'    => 'AEO and GEO optimization - being cited in AI Overviews and ChatGPT answers',
    'related'     => ['on-page-seo', 'semantic-entity-seo', 'authority-link-building'],

    'intro' => [
        'A page can rank on page one and still never appear in an AI-generated answer. That&rsquo;s not a contradiction. Ranking and getting pulled into a synthesized response are different mechanisms, judged by different criteria &mdash; and a lot of otherwise solid SEO work was never built with the second one in mind.',
        '<strong>AEO</strong> (Answer Engine Optimization) covers answer-style features built into search engines themselves: featured snippets, People Also Ask, voice responses, and AI Overviews. <strong>GEO</strong> (Generative Engine Optimization) covers visibility inside standalone tools like ChatGPT, Perplexity, and Gemini. The two overlap, which is why we work on them together.',
    ],

    'split' => [
        'kicker'    => 'Structure &bull; Credibility &bull; Measurement',
        'lead'      => 'Answer and generative engines favor content that states things directly and is easy to lift out of context. We make sure your pages qualify.',
        'image'     => 'assets/img/blog/c1.jpg',
        'imageAlt'  => 'AEO and GEO optimization - content structure and AI citation check',
        'points'    => [
            ['icon' => 'ri-question-answer-line', 'title' => 'AI citation visibility check', 'text' => 'How the brand currently shows up, or doesn&rsquo;t, across the answer and generative engines relevant to its industry &mdash; a manual, close review.'],
            ['icon' => 'ri-edit-line', 'title' => 'Content structure review', 'text' => 'Where information could be stated more directly or extracted more cleanly, without sacrificing readability for human visitors.'],
            ['icon' => 'ri-code-s-slash-line', 'title' => 'Structured data accuracy', 'text' => 'Machine-readable markup that correctly describes the content gives these systems more confidence in what they&rsquo;re citing.'],
            ['icon' => 'ri-shield-check-line', 'title' => 'Entity &amp; credibility assessment', 'text' => 'Gaps that could make a source harder to cite confidently &mdash; entity clarity and external authority &mdash; identified and prioritized.'],
        ],
        'matters'   => [
            ['icon' => 'ri-eye-off-line', 'title' => 'AI Overviews take the click', 'text' => 'A direct answer can satisfy the searcher without a visit to your site.'],
            ['icon' => 'ri-scales-3-line', 'title' => 'Honest measurement', 'text' => 'No guaranteed citation counts. We track what can actually be measured reliably rather than presenting estimates as precise data.'],
            ['icon' => 'ri-building-2-line', 'title' => 'Fundamentals come first', 'text' => 'We won&rsquo;t recommend this work in isolation if technical, content, or authority basics aren&rsquo;t already reasonably solid.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'Why this is a genuinely different problem',
            'paras'   => [
                'Traditional SEO optimizes for a ranking position because a ranking position is what drives a click. AI-generated answers change that relationship: a source can be the basis for an answer without the reader ever visiting the page, which means the old proxy of rank tracking doesn&rsquo;t fully capture what&rsquo;s happening anymore.',
                'Content that ranks well doesn&rsquo;t automatically get selected for extraction. A page written to build gradually toward a conclusion &mdash; which works fine for a human reader following along &mdash; can be harder for these systems to extract cleanly, even if the underlying information is accurate and useful.',
                'Credibility works differently here too. A system deciding what to cite is making a judgment about whether a source is trustworthy enough to attribute an answer to, drawing on the same underlying signals as entity clarity and authority, just applied to a new kind of output.',
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-information-line', 'title' => 'Informational &amp; comparison industries', 'text' => 'Buyers in these categories commonly turn to AI tools to research options &mdash; the fastest-moving part of search behavior today.'],
                ['icon' => 'ri-line-chart-line', 'title' => 'Sites already ranking well', 'text' => 'Brands performing well in traditional search that want to understand and extend that visibility into generative answers.'],
                ['icon' => 'ri-refresh-line', 'title' => 'Noticing a traffic shift', 'text' => 'Companies seeing changes in how traffic arrives from search and wanting a clearer picture of what&rsquo;s actually changing.'],
            ],
        ],
        [
            'heading' => 'What&rsquo;s included',
            'points'  => [
                ['icon' => 'ri-crosshair-2-line', 'title' => 'Visibility check', 'text' => 'A written review of relevant queries across major answer and generative engines, and where your brand appears.'],
                ['icon' => 'ri-edit-line', 'title' => 'Structure &amp; schema review', 'text' => 'Where content could be stated more directly, plus a structured data review focused on correct interpretation.'],
                ['icon' => 'ri-list-check-2', 'title' => 'Prioritized recommendations', 'text' => 'Not every gap is worth closing immediately &mdash; some depend on fundamentals being fixed first.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'What\'s the actual difference between AEO and GEO?', 'a' => 'AEO covers answer-style features inside search engines themselves, things like featured snippets and AI Overviews. GEO covers visibility inside standalone generative tools like ChatGPT or Perplexity. The content and credibility fundamentals that help with one tend to help with the other, which is why we work on them together.'],
        ['q' => 'Can you guarantee our brand gets cited in AI answers?', 'a' => 'No, and we\'d be skeptical of anyone who says they can. We can improve the underlying factors that make citation more likely, but these systems make their own selections in ways that aren\'t fully transparent or consistent.'],
        ['q' => 'How do you measure success if there\'s no click involved?', 'a' => 'Through direct visibility checks: testing relevant queries across major engines and tracking whether and how a brand appears, rather than relying solely on click-based analytics.'],
        ['q' => 'Does this replace traditional SEO work?', 'a' => 'No. It builds on it. Content structure, entity clarity, and authority all matter for traditional rankings too, and none of this replaces the fundamentals covered on our other service pages.'],
        ['q' => 'Is this worth investing in right now, or is it too early?', 'a' => 'It depends on your audience and industry. If your buyers are already using AI tools to research options, the groundwork is worth starting now, since a lot of it overlaps with good SEO practice anyway.'],
    ],

    'ctaTitle' => 'Start with a working conversation',
    'ctaLead'  => 'If you&rsquo;re noticing changes in how search traffic behaves, or want a clearer picture of how your brand shows up in AI-generated answers, request a free SEO analysis and we&rsquo;ll look at what&rsquo;s actually happening.',
];

// ---------------------------------------------------------
// Unique answer-visibility layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-question-answer-line"></i>Answer engines</span>
				<span class="svc-kicker"><i class="ri-robot-line"></i>Generative engines</span>
				<span class="svc-kicker"><i class="ri-code-s-slash-line"></i>Structured data</span>
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Citation checks</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SIGNATURE QUOTE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-quote fadeInUp" data-delay="0.1">
			<i class="ri-double-quotes-l"></i>
			<p>A page can rank on page one and still never appear in an AI-generated answer. Ranking and being cited are different mechanisms &mdash; and a lot of solid SEO was never built with the second one in mind.</p>
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

<!-- ========== WHERE ANSWERS COME FROM ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title">Where the <span style="color:var(--primary-color);">answers come from</span></h2>
			<p class="svc-section-lead">AEO and GEO cover different places an answer can be built. We work on them together because the fundamentals overlap.</p>
			<div class="svc-table-wrap">
				<table class="svc-table">
					<tr><th>Surface</th><th>How it selects sources</th><th>What your content needs</th></tr>
					<tr><td>Featured snippets</td><td>Direct answer extraction from a clear page</td><td>Straight statement, early placement</td></tr>
					<tr><td>AI Overviews</td><td>Synthesis across multiple trusted sources</td><td>Direct claims + entity &amp; authority signals</td></tr>
					<tr><td>ChatGPT / Perplexity / Gemini</td><td>Relevance across indexed, structured content</td><td>Clean structure + correct schema + credibility</td></tr>
					<tr><td>Voice assistants</td><td>Short, quotable answers to spoken queries</td><td>Concise, conversational phrasing</td></tr>
				</table>
			</div>
			<p>Beneath all of them sits the same underlying judgment &mdash; whether a source is clear enough and credible enough to attribute an answer to. That&rsquo;s why the on-page, entity, and authority work on <a href="<?= site_url('on-page-seo') ?>">On-Page SEO</a>, <a href="<?= site_url('semantic-entity-seo') ?>">Semantic &amp; Entity SEO</a>, and <a href="<?= site_url('authority-link-building') ?>">Authority &amp; Link Building</a> feeds directly into how likely you are to be cited.</p>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== THE WORK (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>Qualifying Pages for <span style="color:var(--primary-color);">Selection</span></h2>
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
						<h3>Clear about limits</h3>
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

<!-- ========== WHY DIFFERENT ========== -->
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

<!-- ========== WHO THIS IS FOR ========== -->
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