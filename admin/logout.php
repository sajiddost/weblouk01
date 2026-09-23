<?php
require_once __DIR__ . '/../config.php';

$_SESSION['admin_logged_in'] = false;
session_destroy();

header('Location: ' . site_url('admin'));
exit;