<?php
require '../config/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="canonical" href="./user/dashboard" />
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
		/* // The Custom CSS will be added on the site head tag  */
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Zenith Wealth - Dashboard</title>


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
						<div class="desktop-screen-show">

							<div class="row d-none">
								<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="user-ranking">
										<h4>Level 1</h4>
										<p>Hyip Member</p>
										<div class="rank" data-bs-toggle="tooltip" data-bs-placement="top"
											title="By signing up to the account">
											<img src="./assets/global/images/sCQgIyl0OKzFiO73nmWF.svg"
												alt="">
										</div>
									</div>
								</div>
								<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
									<div class="site-card">
										<div class="site-card-header">
											<h3 class="title">Referral URL</h3>
										</div>
										<div class="site-card-body">
											<div class="referral-link">
												<div class="referral-link-form">
													<input type="text" value="./register?invite=qF4iT7V5Il"
														id="refLink" />
													<button type="submit" onclick="copyRef()">
														<i class="anticon anticon-copy"></i>
														<span id="copy">Copy</span>
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

							<div class="row user-cards ">
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-inbox"></i></div>
										<div class="content">
											<h4><span class="count">1</span></h4>
											<p>All Transactions</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-file-add"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span></h4>
											<p>Total Deposit</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-check-square"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span></h4>
											<p>Total Investment</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-credit-card"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">8</span></h4>
											<p>Total Profit</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-arrow-right"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span></h4>
											<p>Total Transfer </p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-money-collect"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span></h4>
											<p>Total Withdraw</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-gift"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span>
											</h4>
											<p>Referral Bonus</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-account-book"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span></h4>
											<p>Deposit Bonus</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-gold"></i></div>
										<div class="content">
											<h4><b>$</b><span class="count">0</span></h4>
											<p>Investment Bonus</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-inbox"></i></div>
										<div class="content">
											<h4 class="count">0</h4>
											<p>Total Referral</p>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-radar-chart"></i></div>
										<div class="content">
											<h4 class="count">1</h4>
											<p>Rank Achieved</p>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="single">
										<div class="icon"><i class="anticon anticon-question"></i></div>
										<div class="content">
											<h4 class="count">0</h4>
											<p>Total Ticket</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-12">
									<div class="site-card">
										<div class="site-card-header">
											<h3 class="title">Recent Transactions</h3>
										</div>
										<div class="site-card-body table-responsive">
											<div class="site-datatable">
												<table class="display data-table">
													<thead>
														<tr>
															<th>Description</th>
															<th>Transactions ID</th>
															<th>Type</th>
															<th>Amount</th>
															<th>Fee</th>
															<th>Status</th>
															<th>Gateway</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="table-description">
																	<div class="icon">
																		<i icon-name="backpack
																				 ">
																		</i>
																	</div>


																	<div class="description">
																		<strong>Signup Bonus </strong>
																		<div class="date">Aug 20 2025 05:08</div>
																	</div>
																</div>
															</td>
															<td><strong>TRXNHMD7ENRGG</strong></td>
															<td>
																<div class="site-badge primary-bg">Signup bonus</div>
															</td>

															<td><strong class="">8 USD</strong>
															</td>
															<td><strong>0 USD</strong></td>
															<td>


																<div class="site-badge success">Success</div>
															</td>
															<td><strong>System</strong></td>
														</tr>


													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mobile-screen-show">
							<div class="row">
								<div class="col-12">
									<div class="user-ranking-mobile">
										<div class="icon"><img src="./assets/global/materials/user.png" alt="user" /></div>
										<div class="name">
											<h4>Hi, <?php echo $Controller->fullName(); ?></h4>
											<p>Hyip Member - <span>Level 1</span></p>
										</div>
										<div class="rank-badge"><img src="./assets/global/images/sCQgIyl0OKzFiO73nmWF.svg" alt="" /></div>
									</div>
									<div class="user-wallets-mobile">
										<img src="./assets/frontend/materials/wallet-shadow.png" alt=""
											class="wallet-shadow">
										<div class="head">All Wallets in USD</div>
										<div class="one">
											<div class="balance">
												<span class="symbol">$</span><?php echo number_format($user_info['wallet_bal']) ?><span class="after-dot">.00 </span>
											</div>
											<div class="wallet">Main Wallet</div>
										</div>
										<div class="one p-wal">
											<div class="balance">
												<span class="symbol">$</span><?php echo number_format($user_info['trading_bal']) ?><span class="after-dot">.00 </span>
											</div>
											<div class="wallet">Profit Wallet</div>
										</div>
									</div>
								</div>

								<div class="col-12">
									<div class="mob-shortcut-btn">
										<a href="./deposit"><i icon-name="download"></i> Deposit</a>
										<a href="./schemas"><i icon-name="box"></i> Investment</a>
										<a href="./send-money"><i icon-name="send"></i> Withdraw</a>
									</div>
								</div>


								<div class="col-12">
									<!-- all Statistic -->
									<div class="all-feature-mobile mb-3 mobile-screen-show">
										<div class="title">All Statistic</div>
										<div class="row">
											<div class="col-12">
												<div class="all-cards-mobile">
													<div class="contents row">
														<div class="col-12">
															<div class="single-card">
																<div class="icon"><i icon-name="arrow-left-right"></i></div>
																<div class="content">
																	<div class="amount count"><?php echo count($Controller->Transactions(50)) ?></div>
																	<div class="name">All Transactions</div>
																</div>
															</div>
														</div>
														<div class="col-12">
															<div class="single-card">
																<div class="icon"><i icon-name="download"></i></div>
																<div class="content">
																	<div class="amount"><span><?php echo $Controller->totalDeposits()['sum']; ?></span>
																	</div>
																	<div class="name">Total Deposit</div>
																</div>
															</div>
														</div>
														<div class="col-12">
															<div class="single-card">
																<div class="icon"><i icon-name="box"></i></div>
																<div class="content">
																	<div class="amount">$<span class="count">0</span>
																	</div>
																	<div class="name">Total Investment</div>
																</div>
															</div>
														</div>
													</div>
													<div class="moretext-2">
														<div class="contents row">
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="credit-card"></i></div>
																	<div class="content">
																		<div class="amount"> $<span class="count">8</span>
																		</div>
																		<div class="name">Total Profit</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="log-in"></i></div>
																	<div class="content">
																		<div class="amount">$<span class="count">0</span>
																		</div>
																		<div class="name">Total Transfer</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="send"></i></div>
																	<div class="content">
																		<div class="amount"> $<span class="count">0</span>
																		</div>
																		<div class="name">Total Withdraw</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="users-2"></i></div>
																	<div class="content">
																		<div class="amount"> $<span class="count">0</span>
																		</div>
																		<div class="name">Referral Bonus</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="anchor"></i></div>
																	<div class="content">
																		<div class="amount">$<span class="count">0</span>
																		</div>
																		<div class="name">Deposit Bonus</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="archive"></i></div>
																	<div class="content">
																		<div class="amount">$<span class="count">0</span>
																		</div>
																		<div class="name"> Investment Bonus</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="gift"></i></div>
																	<div class="content">
																		<div class="amount count">0</div>
																		<div class="name"> Total Referral</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="award"></i></div>
																	<div class="content">
																		<div class="amount count"> 1</div>
																		<div class="name">Rank Achieved</div>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="single-card">
																	<div class="icon"><i icon-name="alert-triangle"></i>
																	</div>
																	<div class="content">
																		<div class="amount count">0</div>
																		<div class="name"> Total Ticket</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="centered">
														<button class="moreless-button-2 site-btn-sm grad-btn">Load more</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Recent Transactions -->
									<div class="all-feature-mobile mobile-transactions mb-3 mobile-screen-show">
										<div class="title">Recent Transactions</div>
										<div class="contents">

											<div class="single-transaction">
												<div class="transaction-left">
													<div class="transaction-des">
														<div class="transaction-title">Signup Bonus
														</div>
														<div class="transaction-id">TRXNHMD7ENRGG</div>
														<div class="transaction-date">Aug 20 2025 05:08</div>
													</div>
												</div>
												<div class="transaction-right">
													<div class="transaction-amount ">
														8 USD</div>
													<div class="transaction-fee sub">-0 USD Fee </div>
													<div class="transaction-gateway">System</div>


													<div class="transaction-status success">Success</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-12">
									<div class="mobile-ref-url mb-4">
										<div class="all-feature-mobile">
											<div class="title">Referral URL</div>
											<div class="mobile-referral-link-form">
												<input type="text" value="./register?invite=qF4iT7V5Il"
													id="refLink" />
												<button type="submit" onclick="copyRef()">
													<span id="copy">Copy</span>
												</button>
											</div>
											<p class="referral-joined">0 peoples are joined by using this URL</p>
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
	<script src="./assets/global/js/pusher.min.js"></script>

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

	<script type="text/javascript" src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
	<script>
		function copyRef() {
			/* Get the text field */
			var textToCopy = $('#refLink').val();
			// Create a temporary input element
			var tempInput = $('<input>');
			$('body').append(tempInput);
			tempInput.val(textToCopy).select();
			// Copy the text from the temporary input
			document.execCommand('copy');
			// Remove the temporary input element
			tempInput.remove();
			$('#copy').text('Copied'); var copyApi = document.getElementById("refLink");
			/* Select the text field */
			copyApi.select();
			copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
			/* Copy the text inside the text field */
			document.execCommand('copy');
			$('#copy').text('Copied')

		}

		// Load More
		$('.moreless-button').click(function () {
			$('.moretext').slideToggle();
			if ($('.moreless-button').text() == "Load more") {
				$(this).text("Load less")
			} else {
				$(this).text("Load more")
			}
		});

		$('.moreless-button-2').click(function () {
			$('.moretext-2').slideToggle();
			if ($('.moreless-button-2').text() == "Load more") {
				$(this).text("Load less")
			} else {
				$(this).text("Load more")
			}
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