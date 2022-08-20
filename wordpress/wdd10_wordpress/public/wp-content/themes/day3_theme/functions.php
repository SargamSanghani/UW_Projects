<?php

register_nav_menus();
add_theme_support('post-thumbnails');

/**
 * Properly enqueue our stylesheets
 */
if(!function_exists('wdd10_load_styles')) {

    function wdd10_load_styles() {
        wp_enqueue_style('wdd10', get_stylesheet_uri(), ['bootstrap']);
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    }    

}

add_action('wp_enqueue_scripts', 'wdd10_load_styles', 10);

/** 
 * properly enqueue our javascript
 */
if(!function_exists('wdd10_load_scripts')) {
    function wdd10_load_scripts() {
        wp_enqueue_script('bootstrap', 
                    'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js', ['jquery'],
                null,
            true);
    }
}

add_action('wp_enqueue_scripts', 'wdd10_load_scripts');
