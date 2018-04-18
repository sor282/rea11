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
    <h3 class="h3M">- 개인회생/파산대출</h3>
    <div id="tnb">
      <ul>
        <li><a href="sub2_1.php">수임료대출</a></li>
        <li><a href="sub2_2.php">사건번호대출</a></li>
        <li class="current"><a href="sub2_3.php">금지대출</a></li>
        <li><a href="sub2_4.php">개시대출</a></li>
        <li class="short"><a href="sub2_5.php">신용회복(인가)대출</a></li>
      </ul>
    </div>
  </header>



  <section>
    <div id="sub_con1">
      <h2>금지대출</h2>
      <p>
        개인회생/파산면책을 진행하시고 금지명령이 떨어졌는데, 
        기존 채무에서 추심은 중지 되었으나 생활자금이 긴급하게 생길 수 있습니다.
        금지명령만 떨어져도 아직 개시/인가가 나지 않아도 추가 대출 가능하오니 
        전문가와 상담 받으셔서 긴급생활자금을 지원 받으시기 바랍니다
      </p>

      <table summary="" class="tableH">
        <tbody>
          <tr>
            <th>대상고객</th>
            <td>만 20 ~ 60세 까지, 개인회생/파산면책 금지명령 받은자</td>
          </tr>
          <tr>
            <th>대출한도</th>
            <td>최소 100만원 ~ 최대 3000만원</td>
          </tr>
          <tr>
            <th>대출금리</th>
            <td>연 34.9%이내 (중도상환수수료 및 기타 일체의 수수료 없음)</td>
          </tr>
          <tr>
            <th>상환방법 및 대출기간</th>
            <td>원리금 균등 상환,원금균등상환 1개월~60개월</td>
          </tr>
          <tr>
            <th>수수료</th>
            <td class="red">수수료 無 / 중도상환수수료無</td>
          </tr>
          <tr>
            <th>구비서류</th>
            <td>신분증, 인감증명서, 변제계획안(진행한 법무사요청),소득증빙서류(4대보험자격득실확인서/납부확인서), 입금받을통장 앞면
</td>
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
