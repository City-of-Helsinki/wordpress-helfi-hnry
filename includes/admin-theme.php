<?php
function mysteerio_add_admin_page() {
    // Generate Admin Page
    add_menu_page(
        'Theme Options', //page title on tab
        'Theme', // name on admin-menu
        'manage_options', // who can see, "user can"
        'mysteerio_theme', //slug
        'mysteerio_theme_create_page',
        'dashicons-format-image',
        110
    );
    add_submenu_page (
        'mysteerio_theme', // string $parent_slug
        'Logo Options', // string $page_title
        'Logo', // string $menu_title
        'manage_options', // string $capability aka "user can"
        'mysteerio_theme',// string $menu_slug
        'mysteerio_theme_create_page' // callback $function
    );
    add_action( 'admin_init', 'mysteerio_custom_settings' );
}
add_action ( 'admin_menu', 'mysteerio_add_admin_page' );

function mysteerio_custom_settings() {
    register_setting(
        'mysteerio-settings-group',// string $option_group
        'site_logo' // String $option_name
         // OPTIONAL callback $sanitalize_callback
    );
    register_setting(
        'mysteerio-settings-group',// string $option_group
        'mobile-toggler' // String $option_name
         // OPTIONAL callback $sanitalize_callback
    );
    add_settings_section(
        'mysteerio-theme-options', // String $id
        'Logo Options', // String $title
        'mysteerio_logo_options', // String $callback
        'mysteerio_theme' // String $page
    );
    add_settings_section(
        'mysteerio-theme-options', // String $id
        'Toggler Options', // String $title
        'mysteerio_toggler_options', // String $callback
        'mysteerio_theme' // String $page
    );
    add_settings_field(
        'theme_site_logo',// String $id
        'Set Logo',// String $title
        'mysteerio_site_logo',// String $callback
        'mysteerio_theme',// String $page
        'mysteerio-theme-options'// String $section, above add settings section
        // array $args
    );


}



// mysteerio_theme_create_page
function mysteerio_theme_create_page() {
    require_once( get_template_directory() . '/includes/templates/mysteerio-admin.php');
}
// mysteerio_logo_options
function mysteerio_logo_options(){

}
// mysteerio_site_logo
function mysteerio_site_logo() {
    $logoPicture = esc_attr( get_option( 'site_logo' ) ) ;
    echo '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-button" />
    <input type="hidden" id="logo-picture" name="site_logo" value="' . $logoPicture . '" />';
}

