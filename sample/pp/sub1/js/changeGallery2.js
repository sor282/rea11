// JavaScript Document
  $(document).ready(function() {
       var timeonoff;
       var imageCount=6;  
       var cnt=1;
       $('.btn1').addClass('clk1');
       $('.btn2').addClass('clk1');
       $('.btn3').addClass('clk1');
	   $('.btn4').addClass('clk1');
       $('.btn5').addClass('clk1');
	   $('.btn6').addClass('clk1');
       $('.btn1').addClass('clk2');
       $('.visibleBox .list1').fadeIn('slow');	

       function timer_gallery(){
           cnt++;
           for(var i=1;i<=imageCount;i++){
              $('.visibleBox .list'+i).hide();
           }
          $('.visibleBox .list'+cnt).fadeIn('slow');
		
          for(var i=1;i<=imageCount;i++){
               $('.btn'+i).removeClass('clk2');
          }
           $('.btn'+cnt).addClass('clk2'); 
            if(cnt==imageCount)cnt=0;
      }
     timeonoff= setInterval(timer_gallery, 3000);
	
	 
    $('.selectBox span').each(function (index) {
      $(this).click(function(){
          clearInterval(timeonoff);
          for(var i=1;i<=imageCount;i++){
               $('.visibleBox .list'+i).hide();
          }
          $('.visibleBox .list'+(index+1)).fadeIn('slow'); 
      
         for(var i=1;i<=imageCount;i++){
            $('.btn'+i).removeClass('clk2');
          }
         $('.btn'+(index+1)).addClass('clk2');  
          cnt=index+1;
          if(cnt==imageCount)cnt=0;
          timeonoff= setInterval(timer_gallery, 3000);
          });
       });
	   $('.visibleBox').hover(function(){
		        clearInterval(timeonoff);
		   },function(){
			   timeonoff= setInterval(timer_gallery, 3000);
		   }); 
  });