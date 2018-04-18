<? include "include/head.php" ?>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.8.3.min.js"  type="text/javascript"></script>
<script src="js/changeGallery.js" type="text/javascript"></script><!-- 비주얼 텍스트 페이드 -->
<script src="js/gnb.js" type="text/javascript"></script><!-- gnb -->
<script src="js/scroll.js" type="text/javascript"></script><!-- 스크롤배너 right -->
<script src="js/jquery.scrollbox.js" type="text/javascript"></script><!-- 공지 롤링 -->
<script src="js/jquery.cycle.all.js" language="JavaScript" type="text/javascript"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script><!-- 패밀리사이트 -->
<script type="text/javascript">
  $(window).load(function(){
    jQuery(".slider_banner ul").carouFredSel({
      align       : "left",
      height	: 41, //전체 높이
      items		: 7,
      scroll      : {
        items		:1, //스크롤링할 갯수
        duration        : 300 //시간
        //pauseOnHover	: true //마우스오버시 일시정지기능 마우스 아웃시 자동재생됨
        },
      prev:{
        button : '#banner_befor',
        wipe : true, //로테이션 허용(리스트 처음에서 클릭시 마지막요소로 이동)
        pauseOnHover:false
      },
      next: {
        button :'#banner_next',
        wipe : true,
        pauseOnHover:false
      },
      direction	: "left"
    }).parent().css("margin", "auto");
  });	
</script><!-- 패밀리사이트 -->

</head>
<body onload="InitializeStaticMenu();"> <!-- 스크롤배너 right -->

