<?php
  $my_menu = wp_get_nav_menu_object( 'Main' );
  //$logo = esc_attr( get_option( 'site_logo' ) ) ;
?>
<style>
   .desktop-header-grid ul {
      grid-template-columns: repeat(<?php echo $my_menu->count; ?>, auto);
    }
</style>

<header class="desktop-header">
    <div class="desktop-header-grid">
      <a aria-label="<?php echo hnry_get_page_title();?>" href="<?php bloginfo('url'); ?>" class="desktop-header__logo-wrap">
        <?php $language = pll_current_language();
          if( $language == 'fi'){ ?>
          <img src="<?php bloginfo('template_directory'); ?>/images/hnry_logo.png" alt="<?php echo hnry_get_page_title(); ?>" class="header--logo">
          <?php } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/images/hnry_logo_en.png" alt="<?php echo hnry_get_page_title(); ?>" class="header--logo">
        <?php } ?>
      </a>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu',
          )
      ); ?>
      <div class="desktop-header-grid__spacer"></div>
      <div class="desktop-header-grid__logos">

        <?php $language = pll_current_language();
          if( $language == 'fi'){ ?>
            <?php if( have_rows('logos', 'option') ):

            // Loop through rows.
            while( have_rows('logos', 'option') ) : the_row();

               get_template_part('template-parts/logos');
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

              get_template_part('template-parts/logos');
            endwhile;

            // No value.
            else :
            // Do something...
            endif;?>
        <?php } ?>


      </div> <!-- desktop-header-grid__logos END -->
      <div class="desktop-header-grid__language-switcher">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'language',
            'menu_class' => 'language',
          )
      ); ?>
      </div>
    </div>
</header>
