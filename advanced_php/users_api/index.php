<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$dbh = new PDO('sqlite:' . __DIR__ .'/inc/database.sqlite');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



// Set CORS headers for API mode
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, PATCH, POST, GET, OPTIONS, DELETE");
header('Content-Type: application/json');



if('GET' == $_SERVER['REQUEST_METHOD']) {
    // retrieving data from server
    require __DIR__ . '/inc/get.php';
}

if('POST' == $_SERVER['REQUEST_METHOD']) {
    // creating a new resource on server
    require __DIR__ . '/inc/post.php';
}

if('PUT' == $_SERVER['REQUEST_METHOD']) {
    // (PUT or PATCH) modifying an existing resource
    require __DIR__ . '/inc/put.php';
}

if('DELETE' == $_SERVER['REQUEST_METHOD']) {
    // removing a resource from the server
    require __DIR__ . '/inc/delete.php';
}

