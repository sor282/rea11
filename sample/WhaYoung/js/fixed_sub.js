jQuery(function($){
	/* 스크롤 시 탑메뉴 변화 */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// 스크롤 탑 일때
			$("ul#gnbW").removeClass("hidden");
			$("#menuW").css({"height":"68px"});
			$("#logoW").css("top","10px");
			$("#logoW img").css({"height":"53px"});
			$("#lnbW").css("top","39px");
			$("#header_shadow").css("height","68px");

		}else if(crt_scl != 0){
			// 스크롤 탑 아닐 때
			$("ul#gnbW").addClass("hidden");
			$("#menuW").css({"height":"49px"});
			$("#logoW").css("top","8px");
			$("#logoW img").css("height","36px");
			$("#lnbW").css("top","21px");
			$("#header_shadow").css("height","49px");

		}
	});

});
