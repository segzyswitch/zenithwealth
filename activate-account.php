<?php
if (!isset($_GET['uuid'])) {
	header("Location: ./");
	return false;
}
$uuid = $_GET['uuid'];
require "config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;

$check = $conn->prepare("SELECT status FROM users WHERE uuid = '$uuid'");
try {
	$check->execute();
	$get_status = $check->fetch();
	$user_status = $get_status['status'];
	if ( $user_status == 'confirmed' ) {
		echo "Link already expired! <a href='./'>Go home</a>";
		return false;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}


$sql = "UPDATE users
SET status = 'confirmed'
WHERE uuid = '$uuid'";
$query = $conn->prepare($sql);
try {
	$query->execute();
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}
?>
<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MoonInvests - Account Activation</title>
	<meta name="title" Content="MoonInvests - Account Activation">
	<meta name="description"
		content="Explore MoonInvests your premier destination for hassle-free crypto buying, selling, and staking. Maximize your investment potential with our seamless platform. Join us today!">
	<meta name="keywords" content="stakelab,staking platform,crypto buy,crypto sell">
	<link rel="shortcut icon" href="assets/images/logo_icon/favicon.png" type="image/x-icon">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="MoonInvests - Account Activation">

	<link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/global/css/all.min.css">
	<link rel="stylesheet" href="assets/global/css/line-awesome.min.css">
	<link rel="stylesheet" href="assets/global/css/iziToast_custom.css">
	<link rel="stylesheet" href="assets/global/css/select2.min.css">
	<link rel="stylesheet" href="assets/templates/basic/css/main.css">
	<link rel="stylesheet" href="assets/templates/basic/css/custom.css">
	<link rel="stylesheet" href="assets/templates/basic/css/color3e28.css?color=ff0044&amp;secondColor=fe780b">
</head>

<body>
	<div class="preloader-wrapper">
		<div class="preloader">
			<div class="wrapper">
				<div class="loader">
					<div class="dot"></div>
				</div>
				<div class="loader">
					<div class="dot"></div>
				</div>
				<div class="loader">
					<div class="dot"></div>
				</div>
				<div class="loader">
					<div class="dot"></div>
				</div>
				<div class="loader">
					<div class="dot"></div>
				</div>
				<div class="loader">
					<div class="dot"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="body-overlay"></div>
	<div class="sidebar-overlay"></div>
	<a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

	<!-- HEADER -->
	<?php include 'inc/header.php'; ?>

	<div class="section-wraper">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-7 col-xl-5">

					<div class="card custom--card">
						<div class="card-header">
							<h5 class="card-title">Account Activation</h5>
						</div>
						<div class="card-body text-center">
							<p class="display-1 mb-3"><i>🎉</i></p>
							<p class="h3 fw-light mb-4">Account successfully activated!</p>
							<p class="mb-4" style="color:#aaa;">Your account has been activated, and you’re all set to start using AAVE-Investment platform. We’re excited to have you on board!</p>
							<p class="mb-4"><a href="login" class="btn btn--base contact-btn">Sign In</a></p>
							<div class="w-100 text-center">
								<a href="./" class="mx-2 text-muted">Home</a>
								<a href="./about" class="mx-2 text-muted">About</a>
								<a href="./contact" class="mx-2 text-muted">Contact</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery js -->
	<script src="assets/global/js/jquery-3.7.1.min.js"></script>
	<script src="assets/global/js/bootstrap.bundle.min.js"></script>
	<script src="assets/global/js/select2.min.js"></script>

	<!-- Viewport js -->
	<script src="assets/templates/basic/js/viewport.jquery.js"></script>

	<!-- main js -->
	<script src="assets/templates/basic/js/main.js"></script>

	<link href="assets/global/css/iziToast.min.css" rel="stylesheet">
	<link href="assets/global/css/iziToast_custom.css" rel="stylesheet">
	<script src="assets/global/js/iziToast.min.js"></script>

	<script>
		"use strict";
		const colors = {
			success: '#28c76f',
			error: '#eb2222',
			warning: '#ff9f43',
			info: '#1e9ff2',
		}

		const icons = {
			success: 'fas fa-check-circle',
			error: 'fas fa-times-circle',
			warning: 'fas fa-exclamation-triangle',
			info: 'fas fa-exclamation-circle',
		}

		const notifications = [];
		const errors = [];


		const triggerToaster = (status, message) => {
			iziToast[status]({
				title: status.charAt(0).toUpperCase() + status.slice(1),
				message: message,
				position: "topRight",
				backgroundColor: '#fff',
				icon: icons[status],
				iconColor: colors[status],
				progressBarColor: colors[status],
				titleSize: '1rem',
				messageSize: '1rem',
				titleColor: '#474747',
				messageColor: '#a2a2a2',
				transitionIn: 'obunceInLeft'
			});
		}

		if (notifications.length) {
			notifications.forEach(element => {
				triggerToaster(element[0], element[1]);
			});
		}

		if (errors.length) {
			errors.forEach(error => {
				triggerToaster('error', error);
			});
		}

		function notify(status, message) {
			if (typeof message == 'string') {
				triggerToaster(status, message);
			} else {
				$.each(message, (i, val) => triggerToaster(status, val));
			}
		}
	</script>


	<script>
		adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
		adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
		adroll_version = "2.0";
		(function (w, d, e, o, a) {
			w.__adroll_loaded = true;
			w.adroll = w.adroll || [];
			w.adroll.f = ['setProperties', 'identify', 'track'];
			var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
				+ "/roundtrip.js";
			for (a = 0; a < w.adroll.f.length; a++) {
				w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
					return function () {
						w.adroll.push([n, arguments])
					}
				})(w.adroll.f[a])
			}
			e = d.createElement('script');
			o = d.getElementsByTagName('script')[0];
			e.async = 1;
			e.src = roundtripUrl;
			o.parentNode.insertBefore(e, o);
		})(window, document);
		adroll.track("pageView");
	</script>
</body>

</html>