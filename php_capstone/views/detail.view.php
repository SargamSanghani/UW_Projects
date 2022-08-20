<?php include __DIR__ . '/includes/header.inc.php'; ?>
    
<!-- Start of: main  -->
<main>

    <!-- Start of: wrapper  -->
    <div id="wrapper">
        <div id="item_wrapper">

            <img class="text-fl" src="images/products/<?=e($product['image'])?>" width="287" height="191" alt="<?=e($product['title'])?>" />
            <div class="item-desc">
                <h1><?=e($product['title'])?></h1>
                <?=e($product['description'])?>
                <table id="detailTable">
                    <tr class="grey-bg">
                        <th>Servings</th>
                        <th>Calories</th>
                        <th>Preparing Time</th>
                        <th>Total Sales</th>
                    </tr>
                    <tr>
                        <td><?=e($product['servings'])?></td>
                        <td><?=e($product['calories'])?></td>
                        <td><?=e($product['preparing_time'])?> min</td>
                        <td><?=e($product['total_sales'])?></td>
                    </tr>
                </table>
                <br>
                <div class="product-price"><?=e($product['price'])?> $</div> 
            </div>

            <!-- Location details  -->
            <div class="location mt-10">
                <h3 class="text-left">Enter Your Delivery Address</h3>
                <p>The delivery fees can be confirmed based on this information</p>
                <input type="text" placeholder="Delivery Address" />
            </div>

            <!-- Table for payment details  -->
            <table id="payment_table">
                <tbody>
                    <tr>
                        <th>Quantity (1x):</th>
                        <td>$ <?=e($product['price'])?></td>
                    </tr>
                    <tr>
                        <th>Delivery fees:</th>
                        <td>$ 0.00</td>
                    </tr>
                    <tr>
                        <th>Sub Total:</th>
                        <td>$ <?=e($product['price'])?></td>
                    </tr>
                </tbody>
            </table>

            <p>
                <form action="?p=cart" method="post">

                    <input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />
                    <input type="hidden" name="p" value="add">
                    <input type="hidden" name="id" value="<?=e($product['id'])?>">

                    <label for="quantity">Quantity: </label>
                    <select name="quantity" id="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" name="add" class="btn" value="Add to basket" />&nbsp;
                </form>
            </p>
        </div>
    </div>
    <!-- End of: wrapper  -->

</main>
<!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>