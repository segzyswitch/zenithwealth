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

	<title>Zenith Wealth - Wallet Exchange</title>
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
										<h3 class="title">Withdraw Funds</h3>
									</div>
									<div class="site-card-body">
										<div class="progress-steps-form">
											<form action="javascript:void(0)" method="post">
												<input type="hidden" name="_token" value="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP">
												<div class="row g-4">
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">From Wallet:</label>
														<div class="input-group mb-0">
															<select name="from_wallet" class="site-nice-select">
																<option value="">Select from wallet</option>
																<option value="wallet_bal">Main Wallet ($<?php echo number_format($user_info['wallet_bal'],2) ?>)</option>
																<option value="wallet_bal">Profit Wallet ($<?php echo number_format($user_info['trading_bal'],2) ?>)</option>
															</select>
														</div>
													</div>
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Choose Gateway:</label>
														<div class="input-group mb-0">
															<select name="gateway" class="site-nice-select">
																<option value="">Select wallet type</option>
                                  <?php
                                  foreach ($Controller->cryptoWallets() as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
                                    <?php
                                  }
                                  ?>
															</select>
														</div>
													</div>
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Enter Amount:</label>
														<div class="input-group">
															<span class="input-group-text px-3 border-end-0" id="basic-addon1">$</span>
															<input type="number" min="0" name="amount" required class="form-control" aria-label="Amount" id="amount" placeholder="0.00" />
														</div>
														<div class="input-info-text charge"></div>
													</div>
													<div class="col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Recieving wallet Address:</label>
														<div class="input-group">
															<input type="text" name="wallet_addr" required class="form-control" placeholder="Enter recieving wallet address" 	/>
														</div>
													</div>
												</div>
												<div class="transaction-list table-responsive">
													<div class="user-panel-title">
														<h3>Review Details:</h3>
													</div>
													<table class="table">
														<tbody>
															<tr>
																<td><strong>Amount</strong></td>
																<td><span class="amount"></span> <span class="currency"></span></td>
															</tr>
															<tr>
																<td><strong>Charge</strong></td>
																<td class="charge2"></td>
															</tr>
															<tr>
																<td><strong>Total</strong></td>
																<td class="total"></td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="buttons">
													<button type="submit" class="site-btn blue-btn">
														Proceed to Exchange<i class="anticon anticon-double-right"></i>
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
	<script src="./assets/frontend/js/aos.js"></script>
	<script src="./assets/global/js/datatables.min.js" type="text/javascript"
		charset="utf8"></script>
	<script src="./assets/global/js/simple-notify.min.js"></script>
	<script src="./assets/frontend/js/main.js?var=5"></script>
	<script src="./assets/frontend/js/cookie.js"></script>
	<script src="./assets/global/js/custom.js?var=5"></script>
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

	<script type="text/javascript"
		src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>

		"use strict"

		var currency = "USD";

		var charge_type = "percentage";
		var charge = "0";

		$('#amount').on('keyup', function (e) {

			var amount = $(this).val()

			$('.amount').text((Number(amount)))

			$('.currency').text(currency)

			var finalCharge = charge_type === 'percentage' ? calPercentage(amount, charge) : charge


			$('.charge2').text(finalCharge + ' ' + currency)

			$('.total').text((Number(amount) + Number(finalCharge)) + ' ' + currency)


			$('.charge').text('Charge ' + charge + ' ' + (charge_type === 'percentage' ? ' % ' : currency))
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