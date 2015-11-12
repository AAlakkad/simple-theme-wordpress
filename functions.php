<?php

// Define and enqueue the theme assets
add_action( 'wp_enqueue_scripts', function() {
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', [], '3.3.5', 'all' );
    wp_register_style('our-custom-css', get_template_directory_uri() . '/custom.css', ['bootstrap']);
    wp_register_script( 'our-custom-js', get_template_directory_uri() . '/app.js', ['jquery'], null, true );

    wp_localize_script( 'our-custom-js', 'ourData', ['ajaxurl' => admin_url('admin-ajax.php')] );
    wp_enqueue_style('our-custom-css');
    wp_enqueue_script('our-custom-js');
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

// Add read more to excerpt
add_filter('excerpt_more', function() {
    return " [<a href=\"" . get_permalink() . "\">read more</a>]";
});

include_once 'inc/add_meta_box.php';

include_once 'inc/add_custom_taxonomies.php';

include_once 'inc/add_dashboard_page.php';

$actionName = 'aliqtisadi_ajax';
add_action( 'wp_ajax_' . $actionName, 'my_action_callback' );
add_action( 'wp_ajax_nopriv_' . $actionName, 'my_action_callback' );

function my_action_callback() {

    global $wpdb;
    $sql = "SELECT ID, post_title FROM {$wpdb->posts} ORDER BY post_date DESC LIMIT 1";
    $result = $wpdb->get_row($sql);

    echo json_encode($result);

    wp_die(); // this is required to terminate immediately and return a proper response
}