<?php

$dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ("GET" == $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/get.php';
}

if ("POST" == $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/post.php';
}

if ("PUT" == $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/put.php';
}

if ("DELETE" == $_SERVER['REQUEST_METHOD']) {
    require __DIR__ . '/delete.php';
}