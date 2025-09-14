<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP">
	<meta name="keywords" content="Zenith Wealth">
	<meta name="description" content="Zenith Wealth">
	<link rel="canonical" href="https://zenithwealthpro.com/account/user/wallet-exchange" />
	<link rel="shortcut icon" href="https://zenithwealthpro.com/account/assets/global/images/MiZLv4Eb9oH3Boyfzlni.png"
		type="image/x-icon" />

	<link rel="icon" href="https://zenithwealthpro.com/account/assets/global/images/MiZLv4Eb9oH3Boyfzlni.png"
		type="image/x-icon" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/global/css/fontawesome.min.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/frontend/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/frontend/css/animate.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/frontend/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/global/css/nice-select.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/global/css/datatables.min.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/global/css/simple-notify.min.css" />
	<link rel="stylesheet" type="text/css"
		href="https://zenithwealthpro.com/account/assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/global/css/custom.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/frontend/css/magnific-popup.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/frontend/css/aos.css" />
	<link rel="stylesheet" href="https://zenithwealthpro.com/account/assets/frontend/css/styles.css?var=2.1" />

	<style>
		//The Custom CSS will be added on the site head tag 
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Zenith Wealth - Wallet Exchange
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
		<div class="panel-header">
			<div class="logo">
				<a href="https://zenithwealthpro.com/account">
					<img class="logo-unfold"
						src="https://zenithwealthpro.com/account/assets/global/images/DAISWlCl4In2YZKgI2fr.png" alt="Logo" />
					<img class="logo-fold" src="https://zenithwealthpro.com/account/assets/global/images/DAISWlCl4In2YZKgI2fr.png"
						alt="Logo" />
				</a>
			</div>
			<div class="nav-wrap">
				<div class="nav-left">
					<button class="sidebar-toggle">
						<i class="anticon anticon-arrow-left"></i>
					</button>
					<div class="mob-logo">
						<a href="https://zenithwealthpro.com/account">
							<img src="https://zenithwealthpro.com/account/assets/global/images/DAISWlCl4In2YZKgI2fr.png"
								alt="Site Name" />
						</a>
					</div>
				</div>
				<div class="nav-right">
					<div class="single-nav-right">

						<div class="single-right">
							<div class="color-switcher">
								<i icon-name="moon" class="dark-icon" data-mode="dark"></i>
								<i icon-name="sun" class="light-icon" data-mode="light"></i>
							</div>
						</div>


						<div class="single-nav-right user-notifications62">
							<button type="button" class="item notification-dot" data-bs-toggle="dropdown" aria-expanded="false">
								<i icon-name="bell-ring" class=""></i>
								<div class="number">0</div>
							</button>
							<div class="dropdown-menu dropdown-menu-end notification-pop">
								<div class="noti-head">Notifications <span>0</span></div>
								<div class="all-noti">

									<p>Notification Not Found</p>
								</div>

							</div>


						</div>


						<div class="single-right">
							<select name="language" id="" class="site-nice-select"
								onchange="window.location.href=this.options[this.selectedIndex].value;">
								<option value="https://zenithwealthpro.com/account/language-update?name=en" selected>English</option>
								<option value="https://zenithwealthpro.com/account/language-update?name=es">Spanish</option>
								<option value="https://zenithwealthpro.com/account/language-update?name=fr">Franch</option>
							</select>
						</div>
						<div class="single-right">
							<button type="button" class="item" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="anticon anticon-user"></i>
							</button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a href="https://zenithwealthpro.com/account/user/settings" class="dropdown-item" type="button"><i
											class="anticon anticon-setting"></i>Settings</a>
								</li>
								<li>
									<a href="https://zenithwealthpro.com/account/user/change-password" class="dropdown-item"
										type="button">
										<i class="anticon anticon-lock"></i>Change Password
									</a>
								</li>
								<li>
									<a href="https://zenithwealthpro.com/account/user/support-ticket/index" class="dropdown-item"
										type="button">
										<i class="anticon anticon-customer-service"></i>Support Tickets
									</a>
								</li>
								<li class="logout">
									<form method="POST" action="https://zenithwealthpro.com/account/logout" id="logout-form">
										<input type="hidden" name="_token" value="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP"> <a
											href="https://zenithwealthpro.com/account/logout" class="dropdown-item"
											onclick="event.preventDefault(); localStorage.clear();  $('#logout-form').submit();"><i
												class="anticon anticon-logout"></i>Logout</a>
									</form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Header-->

		<div class="desktop-screen-show">
			<div class="side-nav">
				<div class="side-wallet-box default-wallet mb-0">
					<div class="user-balance-card">
						<div class="wallet-name">
							<div class="name">Account Balance</div>
							<div class="default">Wallet</div>
						</div>
						<div class="wallet-info">
							<div class="wallet-id"><i icon-name="wallet"></i>Main Wallet</div>
							<div class="balance">$5</div>
						</div>
						<div class="wallet-info">
							<div class="wallet-id"><i icon-name="landmark"></i>Profit Wallet</div>
							<div class="balance">$3</div>
						</div>
					</div>
					<div class="actions">
						<a href="https://zenithwealthpro.com/account/user/deposit" class="user-sidebar-btn"><i
								class="anticon anticon-file-add"></i>Deposit</a>
						<a href="https://zenithwealthpro.com/account/user/schemas" class="user-sidebar-btn red-btn"><i
								class="anticon anticon-export"></i>Invest Now</a>
					</div>
				</div>
				<div class="side-nav-inside">
					<ul class="side-nav-menu">
						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/dashboard"><i
									class="anticon anticon-appstore"></i><span>Dashboard</span></a>
						</li>

						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/schemas"><i
									class="anticon anticon-check-square"></i><span>All Schema</span></a>
						</li>
						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/invest-logs"><i
									class="anticon anticon-copy"></i><span>Schema Logs</span></a>
						</li>

						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/transactions"><i
									class="anticon anticon-inbox"></i><span>All Transactions</span></a>
						</li>


						<li class="side-nav-item   ">
							<a href="https://zenithwealthpro.com/account/user/deposit"><i
									class="anticon anticon-file-add"></i><span>Add Money</span></a>
						</li>
						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/deposit/log"><i
									class="anticon anticon-folder-add"></i><span>Add Money Log</span></a>
						</li>

						<li class="side-nav-item active">
							<a href="https://zenithwealthpro.com/account/user/wallet-exchange"><i
									class="anticon anticon-transaction"></i><span>Wallet Exchange</span></a>
						</li>

						<li class="side-nav-item   ">
							<a href="https://zenithwealthpro.com/account/user/send-money"><i
									class="anticon anticon-export"></i><span>Send Money</span></a>
						</li>
						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/send-money/log"><i
									class="anticon anticon-cloud"></i><span>Send Money Log</span></a>
						</li>

						<li class="side-nav-item   ">
							<a href="https://zenithwealthpro.com/account/user/withdraw"><i
									class="anticon anticon-bank"></i><span>Withdraw</span></a>
						</li>
						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/withdraw/log"><i
									class="anticon anticon-credit-card"></i><span>Withdraw Log</span></a>
						</li>

						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/ranking-badge"><i
									class="anticon anticon-star"></i><span>Ranking Badge</span></a>
						</li>

						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/referral"><i
									class="anticon anticon-usergroup-add"></i><span>Referral</span></a>
						</li>

						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/settings"><i
									class="anticon anticon-setting"></i><span>Settings</span></a>
						</li>
						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/support-ticket/index"><i
									class="anticon anticon-tool"></i><span>Support Tickets</span></a>
						</li>

						<li class="side-nav-item ">
							<a href="https://zenithwealthpro.com/account/user/notification/all"><i
									class="anticon anticon-notification"></i><span>Notifications</span></a>
						</li>

						<li class="side-nav-item">
							<!-- Authentication -->
							<form method="POST" action="https://zenithwealthpro.com/account/logout">
								<input type="hidden" name="_token" value="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP"> <button
									type="submit" class="site-btn grad-btn w-100">
									<i class="anticon anticon-logout"></i><span>Logout</span>
								</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
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
										<a href="https://zenithwealthpro.com/account/user/kyc" class="site-btn-sm grad-btn"><i
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
									Please Verify Your Identity <a href="https://zenithwealthpro.com/account/user/kyc">Submit Now</a>
								</div>
							</div>
						</div>
						<!--Page Content-->
						<div class="row">
							<div class="col-xl-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">Wallet Exchange</h3>
									</div>
									<div class="site-card-body">
										<div class="progress-steps">
											<div class="single-step current">
												<div class="number">01</div>
												<div class="content">
													<h4>Wallet Details</h4>
													<p>Enter your Wallet details</p>
												</div>
											</div>
											<div class="single-step ">
												<div class="number">02</div>
												<div class="content">
													<h4>Success</h4>
													<p>Successfully Exchanged</p>
												</div>
											</div>
										</div>
										<div class="progress-steps-form">
											<form action="https://zenithwealthpro.com/account/user/wallet-exchange-now" method="post">
												<input type="hidden" name="_token" value="ynDPA8gYOyvzsdpB0EdOgNiHFxvQCV25Yebn7xlP">
												<div class="row">
													<div class="col-xl-4 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">From Wallet:</label>
														<div class="input-group">
															<select name="from_wallet" class="site-nice-select">
																<option value="1">Main Wallet (5 USD)</option>
																<option selected value="2">Profit Wallet (3 USD)</option>
															</select>
														</div>
													</div>
													<div class="col-xl-4 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">Enter Amount:</label>
														<div class="input-group">
															<input type="text" name="amount" class="form-control"
																oninput="this.value = validateDouble(this.value)" aria-label="Amount" id="amount"
																aria-describedby="basic-addon1">
															<span class="input-group-text" id="basic-addon1">USD</span>
														</div>
														<div class="input-info-text charge"></div>
													</div>

													<div class="col-xl-4 col-md-12">
														<label for="exampleFormControlInput1" class="form-label">To Wallet:</label>
														<div class="input-group">
															<select name="to_wallet" class="site-nice-select">
																<option selected value="1">Main Wallet (5 USD)</option>
																<option value="2">Profit Wallet (3 USD)</option>
															</select>
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
		<div class="mobile-screen-show">
			<div class="bottom-appbar">
				<a href="https://zenithwealthpro.com/account/user/dashboard" class="">
					<i icon-name="layout-dashboard"></i>
				</a>
				<a href="https://zenithwealthpro.com/account/user/deposit" class="">
					<i icon-name="download"></i>
				</a>
				<a href="https://zenithwealthpro.com/account/user/schemas" class="">
					<i icon-name="box"></i>
				</a>
				<a href="https://zenithwealthpro.com/account/user/referral" class="">
					<i icon-name="gift"></i>
				</a>
				<a href="https://zenithwealthpro.com/account/user/settings" class="">
					<i icon-name="settings"></i>
				</a>
			</div>
		</div>

		<!-- Show in 575px in Mobile Screen End -->

		<!-- Automatic Popup -->

		<!-- /Automatic Popup End -->
	</div>
	<!--/Full Layout-->

	<script src="https://zenithwealthpro.com/account/assets/global/js/jquery.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/jquery-migrate.js"></script>

	<script src="https://zenithwealthpro.com/account/assets/frontend/js/bootstrap.bundle.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/frontend/js/scrollUp.min.js"></script>

	<script src="https://zenithwealthpro.com/account/assets/frontend/js/owl.carousel.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/waypoints.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/frontend/js/jquery.counterup.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/jquery.nice-select.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/lucide.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/frontend/js/magnific-popup.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/frontend/js/aos.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/datatables.min.js" type="text/javascript"
		charset="utf8"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/simple-notify.min.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/frontend/js/main.js?var=5"></script>
	<script src="https://zenithwealthpro.com/account/assets/frontend/js/cookie.js"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/custom.js?var=5"></script>
	<script src="https://zenithwealthpro.com/account/assets/global/js/pusher.min.js"></script>
	<script>
			(function ($) {
				'use strict';

				let pusherAppKey = "";
				let pusherAppCluster = "mt1";
				let soundUrl = "https://zenithwealthpro.com/account/notification-tune";

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
					$.get('https://zenithwealthpro.com/account/user/latest-notification', function (data) {
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
	</script>
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
		src="https://zenithwealthpro.com/account/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>

		"use strict"

		var currency = "USD";

		var charge_type = "percentage";
		var charge = "0.05";

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
			var url = 'https://zenithwealthpro.com/account/theme-mode';
			$.get(url)
		});
	</script>







</body>

</html>