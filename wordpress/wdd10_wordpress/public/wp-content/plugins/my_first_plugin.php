<?php

/*
Plugin Name: My First Plugin
*/

if(!function_exists('my_first_plugin')) {
    function my_first_plugin() {
        echo "\n<!--My First Plugin is Active! -->\n";
    }
    add_action('wp_head', 'my_first_plugin');
}