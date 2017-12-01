<?php

// Setup

// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');
include(get_template_directory() . '/includes/theme-customizer.php');
include(get_template_directory() . '/includes/customizer/social.php');

// Hooks
add_action('wp_enqueue_scripts', 'lu_enqueue');
add_action('after_setup_theme', 'lu_setup_theme');
add_action('widgets_init', 'lu_widgets');
add_action('customize_register', 'lu_customize_register');

// Shortcodes
