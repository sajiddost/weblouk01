<?php
// =========================================================
// Free SEO Audit tool (clean URL: /audit)
// Fetches the submitted site live, runs a battery of
// on-page/technical checks, and renders a score plus an
// actionable list of SEO errors & fixes.
// =========================================================
require_once __DIR__ . '/config.php';

// ---------------- Fetch helpers ----------------

function audit_fetch_website(string $url): array
{
    $result = [
        'ok' => false, 'error' => '', 'html' => '', 'status' => 0,
        'final_url' => $url, 'redirect_count' => 0, 'load_time_ms' => 0,
        'encoding' => '', 'size' => 0,
    ];

    if (function_exists('curl_init')) {
        $start = microtime(true);
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 8,
            CURLOPT_TIMEOUT        => 25,
            CURLOPT_CONNECTTIMEOUT => 12,
            CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; WebloAudit/1.0; +https://webloltd.com/audit)',
            CURLOPT_HTTPHEADER     => ['Accept-Language: en-US,en;q=0.9', 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8'],
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_ENCODING       => '',   // auto-decode gzip/deflate/br
            CURLOPT_HEADER         => true,
        ]);
        $raw  = curl_exec($ch);
        $err  = curl_errno($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $result['load_time_ms'] = (int)round((microtime(true) - $start) * 1000);

        if ($raw === false || $err !== 0) {
            $result['error'] = 'Could not fetch the site: ' . ($err === 0 ? 'empty response' : curl_strerror($err));
            return $result;
        }

        $headerSize = (int)$info['header_size'];
        $body       = $headerSize > 0 ? substr($raw, $headerSize) : $raw;

        $result['ok']             = true;
        $result['status']         = (int)$info['http_code'];
        $result['final_url']      = $info['url'] ?: $url;
        $result['redirect_count'] = (int)$info['redirect_count'];
        $result['encoding']       = (string)($info['content_encoding'] ?? '');
        $result['size']           = $body !== '' ? strlen($body) : (int)$info['size_download'];
        $result['html']           = $body;
        return $result;
    }

    // Fallback: stream wrapper (no redirect/status detail)
    $start = microtime(true);
    $ctx   = stream_context_create([
        'http' => [
            'timeout'       => 25,
            'ignore_errors' => true,
            'user_agent'    => 'WebloAudit/1.0',
            'header'        => "Accept-Language: en-US,en;q=0.9\r\n",
        ],
    ]);
    $html = @file_get_contents($url, false, $ctx);
    $result['load_time_ms'] = (int)round((microtime(true) - $start) * 1000);
    if ($html === false) {
        $result['error'] = 'Could not reach the site (network or TLS error).';
        return $result;
    }
    $result['ok']        = true;
    $result['status']    = 200;
    $result['final_url'] = $url;
    $result['size']      = strlen($html);
    $result['html']      = $html;
    return $result;
}

function audit_url_exists(string $url): ?bool
{
    if (!function_exists('curl_init')) {
        return null;
    }
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS      => 4,
        CURLOPT_TIMEOUT        => 12,
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_USERAGENT      => 'WebloAudit/1.0',
    ]);
    curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err  = curl_errno($ch);
    curl_close($ch);
    if ($err !== 0) {
        return null;
    }
    return $code === 200;
}

function audit_normalize_url(string $input): ?array
{
    $in = trim($input);
    if ($in === '') {
        return null;
    }
    if (!preg_match('~^[a-z][a-z0-9+.\-]*://~i', $in)) {
        $in = 'https://' . $in;
    }
    $parts = parse_url($in);
    if (!$parts || empty($parts['host'])) {
        return null;
    }
    $scheme = strtolower($parts['scheme'] ?? 'https');
    if (!in_array($scheme, ['http', 'https'], true)) {
        return null;
    }
    if (!preg_match('/^[a-z0-9\-._]+$/i', $parts['host'])) {
        return null;
    }
    $url = $scheme . '://' . $parts['host']
         . (isset($parts['port']) ? ':' . $parts['port'] : '')
         . ($parts['path'] ?? '/')
         . (isset($parts['query']) ? '?' . $parts['query'] : '');
    return ['url' => $url, 'scheme' => $scheme, 'host' => strtolower($parts['host'])];
}

// ---------------- The audit engine ----------------

