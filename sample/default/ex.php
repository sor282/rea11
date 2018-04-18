<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ko">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="페이지설명">
<meta name="keywords" content="검색할 수 있는 단어목록,">
<title>타이틀</title>
<link href="../css/common.css" type="text/css" rel="stylesheet" />
<link href="../css/main.css" type="text/css" rel="stylesheet" />
<script src="../js/jquery-1.8.3.min.js"  type="text/javascript"></script>
<script src="../js/fullnav.js" type="text/javascript"></script> <!-- gnb -->

<style type="text/css">

#aaa{background-color:rgba(54, 169, 200, 0.6)} /* rgb컬러와 투명도 조정*/

#aaa{box-shadow: 2px 2px 5px #c9c9c9} /* 그림자*/

#aaa{display:block;width:500px;white-space: nowrap;overflow:hidden;text-overflow: ellipsis} /* 글씨줄이기*/
	/* white-space: nowrap - 공백이 여러개만 한칸만 표시, 텍스트 줄바꿈 안됨 */
	/* text-overflow: ellipsis - 줄인부분 ..으로 표시,  text-overflow:clip - ...없이 */

table{table-layout:fixed} /* 테이블 사이즈 고정 */
#transparentDiv { 
       -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; 
       filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50); 
       opacity: .5; } /* 투명도(내부요소들 모두 적용됨) */


/* border 안쪽으로 주기 */
#aaa{border:#e9e9e9 1px solid;box-sizing:border-box;}


/* css3로 마우스 오버시 서서히 확대효과 */
img:hover{
    -webkit-transition: transform 0.3s; /* Safari */
    transition: transform 0.3s;
    -ms-transform: scale(1.1, 1.1); /* IE 9 */
    -webkit-transform: scale(1.1, 1.1); /* Safari */
    transform: scale(1.1, 1.1);}
	/* 0.3초의 속도로, 가로1.1배 세로1.1배 커짐*/
	/* EX9 에서는 transition이 적용이 안되어 한번에 커지므로 효과를 적용하고싶지 않으면 -ms-transform을 삭제한다 */



#aaa:first-child{첫번째}
#aaa:last-child{마지막}
#aaa:nth-child(odd){홀수}
#aaa:nth-child(even){짝수}
#aaa:nth-child(3n){3번째}

</style>





<!-- 세로 100% 높이값계산 -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function() {
 $('#content').css('height', $(window).height() + 'px');
});
$(window).resize(function() {
 $('#content').css('height', $(window).height() + 'px');
});
</script>


<!-- 세로 헤더 푸터포함 100퍼센트 고정 -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function() {
 $('#content').css('height', $(window).height()-$('#header').height()-$('#footer').height() + 'px');
});
$(window).resize(function() {
 $('#content').css('height', $(window).height()-$('#header').height()-$('#footer').height() + 'px');
});
</script>



<!-- 클릭 - 레이어팝업 (팝업띄울버튼=id=pop_bt, 팝업디비전은 바디 제일아래 div id=pop, 닫기버튼id=close -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
  $('#pop_bt').click(function() {
   $('#pop').show();
  });

  $('#close').click(function() {
   $('#pop').hide();
  });
 });
</script>




<!-- gnb 2depth 1개씩 펼쳐지기 (jquery-1.8.3.min.js 연결) -->
<script>
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
</script>


<!-- 스크롤시 따라다니는 배너 -->
<script type="text/javascript">
 var stmnLEFT = 0; // 오른쪽 여백 
 var stmnGAP1 = 0; // 위쪽 여백 
 var stmnGAP2 = 116; // 스크롤시 브라우저 위쪽과 떨어지는 거리 
 var stmnBASE = 0; // 스크롤 시작위치 
 var stmnActivateSpeed = 10; //스크롤을 인식하는 딜레이 (숫자가 클수록 느리게 인식)
 var stmnScrollSpeed = 5; //스크롤 속도 (클수록 느림)
 var stmnTimer; 
 
 function RefreshStaticMenu() { 
  var stmnStartPoint, stmnEndPoint; 
  stmnStartPoint = parseInt(document.getElementById('right_quick').style.top, 10); 
  stmnEndPoint = Math.max(document.documentElement.scrollTop, document.body.scrollTop) + stmnGAP2; 
  if (stmnEndPoint < stmnGAP1) stmnEndPoint = stmnGAP1; 
  if (stmnStartPoint != stmnEndPoint) { 
   stmnScrollAmount = Math.ceil( Math.abs( stmnEndPoint - stmnStartPoint ) / 15 ); 
   document.getElementById('right_quick').style.top = parseInt(document.getElementById('right_quick').style.top, 10) + ( ( stmnEndPoint<stmnStartPoint ) ? -stmnScrollAmount : stmnScrollAmount ) + 'px'; 
   stmnRefreshTimer = stmnScrollSpeed; 
   }
  stmnTimer = setTimeout("RefreshStaticMenu();", stmnActivateSpeed); 
  } 
 function InitializeStaticMenu() {
  document.getElementById('right_quick').style.right = stmnLEFT + 'px';  //처음에 오른쪽에 위치. left로 바꿔도.
  document.getElementById('right_quick').style.top = document.body.scrollTop + stmnBASE + 'px'; 
  RefreshStaticMenu();
  }
