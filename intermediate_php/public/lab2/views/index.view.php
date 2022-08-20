<?php include __DIR__ . '/includes/header.inc.php'; ?>

<!-- Start of: main  -->
<main class="home">

    <!-- Start of: wrapper  -->
    <div id="wrapper">

        <!-- Home Slider  -->
        <p id="slider">
            <!-- Placeholder white image for slider height  -->
            <img src="images/placeholder.png" width="960" height="400" alt="Placeholder" />
            <img src="images/bg-1.jpg" width="960" height="400" alt="Slide-1" />
            <img src="images/bg-2.jpg" width="960" height="400" alt="Slide-2" />
            <img src="images/bg-3.jpg" width="960" height="400" alt="Slide-3" />
        </p>

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
                <a href="?p=item-detail"><img src="images/item-1.jpg" width="287" height="191"
                        alt="Food-1" /></a>
                <p class="price">10.99 $</p>
            </div>

            <div class="item-card cursor-pointer">
                <a href="?p=item-detail"><img src="images/item-2.jpg" width="287" height="191"
                        alt="Food-2" /></a>
                <p class="price">10.99 $</p>
            </div>

            <div class="item-card cursor-pointer" style="margin-right: 0;">
                <a href="?p=item-detail"><img src="images/item-3.jpg" width="287" height="191"
                        alt="Food-3" /></a>
                <p class="price">10.99 $</p>
            </div>

        </div>
        <!-- Start of: card list for food items  -->

    </div>
    <!-- End of: wrapper  -->

</main>
<!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>