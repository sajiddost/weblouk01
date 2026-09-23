<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle       = 'Contact Weblo — Start Your Website or SEO Project';
$pageDescription = 'Contact Weblo for web design, web development, and SEO. Tell us about your project and we will reply within one business day with a clear next step. No sales pitch.';
$active          = 'contact';
$canonicalPath   = 'contact';

$contactSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'ContactPage',
    'name'     => 'Contact ' . SITE_NAME,
    'url'      => absolute_url('contact'),
    'about'    => SITE_TAGLINE,
];

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => absolute_url('')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => absolute_url('contact')],
    ],
];

$extraSchema = '<script type="application/ld+json">' . json_encode($contactSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name    = clean($_POST['name'] ?? '');
    $email   = clean($_POST['email'] ?? '');
    $phone   = clean($_POST['phone'] ?? '');
    $website = clean($_POST['website'] ?? '');
    $subject = clean($_POST['subject'] ?? '');
    $budget  = clean($_POST['budget'] ?? '');
    $message = clean($_POST['message'] ?? '');

    if ($name === '' || mb_strlen($name) < 2) {
        $errors[] = 'Please enter your full name.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($message === '' || mb_strlen($message) < 10) {
        $errors[] = 'Please write a message of at least 10 characters.';
    }

    // Simple honeypot to block basic bots (hidden field "company" must stay empty).
    $honeypot = clean($_POST['company'] ?? '');

    if (!$errors && $honeypot === '') {
        $lead = [
            'id'         => uniqid('lead_', true),
            'name'       => $name,
            'email'      => $email,
            'phone'      => $phone,
            'website'    => $website,
            'subject'    => $subject,
            'budget'     => $budget,
            'message'    => $message,
            'ip'         => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
            'processed'  => false,
            'created_at' => date('c'),
        ];

        $saved = append_lead($lead);
        send_lead_notification($lead);

        if ($saved) {
            $_SESSION['flash_success'] = 'Thank you, ' . $name . '! Your request has been received. We will reply within one business day.';
            header('Location: ' . site_url('contact'));
            exit;
        }
        $errors[] = 'Sorry, we could not save your request. Please try again shortly.';
    } elseif ($honeypot !== '') {
        $errors[] = 'Your submission could not be processed.';
    }
}

require __DIR__ . '/includes/header.php';
?>

<!-- ========== PAGE HERO ========== -->
<section class="page-hero section">
	<div class="container">
		<div class="col-lg-9 col-xs-12 mx-auto text-center fadeInUp" data-delay="0.1">
			<h3 class="pill"><i class="ri-mail-line"></i>Contact</h3>
			<h1>Let's Build Something Worth Finding</h1>
			<p class="sec-lead mx-auto">New website, a redesign, or organic traffic that isn't growing? Tell us about your project and we'll reply within one business day with a clear next step. No sales pitch.</p>
		</div>
	</div>
</section>
<!-- ========== END PAGE HERO ========== -->

<!-- ========== CONTACT ========== -->
<section class="section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 mb-4">
				<div class="contact-info-card fadeInUp" data-delay="0.2">
					<h2>Here's how it works</h2>
					<p>Send us a short description of your project &mdash; a new build, a redesign, or an SEO goal. We review it, ask the right questions, and reply with a clear direction and an honest quote. No obligation.</p>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-mail-line"></i></div>
						<div class="detail-text">
							<h5>Email Us</h5>
							<a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-phone-line"></i></div>
						<div class="detail-text">
							<h5>Call Us (Pakistan)</h5>
							<a href="tel:<?= e(preg_replace('/\s+/', '', CONTACT_PHONE)) ?>"><?= e(CONTACT_PHONE) ?></a>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-phone-fill"></i></div>
						<div class="detail-text">
							<h5>Call Us (UK)</h5>
							<a href="tel:<?= e(preg_replace('/\s+/', '', CONTACT_PHONE_UK)) ?>"><?= e(CONTACT_PHONE_UK) ?></a>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-map-pin-2-line"></i></div>
						<div class="detail-text">
							<h5>Visit Us</h5>
							<span><?= e(CONTACT_ADDRESS) ?></span>
						</div>
					</div>
					<div class="contact-detail-row">
						<div class="contact-icon"><i class="ri-time-line"></i></div>
						<div class="detail-text">
							<h5>Response Time</h5>
							<span>Within one business day, Mon-Fri</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 mb-4">
				<div class="contact-form-card fadeInUp" data-delay="0.4">
					<?php if ($success = flash('flash_success')): ?>
						<div class="form-alert form-alert-success"><i class="ri-checkbox-circle-line"></i><?= e($success) ?></div>
					<?php endif; ?>
					<?php if ($errors): ?>
						<div class="form-alert form-alert-error">
							<i class="ri-error-warning-line"></i>
							<ul>
								<?php foreach ($errors as $err): ?><li><?= e($err) ?></li><?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>

					<form method="post" action="<?= site_url('contact') ?>" novalidate>
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="name">Full Name *</label>
								<input type="text" id="name" name="name" placeholder="e.g. John Smith" required="required" value="<?= e($_POST['name'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="email">Email Address *</label>
								<input type="email" id="email" name="email" placeholder="e.g. john@yourbusiness.com" required="required" value="<?= e($_POST['email'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="phone">Phone Number</label>
								<input type="text" id="phone" name="phone" placeholder="e.g. (555) 123-4567" value="<?= e($_POST['phone'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="website">Website URL</label>
								<input type="text" id="website" name="website" placeholder="e.g. https://yourbusiness.com" value="<?= e($_POST['website'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="subject">Subject</label>
								<input type="text" id="subject" name="subject" placeholder="What do you need help with?" value="<?= e($_POST['subject'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-group">
								<label for="budget">Budget Range (optional)</label>
								<select id="budget" name="budget">
									<option value="">Select a range</option>
									<option value="Under $500/mo" <?= ($_POST['budget'] ?? '') === 'Under $500/mo' ? 'selected' : '' ?>>Under $500/mo</option>
									<option value="$500 - $1,500/mo" <?= ($_POST['budget'] ?? '') === '$500 - $1,500/mo' ? 'selected' : '' ?>>$500 - $1,500/mo</option>
									<option value="$1,500 - $5,000/mo" <?= ($_POST['budget'] ?? '') === '$1,500 - $5,000/mo' ? 'selected' : '' ?>>$1,500 - $5,000/mo</option>
									<option value="$5,000+/mo" <?= ($_POST['budget'] ?? '') === '$5,000+/mo' ? 'selected' : '' ?>>$5,000+/mo</option>
									<option value="One-time audit" <?= ($_POST['budget'] ?? '') === 'One-time audit' ? 'selected' : '' ?>>One-time audit only</option>
								</select>
							</div>
							<!-- Honeypot field: humans leave it empty -->
							<div class="col-md-12 form-group hs-honeypot">
								<input type="text" name="company" placeholder="Leave this field empty" tabindex="-1" autocomplete="off" aria-hidden="true">
							</div>
							<div class="col-md-12 form-group">
								<label for="message">Tell Us About Your Project and Goals *</label>
								<textarea id="message" name="message" placeholder="What do you want to build or improve? What have you tried already?" required="required"><?= e($_POST['message'] ?? '') ?></textarea>
							</div>
							<div class="col-md-12">
								<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-primary form-submit">Send Message <i class="ri-send-plane-line"></i></button>
								<p class="form-note">We'll get back to you within one business day. No spam, ever.</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END CONTACT ========== -->

<?php
// The contact page already has its own full form — hide the global footer form here.
$skipGlobalForm = true;
require __DIR__ . '/includes/footer.php';
?>