<?php include __DIR__ . '/includes/header.inc.php'; ?>

<!-- Start of: main  -->
<main>
    <div id="wrapper" class="menu">
        <h1 class="fancy-header"><span>My basket</span></h1>

        <?php if (count($cart) == 0) : ?>
            <h2>Empty basket!</h2>

            <img src="images/empty-cart.png" alt="No Cart">

            <h3>Looks like you have not added anything to your basket!</h3>
            <a href="?p=menu&category=0" class="btn fl my-10">Continue Shopping</a>


        <?php else : ?>
            <div>
                <table class="cart w100">
                    <tr class="grey-bg">
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    
                    <?php foreach($cart as $c) : ?>
                        <tr>
                            <td><?=e($c['title'])?></td>
                            <td class="text-center"><?=e($c['quantity'])?></td>
                            <td class="text-right"><?=e(roundOff($c['unit_price'], 2))?> $</td>
                            <td class="text-right"><?=e(roundOff($c['total_price'], 2))?> $</td>
                            <td class="text-center">
                                <form action="?p=cart" method="post">
                                    <button type="submit" class="delete-icon"><img src="images/delete.png" alt="Delete"></button>
                                    <input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />
                                    <input type="hidden" name="p" value="remove">
                                    <input type="hidden" name="id" value="<?=e($c['id'])?>">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
        
                    <tr>
                        <td colspan="4" class="text-right">Sub Total: </td>
                        <td class="text-right"><?=e($total['sub_total'])?> $</td>
                    </tr>
        
                    <tr>
                        <td colspan="4" class="text-right">GST (5%): </td>
                        <td class="text-right"><?=e($total['gst'])?> $</td>
                    </tr>
        
                    <tr>
                        <td colspan="4" class="text-right">PST (7%): </td>
                        <td class="text-right"><?=e($total['pst'])?> $</td>
                    </tr>
        
                    <tr>
                        <td colspan="4" class="text-right">Delivery Charges: </td>
                        <td class="text-right"><?=e($total['delivery_charges'])?> $</td>
                    </tr>
        
                    <tr>
                        <td colspan="4" class="text-right font-bold">Grand Total: </td>
                        <td class="text-right font-bold"><?=e($total['total'])?> $</td>
                    </tr>
                </table>
        
                <a href="?p=menu&category=0" class="btn fl my-10">Continue Shopping</a>
                <a href="?p=checkout" class="btn fr my-10">Checkout</a>
            </div>
        <?php endif ?>
    </div>

</main>
<!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>