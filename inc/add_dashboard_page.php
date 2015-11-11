<?php

add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
    add_menu_page( 'Theme settings', 'Theme settings', 'manage_options', 'theme-settings', 'menu_page_content', 'dashicons-admin-settings');
    add_submenu_page( 'theme-settings', 'Another Options', 'advanced options', 'manage_options', 'theme-advanced-settings', 'advanced_settings' );
}

function menu_page_content() {
    // Handle post data
    ?>
    <div>
        <h2>Theme Settings</h2>
        <form method="POST">
            <input type="text">
            <input type="submit">
        </form>
    </div>
    <?php
}

function advanced_settings() {
    // Handle post data
    ?>
    <h2>Theme Advanced Settings</h2>
    <?php
}