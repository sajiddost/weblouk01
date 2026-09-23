<?php
// =========================================================
// sitemap.xml — dynamic XML sitemap generated from data/blogs.json
// so it stays current when new posts are added.
// =========================================================
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/Pages/_services.php';

header('Content-Type: application/xml; charset=UTF-8');

$posts = read_blogs();
$today = date('Y-m-d');

$urls = [
    ['loc' => absolute_url(''),               'lastmod' => $today,          'priority' => '1.0'],
    ['loc' => absolute_url('about'),          'lastmod' => $today,          'priority' => '0.8'],
    ['loc' => absolute_url('contact'),        'lastmod' => $today,          'priority' => '0.8'],
    ['loc' => absolute_url('blog'),           'lastmod' => $today,          'priority' => '0.8'],
];

foreach ($SERVICES as $svc) {
    $urls[] = [
        'loc'      => absolute_url($svc['slug']),
        'lastmod'  => $today,
        'priority' => '0.8',
    ];
}

foreach ($posts as $post) {
    $urls[] = [
        'loc'      => absolute_url('blog-single?slug=' . urlencode($post['slug'])),
        'lastmod'  => date('Y-m-d', strtotime($post['date'])),
        'priority' => '0.7',
    ];
}
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
	<url>
		<loc><?= e($u['loc']) ?></loc>
		<lastmod><?= e($u['lastmod']) ?></lastmod>
		<priority><?= e($u['priority']) ?></priority>
	</url>
<?php endforeach; ?>
</urlset>