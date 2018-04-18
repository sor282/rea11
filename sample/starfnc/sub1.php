<? include "include/head.php" ?>
<link href="css/sub.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.8.3.min.js"  type="text/javascript"></script>
<script src="js/changeGallery.js" type="text/javascript"></script><!-- 비주얼 텍스트 페이드 -->
<script src="js/gnb.js" type="text/javascript"></script><!-- lnb -->
<script src="js/scroll.js" type="text/javascript"></script><!-- 스크롤배너 right -->
<script src="js/accordion.js" type="text/javascript"></script><!-- 아코디언 메뉴 -->

</head>
<body onload="InitializeStaticMenu();">

<div id="wrap_all">

  <div id="bg_top">
    <div id="top_wrap">

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
              <li class="list1"><img src="images/visual_text4.png" alt=""/></li>
              <li class="list2"><img src="images/visual_text5.png" alt="" /></li>
              <li class="list3"><img src="images/visual_text6.png" alt="" /></li> 
            </ul>
          </div>
        </div>

        <div id="quick_btn">
          <ul>
            <li class="li01"><a href="">개인회생 파산대출</a></li>
            <li class="li02"><a href="">신용대출</a></li>
          </ul>
        </div>


        <div id="con_area">
          <div id="left_area">
            <? include "include/sub_snb.php" ?>
          </div>

          <div id="right_area">
            <div id="lineMap">
              HOME&nbsp; &gt; &nbsp;개인회생/파산대출&nbsp; &gt; &nbsp;<span>수임료대출</span>
            </div>

            <h3 class="h3H">수임료대출</h3>
            <p class="p1H">수임료대출 설명 수임료대출 설명 수임료대출 설명 수임료대출 설명 수임료대출 설명 </p>

            <div id="con">
              <!-- 내용 -->
              <img src="images/sub_con.jpg" alt=""/>
              <!-- 내용 e -->
            </div>

           <? include "include/sub_common.php" ?>

          </div>
        </div>

      </div>
      <!-- content e -->

    </div>
  </div>



  <div id="bg_bottom">
    <div id="bottom_wrap">

      <!-- footer -->
      <? include "include/footer.php" ?>
      <!-- footer e -->
    </div>
  </div>




  <? include "include/right_quick.php" ?>

</div>
</body>
</html>