function run_seo_audit(string $url): array
{
    $fetch      = audit_fetch_website($url);
    $inputHost  = strtolower(parse_url($url, PHP_URL_HOST) ?: '');
    $normalHost = preg_replace('/^www\./', '', $inputHost) ?: $inputHost;
    $checks     = [];
    $GROUP_TECH   = 'Technical Foundation';
    $GROUP_ONPAGE = 'On-Page SEO';
    $GROUP_MEDIA  = 'Content & Media';
    $GROUP_AI     = 'AI & Rich Results';
    $GROUP_PERF   = 'Performance & Build';

    if (!$fetch['ok']) {
        return ['ok' => false, 'error' => $fetch['error'], 'host' => $normalHost, 'url' => $url];
    }

    $finalHost = strtolower(parse_url($fetch['final_url'], PHP_URL_HOST) ?: $inputHost);
    $finalNorm = preg_replace('/^www\./', '', $finalHost) ?: $finalHost;

    // ---------- Parse the document ----------
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="UTF-8">' . $fetch['html'], LIBXML_NOERROR | LIBXML_NOWARNING);
    libxml_clear_errors();
    $xpath = new DOMXPath($dom);

    $metas = [];
    foreach ($xpath->query('//meta') as $m) {
        if (!$m instanceof DOMElement) {
            continue;
        }
        $name  = strtolower(trim($m->getAttribute('name')));
        $prop  = strtolower(trim($m->getAttribute('property')));
        $http  = strtolower(trim($m->getAttribute('http-equiv')));
        $chars = trim($m->getAttribute('charset'));
        if ($chars !== '') {
            $metas['charset'][] = $chars;
        } elseif ($name !== '') {
            $metas['name'][$name][] = trim($m->getAttribute('content'));
        } elseif ($prop !== '') {
            $metas['property'][$prop][] = trim($m->getAttribute('content'));
        } elseif ($http === 'content-type') {
            $metas['charset'][] = $m->getAttribute('content');
        }
    }

    $canonicals = [];
    $icons      = [];
    $cssCount   = 0;
    foreach ($xpath->query('//link') as $l) {
        if (!$l instanceof DOMElement) {
            continue;
        }
        $rel  = strtolower(trim($l->getAttribute('rel')));
        $href = trim($l->getAttribute('href'));
        if ($rel === 'canonical') {
            $canonicals[] = $href;
        }
        if ($href !== '' && (strpos($rel, 'icon') !== false || $rel === 'apple-touch-icon')) {
            $icons[] = $href;
        }
        if (strpos($rel, 'stylesheet') !== false) {
            $cssCount++;
        }
    }

    $title    = '';
    $titleEls = $dom->getElementsByTagName('title');
    if ($titleEls->length > 0) {
        $title = trim($titleEls->item(0)->textContent);
    }

    $h1count = 0;
    $h1empty = false;
    $h2count = 0;
    $seq     = [];
    foreach ($xpath->query('//h1|//h2|//h3|//h4|//h5|//h6') as $h) {
        if (!$h instanceof DOMElement) {
            continue;
        }
        $level = (int)substr($h->tagName, 1);
        $seq[] = $level;
        if ($level === 1) {
            $h1count++;
            if (trim($h->textContent) === '') {
                $h1empty = true;
            }
        } elseif ($level === 2) {
            $h2count++;
        }
    }
    $skipLevel = false;
    $prev      = 0;
    foreach ($seq as $lvl) {
        if ($prev > 0 && $lvl > $prev + 1) {
            $skipLevel = true;
        }
        $prev = $lvl;
    }

    $imgs = $noAlt = $emptySrc = 0;
    foreach ($dom->getElementsByTagName('img') as $im) {
        $imgs++;
        if (trim($im->getAttribute('src')) === '') {
            $emptySrc++;
        }
        if (trim($im->getAttribute('alt')) === '') {
            $noAlt++;
        }
    }

    $aTotal = $aInternal = $aExternal = 0;
    foreach ($dom->getElementsByTagName('a') as $a) {
        $href = trim($a->getAttribute('href'));
        if ($href === '' || $href[0] === '#') {
            continue;
        }
        if (preg_match('~^(mailto:|tel:|javascript:)~i', $href)) {
            continue;
        }
        $aTotal++;
        $hst = parse_url($href, PHP_URL_HOST);
        if (!$hst || (preg_replace('/^www\./', '', strtolower($hst)) === $finalNorm)) {
            $aInternal++;
        } else {
            $aExternal++;
        }
    }

    $jsonLd  = $xpath->query('//script[@type="application/ld+json"]')->length;
    $micro   = $xpath->query('//*[@itemscope]')->length;
    $scripts = $xpath->query('//script[@src]')->length;
    $inline  = $xpath->query('//*[@style]')->length;

    $wordCount = 0;
    $bodyEl = $dom->getElementsByTagName('body')->item(0);
    if ($bodyEl instanceof DOMElement) {
        $tmpDoc = new DOMDocument();
        $clone  = $tmpDoc->importNode($bodyEl, true);
        $tmpDoc->appendChild($clone);
        foreach ($tmpDoc->getElementsByTagName('script') as $s) {
            $s->parentNode->removeChild($s);
        }
        foreach ($tmpDoc->getElementsByTagName('style') as $s) {
            $s->parentNode->removeChild($s);
        }
        $text      = trim(preg_replace('/\s+/u', ' ', $tmpDoc->textContent));
        $wordCount = $text === '' ? 0 : count(preg_split('/\s+/u', $text));
    }

    $hasViewport = isset($metas['name']['viewport']);
    $hasLang     = trim($dom->documentElement->getAttribute('lang')) !== '';
    $robotsVal   = strtolower(implode(' ', $metas['name']['robots'] ?? []));
    $noindexSeen = (bool)preg_match('/noindex/', $robotsVal);
    $csChars     = strtolower(implode(' ', $metas['charset'] ?? []));
    $utf8Ok      = strpos($csChars, 'utf-8') !== false || strpos($csChars, 'utf8') !== false;

    $og = [
        'title' => $metas['property']['og:title'][0] ?? '',
        'desc'  => $metas['property']['og:description'][0] ?? '',
        'image' => $metas['property']['og:image'][0] ?? '',
        'url'   => $metas['property']['og:url'][0] ?? '',
    ];
    $twCard = isset($metas['name']['twitter:card']);
    $twImg  = trim($metas['name']['twitter:image'][0] ?? '');

    $pageKb   = (int)round($fetch['size'] / 1024);
    $baseParts = parse_url($fetch['final_url']);
    $probeBase = (($baseParts['scheme'] ?? 'https') . '://' . ($baseParts['host'] ?? $inputHost))
               . (isset($baseParts['port']) ? ':' . $baseParts['port'] : '');

    $metaDesc = $metas['name']['description'][0] ?? '';
    $titleLen = mb_strlen($title);

    // ---------- Build the check list ----------
    $isSecure = $finalHost ? (substr($fetch['final_url'], 0, 8) === 'https://') : false;

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 3, 'title' => 'HTTPS enabled',
        'status' => $isSecure ? 'pass' : 'fail',
        'detail' => 'Final URL resolves over ' . ($isSecure ? 'HTTPS' : 'HTTP') . ' (' . $fetch['final_url'] . ').',
        'fix' => $isSecure ? '' : 'Install an SSL certificate and force all HTTPS with a 301 redirect. Without it Chrome warns "Not secure" and rankings take a hit.'];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 3, 'title' => 'Page returns HTTP 200',
        'status' => $fetch['status'] === 200 ? 'pass' : ($fetch['status'] >= 400 ? 'fail' : 'warn'),
        'detail' => 'HTTP status ' . $fetch['status'] . ($fetch['redirect_count'] > 0 ? ' after ' . $fetch['redirect_count'] . ' redirect(s)' : '') . '.',
        'fix' => $fetch['status'] === 200 ? '' : 'Return 200 for the page and 301 old URLs. ' . ($fetch['status'] >= 400 ? 'A ' . $fetch['status'] . ' tells crawlers the page is broken.' : 'Long redirect chains waste crawl budget and link equity.')];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 2, 'title' => 'UTF-8 charset declared',
        'status' => $utf8Ok ? 'pass' : 'warn',
        'detail' => $utf8Ok ? 'Charset is declared as UTF-8.' : 'No UTF-8 charset meta or HTTP header detected.',
        'fix' => $utf8Ok ? '' : 'Add <meta charset="UTF-8"> in the head so special characters and non-English text render correctly.'];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 2, 'title' => 'html lang attribute',
        'status' => $hasLang ? 'pass' : 'warn',
        'detail' => $hasLang ? '<html lang="' . $dom->documentElement->getAttribute('lang') . '">' : 'The <html> tag has no lang attribute.',
        'fix' => $hasLang ? '' : 'Add lang="en" (or the site\'s real language) to the <html> tag. Required for accessibility and helps search engines serve the right language.'];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 3, 'title' => 'Mobile viewport meta',
        'status' => $hasViewport ? 'pass' : 'fail',
        'detail' => $hasViewport ? 'Viewport meta found.' : 'No viewport meta tag detected.',
        'fix' => $hasViewport ? '' : 'Add <meta name="viewport" content="width=device-width, initial-scale=1">. Google is mobile-first, so a broken mobile view loses rankings.'];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 1, 'title' => 'Favicon declared',
        'status' => count($icons) > 0 ? 'pass' : 'warn',
        'detail' => count($icons) > 0 ? count($icons) . ' icon link(s) found.' : 'No favicon link found.',
        'fix' => count($icons) > 0 ? '' : 'Add a favicon plus a 180x180 apple-touch-icon. Small cue, but it affects branded SERP trust and tab recognition.'];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 3, 'title' => 'Canonical URL',
        'status' => count($canonicals) === 1 ? 'pass' : (count($canonicals) > 1 ? 'warn' : 'fail'),
        'detail' => count($canonicals) === 0 ? 'No canonical URL declared.' : count($canonicals) . ' canonical(s) found.',
        'fix' => count($canonicals) >= 1 ? 'Keep a single self-referencing canonical so duplicate versions (parameters, www vs non-www) dont dilute rankings.' : 'Add one self-referencing canonical per page: <link rel="canonical" href="current URL">.'];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 3, 'title' => 'Meta robots / noindex',
        'status' => $noindexSeen ? 'fail' : 'pass',
        'detail' => $noindexSeen ? 'Robots meta contains noindex ("' . $robotsVal . '").' : 'No noindex directive found, page can be indexed.',
        'fix' => $noindexSeen ? 'This page is telling Google NOT to index it. Remove noindex unless it is intentional (thin pages, checkout, etc.).' : ''];

    $checks[] = ['group' => $GROUP_TECH, 'imp' => 2, 'title' => 'Compression enabled',
        'status' => $fetch['encoding'] !== '' ? 'pass' : 'warn',
        'detail' => $fetch['encoding'] ? 'Content-Encoding: ' . $fetch['encoding'] . ' detected.' : 'No gzip/Brotli compression detected.',
        'fix' => $fetch['encoding'] ? '' : 'Enable gzip or Brotli (mod_deflate / mod_brotli or your CDN). Usually a 60-80% reduction in HTML size.'];

    $checks[] = ['group' => $GROUP_ONPAGE, 'imp' => 3, 'title' => 'Title tag',
        'status' => $title === '' ? 'fail' : ($titleLen >= 30 && $titleLen <= 60 ? 'pass' : 'warn'),
        'detail' => $title === '' ? 'No title tag found.' : 'Length: ' . $titleLen . ' characters — "' . $title . '"',
        'fix' => $title === '' ? 'Every page needs a unique <title> that names the page and its primary keyword (aim for 50-60 characters).' : ($titleLen < 30 ? 'Titles under 30 chars waste SERP space. Target 50-60 characters.' : 'Titles over 60 chars get truncated in search results. Cut to 50-60 characters.')];

    $checks[] = ['group' => $GROUP_ONPAGE, 'imp' => 3, 'title' => 'Meta description',
        'status' => $metaDesc === '' ? 'fail' : (mb_strlen($metaDesc) >= 70 && mb_strlen($metaDesc) <= 160 ? 'pass' : 'warn'),
        'detail' => $metaDesc === '' ? 'No meta description found.' : 'Length: ' . mb_strlen($metaDesc) . ' characters.',
        'fix' => $metaDesc === '' ? 'Write a unique 140-160 char meta description that summarizes the page and includes a call to action.' : (mb_strlen($metaDesc) < 70 ? 'Descriptions under 70 chars look thin in results. Expand to 140-160 chars.' : 'Descriptions over 160 chars get cut off. Trim to 140-160 chars.')];

    $checks[] = ['group' => $GROUP_ONPAGE, 'imp' => 3, 'title' => 'H1 heading',
        'status' => $h1count === 1 && !$h1empty ? 'pass' : ($h1count === 0 ? 'fail' : 'warn'),
        'detail' => $h1count . ' H1 found' . ($h1empty ? ' (one is empty)' : '') . '.',
        'fix' => $h1count === 0 ? 'Add exactly one H1 that summarizes the page and includes the primary keyword - it is the strongest on-page signal.' : ($h1empty ? 'The H1 is empty. Fill it with text describing the page.' : 'Keep exactly one H1 per page. Demote extras to H2 so the topic signal stays clear.')];

    $checks[] = ['group' => $GROUP_ONPAGE, 'imp' => 2, 'title' => 'Heading hierarchy',
        'status' => ($skipLevel || ($h2count === 0 && $h1count > 0)) ? 'warn' : 'pass',
        'detail' => 'Headings scanned - H1 x' . $h1count . ', H2 x' . $h2count . ($skipLevel ? '. Levels skip (H1 to H3 with no H2).' : '.'),
        'fix' => ($skipLevel || $h2count === 0) ? 'Order headings H1 > H2 > H3 so each section nests under its parent. Crawlers and AI systems read this as structure.' : ''];

    $checks[] = ['group' => $GROUP_ONPAGE, 'imp' => 2, 'title' => 'Content length',
        'status' => $wordCount >= 300 ? 'pass' : ($wordCount >= 150 ? 'warn' : 'fail'),
        'detail' => 'Approximately ' . number_format($wordCount) . ' words of visible text.',
        'fix' => $wordCount >= 300 ? '' : 'Thin content ranks poorly and rarely wins featured snippets or AI citations. Aim for at least 300 genuinely useful words.'];

    $checks[] = ['group' => $GROUP_ONPAGE, 'imp' => 1, 'title' => 'Internal linking',
        'status' => $aInternal > 0 ? 'pass' : 'warn',
        'detail' => $aInternal . ' internal link(s), ' . $aExternal . ' external link(s) found.',
        'fix' => $aInternal > 0 ? '' : 'Add internal links from other pages. They distribute authority, define architecture, and guide crawlers to important pages.'];

    $checks[] = ['group' => $GROUP_MEDIA, 'imp' => 3, 'title' => 'Image alt text',
        'status' => $imgs === 0 ? 'warn' : ($noAlt === 0 ? 'pass' : ($noAlt / $imgs <= 0.2 ? 'warn' : 'fail')),
        'detail' => $imgs . ' image(s), ' . $noAlt . ' without alt text' . ($emptySrc > 0 ? ', ' . $emptySrc . ' with an empty src' : '') . '.',
        'fix' => $noAlt > 0 ? 'Describe each meaningful image in its alt text (keyword where natural). Fix empty src attributes that render nothing or 404.' : ''];

    $checks[] = ['group' => $GROUP_MEDIA, 'imp' => 2, 'title' => 'Open Graph tags',
        'status' => ($og['title'] && $og['image']) ? 'pass' : (($og['title'] || $og['desc'] || $og['image']) ? 'warn' : 'fail'),
        'detail' => ($og['title'] ? 'og:title ok. ' : 'og:title missing. ') . ($og['desc'] ? 'og:description ok. ' : 'og:description missing. ') . ($og['image'] ? 'og:image ok.' : 'og:image missing.'),
        'fix' => ($og['title'] && $og['image'] && $og['desc']) ? '' : 'Add all four Open Graph tags (og:title, og:description, og:image 1200x630, og:url) so social shares pull a proper card.'];

    $checks[] = ['group' => $GROUP_MEDIA, 'imp' => 1, 'title' => 'Twitter card',
        'status' => ($twCard && $twImg !== '') ? 'pass' : 'warn',
        'detail' => $twCard ? 'twitter:card present' . ($twImg ? ' with image.' : ', but no twitter:image.') : 'No twitter:card meta found.',
        'fix' => ($twCard && $twImg !== '') ? '' : 'Add <meta name="twitter:card" content="summary_large_image"> and twitter:image for clean X/Twitter previews.'];

    $checks[] = ['group' => $GROUP_AI, 'imp' => 2, 'title' => 'Structured data / schemas',
        'status' => ($jsonLd + $micro) > 0 ? 'pass' : 'warn',
        'detail' => ($jsonLd > 0 ? $jsonLd . ' JSON-LD block(s), ' : 'No JSON-LD. ') . ($micro > 0 ? $micro . ' Microdata item(s).' : 'No Microdata.'),
        'fix' => ($jsonLd + $micro) > 0 ? '' : 'Add schema.org markup (JSON-LD) appropriate to the page - Organization, Product, Service, FAQ, Breadcrumb, Article. This is key for rich results and AI Overview citations.'];

    $checks[] = ['group' => $GROUP_AI, 'imp' => 2, 'title' => 'Clear question-as-answer content',
        'status' => ($wordCount >= 200 && $h2count > 0) ? 'pass' : 'warn',
        'detail' => $wordCount >= 200 && $h2count > 0 ? 'Enough text plus H2 sections for direct-answer extraction.' : 'Short content or missing H2 sections makes it hard for AI systems to quote you.',
        'fix' => ($wordCount >= 200 && $h2count > 0) ? '' : 'Write direct, specific answers under descriptive H2 subheadings - this is how pages get quoted by ChatGPT, Perplexity and AI Overviews.'];

    $robotsAvail = audit_url_exists($probeBase . '/robots.txt');
    $checks[] = ['group' => $GROUP_PERF, 'imp' => 2, 'title' => 'robots.txt accessible',
        'status' => $robotsAvail === true ? 'pass' : ($robotsAvail === false ? 'warn' : 'warn'),
        'detail' => $robotsAvail === true ? 'robots.txt found and serves 200.' : ($robotsAvail === false ? 'robots.txt missing (404).' : 'robots.txt could not be checked.'),
        'fix' => $robotsAvail === true ? '' : 'Serve a robots.txt at the site root that allows your important pages and references your sitemap.'];

    $sitemapAvail = audit_url_exists($probeBase . '/sitemap.xml');
    $checks[] = ['group' => $GROUP_PERF, 'imp' => 1, 'title' => 'XML sitemap',
        'status' => $sitemapAvail === true ? 'pass' : ($sitemapAvail === false ? 'warn' : 'warn'),
        'detail' => $sitemapAvail === true ? 'sitemap.xml found and serves 200.' : ($sitemapAvail === false ? 'sitemap.xml missing (404).' : 'sitemap.xml could not be checked.'),
        'fix' => $sitemapAvail === true ? '' : 'Publish a sitemap.xml listing your canonical URLs and submit it in Google Search Console and Bing Webmaster Tools.'];

    $checks[] = ['group' => $GROUP_PERF, 'imp' => 2, 'title' => 'Page weight',
        'status' => $pageKb <= 200 ? 'pass' : ($pageKb <= 500 ? 'warn' : 'fail'),
        'detail' => 'HTML document is about ' . $pageKb . ' KB.',
        'fix' => $pageKb <= 500 ? '' : 'Heavy HTML slows first paint. Disable unused plugins, trim inline markup, and defer non-critical scripts.'];

    $checks[] = ['group' => $GROUP_PERF, 'imp' => 2, 'title' => 'Server load time',
        'status' => $fetch['load_time_ms'] < 1500 ? 'pass' : ($fetch['load_time_ms'] < 3500 ? 'warn' : 'fail'),
        'detail' => 'Full fetch took ' . number_format($fetch['load_time_ms']) . ' ms.',
        'fix' => $fetch['load_time_ms'] < 3500 ? '' : 'A slow server response (TTFB) hurts Core Web Vitals. Upgrade hosting, enable caching and check for CPU-heavy plugins.'];

    $checks[] = ['group' => $GROUP_PERF, 'imp' => 2, 'title' => 'Redirect chain',
        'status' => $fetch['redirect_count'] <= 1 ? 'pass' : ($fetch['redirect_count'] <= 3 ? 'warn' : 'fail'),
        'detail' => $fetch['redirect_count'] . ' redirect(s) before the final page.',
        'fix' => $fetch['redirect_count'] <= 1 ? '' : 'Each redirect adds latency and leaks link equity. Point URLs directly at the final destination.'];

    $assets = $cssCount + $scripts;
    $checks[] = ['group' => $GROUP_PERF, 'imp' => 1, 'title' => 'Render-blocking resources',
        'status' => $assets <= 8 ? 'pass' : ($assets <= 18 ? 'warn' : 'fail'),
        'detail' => $cssCount . ' stylesheet(s) and ' . $scripts . ' script(s) referenced.',
        'fix' => $assets <= 18 ? '' : 'Too many blocking CSS/JS files delay first render. Minify, combine, and load non-critical scripts with defer or async.'];

    $checks[] = ['group' => $GROUP_PERF, 'imp' => 1, 'title' => 'Inline styles',
        'status' => $inline <= 5 ? 'pass' : ($inline <= 20 ? 'warn' : 'fail'),
        'detail' => $inline . ' elements with inline style attributes.',
        'fix' => $inline <= 20 ? '' : 'Inline styles bloat the HTML and fight caching. Move styling into a central stylesheet.'];

    // ---------- Score ----------
    $totalW = 0; $earnedW = 0; $cPass = $cWarn = $cFail = 0;
    foreach ($checks as $c) {
        $totalW += $c['imp'];
        if ($c['status'] === 'pass') { $earnedW += $c['imp']; $cPass++; }
        elseif ($c['status'] === 'warn') { $earnedW += $c['imp'] * 0.5; $cWarn++; }
        else { $cFail++; }
    }
    $score = $totalW ? (int)round($earnedW / $totalW * 100) : 0;
    $grade = $score >= 90 ? 'A' : ($score >= 75 ? 'B' : ($score >= 60 ? 'C' : ($score >= 45 ? 'D' : 'F')));

    $groupOrder = [$GROUP_TECH, $GROUP_ONPAGE, $GROUP_MEDIA, $GROUP_AI, $GROUP_PERF];
    $grouped = [];
    foreach ($groupOrder as $g) {
        $grouped[$g] = [];
    }
    foreach ($checks as $c) {
        $grouped[$c['group']][] = $c;
    }

    return [
        'ok' => true,
        'score' => $score,
        'grade' => $grade,
        'url' => $url,
        'final_url' => $fetch['final_url'],
        'host' => $normalHost,
        'status' => $fetch['status'],
        'load_time_ms' => $fetch['load_time_ms'],
        'page_kb' => $pageKb,
        'redirects' => $fetch['redirect_count'],
        'word_count' => $wordCount,
        'checks' => $checks,
        'grouped' => array_filter($grouped),
        'counts' => ['pass' => $cPass, 'warn' => $cWarn, 'fail' => $cFail],
        'issue_count' => $cWarn + $cFail,
    ];
}

