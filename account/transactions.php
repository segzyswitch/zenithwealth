<?php
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transactions - Velloxa Wealth</title>
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

	<!-- Mobile Bottom Navigation -->
	<?php include 'inc/mobile-menu.php'; ?>

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>