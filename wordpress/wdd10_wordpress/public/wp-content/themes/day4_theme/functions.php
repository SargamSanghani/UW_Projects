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

// if(!function_exists('say_something_funny')) {
//     function say_something_funny()
//     {
//         echo "\n<!-- SOMETHING FUNNY! -->\n";
//     }
//     add_action('wp_head', 'say_something_funny', 10);
// }



// if(!function_exists('say_something_not_funny')) {
//     function say_something_not_funny()
//     {
//         echo "\n<!-- SOMETHING NOT FUNNY! -->\n";
//     }
//     add_action('wp_head', 'say_something_not_funny', 0);
// }


// if(!function_exists('say_hello')) {
//     function say_hello()
//     {
//         echo "\n<!-- HI THERE! -->\n";
//     }
//     add_action('wp_head', 'say_hello', 8);
// }

// if(!function_exists('say_goodbye')) {
//     function say_goodbye()
//     {
//         echo "\n<!-- ADIOS, AMIGO! -->\n";
//     }
//     add_action('wp_footer', 'say_goodbye', 8);
// }

// if(!function_exists('cs_the_title')) {
//     function cs_the_title()
//     {
//         global $post;
//         $title = $post->post_title;
//         echo strto            die('here');e_title', 'cs_the_title');
// }

// function cs_the_title()
// {
//     global $post;
//     $title = $post->post_title;
//     echo strtoupper($title);
// }

// if(!function_exists('bad_title')) {
//     function bad_title()
//     {
//         echo 'HI THERE!';
//     }
//     add_action('the_title', 'bad_title');
// }

if(!function_exists('happy_title')) {
     function happy_title($title)
     {
         return $title . ' &#128540;';
}
     add_filter('the_title', 'happy_title');
}


if(!function_exists('wdd10_get_the_title')) {
    function wdd10_get_the_title() {
        global $post;
        // $title = get_the_title($post);
        $title = $post->post_title;
        return $title;
    }
}

// Custom `the_excerpt` function for our theme
if(!function_exists('wdd10_the_excerpt')) {
    function wdd10_the_excerpt($excerpt) {
        global $post;
        if(!empty($post->post_exerpt)) {
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

if(!function_exists('wdd10_featured_posts')) {
    function wdd10_featured_posts() {
        $posts = get_posts(['numberposts' => 3, 'category' => 4]);
        return $posts;
    }
}





