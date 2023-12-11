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

/**
 * Replicate the shortcode function from an plugin, as the plugin doesn't include any
 * hooks or actions.
 *
 *
 */
function hnry_am_post_grid_shortcode_mapper( $atts, $content = null ) {

	// Posts per pages.
	$posts_per_page = ( get_option( 'posts_per_page', true ) ) ? get_option( 'posts_per_page', true ) : 9;

	// Default attributes
	$shortcode_atts = shortcode_atts(
            array(
                'show_filter' 		=> "yes",
                'btn_all' 			=> "yes",
                'initial' 			=> "-1",
                'layout' 			=> '1',
                'post_type' 		=> 'post',
                'posts_per_page' 	=> $posts_per_page,
                'cat' 				=> '',
                'terms' 			=> '',
                'paginate' 			=> 'no',
                'hide_empty' 		=> 'true',
                'orderby' 			=> 'menu_order date', //Display posts sorted by ‘menu_order’ with a fallback to post ‘date’
    			'order'   			=> 'DESC',
    			'pagination_type'   => '',
    			'infinite_scroll'   => '',
    			'animation'  		=> '',
            ),
            $atts
        );

    // Params extraction
    extract($shortcode_atts);

	ob_start();

	// Texonomy arguments
	$taxonomy = 'category';
	$args = array(
		'hide_empty' => $hide_empty,
	    'taxonomy' => $taxonomy,
	    'include' => $terms ? $terms : $cat,
	);

	$filter_aria_label = function_exists('pll__') ? pll__('Näytä artikkelit: ') : 'Näytä artikkelit: ';
	$filter_all = function_exists('pll__') ? pll__('Kaikki') : 'Kaikki';

	// Get category terms
	$terms = get_terms($args); ?>
	<div class="am_ajax_post_grid_wrap" style="margin-top: 20px" data-pagination_type="<?php echo esc_attr($pagination_type); ?>" data-am_ajax_post_grid='<?php echo json_encode($shortcode_atts);?>'>

		<?php if ( $show_filter == "yes" && $terms && !is_wp_error( $terms ) ){ ?>
			<div class="asr-filter-div" data-layout="<?php echo $layout; ?>"><ul>
				<?php if($btn_all != "no"): ?>
					<button aria-label="<?php echo $filter_aria_label . $filter_all; ?>" class="asr_texonomy" data_id="-1"><?php echo $filter_all; ?></button>
				<?php endif; ?>
		        <?php foreach( $terms as $term ) { ?>
		            <button aria-label="<?php echo $filter_aria_label . $term->name; ?>" class="asr_texonomy" data_id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></button>
		        <?php } ?>
	        </ul></div>
	    <?php } ?>

	    <div class="asr-ajax-container">
		    <div class="asr-loader">
		    	<div class="lds-dual-ring"></div>
		    </div>
		    <div class="asrafp-filter-result"></div>
	    </div>
    </div>

	<?php return ob_get_clean();
}
add_shortcode('hnry_am_post_grid','hnry_am_post_grid_shortcode_mapper');

function hmry_add_aria_label_to_language_selector_menu( $atts, $item, $args ) {
	if ($args->menu_class == 'language') {
		$choose_language_aria = function_exists('pll__') ? pll__('Valitse kieli') : 'Valitse kieli';

		$atts['aria-label'] = $choose_language_aria . ' ' .$item->title;
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'hmry_add_aria_label_to_language_selector_menu', 10, 3 );

/**
 * Polylang didnt show properly, which menu item is selected.
 * Basically add triangle down html icon to the selected language markup
 */
function hmry_add_dropdown_icon_to_lang_selector( $items, $args ){
	if ($args->menu_class == 'language') {
    foreach( $items as $item ){
			$selected_language = "";
			$curr_lang = pll_current_language();
			switch($curr_lang) {
				case 'fi':
					$selected_language = "Suomi";
					break;
				case 'en':
					$selected_language = 'English';
					break;
				default:
					break;
			}

			if( $selected_language == $item->title ){
				$item->title .= ' ▼';
			}
    }
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'hmry_add_dropdown_icon_to_lang_selector', 10, 2);


add_filter('acf/register_block_type_args', 'hnry_overwrite_concepts_block_paths');
function hnry_overwrite_concepts_block_paths( $args ){

		if($args['name'] === 'acf/concepts') {
    	$args['render_template'] = 'template-parts/concepts.php';
			$args['enqueue_style'] = get_template_directory_uri() . '/css/concepts.css';
			$args['enqueue_script'] = get_template_directory_uri() . '/js/concepts.js';
		}
		if($args['name'] === 'acf/heroarrow') {
		$args['render_template'] = 'template-parts/heroarrow.php';
			$args['enqueue_style'] = get_template_directory_uri() . '/css/heroarrow.css';
		}
		if($args['name'] === 'acf/imgpara') {
			$args['render_template'] = 'template-parts/imgpara.php';
				$args['enqueue_style'] = get_template_directory_uri() . '/css/imgpara.css';
			}

    return $args;
}