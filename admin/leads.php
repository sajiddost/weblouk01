<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Protect admin pages
if (($_SESSION['admin_logged_in'] ?? false) !== true) {
    header('Location: ' . site_url('admin'));
    exit;
}

$flash = flash('flash_admin');

// Delete a lead
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['delete']) && isset($_POST['lead_id'])) {
    delete_lead(clean($_POST['lead_id']));
    $_SESSION['flash_admin'] = 'Lead deleted.';
    header('Location: ' . site_url('admin/leads'));
    exit;
}

// Mark a lead as processed
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['mark_processed']) && isset($_POST['lead_id'])) {
    update_lead_processed(clean($_POST['lead_id']), true);
    $_SESSION['flash_admin'] = 'Lead marked as processed.';
    header('Location: ' . site_url('admin/leads'));
    exit;
}

// Mark a lead as new again
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['mark_unprocessed']) && isset($_POST['lead_id'])) {
    update_lead_processed(clean($_POST['lead_id']), false);
    $_SESSION['flash_admin'] = 'Lead marked as new.';
    header('Location: ' . site_url('admin/leads'));
    exit;
}

// Clear all leads
if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['clear_all'])) {
    @file_put_contents(LEADS_FILE, '', LOCK_EX);
    $_SESSION['flash_admin'] = 'All leads cleared.';
    header('Location: ' . site_url('admin/leads'));
    exit;
}

$leads    = read_leads();
$total    = count($leads);
$newCount = count(array_filter($leads, function ($l) { return empty($l['processed']); }));

