<?php

$title = "Thank you!";

if (isset($_SESSION['order_id'])) {

    $userInfo = getUserById($_SESSION['user_id']);

    $productList = fetchLineProducts($_SESSION['order_id']);
    $orderInfo = fetchOrders($_SESSION['order_id']);
    $orderInfo['order_id'] = $_SESSION['order_id'];
    $orderInfo['address'] = json_decode($orderInfo['address'], true);

    // emptying session cart after successful purchase
    $cart = $_SESSION['cart'] = [];
    unset($_SESSION['order_id']);

} else {
    header('Location: ?p=not-found');
}

view('thankyou', compact('title', 'orderInfo', 'total', 'userInfo', 'productList', 'flash'));