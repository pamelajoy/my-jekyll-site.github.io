// primary javascript file


jQuery(document).ready(function($) {

  /* Smooth Scroll */

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          }
        });
      }
    }
  });
// http://kenwheeler.github.io/slick/
  $('.variable-width').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    initialSlide: 1,
  });

  var distance = $('.navbar-bottom').offset().top,
  $window = $(window);

  $window.scroll(function() {
      if ( $window.scrollTop() >= distance ) {
        console.log('hi');
         $('.navbar-bottom').addClass('d-none');
         $('.navbar-top .nav-bg').css('visibility', 'visible');
         $('.navbar-top .nav-bg').css('opacity', '1');
         $('.navbar-top .container').addClass('add-bg-color');
      } else {
        $('.navbar-bottom').removeClass('d-none');
        $('.navbar-top .nav-bg').css('visibility', 'hidden');
         $('.navbar-top .nav-bg').css('opacity', '0');
         $('.navbar-top .container').removeClass('add-bg-color');
      }
  });

    
});