<?php
require '../config/session.php';

if (!isset($_GET['trx']) || empty($_GET['trx'])) {
	header('Location: ./transactions');
	exit;
}
$transaction = $Controller->singleTrade($_GET['trx']);

// current date
$startDate = new DateTime($transaction['start_date']);
$endDate   = new DateTime($transaction['end_date']);
$today = new DateTime(); // or any date you want to check progress

// Total duration (in days)
$totalDays = $startDate->diff($endDate)->days;

// Days elapsed (so far)
$elapsedDays = $startDate->diff(min($today, $endDate))->days;

// Calculate percentage (avoid division by zero)
$progress = $totalDays > 0 ? round(($elapsedDays / $totalDays) * 100, 1) : 0;
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
	<link rel="shortcut icon" href="../icon.png" type="image/png" />
	<style>
		/* Timeline Container */
		.timeline-wrapper {
			position: relative;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 40px 20px 10px;
		}
		/* The background line */
		.timeline-line {
			position: absolute;
			top: 32px;
			left: 12%;
			width: 76%;
			height: 3px;
			background: var(--border-color);
			border-radius: 2px;
			z-index: 0;
		}
		/* Each step */
		.timeline-step {
			position: relative;
			text-align: center;
			flex: 1;
			z-index: 1;
		}
		.timeline-step i {
			font-size: 30px;
			color: #ccc;
			border-radius: 50%;
			padding: 5px;
			transition: all 0.3s ease;
		}
		/* Label under icon */
		.timeline-step small {
			display: block;
			margin-top: 6px;
			color: #888;
		}
		/* Active step */
		.timeline-step.active i,
		.timeline-step.completed i {
			color: var(--primary-color); /* Active green */
		}
		.timeline-step.active small,
		.timeline-step.completed small {
			color: var(--text-color);
			font-weight: 500;
		}
		/* Progress fill line (based on active/completed steps) */
		.timeline-wrapper::before {
			content: "";
			position: absolute;
			top: 32px;
			left: 12%;
			height: 4px;
			background-color: var(--primary-color);
			border-radius: 2px;
			z-index: 0;
			width: 0;
			transition: width 0.5s ease;
		}
		/* Adjust the fill based on active step */
		.timeline-wrapper[data-status="started"]::before {
			width: 0%;
		}
		.timeline-wrapper[data-status="running"]::before {
			width: 50%;
		}
		.timeline-wrapper[data-status="completed"]::before {
			width: 100%;
		}
	</style>
</head>

<body>
	<!-- Desktop Sidebar -->
	<?php include 'inc/sidebar.php'; ?>

	<!-- Main Content -->
	<div class="main-content">
		<!-- Top Bar -->
		<?php include 'inc/panel-header.php'; ?>

		<div class="content-body text-muted">
			<div class="row">
				<div class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0"><?php echo $transaction['plan_name'] ?> Plan</h4>
            <!-- <span class="badge bg-warning text-dark">Running</span> -->
						<?php
						switch ($transaction['status']) {
							case 'completed':
								?><span class="badge bg-success-subtle text-success">Completed</span><?php
							break;
							default:
								?><span class="badge bg-warning-subtle text-warning">Running</span><?php
							break;
						}
						?>
          </div>

          <!-- Investment Overview -->
          <div class="row g-3 mb-4">
            <div class="col-md-6">
              <div class="p-3 card rounded-3 text-center">
                <small class="text-muted d-block mb-1">Invested Amount</small>
                <h5 class="mb-0 pt-1">$<?php echo number_format($transaction['amount'], 2) ?></h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-3 card rounded-3 text-center">
                <small class="text-muted d-block mb-1">Expected Profit</small>
                <h5 class="mb-0 pt-1">$<?php echo number_format($transaction['returns'], 2) ?></h5>
              </div>
            </div>
          </div>

          <!-- Progress -->
          <div class="mb-4">
            <div class="d-flex justify-content-between mb-2">
              <small>ROI Progress</small>
              <small><?php echo $progress ?>% Completed</small>
            </div>
            <div class="progress bg-light" style="height:10px;opacity:.7;">
              <div class="progress-bar bg-primary" style="width:<?php echo $progress ?>%;"></div>
            </div>
          </div>

          <!-- Duration -->
          <div class="row text-center mb-4">
            <div class="col-4 text-start text-sm-center">
              <small class="text-muted d-block">Start Date</small>
              <span><?php echo date('M d, Y', strtotime($transaction['start_date'])) ?></span>
            </div>
            <div class="col-4">
              <small class="text-muted d-block">Duration</small>
              <span><?php echo $transaction['duration'] ?> months</span>
            </div>
            <div class="col-4 text-end text-sm-center">
              <small class="text-muted d-block">End Date</small>
              <span><?php echo date('M d, Y', strtotime($transaction['end_date'])) ?></span>
            </div>
          </div>

          <!-- Payment Info -->
          <div class="mb-4 pt-2 ">
            <h6 class="mb-2">Payment Method</h6>
            <div class="p-3 border rounded-3 card">
              <div class="d-flex justify-content-between">
                <span class="small">Wallet Balance</span>
                <span class="text-muted">$<?php echo number_format($user_info['wallet_bal'], 2) ?></span>
              </div>
            </div>
          </div>

          <!-- Timeline -->
          <div class="w-100">
            <h6 class="mb-2">Investment Timeline</h6>
						<div class="timeline-wrapper mb-0">
							<div class="timeline-line"></div>
							<div class="timeline-step completed">
								<i class="bi bi-check-circle-fill"></i>
								<small>Started</small>
							</div>
							<div class="timeline-step active">
								<i class="bi bi-check-circle-fill"></i>
								<small>Running</small>
							</div>
							<div class="timeline-step">
								<i class="bi bi-check-circle-fill" style="opacity:.6;"></i>
								<small>Completed</small>
							</div>
						</div>
          </div>

					<div class="w-100 p-3 small mb-3">
						<p style="opacity:.7;" class="m-0"><?php echo $transaction['description'] ?></p>
					</div>

          <!-- Buttons -->
					<!--
          <div class="d-flex justify-content-between">
            <button class="btn btn-outline-secondary rounded-pill">Back</button>
            <div>
              <button class="btn btn-success rounded-pill me-2">Withdraw ROI</button>
              <button class="btn btn-primary rounded-pill">Reinvest</button>
            </div>
          </div>
					-->
				</div>
				<!-- Right Column -->
				<div class="col-lg-4">
					<!-- Quick Stats -->
					<div class="card mb-4">
						<div class="card-header">
							<h6 class="mb-0">Investment Summary</h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Total investments</small>
								<h5 class="mb-0">$<?php echo number_format($Controller->totalInvested(), 2) ?></h5>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Running Investments</small>
								<h5 class="mb-0"><?php echo $Controller->runningTrades()['count'] ?></h5>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Completed Investments</small>
								<h5 class="mb-0"><?php echo $Controller->completedTrades()['count'] ?></h5>
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