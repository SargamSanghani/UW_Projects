<?php

/* UTILITY FUNCTIONS
---------------------------------------------- */

/**
 * Esc strings for output
 * @param  string $str
 * @return string
 */
function e($str)
{
    if(is_string($str)) {
        return htmlentities($str, ENT_QUOTES, "UTF-8");
    }
    return $str;
}

/**
 * Var dump and die or optionally continue
 * @param  mixed  $var
 * @param  boolean $continue
 * @return void
 */
function dd($var, $continue = false):void
{
    echo '<pre>';
    var_dump($var);
    if(!$continue) {
        die;
    }
    echo '</pre>';
}


/* END OF UTILITY FUNCTIONS
--------------------------------------------------------- */