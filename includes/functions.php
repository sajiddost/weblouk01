<?php
// =========================================================
// Storage + Notification helpers (JSONL / JSON files)
// =========================================================
require_once __DIR__ . '/../config.php';

// ---------------- JSONL (leads) ----------------

function read_leads(): array
{
    if (!is_file(LEADS_FILE)) {
        return [];
    }
    $leads = [];
    $lines = file(LEADS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines ?: [] as $line) {
        $data = json_decode($line, true);
        if (is_array($data)) {
            $leads[] = $data;
        }
    }
    return $leads;
}

function append_lead(array $lead): bool
{
    if (!is_dir(DATA_DIR)) {
        mkdir(DATA_DIR, 0775, true);
    }
    $line = json_encode($lead, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return (bool)@file_put_contents(LEADS_FILE, $line . PHP_EOL, FILE_APPEND | LOCK_EX);
}

function delete_lead(string $id): bool
{
    if (!is_file(LEADS_FILE)) {
        return false;
    }
    $lines = file(LEADS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $remaining = array_filter($lines ?: [], function ($line) use ($id) {
        $data = json_decode($line, true);
        return !is_array($data) || ($data['id'] ?? '') !== $id;
    });
    $content = implode(PHP_EOL, $remaining);
    if ($remaining) {
        $content .= PHP_EOL;
    }
    return (bool)@file_put_contents(LEADS_FILE, $content, LOCK_EX);
}

function update_lead_processed(string $id, bool $processed): bool
{
    if (!is_file(LEADS_FILE)) {
        return false;
    }
    $lines = file(LEADS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $found = false;
    $out = [];
    foreach ($lines ?: [] as $line) {
        $data = json_decode($line, true);
        if (is_array($data) && ($data['id'] ?? '') === $id) {
            $data['processed'] = $processed;
            $found = true;
        }
        $out[] = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
    if (!$found) {
        return false;
    }
    return (bool)@file_put_contents(LEADS_FILE, implode(PHP_EOL, $out) . PHP_EOL, LOCK_EX);
}

// ---------------- JSON (blogs) ----------------

function read_blogs(): array
{
    if (!is_file(BLOGS_FILE)) {
        return [];
    }
    $data = json_decode((string)file_get_contents(BLOGS_FILE), true);
    return is_array($data) ? $data : [];
}

function find_blog(string $slug): ?array
{
    foreach (read_blogs() as $post) {
        if (($post['slug'] ?? '') === $slug) {
            return $post;
        }
    }
    return null;
}

// ---------------- Notifications ----------------

function send_lead_notification(array $lead): bool
{
    $site   = SITE_NAME;
    $to     = NOTIFY_EMAIL;
    $subject = "New lead via the {$site} contact form";

    $message  = "A new lead was submitted through the {$site} website.\r\n";
    $message .= "---------------------------------------------\r\n";
    $message .= "Name:     {$lead['name']}\r\n";
    $message .= "Email:    {$lead['email']}\r\n";
    if (!empty($lead['phone']))    { $message .= "Phone:    {$lead['phone']}\r\n"; }
    if (!empty($lead['website']))  { $message .= "Website:  {$lead['website']}\r\n"; }
    if (!empty($lead['subject']))  { $message .= "Subject:  {$lead['subject']}\r\n"; }
    if (!empty($lead['budget']))   { $message .= "Budget:   {$lead['budget']}\r\n"; }
    $message .= "---------------------------------------------\r\n";
    $message .= "Message:\r\n{$lead['message']}\r\n";

    $host    = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $replier = str_replace(["\r", "\n"], '', $lead['name']);
    $replyTo = str_replace(["\r", "\n"], '', $lead['email']);
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: {$site} <no-reply@{$host}>\r\n";
    $headers .= "Reply-To: {$replier} <{$replyTo}>\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    try {
        $ok = @mail($to, $subject, $message, $headers);
    } catch (Throwable $e) {
        $ok = false;
    }

    // Record the attempt so nothing is silently lost on local setups.
    $log  = date('c') . ' | ' . $to . ' | ' . ($ok ? 'OK' : 'FAILED') . ' | ' . $lead['email'] . PHP_EOL;
    @file_put_contents(storage_path('notifications.log'), $log, FILE_APPEND | LOCK_EX);

    return $ok;
}

// ---------------- Misc ----------------

function paginate(array $items, int $perPage, int $page): array
{
    $total   = count($items);
    $pages   = max(1, (int)ceil($total / $perPage));
    $page    = max(1, min($page, $pages));
    $offset  = ($page - 1) * $perPage;
    return [
        'items'   => array_slice($items, $offset, $perPage),
        'total'   => $total,
        'pages'   => $pages,
        'page'    => $page,
        'perPage' => $perPage,
    ];
}