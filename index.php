<!DOCTYPE html>

<head>
	<!--metatags-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta name="viewport" content="width=1300"> -->
	<!----421---->

	<!--title-->
	<title>Velloxa Wealth</title>
	<link rel="shortcut icon" href="icon-o.png" type="image/x-icon">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Bootstrap_Carousel_Touch_Slider.css">

	<!--animation-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/hover-min.css">

	<!--fonticons-->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
	<script src="js/calc.js"></script>

	<!--sitefonts-->
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap"
		rel="stylesheet">

	<!--styles-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">

	<script type="text/javascript" src="js/wow.min.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.formstyler.min.js"></script>

	<script>
		(function ($) {
			$(function () {
				$('input, select').styler();
			});
		})(jQuery);
	</script>
</head>

<body>

	<main class="w-100 overflow-hidden">
		<?php include 'inc/header.php' ?>

		<section class="section_2">
			<div class="container">
				<div class="col-md-12 pb-5">
					<div class="row" style="overflow:hidden;">
						<div class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
							<div class="wow slideInUp" data-wow-delay="1s" data-wow-duration="1s">
								<div class="title-xlarge " id="title-xlarge-responsive">We</div>
							</div>
						</div>
						<div class="title-xlarge wow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
							make use of the best
						</div>
						<div class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
							<div class="wow slideInDown" data-wow-delay="1s" data-wow-duration="1s">
								<div class="title-xlarge ">trading strategies?</div>
							</div>
						</div>
						<div class="title-h5 wow fadeInDown" data-wow-delay="1.6s" style="max-width: 440px; ">
							<span class="light_white" style="color: #C86567;font-weight: 400;">Velloxa Wealth
								company's knows how to safely increase your capital</span>
						</div>
						<div class="title-h2 wow fadeInUp" data-wow-delay="2s">
							<span class="h2_light">We are fully automated!</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container" style="background-color:#101824;">
			<div class="row" style="margin-top:25px;">
				<div class="col-md-7" style="float:none;margin:auto;">
					<div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden; max-width:100%;">
						<iframe src="vid01.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope;"
							style="position:absolute; width:100%; height:100%; border: none;" allowfullscreen="">
						</iframe>
						<!-- <iframe src="vid01.mp4" style="position:absolute; width:100%; height:100%; border: none;"></iframe> -->
					</div>
				</div>
			</div>
		</section>

		<section class="section_22_plans">
			<div class="container clearfix">
				<div class="title-h5" id="offers">Investment offers</div>
				<div class="title-xlarge wow fadeInUp" data-wow-offset="200">
					<div class="wow pulse" data-wow-delay="1s" data-wow-offset="200">
						Our plans</div>
				</div>
				<div class="col-md-2">
					<div class="row"></div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<p id="small_offers">Velloxa Wealth offer plans in differential interest rate. Our clients
							can increase the amount investments. It will lead to increase in percent of profit. Greater
							amount of investment - the greater the profit!</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="row"></div>
				</div>
				<div class="row" id="plans-container">
					<script>
						document.addEventListener("DOMContentLoaded", function () {
							fetch('fetch-plans.json')
								.then(res => res.json())
								.then(plans => {
									let container = document.getElementById("plans-container");
									plans.forEach(plan => {
										container.innerHTML += `
																				<div class="col-md-3 col-sm-6 col-xs-12">
																						<div class="pricing-container">  
																								<div class="pricing-table">
																										<div class="tb-border"></div>
																										<div class="lr-border"></div>
																										<div class="pricing-inner">
																												${plan.is_trending == 1 ? '<span class="badge badge-warning">Trending</span>' : ''}
																												<p><b class="plan-name-text">${plan.name}</b></p>
																												<div class="pricing-price-title-wrapper">
																														<div class="pricing-price-title title-h5">${plan.percent}</div>
																														<div class="pricing-price-subtitle">${plan.duration}</div>
																												</div>
																												<div class="plan-desc">
																														<figure class="pricing-row">Minimum deposit - ${plan.min}</figure>
																														<figure class="pricing-row">Maximum deposit - ${plan.max}</figure>
																														<figure class="pricing-row">Quality Investment Experience</figure>
																														<figure class="pricing-row">24/7 Phone and Email Support</figure>
																														<figure class="pricing-row">Instant Withdrawal</figure>
																												</div>
																												<div class="pricing-footer">
																														<button><a href="account/register" class="btn-no-bg-white">Sign Up</a></button>
																												</div>
																										</div>
																								</div>
																						</div>
																				</div>
																		`;
									});
								});
						});
					</script>
				</div>
			</div>
		</section>

		<section class="section_4 clearfix">
			<div class="container clearfix">
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="title-wrapper title-wrapper-main">
							<div class="wow fadeInLeft" data-wow-offset="200">
								<div class="wow slideInUp" data-wow-delay="1s" data-wow-duration="1s" data-wow-offset="200">
									<div class="subtitle-big">Welcome</div>
								</div>
							</div>
							<div class="wow fadeInRight" data-wow-offset="200">
								<div class="wow slideInDown" data-wow-delay="1s" data-wow-offset="200">
									<div class="title-h5" style="margin: 0px 0 20px;"><span class="h5_light">to
											Velloxa Wealth</span></div>
								</div>
							</div>
						</div>
						<div class="home_video1">
							<!--span><i class="fa fa-play"></i>Our Company Video</span-->
							<div class="index_about_content_left" style="padding: 10px 20px 20px 0px;">
								<p class="border-left-text" style="margin: 10px auto 30px;">Velloxa Wealth
									company's works in the sphere of investment. We have legal registered in UK. The
									clients cooperating with us conclude the agreement on placement of the capitals then
									they draw interest from profit. Client does not need to think independently, which
									project investing in is more profitable. All strategy has already thought over and
									can be presented in the form of the step-by-step plan.</p>
								<p class="border-left-text">The distributed register and blockchain are the main
									directions of investment. These spheres, according to our experts, are much more
									perspective. Unlike investments in construction, the industry, IT technologies are
									recognized as the directions of the future, more perspective long ago. Therefore, we
									suggest investing in this direction. At the same time with minimal risks.
								</p>
								<div class="row" id="mini_index_about_content">
									<a href="index-87b87.html?a=cust&amp;page=about-us" class="btn btn-default">Read
										more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section_10 clearfix">
			<div class="col-lg-4" id="home_colum_1">
				<div class="home_video1">
					<!--span><i class="fa fa-play"></i>Our Company Video</span-->
				</div>
			</div>
			<div class="col-lg-4" id="home_colum_2">
				<div class="home_video1">
					<!--span><i class="fa fa-play"></i>Our Company Video</span-->
					<div class="index_about_content_left">
						<div class="row-title-wrapper">
							<div class="title-wrapper title-wrapper-main">
								<div class="subtitle">Stats info</div>

							</div>
						</div>
						<div class="gem-list-red">
							<ul>
								<li class="lazy-loading-item "><i class="far fa-check-square"></i>Started<b>Oct 13, 2019
									</b></li>
								<li class="lazy-loading-item "><i class="far fa-check-square"></i>Running Days<b>1829
									</b></li>
								<li class="lazy-loading-item "><i class="far fa-check-square"></i>Total
									Withdrawals<b>5611667.72 </b></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-4" id="home_colum_3">
				<div class="home_video1">
					<!--span><i class="fa fa-play"></i>Our Company Video</span-->
					<div class="index_about_content_left">
						<div class="row-title-wrapper">
							<div class="title-wrapper title-wrapper-main">
								<div class="subtitle" style="color: #C86567;">Total Deposited</div>

							</div>
						</div>

						<div class="c-timing" data-start="0" data-end="625986.52">
							<span class="c-timing__number-sign">$ </span>
							<div class="c-timing__number">9301735.14</div>
						</div>
						<div class="total-stats">
							<i class="fal fa-arrow-alt-to-bottom"></i>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="section_20 clearfix">
			<div class="col-lg-4" id="blue_colum_1">
				<i class="far fa-shield-check fa-fw fa-3x"></i>
				<div class="title-h4">EV SSL Certificate</div>
				<p>Website of Velloxa Wealth company <b>Velloxa Wealth</b> have highest level of
					authentication EV SSL. It helps to protect our customers' funds as much as possible.
				</p>
				<div class="conter wow slideInUp" data-wow-offset="200">
					<div class="wow pulse" data-wow-delay="1s" data-wow-offset="200">
						<img src="images/ssl.png" class="img-responsive" style="margin: 0 auto;">
					</div>
				</div>
			</div>
			<div class="col-lg-4" id="blue_colum_2">
				<i class="far fa-building fa-fw fa-3x"></i>
				<div class="title-h4">Company info</div>
				<p>Company name: <b>Velloxa Wealth</b><br>
					Company number: <b>NI692778</b><br>
					Registered office: <b>10 Hornsey Road, London,<br>
						United Kingdom, N7 6RD</b></p>
				<a class="btn-no-bg-white" target="_blank" href="https://beta.companieshouse.gov.uk/company/NI692778">WebCheck
					Company</a><br><br>
				<a class="btn-no-bg-white" target="_blank" href="CERTIFICATE.html">View certificate</a>


			</div>

			<div class="col-lg-4" id="blue_colum_3">


				<i class="far fa-clock fa-fw fa-3x"></i>
				<div class="title-h4">24 Hours Service</div>
				<p>We strive to give our clients the best possible service. Our support servise successful services is
					our availability <b>24hrs 365 days a year</b>, to both our clients.</p><br>
				<a class="btn-no-bg-white" href="index-87b87.html?a=cust&amp;page=about-us#support">More</a>
			</div>
		</section>

		<section class="section_21">
			<div class="container clearfix">
				<div class="col-md-6">
					<div class="row">
						<div class="title-wrapper title-wrapper-main" style="margin-bottom: 0px;">
							<div class="subtitle-big">WHAT WE DO BEST</div>
						</div>
						<div class="title-h5">we take care of our clients!</div>
						<div class="quickfinder">
							<div class="quickfinder-item-image-line"></div>
							<div class="post-quickfinder">
								<div class="romb_cont wow zoomIn" data-wow-offset="200">
									<div class="quickfinder-item-image ">
										<a target="_self" class="quickfinder-item-link"><i class="far fa-arrow-alt-circle-right"></i></a>
									</div>
								</div>
								<div class="quickfinder-item-info-wrapper wow fadeIn" data-wow-offset="200">
									<div class="wow fadeInUp" data-wow-offset="200">
										<div class="quickfinder-item-title">Hight percent of profit</div>
										<div class="quickfinder-item-text">Investment profit your investment can be
											more, the client can increase the investments. It will lead to increase in
											percent of profit.</div>
									</div>
								</div>
							</div>
						</div>
						<div class="quickfinder">
							<div class="quickfinder-item-image-line"></div>
							<div class="post-quickfinder">
								<div class="romb_cont wow zoomIn" data-wow-offset="200">
									<div class="quickfinder-item-image">
										<a class="quickfinder-item-link"><i class="far fa-arrow-alt-circle-right"></i></a>

									</div>
								</div>
								<div class="quickfinder-item-info-wrapper wow fadeIn" data-wow-offset="200">
									<div class="wow fadeInUp" data-wow-offset="200">
										<div class="quickfinder-item-title">Stability and profit</div>
										<div class="quickfinder-item-text">One of the main advantages of investment -
											stability. It distinguishes the project from many others. The client will
											have an opportunity to gain income regularly.</div>
									</div>
								</div>
							</div>
						</div>


						<div class="quickfinder">

							<div class="post-quickfinder">
								<div class="romb_cont wow zoomIn" data-wow-offset="200">
									<div class="quickfinder-item-image">
										<a target="_self" class="quickfinder-item-link"><i class="far fa-arrow-alt-circle-right"></i></a>

									</div>
								</div>
								<div class="quickfinder-item-info-wrapper wow fadeIn" data-wow-offset="200">
									<div class="wow fadeInUp" data-wow-offset="200">
										<div class="quickfinder-item-title">Possibility of reinvestment</div>
										<div class="quickfinder-item-text">There is a possibility of reinvestment. That
											is drawn interest automatically are invested repeatedly. It allows getting
											in several months much bigger profit.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>



		</section>

		<section class="section_22_plans" style="background: #EAE8DC;padding: 40px 0px 20px;">
			<div class="container clearfix">
				<div style="overflow: hidden;">
					<div class="wow fadeInLeft" data-wow-offset="100" data-wow-delay="1s">

						<div class="title-xlarge">Calculator</div>
					</div>
					<div class="wow fadeInRight" data-wow-offset="100" data-wow-delay="1s">

						<div class="title-h5" style="margin: 0px 0 20px;">Calculation of your profit</div>
					</div>
				</div>
				<div class="calculator_box">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form_home calc_input">
									<label>
										<div class="pricing-row">Deposit amount:</div>
									</label>
									<span><input id="deposit" value="20" onblur="calcthis(2);" type="number" autocomplete="off"
											placeholder="Enter amount" /></span>
								</div>
							</div>
							<div class="col-md-6">
								<ul>
									<li>
										<div class="form_home calc_input">
											<label>
												<div class="pricing-row">Select a plan:</div>
											</label>
											<span>
												<select style="padding-left: 12px;" autocomplete="off" id="percent" onchange="calcthis(1);">
													<option value="perc1">20% After 24 Hours</option>
													<option value="perc2">50% After 48 Hours</option>
													<option value="perc3">100% After 72 Hours</option>
													<option value="perc4">150% After 96 Hours</option>


												</select>
											</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">

							<div class="col-md-6">
								<div class="form_home calc_output">
									<label>
										<div class="pricing-row">Total return:</div>
									</label>
									<span><b id="inpvar1">232%</b></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form_home calc_output">
									<label>
										<div class="pricing-row">Your profit:</div>
									</label>
									<span><b id="inpvar2">232%</b></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<div class="container clearfix"></div>

		<section class="section_23_ref">
			<div class="box_image_url_reff">
				<div class="box_image_url image-url-smooth">
					<div class="row-title-wrapper" id="ref_bar">
						<div class="title-wrapper title-wrapper-main">
							<div class="subtitle-big wow fadeInDownBig" data-wow-duration="1.5s" data-wow-offset="200">
								Referral commission 5%</div>
						</div>
						<div class="reff_text wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".8s" data-wow-offset="100">Bonus
							refferral program by Velloxa Wealth is provided for those
							who invite clients. If you telling someone about the advantages of our company, then it is
							possible not only to help them to receive financial benefit, but also to receive additional
							percent.</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include 'inc/footer.php' ?>
	</main>

	<div id="scroller" class="b-top" style="display: none;">
		<span class="b-top-but">
			<div class="options-icon"><i class="fas fa-chevron-up"></i></div>
		</span>
	</div>
