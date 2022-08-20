<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, PATCH, POST, GET, OPTIONS, DELETE");
header('Content-Type: application/json');

try {

    $dbh = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    if('POST' == $_SERVER['REQUEST_METHOD']) {
        require __DIR__ . '/post.php';
    }

    if('GET' == $_SERVER['REQUEST_METHOD']) {
        require __DIR__ . '/get.php';
    }

    if('PUT' == $_SERVER['REQUEST_METHOD']) {
        require __DIR__ . '/put.php';
    }

    if('DELETE' == $_SERVER['REQUEST_METHOD']) {
        require __DIR__ . '/delete.php';
    }

} catch(Exception $e) {
    $resp = [];
    $resp['error'] = $e->getMessage();
    echo json_encode($resp);
    die;
}



