<!doctype html>
<html lang="en">

<head>
	<title><?=e($title);?></title>
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

	<link rel="stylesheet" type="text/css" href="styles/common.css" />

	<!-- Favicon for desktop (32X32) -->
	<link rel="icon" href="images/favicon.png" />

	<!-- Favicons for other devices -->
	<link rel="apple-touch-icon" sizes="196x196" href="images/favicon-196.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon-180.png" />
	<link rel="apple-touch-icon" sizes="167x167" href="images/favicon-167.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon-152.png" />
	<link rel="apple-touch-icon" sizes="128x128" href="images/favicon-128.png" />
    <style>
        .text-center {
            text-align: center;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .color-white {
            color: #fff;
        }

        .text-left {
            text-align: left;
        }

		.error {
			color: #f00;
			font-size: 0.9em;
		}
    </style>
</head>

<!-- 

*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.
.*                                                                          .*
*.                   (                                                      *.
.*                    )\ )                                                  .*
*.                   (()/(    ) (   (  (     )    )                         *.
.*                     /(_))( /( )(  )\))( ( /(   (                         .*
*.                    (_))  )(_)|()\((_))\ )(_))  )\  '                     *.
.*                   / __|((_)_ ((_)(()(_|(_)_ _((_))                       .*
*.                   \__ \/ _` | '_/ _` |/ _` | '  \()                      *.
.*                   |___/\__,_|_| \__, |\__,_|_|_|_|                       .*
*.                                 |___/                                    *.
.*                                                                          .*
*.                         Name: Sargam Sanghani                            *.
.*                        Title: Capstone Project                           .*
*.                        Date: December 02, 2021                           *.
.*                                                                          .*
*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.*.
	
 -->

<body>

	<!--[if LTE IE 8]>
		Please upgrade your browser!
	<![endif]-->

	<div id="home">

		<!-- Start of: header  -->
		<header>

			<!-- Start of: logo  -->
			<div id="logo_box" class="cursor-pointer">
				<a href="?p=index">
					<picture>
						<!-- Desktop logo -->
						<source media="(min-width: 768px)" srcset="images/logo-100.png 1x, images/logo-200.png 2x" />
						<!-- Mobile logo -->
						<source media="(max-width: 767px)"
							srcset="images/logo-50.png 1x, images/logo-100.png 2x, images/logo-200.png 3x" />
						<!-- Logo by default -->
						<img src="images/logo-100.png" width="100" height="100" alt="Home logo" />
					</picture>
				</a>
			</div>
			<!-- End of: logo  -->

			<div id="sign_in_btns">
				<?php if(!isLoggedIn()) : ?>
					<a href="?p=login" class="no-text-style"><span class="btn normal-btn">Login</span></a>
					<a href="?p=sign-up" class="no-text-style"><span class="btn">Register</span></a>
				<?php else : ?>
					<a href="?p=profile" class="no-text-style"><span class="btn normal-btn">My Profile</span></a>
					<form method="post" action="?p=process-logout" class="d-i">
						<input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />
						<input type="submit" class="btn" value="logout" name="logout">
					</form>
				<?php endif; ?>
			</div>
		</header>
		<!-- End of: header  -->

		<!-- Start of: nav  -->
		<nav>

			<!-- Search bar for mobile devices  -->
			<form action="/" class="mobile-search">
                <input type="hidden" name="p" value="menu">
				<input id="search_bar_mobile" type="text" placeholder="Search" name="search" />
                <input  type="submit" value="Search" style="height: 45px"/>
            </form>
			

			<div id="nav_div">
				<!-- Hamburger menu for mobile devices  -->
				<a href="#" id="hamburger_button">
					<span id="topbar"></span>
					<span id="middlebar"></span>
					<span id="bottombar"></span>
				</a>

				<ul id="navlist">
					<!-- <li><input id="search_bar" type="text" placeholder="Search" /></li> -->
					<li class="<?php if($title == 'Home') echo 'active';  ?>"><a href="?p=index">Home</a></li>
					<li class="<?php if($title == 'Menu') echo 'active';  ?>"><a href="?p=menu&category=0">Menu</a></li>
					<li class="<?php if($title == 'About Us') echo 'active';  ?>"><a href="?p=about-us">About Us</a></li>
					<li class="<?php if($title == 'Contact Us') echo 'active';  ?>"><a href="?p=contact-us">Contact Us</a></li>
					<?php if(isLoggedIn()) : ?>
					    <li>
							<a href="?p=cart">
								<img src="images/cart.png" alt="My Basket">
								<span class="cart-count"><?= isset($_SESSION['cart']) ? e(count($_SESSION['cart'])) : 0 ?></span>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>
		<!-- End of: nav  -->

		<?php if(!empty($flash['error'])) : ?>
			<div class="alert-prompt"><?=e($flash['error'])?></div>
		<?php endif; ?>
		
		<?php if(!empty($flash['success'])) : ?>
			<div class="success-prompt"><?=e($flash['success'])?></div>
		<?php endif; ?>

		<?php if(!empty($flash['info'])) : ?>
			<div class="info-prompt"><?=e($flash['info'])?></div>
		<?php endif; ?>

		<?php if(!empty($flash['warning'])) : ?>
			<div class="warning-prompt"><?=e($flash['warning'])?></div>
		<?php endif; ?>