</script>

</head>
<body>



<!-- 클릭 후 팝업 -->
<a href="#" onClick="window.open('sub.php','_blank','left=100,top=100,toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=600,height=400')">자세히</a>



<!-- 자주쓰는 -->
<div id=""></div>
<div class=""></div>

<ul>
  <li class="current"><a href="sub1_1.jsp"></a></li>
  <li><a href="sub1_2.jsp"></a></li>
  <li><a href="sub1_3.jsp"></a></li>
  <li><a href="sub1_4.jsp"></a></li>
  <li><a href="sub1_5.jsp"></a></li>
</ul>

<img src="../images/logo.jpg" alt="" />

<a href="#"  title="새창으로 열기"></a>
<a href="#" target="_blank" title="새창으로 열기"></a>


<!-- 테이블 -->
<table summary="데이터 요약">
  <caption>테이블 제목</caption>

  <thead>
    <tr>
      <th></th>
      <th></th>
    </tr>
  </thead>

  <tfoot>
    <tr>
      <th scope="row"></th>
      <td></td>
    </tr>
  </tfoot>

  <tbody>
    <tr>
      <th></th>
      <td></td>
    </tr>
  </tbody>
</table>



<!-- 인풋 -->
<input type="radio" name="통일" id="openYes" value="Y" checked="checked" title="전공관련유무" /><label for="openYes"> 공개</label>&nbsp;
<input type="radio" name="통일" id="openNo" value="N" title="전공관련유무" /><label for="openNo"> 비공개</label>

<label for="name">이름</label>
<input type="text" id="name" id="" style="width:130px" />

<input type="text" name="search_word" id="#" class="input1" value="검색어를 입력하세요 " onFocus="this.value=''" > <!-- value값 없어지는 -->
  <!-- input{color:#333}         없어지는 글씨색
         input:focus{color:#999} 입력하는글씨색-->

<label for="password">비밀번호</label>
<input type="password" id="password" class="input1" style="width:130px" />


<button type="button" id="" value="button1" class="btn3">등록하기</button>

<input type="checkbox" name="#" id="agree" /><label for="agree">동의</label>

<textarea id="introduction2" name="introduction2"></textarea>

<label for="#">발행구분</label>
<select id="#" style="width:132px">
  <option></option>
  <option></option>
  <option></option>
  <option></option>
  <option></option>
</select>



<input type="file" name="submit" id="#" style="width:130px" />

<!-- 인풋-파일 대체 2가지 -->
<input id="bw_input_file" type="text" name="file_name" value="" onfocus='this.blur();upalert()'>  <input type="button" value="파일첨부" onclick="Javascript:upload();" />

<input id='bw_input_file' type='text' name='file_name1' value='' onfocus='this.blur();upalert()' /> <a href="javascript:upload('file_name1');"><img src="" /></a>





<!-- 네임드 검색 -->
<div id="search_area"><!-- css:전체배경깔고 -->
  <form id="sform" method="" action="" name="sform" target="mainFrame">
    <fieldset><!-- 박스테두리로 항목구분 -->
      <legend>네임드 검색</legend><!-- 박스 제목 --><!-- css: display:none -->
      <input id="search_bx" type="text" name="word" autocomplete="off" /><!--autocomplete="off" - 자동완성기능 끄기-->
         <!-- css: float:left;width:;height:;line-height:;margin:;background-color:;color:;border:none -->
      <button><span>검색</span></button><!-- button css: float:left;width:;height:; -->
                                                          <!-- span css: display:block;width:;height:;background:url('') 0 0 no-repeat;text-indent:-9999px; -->
    </fieldset>
  </form>
</div>





<!-- 마우스 오른버튼금지 -->
<div id="header" oncontextmenu="return false" ondragstart="return false" onselectstart="return false"></div><!-- body에도 적용가능 -->




<!-- 팝업에서 링크누르면 부모창이 변경되게 -->
<a href="#" onclick="opener.document.location.href=this.href;opener.focus();return false;"></a>



<xmp>있는그대로 텍스트로 출력</xmp>


</body>
</html>
