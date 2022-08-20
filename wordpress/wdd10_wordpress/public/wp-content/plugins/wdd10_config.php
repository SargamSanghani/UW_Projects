<?php

/*
Plugin Name: WDD10 Theme Configuration
Author: Steve George <edu@pagerange.com>
Author URL: https://uwpace.ca
Description: Persistent configuration options for WDD10
*/

// Custom `the_excerpt` function for our theme
if(!function_exists('wdd10_the_excerpt')) {
    function wdd10_the_excerpt($excerpt) {
        global $post;
        if(!empty($post->post_excerpt)) {
            $new_ex = $excerpt;
        } else {
           
            $sub_ex = substr($excerpt, 0, 100);
            $space = strrpos($sub_ex, ' ');
            $sub_ex = substr($sub_ex, 0, $space);
            $new_ex = $sub_ex . '&nbsp;[&hellip;]';
        }
        
        return $new_ex;
    }
    add_filter('the_excerpt', 'wdd10_the_excerpt');

}

// Grab three posts from the 'featured' category
if(!function_exists('wdd10_featured_posts')) {
    function wdd10_featured_posts() {
        $posts = get_posts(['numberposts' => 3, 'category' => 4]);
        return $posts;
    }
}