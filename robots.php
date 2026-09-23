<?php
// =========================================================
// robots.txt (dynamic so the absolute Sitemap URL stays correct
// on any host: localhost or production)
// =========================================================
require_once __DIR__ . '/config.php';

header('Content-Type: text/plain; charset=UTF-8');

$sitemap = absolute_url('sitemap.xml');
?>
User-agent: *
Allow: /
Disallow: /admin/
Disallow: /data/

# --- Explicitly welcome the major AI / answer-engine crawlers (AEO & GEO) ---
User-agent: GPTBot
Allow: /

User-agent: ChatGPT-User
Allow: /

User-agent: Google-Extended
Allow: /

User-agent: OAI-SearchBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: anthropic-ai
Allow: /

User-agent: Applebot-Extended
Allow: /

# --- Also keep the classic engines welcome ---
User-agent: Googlebot
Allow: /

User-agent: Bingbot
Allow: /

Sitemap: <?= $sitemap ?>

# Site info for AI readers: <?= absolute_url('llms.txt') ?>