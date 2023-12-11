<?php
  $logo = get_sub_field('logo');
  $link = get_sub_field('link');
  $logo_alt_text = get_sub_field('logo_alt_text');

  // Ensure that $logo_alt_text is set and is a string
  if (!is_string($logo_alt_text)) {
      $logo_alt_text = '';
  }

  // Small check in case the field is still set to 'Image URL'
  if (!is_array($logo)) {
    $logo = array(
      'url' => $logo,
      'alt' => $logo_alt_text
    );
  }

  // Escape the alt text
  $escaped_alt_text = esc_attr($logo_alt_text);

  // Print image as span, if link is not defined
  if (empty($link)) {
    echo '<span><img alt="' . $escaped_alt_text  . '" class="site-footer__grid__left__logo" src=' . esc_url($logo['url']) . '></span>';
  }

  // Print image as a, if link is defined
  else {
    echo '<a href="' . esc_url($link) . '" aria-label="'.$escaped_alt_text.'"><img alt="' . $escaped_alt_text  . '" class="site-footer__grid__left__logo" src=' . esc_url($logo['url']) . '></a>';
  }
