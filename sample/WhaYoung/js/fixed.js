jQuery(function($){
	/* ��ũ�� �� ž�޴� ��ȭ */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// ��ũ�� ž �϶�
			$("ul#gnbW").removeClass("hidden");
			$("#header_wrap").css({"background":"none","box-shadow":"none"});
			$("#menuW").css({"height":"68px","box-shadow":"0 0 10px #333"});
			$("#logoW").css("top","10px");
			$("#logoW img").css({"height":"53px"});
			$("#lnbW").css("top","39px");

		}else if(crt_scl != 0){
			// ��ũ�� ž �ƴ� ��
			$("ul#gnbW").addClass("hidden");
			$("#header_wrap").css({"background":"#fff","box-shadow":"0 0 10px #333"});
			$("#menuW").css({"height":"49px","box-shadow":"none"});
			$("#logoW").css("top","8px");
			$("#logoW img").css("height","36px");
			$("#lnbW").css("top","21px");

		}
	});

});


 