<?php
require '../config/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="./assets/global/images/MiZLv4Eb9oH3Boyfzlni.png" type="image/x-icon" />

	<link rel="icon" href="./assets/global/images/MiZLv4Eb9oH3Boyfzlni.png" type="image/x-icon" />
	<link rel="stylesheet" href="./assets/global/css/fontawesome.min.css" />
	<link rel="stylesheet" href="./assets/frontend/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="./assets/frontend/css/animate.css" />
	<link rel="stylesheet" href="./assets/frontend/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="./assets/global/css/nice-select.css" />
	<link rel="stylesheet" href="./assets/global/css/datatables.min.css" />
	<link rel="stylesheet" href="./assets/global/css/simple-notify.min.css" />
	<link rel="stylesheet" type="text/css" href="./assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="stylesheet" href="./assets/global/css/custom.css" />
	<link rel="stylesheet" href="./assets/frontend/css/magnific-popup.css" />
	<link rel="stylesheet" href="./assets/frontend/css/aos.css" />
	<link rel="stylesheet" href="./assets/frontend/css/styles.css?var=2.1" />

	<style>
		/* //The Custom CSS will be added on the site head tag  */
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Zenith Wealth - Settings
	</title>


</head>

<body class="dark-theme">
	<script>
		var notify = {
			timeout: "5000",
		}
	</script>
	<!--Full Layout-->
	<div class="panel-layout">
		<!--Header-->
		<?php include 'inc/panel-header.php'; ?>
		<!--/Header-->

		<div class="desktop-screen-show">
			<?php include 'inc/sidebar.php'; ?>
		</div>

		<div class="page-container">
			<div class="main-content">
				<div class="section-gap">
					<div class="container-fluid">
						<!--Page Content-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Profile Settings</h3>
									</div>
									<div class="site-card-body">
										<form action="./user/settings/profile-update" method="post" enctype="multipart/form-data">
											<input type="hidden" name="_token" value="0PBnSGpBOeU6uMyjETolsJPb2ENYjKaQCWd9mtKF">
											<div class="row">
												<div class="col-xl-3">
													<div class="mb-3">
														<div class="body-title">Avatar:</div>
														<div class="wrap-custom-file">
															<input type="file" name="avatar" id="avatar" accept=".gif, .jpg, .png" />
															<label for="avatar">
																<img class="upload-icon" src="./assets/global/materials/upload.svg" alt="" />
																<span>Update Avatar</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="progress-steps-form">
												<div class="row">
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">First Name</label>
														<div class="input-group">
															<input type="text"
																class="form-control"
																name="fname"
																value="<?php echo $user_info['fname']; ?>"
																placeholder="First Name"
															/>
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Last Name</label>
														<div class="input-group">
															<input type="text" class="form-control" name="last_name" value="Hoymme"
																placeholder="Last Name" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Username</label>
														<div class="input-group">
															<input type="text" class="form-control" name="username" value="RonaldHoymme4125"
																placeholder="Username" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Gender</label>
														<div class="input-group">
															<select name="gender" id="kycTypeSelect" class="nice-select site-nice-select" required>
																<option value="male">male</option>
																<option value="female">female</option>
																<option value="other">other</option>
															</select>
														</div>
													</div>

													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
														<div class="input-group">
															<input type="date" name="date_of_birth" class="form-control" value=""
																placeholder="Date of Birth" />
														</div>
													</div>

													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Email Address</label>
														<div class="input-group">
															<input type="email" disabled class="form-control disabled" value="ronaldhoymme@gmail.com"
																placeholder="Email Address" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Phone</label>
														<div class="input-group">
															<input type="text" class="form-control" name="phone" value="+234 " placeholder="Phone" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Country</label>
														<div class="input-group">
															<input type="text" class="form-control disabled" value="United States"
																placeholder="Country" disabled />
														</div>
													</div>

													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">City</label>
														<div class="input-group">
															<input type="text" class="form-control" name="city" value="" placeholder="City" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Zip</label>
														<div class="input-group">
															<input type="text" class="form-control" name="zip_code" value="" placeholder="Zip" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Address</label>
														<div class="input-group">
															<input type="text" class="form-control" name="address" value="" placeholder="Address" />
														</div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Joining Date</label>
														<div class="input-group">
															<input type="text" class="form-control disabled" value="Wed, Aug 20, 2025 5:08 PM"
																placeholder="Joining Date" disabled />
														</div>
													</div>

													<div class="col-xl-6 col-md-12">
														<button type="submit" class="site-btn blue-btn">Save Changes</button>
													</div>
												</div>
											</div>
										</form>

									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">KYC</h3>
									</div>
									<div class="site-card-body">
										<a href="#kyc" class="site-btn blue-btn">Upload KYC</a>
										<p class="mt-3 mb-0 text-muted">Complete your KYC to gain full access of your account</p>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Change Password</h3>
									</div>
									<div class="site-card-body">
										<a href="#change-password" class="site-btn blue-btn">Change Password</a>
										<p class="mt-3 mb-0 text-muted">Change your account login password</p>
									</div>
								</div>
							</div>
							</div>
						</div>
						<!--Page Content-->
					</div>
				</div>
			</div>
		</div>


		<!-- Show in 575px in Mobile Screen -->
		<?php include 'inc/mobile-menu.php'; ?>
		<!-- Show in 575px in Mobile Screen End -->

		<!-- Automatic Popup -->

		<!-- /Automatic Popup End -->
	</div>
	<!--/Full Layout-->

	<script src="./assets/global/js/jquery.min.js"></script>
	<script src="./assets/global/js/jquery-migrate.js"></script>

	<script src="./assets/frontend/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/frontend/js/scrollUp.min.js"></script>

	<script src="./assets/frontend/js/owl.carousel.min.js"></script>
	<script src="./assets/global/js/waypoints.min.js"></script>
	<script src="./assets/frontend/js/jquery.counterup.min.js"></script>
	<script src="./assets/global/js/jquery.nice-select.min.js"></script>
	<script src="./assets/global/js/lucide.min.js"></script>
	<script src="./assets/frontend/js/magnific-popup.min.js"></script>
	<script src="./assets/frontend/js/aos.js"></script>
	<script src="./assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
	<script src="./assets/global/js/simple-notify.min.js"></script>
	<script src="./assets/frontend/js/main.js?var=5"></script>
	<script src="./assets/frontend/js/cookie.js"></script>
	<script src="./assets/global/js/custom.js?var=5"></script>
	<script src="./assets/global/js/pusher.min.js"></script>
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

	<script type="text/javascript" src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>
		// Color Switcher
		$(".color-switcher").on('click', function () {
			"use strict"
			$("body").toggleClass("dark-theme");
			var url = './theme-mode';
			$.get(url)
		});
	</script>


</body>

</html>