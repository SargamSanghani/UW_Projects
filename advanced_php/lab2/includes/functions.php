<?php

/** Our Utility Functions */

/**
 * Escape string for safe output
 *
 * @param string $str
 * @return string
 */
function e(string $str): string
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}


/**
 * A function to dump and die variable
 *
 * @param [type] $var
 * @return void
 */
function dd($var)
{
    echo '<pre>';
    print_r($var);
    die;
}

/**
 * A function to round off decimal number with desired point
 *
 * @param [type] $number
 * @param [type] $decimalPoint
 * @return void
 */
function roundOff($number, $decimalPoint)
{
    return number_format((float)$number, $decimalPoint, '.', '');
}

/**
 * a function to escape html
 *
 * @param string $str
 * @return string
 */
function html(string $str): string
{
    $allowed = [
        '<p>',
        '<br>',
        '<hr>',
        '<em>',
        '<strong>',
        '<b>',
        '<i>',
        '<img>',
        '<h1>',
        '<h2>',
        '<h3>',
        '<h4>',
        '<h5>',
        '<h6>',
    ];

    $stripped = strip_tags($str, $allowed);

    $entitized = htmlentities($stripped, ENT_QUOTES, "UTF-8");

    $clean_html = htmlspecialchars_decode($entitized, ENT_NOQUOTES);

    return $clean_html;
}
