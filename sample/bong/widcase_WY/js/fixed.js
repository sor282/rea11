jQuery(function($){
	/* ��ũ�� �� ž�޴� ��ȭ */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// ��ũ�� ž �϶�
			$("ul#top_menu").removeClass("hidden");
			$("#header_wrap").css({"background":"none","height":"62px"});
			$("#WYmenu").css({"height":"62px"});
			$("#WYlogo").css("top","4px");
			$("#WYlogo img").css({"height":"53px"});
			$("#WYgnb").css("top","33px");

		}else if(crt_scl != 0){
			// ��ũ�� ž �ƴ� ��
			$("ul#top_menu").addClass("hidden");
			$("#header_wrap").css({"background":"#fff","height":"43px"});
			$("#WYmenu").css("height","43px");
			$("#WYlogo").css("top","2px");
			$("#WYlogo img").css("height","36px");
			$("#WYgnb").css("top","15px");
		}
	});

});


