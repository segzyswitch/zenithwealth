<?php
require '../config/session.php';
$linkedUser = $Controller->linkedAccounts('joint')[0];
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Account Settings - Velloxa Wealth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../icon.png" type="image/png">
</head>

<body>
	<!-- Desktop Sidebar -->
	<?php include 'inc/sidebar.php'; ?>

	<!-- Main Content -->
	<div class="main-content">
		<!-- Top Bar -->
		<?php include 'inc/panel-header.php'; ?>

		<div class="content-body">
			<!-- Profile Header -->
			<div class="card mb-4">
				<div class="card-body">
					<div class="d-flex flex-column flex-md-row align-items-center gap-4">
						<div class="profile-avatar">
							<i class="bi bi-person-circle"></i>
							<!-- <button class="btn btn-sm btn-primary profile-edit-btn">
								<i class="bi bi-camera"></i>
							</button> -->
						</div>
						<div class="flex-grow-1 text-center text-md-start">
							<h4 class="mb-1"><?php echo $user_info['fname'].' & '.$linkedUser['fname'].' '.$user_info['lname']; ?></h4>
							<p class="text-muted mb-2">Joint account</p>
							<div class="d-flex gap-2 justify-content-center justify-content-md-start">
								<span class="badge bg-success">Verified</span>
								<!-- <span class="badge bg-primary">Premium Member</span> -->
							</div>
						</div>
						<div>
							<p class="text-muted small mb-1">Member since</p>
							<p class="fw-medium mb-0"><?php echo date('M d, Y', strtotime($user_info['createdat'])) ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8">
					<!-- Personal Information -->
					<div class="card mb-4">
						<div class="card-header">
							<h5 class="mb-0">Personal Information</h5>
						</div>
						<div class="card-body">
							<form method="POST" action="#" id="updateProfileForm">
								<input type="hidden"
									name="update_profile"
									value="<?php echo str_shuffle(time().'asdfghjkl1234567890qwertyuiopzxcvbnm') ?>"
								/>
								<div class="row g-3">
									<div class="col-md-6">
										<label for="firstName" class="form-label">First Name</label>
										<div class="input-group">
											<input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $user_info['fname'] ?>" disabled style="opacity:.7;" />
											<input type="text" class="form-control text-center" id="firstName" value="$" disabled style="opacity:.7;max-width:45px;" />
											<input type="text" class="form-control" id="firstName" value="<?php echo $linkedUser['fname'] ?>" disabled style="opacity:.7;" />
										</div>
									</div>
									<div class="col-md-6">
										<label for="lastName" class="form-label">Last Name</label>
										<input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $user_info['lname'] ?>" disabled style="opacity:.7;" />
									</div>
									<div class="col-md-6">
										<label for="email" class="form-label">Email</label>
										<div class="input-group">
											<input type="email" name="email" class="form-control" id="email" value="<?php echo $user_info['email'] ?>" disabled style="opacity:.7;" />
											<input type="email" name="email" class="form-control" id="email" value="<?php echo $linkedUser['email'] ?>" disabled style="opacity:.7;" />
										</div>
									</div>
									<div class="col-md-6">
										<label for="phone" class="form-label">Phone</label>
										<div class="input-group">
											<input type="tel" name="phone" class="form-control" value="<?php echo $user_info['phone'] ?>" disabled style="opacity:.7;" />
											<input type="tel" name="phone" class="form-control" value="<?php echo $user_info['phone'] ?>" disabled style="opacity:.7;" />
										</div>
									</div>
									<div class="col-12">
										<label for="address" class="form-label">Address</label>
										<input type="text" name="address" class="form-control" value="<?php echo $user_info['address'] ?>" disabled style="opacity:.7;">
									</div>
									<div class="col-md-6">
										<label for="city" class="form-label">City</label>
										<input type="text" name="city" class="form-control" value="<?php echo $user_info['city'] ?>" disabled style="opacity:.7;">
									</div>
									<div class="col-md-4">
										<label for="state" class="form-label">State</label>
										<input type="text" name="state" class="form-control" value="<?php echo $user_info['state'] ?>" disabled style="opacity:.7;">
									</div>
									<div class="col-md-2">
										<label for="zip" class="form-label">ZIP</label>
										<input type="text" name="zip" class="form-control" value="<?php echo $user_info['zip'] ?>" disabled style="opacity:.7;">
									</div>
									<!-- <div class="col-12">
										<label for="zip" class="form-label">Password</label>
										<input type="password" name="password" class="form-control" required />
										<small class="text-muted">Enter password to apply update</small>
									</div> -->
									<div class="col-12">
										<button type="submit" class="btn bg-primary submit-btn text-light" disabled>Save Changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<!-- Security Settings -->
					<div class="card mb-4">
						<div class="card-header">
							<h5 class="mb-0">Security Settings</h5>
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
								<div>
									<h6 class="mb-1">Password</h6>
									<p class="text-muted small mb-0">Last changed 30 days ago</p>
								</div>
								<button class="btn btn-outline-primary btn-sm">Change Password</button>
							</div>
							<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
								<div>
									<h6 class="mb-1">Two-Factor Authentication</h6>
									<p class="text-muted small mb-0">Add an extra layer of security</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="twoFactorAuth" checked>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center py-3">
								<div>
									<h6 class="mb-1">Login Notifications</h6>
									<p class="text-muted small mb-0">Get notified of new login attempts</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="loginNotif" checked>
								</div>
							</div>
						</div>
					</div>

					<!-- Notifications -->
					<div class="card mb-4">
						<div class="card-header">
							<h5 class="mb-0">Notification Preferences</h5>
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
								<div>
									<h6 class="mb-1">Email Notifications</h6>
									<p class="text-muted small mb-0">Receive updates via email</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="emailNotif" checked>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
								<div>
									<h6 class="mb-1">Transaction Alerts</h6>
									<p class="text-muted small mb-0">Get notified of all transactions</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="transNotif" checked>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center py-3">
								<div>
									<h6 class="mb-1">Marketing Emails</h6>
									<p class="text-muted small mb-0">Receive promotional content</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="marketingNotif">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Right Column -->
				<div class="col-lg-4">
					<!-- Quick Stats -->
					<div class="card mb-4">
						<div class="card-header">
							<h6 class="mb-0">Account Summary</h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Total Portfolio Value</small>
								<h5 class="mb-0"><?php echo $Controller->totalBalance() ?></h5>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Active Investments</small>
								<h5 class="mb-0"><?php echo $Controller->runningTrades()['count'] ?></h5>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Total Transactions</small>
								<h5 class="mb-0"><?php echo count($Controller->Transactions(100)) ?></h5>
							</div>
							<div>
								<small class="text-muted d-block mb-1">Account Status</small>
								<span class="badge bg-success">Active</span>
							</div>
						</div>
					</div>

					<!-- Linked Accounts -->
					<div class="card mb-4">
						<div class="card-header d-flex justify-content-between align-items-center">
							<h6 class="mb-0">Linked Bank Accounts</h6>
							<button class="btn btn-sm bg-primary text-light">
								<i class="bi bi-plus-lg"></i>
							</button>
						</div>
						<div class="card-body p-0">
							<div class="list-group list-group-flush">
								<div class="list-group-item">
									<div class="d-flex align-items-center gap-2">
										<i class="bi bi-bank2 text-primary"></i>
										<div class="flex-grow-1">
											<div class="fw-medium">Chase Bank</div>
											<small class="text-muted">****1234</small>
										</div>
										<span class="badge bg-success-subtle text-success">Primary</span>
									</div>
								</div>
								<div class="list-group-item">
									<div class="d-flex align-items-center gap-2">
										<i class="bi bi-bank2 text-primary"></i>
										<div class="flex-grow-1">
											<div class="fw-medium">Bank of America</div>
											<small class="text-muted">****5678</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Support -->
					<div class="card">
						<div class="card-body text-center">
							<i class="bi bi-headset fs-1 text-primary mb-3"></i>
							<h6 class="mb-2">Need Help?</h6>
							<p class="text-muted small mb-3">Our support team is here to assist you</p>
							<button class="btn bg-primary text-white w-100">Contact Support</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile Bottom Navigation -->
	<?php include 'inc/mobile-menu.php'; ?>

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>