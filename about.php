<?php
// =========================================================
// About Us — Weblo digital agency story (unique layout)
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'About Weblo — Web Design, Development & SEO Agency';
$pageDescription = 'Weblo is a digital agency from Kasur, Pakistan building high-converting websites and growing organic traffic for clients across the UK, US, UAE, and beyond since 2017.';
$active          = 'about';
$canonicalPath   = 'about';
$ogImage         = 'assets/img/blog/author.jpg';

$aboutSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'AboutPage',
    'name'        => 'About ' . SITE_NAME,
    'url'         => absolute_url('about'),
    'description' => $pageDescription,
    'mainEntity'  => [
        '@type'   => 'Organization',
        'name'    => SITE_NAME,
        'url'     => absolute_url(''),
        'email'   => CONTACT_EMAIL,
        'telephone' => CONTACT_PHONE,
        'address' => ['@type' => 'PostalAddress', 'streetAddress' => CONTACT_ADDRESS, 'addressCountry' => 'PK'],
        'sameAs'  => [
            'https://www.linkedin.com/company/webloltd',
            'https://x.com/webloltd',
            'https://www.facebook.com/webloltd',
        ],
    ],
];

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => absolute_url('about')],
    ],
];

$extraSchema = '<script type="application/ld+json">' . json_encode($aboutSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$agency = [
    'name'     => SITE_NAME,
    'origin'   => 'Kasur, Pakistan',
    'snapshot' => 'A senior digital agency delivering web design, web development, and SEO to clients across the UK, US, UAE, Canada, and Pakistan since 2017.',
    'stats'    => [
        ['num' => '2017', 'label' => 'Founded'],
        ['num' => '120+', 'label' => 'Websites delivered'],
        ['num' => '5', 'label' => 'Countries served'],
    ],
];

$chapters = [
    [
        'num'  => '01',
        'title' => 'How It Started',
        'paras' => [
            'Weblo started in 2017 with a simple observation: businesses were being let down by agencies that designed beautiful websites nobody could find, or sold SEO for sites they never built. The website and its growth plan were treated as two separate purchases by two separate vendors.',
            'We started small &mdash; building websites for local businesses in Kasur and Lahore, then learning SEO the hard way: on real sites, with real consequences, one mistake at a time.',
        ],
    ],
    [
        'num'  => '02',
        'title' => 'What We Do Now',
        'paras' => [
            'Today Weblo is a full-service digital agency. We design and build websites and ecommerce stores, write the content that sells them, and run the white-hat SEO programs that get them found on Google and in AI search.',
            'Everything happens under one roof &mdash; design, development, copy, technical SEO, and ongoing support &mdash; so nothing falls through the cracks between agencies.',
        ],
    ],
    [
        'num'  => '03',
        'title' => 'The Hard Part Was Learning to Think Together',
        'paras' => [
            'The hardest lesson was that a website is a system, not a deliverable. Speed affects rankings. Structure affects how AI reads your content. Content affects whether visitors become customers. A design that ignores these fails, no matter how good it looks.',
            'That&rsquo;s why our team stopped working in silos. Designers talk to developers. Developers talk to SEO specialists. Everyone talks to the client&rsquo;s actual goals before a single pixel is drawn.',
        ],
    ],
    [
        'num'  => '04',
        'title' => 'The Question That Changed Everything',
        'paras' => [
            'The turning point came when we stopped asking &ldquo;what should this site look like?&rdquo; and started asking &ldquo;what should this site do for the business?&rdquo;',
            'That shift changed every decision: which pages to build, what to put on them, how fast they needed to load, and which keywords were worth fighting for. It&rsquo;s also why ' . SITE_NAME . ' builds and optimizes as one process &mdash; a long list of features doesn&rsquo;t grow a business. A site that matches what customers actually want does.',
        ],
    ],
    [
        'num'  => '05',
        'title' => 'Every Project Taught Us Something Different',
        'paras' => [
            'Over 120+ projects, we&rsquo;ve built boutique stores for London brands, corporate sites for UAE businesses, and SEO programs for ecommerce teams in the US. Some needed a technical rebuild. Some needed content people actually searched for. Some taught us that traffic means nothing if the site can&rsquo;t turn it into customers.',
            'Working across countries and industries showed us that no single playbook fits everyone. That&rsquo;s what keeps us honest about scope, pricing, and timelines.',
        ],
    ],
];

$process = [
    ['icon' => 'ri-chat-3-line', 'title' => 'Understand the business', 'text' => 'How the business makes money, who buys, and what actually drives growth.'],
    ['icon' => 'ri-palette-line', 'title' => 'Design the experience', 'text' => 'A responsive, on-brand design built around customer behavior.'],
    ['icon' => 'ri-code-s-slash-line', 'title' => 'Build it fast &amp; clean', 'text' => 'Secure, maintainable code with performance budgets, not guesses.'],
    ['icon' => 'ri-search-eye-line', 'title' => 'Fix the foundation', 'text' => 'Technical health, crawlability, and indexation sorted by impact.'],
    ['icon' => 'ri-file-list-3-line', 'title' => 'Build relevance', 'text' => 'Content and entities arranged around real search intent.'],
    ['icon' => 'ri-link', 'title' => 'Build authority', 'text' => 'Trust and relevance earned through quality, not volume.'],
    ['icon' => 'ri-line-chart-line', 'title' => 'Measure the result', 'text' => 'Progress tracked against the metrics that mean something.'],
];

$beliefs = [
    ['icon' => 'ri-growth-line', 'title' => 'Growth over aesthetics', 'text' => 'A beautiful site that doesn&rsquo;t convert is decoration. Design serves the business&rsquo;s goals, never the other way around.'],
    ['icon' => 'ri-user-heart-line', 'title' => 'People over algorithms', 'text' => 'Search engines are a proxy for real demand. We optimize for customers first and algorithms second.'],
    ['icon' => 'ri-flag-line', 'title' => 'Consistency over quick wins', 'text' => 'Persistent, steady work compounds. Quick wins fade; foundations do not.'],
];

require __DIR__ . '/includes/header.php';
?>
<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<nav class="hs-breadcrumb fadeInUp" data-delay="0.05" aria-label="Breadcrumb">
			<a href="<?= site_url('') ?>">Home</a><i class="ri-arrow-right-s-line"></i>
			<span>About</span>
		</nav>
		<div class="col-lg-10 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-user-smile-line"></i>About <?= e(SITE_NAME) ?></h3>
			<h1>We Build Sites. <span style="color:var(--primary-color);">We Get Them Found.</span></h1>
			<p class="sec-lead mx-auto" style="max-width:780px;">Most agencies stop at launch. We start there. This is the story behind Weblo &mdash; the design, development, and SEO team from Pakistan serving clients worldwide since 2017.</p>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== MEET THE FOUNDER ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-user-star-line"></i>Meet the Founder</h3>
			<h2 class="sec-title">The Person Behind Weblo</h2>
		</div>
		<div class="about-founder-card fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-5">
					<div class="founder-photo">
						<img src="<?= site_url('assets/img/founder.jpg') ?>" alt="Azhar Ali — CEO and Founder of Weblo" loading="lazy">
						<div class="founder-badge"><i class="ri-award-line"></i>Azhar Ali &middot; CEO &amp; Founder</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="founder-info">
						<h3 class="pill"><i class="ri-user-heart-line"></i>The Founder</h3>
						<h2>Azhar Ali</h2>
						<p class="founder-origin"><i class="ri-vip-crown-line"></i>CEO &amp; Founder, Weblo</p>
						<p class="founder-snapshot">Azhar Ali founded Weblo in 2017 with the belief that a website is only as good as the growth it drives. Combining hands-on web development with white-hat SEO, he built the agency around one idea &mdash; design, build, and rank as a single process.</p>
						<div class="founder-social">
							<span>Connect:</span>
							<a href="https://www.linkedin.com/company/webloltd" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a>
							<a href="https://x.com/webloltd" target="_blank" rel="noopener" aria-label="X (Twitter)"><i class="ri-twitter-x-fill"></i></a>
							<a href="https://www.facebook.com/webloltd" target="_blank" rel="noopener" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END MEET THE FOUNDER ========== -->

<!-- ========== STORY CHAPTERS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-book-open-line"></i>The Story</h3>
			<h2 class="sec-title">Five Chapters, One <span>Standard</span></h2>
			<p class="sec-lead">From local builds in Kasur to clients on three continents &mdash; one lesson at a time.</p>
		</div>
		<div class="about-story">
			<?php foreach ($chapters as $i => $c): ?>
			<article class="story-chapter fadeInUp" data-delay="<?= min(0.1 + $i * 0.1, 0.4) ?>">
				<span class="story-num"><?= e($c['num']) ?></span>
				<div class="story-body">
					<h3><?= e($c['title']) ?></h3>
					<?php foreach ($c['paras'] as $p): ?>
						<p><?= $p ?></p>
					<?php endforeach; ?>
				</div>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== HOW WE WORK ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-route-line"></i>How We Work</h3>
			<h2 class="sec-title">A Process Built From <span>Real Projects</span></h2>
			<p class="sec-lead">Everything on this site runs through the same sequence &mdash; understand first, build second, measure always.</p>
		</div>
		<div class="row">
			<?php foreach ($process as $pt): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4 d-flex">
				<div class="about-process-step h-100 fadeInUp" data-delay="<?= min(0.1 + (array_search($pt, $process) * 0.08), 0.42) ?>">
					<div class="process-ic"><i class="<?= e($pt['icon']) ?>"></i></div>
					<h4><?= e($pt['title']) ?></h4>
					<p><?= e($pt['text']) ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== WHAT WE BELIEVE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-quote-line"></i>What We Believe</h3>
			<h2 class="sec-title">Principles That <span>Hold Up</span></h2>
		</div>
		<div class="row">
			<?php foreach ($beliefs as $b): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 px-lg-3 mb-4">
				<div class="belief-card h-100 fadeInUp" data-delay="<?= min(0.1 + (array_search($b, $beliefs) * 0.1), 0.3) ?>">
					<i class="<?= e($b['icon']) ?>"></i>
					<h4><?= e($b['title']) ?></h4>
					<p><?= e($b['text']) ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ========== WHERE THIS IS GOING ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="about-vision fadeInUp" data-delay="0.1">
			<div class="row no-gutters align-items-center">
				<div class="col-lg-7">
					<div class="vision-inner">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="ri-rocket-2-line"></i>Where This Is Going</h3>
						<h2>Design Now. <span style="color:var(--primary-color);">Rank Tomorrow.</span></h2>
						<p>Our goal is to be the digital partner businesses keep coming back to &mdash; the team that builds the site, then stays to make sure it works. We help businesses win on Google today and in AI search tomorrow.</p>
						<p>We started by building websites. Now we build systems: design, development, SEO, and support that work as one machine. And we&rsquo;re still learning, because the web keeps changing.</p>
						<a href="<?= site_url('audit') ?>" class="btn btn-white mt-2">Free SEO Assessment <i class="ri-arrow-right-line"></i></a>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="vision-media">
						<img src="<?= site_url('assets/img/award.png') ?>" alt="<?= e(SITE_NAME) ?> — honest, prioritized digital work since 2017" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== CTA ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="cta-band fadeInUp" data-delay="0.1">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
					<h2>Want to see where your site stands?</h2>
					<p>Start with a free SEO assessment. You&rsquo;ll get a prioritized list of the fixes that actually move rankings and revenue &mdash; no sales pitch.</p>
				</div>
				<div class="col-lg-5 col-md-12 text-lg-right">
					<a href="<?= site_url('audit') ?>" class="btn btn-white mb-2">Free Automated Audit</a>
					<a href="<?= site_url('contact') ?>" class="btn btn-dark mb-2">Start a Project</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require __DIR__ . '/includes/footer.php';