</body>

<!--jquery-->

<script src="js/calculator.js"></script>
<!--bootstrap-->
<script src="js/bootstrap.min.js"></script>
<script src="js/Bootstrap_Carousel_Touch_Slider.js"></script>


<!--tickerNews-->

<script src="js/jquery.tickerNews.min.js"></script>
<script type="text/javascript">
	$(function () {
		var timer = !1;
		_Ticker = $("#T1").newsTicker();
		_Ticker.on("mouseenter", function () {
			var __self = this;
			timer = setTimeout(function () {
				__self.pauseTicker();
			}, 200);
		});
		_Ticker.on("mouseleave", function () {
			clearTimeout(timer);
			if (!timer) return !1;
			this.startTicker();
		});
	});
</script>


<script>
	new WOW().init();
</script>

<script src="js/main.js"></script>


<script type="text/javascript">$(document).ready(function () {
		$(window).scroll(function () { if ($(this).scrollTop() > 200) { $('#scroller').fadeIn(); } else { $('#scroller').fadeOut(); } });
		$('#scroller').click(function () { $('body,html').animate({ scrollTop: 0 }, 600); return false; });
	});</script>



<script>
	jQuery(function (f) {
		f(window).scroll(function () {
			f('.header_menu')[
				(f(this).scrollTop() > 40 ? "add" : "remove") + "Class"
			]("bar_fixed");
		});
	});
