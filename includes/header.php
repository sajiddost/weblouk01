<?php
// =========================================================
// Shared header: <head> + sticky navigation (Weblo brand)
// Accepts (optional): $pageTitle, $pageDescription, $canonicalPath,
// $metaRobots, $prevUrl, $nextUrl, $ogType, $ogImage, $extraSchema
// =========================================================
require_once __DIR__ . '/../config.php';

if (empty($GLOBALS['SERVICES'])) {
    require_once __DIR__ . '/../Pages/_services.php';
}

$pageTitle       = isset($pageTitle) ? $pageTitle : SITE_NAME;
$pageDescription = isset($pageDescription) ? $pageDescription : SITE_TAGLINE;
$active          = isset($active) ? $active : '';
$canonicalPath   = isset($canonicalPath) ? $canonicalPath : '';
$metaRobots      = isset($metaRobots) ? $metaRobots : 'index, follow';
$ogType          = isset($ogType) ? $ogType : 'website';
$ogImage         = isset($ogImage) ? $ogImage : 'assets/img/brands/fav.png';

$isHome    = $active === 'home';
$isBlog    = $active === 'blog';
$isContact = $active === 'contact';
$isAudit   = $active === 'audit';
$isServices = $active === 'services';

$canonicalUrl = absolute_url($canonicalPath);

// Asset versioning: bust browser + CDN (Cloudflare) caches when a file changes.
$vCss = @filemtime(__DIR__ . '/../assets/css/custom-weblo.css') ?: date('YmdHis');
$vJs  = @filemtime(__DIR__ . '/../assets/js/weblo.js') ?: date('YmdHis');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="<?= e($metaRobots) ?>">
	<meta name="description" content="<?= e($pageDescription) ?>">
	<meta name="author" content="<?= e(SITE_NAME) ?>">
	<meta name="theme-color" content="#ffb400">
	<title><?= e($pageTitle) ?> | <?= e(SITE_NAME) ?></title>

	<link rel="canonical" href="<?= e($canonicalUrl) ?>">
	<?php if (!empty($prevUrl)): ?><link rel="prev" href="<?= e(absolute_url($prevUrl)) ?>"><?php endif; ?>
	<?php if (!empty($nextUrl)): ?><link rel="next" href="<?= e(absolute_url($nextUrl)) ?>"><?php endif; ?>
	<meta name="google-site-verification" content="fY43AAuIKvy46Kn-IS96CbgDdMpMcNsXX-odo_811ls" />
	
	<!-- Open Graph -->
	<meta property="og:type" content="<?= e($ogType) ?>">
	<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:title" content="<?= e($pageTitle) ?>">
	<meta property="og:description" content="<?= e($pageDescription) ?>">
	<meta property="og:url" content="<?= e($canonicalUrl) ?>">
	<meta property="og:image" content="<?= e(absolute_url($ogImage)) ?>">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= e($pageTitle) ?>">
	<meta name="twitter:description" content="<?= e($pageDescription) ?>">
	<meta name="twitter:image" content="<?= e(absolute_url($ogImage)) ?>">

	<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='16' fill='%23ffb400'/%3E%3Ctext x='32' y='45' font-family='Arial,Helvetica,sans-serif' font-size='40' font-weight='800' text-anchor='middle' fill='%2314161a'%3EW%3C/text%3E%3C/svg%3E" type="image/svg+xml">
	<link rel="icon" href="<?= site_url('assets/img/brands/fav.png') ?>" type="image/png">
	<link rel="shortcut icon" href="<?= site_url('assets/img/brands/fav.png') ?>" type="image/png">
	<link rel="apple-touch-icon" href="<?= site_url('assets/img/brands/fav.png') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= site_url('assets/fonts/remixicon.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/custom-weblo.css') . '?v=' . $vCss ?>">

	<!-- Structured data (Organization + WebSite) -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "Organization",
		"name": "<?= e(SITE_NAME) ?>",
		"url": "<?= e(absolute_url('')) ?>",
		"logo": "<?= e(absolute_url('assets/img/logo.png')) ?>",
		"description": "<?= e(SITE_TAGLINE) ?>",
		"email": "<?= e(CONTACT_EMAIL) ?>",
		"sameAs": []
	}
	</script>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"name": "<?= e(SITE_NAME) ?>",
		"url": "<?= e(absolute_url('')) ?>",
		"description": "<?= e(SITE_TAGLINE) ?>"
	}
	</script>
	<?= $extraSchema ?? '' ?>
	<meta name="google-site-verification" content="dy91JVJM_jZdN7X5zhh-GhEwJ2xjlX0IDIfdEvWpEHg" />
