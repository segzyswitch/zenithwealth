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
							<h2>Rules & Agreements</h2>
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
									<h2 class="text-red">Please read the following rules carefully before signing in.</h2>
								</div><br><br>
								<li>You agree to be of legal age in your country to partake in this program, and in all the cases your
									minimal age must be 18 years</li>
								<li>
									assetcadialimited.live is not available to the general public and is opened only to the qualified
									members of
									assetcadialimited.live, the use of this site is restricted to our members and to individuals
									personally invited by them. Every deposit is considered to be a private transaction between the
									assetcadialimited.live and its Member. </li>
								<li>As a private transaction, this program is exempt from the US Securities Act of 1933, the US
									Securities Exchange Act of 1934 and the US Investment Company Act of 1940 and all other rules,
									regulations and amendments thereof. We are not FDIC insured. We are not a licensed bank or a security
									firm. </li>
								<li>You agree that all information, communications, materials coming from
									assetcadialimited.live
									are unsolicited and must be kept private, confidential and protected from any
									disclosure. Moreover, the information, communications and materials contained
									herein are not to be regarded as an offer, nor a solicitation for investments
									in any jurisdiction which deems non-public offers or solicitations unlawful,
									nor to any person to whom it will be unlawful to make such offer or solicitation. </li>
								<li>All the data giving by a member to
									assetcadialimited.live will be only privately used and not disclosed to any third parties.
									assetcadialimited.live is not responsible or liable for any loss of data. </li>
								<li>You agree to hold all principals and members harmless of any liability. You
									are investing at your own risk and you agree that a past performance is not
									an explicit guarantee for the same future performance. You agree that all information,
									communications and materials you will find on this site are intended to be regarded
									as an informational and educational matter and not an investment advice. </li>
								<li>We reserve the right to change the rules, commissions and rates of the program
									at any time and at our sole discretion without notice, especially in order to
									respect the integrity and security of the members' interests. You agree that
									it is your sole responsibility to review the current terms. </li>
								<li>
									assetcadialimited.live is not responsible or liable for any damages, losses and costs resulting from
									any violation of the conditions and terms and/or use of our website by a member. You guarantee to
									assetcadialimited.live that you will not use this site in any illegal way and you agree to respect
									your local, national and international laws. </li>
								<li>Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of
									our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR
									the thing with the administrator. </li>
								<li>We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and
									permanently removed from the program. </li>
								<li>stableon.biz reserves the right to accept or decline any member for membership without explanation.
								</li>
								<br><br>
								<div class="main_title">
									<h2 class="text-red">If you do not agree with the above disclaimer, please do not go any further.</h2>
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