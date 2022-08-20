<!doctype html>
<html lang="en">

<head>
	<title><?php echo e($title); ?></title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap" rel="stylesheet">

	<!-- CSS Media Queries -->
	<!-- mobile devices  -->
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)" href="styles/mobile.css" />

	<!-- Desktop Stylesheet -->
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="styles/desktop.css" />

	<!-- Print Stylesheet -->
	<link rel="stylesheet" type="text/css" media="print" href="styles/print.css" />

	<!-- Favicon for desktop (32X32) -->
	<link rel="icon" href="favicon.png" />

	<!-- Favicons for other devices -->
	<link rel="apple-touch-icon" sizes="196x196" href="favicon-196.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="favicon-180.png" />
	<link rel="apple-touch-icon" sizes="167x167" href="favicon-167.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="favicon-152.png" />
	<link rel="apple-touch-icon" sizes="128x128" href="favicon-128.png" />

	<style>
		/* Embedded common styles  */
		.text-center {
			text-align: center;
		}

		.cursor-pointer {
			cursor: pointer;
		}

		.color-white {
			color: #fff;
		}
	</style>

</head>

<body>

	<!--[if LTE IE 8]>
		Please upgrade your browser!
	<![endif]-->

	<div id="home">

		<!-- Start of: header  -->
		<header>

			<!-- Start of: logo  -->
			<div id="logo_box" class="cursor-pointer">
				<a href="home">
					<picture>
						<!-- Desktop logo -->
						<source media="(min-width: 768px)" srcset="images/logo-100.png 1x, images/logo-200.png 2x" />
						<!-- Mobile logo -->
						<source media="(max-width: 767px)" srcset="images/logo-50.png 1x, images/logo-100.png 2x, images/logo-200.png 3x" />
						<!-- Logo by default -->
						<img src="images/logo-100.png" width="100" height="100" alt="Home logo" />
					</picture>
				</a>
			</div>
			<!-- End of: logo  -->

			<div id="sign_in_btns">
				<a href="register" class="no-text-style"><span class="btn normal-btn">Sign In</span></a>
				<a href="register" class="no-text-style"><span class="btn">Sign Up</span></a>
			</div>
		</header>
		<!-- End of: header  -->

		<!-- Start of: nav  -->
		<nav>

			<!-- Search bar for mobile devices  -->
			<input id="search_bar_mobile" type="text" placeholder="Search" />

			<div id="nav_div">
				<!-- Hamburger menu for mobile devices  -->
				<a href="#" id="hamburger_button">
					<span id="topbar"></span>
					<span id="middlebar"></span>
					<span id="bottombar"></span>
				</a>

				<ul id="navlist">
					<li><input id="search_bar" type="text" placeholder="Search" /></li>
					<li class="active"><a href="home">Home</a></li>
					<li><a href="about">About Us</a></li>
					<li><a href="detail">Products</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		<!-- End of: nav  -->

		<!-- Start of: main  -->
		<main>

			<!-- Start of: wrapper  -->
			<div id="wrapper">

				<div class="tagline">
					<p><strong><?php echo e($tagline); ?></strong></p>
				</div>

				<!-- Home Slider  -->
				<img src="images/bg-1.jpg" width="960" height="400" alt="Slide-1" />

				<h1><span>We Provide</span></h1>

				<!-- Start of: card list for features  -->
				<div class="card_list">

					<div class="card" style="margin-left: 0;">
						<img src="images/live-tracking.png" width="75" height="75" alt="Live tracking" />
						<p class="text-center">Live Tracking</p>
						<div>Keeping track of your order from the restaurant to your doorstep is
							easy</div>
					</div>

					<div class="card">
						<img src="images/fast-delivery.png" width="75" height="75" alt="Fast Delivery" />
						<p class="text-center">Fast Delivery</p>
						<div>We deliver fresh, on-time food with Food Corner's superfast delivery
						</div>
					</div>

					<div class="card" style="margin-right: 0;">
						<img src="images/mobile-app.png" width="75" height="75" alt="Mobile App" />
						<p class="text-center">Try Mobile App</p>
						<div>With notified updates, enjoy the best experience with Food Corner</div>
					</div>

				</div>
				<!-- End of: card list for features  -->

				<h1><span>Local Favourites</span></h1>

				<!-- Start of: card list for food items  -->
				<div class="card_list">

					<div class="item-card cursor-pointer" style="margin-left: 0;">
						<a href="item-detail"><img src="images/item-1.jpg" width="287" height="191" alt="Food-1" /></a>
						<p class="price">10.99 $</p>
					</div>

					<div class="item-card cursor-pointer">
						<a href="item-detail"><img src="images/item-2.jpg" width="287" height="191" alt="Food-2" /></a>
						<p class="price">10.99 $</p>
					</div>

					<div class="item-card cursor-pointer" style="margin-right: 0;">
						<a href="item-detail"><img src="images/item-3.jpg" width="287" height="191" alt="Food-3" /></a>
						<p class="price">10.99 $</p>
					</div>

				</div>
				<!-- Start of: card list for food items  -->

			</div>
			<!-- End of: wrapper  -->

		</main>
		<!-- End of: main  -->

		<!-- Start of: footer  -->
		<footer>

			<!-- Back to top arrow animation  -->
			<div class="up-box">
				<a href="#">
					<img id="up-arrow" src="images/up-arrow.png" alt="Up" width="25" height="25">
				</a>
			</div>

			<!-- Social media buttons  -->
			<div id="social_media">
				<a href="http://www.facebook.com/" target="_blank">
					<img src="images/facebook.png" alt="Facebook" />
				</a> &nbsp;
				<a href="http://twitter.com/" target="_blank">
					<img src="images/twitter.png" alt="Twitter" />
				</a> &nbsp;
				<a href="https://www.youtube.com/" target="_blank">
					<img src="images/youtube.png" alt="YouTube" />
				</a> &nbsp;
				<a href="https://www.instagram.com/" target="_blank">
					<img src="images/instagram.png" alt="Instagram" />
				</a>
			</div>

			<!-- Copyright and last modified  -->
			<p class="color-white">Copyright &copy; 2021</p>
			<div id="last_modified" class="color-white">
				<script>
					document.scripts[document.scripts.length - 1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
				</script>
			</div>

		</footer>
		<!-- End of: footer  -->

	</div>
</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\lab1\resources\views/index.blade.php ENDPATH**/ ?>