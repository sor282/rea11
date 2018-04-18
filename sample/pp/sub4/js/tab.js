// JavaScript Document

$(document).ready(function(){
  var cnt=4;
  $('.tabs .contlist:eq(0)').show(); 
  $('.tabs .tab1').css('background','url(images/content2/tab1on.jpg)');
  
  $('.tabs .tab').each(function (index) {
    $(this).click(function(){    
	  $(".tabs .contlist").hide(); 
	  $(".tabs .contlist:eq("+index+")").show();
	  for(var i=1;i<=cnt;i++){
           $('.tab'+i).css('background','url(images/content2/tab'+i+'.jpg)');
      }
      $(this).css('background','url(images/content2/tab'+(index+1)+'on.jpg)'); 
   });
  });
});
