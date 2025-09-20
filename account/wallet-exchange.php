<?php
require '../config/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP">
	<meta name="keywords" content="Veloxa Wealth">
	<meta name="description" content="Veloxa Wealth">
	<link rel="canonical" href="./user/wallet-exchange" />
	<link rel="shortcut icon" href="./assets/global/images/MiZLv4Eb9oH3Boyfzlni.png" type="image/x-icon" />

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

	<title>Veloxa Wealth - Wallet Exchange
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
							<div class="col-sm-10 mx-auto">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Wallet Exchange</h3>
									</div>
									<div class="site-card-body">
										<div class="progress-steps-form">
											<form id="transferForm" action="javascript:void(0)" method="post">
												<input type="hidden" name="make_transfer" value="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP">
												<div class="row g-4">
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">From Wallet:</label>
														<div class="input-group mb-0">
															<select id="send_from" name="send_from" class="site-nice-select">
																<option value="">Select from wallet</option>
																<option value="wallet_bal">Main Wallet ($<?php echo number_format($user_info['wallet_bal'],2) ?>)</option>
																<option value="trading_bal">Profit Wallet ($<?php echo number_format($user_info['trading_bal'],2) ?>)</option>
															</select>
														</div>
													</div>
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Enter Amount:</label>
														<div class="input-group">
															<span class="input-group-text px-3 border-end-0" id="basic-addon1">$</span>
															<input type="number" min="0" name="amount" id="amount" required class="form-control" aria-label="Amount" id="amount"
																aria-describedby="basic-addon1">
														</div>
														<div class="input-info-text charge"></div>
													</div>
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">To Wallet:</label>
														<div class="input-group">
															<select name="send_to" id="send_to" class="site-nice-select">
																<option value="">Select to wallet</option>
																<option value="wallet_bal">Main Wallet ($<?php echo number_format($user_info['wallet_bal'],2) ?>)</option>
																<option value="trading_bal">Profit Wallet ($<?php echo number_format($user_info['trading_bal'],2) ?>)</option>
															</select>
														</div>

													</div>
												</div>
												<div class="transaction-list table-responsive">
													<div class="user-panel-title">
														<h3>Review Details:</h3>
													</div>
													<table class="table table-review">
														<tbody>
															<tr>
																<td><strong>From</strong></td>
																<td><span class="from"></span></td>
															</tr>
															<tr>
																<td><strong>Send to</strong></td>
																<td><span class="send-to"></span></td>
															</tr>
															<tr>
																<td><strong>Amount</strong></td>
																<td><span class="amount"></span></td>
															</tr>
															<tr>
																<td><strong>Charge</strong></td>
																<td class="">$0</td>
															</tr>
															<tr>
																<td><strong>Total</strong></td>
																<td class="total"></td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="buttons">
													<button type="submit" class="site-btn blue-btn submit-btn">
														Make Transfer<i class="anticon anticon-double-right"></i>
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
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>

	<script>
		"use strict"
		
		function number_format(number, decimals = 0, dec_point = ".", thousands_sep = ",") {
			let n = parseFloat(number);

			if (!isFinite(n)) return "0";

			let fixed = n.toFixed(decimals);

			let parts = fixed.split(".");
			parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

			return parts.join(dec_point);
		}

		$("#send_from").change( function() {
			const value = $(this).val();
			const output = $(".table-review .from");
			if (!value) return output.text('');
			output.text((value=='wallet_bal') ? "Wallet balance" : "Profit balance");
		});
		$("#send_to").change( function() {
			const value = $(this).val();
			const output = $(".table-review .send-to");
			if (!value) return output.text('');
			output.text((value=='wallet_bal') ? "Wallet balance" : "Profit balance");
		});
		$("#amount").on('input', function() {
			const value = $(this).val();
			const output = $(".table-review .amount");
			if (!value) return output.text('');
			const outputtext = `$${number_format(value)}`;
			output.text(outputtext);
			$('.table-review .total').text(outputtext);
		});
	</script>

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