<?php

/*
Plugin Name: WDD Callout
*/



if(!function_exists('wdd_callout')) {
    function wdd_callout($atts, $content)
    {
        if(empty($atts['link_text'])) {
            $atts['link_text'] = "Read more";
        }

        $out = <<<EOT

            <div class="callout">
            <h2>{$atts['h']}</h2>
            {$content}
            <p><a href="{$atts['link']}">{$atts['link_text']}</a></p>
            </div>


        EOT;

        return $out;
    }
    add_shortcode('callout', 'wdd_callout');
}

// [callout h="Drives on Sale!" link="/products" link_text="Read more"] add a paragraph of 
// content to be used in the callout [/callout]
