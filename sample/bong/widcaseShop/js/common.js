jQuery(function($){
	/* ��ũ�� �� ž�޴� ��ȭ */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// ��ũ�� ž �϶�
			$("div#header_shadow").css("height","168px");
			$("div#header_search").removeClass("hidden");
		}else if(crt_scl != 0){
			// ��ũ�� ž �ƴ� ��
			$("div#header_shadow").css("height","68px");
			$("div#header_search").addClass("hidden");
		}
	});


});