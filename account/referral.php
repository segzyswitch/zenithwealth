<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="0PBnSGpBOeU6uMyjETolsJPb2ENYjKaQCWd9mtKF">
	<meta name="keywords" content="Zenith Wealth">
	<meta name="description" content="Zenith Wealth">
	<link rel="canonical" href="./user/referral" />
	<link rel="shortcut icon" href="./assets/global/images/MiZLv4Eb9oH3Boyfzlni.png"
		type="image/x-icon" />

	<link rel="icon" href="./assets/global/images/MiZLv4Eb9oH3Boyfzlni.png"
		type="image/x-icon" />
	<link rel="stylesheet" href="./assets/global/css/fontawesome.min.css" />
	<link rel="stylesheet" href="./assets/frontend/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="./assets/frontend/css/animate.css" />
	<link rel="stylesheet" href="./assets/frontend/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="./assets/global/css/nice-select.css" />
	<link rel="stylesheet" href="./assets/global/css/datatables.min.css" />
	<link rel="stylesheet" href="./assets/global/css/simple-notify.min.css" />
	<link rel="stylesheet" type="text/css"
		href="./assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
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

	<title>Zenith Wealth - Dashboard
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

						<div class="row desktop-screen-show">
							<div class="col">
								<div class="alert site-alert alert-dismissible fade show" role="alert">
									<div class="content">
										<div class="icon"><i class="anticon anticon-warning"></i></div>
										<strong>KYC Pending</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="row mobile-screen-show">
							<div class="col-12">
								<div class="user-kyc-mobile">
									<i icon-name="fingerprint" class="kyc-star"></i>
									KYC Pending
								</div>
							</div>
						</div>
						<!--Page Content-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Referral URL and Tree
										</h3>
									</div>
									<div class="site-card-body">
										<div class="referral-link">
											<div class="referral-link-form">
												<input type="text" value="./register?invite=qF4iT7V5Il"
													id="refLink" />
												<button type="submit" onclick="copyRef()">
													<i class="anticon anticon-copy"></i>
													<span id="copy">Copy Url</span>
													<input id="copied" hidden value="Copied">
												</button>
											</div>
											<p class="referral-joined">
												0 peoples are joined by using this URL
											</p>
										</div>



									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">All Referral Logs</h3>
										<div class="card-header-links">
											<span class="card-header-link rounded-pill"> Referral Profit: 0 USD</span>
										</div>
									</div>
									<div class="site-card-body table-responsive">


										<div class="site-tab-bars">
											<ul class="nav nav-pills" id="pills-tab" role="tablist">
												<li class="nav-item" role="presentation">
													<a href="" class="nav-link active" id="generalTarget-tab" data-bs-toggle="pill"
														data-bs-target="#generalTarget" type="button" role="tab" aria-controls="generalTarget"
														aria-selected="true"><i icon-name="network"></i>General</a>
												</li>

											</ul>
										</div>


										<div class="tab-content" id="pills-tabContent">

											<div class="tab-pane fade show active" id="generalTarget" role="tabpanel"
												aria-labelledby="generalTarget-tab">

												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 desktop-screen-show">
														<div class="site-datatable">
															<div class="row table-responsive">
																<div class="col-xl-12">
																	<table class="display data-table">
																		<thead>
																			<tr>
																				<th>Description</th>
																				<th>Transactions ID</th>
																				<th>Amount</th>
																				<th>Status</th>
																			</tr>
																		</thead>
																		<tbody>




																		</tbody>
																	</table>

																	<p class="centered">No Data Found</p>


																</div>
															</div>
														</div>

													</div>
													<div class="col-12 mobile-screen-show">
														<!-- Transactions -->
														<div class="all-feature-mobile mobile-transactions mb-3">
															<div class="contents">
															</div>

														</div>

													</div>
												</div>


											</div>


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
	<script src="./assets/global/js/simple-notify.min.js"></script>
	<script src="./assets/frontend/js/main.js?var=5"></script>
	<script src="./assets/frontend/js/cookie.js"></script>
	<script src="./assets/global/js/custom.js?var=5"></script>

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

	<script type="text/javascript" src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>
		function copyRef() {
			/* Get the text field */
			var copyApi = document.getElementById("refLink");
			/* Select the text field */
			copyApi.select();
			copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
			/* Copy the text inside the text field */
			document.execCommand('copy');
			$('#copy').text($('#copied').val())
		}
	</script>
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