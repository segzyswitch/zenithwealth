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
	<link rel="stylesheet" href="assets/frontend/css/styles.css?var=2.1" />

	<style>
		/* //The Custom CSS will be added on the site head tag  */
		.site-head-tag {
			margin: 0;
			padding: 0;
		}
	</style>

	<title>Zenith Wealth - All Schema
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
							<div class="col-xl-12">
								<div class="site-card">
									<div class="site-card-header">
										<h3 class="title">All The Schemas</h3>
									</div>
									<div class="site-card-body">
										<div class="row">
											<?php
											foreach ($Controller->Plans() as $key => $value) {
											?>
											<div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="single-investment-plan">
													<img class="investment-plan-icon" src="./assets/global/images/qHO0xXvfRTXFj3ZiLTq5.png" />
													<?php if($value['recomend']==1) echo "<small class='feature-plan d-block'>Recomended</small>"; ?>

													<h3><?php echo $value['name'] ?> plan</h3>
													<p>Daily <?php echo $value['interest'] ?>%</p>
													<ul>
														<li> 	Investment Limit <span class="special">
																<?php echo "$".$value['min_limit']." - $".$value['max_limit'] ?>
															</span></li>
														<li>Capital Back
															<span>Yes</span>
														</li>
														<li>Duration <span><?php echo $value['duration'] ?></span>
														</li>
														<!-- <li>Profit Withdraw <span>Anytime</span></li> -->
														<li>Cancel <span> No</span></li>
													</ul>
													<div class="holidays"><span class="star">*</span> No Profit Holidays</div>
													<a href="./schema-preview?plan=<?php echo $value['id'] ?>"
														class="site-btn grad-btn w-100 centered"><i class="anticon anticon-check"></i>Invest Now</a>
												</div>
											</div>
											<?php
											}
											?>

											<!--
											<div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="single-investment-plan">
													<img class="investment-plan-icon"
														src="./assets/global/images/cm3jYayWlxFLLEdYhso5.png"
														alt="" />
													<div class="feature-plan">Popular Choice</div>

													<h3>Standard Plan</h3>
													<p>Daily 15%</p>
													<ul>
														<li>Investment <span class="special">
																$200-$1000
															</span></li>
														<li>Capital Back
															<span>Yes</span>
														</li>
														<li>Return Type <span>Period</span>
														</li>
														<li>Number of Period
															<span>1 Time</span>
														</li>
														<li>Profit Withdraw <span>Anytime</span></li>
														<li>Cancel <span> No</span></li>
													</ul>
													<div class="holidays"><span class="star">*</span> No Profit Holidays</div>
													<a href="./user/schema-preview/2"
														class="site-btn grad-btn w-100 centered"><i class="anticon anticon-check"></i>Invest Now</a>
												</div>
											</div>
											<div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="single-investment-plan">
													<img class="investment-plan-icon"
														src="./assets/global/images/Y6cMYY9vkrJj4z0gP7jX.png"
														alt="" />
													<div class="feature-plan">A</div>

													<h3>Advanced Plan</h3>
													<p>Daily 20%</p>
													<ul>
														<li>Investment <span class="special">
																$1500-$5000
															</span></li>
														<li>Capital Back
															<span>Yes</span>
														</li>
														<li>Return Type <span>Period</span>
														</li>
														<li>Number of Period
															<span>1 Time</span>
														</li>
														<li>Profit Withdraw <span>Anytime</span></li>
														<li>Cancel <span> No</span></li>
													</ul>
													<div class="holidays"><span class="star">*</span> No Profit Holidays</div>
													<a href="./user/schema-preview/3"
														class="site-btn grad-btn w-100 centered"><i class="anticon anticon-check"></i>Invest Now</a>
												</div>
											</div>
											<div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="single-investment-plan">
													<img class="investment-plan-icon"
														src="./assets/global/images/NjSS6z1y7aEdJrgPDie7.png"
														alt="" />
													<div class="feature-plan">B</div>

													<h3>Pro Plan</h3>
													<p>Daily $25</p>
													<ul>
														<li>Investment <span class="special">
																$6000-$25000
															</span></li>
														<li>Capital Back
															<span>Yes</span>
														</li>
														<li>Return Type <span>Period</span>
														</li>
														<li>Number of Period
															<span>1 Time</span>
														</li>
														<li>Profit Withdraw <span>Anytime</span></li>
														<li>Cancel <span> No</span></li>
													</ul>
													<div class="holidays"><span class="star">*</span> No Profit Holidays</div>
													<a href="./user/schema-preview/4"
														class="site-btn grad-btn w-100 centered"><i class="anticon anticon-check"></i>Invest Now</a>
												</div>
											</div>
											<div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="single-investment-plan">
													<img class="investment-plan-icon"
														src="./assets/global/images/bbSokFRzKhnq6n6Uhtks.png"
														alt="" />
													<div class="feature-plan">A</div>

													<h3>Gold Plan</h3>
													<p>Daily 30%</p>
													<ul>
														<li>Investment <span class="special">
																$30000-$100000
															</span></li>
														<li>Capital Back
															<span>Yes</span>
														</li>
														<li>Return Type <span>Period</span>
														</li>
														<li>Number of Period
															<span>1 Time</span>
														</li>
														<li>Profit Withdraw <span>Anytime</span></li>
														<li>Cancel <span> No</span></li>
													</ul>
													<div class="holidays"><span class="star">*</span> No Profit Holidays</div>
													<a href="./user/schema-preview/5"
														class="site-btn grad-btn w-100 centered"><i class="anticon anticon-check"></i>Invest Now</a>
												</div>
											</div>
											<div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="single-investment-plan">
													<img class="investment-plan-icon"
														src="./assets/global/images/vpMa9dkrafiUh74IZGnh.png"
														alt="" />
													<div class="feature-plan">A</div>

													<h3>Diamond Plans</h3>
													<p>Daily 40%</p>
													<ul>
														<li>Investment <span class="special">
																$100000-$500000
															</span></li>
														<li>Capital Back
															<span>Yes</span>
														</li>
														<li>Return Type <span>Period</span>
														</li>
														<li>Number of Period
															<span>1 Time</span>
														</li>
														<li>Profit Withdraw <span>Anytime</span></li>
														<li>Cancel <span> No</span></li>
													</ul>
													<div class="holidays"><span class="star">*</span> No Profit Holidays</div>
													<a href="./user/schema-preview/6"
														class="site-btn grad-btn w-100 centered"><i class="anticon anticon-check"></i>Invest Now</a>
												</div>
											</div>
											-->
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
	<script src="./assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
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

	<script type="text/javascript" src="./assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
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