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