
$(function(){
	var effect = 'slide';

    var options = { direction: 'left' };

    var duration = 300;

 $("#slideMenu").hide();
 $(".btnMenu").click(function() {

	 $("#slideMenu").toggle(effect, options, duration);
 }); 
 
 $("#slideMenu").click(function() {
	 $("#slideMenu").toggle(effect, options, duration);

 });

});
