<?php


function mysteerio_load_admin_scripts( $hook ){

    if ( 'toplevel_page_mysteerio_theme' != $hook ){
        return;
    }
    wp_register_style(
        'theme_admin', get_template_directory_uri() . '/css/theme.admin.css',
        array(),
        '1',
        'all'
    );

    wp_enqueue_style(
        'theme_admin'
    );

    wp_enqueue_media();

    wp_register_script(
        'theme-admin-script',
        get_template_directory_uri() . '/js/theme.admin.js',
        array('jquery'),
        '1',
        true
    );

    wp_enqueue_script( 'theme-admin-script' );
}

add_action( 'admin_enqueue_scripts', 'mysteerio_load_admin_scripts');
