
$(function(){
	var effect = 'slide';

    var options = { direction: 'left' };

    var duration = 300;

 $("#slideMenu").hide();
 $(".btnMenu").click(function() {

    if ($("#slideMenu").is(":visible") ) {
	    $('#wrapM').css({'overflow':'auto'});
	} else {
		$('#wrapM').css({'width':'100%','height':'100%','overflow':'hidden'});
	}
	 $("#slideMenu").toggle(effect, options, duration);
 }); 
 


 $("#slideMenu").click(function() {
	 $("#slideMenu").toggle(effect, options, duration);

    if ($("#slideMenu").is(":visible") ) {
	    $('#wrapM').css({'overflow':'auto'});
	} else {
		$('#wrapM').css({'width':'100%','height':'100%','overflow':'hidden'});
	}
 });

});

