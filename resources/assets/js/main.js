$( document ).ready(function() {

	/* IE Detection and adaptation */

    if ($.browser.msie ||  $.browser.msedge)
    {
    	$('.Upfront').removeAttr('style');
    	$('.Upfront--first, .Upfront--second, .Upfront--third, .Upfront--fourth, .Upfront--fifth').css({
    		height: "33vh",
    		paddingTop: 0,
    		paddingBottom: 0
    	});
    }

});