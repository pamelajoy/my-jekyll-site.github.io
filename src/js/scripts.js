// primary javascript file
jQuery(document).ready(function($) {
});
var tickerWrapper = $('.js-ticker');
console.log(tickerWrapper);

tickerWrapper.each(function(element) {
  var tickerTextNode = $(this).find('h3');
  var tickerText = tickerTextNode.text();
  var times = 40;
  for(var i=0; i < times; i++){
    tickerTextNode.append(" " + tickerText);
  }
});
