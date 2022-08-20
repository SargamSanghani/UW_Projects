<?php

$customer = 'Tom Jones';
$item = 'Dog Whistle';
$qty = 5;
$price = 3.2;
$total = $qty * $price;

$str1 ="Dear $customer, your order of $qty $item(s) at \$$price each came to a total of \${$total}.";
$str2 = sprintf('Dear %s, your order of %d %s(s) at $%.2f each came to a total of $%.2f.', $customer, $qty, $item, $price, $total);

?>
<h1>Formatted printing</h1>

<h2>Invoice (un-formatted):</h2>

<p>Customer: <?=$customer?> <br />
    Item(s): <?=$item?> <br />
    Quantity: <?=$qty?> <br />
   Unit Price: $<?=$price?> <br />
   Total: $<?=$total?> </p>
   
<p><?=$str1?></p>

<h2>Invoice (formatted):</h2>

<p>Customer: <?=$customer?> <br />
    Item(s): <?=$item?> <br />
    Quantity: <?=$qty?> <br />
   Unit Price: $<?=number_format($price, 2)?> <br />
   Total: $<?=number_format($total, 2)?> </p>

<p><?=$str2?></p>

