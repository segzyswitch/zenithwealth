<?php
session_start();
if ( isset($_SESSION["moon_account_id"]) && isset($_SESSION["accnt_status"]) ) {
  header("Location: dashboard");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../icon-o.png" type="image/x-icon" />

	<link rel="icon" href="../icon-o.png" type="image/x-icon" />
	<link rel="stylesheet" href="assets/global/css/fontawesome.min.css" />
	<link rel="stylesheet" href="assets/frontend/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/frontend/css/animate.css" />
	<link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="assets/global/css/nice-select.css" />
	<link rel="stylesheet" href="assets/global/css/datatables.min.css" />
	<link rel="stylesheet" href="assets/global/css/simple-notify.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="stylesheet" href="assets/global/css/custom.css" />
	<link rel="stylesheet" href="assets/frontend/css/magnific-popup.css" />
	<link rel="stylesheet" href="assets/frontend/css/aos.css" />
	<link rel="stylesheet" href="assets/frontend/theme_base/mining_invest/css/styles67f8.css?var=1" />

	<style>
		/* The Custom CSS will be added on the site head tag  */
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Veloxa Wealth - Login
	</title>


</head>

<body>
	<script>
		var notify = {
			timeout: "5000",
		}
	</script>

	<!-- Login Section -->

	<section class="section-style site-auth grad-overlay"
		style="background: url(assets/frontend/theme_base/mining_invest/materials/banners/auth-banner.jpg) no-repeat center center; background-size: cover;">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-5 col-lg-8 col-md-12">
					<div class="auth-content">
						<div class="logo">
							<a href="../"><img src="assets/global/images/DAISWlCl4In2YZKgI2fr.png" alt="" /></a>
						</div>
						<div class="title">
							<h2> 👋 Welcome Back!</h2>
							<p>Sign in to continue with User Panel</p>
						</div>

						<div class="site-auth-form">
							<form method="POST" id="loginForm" action="#">
								<input type="hidden" name="user_login" value="TdjEgWMt6ufVBgAhEO3XzUJZXWJ1CZiyjEGUUxrN">
								<div class="single-field">
									<label class="box-label" for="email">Email Or Username</label>
									<input class="box-input" type="text" name="email" required />
								</div>
								<div class="single-field">
									<label class="box-label" for="password">Password</label>
									<div class="password">
										<input class="box-input" type="password" name="password" required />
									</div>
								</div>
								<div class="w-100 feedback"></div>
								<div class="single-field">
									<input class="form-check-input check-input" type="checkbox" name="remember" id="flexCheckDefault" />
									<label class="form-check-label" for="flexCheckDefault">
										Remember me
									</label>
									<span class="forget-pass-text"><a href="forgot-password">Forget Password</a></span>
								</div>
								<button type="submit" class="site-btn-big primary-btn w-100 submit-btn">Account Login</button>
							</form>
							<div class="singnup-text">
								<p>
									Don&#039;t have an account?
									<a href="register">Signup for free</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Login Section End -->


	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/global/js/jquery-migrate.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>

	<script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
	<script src="assets/frontend/js/scrollUp.min.js"></script>

	<script src="assets/frontend/js/owl.carousel.min.js"></script>
	<script src="assets/global/js/waypoints.min.js"></script>
	<script src="assets/frontend/js/jquery.counterup.min.js"></script>
	<script src="assets/global/js/jquery.nice-select.min.js"></script>
	<script src="assets/global/js/lucide.min.js"></script>
	<script src="assets/frontend/js/magnific-popup.min.js"></script>
	<script src="assets/frontend/js/aos.js"></script>
	<script src="assets/global/js/simple-notify.min.js"></script>

	<script src="assets/frontend/theme_base/mining_invest/js/particles.min.js"></script>
	<script src="assets/frontend/theme_base/mining_invest/js/particle-app.js"></script>
	<script src="assets/frontend/theme_base/mining_invest/js/main830b.js?var=5"></script>
	<script src="assets/frontend/js/cookie.js"></script>
	<script src="assets/global/js/custom830b.js?var=5"></script>
	<script>
			(function ($) {
				'use strict';
				// AOS initialization
				AOS.init();
			})(jQuery);
	</script>
	<script>
		(function ($) {
			'use strict';
			// To top
			$.scrollUp({
				scrollText: '<i class="fas fa-caret-up"></i>',
				easingType: 'linear',
				scrollSpeed: 500,
				animation: 'fade'
			});
		})(jQuery);
	</script>

</body>
</html>