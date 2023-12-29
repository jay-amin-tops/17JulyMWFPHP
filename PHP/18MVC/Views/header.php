<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Day Spa a Beauty and Spa Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Day Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script
		type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="Assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="<?php echo $this->base_url; ?>css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo $this->base_url; ?>css/swipebox.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo $this->base_url; ?>css/flexslider.css" type="text/css" media="screen" />
	<script src="<?php echo $this->base_url; ?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->base_url; ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $this->base_url; ?>js/easing.js"></script>
	<script src="<?php echo $this->base_url; ?>js/modernizr.custom.97074.js"></script>


	<script src="<?php echo $this->base_url; ?>lib/jquery.js"></script>
	<script src="<?php echo $this->base_url; ?>dist/jquery.validate.js"></script>
	<!--/script-->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 900);
			});
		});
	</script>
	<script src="<?php echo $this->base_url; ?>js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- Add fancyBox main JS and CSS files -->
	<script src="<?php echo $this->base_url; ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="<?php echo $this->base_url; ?>css/magnific-popup.css" rel="stylesheet" type="text/css">
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

</head>

<body>
	<!--start-main-->
	<div class="banner" id="home">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html">
						<h1>Day Spa</h1>
					</a>
				</div>
				<div class="search">
					<form>
						<input type="submit" value="">
						<input type="text" value="Search " onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Search';}">
					</form>
				</div>
				<!--top-nav-->
				<span class="menu"> </span>
				<div class="top-menu">
					<nav>
						<ul class="cl-effect-16">
							<li><a class="active scroll" href="#home" data-hover="Home">Home</a></li>
							<li><a href="http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/home#about" data-hover="About">About</a></li>
							<li><a href="http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/home#service" data-hover="Services">Services</a></li>
							<li><a href="#team" data-hover="Team">Team</a></li>
							<li><a  href="signin" data-hover="Login">Login</a></li>
							<li><a href="http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/home#gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/home#contact" data-hover="Contact">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!--script-for-menu-->
				<script>
					$("span.menu").click(function () {
						$(".top-menu").slideToggle("slow", function () {
							// Animation complete.
						});
					});
				</script>
				<!--//script-for-menu-->
				<div class="clearfix"></div>
			</div>
		</div>
		
		