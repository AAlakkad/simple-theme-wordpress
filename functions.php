<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', [], '3.3.5', 'all' );
    wp_register_style('our-custom-css', get_template_directory_uri() . '/custom.css', ['bootstrap']);

    wp_enqueue_style('our-custom-css');
} );

add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', function() {
    add_image_size ( 'our-size', 620, 320 );
});