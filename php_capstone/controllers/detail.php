<?php

$title = "Detail";

// getting product detail from id
if (isset($_GET['id'])) {
   
    $product = getProductById($_GET['id']);
}

view('detail', compact('title', 'product'));