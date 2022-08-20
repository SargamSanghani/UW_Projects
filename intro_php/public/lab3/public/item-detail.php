<?php

include __DIR__ . '/../includes/functions.php';

$title = "Item Detail";

include __DIR__ . '/../includes/header.inc.php';

?>

    <!-- Start of: main  -->
    <main>

        <!-- Start of: wrapper  -->
        <div id="wrapper">
            <div id="item_wrapper">

                <img class="text-fl" src="images/item-1.jpg" width="287" height="191" alt="Chicken Kebab" />
                <div class="item-desc">
                    <h1>Chicken Barbeque Kebab</h1>
                    Parties are never complete without these yummy favorites! Try this spicy chicken barbeque kebab.
                    <p>4.4 stars &#183; (467 Ratings)</p>
                    <h2 class="display-inline">10.99$</h2> <input type="button" class="btn" value="+"
                        title="CLick to add into bag" />
                </div>

                <!-- Location details  -->
                <div class="location">
                    <h3 class="text-left">Enter Your Delivery Address</h3>
                    <p>The delivery fees can be confirmed based on this information</p>
                    <input type="text" placeholder="Delivery Address" />
                </div>

                <!-- Table for payment details  -->
                <table id="payment_table">
                    <tbody>
                        <tr>
                            <th>Quantity (1x):</th>
                            <td>$ 10.99</td>
                        </tr>
                        <tr>
                            <th>Delivery fees:</th>
                            <td>$ 0.00</td>
                        </tr>
                        <tr>
                            <th>Sub Total:</th>
                            <td>$ 10.99</td>
                        </tr>
                    </tbody>
                </table>

                <p>
                    <input type="button" class="btn" value="Add to Bag" />&nbsp;
                    <input type="button" class="btn" value="Checkout" />
                </p>
            </div>
        </div>
        <!-- End of: wrapper  -->

    </main>
    <!-- End of: main  -->

<?php  include __DIR__ . '/../includes/footer.inc.php'; ?>