</script>


<script>
	$(function () {
		$('ul.navbar-nav li a').each(function () {
			var location = window.location.href;
			var link = this.href;
			if (location == link) {
				$(this).parent().addClass('active');
			}
		});
	});
</script>


<script>
	$(function () {
		$('ul.ca-menu li a').each(function () {
			var location = window.location.href;
			var link = this.href;
			if (location == link) {
				$(this).parent().addClass('active');
			}
		});
	});
</script>


<script src="js/odometer.js"></script>



<script type="text/javascript">
	/*!
	 * in-view 0.6.1 - Get notified when a DOM element enters or exits the viewport.
	 * Copyright (c) 2016 Cam Wiegert <cam@camwiegert.com> - https://camwiegert.github.io/in-view
	 * License: MIT
	 */
	/*!
	 * in-view 0.6.1 - Get notified when a DOM element enters or exits the viewport.
	 * Copyright (c) 2016 Cam Wiegert <cam@camwiegert.com> - https://camwiegert.github.io/in-view
	 * License: MIT
	 */


	inView('.c-timing').once('enter', function (e) {
		var el = e.querySelector('.c-timing__number');
		var start = el.parentNode.dataset.start;
		var end = el.parentNode.dataset.end;
		od = new Odometer({
			el: el,
			value: start,
			format: '(ddd).dd',
			duration: 2000,
		});
		el.innerHTML = end;
	});

	inView('.c-timing-w').once('enter', function (e) {
		var el = e.querySelector('.c-timing__number-w');
		var start = el.parentNode.dataset.start;
		var end = el.parentNode.dataset.end;
		od = new Odometer({
			el: el,
			value: start,
			format: '(ddd).dd',
			duration: 1000,
		});
		el.innerHTML = end;
	});


