<?php

// Clean up the head
if (function_exists('remove_action')) {

	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
}

// Add menu functionality
if (function_exists('register_nav_menus')) {

	register_nav_menus();
}
