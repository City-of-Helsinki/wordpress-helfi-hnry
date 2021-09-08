<?php

// require get_template_directory() . '/includes/function-admin.php';
require get_template_directory() . '/includes/css-js.php';
require get_template_directory() . '/includes/settings.php';
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/block-editor.php';


require get_template_directory() .  '/includes/admin-theme.php';
require get_template_directory() .  '/includes/admin-js-css.php';
require get_template_directory() .  '/includes/polylang.php';

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
