<? include "include/head.php" ?>
<link href="css/sub.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.8.3.min.js"  type="text/javascript"></script>
</head>
<body>


<div id="pop2_wrap">
  <div id="pop_title">
    이율계산기
  </div>


  <div id="pop2">
	<form name="form" method="post" action="pop2.php" onsubmit="return check_money(this)" class="pure-form">
    <!-- 테이블 1 -->
    <table summary="대출설계 시뮬레이션" class="table2_1">
      <tbody>
        <tr>
          <th><span>대출금</span></th>
          <td>
            <input type="text" name="hope_money" value="<?=$hope_money?>" class="inputH" style="width:150px" /> 원
          </td>
        </tr>
        <tr>
          <th><span>상환방법</span></th>
          <td>
            <select name="repayment" style="width:152px" class="selectH">
			  <option value='원리금균등분할상환' <?=$repayment == "원리금균등분할상환"?"selected":""?>>원리금균등분할상환</option>
			  <option value='원금균등상환' <?=$repayment == "원금균등상환"?"selected":""?>>원금균등상환</option>
			  <option value='만기일시상환' <?=$repayment == "만기일시상환"?"selected":""?>>만기일시상환</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><span>대출기간</span></th>
          <td>
            <span style="display:inline-block;width:90px">
            <input type="text" name="period" value="<?=$period?>" class="inputH" style="width:50px;text-align:center;" /> 개월</span>
			<input type="button" value="1년" onclick="set_period(1)" class="box12">
			<input type="button" value="2년" onclick="set_period(2)" class="box12">
			<input type="button" value="3년" onclick="set_period(3)" class="box12">
			<input type="button" value="4년" onclick="set_period(4)" class="box12">
			<input type="button" value="5년" onclick="set_period(5)" class="box12">
			<input type="button" value="10년" onclick="set_period(10)" class="box12">
			<input type="button" value="15년" onclick="set_period(15)" class="box12">
			<input type="button" value="20년" onclick="set_period(20)" class="box12">
			<input type="button" value="30년" onclick="set_period(30)" class="box12">
          </td>
        </tr>
        <tr>
          <th><span>대출금리</span></th>
          <td>
            <span style="display:inline-block;width:90px">
            <input type="text" name="interest" value="<?=$interest?>" class="inputH" style="width:50px;text-align:center;" /> %</span>
			<input type="button" value="5%" onclick="set_interest(5)" class="box12">
			<input type="button" value="6%" onclick="set_interest(6)" class="box12">
			<input type="button" value="7%" onclick="set_interest(7)" class="box12">
			<input type="button" value="8%" onclick="set_interest(8)" class="box12">
			<input type="button" value="9%" onclick="set_interest(9)" class="box12">
			<input type="button" value="10%" onclick="set_interest(10)" class="box12">
			<input type="button" value="15%" onclick="set_interest(15)" class="box12">
			<input type="button" value="20%" onclick="set_interest(20)" class="box12">
			<input type="button" value="30%" onclick="set_interest(30)" class="box12">
          </td>
        </tr>
    </table>
    <!-- 상단 테이블 1 e -->

	<input type="image" src="images/pop2_btn.jpg" alt="계산하기" style="margin:15px 0 20px 323px" />
	</form>

	<? if($hope_money) { ?>
    <!-- 테이블 2 (계산하기 클릭 후 나오는 부분) -->
    <table summary="이율계산결과" class="table2_2">
      <tbody>
        <tr>
          <th width="">회차</th>
          <th width="15%">상환금(원금+이자)</th>
          <th width="15%">납입원금</th>
          <th width="15%">납입원금계</th>
          <th width="15%">이자</th>
          <th width="15%">이자합계</th>
          <th width="15%">잔금</th>
        </tr>
		<? 
			if($repayment == "원리금균등분할상환") {
		
			// 원리금균등상환을 위한 함수
			function halbu_same($src,$rate,$period) 
			{ 
					//인풋부분 : src(원금), rate(이율-소수점단위), period(기간-개월수) 
					$s_rate = 1 + ( $rate / 12 );//원금증가율 
					$o_money = $src * ( 1 - $s_rate) / ( 1 - pow($s_rate,$period));//초회원금 
					$r_money = $src * $rate / 12;//초회이자 
					return $o_money + $r_money;//월상환금액(원리금균등분할상환) 
			} 

			$eul = $interest*0.01; // 대출이율
			$money = halbu_same( $hope_money, $eul, $period ); // 월 고정 상환금액

			for($i=1; $i<=$period; $i++) {

				$eja = $hope_money * $eul / 12; //이자 4167
				$wongum = $money - $eja; // 원금
				$hope_money = ($hope_money - $wongum);
				$print_wongum = $print_wongum + $wongum; 
				$print_eja = $print_eja + $eja;
		?>
        <tr>
          <td><?=$i?></td>
          <td><?=number_format($money);?>원</td>
          <td><?=number_format($wongum)?>원</td>
          <td><?=number_format($print_wongum)?>원</td>
          <td><?=number_format($eja)?>원</td>
          <td><?=number_format($print_eja)?>원</td>
          <td class="last"><?=str_replace('-', '', number_format($hope_money));?>원</td>
        </tr>
		<? 
			}

		} elseif($repayment == "원금균등상환") { 
		
			// 원금균등상환을 위한 함수

			$eul = $interest*0.01; // 대출이율

			$g_money = $hope_money;

			for($i=1; $i<=$period; $i++) {

				$eja = $hope_money * $eul / 12; //이자 4167
				$print_money = $g_money / $period;
				$mon_money = $print_money + $eja;
				$hope_money = $hope_money - $print_money;
				$print_wongum = $print_wongum + $print_money; 
				$print_eja = $print_eja + $eja;
		?>
        <tr>
          <td><?=$i?></td>
          <td><?=number_format($mon_money)?>원</td>
          <td><?=number_format($print_money)?>원</td>
          <td><?=number_format($print_wongum)?>원</td>
          <td><?=number_format($eja)?>원</td>
          <td><?=number_format($print_eja)?>원</td>
          <td class="last"><?=str_replace('-', '', number_format($hope_money));?>원</td>
        </tr>
		<? 
			}

		} elseif($repayment == "만기일시상환") { 
		
			// 원금균등상환을 위한 함수

			$eul = $interest*0.01; // 대출이율

			$g_money = $hope_money;

			for($i=1; $i<=$period; $i++) {

				$eja = $hope_money * $eul / 12; //이자 4167
				$print_money = $g_money / $period;
				$print_eja = $print_eja + $eja;
		?>
        <tr>
          <td><?=$i?></td>
          <td>
			<? if($i == $period) { ?>
				<?=number_format($hope_money+$eja)?>원
			<? } else { ?>
				<?=number_format($eja)?>원
			<? } ?>
		  </td>
          <td>
			<? if($i == $period) { ?>
				<?=number_format($hope_money)?>원
			<? } else { ?>
				<?=number_format('0')?>원
			<? } ?>
		  </td>
          <td>
			<? if($i == $period) { ?>
				<?=number_format($hope_money)?>원
			<? } else { ?>
				<?=number_format('0')?>원
			<? } ?>
		  </td>
          <td>
			<?=number_format($eja)?>원
		  </td>
          <td><?=number_format($print_eja)?>원</td>
          <td class="last">
			<? if($i == $period) { ?>
				<?=number_format('0')?>원
			<? } else { ?>
				<?=number_format($hope_money)?>원
			<? } ?>
		  </td>
        </tr>
		<? } } ?>
    </table>
	<? } ?>
    <!-- 상단 테이블 2 e -->
  </div>

</div>
 
</body>
</html>

<script type="text/javascript">
<!--

function check_money(form)
{
	if(form.hope_money.value == "" || form.hope_money.value == "0")
	{
		alert("대출금을 입력해주세요.");
		return false;
	}

	if(form.period.value == "" || form.period.value == "0")
	{
		alert("대출기간을 입력해주세요.");
		return false;
	}

	if(form.interest.value == "" || form.interest.value == "0")
	{
		alert("대출금리를 입력해주세요.");
		return false;
	}

}

function set_period(val)
{
	document.form.period.value = parseInt(val) * 12;
}

function set_interest(val)
{
	document.form.interest.value = val;
}
</script>