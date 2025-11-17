<?php
require '../config/session.php';

if (!isset($_GET['trx']) || empty($_GET['trx'])) {
	header('Location: ./transactions');
	exit;
}
$transaction = $Controller->singleTransaction($_GET['trx']);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $transaction['details'] ?> - Velloxa Wealth</title>
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
				<div class="col-sm-8">
					<div class="w-100 d-flex justify-content-center flex-column gap-2 text-center mb-4">
						<div class="trx-details w-100 d-flex justify-content-center">
							<?php
							switch ($transaction['type']) {
								case 'deposit':
									?>
									<div class="transaction-icon bg-success-subtle text-success">
										<i class="bi bi-arrow-down"></i>
									</div>
									<?php
								break;
								case 'withdrawal':
									?>
									<div class="transaction-icon bg-danger-subtle text-danger">
										<i class="bi bi-arrow-up"></i>
									</div>
									<?php
								break;
								case 'trade':
									?>
									<div class="transaction-icon bg-info-subtle text-info">
										<i class="bi bi-arrow-right"></i>
									</div>
									<?php
								break;
								default:
									?>
									<div class="transaction-icon bg-secondary-subtle text-secondary">
										<i class="bi bi-arrow-up-right"></i>
									</div>
									<?php
								break;
							}
							?>
						</div>
						<h4 class="mb-0">$<?php echo number_format($transaction['amount'], 2) ?></h4>
						<p class="mb-0"><?php echo $transaction['details'] ?></p>
					</div>
					<!-- Transaction List -->
					<div class="card mb-5">
						<div class="card-body p-0 py-2">
							<?php
							// print_r($transaction);
							?>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Type</span>
								<span class="text-capitalize ms-auto"><?php echo $transaction['type'] ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Amount</span>
								<span class="text-capitalize ms-auto">$<?php echo number_format($transaction['amount'], 2) ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">From</span>
								<span class="text-capitalize ms-auto"><?php echo $transaction['source'] ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Details</span>
								<span class="text-capitalize ms-auto"><?php echo $transaction['details'] ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Invoice</span>
								<span class="text-capitalize ms-auto">#<?php echo $transaction['invoice'] ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Status</span>
								<?php
								switch ($transaction['status']) {
									case 'success':
										?><span class="ms-auto text-success">Completed</span><?php
									break;
									case 'failed':
										?><span class="ms-auto text-danger">Failed</span><?php
									break;
									default:
										?><span class="ms-auto text-warning">Pending</span><?php
									break;
								}
								?>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Date</span>
								<span class="text-capitalize ms-auto"><?php echo date('M d, Y', strtotime($transaction['createdat'])) ?></span>
							</div>

							<p class="text-center pt-4">
								<a href="./transactions" class="btn text-primary">back to transactions</a>
							</p>
						</div>
					</div>
				</div>
				<!-- Sidebar Info -->
				<div class="col-lg-4">
					<div class="card mb-4">
						<div class="card-header">
							<h6 class="mb-0">Deposit Information</h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Processing Time</small>
								<p class="mb-0">1-3 business days</p>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Transaction Fee</small>
								<p class="mb-0">Free for bank transfers</p>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Minimum Deposit</small>
								<p class="mb-0">$50.00</p>
							</div>
							<div>
								<small class="text-muted d-block mb-1">Daily Limit</small>
								<p class="mb-0">$100,000.00</p>
							</div>
						</div>
					</div>

					<?php if ( count($Controller->Deposits()) > 0 ) { ?>
					<div class="card">
						<div class="card-header">
							<h6 class="mb-0">Recent Deposits</h6>
						</div>
						<div class="card-body p-0">
							<div class="list-group list-group-flush">
								<?php
								foreach ($Controller->Deposits(5) as $key => $value) {
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