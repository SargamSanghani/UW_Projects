<?php

/*
Plugin Name: WDD10 CTA
Author: Steve George
Description: Add a Call To Action Button
Version: 1.0
*/

if(!function_exists('wdd10_cta_scripts')) {
    function wdd10_cta_scripts() {
        $style  = plugin_dir_url(__FILE__) . 'assets/wdd10_cta.css';
        $script  = plugin_dir_url(__FILE__) . 'assets/wdd10_cta.js';
        
        wp_enqueue_style('wdd10_cta', $style);
        wp_enqueue_script('wdd10_cta', $script, ['jquery'], null, true);
    }
    add_action('wp_enqueue_scripts', 'wdd10_cta_scripts');
}


if(!function_exists('wdd10_cta')) {
    function wdd10_cta($atts, $content) {
        $link = $atts['link'];
        $out = "<a href=\"{$link}\" class=\"cta\">{$content}</a>";
        return $out;
    }
    add_shortcode('cta', 'wdd10_cta');
}
