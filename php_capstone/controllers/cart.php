<?php

$title = "Cart";

// adding product in session cart
if (isset($_POST['p']) && $_POST['p'] == 'add') {

    $productToAdd = getProductById($_POST['id']);
    $_SESSION['cart'][$_POST['id']] = [
        "title" => $productToAdd['title'],
        "quantity" => $_POST['quantity'],
        "unit_price" => $productToAdd['price'],
        "total_price" => roundOff($productToAdd['price'] * $_POST['quantity'], 2),
        "id" => $_POST['id']
    ];

    $_SESSION['flash']['success'] = "Product added to the basket!";
    header('Location: ?p=cart');
    die; 
}

// removing product from session cart
if (isset($_POST['p']) && $_POST['p'] == 'remove') {
    $_SESSION['flash']['success'] = "Product removed from the basket!";
    unset($_SESSION['cart'][$_POST['id']]);
    header('Location: ?p=cart');
    die; 
}

// updating local cart variable
$cart = $_SESSION['cart'];


view('cart', compact('title', 'cart', 'total', 'flash'));