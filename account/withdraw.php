<?php
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Withdraw - Velloxa Wealth</title>
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
			<div class="row">
				<div class="col-lg-8">
					<!-- Available Balance -->
					<div class="card mb-4 border-success">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<p class="text-muted mb-1">Available for Withdrawal</p>
									<h3 class="mb-0 text-success"><?php echo $Controller->totalBalance() ?></h3>
								</div>
								<i class="bi bi-wallet2 text-success fs-1"></i>
							</div>
						</div>
					</div>

					<!-- Withdraw Form -->
					<div class="card mb-4">
						<div class="card-header">
							<h5 class="mb-0 pt-1">Withdrawal Details</h5>
						</div>
						<div class="card-body py-4">
							<form id="withdrawForm">
								<input type="hidden" name="widthdraw_funds" value="<?php echo str_shuffle(time().'asdfghjkl1234567890qwertyuiopzxcvbnm') ?>">
								<div class="mb-4">
									<label for="withdrawAccount" class="form-label">From Account</label>
									<select name="from_wallet" class="form-select" id="withdrawAccount" required>
										<option value="">Select from wallet</option>
										<option value="wallet_bal">Main Wallet ($<?php echo number_format($user_info['wallet_bal'],2) ?>)</option>
										<option value="trading_bal">Profit Wallet ($<?php echo number_format($user_info['trading_bal'],2) ?>)</option>
									</select>
								</div>
								<div class="mb-4">
									<label for="withdrawAmount" class="form-label">Amount (USD)</label>
									<div class="input-group">
										<span class="input-group-text">$</span>
										<input type="number" name="amount" class="form-control" id="withdrawAmount" placeholder="0.00"
											min="100" step="0.01" required />
									</div>
									<small class="text-muted">Minimum withdrawal: $100.00</small>
								</div>
								<div class="mb-4">
									<label for="withdrawMethod" class="form-label">Recieving wallet</label>
									<select name="gateway" class="form-select" id="withdrawMethod" required>
										<option value="">Select wallet type</option>
										<?php
										foreach ($Controller->cryptoWallets() as $key => $value) {
											?>
											<option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="mb-4">
									<label for="bankAccount" class="form-label">Recieving wallet Address</label>
									<input type="text"
										name="wallet_addr"
										class="form-control"
										id="wallet_addr"
										placeholder="Enter recieving wallet address"
										required
									/>
								</div>
								<div class="alert alert-warning d-flex align-items-center gap-1" role="alert">
									<i class="bi bi-exclamation-triangle-fill me-2 h5"></i>
									<div>
										<small>Withdrawals may take 1-3 business days to process. A fee may apply depending on the withdrawal
											method.</small>
									</div>
								</div>
								<div class="mb-4 form-check">
									<input type="checkbox" class="form-check-input" id="confirmWithdraw" required>
									<label class="form-check-label" for="confirmWithdraw">
										I confirm that the withdrawal details are correct
									</label>
								</div>
								<div class="w-100">
									<button type="submit" class="btn bg-primary submit btn-lg text-white">
										<small><i class="bi bi-arrow-up-circle"></i> Request Withdrawal</small>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Sidebar Info -->
				<div class="col-lg-4">
					<div class="card mb-4">
						<div class="card-header">
							<h6 class="mb-0">Withdrawal Information</h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Processing Time</small>
								<p class="mb-0">1-3 business days</p>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Transaction Fee</small>
								<p class="mb-0">$0 - $25 (varies by method)</p>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Minimum Withdrawal</small>
								<p class="mb-0">$100.00</p>
							</div>
							<div>
								<small class="text-muted d-block mb-1">Daily Limit</small>
								<p class="mb-0">$50,000.00</p>
							</div>
						</div>
					</div>

					<div class="card border-danger mb-4">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2 mb-2">
								<i class="bi bi-shield-check text-danger"></i>
								<h6 class="mb-0">Security Notice</h6>
							</div>
							<p class="small mb-0">For your security, large withdrawals may require additional verification. We'll
								contact you if needed.</p>
						</div>
					</div>

					<?php if ( count($Controller->Withdrawals()) > 0 ) { ?>
					<div class="card">
						<div class="card-header">
							<h6 class="mb-0">Recent Withdrawals</h6>
						</div>
						<div class="card-body p-0">
							<div class="list-group list-group-flush">
								<?php
								foreach ($Controller->Withdrawals(5) as $key => $value) {
								?>
								<div class="list-group-item">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<div class="fw-medium">$<?php echo number_format($value['amount'], ) ?></div>
											<small class="text-muted"><?php echo date('M d, Y', strtotime($value['createdat'])) ?></small>
										</div>
										<?php
										switch ($value['status']) {
											case 'success':
												?><span class="badge bg-success-subtle text-success">Completed</span><?php
											break;
											case 'failed':
												?><span class="badge bg-danger-subtle text-danger">Failed</span><?php
											break;
											default:
												?><span class="badge bg-warning-subtle text-warning">Pending</span><?php
											break;
										}
										?>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<?php } ?>
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