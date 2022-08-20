<?php

/*
Plugin Name: Pagerange Disable Gutenberg
Plugin URI: http://pagerange.com/projects/wordpress/disable_gutenberg
Description: Gutenberg sucks.  Just disable the damned thing.  
Version: 1.0.0
Author: Pagerange
Author URI: http://pagerange.com
Text Domain: prdisablegutenberg
License: MIT
*/

if (!defined('ABSPATH')) die('Direct script access is not allowed');

if(!function_exists('disable_gutenberg_editor')) {

    function disable_gutenberg_editor()
    {
        return false;
    }

    add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

}
