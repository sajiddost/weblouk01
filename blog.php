<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'Blog';
$pageDescription = 'Practical, prioritized SEO advice from the Weblo team: audits, AEO & GEO, semantic SEO, small business and enterprise SEO.';
$active          = 'blog';

$page       = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$blogs      = read_blogs();
$pageResult = paginate(array_reverse($blogs), BLOGS_PER_PAGE, $page);

$canonicalPath = 'blog';
$prevUrl       = $pageResult['page'] > 1 ? 'blog?page=' . ($pageResult['page'] - 1) : '';
$nextUrl       = $pageResult['page'] < $pageResult['pages'] ? 'blog?page=' . ($pageResult['page'] + 1) : '';

$breadcrumbJson = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog & Guides', 'item' => absolute_url('blog')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$extraSchema = '<script type="application/ld+json">' . $breadcrumbJson . '</script>';

require __DIR__ . '/includes/header.php';
?>

<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<div class="col-lg-9 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-book-open-line"></i>Blog &amp; Guides</h3>
			<h1>Practical SEO Advice, Prioritized</h1>
			<p class="sec-lead mx-auto">Real-world guides on audits, AEO &amp; GEO, semantic SEO, and small business and enterprise SEO &mdash; written the way we do the work.</p>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== BLOG ========== -->
<section class="section pt-0">
	<div class="container">
		<?php if (empty($pageResult['items'])): ?>
			<div class="col-lg-12 text-center fadeInUp" data-delay="0.2">
				<div class="p-5 border rounded mb-5 d-inline-block" style="border-color:#bebebe!important;background:#fff;border-radius:15px!important;">
					<i class="ri-tools-line" style="font-size:50px;color:var(--primary-color);"></i>
					<h3 class="mt-3 mb-2">New guides are on the way</h3>
					<p class="mb-0" style="color:var(--subtitle);">We're writing in-depth content right now. Check back soon.</p>
				</div>
			</div>
		<?php endif; ?>

		<div class="row">
			<?php foreach ($pageResult['items'] as $i => $post):
				$slug = $post['slug'];
				$img  = site_url($post['image']);
			?>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-4">
				<a class="blog-card fadeInUp" href="<?= site_url('blog-single?slug=' . urlencode($slug)) ?>" data-delay="<?= min(0.1 + ($i % 3) * 0.15, 0.4) ?>">
					<div class="blog-card-media">
						<img src="<?= e($img) ?>" alt="<?= e($post['title']) ?>" />
						<span class="blog-card-tag"><i class="ri-price-tag-3-line"></i><?= e($post['category']) ?></span>
					</div>
					<div class="blog-card-body">
						<div class="blog-card-meta">
							<span><i class="ri-calendar-line"></i><?= date('M j, Y', strtotime($post['date'])) ?></span>
						</div>
						<h3><?= e($post['title']) ?></h3>
						<p><?= e($post['excerpt']) ?></p>
						<span class="blog-card-footer">Read the guide <i class="ri-arrow-right-line"></i></span>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>

		<?php if ($pageResult['pages'] > 1): $base = site_url('blog'); $activePage = $pageResult['page']; ?>
		<nav class="blog-pagination fadeInUp" data-delay="0.2" aria-label="Blog pages">
			<?php if ($activePage > 1): ?>
				<a href="<?= $base ?>?page=<?= $activePage - 1 ?>" aria-label="Previous page"><i class="ri-arrow-left-line"></i></a>
			<?php endif; ?>
			<?php for ($p = 1; $p <= $pageResult['pages']; $p++): ?>
				<?php if ($p === $activePage): ?>
					<a class="current" aria-current="page"><?= $p ?></a>
				<?php else: ?>
					<a href="<?= $base ?>?page=<?= $p ?>"><?= $p ?></a>
				<?php endif; ?>
			<?php endfor; ?>
			<?php if ($activePage < $pageResult['pages']): ?>
				<a href="<?= $base ?>?page=<?= $activePage + 1 ?>" aria-label="Next page"><i class="ri-arrow-right-line"></i></a>
			<?php endif; ?>
		</nav>
		<?php endif; ?>

		<!-- Blog CTA -->
		<div class="seo-content-wrap fadeInUp mt-5" data-delay="0.2" style="padding:60px 24px;">
			<div class="text-center">
				<h2 style="color:#fff;font-size:34px;line-height:1.3;margin-bottom:12px;">Prefer to <span style="color:var(--primary-color);">talk to a human</span> instead of reading guides?</h2>
				<p style="color:rgba(255,255,255,.75);margin-bottom:28px;">Get straight answers about your site's SEO or AEO/GEO readiness &mdash; free, no pressure.</p>
				<a href="<?= site_url('contact') ?>" class="btn btn-primary">Get a Free SEO Assessment</a>
			</div>
		</div>
	</div>
</section>
<!-- ========== END BLOG ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>