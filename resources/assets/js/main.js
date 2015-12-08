$( document ).ready(function() {
    if ($.browser.msie ||  $.browser.msedge ||  $.browser.msedge)
    {
    	$('.Upfront').removeAttr('style');
    	$('.Upfront--first, .Upfront--second, .Upfront--third, .Upfront--fourth, .Upfront--fifth').css({
    		height: "20vh",
    		paddingTop: 0,
    		paddingBottom: 0
    	});
    }
});