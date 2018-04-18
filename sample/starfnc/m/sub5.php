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
  </header>



  <section>
    <div id="sub_con1">
      <h2>간편대출설계</h2>

      <table summary="대출설계 시뮬레이션" id="tableH" class="tableH">
        <tbody>
          <tr>
            <th><span>성별</span></th>
            <td>
              <input type="radio" name="sex1" id="male" value="Y" title="성별" /><label for="male"> 남</label> &nbsp; &nbsp;
              <input type="radio" name="sex1" id="female" value="N" title="성별" /><label for="female"> 여</label>
            </td>
          </tr>
          <tr>
            <th><span>나이</span></th>
            <td>
              <select id="#" style="width:60px" class="selectH">
                <option>1995</option>
                <option>1994</option>
                <option>1993</option>
                <option>1992</option>
              </select> 년&nbsp; 
              <select id="#" style="width:40px" class="selectH">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select> 월&nbsp; 
              <select id="#" style="width:40px" class="selectH">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select> 일
            </td>
          </tr>
          <tr>
            <th><span>배우자</span></th>
            <td>
              <input type="radio" name="spouse1" id="Yes" value="Y" title="배우자 유무" /><label for="Yes">있음</label> &nbsp;
              <input type="radio" name="spouse1" id="No" value="N" title="배우자 유무" /><label for="No">없음</label>
            </td>
          </tr>
          <tr>
            <th><span>대출희망금액</span></th>
            <td>
              <input type="text" id="" class="inputH" style="width:150px" /> 원
            </td>
          </tr>
          <tr>
            <th><span>대출종류</span></th>
            <td>
              <select id="" style="width:152px" class="selectH">
                <option>대출종류 선택</option>
                <option>대출종류 선택</option>
                <option>대출종류 선택</option>
              </select>
            </td>
          </tr>
          <tr>
            <th><span>대출금리</span></th>
            <td>
              <input type="text" id="" class="inputH" style="width:150px" /> %<br/>(년 희망금리 입력 1~34.9%)
            </td>
          </tr>
          <tr>
            <th><span>대출기간</span></th>
            <td>
              <select id="" style="width:152px" class="selectH">
                <option>대출기간 선택</option>
                <option>대출기간 선택</option>
                <option>대출기간 선택</option>
              </select>
            </td>
          </tr>
          <tr>
            <th><span>상환방법</span></th>
            <td>
              <input type="radio" name="repayment1" id="autonomy" value="Y" title="배우자 유무" /><label for="autonomy">원금자율상환</label> &nbsp;
              <input type="radio" name="repayment1" id="division" value="N" title="배우자 유무" /><label for="division">원리금균등분할상환</label>
            </td>
          </tr>
          <tr>
            <th><span>직업</span></th>
            <td>
              <select id="" style="width:152px" class="selectH">
                <option>직업 선택</option>
                <option>직업 선택</option>
                <option>직업 선택</option>
              </select>
            </td>
          </tr>
          <tr>
            <th><span>이름</span></th>
            <td>
              <input type="text" id="" class="inputH" style="width:150px" />
            </td>
          </tr>
          <tr>
            <th><span>연락처</span></th>
            <td>
              <select id="" style="width:50px" class="selectH">
                <option>010</option>
                <option>011</option>
                <option>016</option>
                <option>017</option>
                <option>018</option>
              </select> -
              <input type="text" id="" class="inputH" style="width:36px" /> -
              <input type="text" id="" class="inputH" style="width:36px" />
            </td>
          </tr>
          <tr>
            <th><span>E-mail</span></th>
            <td>
              <input type="text" id="" class="inputH" style="width:150px" />
            </td>
          </tr>
          <tr class="memo">
            <th><span>메모</span></th>
            <td>
              <textarea id="" name="" class="textareaH" style="width:100%;height:58px" ></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="checkbox" name="submit" id="check2" /> &nbsp; 
              <label for="check2">개인정보의 수집·이용 전체약관 동의</label> &nbsp;
              <a href="#" onClick="window.open('pop1.php','_blank','left=100,top=100,toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=600,height=400')"><img src="images/con3_btn2.png" alt="자세히" width="47" /></a>
            </td>
          </tr>
        </tbody>
      </table>
      <div style="width:100%;height:24px;text-align:center">
        <img src="images/sub5_btn.jpg" alt="결과보기" style="height:24px;" />
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
