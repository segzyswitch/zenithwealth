<?php
require '../config/session.php';
$linkedUser = $Controller->linkedAccounts('joint')[0];

$refferal = "https://velloxawealth.com/register?invite=" . $user_info['uuid'];
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Velloxa Wealth</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../icon.png" type="image/png">
</head>

<body>
	<!-- Sidebar -->
	<?php include 'inc/sidebar.php'; ?>

	<!-- Main Content -->
	<div class="main-content">
		<!-- Topbar -->
		<?php include 'inc/panel-header.php'; ?>
		<div class="content-body">
			<h4 class="text-muted mb-4 py-2">👋 Welcome Back, <?php echo $user_info['fname'].' & '.$linkedUser['fname'].' '.$user_info['lname']; ?>!</h4>
			<!-- Tabs -->
			<?php // if( $Controller->runningTrades()['count'] > 0 ) { ?>
			<!-- <ul class="nav nav-tabs custom-tabs mb-4">
				<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#balances">Balances</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#runInvestments">
						Running Investments
						<span class="badge bg-secondary rounded-circle"><?php echo $Controller->runningTrades()['count'] ?></span>
					</a>
				</li>
			</ul> -->
			<?php // } ?>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="balances">
					<!-- Available Balance Card -->
					<div class="card balance-card mb-4">
						<div class="card-body py-4">
							<p class="text-muted mb-2">Total available balance</p>
							<h1 class="mb-4"><?php echo $Controller->totalBalance() ?></h1>
							<div class="d-flex gap-3 flex-wrap">
								<a href="./deposit" class="btn btn-primary btn-lg px-4 px-sm-5">Deposit</a>
								<a href="./withdraw" class="btn btn-outline-secondary btn-lg px-4 px-sm-5">Withdraw</a>
							</div>
						</div>
					</div>

					<!-- Main Account Card -->
					<div class="card account-card mb-4">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-start mb-4">
								<div class="d-flex gap-3 align-items-center">
									<div class="account-icon">
										<i class="bi bi-wallet2"></i>
									</div>
									<div>
										<h5 class="mb-0">Main Account</h5>
										<p class="text-muted small mb-0">№ RGL001887</p>
									</div>
								</div>
								<div class="text-end">
									<p class="text-muted small mb-0">Opened</p>
									<p class="small mb-0">30.09.2023</p>
								</div>
							</div>

							<h2 class="mb-2"><?php echo $Controller->totalBalance() ?></h2>
							<p class="text-muted mb-3">Portfolio Valuation</p>

							<div class="progress mb-3" style="height: 8px;">
								<div class="progress-bar bg-primary" style="width: 40%"></div>
								<div class="progress-bar bg-success" style="width: 60%"></div>
							</div>

							<div class="row g-3">
								<div class="col-6">
									<div class="d-flex align-items-center gap-2">
										<span class="badge bg-primary rounded-circle p-2"></span>
										<small class="text-muted">Current investment</small>
									</div>
									<h6 class="mt-1"><?php echo '$'.number_format($Controller->totalInvested(), 2) ?></h6>
								</div>
								<div class="col-6">
									<div class="d-flex align-items-center gap-2">
										<span class="badge bg-success rounded-circle p-2"></span>
										<small class="text-muted">Expected Profit</small>
									</div>
									<h6 class="mt-1 text-success"><?php echo $Controller->totalRetruns() ?></h6>
								</div>
							</div>
						</div>
					</div>

					
					<?php
					// foreach ($Controller->linkedAccounts('joint') as $key => $value) {
						?>
					<!-- Venture Capital Account Card -->
					<!-- <div class="card account-card mb-5">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-start mb-4">
								<div class="d-flex gap-2 align-items-center" style="max-width:60%;">
									<div class="account-icon bg-danger-subtle">
										<span class="text-danger fw-bold px-2">
											<?php echo strtoupper($value['fname'][0]) ?><?php echo strtoupper($value['lname'][0]) ?>
										</span>
									</div>
									<div class="w-100">
										<h5 class="mb-0 text-truncate"><?php echo $value['fname'].' '.$value['lname'] ?></h5>
										<p class="text-muted small mb-0">№ <?php echo $value['wallet_id'] ?></p>
									</div>
								</div>
								<div class="text-end">
									<p class="text-muted small mb-0">Opened</p>
									<p class="small mb-0"><?php echo date('m.d.y', strtotime($value['createdat'])) ?></p>
								</div>
							</div>
							<h2 class="mb-2">$<?php echo number_format($value['balance'], 2) ?></h2>
							<p class="text-muted m-0">Available balance</p>
						</div>
					</div> -->
					<?php
					// }
					?>

					<hr class="mb-5" />
					
				</div>
				
				<!-- Transaction List -->
				<div class="card mb-5">
					<div class="card-header d-flex justify-content-between align-items-center py-3">
						<h5 class="mb-0">Recent Transactions</h5>
					</div>
					<div class="card-body p-0">
						<!-- Transaction list -->
						<?php include 'inc/transaction-list.php'; ?>
					</div>
					<div class="card-footer">
						<nav>
							<ul class="pagination justify-content-center mb-0">
								<li class="page-item disabled">
									<button type="button" class="page-link" disabled tabindex="-1">Previous</button>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item disabled">
									<button type="button" disabled class="page-link">Next</button>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile Menu -->
	<?php include 'inc/mobile-menu.php'; ?>


	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>