// JavaScript Document
	$(function(){
  var gnbA = $("#lnb_ul>li>a"); //변수지만 a가있으니깐 객체 객체는 하나만 가능한데 지금은 a요소를 5개 저장했으니까 배열객체
  var sub = $("#lnb_ul>li>ul");
  gnbA.on("mouseenter focus",function(){
    if(gnbA.target){ //값을 찾을수없을땐(undefind) = false 
      //$(gnbA.target).next().hide(); // hide는 removeClass show는 addClass로 바꿀수있다.
      //$(this).next().show();
      $(gnbA.target).next().hide();
      $(this).next().show("fast")
    }else{//else는 처음 한번 실행되고 그다음부터는 if만 실행됨
      $(this).next().show();	
    }
    gnbA.target = this;
  });
  gnbA.mouseleave(function(){
    $(this).next().hide();
  });
  sub.hover(function(){
    $(this).show();
  },function(){
    $(this).hide();
  });
  $("#lnb>li>ul>li>a:last").hover(function(){ //포커스가 떠났을때
    $(gnbA.target).next().stop().fadeOut("fast");
  });
    });