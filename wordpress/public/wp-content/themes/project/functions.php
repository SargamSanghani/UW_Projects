<?php

register_nav_menus();
add_theme_support('post-thumbnails');

if (!function_exists('load_styles')) {

    function load_styles()
    {
        wp_enqueue_style('style', get_stylesheet_uri(), ['bootstrap']);
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
    }
}

add_action('wp_enqueue_scripts', 'load_styles');

if (!function_exists('load_scripts')) {
    function load_scripts()
    {
        wp_enqueue_script(
            'bootstrap',
            'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js',
            ['jquery'],
            null,
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'load_scripts');

function get_featured_list()
{
    $pages_list = get_pages(['meta_key' => 'category']);
    return $pages_list;
}
