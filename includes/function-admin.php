<?php

/*
@package mysteerio-johannes
==========
Admin page
==========
*/

function johannes_add_admin_page() {
    // Generate Mysteerio Admin Page
    add_menu_page(
        'Mysteerio Theme Options', //page title on tab
        'Mysteerio', // name on admin-menu
        'manage_options', // who can see, "user can"
        'mysteerio_johannes', //slug
        'johannes_theme_create_page',
        get_template_directory_uri() . '/images/Mysteerio_square.png', //dashicons, just paste name 'daschicons-admin-customizer'
        110
    );
    // Generate Mysteerio Admin Sub Pages
    add_submenu_page (
        'mysteerio_johannes', // string $parent_slug
        'Mysteerio Theme Options', // string $page_title
        'Settings', // string $menu_title
        'manage_options', // string $capability aka "user can"
        'mysteerio_johannes',// string $menu_slug
        'johannes_theme_create_page' // callback $function
    );
    add_submenu_page (
        'mysteerio_johannes', // string $parent_slug
        'Mysteerio CSS Options', // string $page_title
        'Custom CSS', // string $menu_title
        'manage_options', // string $capability aka "user can"
        'mysteerio_johannes_css',// string $menu_slug
        'johannes_theme_settings_page' // callback $function
    );
}

add_action ( 'admin_menu', 'johannes_add_admin_page' );

function johannes_theme_create_page() {

    require_once( get_template_directory() . '/includes/templates/mysteerio-admin.php');
}

function johannes_theme_settings_page() {
    echo '<h1>Mysteerio Custom CSS</h1>';
}
