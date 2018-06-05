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

  var lastScrollTop = 0;
  var stickyTop = $('#menu').offset().top;
  var unstickTop = $("#header").offset().top + $("#header").height();
  console.log(unstickTop);

  $(window).on( 'scroll', function(){
    var st = $(this).scrollTop();
    //If scrolling down check if #menu is at top and then stick
     if (st > lastScrollTop){
      // down scroll code
        if ($(window).scrollTop() >= stickyTop) {
            $('#menu').css({"position": "fixed", "top": "0px", "right": "0px", "width": "100%", "z-index": "100", "padding-left": "30px"});
        } else {
            // $('#menu').css({"position": "relative", "top": "0px", "right": "0px", "width": "100%", "padding-left": "0"});
            return;
        }
     } 
     //If scrolling up check if the bottom of the header is at the top and then unstick
     else {
      console.log('up');
      //upscroll code
      if ($(window).scrollTop() <= unstickTop) {
            $('#menu').css({"position": "static", "top": "auto", "right": "auto", "padding-left": "0"});
        } else {
          return;
        }
     }
     lastScrollTop = st;
      
  });
    
});