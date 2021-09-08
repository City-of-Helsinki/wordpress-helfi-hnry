<div class="page-container">
    <a id="back-to-top" class="back-to-top">
        <img src="<?php bloginfo('template_directory'); ?>/images/arrow-up.png" class="back-to-top__arrow">
                <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Takaisin ylös' );
                }else{
                    echo 'Takaisin ylös';
                } ?>
    </a>
</div>
<footer class="site-footer">

    <div class="page-container">
        <div class="site-footer__grid">
            <div class="site-footer__grid__left">
            <?php
                $language = pll_current_language();
                if( $language == 'fi'){ ?>

                <div class="site-footer__grid__left__text site-footer__grid__left__text--fi">
                    <?php the_field('text', 'option'); ?>
                </div>

                <?php } else { ?>
                    <div class="site-footer__grid__left__text site-footer__grid__left__text--en">
                        <?php the_field('text_en', 'option'); ?>
                    </div>
                <?php } ?>



                <div class="site-footer__grid__left__logos">

        <?php $language = pll_current_language();
          if( $language == 'fi'){ ?>
            <?php if( have_rows('logos', 'option') ):

            // Loop through rows.
            while( have_rows('logos', 'option') ) : the_row();

                // Load sub field value.
                $logo = get_sub_field('logo');
                $link = get_sub_field('link');
                // Do something...
                echo '<a href="' . esc_url($link) . '"><img class="site-footer__grid__left__logo" src=' . esc_url($logo) . '></a>' ;
            // End loop.
            endwhile;

            // No value.
            else :
            // Do something...
            endif;?>
          <?php } else { ?>
            <?php if( have_rows('logos_en', 'option') ):

            // Loop through rows.
            while( have_rows('logos_en', 'option') ) : the_row();

                // Load sub field value.
                $logo = get_sub_field('logo');
                $link = get_sub_field('link');
                // Do something...
                echo '<a href="' . esc_url($link) . '"><img class="site-footer__grid__left__logo" src=' . esc_url($logo) . '></a>' ;
            // End loop.
            endwhile;

            // No value.
            else :
            // Do something...
            endif;?>
        <?php } ?>


                </div>
                <?php if (get_field('saavutettavuusseloste', 'option')){ ?>
                    <a class="footer-saavutettavuusseloste" href="<?php get_field('saavutettavuusseloste', 'option'); ?>">
                    <?php if ( function_exists ( 'pll_e' ) ){
                    pll_e( 'Saavutettavuusseloste' );
                    }else{
                        echo 'Saavutettavuusseloste';
                    } ?>
                    <span>(pdf)</span>
                    <a>
                <?php } ?>
            </div>
            <a href="<?php bloginfo('url'); ?>">
                <?php get_template_part('template-parts/squares'); ?>
            </a>
        </div>
    </div>

</footer>



<?php wp_footer(); ?>

</body>
</html>
