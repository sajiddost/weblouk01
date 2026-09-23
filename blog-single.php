<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$slug = clean($_GET['slug'] ?? '');
$post = $slug !== '' ? find_blog($slug) : null;

if (!$post) {
    header('Location: ' . site_url('blog'));
    exit;
}

$pageTitle       = $post['title'];
$pageDescription = $post['excerpt'];
$active          = 'blog';
$ogType          = 'article';
$ogImage         = $post['image'];
$canonicalPath   = 'blog-single?slug=' . urlencode($slug);

// --- Related guides: same category first, then recent guides ---
$candidates = array_filter(read_blogs(), function ($b) use ($slug) {
    return ($b['slug'] ?? '') !== $slug;
});
usort($candidates, function ($a, $b) use ($post) {
    $ac = ($a['category'] ?? '') === ($post['category'] ?? '') ? 0 : 1;
    $bc = ($b['category'] ?? '') === ($post['category'] ?? '') ? 0 : 1;
    if ($ac !== $bc) {
        return $ac <=> $bc;
    }
    return strtotime($b['date']) <=> strtotime($a['date']);
});
$related = array_slice($candidates, 0, 3);

// --- Structured data: BlogPosting + Breadcrumb ---
$postSchema = [
    '@context'         => 'https://schema.org',
    '@type'            => 'BlogPosting',
    'headline'         => $post['title'],
    'description'      => $post['excerpt'],
    'image'            => absolute_url($post['image']),
    'datePublished'    => date('c', strtotime($post['date'])),
    'dateModified'     => date('c', strtotime($post['date'])),
    'mainEntityOfPage' => absolute_url($canonicalPath),
    'author'           => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => absolute_url('')],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => SITE_NAME,
        'url'   => absolute_url(''),
        'logo'  => ['@type' => 'ImageObject', 'url' => absolute_url('assets/img/logo.png')],
    ],
];

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog & Guides', 'item' => absolute_url('blog')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => absolute_url($canonicalPath)],
    ],
];

$extraSchema = '<script type="application/ld+json">' . json_encode($postSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require __DIR__ . '/includes/header.php';
?>

<!-- ========== PAGE HERO ========== -->
<section class="page-hero section pb-0">
	<div class="container">
		<div class="col-lg-10 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-price-tag-3-line"></i><?= e($post['category']) ?></h3>
			<h1><?= e($post['title']) ?></h1>
			<div class="blog-single-meta justify-content-center">
				<span><i class="ri-calendar-line"></i><?= date('M j, Y', strtotime($post['date'])) ?></span>
				<span><i class="ri-book-open-line"></i>Blog &amp; Guides</span>
			</div>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== BLOG SINGLE ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="blog-single-wrap fadeInUp" data-delay="0.2">
			<div class="blog-single-cover">
				<img src="<?= site_url($post['image']) ?>" alt="<?= e($post['title']) ?>" />
			</div>
			<div class="blog-single-body mt-4">
				<?php foreach (preg_split('/\r\n|\r|\n/', $post['content']) as $paragraph): ?>
					<?php $paragraph = trim($paragraph); if ($paragraph === '') { continue; } ?>
					<p><?= e($paragraph) ?></p>
				<?php endforeach; ?>
			</div>

			<?php if ($related): ?>
			<div class="related-guides mt-5">
				<h3 class="sec-title" style="font-size:28px;margin-bottom:8px;">Related <span>Guides</span></h3>
				<p class="sec-lead" style="margin-bottom:24px;">More from the same part of the roadmap &mdash; same category first, newest first.</p>
				<div class="row">
					<?php foreach ($related as $i => $rel): ?>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
						<a class="blog-card fadeInUp" href="<?= site_url('blog-single?slug=' . urlencode($rel['slug'])) ?>" data-delay="<?= min(0.1 + $i * 0.15, 0.4) ?>">
							<div class="blog-card-media">
								<img src="<?= site_url($rel['image']) ?>" alt="<?= e($rel['title']) ?>" />
								<span class="blog-card-tag"><i class="ri-price-tag-3-line"></i><?= e($rel['category']) ?></span>
							</div>
							<div class="blog-card-body">
								<div class="blog-card-meta">
									<span><i class="ri-calendar-line"></i><?= date('M j, Y', strtotime($rel['date'])) ?></span>
								</div>
								<h3><?= e($rel['title']) ?></h3>
								<p><?= e($rel['excerpt']) ?></p>
								<span class="blog-card-footer">Read the guide <i class="ri-arrow-right-line"></i></span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="text-center" style="margin-top:40px;">
				<a href="<?= site_url('blog') ?>" class="btn btn-dark">&larr; Back to Blog</a>
			</div>
		</div>
	</div>
</section>
<!-- ========== END BLOG SINGLE ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>