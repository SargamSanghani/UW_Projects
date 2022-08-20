<?php

$title = "Menu";

$categories = getAllCategories();
$current_category = 'All';
$search = "";
$products = [];

// fetching current chosen category
if (isset($_GET['category'])) {
    foreach ($categories as $key => $value) {
        if ($value['id'] == $_GET['category']) {
            $current_category = $value['category_name'];
        }
    }

    // fetching products data category wise
    $products = getProducts($_GET['category']);
}

// fetching data from the keywords from search bar
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $products = searchProducts(trim($_GET['search']));
}

view('menu', compact('title', 'categories', 'products', 'current_category', 'search'));