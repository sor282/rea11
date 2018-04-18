<? include "include/head.php" ?>
<script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
<script type='text/javascript' src='js/jquery-ui.js'></script>
<script type='text/javascript' src='js/common_mobile.js'></script>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>

<!-- slideMenu -->
<? include "include/slideMenu.php" ?>
<!-- slideMenu e -->


<div id="wrapM">
  <header>
    <? include "include/header.php" ?>
    <h3 class="h3M">- 고객센터</h3>
    <div id="tnb">
      <ul>
        <li class="current"><a href="sub6_1.php">공지사항</a></li>
        <li><a href="sub6_2.php">Q&A</a></li>
        <li><a href="sub6_3.php">대출후기</a></li>
        <li><a href="sub6_4.php">양식자료실</a></li>
      </ul>
    </div>
  </header>



  <section>
    <div id="sub_con1">
      <h2>공지사항</h2>
      <div>
        <!-- 게시판 -->
      </div>
    </div>


    <!-- content2, content3 -->
    <? include "include/con_common.php" ?>
    <!-- content2, content3 e -->
  </section>


  <footer>
  <? include "include/footer.php" ?>
  </footer>


</div>
</body>
</html>
