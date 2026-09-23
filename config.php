<?php
// =========================================================
// Weblo Site Configuration (Core PHP, no database)
// =========================================================

session_start();

// ---------- Site settings ----------
const SITE_NAME    = 'Weblo';
const SITE_TAGLINE = 'SEO, web development, and digital marketing that get your business found, ranked, and remembered.';

// Public contact details (from webloltd.com) — shown on the site and used for lead notifications
const CONTACT_EMAIL     = 'info@webloltd.com';
const CONTACT_PHONE     = '+92 333 4832348';
const CONTACT_PHONE_UK  = '+44 7498 982849';
const CONTACT_ADDRESS   = 'Office No. II, 2nd Floor, Zubair Heights, Shahbaz Khan Road, Kasur, Pakistan';

// Email used to receive lead notifications
const NOTIFY_EMAIL = 'info@webloltd.com';

// Load local-only overrides (gitignored) if present.
$configLocal = __DIR__ . '/config.local.php';
if (is_file($configLocal)) {
    require $configLocal;
}

// Admin area credentials. Kept out of git: define them in config.local.php
// (see config.example.php) with a strong, unique username/password, or set
// the WEBLO_ADMIN_USER / WEBLO_ADMIN_PASS environment variables.
define('ADMIN_USERNAME', getenv('WEBLO_ADMIN_USER') ?: (defined('ADMIN_LOCAL_USER') ? ADMIN_LOCAL_USER : ''));
define('ADMIN_PASSWORD', getenv('WEBLO_ADMIN_PASS') ?: (defined('ADMIN_LOCAL_PASS') ? ADMIN_LOCAL_PASS : ''));

// ---------- File storage (JSONL / JSON, no database) ----------
const DATA_DIR      = __DIR__ . '/data';
const LEADS_FILE    = DATA_DIR . '/leads.jsonl';
const BLOGS_FILE    = DATA_DIR . '/blogs.json';

// Blog pagination
const BLOGS_PER_PAGE = 6;

// ---------- Path helpers ----------
// Base URL is the app's own location relative to the web root. Deriving it
// from DOCUMENT_ROOT (not each script's own dirname) keeps URLs identical
// whether the page is at /weblouk/index.php or /weblouk/admin/leads.php
$docRoot = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/\\'));
$appDir  = str_replace('\\', '/', __DIR__);
$baseUrl = '';
if ($docRoot !== '' && stripos($appDir, $docRoot) === 0) {
    $baseUrl = substr($appDir, strlen($docRoot));
}
define('BASE_URL', rtrim($baseUrl, '/\\'));

function site_url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

function file_asset(string $path): string
{
    return site_url($path);
}

function absolute_url(string $path = ''): string
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return $scheme . '://' . $host . BASE_URL . '/' . ltrim($path, '/');
}

function storage_path(string $file = ''): string
{
    return DATA_DIR . '/' . ltrim($file, '/');
}

// ---------- Small helpers used across pages ----------
function clean(string $value): string
{
    return trim(htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8'));
}

function e(?string $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function flash(string $key): ?string
{
    if (isset($_SESSION[$key])) {
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $value;
    }
    return null;
}