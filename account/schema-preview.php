<?php
require '../config/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="0PBnSGpBOeU6uMyjETolsJPb2ENYjKaQCWd9mtKF">
	<meta name="keywords" content="Veloxa Wealth">
	<meta name="description" content="Veloxa Wealth">
	<link rel="canonical" href="./user/schema-preview/1" />
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
		//The Custom CSS will be added on the site head tag 
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Veloxa Wealth - Schema Preview
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
						<div class="row justify-content-center">
							<div class="col-sm-10">
								<div class="site-card">
									<div class="site-card-body">
										<!-- GRAPH -->
										<div class="w-100" style="height:100%;width:100%">
											<div id="technical-analysis-chart-demo" style="height:400px;width:100%"></div>
											<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
											<script type="text/javascript">
												new TradingView.widget(
													{
														"container_id": "technical-analysis-chart-demo",
														"width": "100%",
														"autosize": true,
														"symbol": "BTC",
														"interval": "D",
														"timezone": "exchange",
														"theme": "dark",
														"style": "1",
														"withdateranges": true,
														"hide_side_toolbar": false,
														"allow_symbol_change": true,
														"save_image": false,
														"studies": [
															"ROC@tv-basicstudies",
															"StochasticRSI@tv-basicstudies",
															"MASimple@tv-basicstudies"
														],
														"show_popup_button": true,
														"popup_width": "1000",
														"popup_height": "650",
														"support_host": "https://www.tradingview.com",
														"locale": "en"
													}
												);
											</script>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-10" id="enterPlan">
								<div class="site-card h-100">
									<div class="site-card-header">
										<h3 class="title">Start Investment</h3>
									</div>
									<div class="site-card-body">
										<form class="w-100 progress-steps-form" id="calculate_profit" action="#">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-inner">
														<label for="select_plan" class="mb-1">Select Plan</label>
														<div class="input-group">
															<select class="nice-select site-nice-select" id="select_plan" required>
																<option selected value="">Select Plan</option>
																<?php
																if ( isset($_GET['plan']) ) {
																	$value = $Controller->singlePlan($_GET['plan']);
																	?>
																	<option value="<?php echo $value['id'] ?>"
																		data-name="<?php echo $value['name'] ?>"
																		data-interest="<?php echo $value['interest'] ?>"
																		data-interest_return_type="2"
																		data-recapture_type="1"
																		data-day="Days"
																		data-terms="<?php echo $value['description'] ?>"
																		data-duration="<?php echo $value['duration'] ?>"
																		data-min-limit="<?php echo $value['min_limit'] ?>"
																		data-max-limit="<?php echo $value['max_limit'] ?>"
																		selected>
																		<?php echo $value['name']." - Interest ".($value['interest'])."%" ?>
																	</option>
																	<?php
																}
																foreach ($Controller->Plans() as $key => $value) {
																	?>
																	<option value="<?php echo $value['id'] ?>"
																		data-name="<?php echo $value['name'] ?>"
																		data-interest="<?php echo $value['interest'] ?>"
																		data-interest_return_type="2"
																		data-recapture_type="1"
																		data-day="Days"
																		data-terms="<?php echo $value['description'] ?>"
																		data-duration="<?php echo $value['duration'] ?>"
																		data-min-limit="<?php echo $value['min_limit'] ?>"
																		data-max-limit="<?php echo $value['max_limit'] ?>">
																		<?php echo $value['name']." - Interest ".($value['interest'])."%" ?>
																	</option>
																	<?php
																}
																?>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-inner">
														<label for="invest_amount" class="mb-1">Amount</label>
														<div class="input-group mb-1">
															<input type="number" id="invest_amount_item"
																class="form-control"
																value="<?php if (isset($_GET['amount'])) echo $_GET['amount']; ?>"
																<?php if (isset($_GET['plan'])) echo "min='".$value['min_limit']."' max='".$value['max_limit']."'"; ?>
																placeholder="Enter Amount"
																required
															/>
														</div>
														<?php
														if ( isset($_GET['plan']) ) {
															$value = $Controller->singlePlan($_GET['plan']);
															echo "<p id='limitText' class='text-muted mb-4'>$".$value['min_limit']." - $".$value['max_limit']."</p>";
														}else echo "<p id='limitText' class='text-muted mb-4'></p>";
														?>
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<button type="submit" class="site-btn blue-btn">Review investment</button>
												</div>
												<small class="d-block col-lg-12" id="plan-terms"></small>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-sm-10 d-none" id="reviewPlan">
								<div class="site-card h-100">
									<div class="site-card-header">
										<h3 class="title">Review and Confirm</h3>
									</div>
									<form method="POST" id="investForm" class="site-card-body">
										<ul class="profit-list">
											<li class="mb-3 d-flex w-100">
												<span>Plan</span>
												<b class="ms-auto" id="plan_name">N/A</b>
											</li>
											<li class="mb-3 d-flex w-100">
												<span>Amount</span>
												<b class="ms-auto" id="cal_amount">N/A</b>
											</li>
											<li class="mb-3 d-flex w-100">
												<span>Payment Interval</span>
												<b class="ms-auto" id="payment_interval">N/A</b>
											</li>
											<li class="mb-3 d-flex w-100">
												<span>Profit</span>
												<b class="ms-auto" id="profit">N/A</b>
											</li>
											<li class="mb-3 d-flex w-100">
												<span>Capital Back</span>
												<b class="ms-auto" id="capital_back">N/A</b>
											</li>
											<li class="mb-3 d-flex w-100">
												<span>Total</span>
												<b class="ms-auto" id="total_invest">N/A</b>
											</li>
										</ul>
										<div class="hidden-form">
											<input type="hidden" name="plan_id">
											<input type="hidden" name="amount">
											<input type="hidden" name="invest_now" value="invest">
										</div>
										<h6 id="invest-total-return" class="text-muted mb-5"></h6>
										<div class="row mb-0">
											<div class="col-6">
												<button type="button" id="backToInput" class="site-btn w-100">Back</button>
											</div>
											<div class="col-6">
												<button type="submit" class="site-btn blue-btn w-100 submit-btn">Start investment</button>
											</div>
										</div>
									</form>
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
	<script src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>
  <script>
    "use strict";
    $(document).ready(function () {
      var planName = "";
      var interestRate = 0;
      var day = "";
      var duration = 1;
      var recapture_type = 1;
      var interest_return_type = 2;
			let min_limit = 0;
			let max_limit = 0;

      function updateMinMax() {
        const selectedOption = $('#select_plan option:selected');
        planName = selectedOption.data('name');
        interestRate = selectedOption.data('interest');
        day = selectedOption.data('day');
        duration = selectedOption.data('duration');
        recapture_type = selectedOption.data('recapture_type');
        interest_return_type = selectedOption.data('interest_return_type');
        min_limit = selectedOption.data('min-limit');
        max_limit = selectedOption.data('max-limit');
				$("#limitText").text(`$${min_limit} - $${max_limit}`);
				// set new min and max
				$("#qty").attr("min", 3);
				$("#qty").attr("max", 15);
        $("#methodTitle").html(selectedOption.data('name')+" Profit Calculation");
				console.log(min_limit);
      }

      function updateTotalReturn(amount) {
        var parsedAmount = parseFloat(amount);
        if (isNaN(parsedAmount)) {
          $("#invest-total-return").text("");
          return;
        }
        const selectedOption = $('#select_plan option:selected');

        $(".hidden-form input[name='plan_id']").val(selectedOption.val());
        $(".hidden-form input[name='amount']").val(parsedAmount);

        var currency = "$";
        var returnAmount = parsedAmount * interestRate / 100;
        $("#invest-total-return").text("Return " + currency + returnAmount.toFixed(2) + " every " + day + " for " + duration + " days");

        var totalProfit = returnAmount * duration;

        if (recapture_type == 2) {
          var total = totalProfit;
          var capitalBack = 0;
        } else {
          var total = totalProfit + parsedAmount;
          var capitalBack = parsedAmount;
        }

        if (interest_return_type == 2) {
          var investProfit = currency + totalProfit.toFixed(2);
          var returnType = "";
        } else {
          var investProfit = "LifeTime";
          var returnType = " + " + "LifeTime";
        }

        $("#plan_name").text(planName);
        $("#cal_amount").text(currency + parsedAmount.toFixed(2));
        $("#payment_interval").text(duration + " days");
        $("#profit").text(investProfit);
        $("#capital_back").text(currency + capitalBack.toFixed(2));
        $("#total_invest").text(currency + total.toFixed(2) + returnType);
      }

      updateMinMax();

      $('#select_plan').change(function () {
        updateMinMax();
      });
			// backToInput
			$('#backToInput').click(function () {
				$("#enterPlan").removeClass('d-none');
				$("#reviewPlan").removeClass('d-block');
				$("#reviewPlan").addClass('d-none');
      });

      $('#calculate_profit').submit(function (ev) {
        ev.preventDefault();
        var amount = $('#invest_amount_item').val();
        updateTotalReturn(amount);
        // $("#exampleModal").modal('show');
				// $("#enterPlan").removeClass('col-sm-10');
				$("#enterPlan").addClass('d-none');
				$("#reviewPlan").removeClass('d-none');
				$("#reviewPlan").addClass('d-block');
      });
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

	<!--
	<script>
		$("#enter-amount").on('keyup', function (e) {
			"use strict";
			e.preventDefault();
			var amount = $(this).val();
			$("#total-amount").html(amount);
		})

		$("#selectWallet").on('change', function (e) {
			"use strict";
			$('.gatewaySelect').empty();
			$('.manual-row').empty();
			var wallet = $(this).val();
			if (wallet === 'gateway') {
				$.get('./gateway-list', function (data) {
					$('.gatewaySelect').append(data)
					$('select').niceSelect();

				});
			}

		})
		$('body').on('change', '#gatewaySelect', function (e) {
			"use strict"
			e.preventDefault();

			$('.manual-row').empty();

			var code = $(this).val()

			var url = './user/deposit/gateway/:code';
			url = url.replace(':code', code);
			$.get(url, function (data) {

				if (data.credentials !== undefined) {

					console.log(data.credentials);

					$('.manual-row').append(data.credentials)
					imagePreview()
				}


			});

			$('#amount').on('keyup', function (e) {
				"use strict"
				var amount = $(this).val()
				$('.amount').text((Number(amount)))
				$('.currency').text(currency)
				var charge = globalData.charge_type === 'percentage' ? calPercentage(amount, globalData.charge) : globalData.charge
				$('.charge2').text(charge + ' ' + currency)

				$('.total').text((Number(amount) + Number(charge)) + ' ' + currency)
			})
		});
	</script>
	-->
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