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
    <h3 class="h3M">- 담보대출</h3>
    <div id="tnb">
      <ul>
        <li><a href="sub4_1.php">무설정담보</a></li>
        <li><a href="sub4_2.php">아파트담보</a></li>
        <li class="short2"><a href="sub4_3.php">빌라/오피스텔/주택담보</a></li>
        <li class="short2"><a href="sub4_4.php">부동산(토지,임야)담보</a></li>
        <li class="current"><a href="sub4_5.php">상가건물담보</a></li>
        <li><a href="sub4_6.php">전세/월세담보</a></li>
        <li><a href="sub4_7.php">잔여한도대출</a></li>
      </ul>
    </div>
  </header>



  <section>
    <div id="sub_con1">
      <h2>상가건물담보</h2>

      <table summary="" class="tableH">
        <tbody>
          <tr>
            <th>대출대상</th>
            <td>상가주택, 건물, 오피스텔 소유하고 있는자, 감정가 대비 최고한도로 대출가능</td>
          </tr>
          <tr>
            <th>대출금액</th>
            <td>감정가 또는 시세대비 최고 한도로 대출진행 (물건에 따라 차등적용, 전화상담만으로 대출한도 확인가능)</td>
          </tr>
          <tr>
            <th>대출금리</th>
            <td class="red">연 4.5%~</td>
          </tr>
          <tr>
            <th>상환방법</th>
            <td>만기 일시상환 / 중도상환가능</td>
          </tr>
          <tr>
            <th>대출특징</th>
            <td>공동명의자 동의 없이 본인지분만으로 대출 가능합니다.<br/>
              대환대출이 가능합니다.<br/>
              압류, 가압류 있어도 대출 가능합니다.</td>
          </tr>
          <tr>
            <th>구비서류</th>
            <td>인감3통, 주민등록등본1통, 주민등록 초본2통, 인감도장, 주민등록증, 등기권리증(없어도 가능)</td>
          </tr>
        </tbody>
      </table>
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
