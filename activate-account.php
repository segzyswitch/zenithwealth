<?php
if (!isset($_GET['uuid'])) {
	// header("Location: ./");
	// return false;
}
$uuid = $_GET['uuid'];
require "config/Controller.php";
$Controller = new Controller;
$conn = $Controller->conn;

$check = $conn->prepare("SELECT status FROM users WHERE uuid = '$uuid'");
try {
	$check->execute();
	if ( $check->rowCount() < 1 ) {
		echo "Invalid or expired link! <a href='./'>Go home</a>";
		return false;
	}
	$get_status = $check->fetch();
	$user_status = $get_status['status'];
	if ( $user_status == 'confirmed' ) {
		echo "Link already expired! <a href='./'>Go home</a>";
		return false;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}


$sql = "UPDATE users
SET status = 'confirmed'
WHERE uuid = '$uuid'";
$query = $conn->prepare($sql);
try {
	$query->execute();
} catch (PDOException $e) {
	echo $e->getMessage();
	return false;
}

?>


<!DOCTYPE html>

<head>
	<!--metatags-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=1300">
	<!----421---->
	<!----VisualHyip.com---->
	<!--title-->
	<title>Support - Veloxa Wealth</title>
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

	<!--sitefonts-->
	<link href="css-1f992.html?family=Montserrat:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:300,400,600,700,900"
		rel="stylesheet">
	<link href="css-2ca1a.html?family=Source+Sans+Pro:200,300,400,600,700&amp;display=swap" rel="stylesheet">


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
							<h2>Account Activation</h2>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="form_body">
			<div class="container">
				<div class="form_body_inner clearfix">
					<div class="row">
						<div class="col-md-3 col-sm-2">
						</div>
						<div class="col-md-6 col-sm-8 col-xs-12">
							<div class="login_form">
								<div class="row">
									<div class="col-sm-12 text-center">										
										<p class="h1" style="margin-bottom:25px;"><i>🎉</i></p>
										<p class="h3 fw-light mb-4">Account successfully activated!</p>
										<p style="color:#aaa;margin-bottom:25px;">Your account has been activated, and you're all set to start using AAVE-Investment platform. We’re excited to have you on board!</p>
										<p class="mb-4"><a href="/account/login" class="btn btn--base contact-btn">Sign In</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-2">
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
	});
</script>



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
</html>