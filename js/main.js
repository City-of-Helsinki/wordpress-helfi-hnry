jQuery('a#toggle').click(function() {
  jQuery('div.menu-main-container ul').slideToggle(200, function() {
    // Animation complete.
  });
  jQuery('div.menu-main-en-container ul').slideToggle(200, function() {
    // Animation complete.
  });
  jQuery('.toggler--open').toggle();
  jQuery('.toggler--closed').toggle();
  jQuery('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').toggleClass('open');
});

/**
 * Automatically open menu toggle for development
 */
// jQuery(document).ready(function(){
//   jQuery('a#toggle').click();
// });
jQuery(document).ready(function(){
  let btn = jQuery('#back-to-top');

  btn.on('click', function(e) {
    e.preventDefault();
    jQuery('html, body').animate({scrollTop:0}, '300');
  });
});

