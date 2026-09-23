<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

if (($_SESSION['admin_logged_in'] ?? false) !== true) {
    header('Location: ' . site_url('admin'));
    exit;
}

$leads = read_leads();

$rows = [['Received', 'Name', 'Email', 'Phone', 'Website', 'Subject', 'Budget', 'Message', 'IP']];
foreach ($leads as $lead) {
    $rows[] = [
        $lead['created_at'] ?? '',
        $lead['name'] ?? '',
        $lead['email'] ?? '',
        $lead['phone'] ?? '',
        $lead['website'] ?? '',
        $lead['subject'] ?? '',
        $lead['budget'] ?? '',
        str_replace(["\r", "\n"], ' ', $lead['message'] ?? ''),
        $lead['ip'] ?? '',
    ];
}

$handle = fopen('php://output', 'w');

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="weblo-leads-' . date('Y-m-d') . '.csv"');

foreach ($rows as $row) {
    fputcsv($handle, $row);
}
fclose($handle);
exit;