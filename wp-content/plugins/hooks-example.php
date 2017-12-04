<?php

/*
*	Plugin Name: Hooks Example
*/

/*add_filter('the_title', 'lu_title');

function lu_title($title) {
	return 'Hooked: ' . $title;
}

add_action('wp_footer', 'lu_footer_shoutout');

function lu_footer_shoutout() {
	echo 'Hooked example plugin was here. <br>';
}

add_action('wp_footer', 'lu_footer_shoutout_v2', 5);

function lu_footer_shoutout_v2() {
	echo 'Hooked example plugin was here. Version 2 <br>';
}
*/

add_action('wp_footer', 'lu_footer');

function lu_footer() {
	do_action('lu_custom_footer');
}

add_action('lu_custom_footer', 'lu_kill_wp');

function lu_kill_wp() {
	echo 'Custom hook';
}