// ---------------- Request handling ----------------
$auditResult = null;
$auditError  = '';
$auditInput  = trim((string)($_GET['url'] ?? ''));

if ($auditInput !== '') {
    $normalized = audit_normalize_url($auditInput);
    if ($normalized === null) {
        $auditError = 'That does not look like a valid website URL. Try something like example.com';
    } else {
        $auditResult = run_seo_audit($normalized['url']);
        if (!$auditResult['ok']) {
            $auditError = 'We could not reach <strong>' . e($normalized['host']) . '</strong> — ' . $auditResult['error'];
            $auditResult = null;
        }
    }
}

$pageTitle = $auditResult
    ? 'SEO Audit Result for ' . rtrim($auditResult['host'], '/')
    : 'Free SEO Audit Tool - Live Website Analysis';
$pageDescription = 'Enter any website URL for a free, instant SEO audit. Live on-page report of titles, meta tags, headings, images, schema, AI-readiness and performance, with a fix for every issue.';
$active          = 'audit';
$canonicalPath   = 'audit';

require __DIR__ . '/includes/header.php';
?>

<!-- ========== AUDIT HERO / FORM ========== -->
<section class="audit-hero section">
	<div class="container">
		<div class="col-lg-10 col-xs-12 mx-auto text-center no-padding">
			<h3 class="pill"><i class="ri-radar-line"></i>Free SEO Audit Tool</h3>
			<h1>Scan Your Website <span>Like an SEO Team</span> Would</h1>
			<p class="hero-lead">Enter any URL and we'll run a live audit right now: titles, meta, headings, images, schema, AI-readiness, speed and more - then show you exactly what to fix first.</p>

			<div class="audit-box">
				<form method="get" action="<?= site_url('audit') ?>" class="audit-form<?= $auditError ? ' error' : '' ?>" novalidate>
					<div class="af-input">
						<i class="ri-global-line"></i>
						<input type="text" name="url" placeholder="Enter website URL - e.g. example.com" required aria-label="Website URL" value="<?= e($auditInput) ?>">
					</div>
					<button type="submit" class="btn btn-primary"><i class="ri-flashlight-line"></i> Run Free Audit</button>
				</form>
				<?php if ($auditError): ?>
					<div class="audit-error-box"><i class="ri-error-warning-line"></i> <?= $auditError ?></div>
				<?php endif; ?>
				<p class="audit-note"><i class="ri-lock-line"></i> Free, no signup, no email required. Results in a few seconds.</p>
			</div>
		</div>
	</div>
