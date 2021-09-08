<?php

add_theme_support( 'shortcode' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu', 'theme' ),
        'language' => __( 'Language', 'theme'),
    )
);


function disable_editor_fullscreen_by_default() {
	$script = "window.onload = function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } }";
	wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'disable_editor_fullscreen_by_default' );

// Simple security

remove_action('wp_head', 'wp_generator'); // remove version info from header

function no_wordpress_errors(){
    return 'Error: The username or password you entered is incorrect';
  }
  add_filter( 'login_errors', 'no_wordpress_errors' );
