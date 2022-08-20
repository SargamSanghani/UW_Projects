<?php

/*
Plugin Name: Lab 4 FAQ
Author: Sargam Sanghani
Description: A plugin to allow the blog authors to easy create Frequently Asked Questions
Version: 1.0
*/

// enqueuing scripts for style and javascript file 
if (!function_exists('wdd_faq_scripts')) {
    function wdd_faq_scripts()
    {
        $style = plugin_dir_url(__FILE__) . 'assets/style.css';
        $script = plugin_dir_url(__FILE__) . 'assets/wdd_faq.js';

        wp_enqueue_style('wdd_faq', $style);
        wp_enqueue_script('wdd_faq', $script, ['jquery'], null);
    }
    add_action('wp_enqueue_scripts', 'wdd_faq_scripts');
}

// a function to create faq shortcode 
if (!function_exists('wdd_faq')) {
    function wdd_faq($atts, $content)
    {
        $q = $atts['q'];
        $output = "<div class='faq'><h2 class='faq-q'>Q. {$q}</h2><div class='faq-a'>{$content}</div></div>";
        return $output;
    }
    add_shortcode('faq', 'wdd_faq');
}

// [faq q="If you were a fruit, what it would be?"] I don't know! Bear claw toffee I love tiramisu pastry oat cake lemon drops cotton candy. I love jujubes shortbread sugar plum I love. Dessert halvah tart bear claw donut jelly beans tootsie roll bonbon jelly beans. Pie sweet lollipop sesame snaps cheesecake gummi bears. Sweet jelly caramels dragée bear claw. Candy canes sweet sugar plum cheesecake jelly beans muffin cotton candy dessert. Powder halvah lemon drops cheesecake marshmallow danish candy halvah. [/faq]