<?php

    $tracker = json_decode($_COOKIE['tracker'] ?? '', true) ?? [];

    // getting current selected tab name
    $current_path = str_replace('php', '', preg_replace("/[^a-z]+/", "", $_SERVER['REQUEST_URI']));

    // restricting for the same page visit
    $last_visited['title'] = '';
    if ($tracker) {
        $last_visited = array_reverse($tracker)[0];
    }

    // checking if current tab is one of the 5 pages and then storing cookie
    if (($current_path == 'index' || $current_path == 'shop' || $current_path == 'about' || $current_path == 'blogs' || $current_path == 'contact')
    && (strtolower($current_path) != strtolower($last_visited['title']))) {

        array_push($tracker, ['title'=>ucfirst($current_path), 'file'=>$current_path . '.php']);
        setcookie('tracker', json_encode($tracker));

    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .menu-list {
            border: 1px solid;
            margin: 15px 0;
        }

        .menu-list a {
            padding: 20px 30px;
        }

        .mr0 {
            margin-right: 0;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="menu-list">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blogs.php">Blogs</a>
            </li>
        </ul>
    </div>