
					var	_currentScrollTop=0;
							$(function(){
								function spotVisible(currentIndex){
									var	obj	= $(currentIndex);
										for	(var i = 0;	i <	obj.find(".cont	> *").length; i++) {
											obj.find(".cont	> *").css({
												"opacity":0,
												"margin-top":-20
											})
										};
								};

								function spotReset(currentIndex){
									var	obj	= $(currentIndex);
										for	(var i = 0;	i <	obj.find(".cont	> *").length; i++) {
											obj.find(".cont	> *").filter(":eq("+i+")").delay(400*i).animate({
												"margin-top":0,
												"opacity":1
											},800,"easeInOutQuart");
										};
								};
								var	slider =  $('ul.banner_list').bxSlider({
								  mode:	'fade',
								 auto: true,
								 autoControls: true,
								 stopAuto: false,
								 speed:800,
								 pause:7000,

								 onSliderLoad: function(currentIndex){
									if(isie7 ||	isie8){}else{
										var	obj	= $('ul.banner_list	> li:eq('+currentIndex+')');
										spotVisible(obj);
										spotReset(obj);
											

									}
											//spotReset(currentIndex);
										// do funky	JS stuff here
									   // alert('Slider	has	finished loading. Click	OK to continue!');
									  },
									  onSlideBefore: function(currentIndex){
										if(isie7 ||	isie8){}else{spotVisible(currentIndex);}
										//


									  },
									  onSlideAfter:	function(currentIndex){
										if(isie7 ||	isie8){}else{spotReset(currentIndex);	}
										//	spotReset(currentIndex);
										//alert($(this));
										// do mind-blowing JS stuff	here
										//alert('A slide has finished transitioning. Bravo.	Click OK to	continue!');
									  //  alert($(this).attr("class"));


									  }
							  });

							  $(document).on('click','.bx-next,	.bx-prev , .bx-pager-link ,	.slider',function()	{
										slider.stopAuto();
										slider.startAuto();
								});

							});

						
						function onPageMotion(){
							$(".contBox").each(function(){
								 var bg	= $(this).find(".bg-overay");
								 var offsetTop = $(this).offset().top;
								 var scrollT = $(this).scrollTop();
								  bg.css({ top:((_currentScrollTop-offsetTop) /	10)	* 3.2}); 
								 
							  });
						  }

						  $(window).scroll(function(){
							   _currentScrollTop = $(this).scrollTop();	  
								onPageMotion();
							});
							onPageMotion();