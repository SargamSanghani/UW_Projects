<?php include __DIR__ . '/includes/header.inc.php'; ?>

<!-- Start of: main  -->
<main>
    <div id="wrapper" class="menu">
        <h1 class="fancy-header"><span><?=e($title)?></span></h1>

            <table class="cart w100">
                <tr class="grey-bg">
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    <th>Price</th>
                </tr>
                
                <?php foreach($cart as $c) : ?>
                    <tr>
                        <td><?=e($c['title'])?></td>
                        <td class="text-center"><?=e($c['quantity'])?></td>
                        <td class="text-right"><?=e(roundOff($c['unit_price'], 2))?> $</td>
                        <td class="text-right"><?=e(roundOff($c['total_price'], 2))?> $</td>
                    </tr>
                <?php endforeach; ?>
    
                <tr>
                    <td colspan="3" class="text-right">Sub Total: </td>
                    <td class="text-right"><?=e($total['sub_total'])?> $</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">GST (5%): </td>
                    <td class="text-right"><?=e($total['gst'])?> $</td>
                </tr>
    
                <tr>
                    <td colspan="3" class="text-right">PST (7%): </td>
                    <td class="text-right"><?=e($total['pst'])?> $</td>
                </tr>
    
                <tr>
                    <td colspan="3" class="text-right">Delivery Charges: </td>
                    <td class="text-right"><?=e($total['delivery_charges'])?> $</td>
                </tr>
    
                <tr>
                    <td colspan="3" class="text-right font-bold">Amount Due: </td>
                    <td class="text-right font-bold"><?=e($total['total'])?> $</td>
                </tr>
            </table>
    
    </div>

    <div class="payment">
        <form method="post" id="" autocomplete="on" class="payment-form mt-10">

            <input type="hidden" name="csrf_token" value="<?=e(csrf())?>" />
            <fieldset class="fieldset-padd">

                <legend id="legend_id">
                    <div class="larger-text">Address Information</div>
                </legend>

                <div class="py-10">
                    <label for="street">Street <span class="mandate">*</span>: </label><span class="error"><?=$errors['street'][0] ?? ''?></span>
                    <input type="text" name="street" id="street"
                        value="<?=e($post['street'] ?? '')?>" placeholder="Please enter street" />
                </div>

                <!-- city  -->
                <div class="py-10">
                    <label for="city">City <span class="mandate">*</span>: </label><span class="error"><?=$errors['city'][0] ?? ''?></span>
                    <input type="text" id="city" name="city"
                        value="<?=e($post['city'] ?? '')?>" placeholder="Please enter city" />
                </div>
                <!-- postal code  -->
                <div class="py-10">
                    <label for="postal_code">Postal Code <span class="mandate">*</span>: </label><span class="error"><?=$errors['postal_code'][0] ?? ''?></span>
                    <input type="text" name="postal_code" id="postal_code"
                        value="<?=e($post['postal_code'] ?? '')?>" placeholder="Postal code: xxx xxx" />
                </div>

                

                <div>

                    <!-- province  -->
                    <div class="py-10 half-block">
                        <label for="province">Province <span class="mandate">*</span>: </label><span class="error"><?=$errors['province'][0] ?? ''?></span>
                        <input type="text" id="province" name="province"
                            value="<?=e($post['province'] ?? '')?>" placeholder="Please enter province" />
                    </div>
                    <!-- country  -->
                    <div class="py-10 half-block">
                        <label for="country">Country <span class="mandate">*</span>: </label><span class="error"><?=$errors['country'][0] ?? ''?></span>
                        <input type="text" name="country" id="country"
                            value="<?=e($post['country'] ?? '')?>" placeholder="Please enter country" />
                    </div>
                </div>

            </fieldset>

            <fieldset class="fieldset-padd">

                <legend id="legend_id">
                    <div class="larger-text">Payment Information</div>
                </legend>

                <div class="py-10">
                    <label for="credit">Credit card number <span class="mandate">*</span></label><span class="error"><?=$errors['credit'][0] ?? ''?></span>
                    <input type="text" name="credit" id="credit" value="<?=e($post['credit'] ?? '')?>" placeholder="Please enter your 16 digits credit card number"/>
                </div>

                <div class="py-10">
                    <label for="card_name">Name on your card <span class="mandate">*</span></label><span class="error"><?=$errors['card_name'][0] ?? ''?></span>
                    <input type="text" name="card_name" id="card_name" value="<?=e($post['card_name'] ?? '')?>" placeholder="Please enter the name on your card"/>
                </div>

                <div class="py-10">
                    <label for="expiry_date">Expiry detail <span class="mandate">*</span></label><span class="error"><?=$errors['expiry_date'][0] ?? ''?></span>
                    <input type="text" name="expiry_date" id="expiry_date" value="<?=e($post['expiry_date'] ?? '')?>" placeholder="Please enter expiry month and year"/>
                </div>
                    
                <div class="py-10">
                    <label for="cvv">CVV <span class="mandate">*</span></label><span class="error"><?=$errors['cvv'][0] ?? ''?></span>
                    <input type="text" name="cvv" id="cvv" value="<?=e($post['cvv'] ?? '')?>" placeholder="Please enter your CVV from the back of your card"/>
                </div>

            </fieldset>
            
            <p>
                <input type="submit" class="btn fr my-10" value="Pay Now" name="paynow" /> 
            </p>

        </form>
    </div>

</main>
<!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>