</section>

<?php if ($auditResult):
$score = $auditResult['score'];
$grade = $auditResult['grade'];
$cp    = $auditResult['counts'];
$ringC = 314.16;
$offset = $ringC * (1 - $score / 100);
$gradeLabel = ['A' => 'Excellent', 'B' => 'Solid', 'C' => 'Needs work', 'D' => 'Significant issues', 'F' => 'Critical'][$grade] ?? 'Needs work';
$remark = $score >= 90 ? 'Looking strong. The items below are polish and edge cases - sort the warnings and you are set.'
        : ($score >= 75 ? 'Solid fundamentals, but the issues below are holding you back. Fix the failures first, then the warnings.'
        : ($score >= 60 ? 'Workable, but there are real problems here that search engines and AI systems will notice. Start with the failed checks.'
        : ($score >= 45 ? 'Significant issues are suppressing your visibility. These need to be fixed in priority order - we can do it for you.'
        : 'Critical issues found. This is the reason the site underperforms - every failed check below should be treated as urgent.')));
?>
<section class="section pt-0">
	<div class="container">
		<div class="audit-score-card">
			<div class="audit-ring" style="--offset:<?= $offset ?>;">
				<svg viewBox="0 0 120 120" aria-hidden="true">
					<circle class="ring-track" cx="60" cy="60" r="50" fill="none" stroke-width="11"></circle>
					<circle class="ring-value" cx="60" cy="60" r="50" fill="none" stroke-width="11" stroke-dasharray="<?= $ringC ?>" stroke-dashoffset="<?= $offset ?>"></circle>
				</svg>
				<div class="ring-grade"><b><?= e($grade) ?></b><span><?= $score ?>/100</span></div>
			</div>
			<div class="audit-meta">
				<h2><?= e($auditResult['host']) ?></h2>
				<p class="audit-host"><?= e($auditResult['final_url']) ?></p>
				<div class="audit-chips">
					<span class="chip pass"><i class="ri-check-double-line"></i> <?= $cp['pass'] ?> passed</span>
					<span class="chip warn"><i class="ri-error-warning-line"></i> <?= $cp['warn'] ?> warnings</span>
					<span class="chip fail"><i class="ri-close-circle-line"></i> <?= $cp['fail'] ?> failures</span>
				</div>
				<p class="audit-remark"><?= e($remark) ?></p>
				<div class="audit-ids">
					<span>Grade: <b><?= e($gradeLabel) ?></b></span>
					<span>Page: <b><?= $auditResult['page_kb'] ?> KB</b></span>
					<span>Load: <b><?= number_format($auditResult['load_time_ms']) ?> ms</b></span>
					<span>Redirects: <b><?= $auditResult['redirects'] ?></b></span>
					<span>Words: <b><?= number_format($auditResult['word_count']) ?></b></span>
				</div>
			</div>
		</div>

		<div class="audit-groups">
		<?php foreach ($auditResult['grouped'] as $groupName => $groupChecks):
			$gPass = $gWarn = $gFail = 0;
			foreach ($groupChecks as $gch) {
				if ($gch['status'] === 'pass') $gPass++;
				elseif ($gch['status'] === 'warn') $gWarn++;
				else $gFail++;
			}
		?>
			<div class="audit-group">
				<div class="audit-group-head">
					<h3><i class="ri-archive-drawer-line"></i><?= e($groupName) ?></h3>
					<span class="ag-stats">
						<?= $gPass ? '<span class="b"><i class="ri-check-double-line"></i> ' . $gPass . '</span>' : '' ?>
						<?= $gWarn ? '<span class="w"><i class="ri-error-warning-line"></i> ' . $gWarn . '</span>' : '' ?>
						<?= $gFail ? '<span class="f"><i class="ri-close-circle-line"></i> ' . $gFail . '</span>' : '' ?>
					</span>
				</div>
				<?php foreach ($groupChecks as $check): ?>
					<div class="audit-check">
						<div class="ac-icon <?= $check['status'] ?>">
							<?php if ($check['status'] === 'pass'): ?><i class="ri-check-line"></i>
							<?php elseif ($check['status'] === 'warn'): ?><i class="ri-alert-line"></i>
							<?php else: ?><i class="ri-close-line"></i><?php endif; ?>
						</div>
						<div class="ac-body">
							<div class="ac-title"><?= e($check['title']) ?></div>
							<div class="ac-detail"><?= e($check['detail']) ?></div>
							<?php if ($check['fix'] !== ''): ?><div class="ac-fix"><b>How to fix:</b> <?= e($check['fix']) ?></div><?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
		</div>

		<div class="audit-cta">
			<h3>Want this turned into a ranked roadmap?</h3>
			<p>Our team expands this automated scan into a prioritized 50-to-5 fix plan - the handful of changes that actually move rankings and revenue.</p>
			<a href="<?= site_url('contact') ?>" class="btn btn-white">Get a Free SEO Assessment <i class="ri-arrow-right-line"></i></a>
		</div>
	</div>
</section>
<?php endif; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>