<div id="wrap_all">

  <div id="bg_left">
  </div>

  <div id="bg_right">
  </div>


  <div id="content_wrap">

    <div id="skipNav">
    <a href="#contentH">본문 바로가기</a>
    <a href="#lnbH">로컬 네비게이션 바로가기</a>
    </div>


    <!-- header -->
    <? include "include/header.php" ?>
    <!-- header e -->



    <!-- content -->
    <div id="contentH">
      <div class="changeGallery">
        <div class="visibleBox">
          <ul>
            <li class="list1"><img src="images/visual_text1.png" alt=""/></li>
            <li class="list2"><img src="images/visual_text2.png" alt="" /></li>
            <li class="list3"><img src="images/visual_text3.png" alt="" /></li> 
          </ul>
        </div>
      </div>

      <div id="visual_quick">
        <h2><span>맞춤대출</span> 바로가기</h2>
        <ul>
          <li class="li01"><a href="">개인회생 파산대출</a></li>
          <li class="li02"><a href="">신용대출</a></li>
          <li class="li03"><a href="">담보대출</a></li>
          <li class="li04"><a href="">내게 맞는 대출설계</a></li>
        </ul>
      </div>

      <div id="quick_btn">
        <ul>
          <li class="li01"><a href="">개인회생 파산대출</a></li>
          <li class="li02"><a href="">신용대출</a></li>
        </ul>
      </div>

      <div id="con_box1">
        <h2><span>맞춤대출</span> 상담하기</h2>
        <div id="box1_bg">
          <ul>
            <li>
              <label for="name1" class="col1">이름</label>
              <input type="text" id="name1" class="inputH" style="width:146px" />
            </li>
            <li>
              <label for="number1" class="col1">연락처</label>
              <select id="number1" style="width:50px" class="selectH">
                <option>010</option>
                <option>011</option>
                <option>016</option>
                <option>017</option>
                <option>018</option>
              </select> -
              <input type="text" id="number1" class="inputH" style="width:36px" /> -
              <input type="text" id="number1" class="inputH" style="width:36px" />
            </li>
            <li>
              <label for="loan1" class="col1">대출상품</label>
              <select id="loan1" style="width:148px" class="selectH">
                <option>대출상품선택</option>
                <option>대출상품선택</option>
                <option>대출상품선택</option>
              </select>
            </li>
            <li class="agree">
              <input type="checkbox" name="submit" id="check1" />
              <label for="check1">개인정보의 수집·이용에 관한 동의서에<br/> &nbsp; &nbsp; &nbsp;내용을 숙지하고 동의합니다.</label>
              <a href="#" onClick="window.open('pop1.php','_blank','left=100,top=100,toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=800,height=600')"><img src="images/btn_detail.png" alt="자세히" /></a>
            </li>
          </ul>
          <div class="application">
            <a href="#"><img src="images/box1_btn.png" alt="상담신청" /></a>
          </div>
        </div>
      </div>

      <div id="con_box2">
        <h2>신용조회 기록없이 <span>대출한도 즉시조회</span></h2>
        <div id="box2_bg">
          <ul>
            <li>
              <label for="name2" class="col1">이름</label>
              <input type="text" id="name2" class="inputH" style="width:146px" />
            </li>
            <li>
              <label for="number2" class="col1">연락처</label>
              <select id="number2" style="width:50px" class="selectH">
                <option>010</option>
                <option>011</option>
                <option>016</option>
                <option>017</option>
                <option>018</option>
              </select> -
              <input type="text" id="number2" class="inputH" style="width:36px" /> -
              <input type="text" id="number2" class="inputH" style="width:36px" />
            </li>
            <li>
              <label for="loan2" class="col1">대출상품</label>
              <select id="loan2" style="width:148px" class="selectH">
                <option>대출상품선택</option>
                <option>대출상품선택</option>
                <option>대출상품선택</option>
              </select>
            </li>
            <li class="agree">
              <input type="checkbox" name="submit" id="check2" />
              <label for="check2">개인정보의 수집·이용 전체약관 동의</label>
              <a href="#" onClick="window.open('pop1.php','_blank','left=100,top=100,toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=800,height=600')"><img src="images/btn_detail.png" alt="자세히" /></a>
            </li>
          </ul>
          <div class="application">
            <a href="#"><img src="images/box2_btn.png" alt="한도조회" /></a>
          </div>
        </div>
      </div>

      <div id="con_box3">
        <h2><span>실시간 상담 접수</span> / 진행 현황실</h2>
        <div id="box3_bg">
          <div id="demo1" class="scroll-text">
            <ul>
            <li><span class="span1"><span class="span1_1">김○○</span> 님</span><span class="span2">사건번호대출</span><span class="span3">15.11.01</span><img src="images/box3_btn1.jpg" alt="" /></li>
            <li><span class="span1"><span class="span1_1">이○○</span> 님</span><span class="span2">부채통합 대환대출</span><span class="span3">15.10.25</span><img src="images/box3_btn1.jpg" alt="" /></li>
            <li><span class="span1"><span class="span1_1">박○</span> 님</span><span class="span2">신용회복(인가)대출</span><span class="span3">15.10.23</span><img src="images/box3_btn2.jpg" alt="" /></li>
            <li><span class="span1"><span class="span1_1">송○○○</span> 님</span><span class="span2">저신용/저소득 보증인대출</span><span class="span3">15.10.16</span><img src="images/box3_btn3.jpg" alt="" /></li>
            <li><span class="span1"><span class="span1_1">한○○</span> 님</span><span class="span2">사건번호대출</span><span class="span3">15.10.14</span><img src="images/box3_btn2.jpg" alt="" /></li>
            <li><span class="span1"><span class="span1_1">김○○</span> 님</span><span class="span2">신용회복(인가)대출</span><span class="span3">15.09.11</span><img src="images/box3_btn3.jpg" alt="" /></li>
            <li><span class="span1"><span class="span1_1">이○○</span> 님</span><span class="span2">부채통합 대환대출</span><span class="span3">15.09.03</span><img src="images/box3_btn3.jpg" alt="" /></li>
            </ul>
          </div>
        </div>
        <script>
        $(function () {
          $('#demo1').scrollbox();

        });
        </script>
      </div>
    </div>


    <div id="familyH">
      <div class="m_banner">
        <div class="banner_box">
          <span class="before" id="banner_befor"><a href="#"><img src="images/btn_before.png" alt="이전보기"/></a></span>
          <span class="next" id="banner_next"><a href="#"><img src="images/btn_next.png" alt="다음보기"/></a></span>
          <div class="slider_banner">
            <ul>
                <li><a href="http://www.nhis.or.kr" title="새창열기" target="_blank"><img src="images/familysite01.jpg" alt="국민건강보험공단" /></a></li>
                <li><a href="https://www.hometax.go.kr" title="새창열기" target="_blank"><img src="images/familysite02.jpg" alt="국세청 홈택스" /></a></li>
                <li><a href="http://www.minwon.go.kr" title="새창열기" target="_blank"><img src="images/familysite03.jpg" alt="정부민원포털 민원24" /></a></li>
                <li><a href="http://www.nicerating.com" title="새창열기" target="_blank"><img src="images/familysite04.jpg" alt="NICE신용평가" /></a></li>
                <li><a href="http://www.fss.or.kr" title="새창열기" target="_blank"><img src="images/familysite05.jpg" alt="금융감독원" /></a></li>
                <li><a href="http://www.ftc.go.kr " title="새창열기" target="_blank"><img src="images/familysite06.jpg" alt="공정거래위원회" /></a></li>
                <li><a href="http://www.clfa.or.kr" title="새창열기" target="_blank"><img src="images/familysite07.jpg" alt="한국대부금융협회" /></a></li>
                <li><a href="http://www.molit.go.kr" title="새창열기" target="_blank"><img src="images/familysite08.jpg" alt="국토교통부" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- content e -->



    <!-- footer -->
    <? include "include/footer.php" ?>
    <!-- footer e -->

  </div>


  <div id="left_quick">
    <ul>
      <li><a href="#">수임료대출</a></li>
      <li><a href="#">사건번호대출</a></li>
      <li><a href="#">금지대출</a></li>
      <li><a href="#">개시대출</a></li>
      <li style="margin-bottom:10px"><a href="#" style="letter-spacing:-1px">신용회복(인가)대출</a></li>
      <li><a href="#">직장인대출</a></li>
      <li><a href="#">여성/주부대출</a></li>
      <li><a href="#">공무원/교사대출</a></li>
      <li><a href="#">사업자대출</a></li>
      <li><a href="#">무직자대출</a></li>
      <li><a href="#" style="letter-spacing:-3px">저신용/저소득보증인대출</a></li>
      <li><a href="#">햇살론(서민지원)</a></li>
      <li style="margin-bottom:10px"><a href="#">부채통합대환대출</a></li>
      <li><a href="#">아파트담보</a></li>
      <li><a href="#" style="letter-spacing:-2.4px">빌라/오피스텔/주택담보</a></li>
      <li><a href="#" style="letter-spacing:-1.6px">부동산(토지,임야)담보</a></li>
      <li><a href="#">상가건물담보</a></li>
      <li><a href="#">전세/월세담보</a></li>
      <li><a href="#">잔여한도대출</a></li>
    </ul>
    <img src="images/left_banner.jpg" alt="" />
  </div>



  <? include "include/right_quick.php" ?>

</div>


<!-- 모바일버전 바로가기-->
<? include "include/mobilever.php" ?>
<!-- 모바일버전 바로가기 e-->

</body>
</html>
