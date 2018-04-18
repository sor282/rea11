$(document).ready(function() {
              $('ul.dropdownmenu li ul').hide();
              $('.menu_box').hide();

              $('ul.dropdownmenu').hover(
                 function() { 
                    $('ul.dropdownmenu li.menu ul').slideDown('normal',function(){$(this).stop();});
	        $('.menu_box').slideDown('normal',function(){$(this).stop();});
                 },
                function() {
	    
	      $('ul.dropdownmenu li.menu ul').slideUp('fast');
                    $('.menu_box').slideUp('fast');
               });
               
               $('ul.dropdownmenu li.menu').hover(
                 function() { 
	       $('a', this).animate({top:-22},'fast').clearQueue();
                 },
                function() {
	      $('a', this).animate({top:0},'fast').clearQueue();
               });
          });


