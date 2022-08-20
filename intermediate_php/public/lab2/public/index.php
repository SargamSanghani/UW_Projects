<?php

define('ENV', 'development');

include __DIR__ . '/../app/functions.php';
require __DIR__ . '/../app/connect.php';
require __DIR__ . '/../models/user.php';


$allowed = ['about-us', 'contact-us', 'index' ,'item-detail', 'profile', 'sign-up'];


if(empty($_GET['p'])){
    $page = 'home';
} elseif(in_array($_GET['p'], $allowed)){
    $page = $_GET['p'];
} else {

    http_response_code(404);

    view('error404');

}



$path = __DIR__ . '/../controllers/' . $page . '.php';

require($path);