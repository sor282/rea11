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
        <li class="current"><a href="sub4_2.php">아파트담보</a></li>
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
      <h2>아파트담보</h2>

      <table summary="" class="tableH">
        <tbody>
          <tr>
            <th>대출대상</th>
            <td>아파트 담보 제공이 가능하신 분 중(본인 및 제3자 담보 제공)<br/>
              기존대출 놔두고 저금리 금융기관대출로 후순위 추가자금이 필요하신 분<br/>
              고금리 대출(사금융)을 저금리로 대환대출 원하시는 분<br/>
              직장인, 주부, 프리렌서, 무소득자, 신용등급 낮은 분<br/>
              사업자, 자영업자 우대</td>
          </tr>
          <tr>
            <th>대출한도</th>
            <td>기존대출+필요자금(시세의 95%범위내 / 방공제없이 대출가능)</td>
          </tr>
          <tr>
            <th>대출금리</th>
            <td class="red">연 4.5%~</td>
          </tr>
          <tr>
            <th>상환방법 및 대출기간</th>
            <td>기간:1년~5년, 20년 (연장 가능)<br/>
              상환방법:만기일시상환 또는 원리금균등상환</td>
          </tr>
          <tr>
            <th>대출특징</th>
            <td>소득증빙서류 없이 대출 가능<br/> 
              신용등급이 매우 낮거나, 신용불량자 대출 가능<br/>
              압류, 가압류, 가등기 아파트 대출 가능<br/>
              대출종류에 따라 설정비, 수수료(중도상환수수료 포함) 면제 가능</td>
          </tr>
          <tr>
            <th>구비서류</th>
            <td>인감증명서, 주민등록 등본 및 원초본 각 1통씩, 등기권리증, 인감도장, 신분증</td>
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
