<?php

session_start();
define('ENV', 'development');

$flash = $_SESSION['flash'] ?? [];
unset($_SESSION['flash']);

$post = $_SESSION['post'] ?? [];
unset($_SESSION['post']);

$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);

$cart = $_SESSION['cart'] ?? [];

// generating csrf token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = md5(uniqid(mt_rand(), true));
}

/**
 * A function to get csrf token
 *
 * @return void
 */
function csrf() {
    return $_SESSION['csrf_token'];
}

// checking if CSRF token matches or not
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    if ($_POST['csrf_token'] != $_SESSION['csrf_token']) {
        die("CSRF token mismatch!");
    }
}

use App\Lib\Interfaces\ILogger;
use App\Lib\DatabaseLogger;
use App\Lib\FileLogger;

require __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/connect.php';
require __DIR__ . '/../models/register-db.php';
require __DIR__ . '/../models/login-db.php';
require __DIR__ . '/../models/common-db.php';

$dbLogger = new DatabaseLogger($dbh);

$file = __DIR__ . '/../logs/events.log';
$fh = fopen($file, 'a');
$fileLogger = new FileLogger($fh);

logEvent($dbLogger);
logEvent($fileLogger);

$total = [];
// calculating totals of cart price
if (count($cart) > 0) {
    $priceArray = array_column($cart, 'total_price');
    $subTotal = array_sum($priceArray);
    $total = [
        "sub_total" => roundOff($subTotal, 2),
        "gst" => roundOff($subTotal * 0.05, 2),
        "pst" => roundOff($subTotal * 0.07, 2),
        "delivery_charges" => 0,
        "total" => roundOff($subTotal + ($subTotal * 0.05) + ($subTotal * 0.07), 2)
    ];
}

$allowed = ['about-us', 'contact-us', 'index' ,'menu', 'detail', 'profile', 'sign-up', 'login', 'not-found', 'process-login', 'process-logout', 'cart', 'checkout', 'thankyou'];

if(empty($_GET['p'])){

    $page = 'index';

} elseif (in_array($_GET['p'], $allowed)){

    $page = $_GET['p'];

} else {

    http_response_code(404);
    $page = 'not-found';

}

$path = __DIR__ . '/../controllers/' . $page . '.php';

require($path);