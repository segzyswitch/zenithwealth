<?php
require '../config/session.php';

$refferal = "https://velloxawealth.com/register?invite=" . $user_info['uuid'];
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Referrals - Velloxa Wealth</title>
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