<?php
  $logo = get_sub_field('logo');
  $link = get_sub_field('link');

  // Small check incase the field is still set to 'Image URL'
  if (!is_array($logo)) {
    $logo = array(
      'url' => $logo,
      'alt' => ''
    );
  }

  // Print image as span, if link is not defined
  if ($link == "") {
    echo '<span><img alt="' . $logo['alt']  . '" class="site-footer__grid__left__logo" src=' . esc_url($logo['url']) . '></span>' ;
  }

  // Print image as a, if link is defined
  else {
    echo '<a href="' . esc_url($link) . '" aria-label="'.$logo['alt'].'"><img alt="' . $logo['alt']  . '" class="site-footer__grid__left__logo" src=' . esc_url($logo['url']) . '></a>' ;
  }
?>