<?php
require '../config/session.php';

if (!isset($_GET['trx']) || empty($_GET['trx'])) {
	header('Location: ./transactions');
	exit;
}
$transaction = $Controller->singleTrade($_GET['trx']);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $transaction['plan_name'] ?> Plan - Velloxa Wealth</title>
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
					<div class="w-100 d-flex justify-content-center flex-column gap-1 text-center mb-4">
						<img src="../images/plans/<?php echo $transaction['icon'] ?>"
							width="60"
							class="mx-auto my-2"
							alt="<?php echo $transaction['plan_name'] ?>"
						/>
						<h4 class="mb-0">$<?php echo number_format($transaction['amount'], 2) ?></h4>
						<p class="mb-0"><?php echo $transaction['plan_name'] ?> Plan</p>
					</div>
					<!-- Transaction List -->
					<div class="card mb-5">
						<div class="card-body p-0 py-2">
							<?php
							// print_r($transaction);
							?>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Plan</span>
								<span class="text-capitalize ms-auto"><?php echo $transaction['plan_name'] ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Capital</span>
								<span class="text-capitalize ms-auto">$<?php echo number_format($transaction['amount'], 2) ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Interest</span>
								<span class="text-capitalize ms-auto"><i class="bi bi-arrow-up text-success"></i> <?php echo $transaction['interest'] ?>%</span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Duration</span>
								<span class="text-capitalize ms-auto"><?php echo $transaction['duration'] ?> days</span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Profit</span>
								<span class="text-capitalize ms-auto">+$<?php echo number_format($transaction['profit'], 2) ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Total returns</span>
								<span class="text-capitalize ms-auto">$<?php echo number_format($transaction['returns'], 2) ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Invoice</span>
								<span class="text-capitalize ms-auto">#<?php echo $transaction['plan_hash'] ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Status</span>
								<?php
								switch ($transaction['status']) {
									case 'completed':
										?><span class="ms-auto text-success">Completed</span><?php
									break;
									default:
										?><span class="ms-auto text-warning">Running</span><?php
									break;
								}
								?>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Start date</span>
								<span class="text-capitalize ms-auto"><?php echo date('M d, Y', strtotime($transaction['start_date'])) ?></span>
							</div>
							<div class="trx-item d-flex w-100 p-3 border-bottom">
								<span style="opacity:.8;">Payout date</span>
								<span class="text-capitalize ms-auto"><?php echo date('M d, Y', strtotime($transaction['end_date'])) ?></span>
							</div>

							<p class="text-center pt-4">
								<a href="./transactions" class="btn text-primary">back to transactions</a>
							</p>
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

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>