<?php
require '../config/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="kLYeQlkSAq2dsFWe25IBwTP1vig2I5JjNUWxZvUn">
	<meta name="keywords" content="Velloxa Wealth">
	<meta name="description" content="Velloxa Wealth">
	<link rel="canonical" href="./user/deposit" />
	<link rel="shortcut icon" href="./../icon-o.png" type="image/x-icon" />

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
	<link rel="stylesheet" href="./assets/frontend/css/styles.css?var=2.1" />

	<style>
		//The Custom CSS will be added on the site head tag 
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Velloxa Wealth - Deposit Now
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
						<div class="site-card mb-4">
							<div class="site-card-header">
								<h3 class="title">Select payment method</h3>
							</div>
							<div class="site-card-body pb-4">
								<div class="row g-3">
									<?php
									foreach ($Controller->cryptoWallets() as $key => $value) {
										?>
										<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
											<div class="w-100 single-investment-plan rounded-3 p-2" style="background-color:rgba(255, 255, 255, 0.1);">
												<h5 class="p-3"><?php echo $value['name']; ?></h5>
												<div class="card-body d-flex">
													<img src="<?php echo $value['icon']; ?>"
														class="w-100" width="80"
														style="max-width:80px;"
														alt="<?php echo $value['name']; ?>"
													/>
													<button class="feature-plan my-auto ms-auto deposit-process position-static p-2 ps-3"
														data-name="<?php echo $value['name']; ?>" data-code="<?php echo $value['wallet_address']; ?>"
														data-qr="<?php echo $value['qrcode']; ?>" data-minimum="$10" data-maximum="$100,000">
														Select <i class="bi bi-box-arrow-up-right ms-2"></i>
													</button>
												</div>
											</div>
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-12 desktop-screen-show">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">All Deposit Log</h3>
									</div>
									<div class="site-card-body">
										<div class="site-table">
											<div class="table-filter">
												<div class="filter">
													<form action="#" method="get">
														<div class="search">
															<input type="text" id="search" placeholder="Search" value="" name="query">
															<!-- <input type="date" name="date" value="">
															<button type="submit" class="apply-btn">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
																	stroke-linecap="round" stroke-linejoin="round" data-lucide="search" icon-name="search"
																	class="lucide lucide-search">
																	<circle cx="11" cy="11" r="8"></circle>
																	<path d="m21 21-4.3-4.3"></path>
																</svg>
																Search
															</button> -->
														</div>
													</form>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Description</th>
															<th>Transactions ID</th>
															<th>Amount</th>
															<th>Fee</th>
															<th>Status</th>
															<!-- <th>Method</th> -->
														</tr>
													</thead>
													<tbody>
													<?php
													if ( count($Controller->Deposits()) <= 0 ) {
													?>
														<tr>
															<td colspan="5" class="text-center">
																<h5>No data found</h5>
															</td>
														</tr>
													<?php
													}
													foreach ($Controller->Deposits() as $key => $value) {
														?>
														<tr>
															<td>
																<div class="table-description">
																	<div class="icon">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
																			fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
																			stroke-linejoin="round" data-lucide="arrow-down-left" icon-name="arrow-down-left"
																			class="lucide lucide-arrow-down-left">
																			<path d="M17 7 7 17"></path>
																			<path d="M17 17H7V7"></path>
																		</svg>
																	</div>
																	<div class="description">
																		<strong><?php echo $value['details'] ?></strong>
																		<div class="date"><?php echo date('M d Y H:i', strtotime($value['createdat'])) ?></div>
																	</div>
																</div>
															</td>
															<td><strong><?php echo $value['invoice']; ?></strong></td>
															<td><strong class="green-color">+<?php echo number_format($value['amount']); ?> USD</strong>
															</td>
															<td><strong class="red-color">-0 USD</strong>
															</td>
															<td>
																<?php
																if ( $value['status'] == 'success') echo '<div class="site-badge success">Completed</div>';
																elseif ( $value['status'] == 'failed') echo '<div class="site-badge bg-danger">Failed</div>';
																else echo '<div class="site-badge bg-warning">'.$value["status"].'</div>';
																?>
															</td>
															<!-- <td><strong><?php echo $value['source'] ?></strong></td> -->
														</tr>
														<?php
													}
													?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 mobile-screen-show">
								<!-- Transactions -->
								<div class="all-feature-mobile mobile-transactions mb-3">
									<div class="title">All Deposit Log</div>
									<div class="mobile-transaction-filter">
										<div class="filter">
											<form action="#" method="get">
												<div class="search">
													<input type="text" placeholder="Search" value="" name="query">
													<input type="date" name="date" value="">
													<button type="submit" class="apply-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24"
															height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="round" data-lucide="search" icon-name="search"
															class="lucide lucide-search">
															<circle cx="11" cy="11" r="8"></circle>
															<path d="m21 21-4.3-4.3"></path>
														</svg></button>
												</div>
											</form>
										</div>
									</div>
									<div class="contents">
										<div class="single-transaction">
											<div class="transaction-left">
												<div class="transaction-des">
													<div class="transaction-title">Deposit With Bitcoin
													</div>
													<div class="transaction-id">TRXZOVXJB40WW</div>
													<div class="transaction-date">Sep 14 2025 10:29</div>
												</div>
											</div>
											<div class="transaction-right">
												<div class="transaction-amount add">
													+ 12670 USD</div>
												<div class="transaction-fee sub">
													-0 USD Fee </div>
												<div class="transaction-gateway">BTC</div>


												<div class="transaction-status pending">Pending</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row d-none">
							<div class="col-xl-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Add Money</h3>
										<div class="card-header-links">
											<a href="./deposit-log" class="card-header-link">Deposit
												History</a>
										</div>
									</div>
									<div class="site-card-body">
										<div class="progress-steps">
											<div class="single-step current">
												<div class="number">01</div>
												<div class="content">
													<h4>Deposit Amount</h4>
													<p>Enter your deposit details</p>
												</div>
											</div>
											<div class="single-step ">
												<div class="number">02</div>
												<div class="content">
													<h4>Success</h4>
													<p>Success Your Deposit</p>
												</div>
											</div>
										</div>
										<div class="progress-steps-form">
											<form action="#" method="post" enctype="multipart/form-data">
												<input type="hidden" name="make_deposit" value="kLYeQlkSAq2dsFWe25IBwTP1vig2I5JjNUWxZvUn">
												<div class="row">
													<div class="col-xl-6 col-md-12 mb-3">
														<label for="exampleFormControlInput1" class="form-label">Payment Method:</label>
														<div class="input-group">
															<select name="gateway_code" id="gatewaySelect" class="site-nice-select text-light"
																required>
																<option selected disabled>--Select Gateway--</option>
																<?php
																foreach ($Controller->cryptoWallets() as $key => $value) {
																	echo '<option value="' . $value['name'] . '">' . $value['name'] . '</option>';
																}
																?>
															</select>
														</div>
														<div class="input-info-text charge"></div>
													</div>
													<div class="col-xl-6 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Enter Amount:</label>
														<div class="input-group">
															<input type="text" name="amount" class="form-control"
																oninput="this.value = validateDouble(this.value)" aria-label="Amount" id="amount"
																required />
															<span class="input-group-text" id="basic-addon1">USD</span>
														</div>
														<div class="input-info-text min-max"></div>
													</div>
													<div class="col-12">
														<label class="form-label">Proof of depoit: <small>(optional)</small></label>
														<div class="input-group mb-1">
															<input type="file" name="image" class="form-control" />
														</div>
														<small class="d-block text-muted">Uploading a screenshot or reciept makes transction process
															faster</small>
													</div>
												</div>

												<div class="row manual-row">

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
																<td><strong>Payment Method</strong></td>
																<td id="logo"><img src="" class="payment-method" alt=""></td>
															</tr>
															<tr>
																<td><strong>Total</strong></td>
																<td class="total"></td>
															</tr>
															<tr>
																<td><strong>Conversion Rate</strong></td>
																<td class="conversion-rate"></td>
															</tr>
															<tr>
																<td><strong>Pay Amount</strong></td>
																<td class="pay-amount"></td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="buttons">
													<button type="submit" class="site-btn blue-btn">
														Proceed to Payment<i class="anticon anticon-double-right"></i>
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

		<!-- Deposit modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content" style="background-color:#053547;">
					<div class="modal-header primary--light border-0">
						<h5 class="modal-title" id="gatewayTitle"></h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form method="POST" id="depositForm" action="#" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="w-100 qr-wrapper flex-column" style="display:none;">
								<div class="mx-auto col-6 col-sm-5 p-3 rounded-3" style="background-color:rgba(255,255,255,.1);">
									<div class="w-100 mb-2"><img src="" class="w-100" /></div>
									<small class="d-block text-light qr-text text-center lh-1"></small>
								</div>
							</div>
							<div class="mb-3">
								<label for="wallet_addr" class="col-form-label">Wallet Address:</label>
								<div class="input-group mb-1">
									<input type="hidden" name="wallet_type" id="wallet_type">
									<input type="text" class="form-control" id="wallet_addr" name="wallet_addr" readonly />
									<button type="button" id="copyButton" class="input-group-text">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
											class="bi bi-copy" viewBox="0 0 16 16">
											<path fill-rule="evenodd"
												d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
										</svg>
										<span class="ps-1">Copy</span>
									</button>
								</div>
								<small class="text-muted d-block mb-2mb-3" id="qrWarning"></small>
							</div>
							<div class="mb-3">
								<label for="amount" class="col-form-label">Amount:</label>
								<div class="input-group mb-1">
									<input type="number" min="10" max="100000" class="form-control" id="amount" name="amount"
										placeholder="Enter Amount" required />
									<span class="input-group-text" id="basic-addon2">USD</span>
								</div>
								<small class="text-muted d-block mb-3" id="paymentLimitTitle"></small>
							</div>
							<div class="mb-3">
								<label for="proof" class="col-form-label">Payment Proof:</label>
								<input type="file" class="form-control" id="proof" name="image" required />
								<p style="line-height:1em;" class="pt-1 text-muted"><small>Uploading proof (screenshot or reciept) makes
										confirmation faster</small></p>
							</div>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="make_deposit" />
							<button type="button" class="btn text-danger me-auto" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn primary-btn submit-btn px-4">Make payment</button>
						</div>
					</form>
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

	<script src="assets/global/js/jquery.min.js"></script>
	<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script src="../js/forms.js"></script>

	<script>
		"use strict";
		$(document).ready(function () {
			$('.deposit-process').click(function () {
				const name = $(this).data('name');
				const code = $(this).data('code');
				const qrcode = $(this).data('qr');
				const minimum = $(this).data('minimum');
				const maximum = $(this).data('maximum');
				$('#wallet_addr').val(code);
				$('#wallet_type').val(name);

				const gatewayTitle = "Deposit with " + name;
				const paymentLimit = `Deposit Limit ${minimum} - ${maximum}`;

				if (qrcode) {
					// alert(qrcode);
					$('.qr-wrapper').addClass('d-flex');
					$('.qr-wrapper img').attr('src', qrcode);
					$('.qr-wrapper .qr-text').text(`Scan QR code to send ${name} to your wallet`);
				}else $('.qr-wrapper').removeClass('d-flex');

				$('#qrWarning').text(`Send only ${name} to this wallet address, sending other crypto may result in performance loss`);
				$('#paymentLimitTitle').text(paymentLimit);
				$('#gatewayTitle').text(gatewayTitle);
				$('#exampleModal').modal('show');
			});

			$('.gateway-details').click(function () {
				const details = $(this).data('details');
				$('.payment-details').empty();
				$('.payment-details').append(details);
			});

			// Copy wallet
			$('#copyButton').click(function () {
				// Select the text from the input
				var input = $('#wallet_addr');
				input.focus();
				input.select();
				input[0].setSelectionRange(0, 99999); // For mobile devices
				// Copy the text inside the input field
				document.execCommand("copy");
				// Notify the user
				notifySuccess("Copied to clipboard");
			});
		});
	</script>

	<script src="assets/global/js/jquery-migrate.js"></script>
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
	<script src="assets/frontend/js/main.js?var=5"></script>
	<script src="assets/frontend/js/cookie.js"></script>
	<script src="assets/global/js/custom.js?var=5"></script>
	<!-- <script src="./assets/global/js/pusher.min.js"></script>
	<script>
			(function ($) {
				'use strict';

				let pusherAppKey = "";
				let pusherAppCluster = "mt1";
				let soundUrl = "./notification-tune";

				var notification = new Pusher(pusherAppKey, {
					encrypted: true,
					cluster: pusherAppCluster,
				});
				var channel = notification.subscribe('user-notification62');
				channel.bind('notification-event', function (result) {
					playSound();
					latestNotification();
					notifyToast(result);
				});

				function latestNotification() {
					$.get('./user/latest-notification', function (data) {
						$('.user-notifications62').html(data);
					})
				}

				function notifyToast(data) {
					new Notify({
						status: 'info',
						title: data.data.title,
						text: data.data.notice,
						effect: 'slide',
						speed: 300,
						customClass: '',
						customIcon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>',
						showIcon: true,
						showCloseButton: true,
						autoclose: true,
						autotimeout: 9000,
						gap: 20,
						distance: 20,
						type: 1,
						position: 'right bottom',
						customWrapper: '<div><a href="' + data.data.action_url + '" class="learn-more-link">Explore<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a></div>',
					})

				}

				function playSound() {
					$.get(soundUrl, function (data) {
						var audio = new Audio(data);
						audio.play();
						audio.muted = false;
					});
				}



			})(jQuery);
	</script> -->
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

	<script>
		var globalData;
		var currency = "USD"
		$("#gatewaySelect").on('change', function (e) {
			"use strict"
			e.preventDefault();
			$('.manual-row').empty();
			var code = $(this).val()
			var url = './user/deposit/gateway/:code';
			url = url.replace(':code', code);
			$.get(url, function (data) {

				globalData = data;
				$('.charge').text('Charge ' + data.charge + ' ' + (data.charge_type === 'percentage' ? ' % ' : currency))
				$('.conversion-rate').text('1' + ' ' + currency + ' = ' + data.rate + ' ' + data.currency)


				$('.min-max').text('Minimum ' + data.minimum_deposit + ' ' + currency + ' and ' + 'Maximum ' + data.maximum_deposit + ' ' + currency)
				$('#logo').html(`<img class="payment-method" src='${data.gateway_logo}'>`);
				var amount = $('#amount').val()

				if (Number(amount) > 0) {
					$('.amount').text((Number(amount)))
					var charge = data.charge_type === 'percentage' ? calPercentage(amount, data.charge) : data.charge
					$('.charge2').text(charge + ' ' + currency)
					$('.total').text((Number(amount) + Number(charge)) + ' ' + currency)
				}

				if (data.credentials !== undefined) {
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

				var total = (Number(amount) + Number(charge));

				$('.total').text(total + ' ' + currency)

				$('.pay-amount').text(total * globalData.rate + ' ' + globalData.currency)
			})


		});
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