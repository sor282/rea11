jQuery(function($){
	/* ��ũ�� �� ž�޴� ��ȭ */
	$(window).scroll(function(){
		var crt_scl = $(window).scrollTop();
		if(crt_scl == 0) {
			// ��ũ�� ž �϶�
			if($("div#header_shadow").hasClass("banner_x")){
				$("div#header_shadow").css("height","160px");
			}else{
				$("div#header_shadow").css("height","210px");
			}
			$("div#section3").removeClass("hidden");
			$("div#section2").removeClass("hidden");
		}else if(crt_scl != 0){
			// ��ũ�� ž �ƴ� ��
			$("div#header_shadow").css("height","60px");
			$("div#section3").addClass("hidden");
			$("div#section2").addClass("hidden");
		}
	});
	// ž ��� �ݱ�
	$("div#top_banner_close div.wrap_center input.btn_top_banner_close").click(function(){
		$(this).parent().parent().animate({height: "0",opacity: 0}, 300 );
		$("div#top_banner_open").animate({height: "0",opacity: 1}, 300 );
		$(".btn_top_banner_open").css({display:"inline"});

		var shadow_h = $("div#header_shadow").css("height").replace(/[^-\d\.]/g, '');
		var banner_h = $("div#top_banner_close").css("height").replace(/[^-\d\.]/g, '');
		var shadow_new_h = shadow_h - banner_h;

		$("div#header_shadow").animate({height: shadow_new_h}, 300 );
		$("div#header_shadow").addClass("banner_x"); // ��ũ�� ž�϶� ��� Ȯ�ο� Ŭ���� �߰�
	});
	// ž ��� ����
	$("div#top_banner_open div.wrap_center input.btn_top_banner_open").click(function(){
		$("div#top_banner_close").animate({height: "60",opacity: 1}, 300 );
		$(this).parent().parent().css("opacity","0");
		$(".btn_top_banner_open").css({display:"none"});

		/* ���Ŀ����� ���� ���̰� ����
		var shadow_h = $("div#header_shadow").css("height").replace(/[^-\d\.]/g, '');
		var banner_h = $("div#top_banner_close").css("height").replace(/[^-\d\.]/g, '');
		var shadow_new_h = shadow_h + banner_h;*/

		$("div#header_shadow").animate({height: 210}, 300 );
		$("div#header_shadow").removeClass("banner_x"); // ��ũ�� ž�϶� ��� Ȯ�ο� Ŭ���� ����
	});

});