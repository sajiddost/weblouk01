<?php
require_once __DIR__ . '/../config.php';

$error = '';

// Require login to reach admin pages (except this login form itself).
if (($_SESSION['admin_logged_in'] ?? false) === true) {
    header('Location: ' . site_url('admin/leads'));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = clean($_POST['username'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    // Compare against non-empty literals so a constant can never be beaten
    // by the empty default.
    if (
        ADMIN_USERNAME !== '' && ADMIN_PASSWORD !== ''
        && hash_equals(ADMIN_USERNAME, $username)
        && hash_equals(ADMIN_PASSWORD, $password)
    ) {
        session_regenerate_id(true);
        $_SESSION['admin_logged_in'] = true;
        header('Location: ' . site_url('admin/leads'));
        exit;
    }
    $error = 'Invalid username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<title>Admin Login - <?= e(SITE_NAME) ?></title>
	<link rel="icon" href="<?= site_url('assets/img/logo.png') ?>" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= site_url('assets/fonts/remixicon.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/custom-weblo.css') ?>">
</head>
<body class="admin-body">
	<div class="admin-wrap">
		<div class="admin-card text-center">
			<div class="brand mb-3" style="font-size:30px;">Weblo<span style="color:var(--primary-color);">.</span></div>
			<h1 class="mt-2 mb-2" style="font-size:26px;">Admin Login</h1>
			<p class="mb-4" style="color:var(--subtitle);">Sign in to view contact form leads.</p>

			<?php if ($error): ?>
				<div class="form-alert form-alert-error mb-3"><i class="ri-error-warning-line"></i><?= e($error) ?></div>
			<?php endif; ?>

			<form method="post" action="<?= site_url('admin/') ?>" class="admin-form text-left">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" placeholder="Username" required autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Password" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary form-submit">Sign In</button>
			</form>
		</div>
	</div>
</body>
</html>