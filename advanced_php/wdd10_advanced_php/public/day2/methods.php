<?php

if('GET' == $_SERVER['REQUEST_METHOD']) {
    $resp = [
        'method' => 'GET'
    ];
}

if('POST' == $_SERVER['REQUEST_METHOD']) {
    $resp = [
        'method' => 'POST'
    ];
}


if('PUT' == $_SERVER['REQUEST_METHOD']) {
    $resp = [
        'method' => 'PUT'
    ];
}

if('DELETE' == $_SERVER['REQUEST_METHOD']) {
    $resp = [
        'method' => 'DELETE'
    ];
}

if('FUBAR' == $_SERVER['REQUEST_METHOD']) {
    $resp = [
        'method' => 'FUBAR'
    ];
}

header('Content-Type: application/json');

echo json_encode($resp);