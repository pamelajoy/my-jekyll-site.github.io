// primary javascript file
jQuery(document).ready(function($) {
  var tickerWrapper = $('.js-ticker');
  tickerWrapper.each(function(){
    var tickerText = $(this).parent().html();
    var newContent = "";
    var count = 20;
    for (var i = 0; i < count; i++){
      newContent += tickerText;
    }
    var parent = $(this).parent();
    parent.append(newContent);

  });
});
