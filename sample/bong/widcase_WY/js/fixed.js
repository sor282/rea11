jQuery(function($){
	/* 스크롤 시 탑메뉴 변화 */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// 스크롤 탑 일때
			$("ul#top_menu").removeClass("hidden");
			$("#header_wrap").css({"background":"none","height":"62px"});
			$("#WYmenu").css({"height":"62px"});
			$("#WYlogo").css("top","4px");
			$("#WYlogo img").css({"height":"53px"});
			$("#WYgnb").css("top","33px");

		}else if(crt_scl != 0){
			// 스크롤 탑 아닐 때
			$("ul#top_menu").addClass("hidden");
			$("#header_wrap").css({"background":"#fff","height":"43px"});
			$("#WYmenu").css("height","43px");
			$("#WYlogo").css("top","2px");
			$("#WYlogo img").css("height","36px");
			$("#WYgnb").css("top","15px");
		}
	});

});


