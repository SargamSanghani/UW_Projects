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
 * Escape special characters
 *
 * @param string $str
 * @return string
 */
function esc(string $str):string 
{
    return htmlspecialchars_decode($str, ENT_QUOTES);
}