<?php // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="consepts">
    <div class="page-container">
    <h2 class="consepts__title">
    <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Ratkaisut' );
                }else{
                    echo 'Ratkaisut';
                } ?></h2>
    <div class="consepts__search">
        <?php get_search_form(); ?>
    </div>

    <?php
    if (get_field('shortcode')){
        $shortcode = get_field('shortcode');
    }else{
        $shortcode = '[hnry_am_post_grid]';
    }
    echo do_shortcode($shortcode);
    ?>

    </div>

</div>
