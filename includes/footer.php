<?php
// =========================================================
// Shared footer + scripts
// =========================================================
require_once __DIR__ . '/../config.php';

if (empty($GLOBALS['SERVICES'])) {
    require_once __DIR__ . '/../Pages/_services.php';
}
?>
	<!-- ========== Footer ========== -->
	<footer class="footer-bg">
		<div class="footer-top">
			<div class="container">
				<?php if (empty($skipGlobalForm)): ?>
				<div class="global-form-band">
					<div class="gl-inner">
						<div class="gl-title">
							<h3>Let's get your <span>project started</span></h3>
							<p>Tell us about your website, SEO goals, or the design you have in mind &mdash; and we'll show you exactly what to fix or build next. No sales pitch, just a direct answer.</p>
						</div>
						<form method="post" action="<?= site_url('contact') ?>" novalidate>
							<div class="gl-fields">
								<input type="text" name="name" class="gf-name" placeholder="Your name" required aria-label="Your name">
								<input type="email" name="email" class="gf-email" placeholder="Email address" required aria-label="Email address">
								<textarea name="message" class="gf-msg" placeholder="What are you trying to achieve?" required aria-label="Your message"></textarea>
								<div class="hs-honeypot"><input type="text" name="company" tabindex="-1" autocomplete="off" aria-hidden="true"></div>
							</div>
							<div class="gl-submit">
								<button type="submit" name="submit" value="Send message" class="btn btn-dark">Start My Project <i class="ri-send-plane-line"></i></button>
								<span class="gl-note"><i class="ri-lock-line"></i>No spam. Replied within one business day.</span>
							</div>
						</form>
					</div>
				</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
						<div class="footer-about">
							<h3 class="footer-logo">Weblo<span>.</span></h3>
							<p class="footer-desc">A digital agency delivering web development, SEO, and creative design since 2017 &mdash; helping businesses get found, ranked, and remembered across the globe.</p>
							<div class="footer-social">
								<a href="https://www.facebook.com/webloltd" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
								<a href="https://www.instagram.com/webloltd" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
								<a href="https://x.com/webloltd" aria-label="Twitter / X"><i class="ri-twitter-x-fill"></i></a>
								<a href="https://www.linkedin.com/company/webloltd" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 mb-4">
						<h4 class="footer-heading">Services</h4>
						<ul class="footer-links footer-links-2col">
							<?php foreach ($SERVICES as $svc): ?>
							<li><a href="<?= site_url($svc['slug']) ?>"><i class="ri-arrow-right-s-line"></i><?= e($svc['name']) ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-4">
						<h4 class="footer-heading">Get In Touch</h4>
						<div class="footer-contact-item">
							<i class="ri-mail-line"></i>
							<a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>
						</div>
						<div class="footer-contact-item">
							<i class="ri-phone-line"></i>
							<a href="tel:<?= e(preg_replace('/\s+/', '', CONTACT_PHONE)) ?>"><?= e(CONTACT_PHONE) ?></a>
						</div>
						<div class="footer-contact-item">
							<i class="ri-phone-fill"></i>
							<a href="tel:<?= e(preg_replace('/\s+/', '', CONTACT_PHONE_UK)) ?>"><?= e(CONTACT_PHONE_UK) ?></a>
						</div>
						<div class="footer-contact-item">
							<i class="ri-map-pin-2-line"></i>
							<span><?= e(CONTACT_ADDRESS) ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-wrap">
					<p>Copyright &copy; <?= date('Y') ?> <a href="<?= site_url('') ?>"><?= e(SITE_NAME) ?></a>. All Rights Reserved &mdash; Powered by Weblo.</p>
					<ul class="footer-bottom-links">
						<li><a href="<?= site_url('sitemap.xml') ?>">Sitemap</a></li>
						<li><a href="<?= site_url('llms.txt') ?>" rel="llms">LLMs.txt</a></li>
						<li><a href="<?= site_url('contact') ?>">Contact</a></li>
						<li><a href="<?= site_url('blog') ?>">Blog</a></li>
						<li><a href="<?= site_url('') ?>#faqs">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- ========== End Footer ========== -->

	<div id="scroll-to-top" class="scroll-top" aria-label="Scroll to top">
		<i class="ri-arrow-up-s-line"></i>
		<svg width="100%" height="100%" viewBox="-1 -1 102 102" stroke="#ffb400" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
		</svg>
	</div>

	<script src="<?= site_url('assets/js/weblo.js') . '?v=' . ($vJs ?? date('YmdHis')) ?>"></script>
</body>
</html>