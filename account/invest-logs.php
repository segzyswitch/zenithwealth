<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="kLYeQlkSAq2dsFWe25IBwTP1vig2I5JjNUWxZvUn">
	<meta name="keywords" content="Zenith Wealth">
	<meta name="description" content="Zenith Wealth">
	<link rel="canonical" href="./user/invest-logs" />
	<link rel="shortcut icon" href="./assets/global/images/MiZLv4Eb9oH3Boyfzlni.png"
		type="image/x-icon" />

	<link rel="icon" href="./account/assets/global/images/MiZLv4Eb9oH3Boyfzlni.png"
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

	<title>Zenith Wealth - Schema Logs
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
										<h3 class="title">All Invested Schemas</h3>
									</div>
									<div class="site-card-body">
										<div class="site-datatable">
											<div class="row table-responsive">
												<div class="col-xl-12">
													<table id="dataTable" class="display data-table">
														<thead>
															<tr>
																<th>Icon</th>
																<th>Schema</th>
																<th>ROI</th>
																<th>Profit</th>
																<th>Period Remaining</th>
																<th>Capital Back</th>
																<th>Timeline</th>
															</tr>
														</thead>
														<tbody>
														</tbody>
													</table>
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
	<script src="./assets/frontend/js/aos.js"></script>
	<script src="./assets/global/js/datatables.min.js" type="text/javascript"
		charset="utf8"></script>
	<script src="./assets/global/js/simple-notify.min.js"></script>
	<script src="./assets/frontend/js/main.js?var=5"></script>
	<script src="./assets/frontend/js/cookie.js"></script>
	<script src="./assets/global/js/custom.js?var=5"></script>
	<script src="./assets/global/js/pusher.min.js"></script>
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
		src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>


		(function ($) {
			"use strict";
			var table = $('#dataTable').DataTable({
				processing: false,
				serverSide: true,
				ajax: "./user/invest-logs",
				columns: [
					{ data: 'icon', name: 'icon' },
					{ data: 'schema', name: 'schema' },
					{ data: 'rio', name: 'rio' },
					{ data: 'profit', name: 'profit' },
					{ data: 'period_remaining', name: 'period_remaining' },
					{ data: 'capital_back', name: 'capital_back' },
					{ data: 'next_profit_time', name: 'next_profit_time' },
				]
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