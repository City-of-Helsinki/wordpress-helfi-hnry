<?php

function hnry_theme_version(): string {
	return ( defined( 'WP_DEBUG' ) && WP_DEBUG )
		? (string) time()
		: wp_get_theme()->get( 'Version' );
}

function load_stylesheets() {
	wp_enqueue_style(
		'hnry',
		get_template_directory_uri() . '/css/style.css',
		array(),
		hnry_theme_version(),
		'all'
	);
}
add_action( 'enqueue_block_assets', 'load_stylesheets' );

function load_javascript(){
    wp_enqueue_script(
		'hnry',
		get_template_directory_uri() . '/js/main.js',
		array( 'jquery' ),
		hnry_theme_version(),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'load_javascript' );

function wpb_add_google_fonts() {
    wp_enqueue_style(
		'wpb-google-fonts',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap',
		false
	);
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
