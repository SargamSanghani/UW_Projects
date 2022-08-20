<?php

/**
 * Utility Functions
 * @file functions.php
 */

function e($str)
{
    if(is_string($str)) {
        return htmlentities($str, ENT_QUOTES, "UTF-8");
    }
    return $str;
}


function dd($var, $continue = false)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if(!$continue) {
        die;
    }
}
