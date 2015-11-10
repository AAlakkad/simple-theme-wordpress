<?php

// Define and enqueue the theme assets
add_action( 'wp_enqueue_scripts', function() {
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', [], '3.3.5', 'all' );
    wp_register_style('our-custom-css', get_template_directory_uri() . '/custom.css', ['bootstrap']);

    wp_enqueue_style('our-custom-css');
} );

// allow each post to have thumbnail, uploaded from post edit page in dashboard
add_theme_support( 'post-thumbnails' );

// Add custom image size to be used in the theme
add_action('after_setup_theme', function() {
    add_image_size ( 'our-size', 620, 320 );
});

// Hide admin bar in the front-end
add_filter('show_admin_bar', function () {
    return false;
});