</script>



<script>
	jQuery('.accordion .open').children('.accordion--content').slideDown();
	jQuery('.accordion--headline').on('click', function () {
		var $this = jQuery(this),
			$li = $this.closest('li'),
			$open = $this.closest('.accordion').find('li.open').not($li);

		//Close open accordions
		$open.children('.accordion--content').slideUp();
		$open.removeClass('open');

		//Open selected accordion
		$li.toggleClass('open');
		$this.next('.accordion--content').slideToggle();
	});
</script>


<script>
	$(function () {
		var div = document.getElementById('elements');
		var count = 0;
		setInterval(function () {
			if (count == 0) $(div).removeClass('element3');
			$(div).removeClass('element' + count);
			count++;
			$(div).addClass('element' + count);
			if (count == 3) count = 0;
		}, 2000);
	});
</script>


<script>
	jQuery(function (s) {
		s(window).scroll(function () {
			s('.menu_scroll')[
				(s(this).scrollTop() > 40 ? "add" : "remove") + "Class"
			]("bar_scroll");
		});
	});
</script>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
	var _smartsupp = _smartsupp || {};
	_smartsupp.key = '17e4eb7ee82965d1449125e88d45456a2996c169';
	window.smartsupp || (function (d) {
		var s, c, o = smartsupp = function () { o._.push(arguments) }; o._ = [];
		s = d.getElementsByTagName('script')[0]; c = d.createElement('script');
		c.type = 'text/javascript'; c.charset = 'utf-8'; c.async = true;
		c.src = '../www.smartsuppchat.com/loaderd41d.js?'; s.parentNode.insertBefore(c, s);
	})(document);
</script>
<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>

<!----421---->
<!----VisualHyip.com---->


<!-- Mirrored from Velloxa Wealth/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Aug 2025 21:31:30 GMT -->

</html>