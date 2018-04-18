// JavaScript Document
$(document).ready(function() {
   $('ul.dropdownmenu li.menu').hover(
   function() { 
     $('ul', this).fadeIn('normal',function(){$(this).stop();});
     $('a', this).animate({top:-19},'fast').clearQueue();
		},
   function() {
     $('a', this).animate({top:0},'fast').clearQueue();
     $('ul', this).fadeOut('fast');
	   });
});
$('ul.dropdownmenu li.menu .depth1').bind('focus', function () {        
	$(this).parents('.menu').find('ul').fadeIn('fast');
	$(this).parents('.menu').siblings().find('ul').fadeOut('fast');
});

$('ul.dropdownmenu li.m6 li:last').find('a').bind('blur', function () {
	 $('ul.dropdownmenu li.m6 ul').fadeOut('fast');
});