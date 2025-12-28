<?php
require '../config/session.php';
$linkedUser = null;
if ( count($Controller->linkedAccounts('joint')) > 0 ) {
	$linkedUser = $Controller->linkedAccounts('joint')[0];
}
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
							<?php if ($linkedUser) { ?>
							<h4 class="mb-1"><?php echo $user_info['fname'].' & '.$linkedUser['fname'].' '.$user_info['lname']; ?>!</h4>
							<p class="text-muted mb-2">Joint account</p>
							<?php } else { ?>
							<h4 class="mb-1"><?php echo $Controller->fullName() ?></h4>
							<p class="text-muted mb-2"><?php echo $user_info['email'] ?></p>
							<?php } ?>
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
										<?php if ($linkedUser) { ?>
										<div class="input-group">
											<input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $user_info['fname'] ?>" disabled style="opacity:.7;" />
											<input type="text" class="form-control text-center" id="firstName" value="$" disabled style="opacity:.7;max-width:45px;" />
											<input type="text" class="form-control" id="firstName" value="<?php echo $linkedUser['fname'] ?>" disabled style="opacity:.7;" />
										</div>
										<?php } else { ?>
										<input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $user_info['fname'] ?>" disabled style="opacity:.7;" />
										<?php } ?>
									</div>
									<div class="col-md-6">
										<label for="lastName" class="form-label">Last Name</label>
										<input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $user_info['lname'] ?>" disabled style="opacity:.7;" />
									</div>
									<div class="col-md-6">
										<label for="email" class="form-label">Email</label>
										<?php if ($linkedUser) { ?>
										<div class="input-group">
											<input type="email" name="email" class="form-control" id="email" value="<?php echo $user_info['email'] ?>" disabled style="opacity:.7;" />
											<input type="email" name="email" class="form-control" id="email" value="<?php echo $linkedUser['email'] ?>" disabled style="opacity:.7;" />
										</div>
										<?php } else { ?>
										<input type="email" name="email" class="form-control" id="email" value="<?php echo $user_info['email'] ?>" disabled style="opacity:.7;" />
										<?php } ?>
									</div>
									<div class="col-md-6">
										<label for="phone" class="form-label">Phone</label>
										<?php if ($linkedUser) { ?>
										<div class="input-group">
											<input type="tel" name="phone" class="form-control" value="<?php echo $user_info['phone'] ?>" disabled style="opacity:.7;" />
											<input type="tel" name="phone" class="form-control" value="<?php echo $user_info['phone'] ?>" disabled style="opacity:.7;" />
										</div>
										<?php } else { ?>
										<input type="tel" name="phone" class="form-control" id="phone" value="<?php echo $user_info['phone'] ?>" disabled style="opacity:.7;" />
										<?php } ?>
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
								<a href="#passwordModal" data-bs-toggle="modal" class="btn btn-outline-primary btn-sm">Change Password</a>
							</div>
							<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
								<div>
									<h6 class="mb-1">Two-Factor Authentication</h6>
									<p class="text-muted small mb-0">Add an extra layer of security</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="twoFactorAuth" />
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center py-3">
								<div>
									<h6 class="mb-1">Login Notifications</h6>
									<p class="text-muted small mb-0">Get notified of new login attempts</p>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="loginNotif" />
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
					<!-- <div class="card mb-4">
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
					</div> -->

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

		<!-- PasswordModal -->
	<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="passwordForm" method="POST" action="#" class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="passwordModalLabel"><i class="bi bi-lock"></i> Change password</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body text-start">
					<div class="form-group mb-4">
						<label for="new-password" class="form-label mb-1">New password</label>
						<input type="password" class="form-control" name="new_password" id="new-password" placeholder="" required />
					</div>
					<div class="form-group mb-4">
						<label for="retype-password" class="form-label mb-1">Retype password</label>
						<input type="password" class="form-control" name="confirm_password" id="retype-password" placeholder="" required />
					</div>
					<div class="form-group mb-4">
						<label for="old-password" class="form-label mb-1">Enter old password</label>
						<input type="password" class="form-control" name="password" id="old-password" placeholder="" required />
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="change_password" value="nwuisncuinjg__893f_8239uj8949r889" />
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit-btn">Change password</button>
				</div>
			</form>
		</div>
	</div>

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>
		$(document).ready(function(){
			// passwordForm
			$("#passwordForm").on('submit', function(ev){
				ev.preventDefault();

				$.ajax({
					url: "../config/process.php",
					type: "POST",
					data: new FormData(this),
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$("#passwordForm .submit-btn").html("please wait <i class='spinner-border spinner-border-sm'></i>");
						$("#passwordForm .submit-btn").addClass("disabled");
					},
					success: function(data) {
						$("#passwordForm .submit-btn").html("Continue <i class='bi bi-arrow-right'></i>");
						$("#passwordForm .submit-btn").removeClass("disabled");
						if ( data.search('success') !== -1 ) {
							notifySuccess(data);
							$("#passwordForm input").val('');
							$('.modal').modal('hide');
						}else {
							notifyWarning(data);
						}
					},
					error: function(error) {
						$("#passwordForm .submit-btn").html("Continue <i class='bi bi-arrow-right'></i>");
						$("#passwordForm .submit-btn").removeClass("disabled");
						console.log(error);
						notifyWarning('An error occured, check your connection and try again');
					}
				});
			});
		});
	</script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>