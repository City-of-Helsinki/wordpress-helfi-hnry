jQuery('a#toggle').click(function() {
  jQuery('div.mobile-top-menu ul').slideToggle(200, function() {
    // Animation complete.
  });
  jQuery('div.menu-ilman-polylangia-container ul').slideToggle(200, function() {
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
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');

    backToTopButton.addEventListener('click', function() {
        // Scroll to the top of the page
        window.scrollTo(0, 0);

        // Set focus to a specific element at the top of the page
        // Replace 'element-to-focus' with the ID of the element you want to focus
        const elementToFocus = document.getElementById('jump-to-content');
        console.log('clicked')
        if (elementToFocus) {
          console.log('focused')
            elementToFocus.focus();
            console.log(elementToFocus);
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
  // Select all anchor tags
  const links = document.querySelectorAll('a');
  links.forEach(function(link) {
    // Check if the link opens in a new tab
    if (link.target === '_blank') {
      // Add an aria-label or append text to the link's existing text
      const newTabMessage = ' (opens in a new tab)';
      link.setAttribute('aria-label', link.textContent + newTabMessage);
    }

    // Check if the link is for a PDF file
    if (link.href.endsWith('.pdf')) {
      // Add an aria-label or append text to the link's existing text
      const pdfMessage = ' (PDF file)';
      link.setAttribute('aria-label', link.textContent + pdfMessage);
    }
  });
});

