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
    <div class="consepts__images">
    <?php

        // Check rows exists.
        if( have_rows('images') ):

            // Loop through rows.
            while( have_rows('images') ) : the_row();

                // Load sub field value.
                $image = get_sub_field('image');
                // Do something...
                echo '<img class="site-footer__grid__left__logo" src=' . esc_url($image) . '>' ;
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
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
