<?php

function lu_enqueue() {
    wp_register_style( 'lu_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
    wp_register_style( 'lu_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_register_style( 'lu_style', get_template_directory_uri() . '/assets/style.css' );
    wp_register_style( 'lu_dark', get_template_directory_uri() . '/assets/css/dark.css' );
    wp_register_style( 'lu_font_icons', get_template_directory_uri() . '/assets/css/font-icons.css' );
    wp_register_style( 'lu_animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_register_style( 'lu_magnific_popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_register_style( 'lu_responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_register_style( 'lu_custom', get_template_directory_uri() . '/assets/css/custom.css' );

    wp_enqueue_style( 'lu_google_fonts' );
    wp_enqueue_style( 'lu_bootstrap' );
    wp_enqueue_style( 'lu_style' );
    wp_enqueue_style( 'lu_dark' );
    wp_enqueue_style( 'lu_font_icons' );
    wp_enqueue_style( 'lu_animate' );
    wp_enqueue_style( 'lu_magnific_popup' );
    wp_enqueue_style( 'lu_responsive' );
    wp_enqueue_style( 'lu_custom' );

    wp_register_script( 'lu_plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), false, true );
    wp_register_script( 'lu_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'lu_plugins' );
    wp_enqueue_script( 'lu_functions' );
}
