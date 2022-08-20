<?php

/** Our Utility Functions */

/**
 * Escape string for safe output
 *
 * @param string $str
 * @return string
 */
function e(string $str):string
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}

/**
 * Load view with data
 *
 * @param string $view_name
 * @param array $data
 * @return void
 */
function view(string $view_name, $data = []): void {

    try {
        extract($data);
        $path = __DIR__ . '/../views/' . $view_name . '.view.php';
        if (!file_exists($path)) {
            throw new Exception('View ' . $path . ' not found!');
        }
        require($path);
    } catch(Exception $e) {
        echo $e->getMessage();
        die;
    }
}

function dd($var) {
    echo '<pre>';
    print_r($var);
    die;
}

/**
 * Checking if user is logged in or not
 *
 * @return boolean
 */
function isLoggedIn() {
    return $_SESSION['user_id'] ?? false;
}

use App\Lib\Interfaces\ILogger;

/**
 * A method to log user activities
 *
 * @param ILogger $logger
 * @param string $event
 * @return void
 */
function logEvent(ILogger $logger, string $event = '') {
    if (empty($event)) {

        // setting default time zone to canada central
        date_default_timezone_set("Canada/Central");

        // declaring variable for event detail
        $currentTime = date("Y-m-d H:i:s");
        $requestURI = $_SERVER['REQUEST_METHOD'];
        $qString = $_SERVER['REQUEST_URI'];
        $browserData = $_SERVER['HTTP_USER_AGENT'];

        $event = $currentTime . " | " . $requestURI . " | " . ($qString ? ($qString .  " | ") : "") . http_response_code() . " | " . $browserData;
    } 
    
    $logger->write($event);
}

/**
 * A function to round off decimal number with desired point
 *
 * @param [type] $number
 * @param [type] $decimalPoint
 * @return void
 */
function roundOff($number, $decimalPoint) {
    return number_format((float)$number, $decimalPoint, '.', '');

}