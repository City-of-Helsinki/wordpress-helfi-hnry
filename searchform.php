<?php
  $search_input_aria = function_exists('pll__') ? pll__('Syötä hakusana haettaville ratkaisuille') : 'Syötä hakusana haettaville ratkaisuille';
  $search_button_aria = function_exists('pll__') ? pll__('Hae ratkaisuja') : 'Hae ratkaisuja';

?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div>
    <label class="screen-reader-text" for="s"><?php echo _x( 'Search for:', 'label' ); ?></label>
    <input placeholder="<?php echo $search_input_aria ?>" aria-label="<?php echo $search_input_aria ?>" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <input aria-label="<?php echo $search_button_aria ?>" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
  </div>
</form>