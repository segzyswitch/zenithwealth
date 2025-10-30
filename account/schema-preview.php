<?php
require '../config/session.php';
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trading View - Velloxa Wealth</title>
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
			<div class="row">
				<div class="col-lg-8">
					<!-- Personal Information -->
					<div class="card mb-4">
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
										"theme": localStorage.getItem('theme') || 'light',
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

					<!-- INVEST NOW -->
					<div class="card" id="enterPlan">
						<div class="card-header">
							<h5 class="title">Start Investment</h5>
						</div>
						<div class="card-body">
							<form class="w-100 progress-steps-form" id="calculate_profit" action="#">
								<div class="row">
									<div class="col-l2 mb-4">
										<div class="form-inner">
											<label for="select_plan" class="mb-1">Select Plan</label>
											<div class="input-group">
												<select class="form-select" id="select_plan" required>
													<option selected value="" disabled>Select Plan</option>
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
													<?php if (isset($_GET['plan'])) {
														$value = $Controller->singlePlan($_GET['plan']);
														echo "min='".$value['min_limit']."' max='".$value['max_limit']."'";
													}	?>
													placeholder="Enter Amount"
													required
												/>
											</div>
											<?php
											if ( isset($_GET['plan']) ) {
												$value = $Controller->singlePlan($_GET['plan']);
												echo "<p id='limitText' class='text-muted mb-4 small'>$".$value['min_limit']." - $".$value['max_limit']."</p>";
											}else echo "<p id='limitText' class='text-muted mb-4 small'></p>";
											?>
										</div>
									</div>
									<div class="col-l2 mb-4">
										<div class="form-inner">
											<label for="select_plan" class="mb-1">Payment account</label>
											<div class="input-group">
												<select class="form-select" id="select_plan" required>
													<option selected value="wallet_balance">Wallet balance - $<?php echo number_format($user_info['wallet_bal'], 2) ?></option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-12 mb-2">
										<button type="submit" class="btn bg-primary bg-light">Review investment</button>
									</div>
									<small class="d-block col-lg-12" id="plan-terms"></small>
								</div>
							</form>
						</div>
					</div>

					<!-- Review -->
					<div class="card d-none" id="reviewPlan">
						<div class="card-header">
							<h5 class="title">Review and Confirm</h5>
						</div>
						<form method="POST" id="investForm" class="card-body">
							<ul class="p-0 m-0 mb-3">
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
								<input type="hidden" name="invest_now" value="invest" />
							</div>
							<h6 id="invest-details" class="text-muted small pt-2 mb-5"></h6>
							<div class="row mb-0">
								<div class="col-6">
									<button type="button" id="backToInput" class="btn w-100">Back</button>
								</div>
								<div class="col-6">
									<button type="submit" class="btn bg-primary text-light w-100 submit-btn">Start investment</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Right Column -->
				<div class="col-lg-4">
					<!-- Quick Stats -->
					<div class="card mb-4">
						<div class="card-header">
							<h6 class="mb-0">Trading Summary</h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Total invested</small>
								<h5 class="mb-0">$<?php echo number_format($Controller->totalInvested(), ) ?></h5>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Expected returns</small>
								<h5 class="mb-0"><?php echo $Controller->totalRetruns() ?></h5>
							</div>
							<div class="mb-3">
								<small class="text-muted d-block mb-1">Running investments</small>
								<h5 class="mb-0"><?php echo $Controller->runningTrades()['count'] ?></h5>
							</div>
							<div>
								<small class="text-muted d-block mb-1">Account Status</small>
								<span class="badge bg-success">Active</span>
							</div>
						</div>
					</div>
					<!-- Support -->
					<div class="card">
						<div class="card-body text-center">
							<i class="bi bi-headset fs-1 text-primary mb-3"></i>
							<h6 class="mb-2">Need Help?</h6>
							<p class="text-muted small mb-3">Our support team is here to assist you</p>
							<button class="btn bg-primary text-white w-100">Contact Support</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile Menu -->
	<?php include 'inc/mobile-menu.php'; ?>


	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
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
			let terms = '';

      function updateMinMax() {
        const selectedOption = $('#select_plan option:selected');
        planName = selectedOption.data('name');
				if (planName == undefined) return false;
				// alert(planName);
        interestRate = selectedOption.data('interest');
        day = selectedOption.data('day');
        duration = selectedOption.data('duration');
        recapture_type = selectedOption.data('recapture_type');
        interest_return_type = selectedOption.data('interest_return_type');
        min_limit = selectedOption.data('min-limit');
        max_limit = selectedOption.data('max-limit');
				terms = selectedOption.data('terms');
				// alert(terms);
				$("#limitText").text(`$${min_limit} - $${max_limit}`);
				// set new min and max
				$("#qty").attr("min", min_limit);
				$("#qty").attr("max", max_limit);
        $("#methodTitle").html(selectedOption.data('name')+" Profit Calculation");
        $("#invest-details").text(terms);
				// console.log(min_limit);
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
        var profit = parsedAmount * interestRate / 100;
				var monthly_profit = profit / duration;

        var totalProfit = profit;

        if (recapture_type == 2) {
          var total = totalProfit;
          var capitalBack = 0;
        } else {
          var total = totalProfit + parsedAmount;
          var capitalBack = parsedAmount;
        }

        if (interest_return_type == 2) {
          var investProfit = currency + totalProfit.toLocaleString();
          var returnType = "";
        } else {
          var investProfit = "LifeTime";
          var returnType = " + " + "LifeTime";
        }

        $("#plan_name").text(planName);
        $("#cal_amount").text(currency + parsedAmount.toLocaleString());
        $("#payment_interval").text(duration + " months");
        $("#profit").text(investProfit.toLocaleString());
        $("#capital_back").text(currency + capitalBack.toLocaleString());
        $("#total_invest").text(currency + total.toLocaleString() + returnType);
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
	<script src="assets/js/theme.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>