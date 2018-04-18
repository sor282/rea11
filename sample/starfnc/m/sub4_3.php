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
        <li class="short2 current"><a href="sub4_3.php">빌라/오피스텔/주택담보</a></li>
        <li class="short2"><a href="sub4_4.php">부동산(토지,임야)담보</a></li>
        <li><a href="sub4_5.php">상가건물담보</a></li>
        <li><a href="sub4_6.php">전세/월세담보</a></li>
        <li><a href="sub4_7.php">잔여한도대출</a></li>
      </ul>
    </div>
  </header>



  <section>
    <div id="sub_con1">
      <h2>빌라/오피스텔/주택담보</h2>

      <table summary="" class="tableH">
        <tbody>
          <tr>
            <th>대출대상</th>
            <td>빌라,연립,다세대,단독주택,아파트를 소유하고 계신 고객 <br/>
              교회, 상가 소유하고 계신 고객<br/>
              담보제공을 받을 수 있는 고객<br/>
              저금리 금융기관 대출이 필요하신 고객</td>
          </tr>
          <tr>
            <th>대출한도</th>
            <td>빌라,다세대 : 감정가의 80% 범위내<br/>
              단독주택 : 감정가의 80% 범위내<br/>
              상가 : 감정가의 70% 범위내<br/>
              아파트 : KB시세 중간가의 90% 범위내</td>
          </tr>
          <tr>
            <th>대출금리</th>
            <td class="red">연 4.5%~</td>
          </tr>
          <tr>
            <th>상환방법 및 대출기간</th>
            <td>대출기간 : 6개월 ~ 5년, 20년(연장 가능)<br/>
              원리금 균등상환, 만기일시상환, 분할상환가능</td>
          </tr>
          <tr>
            <th>대출특징</th>
            <td>무직,무소득자 대출 가능<br/> 
              소득증빙없이 대출 가능<br/>
              신용등급이 매우 낮거나, 신용불량자 대출 가능<br/> 
              가압류,가등기 부동산 대출 가능<br/>
              고금리대출을 저금리대출로 전환 가능</td>
          </tr>
          <tr>
            <th>구비서류</th>
            <td>인감증명서, 주민등록 등본 및 원초본, 등기권리증, 인감도장, 신분증</td>
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
