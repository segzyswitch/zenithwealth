<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="./../icon-o.png"
		type="image/x-icon" />

	<link rel="icon" href="./../icon-o.png" type="image/x-icon" />
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
	<link rel="stylesheet" href="assets/frontend/css/styles.css?var=2.1" />

	<style>
		/* //The Custom CSS will be added on the site head tag  */
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Veloxa Wealth - Send Money
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
										You need to submit your
										<strong>KYC and Other Documents</strong> before proceed to the system.
									</div>
									<div class="action">
										<a href="./user/kyc" class="site-btn-sm grad-btn"><i
												class="anticon anticon-info-circle"></i>Submit Now</a>
										<a href="" class="site-btn-sm red-btn ms-2" type="button" data-bs-dismiss="alert"
											aria-label="Close"><i class="anticon anticon-close"></i>Later</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row mobile-screen-show">
							<div class="col-12">
								<div class="user-kyc-mobile">
									<i icon-name="fingerprint" class="kyc-star"></i>
									Please Verify Your Identity <a href="./user/kyc">Submit Now</a>
								</div>
							</div>
						</div>
						<!--Page Content-->
						<div class="row">
							<div class="col-xl-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Send Money</h3>
										<div class="card-header-links">
											<a href="./user/send-money/log" class="card-header-link">SEND
												MONEY LOG</a>
										</div>
									</div>
									<div class="site-card-body">
										<div class="progress-steps">
											<div class="single-step current">
												<div class="number">01</div>
												<div class="content">
													<h4>Payment Details</h4>
													<p>Enter your Payment details</p>
												</div>
											</div>
											<div class="single-step ">
												<div class="number">02</div>
												<div class="content">
													<h4>Success</h4>
													<p>Successfully Payment</p>
												</div>
											</div>
										</div>

										<div class="progress-steps-form">
											<form action="./user/send-money/now" method="post">
												<input type="hidden" name="_token" value="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP">
												<div class="row">
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">User Email</label>
														<div class="input-group">
															<input type="email" name="email" required class="form-control userCheck"
																placeholder="User Email">
														</div>
														<div class="input-info-text notifyUser"></div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Enter Amount</label>
														<div class="input-group">
															<input type="text" class="form-control sendAmount" name="amount" required
																placeholder="Enter Amount" aria-label="Amount"
																oninput="this.value = validateDouble(this.value)" aria-describedby="basic-addon1">
															<span class="input-group-text" id="basic-addon1">USD</span>
														</div>
														<div class="input-info-text">Minimum 10 USD and Maximum 500000 USD</div>
													</div>
													<div class="col-xl-12 col-md-12 mt-3">
														<label for="exampleFormControlInput1" class="form-label">Send Money Note (Optional)</label>
														<div class="input-group">
															<textarea class="form-control-textarea" placeholder="Send Money Note"
																name="note"></textarea>
														</div>
													</div>
												</div>
												<div class="transaction-list table-responsive">
													<div class="user-panel-title">
														<h3>Send Money Details</h3>
													</div>
													<table class="table">
														<tbody>
															<tr>
																<td><strong>Payment Amount</strong></td>
																<td><span class="previewAmount"></span> USD</td>
															</tr>
															<tr>
																<td><strong>Charge</strong></td>
																<td><span class="previewCharge"></span> USD</td>
															</tr>
															<tr>
																<td><strong>User Email</strong></td>
																<td class="userEmail"></td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="buttons">
													<button type="submit" class="site-btn blue-btn">
														Send Money<i class="anticon anticon-double-right"></i>
													</button>
												</div>
											</form>

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

	<script type="text/javascript"
		src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>

	<script>
		$('.userCheck').on('change', function (e) {
			"use strict"
			var email = $(this).val();

			$('.userEmail').text(email)

			var url = './user/exist/:email';
			url = url.replace(':email', email);
			$.get(url, function (data) {
				$('.notifyUser').text(data)
			})
		})

		$('.sendAmount').on('keyup', function (e) {
			"use strict"
			var amount = $(this).val();
			$('.previewAmount').text(amount);

			var charge = "2";
			var chargeType = "percentage";


			if (chargeType === 'percentage') {
				var finalCharge = calPercentage(amount, charge)
			} else {
				var finalCharge = charge

			}
			$('.previewCharge').text(finalCharge);
		})


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