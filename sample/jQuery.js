/*  css  여러개 적용  */

$(document).ready(function(){
  $("#test").css({'color':'red', 'background':'yellow'});
});




/*  on 누르면 나오고, off 누르면 안나오게  */

$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});




/*  한버튼으로 누르면 나왔다 안나왔다~~ toggle  */

	$('ul#gnb2_1dul').hide();
	$('#gnb2 h2').click( function() { 
		$('ul#gnb2_1dul').toggle();
		
	});



/*  슬라이드~~ toggle  */

$(document).ready(function(){
$(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
});




/*  클릭하면 사라지게  */
$(document).ready(function(){
  $("div").click(function(){
    $(this).fadeOut(4000);    //fadeOut(4000);  또는  fadeTo("slow",0.25);
  });
});





/*  7초후에 적용  */

$(function(){
	setTimeout(function(){
		내용
	}, 7000);
});





/*  테이블에서 3번째거만 적용되게  */

$(function(){
	$('td:nth-child(3n+1)').css('background', 'red');    //1열
	$('td:nth-child(3n+2)').css('background', 'pink');    //2열
	$('td:nth-child(3n)').css('background', 'blue');       //3열
});





/*  클래스 추가  */

$(function(){
	$('td:nth-child(3n)').addClass('last');
});

/* 각 순서별로 클래스 다르게 추가 */
$(function(){
	$('h1').each(function(index, item){
		$(item).addClass('high_light_' + index);
	});
});
//high_light_0, high_light_1, high_light_2.....  이렇게 각각 클래스가 붙음







/*  클래스 추가  */

$(function(){
	$('<p>I Love You</p>').appendTo('div');
});
//div안에 p삽입



/*  JQuery Effects  */
$(selector).hide()
$(selector).show()
$(selector).toggle()
$(selector).slideDown()
$(selector).slideUp()
$(selector).slideToggle()
$(selector).fadeIn()
$(selector).fadeOut()
$(selector).fadeTo()
$(selector).animate()










/* right_fixed에서 가져온 */

$(function(){
    var duration = 500;

    var $sidebar = $('#hd');
    var $sidebarButton = $('#hd_onoff').on('click', function(){
        $sidebar.toggleClass('close');
        if($sidebar.hasClass('close')){
            $sidebar.stop(true).animate({left: '-250px'}, duration, 'easeInBack');
			$("#hd_onoff").css({right: "10px",width: "10px"});
            $("#hd_onoff").text('열기');
        }else{
            $sidebar.stop(true).animate({left: '-30px'}, duration, 'easeOutBack');
			$("#hd_onoff").css({right: "30px",width: "20px"});
            $("#hd_onoff").text('닫기');
        };
    });
});




/* close버튼 누르면 상위에 높이를 0으로 , 300 속도로  */
    $(".btn_top_benner_close").click(function(){
        $(this).parent().parent().animate({height: "0",opacity: 0}, 300 );
	});






/* 있을때 없을때 css 적용하기  */
    $(document).ready(function(){
        var banner = $(".banner_top").css("height").replace(/[^-\d\.]/g, '');    //탑배너 높이계산
        var shadow_new = Number(banner) + 70;             //섀도우 높이

        if($(".banner_top").length > 0){
			//탑배너가 있을때
            $("#header_shadow").css('height', shadow_new);
        }else{
			//탑배너가 없을때
            $("#header_shadow").css('height', "70px");
        }
    });