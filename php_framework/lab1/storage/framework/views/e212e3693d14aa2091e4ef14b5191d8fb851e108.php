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
                <li><a href="home">Home</a></li>
                <li class="active"><a href="about">About Us</a></li>
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
            <p>
                <img class="restaurant-img" src="images/restaurant.jpg" alt="Restaurant" width="960" height="640">
            </p>

            <p class="text-center">
                <span class="large-title">Food Corner</span> <br>
                140 Queen Avenue | Winnipeg MB R4M 5D3 <br>
                888.667.8657 | 888.667.8658
            </p>

            <!-- Start of: about us details card list -->
            <div class="card_list">

                <div class="card" style="margin-left: 0;">
                    <img src="images/health.png" width="75" height="75" alt="Health" />
                    <p class="text-center">Health</p>
                    <div>We use fresh, local, and seasonal ingredients in all of our creations. Our cooking is healthy,
                        we
                        think of you.
                    </div>
                </div>

                <div class="card">
                    <img src="images/hourglass.png" width="75" height="75" alt="Hours" />
                    <p class="text-center">Hours</p>
                    <div>Monday - Friday: 12:30pm-10pm <br>
                        Saturday: 12pm-10:30pm <br>
                        Sunday: 12pm-11pm</div>
                </div>

                <div class="card" style="margin-right: 0;">
                    <img src="images/fast-service.png" width="75" height="75" alt="Fast Service" />
                    <p class="text-center">Fast Service</p>
                    <div>Your time is precious and we adapt to your needs, guaranteeing speed both in preparation and
                        delivery.
                    </div>
                </div>

            </div>
            <!-- End of: about us details card list -->

        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

    <!-- Start of: footer  -->
    <footer>

        <!-- Back to top arrow animation  -->
        <div class="up-box">
            <a href="#">
                <img id="up-arrow" src="images/up-arrow.png" alt="Up" width="25" height="25" />
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

</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\lab1\resources\views/about.blade.php ENDPATH**/ ?>