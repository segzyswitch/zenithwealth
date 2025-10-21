<?php
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Investment plans - Velloxa Wealth</title>
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
			<h2 class="mb-4 text-color">Select a plan</h2>
			<div class="row">
				<?php
				$counter = 1;
				foreach ($Controller->Plans() as $key => $value) {
					?>
					<div class="col-sm-4">
						<div class="card plan-card text-center p-4 py-5">
							<img class="m-auto mb-4" width="60" src="../images/plans/plan-0<?php echo $counter; ?>.png" />
							<h3 class="mb-2"><?php echo $value['name'] ?> plan</h3>
							<p class="small text-primary mb-4">Daily <?php echo $value['interest'] ?>%</p>
							<ul class="list-unstyled d-flex flex-column gap-3 mb-4">
								<li class="d-flex justify-content-between align-items-center">
									<span>Investment Limit</span>
									<span class="special">
										<?php echo "$" . $value['min_limit'] . " - $" . $value['max_limit'] ?>
									</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Capital Back</span>
									<span>Yes</span>
								</li>
								<li class="d-flex justify-content-between align-items-center">
									<span>Duration</span>
									<span><?php echo $value['duration'] ?></span>
								</li>
								<!-- <li>Profit Withdraw <span>Anytime</span></li> -->
								<li class="d-flex justify-content-between align-items-center">
									<span>Cancel</span>
									<span> No</span>
								</li>
							</ul>
							<div class="text-primary small mb-4"><span class="star">*</span> No Profit Holidays</div>
							<a href="./schema-preview?plan=<?php echo $value['id'] ?>"
								class="btn btn-dark btn-lg balance-card border-0 w-100 centered">
								<small><i class="anticon anticon-check"></i>Select Plan</small>
							</a>
						</div>
					</div>
					<?php
					$counter++;
				}
				?>
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