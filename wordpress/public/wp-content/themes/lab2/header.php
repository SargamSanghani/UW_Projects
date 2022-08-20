<!doctype html>
<html lang="en">

<head>
    <title>Capstone Project</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap" rel="stylesheet">


    <link type="text/css" rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" />


    <!-- Favicon for desktop (32X32) -->
    <link rel="icon" href="<?= get_template_directory_uri() ?>/images/favicon.png" />

    <?php wp_head(); ?>


    <!-- Favicons for other devices -->
    <link rel="apple-touch-icon" sizes="196x196" href="<?= get_template_directory_uri() ?>/images/favicon-196.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/images/favicon-180.png" />
    <link rel="apple-touch-icon" sizes="167x167" href="<?= get_template_directory_uri() ?>/images/favicon-167.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ?>/images/favicon-152.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="<?= get_template_directory_uri() ?>/images/favicon-128.png" />

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
                <a href="index.html">
                    <picture>
                        <!-- Desktop logo -->
                        <source media="(min-width: 768px)" srcset="<?= get_template_directory_uri() ?>/images/logo-100.png 1x, <?= get_template_directory_uri() ?>/images/logo-200.png 2x" />
                        <!-- Mobile logo -->
                        <source media="(max-width: 767px)" srcset="<?= get_template_directory_uri() ?>/images/logo-50.png 1x, <?= get_template_directory_uri() ?>/images/logo-100.png 2x, <?= get_template_directory_uri() ?>/images/logo-200.png 3x" />
                        <!-- Logo by default -->
                        <img src="<?= get_template_directory_uri() ?>/images/logo-100.png" width="100" height="100" alt="Home logo" />
                    </picture>
                </a>
            </div>
            <!-- End of: logo  -->

            <div id="sign_in_btns">
                <a href="sign-up.html" class="no-text-style"><span class="btn normal-btn">Sign In</span></a>
                <a href="sign-up.html" class="no-text-style"><span class="btn">Sign Up</span></a>
            </div>
        </header>
        <!-- End of: header  -->

        <!-- Start of: nav  -->
        <nav>

            <!-- Search bar for mobile devices  -->
            <!-- <input id="search_bar_mobile" type="text" placeholder="Search" /> -->

            <div id="nav_div">
                <!-- Hamburger menu for mobile devices  -->
                <a href="#" id="hamburger_button">
                    <span id="topbar"></span>
                    <span id="middlebar"></span>
                    <span id="bottombar"></span>
                </a>

                <?php wp_nav_menu(['menu' => 'main']); ?>
            </div>
    </div>
    </nav>
    <!-- End of: nav  -->