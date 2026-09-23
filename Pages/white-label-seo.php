<?php
// =========================================================
// White Label SEO — service page
// =========================================================
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

$service = [
    'slug'        => 'white-label-seo',
    'title'       => 'White Label SEO',
    'pill'        => 'For Agencies',
    'metaTitle'   => 'White Label SEO Services | Weblo',
    'metaDesc'    => 'SEO execution under your agency\'s brand. Full-stack or single-service, confidential by default, with consistent quality across every client account.',
    'h1'          => 'SEO Execution Your Agency Can Put Its Name On',
    'lead'        => 'This page is written for agencies, not end clients. If a client just asked for SEO you don&rsquo;t have the team or the time to deliver in-house, this is the problem we solve.',
    'image'       => 'assets/img/white-label-SEO-fulfillment.webp',
    'imageAlt'    => 'White label SEO fulfillment delivered under an agency\'s brand',
    'related'     => ['technical-seo-audits', 'authority-link-building', 'aeo-geo'],

    'intro' => [
        'White label doesn&rsquo;t just mean removing our logo from a report. It means the work has to be good enough that your client never has a reason to ask who&rsquo;s actually doing it. That&rsquo;s a higher bar than most people assume when they hear &ldquo;white label,&rdquo; and it&rsquo;s the standard we hold every account to.',
        'Most agencies that come to us aren&rsquo;t looking for SEO advice. They&rsquo;re looking for execution capacity they don&rsquo;t have &mdash; without the gamble of hiring, and without the risk of a freelancer building a relationship that outlasts the arrangement.',
    ],

    'split' => [
        'kicker'    => 'Fulfillment &bull; Confidential &bull; Consistent',
        'lead'      => 'We handle the SEO work end to end, under your brand, without ever appearing to your client as a separate entity unless you choose to disclose the relationship.',
        'image'     => 'assets/img/white-label-SEO-fulfillment.webp',
        'imageAlt'  => 'White label SEO - reports formatted and branded for your agency',
        'points'    => [
            ['icon' => 'ri-search-eye-line', 'title' => 'Full-stack or single-service', 'text' => 'Technical, on-page, authority, semantic &amp; entity, and AEO/GEO work &mdash; scoped per client rather than bundled into a fixed package.'],
            ['icon' => 'ri-user-heart-line', 'title' => 'Your branded reports', 'text' => 'Reports come formatted and ready for your branding, or fully white-labeled to your specifications if you&rsquo;d rather hand that off entirely.'],
            ['icon' => 'ri-lock-line', 'title' => 'Confidential by default', 'text' => 'We don&rsquo;t loop your client in, we don&rsquo;t reach out to them independently, and we don&rsquo;t put our name in front of them unless you ask.'],
            ['icon' => 'ri-hand-heart-line', 'title' => 'One account manager for you', 'text' => 'Communication runs through a dedicated account manager on our side &mdash; yours, not your client&rsquo;s.'],
        ],
        'matters'   => [
            ['icon' => 'ri-scales-3-line', 'title' => 'Consistency protects your brand', 'text' => 'A client who notices a drop in quality doesn&rsquo;t blame the freelancer they&rsquo;ve never heard of. They blame the agency whose name is on the report.'],
            ['icon' => 'ri-error-warning-line', 'title' => 'Honest scoping', 'text' => 'If a client&rsquo;s site has fundamental problems, we say so upfront rather than promising a quick win that sets the relationship up for disappointment.'],
            ['icon' => 'ri-line-chart-line', 'title' => 'Same standards as direct clients', 'text' => 'Every account runs through the same process and quality standards, regardless of size.'],
        ],
    ],

    'sections' => [
        [
            'heading' => 'The problem agencies actually have',
            'paras'   => [
                'Hiring an in-house SEO specialist is slow and expensive, and it&rsquo;s a real gamble if you&rsquo;re not sure how much ongoing SEO demand you&rsquo;ll actually have across your client base. Freelancers are the usual alternative, but quality varies wildly from one to the next, and there&rsquo;s always some risk that a freelancer working directly with your client ends up building a relationship that outlasts the freelance arrangement.',
                'Even when an agency has some internal SEO capability, capacity runs out. A team that can handle three client accounts well starts cutting corners on the fifth or sixth, and the client rarely knows why results have quietly gotten worse. Reporting adds another layer of work on top of that: compiling data, writing it up in plain language, and making it look like it came from your agency rather than a spreadsheet export.',
            ],
        ],
        [
            'heading' => 'How it works',
            'paras'   => [
                'You bring us the client details, goals, and access needed for the relevant work. We scope the engagement and come back with a plan and timeline, the same way we would for a direct client. From there, execution happens against the same standards we apply to every account &mdash; white label or not &mdash; because the quality of the work is what actually protects the relationship you have with your client.',
                'If a client&rsquo;s site is large or complex enough to need the coordination covered on our <a href="' . site_url('enterprise-seo') . '">Enterprise SEO</a> page, that work happens the same way &mdash; under your agency&rsquo;s name, at the appropriate scope. And when a site&rsquo;s core issue is technical, content, or authority-driven, we route it through the matching service: <a href="' . site_url('technical-seo-audits') . '">Technical SEO</a>, <a href="' . site_url('on-page-seo') . '">On-Page SEO</a>, <a href="' . site_url('authority-link-building') . '">Authority &amp; Link Building</a>, <a href="' . site_url('semantic-entity-seo') . '">Semantic &amp; Entity SEO</a>, or <a href="' . site_url('aeo-geo') . '">AEO &amp; GEO</a>.',
            ],
        ],
        [
            'heading' => 'Who this is for',
            'points'  => [
                ['icon' => 'ri-building-2-line', 'title' => 'Agencies without an SEO team', 'text' => 'No in-house capability, and no desire to build a team just to fulfill occasional client requests.'],
                ['icon' => 'ri-refresh-line', 'title' => 'Teams at capacity', 'text' => 'An SEO team that&rsquo;s already stretched and needs overflow support without hiring.'],
                ['icon' => 'ri-medal-line', 'title' => 'Adding SEO to the menu', 'text' => 'Agencies looking to add SEO to their service menu without the operational risk of a new department.'],
            ],
        ],
    ],

    'faqs' => [
        ['q' => 'Will our client know Weblo is involved?', 'a' => 'Not unless you choose to tell them. Reports and communication are structured to stay under your brand by default.'],
        ['q' => 'Do you ever contact our clients directly?', 'a' => 'No. Communication runs through your account manager on our side. If a situation genuinely requires client input, we bring it to you first and let you decide how to handle it.'],
        ['q' => 'Can we white-label a single service, or does it have to be the full stack?', 'a' => 'Either. Some agencies use us for one specific service, like link building or technical audits, while others hand off full SEO management for a client. Scope is set per account, not fixed at the partnership level.'],
        ['q' => 'Will quality stay consistent if we send you several client accounts at once?', 'a' => 'Yes. Every account runs through the same process and standards regardless of how many you have with us at a given time. That consistency is the whole point of the model, since inconsistent quality across accounts is what usually damages an agency\'s reputation with its own clients.'],
        ['q' => 'Do you offer volume pricing for agencies managing multiple accounts?', 'a' => 'Yes, structured around the number and scope of accounts involved. Get in touch and we\'ll work out specifics once we understand your client volume.'],
    ],

    'ctaTitle' => 'Start the conversation',
    'ctaLead'  => 'If you&rsquo;re an agency owner or account manager looking for reliable SEO execution you can put your name on, get in touch and we&rsquo;ll talk through what your clients actually need and how a white-label arrangement would work.',
];

