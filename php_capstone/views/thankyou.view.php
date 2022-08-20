<?php include __DIR__ . '/includes/header.inc.php'; ?>

<!-- Start of: main  -->
<main>
    <div id="wrapper" class="menu">
        
        <h1>Thank you for choosing us!</h1>

        <table class="invoice">
            <tr class="grey-bg">
                <th colspan="2" class="w33">Company Info</th>
                <th colspan="2" class="w33">User Info</th>
                <th colspan="2" class="w33">Order Info</th>
            </tr>
            <tr>
                <td colspan="2">
                    <p>
                        <strong>Food Corner</strong> <br />
                        140 Queen Avenue, <br />
                        Winnipeg MB R4M 5D3 <br />
                    </p>

                    <p>
                        Contact Details: <br />
                        <strong>tel:</strong>888.667.8657 | 888.667.8658 <br />
                        <strong>email:</strong>orders@foodcorner.com
                    </p>

                    <p>Have a nice day!</p>
                </td>
                <td colspan="2">
                    <p>
                        <strong>Name:</strong> <?=e($userInfo['first_name'])?> <?=e($userInfo['last_name'])?><br /> 
                        <strong>Street:</strong> <?=e($orderInfo['address']['street'])?><br />
                        <strong>City:</strong> <?=e($orderInfo['address']['city'])?><br />
                        <strong>Province:</strong> <?=e($orderInfo['address']['province'])?><br />
                        <strong>Postal Code:</strong> <?=e($orderInfo['address']['postal_code'])?><br />
                        <strong>Email:</strong> <?=e($userInfo['email'])?><br />
                    </p>
                </td>
                <td colspan="2">
                    <p>
                        <strong>Order Number:</strong> <?=e($orderInfo['order_id'])?><br />
                        <strong>Date:</strong> <?=e($orderInfo['created_at'])?><br />
                        <strong>Credit Card:</strong> ************<?=e($orderInfo['cc_number'])?><br />
                        <strong>Charged to Card:</strong> <?=e(roundOff($orderInfo['total'], 2))?><br />
                    </p>
                    <p>Please print this invoice for your records and reference the order number <strong><?=e($orderInfo['order_id'])?></strong> </p>
                </td>
            </tr>
            <tr>
                <th colspan="3">Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Line Price</th>
            </tr>
            <?php foreach($productList as $c) : ?>
                <tr>
                    <td colspan="3"><?=e($c['title'])?></td>
                    <td class="text-right"><?=e(roundOff($c['price'], 2))?> $</td>
                    <td class="text-center"><?=e($c['quantity'])?></td>
                    <td class="text-right"><?=e(roundOff($c['total_price'], 2))?> $</td>
                </tr>
            <?php endforeach; ?>
            <tr class="text-right">
                <td colspan="5">Sub total</td>
                <td><?=e(roundOff($orderInfo['sub_total'], 2))?> $</td>
            </tr>
            <tr class="text-right">
                <td colspan="5">GST</td>
                <td><?=e(roundOff($orderInfo['gst'], 2))?> $</td>
            </tr>
            <tr class="text-right">
                <td colspan="5">PST</td>
                <td><?=e(roundOff($orderInfo['pst'], 2))?> $</td>
            </tr>
            <tr class="text-right">
                <td colspan="5">Delivery Charges</td>
                <td><?=e(roundOff($orderInfo['delivery_charges'], 2))?> $</td>
            </tr>
            <tr class="text-right">
                <td colspan="5"><strong>Total</strong></td>
                <td><strong><?=e(roundOff($orderInfo['total'], 2))?> $</strong></td>
            </tr>
        </table>

        <a href="?p=menu&category=0" class="btn fl my-10 mr10">Continue Shopping</a> &nbsp;

        <a href="?p=index" class="btn fl my-10">Home</a>
    
    </div>

</main>
<!-- End of: main  -->

<?php  include __DIR__ . '/includes/footer.inc.php'; ?>