</head>
<body>

	<!-- ========== Header / Nav ========== -->
	<header id="header" class="site-header">
		<div class="wb-topbar">
			<div class="container">
				<span><i class="ri-star-fill"></i>Digital agency since 2017 &mdash; serving clients in 5 countries</span>
				<div class="wb-topbar-right">
					<a href="tel:<?= e(preg_replace('/\s+/', '', CONTACT_PHONE)) ?>"><i class="ri-phone-line"></i><?= e(CONTACT_PHONE) ?></a>
					<a href="tel:<?= e(preg_replace('/\s+/', '', CONTACT_PHONE_UK)) ?>"><i class="ri-phone-fill"></i><?= e(CONTACT_PHONE_UK) ?></a>
					<a href="mailto:<?= e(CONTACT_EMAIL) ?>"><i class="ri-mail-line"></i><?= e(CONTACT_EMAIL) ?></a>
					<span><i class="ri-time-line"></i>Mon-Fri: 9am - 6pm</span>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header-inner">
				<a href="<?= site_url('') ?>" class="brand" aria-label="<?= e(SITE_NAME) ?>">
					Weblo<span class="wb-dot">.</span>
				</a>

				<div class="header-toggle" id="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
					<i class="ri-menu-line"></i>
				</div>

				<nav id="menu" class="site-nav" aria-label="Main navigation">
					<ul>
<li><a class="menu-link<?= $isHome ? ' active' : '' ?>" href="<?= site_url('') ?>#home">Home</a></li>
					<li class="menu-item-has-children<?= $isServices ? ' active-parent' : '' ?>">
						<a class="menu-link<?= $isServices ? ' active' : '' ?>" href="<?= site_url('') ?>#services" aria-haspopup="true" aria-expanded="false">Services <i class="ri-arrow-down-s-line hs-caret"></i></a>
						<div class="hs-dropdown">
							<div class="hs-dropdown-inner">
								<?php foreach ($SERVICES as $svc): ?>
									<a class="hs-drop-link<?= $active === $svc['slug'] ? ' is-active' : '' ?>" href="<?= site_url($svc['slug']) ?>">
										<i class="<?= e($svc['icon']) ?>"></i>
										<span><strong><?= e($svc['name']) ?></strong><small><?= e($svc['tagline']) ?></small></span>
									</a>
								<?php endforeach; ?>
							</div>
						</div>
					</li>
					<li><a class="menu-link" href="<?= site_url('') ?>#how">How We Work</a></li>
					<li><a class="menu-link<?= $active === 'about' ? ' active' : '' ?>" href="<?= site_url('about') ?>">About</a></li>
					<li><a class="menu-link<?= $isAudit ? ' active' : '' ?>" href="<?= site_url('audit') ?>">Free Audit</a></li>
					<li><a class="menu-link<?= $isContact ? ' active' : '' ?>" href="<?= site_url('contact') ?>">Contact</a></li>
					</ul>
				</nav>

				<a href="<?= site_url('contact') ?>" class="btn btn-dark header-cta">Get a Free Assessment</a>
			</div>
		</div>
	</header>
	<!-- ========== End Header ========== -->