// ---------------------------------------------------------
// Unique agency-partnership layout for this service (no shared layout).
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
				<span class="svc-kicker"><i class="ri-search-eye-line"></i>Full-stack or single</span>
				<span class="svc-kicker"><i class="ri-lock-line"></i>Confidential</span>
				<span class="svc-kicker"><i class="ri-user-heart-line"></i>Your branding</span>
				<span class="svc-kicker"><i class="ri-hand-heart-line"></i>One manager</span>
			</div>
		</div>
	</div>
</section>

<!-- ========== SIGNATURE QUOTE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-quote fadeInUp" data-delay="0.1">
			<i class="ri-double-quotes-l"></i>
			<p>White label doesn&rsquo;t just mean removing our logo from a report.</p>
			<span>It means the work has to be good enough that your client never has a reason to ask who&rsquo;s actually doing it.</span>
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

<!-- ========== ONBOARDING STEPS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="sec-header center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-hand-heart-line"></i>Working together</h3>
			<h2 class="sec-title">How a White-Label Account <span>Runs</span></h2>
			<p class="sec-lead">Scoped per client &mdash; no fixed packages, no surprise hand-offs.</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.1">
					<div class="step-circle"><i class="ri-search-eye-line"></i><span class="step-num">1</span></div>
					<h4>Scope together</h4>
					<p>You share the client&rsquo;s goals and access; we come back with a plan and timeline &mdash; exactly as we would for a direct client.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.2">
					<div class="step-circle"><i class="ri-user-heart-line"></i><span class="step-num">2</span></div>
					<h4>Stop for revision</h4>
					<p>Reports come ready for your branding, or fully white-labeled if you&rsquo;d rather hand that off entirely.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.3">
					<div class="step-circle"><i class="ri-lock-line"></i><span class="step-num">3</span></div>
					<h4>Stay unseen</h4>
					<p>We never loop your client in, reach out to them, or put our name in front of them unless you ask.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="step-card fadeInUp" data-delay="0.4">
					<div class="step-circle"><i class="ri-hand-heart-line"></i><span class="step-num">4</span></div>
					<h4>One manager, your side</h4>
					<p>Communication runs through a dedicated account manager on our side &mdash; yours, not your client&rsquo;s.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== PARTNERSHIP STATS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-stats">
			<div class="stat-box fadeInUp" data-delay="0.1"><h4>Full-stack or single</h4><p>Technical, on-page, authority, entity, and AEO/GEO &mdash; scoped per client, never bundled.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.2"><h4>Volume pricing</h4><p>Structured around the number and scope of accounts you run with us.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.3"><h4>Never contact your clients</h4><p>If input is genuinely needed, we bring it to you first and let you decide how to handle it.</p></div>
			<div class="stat-box fadeInUp" data-delay="0.4"><h4>Same standards</h4><p>Every account runs through the same process and quality bar, whatever the size.</p></div>
		</div>
	</div>
</section>

<?php $s = $service['split']; ?>
<!-- ========== THE STANDARD (dark split) ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="seo-content-wrap fadeInUp" data-delay="0.1">
			<div class="row no-gutters">
				<div class="col-lg-7">
					<div class="seo-content-left">
						<h3 class="pill" style="color:#fff;border-color:rgba(255,255,255,.25);"><i class="<?= e($SERVICES[$service['slug']]['icon']) ?>"></i><?= e($s['kicker']) ?></h3>
						<h2>The Bar We <span style="color:var(--primary-color);">Hold Every Account To</span></h2>
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
						<h3>What protects your brand</h3>
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

<!-- ========== THE PROBLEM ========== -->
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

<!-- ========== HOW IT WORKS ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="svc-section fadeInUp" data-delay="0.1">
			<h2 class="svc-section-title"><?= e($service['sections'][1]['heading']) ?></h2>
			<?php foreach ($service['sections'][1]['paras'] as $p): ?>
				<p><?= $p ?></p>
			<?php endforeach; ?>
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