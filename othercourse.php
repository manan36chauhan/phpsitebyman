<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Career Info</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grounding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-css -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Pop-up -->
	<link href="css/banner.css" rel="stylesheet" type="text/css" media="all" />
	<!--// banner-css -->
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<!--// shop-css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //common-css -->
	<link href="css/courses.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Courses-css -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- // Font-awesome-css -->
	<!-- //Style-sheets -->
	<!-- Web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-fonts -->
	<link href="css/mycss.css" rel="stylesheet" />
</head>

<body>
	<!-- header -->
	<?php include("header.html"); ?>
	<!-- banner-2 -->
	<div class="minner_page_mainsmk minner_page_mainsmk_2">
		<h3 class="mtittle">Other Courses</h3>
		

	</div>
	<!--//banner-2 -->
	<!-- Page details -->
	<div class="services-agile-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Other Courses</li>
			</ul>
		</div>
	</div>
	<!-- //Page details -->
	<!-- course content -->
	<div class="mcontent-course">
		<div class="container">
			<!-- sticky navigation -->
			
			<!-- //sticky navigation -->
			<!-- right side content -->
			<div class="col-sm-12 mmain-right-textmk-content" id="intro">
				<!-- introduction section -->
				<div class="row">
				<div class="col-md-6"><a href="#"><img class="cimg" src="be6.jpg" alt="" /></a></div>
		  <div class="col-md-6" style="margin-top: 3vh;">
		     <h2><strong>Other Courses</strong></h2>
			 	<p> -> Advanced Accounting <br />
-> Business Management <br />
-> Corporate Administration <br />
-> Master in Retailer Management <br />
-> Master in Business Administration <br />
-> Master in Personal Management <br />
-> Master in Business Study <br />
-> Master of Financial Accounting <br />
-> Master of International Business <br />
-> Master in Management Study <br />
-> Master of Tourism Administration <br />
-> Master in Human Resource Development Management <br />

</p>
		   </div>
			
				</div>
				<!-- //introduction section -->

				<!-- syllabus section -->
				
				<!-- //syllabus section -->

				<!-- how it works -->
			
				<!-- //how it works -->

				<!-- instructors section -->
				
				<!-- faqs section -->
							<!-- //faqs section -->
			</div>
			<!-- //right side content -->
		</div>
	</div>
	<!-- //course content -->

	<!-- Course fee section -->
	<!-- //Like also section -->

	<!-- Subscribe -->
	
	<!-- //footer -->
	<?php include("footer.php") ?>
	<!-- js files -->

	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- Sticky Navigation Script -->
	<script>
		$(window).scroll(function () {
			if ($(window).scrollTop() >= 700) {
				$('nav').addClass('fixed-header');
			} else {
				$('nav').removeClass('fixed-header');
			}
		});

		/* scrollTop() >= 700
		   Should be equal the the height of the header
		 */
	</script>
	<!-- //Sticky Navigation Script -->

	<!-- script for tabs (faqs section) -->
	<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs (faqs section) -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		edu.render();

		edu.cart.on('edu_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- Nav Js -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!--// Nav Js -->

	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="loginf_module">
							<div class="module form-module">
								<div class="toggle"><i class="fa fa-times fa-pencil"></i>
									<div class="tooltip">Click Me</div>
								</div>
								<div class="form">
									<h3>Login to your account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="submit" value="Login">
									</form>
									<div class="cta"><a href="#">Forgot your password?</a></div>
								</div>
								<div class="form">
									<h3>Create an account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="email" name="Email" placeholder="Email address" required="">
										<input type="text" name="Phone" placeholder="Phone Number" required="">
										<input type="submit" value="Register">
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function () {
			// Switches the Icon
			$(this).children('i').toggleClass('fa-pencil');
			// Switches the forms  
			$('.form').animate({
				height: "toggle",
				'padding-top': 'toggle',
				'padding-bottom': 'toggle',
				opacity: "toggle"
			}, "slow");
		});
	</script>
	<!-- //bootstrap-pop-up -->

	<!--pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- js files -->

</body>

</html>