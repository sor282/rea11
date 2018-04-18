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
        <li><a href="sub4_5.php">상가건물담보</a></li>
        <li class="current"><a href="sub4_6.php">전세/월세담보</a></li>
        <li><a href="sub4_7.php">잔여한도대출</a></li>
      </ul>
    </div>
  </header>



  <section>
    <div id="sub_con1">
      <h2>전세/월세담보</h2>

      <table summary="" class="tableH">
        <tbody>
          <tr>
            <th>대출대상</th>
            <td>아파트, 빌라, 단독주택, 일반주택, 다가구, 다세대 등<br/>
              주거용주택에 전(월)세로 거주하고 있는 세입자<br/>
              전세보증금 4.000만원이상<br/>
              월세보증금 - (남은계약기간×월세를차감후) = 4.000만원이상<br/>
              무설정 임대인 유선상 통화로 대출가능</td>
          </tr>
          <tr>
            <th>대출한도</th>
            <td>전세보증금의 60% ~ 80% 대출가능<br/>
              국민은행 시세표에 해당하는 아파트는 최대 80% 대출가능</td>
          </tr>
          <tr>
            <th>대출금리</th>
            <td class="red">최저 연 6.8% ~ 7.3%<br/>
              최저 연 4.5%(만기일시상환)</td>
          </tr>
          <tr>
            <th>상환방법 및 대출기간</th>
            <td>원리금 균등분할상환 및 만기일시상환<br/> 
              만기일시 : 최장 2년, 전세계약 만료일까지 (전세 재계약시 연장가능)</td>
          </tr>
          <tr>
            <th>대출특징</th>
            <td>집주인의 협조가 절실히 필요한 동의서를 받지않고 임대인 유선상 통화로 대출가능.<br/>
              고금리 대출(사금융)을 저금리로 대환대출 가능합니다.<br/>
              입주시 부족한 전세자금도 대출가능.</td>
          </tr>
          <tr>
            <th>1차심사서류</th>
            <td>임대차계약서, 주민등록등본, 신분증 앞/뒤사본</td>
          </tr>
          <tr>
            <th>구비서류</th>
            <td>전세계약서(확정일자 필), 인감증명서3부, 주민등록등본1부, 주민등록초본1부(전 주소기재), 주소별세대열람, 인감도장, 신분증사본, 통장사본</td>
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
