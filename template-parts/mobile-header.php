<?php
$logo = esc_attr( get_option( 'site_logo' ) ) ;
?>
<header class="mobile-header">

<a aria-label="<?php echo hnry_get_page_title();?>" href="<?php bloginfo('url'); ?>" class="mobile-header__logo-wrap">
    <?php $language = pll_current_language();
          if( $language == 'fi'){ ?>
          <img src="<?php bloginfo('template_directory'); ?>/images/hnry_logo.png" alt="<?php echo  hnry_get_page_title(); ?>"class="mobile-header--logo">
          <?php } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/images/hnry_logo_en.png" alt="<?php echo  hnry_get_page_title(); ?>"class="mobile-header--logo">
    <?php } ?>
  </a>
  <div class="mobile-header__logos">

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
            // End loop.
            endwhile;

            // No value.
            else :
            // Do something...
            endif;?>
        <?php } ?>


  </div>

  <div class="mobile-header-grid__language-switcher">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'language',
            'menu_class' => 'language-mobile',
          )
      ); ?>
      </div>

<a aria-label="<?php echo hnry_t('Avaa/sulje mobiili navigaatio linkit'); ?>" href="#" id="toggle" class="mobile-header__toggle">
    <div class="mobile-header__toggle__wrap">
      <div id="nav-icon1" class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <br>
      <div id="nav-icon2" class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <br>
      <div id="nav-icon3" class="nav-icon active">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <br>
      <div id="nav-icon4" class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </a>
  <div class="mobile-header__nav-wrap">
    <nav role="navigation" class="mobile-header__nav">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'mobile-top-menu',
          )
      ); ?>
    </nav>
  </div>
</header>
