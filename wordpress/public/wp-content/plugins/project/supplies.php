<?php

/*
Plugin Name: Project Supplies
Author: Sargam Sanghani
Description: A plugin to display items for sale (supplies)
Version: 1.0
*/

// enqueuing scripts for style and javascript file 
if (!function_exists('wdd_project_scripts')) {
    function wdd_project_scripts()
    {
        $style = plugin_dir_url(__FILE__) . 'assets/style.css';

        wp_enqueue_style('wdd_project', $style);
    }
    add_action('wp_enqueue_scripts', 'wdd_project_scripts');
}

// a function to create supplies shortcode 
if (!function_exists('wdd_supplies')) {
    function wdd_supplies($atts, $content)
    {
        $output = <<<EOT
                    <div class='item'>
                        <div class="card">
                            <h2 class='mt-3 mb-3'>{$atts['title']}</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{$atts['src']}" width="300px" alt="{$atts['title']}" />
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><strong>Price:</strong> {$atts['price']}</li>
                                        <li><strong>Description:</strong> {$content}</li>
                                    </ul>
                                    <button class="btn-blue">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                EOT;
        return $output;
    }
    add_shortcode('supply', 'wdd_supplies');
}
