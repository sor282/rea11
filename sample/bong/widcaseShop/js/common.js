jQuery(function($){
	/* 스크롤 시 탑메뉴 변화 */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// 스크롤 탑 일때
			$("div#header_shadow").css("height","168px");
			$("div#header_search").removeClass("hidden");
		}else if(crt_scl != 0){
			// 스크롤 탑 아닐 때
			$("div#header_shadow").css("height","68px");
			$("div#header_search").addClass("hidden");
		}
	});


});