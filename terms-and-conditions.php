<!DOCTYPE html>

<head>
	<!--metatags-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!----421---->
	<!----VisualHyip.com---->
	<!--title-->
	<title>Terms & Conditions - Velloxa Wealth</title>
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

<body id="body_page">
	<wrapper>
		<?php include 'inc/header.php' ?>

		<section class="inner_page_banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inner_page_title">
							<h2>Terms & Conditions</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="form_body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div style="line-height: 37px;" class="company_term">
							<ul>
								<div class="main_title">
									<h2 class="text-red">Please read carefully before using this website.</h2>
								</div><br><br>
								<li>By accessing or signing up on VelloxaWealth.com, you acknowledge that you have read, understood, and agree to be bound by the following terms and conditions.</li>
								<li>You must be at least 18 years of age or the legal age in your country to participate in any investment program offered by VelloxaWealth.com. Our platform is not open to the general public and is available only to registered members or individuals personally invited by them. Every deposit or investment made on VelloxaWealth.com is considered a private transaction between the platform and its member.</li>
								<li>As a private program, this arrangement is exempt from the following U.S. Acts and similar international laws: The U.S. Securities Act of 1933, The U.S. Securities Exchange Act of 1934, The U.S. Investment Company Act of 1940. VelloxaWealth.com is not FDIC insured, and we are not a licensed bank or security firm. All information, communications, and materials from VelloxaWealth.com are confidential and intended solely for our members. You agree not to disclose, distribute, or reproduce any content, data, or materials without written consent. </li>
								<li>All data you provide will be used exclusively for private business operations and will not be shared with third parties. All withdrawals from VelloxaWealth.com after investment are subject to a withdrawal processing fee. This fee is charged separately and will not be deducted from your investment amount. This policy ensures that your investment remains intact and is not reduced by transaction costs. VelloxaWealth.com reserves the right to modify, update, or change these Terms, rates, or commissions at any time and at our sole discretion without prior notice.</li>
								<li>It is your responsibility to review the current Terms & Conditions regularly. Members agree to: Use VelloxaWealth.com only for lawful purposes, Comply with all local, national, and international laws. Avoid using this site to distribute spam, unauthorized content, or misleading information. Any violation of these conditions may result in suspension or permanent termination of your account without prior notice. If any issue arises with your investment or transaction, you agree to contact the platform administrator before posting negative comments or reviews publicly. We aim to resolve all concerns promptly and professionally. By registering and using VelloxaWealth.com, you confirm that: You understand these terms and conditions in full. You agree to all the policies stated above. You release all company officers, employees, and affiliates from any liability related to your use of this website.</li>
								<br><br>
								<div class="main_title">
									<h2 class="text-red">If you do not agree with any part of this disclaimer or these Terms and Conditions, please do not proceed further or use this website.</h2>
								</div>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section>


		<!-- Footer -->
		<?php include 'inc/footer.php' ?>
	</wrapper>
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
<!----421---->
<!----VisualHyip.com---->

<!-- Mirrored from Velloxa Wealth/index-4.htm?a=rules by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Aug 2025 21:34:28 GMT -->

</html>