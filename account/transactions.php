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
	<meta name="keywords" content="Veloxa Wealth">
	<meta name="description" content="Veloxa Wealth">
	<link rel="canonical" href="./user/transactions" />
	<link rel="shortcut icon" href="./../icon-o.png"
		type="image/x-icon" />

	<link rel="icon" href="./../icon-o.png"
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

	<title>Veloxa Wealth - Schema Logs
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
							<div class="col-xl-12 desktop-screen-show">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">All Transactions</h3>
									</div>
									<div class="site-card-body">
										<div class="site-table">
											<div class="table-filter">
												<div class="filter">
													<form action="./user/transactions" method="get">
														<div class="search w-100">
															<input type="text" id="search" placeholder="Search" value="" name="query" />
															<!-- <input type="date" name="date" value="" /> -->
															<!-- <button type="submit" class="apply-btn"><i icon-name="search"></i>Search</button> -->
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
															<th>Type</th>
															<th>Amount</th>
															<th>Fee</th>
															<th>Status</th>
															<th>Source</th>
														</tr>
													</thead>
													<tbody>
														<?php
														if ( count($Controller->Transactions(10)) <= 0 ) {
															echo 'No data found';
														}
														foreach ($Controller->Transactions(10) as $key => $value) {
															?>
														<tr>
															<td>
																<div class="table-description">
																	<div class="icon">
																		<!-- config icons -->
																		<i icon-name="backpack"></i>
																	</div>
																	<div class="description">
																		<strong><?php echo $value['details'] ?></strong>
																		<div class="date"><?php echo date('M d Y H:i', strtotime($value['createdat'])) ?></div>
																	</div>
																</div>
															</td>
															<td><strong><?php echo $value['invoice'] ?></strong></td>
															<td>
																<div class="site-badge bg-primary text-capitalize"><?php echo $value['type'] ?></div>
															</td>
															<td>
																<strong>$<?php echo number_format($value['amount'],2) ?></strong>
															</td>
															<td><strong>$0</strong></td>
															<td>
																<?php
																if ( $value['status'] == 'success') echo '<div class="site-badge success">Completed</div>';
																elseif ( $value['status'] == 'failed') echo '<div class="site-badge bg-danger">Failed</div>';
																else echo '<div class="site-badge bg-warning">'.$value["status"].'</div>';
																?>
															</td>
															<td><strong><?php echo $value['source'] ?></strong></td>
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
									<div class="title">All Transactions</div>
									<div class="mobile-transaction-filter">
										<div class="filter w-100">
											<form action="javascript:void(0)" class="w-100">
												<div class="search w-100">
													<input type="text" placeholder="Search" value="" name="query" class="w-100" />
													<!-- <input type="date" name="date" value="" /> -->
													<!-- <button type="submit" class="apply-btn"><i icon-name="search"></i></button> -->
												</div>
											</form>
										</div>
									</div>
									<div class="contents">
										<?php
										if ( count($Controller->Transactions(100)) <= 0 ) {
											echo 'No data found';
										}
										foreach ($Controller->Transactions(100) as $key => $value) {
											?>
										<div class="single-transaction">
											<div class="transaction-left">
												<div class="transaction-des">
													<div class="transaction-title"><?php echo $value['details'] ?></div>
													<div class="transaction-id">#<?php echo $value['invoice'] ?></div>
													<div class="transaction-date"><?php echo date('M d Y H:i', strtotime($value['createdat'])) ?></div>
												</div>
											</div>
											<div class="transaction-right">
												<div class="transaction-amount">$<?php echo number_format($value['amount'],2) ?></div>
												<div class="transaction-fee sub">-0 USD Fee </div>
												<!-- <div class="transaction-gateway">System</div> -->
												<?php
												if ( $value['status'] == 'success') echo '<div class="transaction-status success">Completed</div>';
												elseif ( $value['status'] == 'failed') echo '<div class="transaction-status bg-danger">Failed</div>';
												else echo '<div class="transaction-status bg-warning">'.$value["status"].'</div>';
												?>
											</div>
										</div>
										<?php
										}
										?>
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
		src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js">
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