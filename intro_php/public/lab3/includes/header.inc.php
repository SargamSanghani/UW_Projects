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

	<!-- Favicon for desktop (32X32) -->
	<link rel="icon" href="favicon.png" />

	<!-- Favicons for other devices -->
	<link rel="apple-touch-icon" sizes="196x196" href="favicon-196.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="favicon-180.png" />
	<link rel="apple-touch-icon" sizes="167x167" href="favicon-167.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="favicon-152.png" />
	<link rel="apple-touch-icon" sizes="128x128" href="favicon-128.png" />
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

        .pt-10 {
            padding-top: 10px;
        }

        .text-left {
            text-align: left;
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
				<a href="index.php">
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
				<a href="sign-up.php" class="no-text-style"><span class="btn normal-btn">Sign In</span></a>
				<a href="sign-up.php" class="no-text-style"><span class="btn">Sign Up</span></a>
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
					<li class="<?php if($title == 'Home') echo 'active';  ?>"><a href="index.php">Home</a></li>
					<li class="<?php if($title == 'About Us') echo 'active';  ?>"><a href="about-us.php">About Us</a></li>
					<li class="<?php if($title == 'Item Detail') echo 'active';  ?>"><a href="item-detail.php">Products</a></li>
					<li class="<?php if($title == 'Contact Us') echo 'active';  ?>"><a href="contact-us.php">Contact</a></li>
				</ul>
			</div>
		</nav>
		<!-- End of: nav  -->