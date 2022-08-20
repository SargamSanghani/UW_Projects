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
    <!-- Start of: header -->
    <header>
        <!-- Start of: logo -->
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

        <!-- Search bar for mobile devices -->
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
                <li><a href="about">About Us</a></li>
                <li><a href="detail">Products</a></li>
                <li class="active"><a href="contact">Contact</a></li>
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

            <div id="contact_wrapper">

                <!-- Start of: form tag -->
                <form action="http://scott-media.com/test/form_display.php" method="post" id="contactus_form" autocomplete="on">

                    <p>
                        <input type="text" name="first_name" id="first_name" maxlength="50" size="30" placeholder="Please enter first name *" required="required" />
                    </p>

                    <p>
                        <input type="text" id="last_name" name="last_name" maxlength="50" size="30" placeholder="Please enter last name *" required="required" />
                    </p>

                    <p>
                        <input type="email" name="email_address" id="email_address" size="30" placeholder="Email address *" required="required" />
                    </p>

                    <p>
                        <input type="tel" name="phone" id="phone" placeholder="Mobile number (optional)" />
                    </p>

                    <p>
                        <select id="category" name="category" required="required">
                            <option value="" selected disabled>How can we help you? *</option>
                            <option value="refund">Refund</option>
                            <option value="order_status">Order Status</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </p>

                    <p>
                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Type here... *" required="required">
                        </textarea>
                    </p>

                    <p>
                        <input type="submit" id="sign_up_btn" class="btn" value="Submit" />
                    </p>

                </form>
                <!-- End of: form tag -->

            </div>
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

</body>

</html><?php /**PATH C:\xampp\htdocs\php_framework\lab1\resources\views/contact.blade.php ENDPATH**/ ?>