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
        <li class="current"><a href="sub4_1.php">무설정담보</a></li>
        <li><a href="sub4_2.php">아파트담보</a></li>
        <li class="short2"><a href="sub4_3.php">빌라/오피스텔/주택담보</a></li>
        <li class="short2"><a href="sub4_4.php">부동산(토지,임야)담보</a></li>
        <li><a href="sub4_5.php">상가건물담보</a></li>
        <li><a href="sub4_6.php">전세/월세담보</a></li>
        <li><a href="sub4_7.php">잔여한도대출</a></li>
      </ul>
    </div>
  </header>



  <section>
    <div id="sub_con1">
      <h2>무설정담보</h2>

      <table summary="" class="tableH">
        <tbody>
          <tr>
            <th>대출대상</th>
            <td>부동산 담보 제공이 가능하신분(본인및 제3자 담보제공)<br/>
              담보는 있으나 설정없이 대출신청을 희망하시는 분<br/>
              설정비용및 법적절차가 까다로워서 쉽고 편리한 대출서비스를 희망하시는 분</td>
          </tr>
          <tr>
            <th>대출한도</th>
            <td>기존대출+필요자금(시세의 95%범위내)</td>
          </tr>
          <tr>
            <th>대출금리</th>
            <td class="red">년 34.9% 이내</td>
          </tr>
          <tr>
            <th>상환방법 및 대출기간</th>
            <td>기간: 1년~5년<br/>
              상환방법: 만기일시 상환또는 원리금 균등상환</td>
          </tr>
          <tr>
            <th>대출특징</th>
            <td>소득증빙서류 필요없이 대출가능<br/>
              신용등급이 매우 낮거나,신용불량자도 대출가능<br/>
              압류, 가압류,가등기 물건도 대출 가능</td>
          </tr>
          <tr>
            <th>구비서류</th>
            <td>인감증명서,주민등록 등본및 원초본, 등기권리증,인감도장,신분증</td>
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