$leadStore = [];
foreach (array_reverse($leads) as $i => $lead) {
    $leadStore[(string)$i] = $lead;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<title>Leads - <?= e(SITE_NAME) ?> Admin</title>
	<link rel="icon" href="<?= site_url('assets/img/logo.png') ?>" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= site_url('assets/fonts/remixicon.css') ?>">
	<link rel="stylesheet" href="<?= site_url('assets/css/custom-weblo.css') ?>">
	<style>
		body.admin-body { padding-top: 0; }
		.admin-top { background: var(--black-200); padding: 16px 0; margin-bottom: 30px; }
		.admin-top .admin-top-inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
		.admin-top h1 { color: #fff; font-size: 20px; margin: 0; }
		.admin-top .admin-top-inner .admin-actions { display: flex; gap: 10px; align-items: center; }
		.admin-table-wrap { overflow-x: auto; }
		.admin-table { min-width: 1080px; }
		.admin-msg-toggle { color: var(--primary-color); cursor: pointer; font-size: 13px; font-weight: 600; }
		.admin-msg-text { display: none; margin-top: 6px; }
		.btn-outline { display: inline-block; background: transparent; border: 1px solid rgba(255,255,255,.35); color: #fff; padding: 9px 18px; border-radius: 50px; font-size: 14px; font-weight: 600; transition: all .3s ease; }
		.btn-outline:hover { background: var(--primary-color); border-color: var(--primary-color); color: #fff; text-decoration: none; }
		.btn-danger-sm { background: #c53030; color: #fff; border: none; font-size: 13px; font-weight: 600; padding: 7px 14px; border-radius: 8px; cursor: pointer; transition: background .3s ease; }
		.btn-danger-sm:hover { background: #8e2a2a; }
		.has-scroll::-webkit-scrollbar { height: 8px; }
		.has-scroll::-webkit-scrollbar-thumb { background: #d9d9d9; border-radius: 8px; }

		/* Lead status pill */
		.lead-status { display: inline-flex; align-items: center; gap: 6px; padding: 5px 12px; border-radius: 50px; font-size: 12px; font-weight: 700; letter-spacing: .02em; white-space: nowrap; }
		.lead-status.is-new { background: var(--primary-color); color: #fff; }
		.lead-status.is-processed { background: #0e7a3d; color: #fff; }

		/* Row action buttons */
		.lead-actions { display: flex; align-items: center; justify-content: flex-end; gap: 6px; flex-wrap: nowrap; }
		.lead-actions form { margin: 0; }
		.btn-act { width: 36px; height: 36px; border-radius: 9px; border: none; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; font-size: 17px; transition: all .25s ease; background: #fff; color: #555; }
		.btn-act i { pointer-events: none; }
		.btn-act-view { background: #fff3ea; color: var(--primary-color); border: 1px solid rgba(255,79,1,.25); }
		.btn-act-view:hover { background: var(--primary-color); color: #fff; }
		.btn-act-check { background: #e8f7ee; color: #0e7a3d; border: 1px solid rgba(14,122,61,.25); }
		.btn-act-check:hover { background: #0e7a3d; color: #fff; }
		.btn-act-done { background: #f1f1f1; color: #0e7a3d; border: 1px solid transparent; }
		.btn-act-done:hover { background: #0e7a3d; color: #fff; }
		.btn-act-delete { background: #fdeeee; color: #c53030; border: 1px solid rgba(197,48,48,.2); }
		.btn-act-delete:hover { background: #c53030; color: #fff; }

		/* Lead viewer modal */
		.admin-modal { position: fixed; inset: 0; z-index: 1000; display: flex; align-items: center; justify-content: center; padding: 20px; }
		.admin-modal[hidden] { display: none; }
		.admin-modal-backdrop { position: absolute; inset: 0; background: rgba(7,7,7,.6); backdrop-filter: blur(2px); }
		.admin-modal-card { position: relative; background: #fff; border-radius: 18px; max-width: 640px; width: 100%; max-height: 88vh; overflow: auto; box-shadow: 0 30px 80px rgba(0,0,0,.35); }
		.admin-modal-head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 20px 24px; border-bottom: 1px solid #eee; position: sticky; top: 0; background: #fff; z-index: 2; }
		.admin-modal-head h3 { margin: 0; font-size: 18px; color: var(--black-100); line-height: 1.35; }
		.lm-close { border: none; background: #f1f1f1; width: 34px; height: 34px; border-radius: 50%; font-size: 18px; cursor: pointer; color: #555; transition: background .25s ease; }
		.lm-close:hover { background: #ffe4d6; color: var(--primary-color); }
		.admin-modal-body { padding: 24px; }
		.lm-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px 20px; margin-bottom: 18px; }
		.lm-field label { font-size: 11px; text-transform: uppercase; letter-spacing: .06em; color: var(--subtitle); font-weight: 700; display: block; margin-bottom: 2px; }
		.lm-field div { font-size: 14px; color: var(--black-100); font-weight: 600; word-break: break-word; line-height: 1.4; }
		.lm-field.full { grid-column: 1 / -1; }
		.lm-message { background: #faf6f1; border: 1px solid #efe5db; border-radius: 12px; padding: 14px 16px; font-size: 14px; line-height: 24px; color: #333; white-space: pre-wrap; }
		.admin-modal-foot { display: flex; gap: 10px; justify-content: flex-end; padding: 16px 24px; border-top: 1px solid #eee; position: sticky; bottom: 0; background: #fff; z-index: 2; }
		@media (max-width: 575px) { .lm-grid { grid-template-columns: 1fr; } }
	</style>
</head>
<body class="admin-body">

	<div class="admin-top">
		<div class="container">
			<div class="admin-top-inner">
				<h1><?= e(SITE_NAME) ?> &mdash; Leads <span style="color:rgba(255,255,255,.55);">(<?= $total ?>)</span> <?php if ($newCount > 0): ?><span class="lead-status is-new" style="margin-left:8px;"><i class="ri-time-line"></i><?= $newCount ?> new</span><?php endif; ?></h1>
				<div class="admin-actions">
					<a class="btn-outline" href="<?= site_url('admin/export') ?>"><i class="ri-download-2-line"></i> Export CSV</a>
					<a class="btn-outline" href="<?= site_url('admin/logout') ?>" onclick="return confirm('Log out of the admin area?');"><i class="ri-logout-box-r-line"></i> Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="padding-bottom:60px;">
		<?php if ($flash): ?>
			<div class="form-alert form-alert-success"><i class="ri-checkbox-circle-line"></i><?= e($flash) ?></div>
		<?php endif; ?>

		<?php if (!$leads): ?>
			<div class="admin-card mx-auto text-center" style="max-width:560px;">
				<i class="ri-inbox-2-line" style="font-size:46px;color:var(--primary-color);"></i>
				<h3 class="mt-3 mb-2">No leads yet</h3>
				<p style="color:var(--subtitle);margin:0;">Contact form submissions will appear here as soon as visitors send them.</p>
			</div>
		<?php else: ?>
			<div class="admin-card" style="max-width:none;padding:24px;">
				<div class="admin-table-wrap has-scroll">
					<table class="admin-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Received</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Budget</th>
								<th>Status</th>
								<th>Message</th>
								<th style="text-align:right;">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (array_reverse($leads) as $i => $lead):
								$isProcessed = !empty($lead['processed']);
								$leadName    = $lead['name'] ?? '';
							?>
							<tr>
								<td><?= $i + 1 ?></td>
								<td style="white-space:nowrap;"><?= date('M j, Y g:i a', strtotime($lead['created_at'] ?? 'now')) ?></td>
								<td><strong><?= e($leadName) ?></strong></td>
								<td><a href="mailto:<?= e($lead['email'] ?? '') ?>"><?= e($lead['email'] ?? '') ?></a></td>
								<td><?= e($lead['phone'] ?? '') ?></td>
								<td><?= $lead['budget'] ?? '' ? '<span class="badge badge-new">' . e($lead['budget']) . '</span>' : '&mdash;' ?></td>
								<td>
									<?php if ($isProcessed): ?>
										<span class="lead-status is-processed"><i class="ri-check-double-line"></i>Processed</span>
									<?php else: ?>
										<span class="lead-status is-new"><i class="ri-time-line"></i>New</span>
									<?php endif; ?>
								</td>
								<td>
									<div><?= e(mb_substr($lead['message'] ?? '', 0, 70)) ?><?= mb_strlen($lead['message'] ?? '') > 70 ? '&hellip;' : '' ?></div>
								</td>
								<td>
									<div class="lead-actions">
										<button type="button" class="btn-act btn-act-view" data-key="<?= $i ?>" title="View lead"><i class="ri-eye-line"></i></button>
										<?php if ($isProcessed): ?>
											<form method="post" action="<?= site_url('admin/leads') ?>" title="Mark as new">
												<input type="hidden" name="lead_id" value="<?= e($lead['id'] ?? '') ?>">
												<button type="submit" name="mark_unprocessed" value="1" class="btn-act btn-act-done" title="Mark as new"><i class="ri-check-double-line"></i></button>
											</form>
										<?php else: ?>
											<form method="post" action="<?= site_url('admin/leads') ?>" title="Mark as processed">
												<input type="hidden" name="lead_id" value="<?= e($lead['id'] ?? '') ?>">
												<button type="submit" name="mark_processed" value="1" class="btn-act btn-act-check" title="Mark as processed"><i class="ri-check-line"></i></button>
											</form>
										<?php endif; ?>
										<form method="post" action="<?= site_url('admin/leads') ?>" onsubmit="return confirm('Delete this lead?');">
											<input type="hidden" name="lead_id" value="<?= e($lead['id'] ?? '') ?>">
											<button type="submit" name="delete" value="1" class="btn-act btn-act-delete" title="Delete lead"><i class="ri-delete-bin-line"></i></button>
										</form>
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

				<div class="text-right mt-3">
					<form method="post" action="<?= site_url('admin/leads') ?>" onsubmit="return confirm('Delete ALL leads? This cannot be undone.');" style="display:inline;">
						<button type="submit" name="clear_all" class="btn-danger-sm"><i class="ri-delete-bin-line"></i> Clear All Leads</button>
					</form>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<!-- Lead viewer modal -->
	<div id="leadModal" class="admin-modal" hidden>
		<div class="admin-modal-backdrop" id="lmBackdrop"></div>
		<div class="admin-modal-card">
			<div class="admin-modal-head">
				<h3 id="lm-name"></h3>
				<button type="button" id="lmClose" class="lm-close" title="Close">&times;</button>
			</div>
			<div class="admin-modal-body">
				<div class="lm-grid">
					<div class="lm-field"><label>Email</label><div><a id="lm-email" href="#" target="_blank"></a></div></div>
					<div class="lm-field"><label>Phone</label><div id="lm-phone"></div></div>
					<div class="lm-field"><label>Website</label><div><a id="lm-website" href="#" target="_blank" rel="noopener"></a></div></div>
					<div class="lm-field"><label>Subject</label><div id="lm-subject"></div></div>
					<div class="lm-field"><label>Budget</label><div id="lm-budget"></div></div>
					<div class="lm-field"><label>Received</label><div id="lm-received"></div></div>
					<div class="lm-field full"><label>IP Address</label><div id="lm-ip"></div></div>
					<div class="lm-field full"><label>Message</label><div class="lm-message" id="lm-message"></div></div>
				</div>
			</div>
			<div class="admin-modal-foot">
				<a id="lm-reply" href="#" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:6px;padding:10px 20px;"><i class="ri-mail-send-line"></i> Reply by email</a>
				<button type="button" id="lmClose2" class="btn btn-dark" style="padding:10px 20px;">Close</button>
			</div>
		</div>
	</div>

	<input type="hidden" id="lead-count" value="<?= (int)count($leadStore) ?>">

	<script type="application/json" id="lead-store"><?= json_encode($leadStore, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>

	<script>
		(function () {
			var modal = document.getElementById('leadModal');
			var storeEl = document.getElementById('lead-store');

			function esc(v) { return v === null || v === undefined || v === '' ? '&mdash;' : String(v); }

			function openLead(key) {
				if (!modal || !storeEl) return;
				var d;
				try { d = JSON.parse(storeEl.textContent)[String(key)]; } catch (e) { return; }
				if (!d) return;
				document.getElementById('lm-name').innerHTML = esc(d.name);
				document.getElementById('lm-email').textContent = esc(d.email);
				document.getElementById('lm-email').setAttribute('href', 'mailto:' + (d.email || ''));
				document.getElementById('lm-phone').innerHTML = esc(d.phone);
				var ws = document.getElementById('lm-website');
				if (d.website) { ws.textContent = d.website; ws.setAttribute('href', d.website); } else { ws.textContent = '&mdash;'; ws.removeAttribute('href'); }
				document.getElementById('lm-subject').innerHTML = esc(d.subject);
				document.getElementById('lm-budget').innerHTML = esc(d.budget);
				document.getElementById('lm-received').textContent = d.created_at ? new Date(d.created_at).toLocaleString(undefined, { month: 'short', day: 'numeric', year: 'numeric', hour: 'numeric', minute: '2-digit' }) : '&mdash;';
				document.getElementById('lm-ip').textContent = d.ip || '&mdash;';
				document.getElementById('lm-message').textContent = d.message || '';
				var reply = document.getElementById('lm-reply');
				if (d.email) { reply.setAttribute('href', 'mailto:' + d.email + '?subject=' + encodeURIComponent('Re: ' + (d.subject || 'Your SEO request'))); } else { reply.removeAttribute('href'); }
				modal.hidden = false;
				document.body.style.overflow = 'hidden';
			}

			function closeLead() {
				if (!modal) return;
				modal.hidden = true;
				document.body.style.overflow = '';
			}

			document.querySelectorAll('.btn-act-view').forEach(function (el) {
				el.addEventListener('click', function () { openLead(el.getAttribute('data-key')); });
			});
			var c1 = document.getElementById('lmClose'), c2 = document.getElementById('lmClose2'), bk = document.getElementById('lmBackdrop');
			if (c1) c1.addEventListener('click', closeLead);
			if (c2) c2.addEventListener('click', closeLead);
			if (bk) bk.addEventListener('click', closeLead);
			document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLead(); });
		})();
	</script>
</body>
</html>