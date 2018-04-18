<? include "include/head.php" ?>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-1.8.3.min.js"  type="text/javascript"></script>
<script src="js/lnb.js" type="text/javascript"></script><!-- lnb -->

</head>
<body>

<div id="wrap_all">

  <div id="skipNav">
  <a href="#content">본문 바로가기</a>
  <a href="#lnbH">로컬 네비게이션 바로가기</a>
  </div>



  <!-- header -->
  <? include "include/header.php" ?>
  <!-- header e -->



<!-- con_wrap -->
<div id="con_wrap">

  <!-- content -->
  <div id="content">

    <div id="left_area">

      <!-- 로그인 박스 -->
      <div id="login">
        <h3 class="hidden">로그인</h3>
        <div id="login_top">
          <div id="login_left">
            <ul>
              <li>
                <label for="id1">아 이 디</label>
                <input type="text" id="id1" class="inputH" style="width:85px" />
              </li>
              <li>
                <label for="pass1">비밀번호</label>
                <input type="text" id="pass1" class="inputH" style="width:85px" />
              </li>
            </ul>
          </div>
          <div id="login_right">
            <img src="images/login_btn.jpg" alt="로그인" />
          </div>
        </div>
        <div id="login_bottom">
          <a href="#" class="left">회원가입</a>
          <a href="#" class="right">아이디/비밀번호 찾기</a>
        </div>
      </div>
      <!-- 로그인 박스 e -->


      <!-- 빠른상담신청 -->
      <div id="counsel">
        <h3>빠른상담신청</h3>
        <ul>
          <li class="bullet">
            <label for="name1">이 &nbsp; &nbsp;름</label><br/>
            <input type="text" id="name1" class="inputH" style="width:146px" />
          </li>
          <li class="bullet">
            <label for="number1">연락처</label><br/>
            <select id="number1" style="width:50px" class="selectH">
              <option>010</option>
              <option>011</option>
              <option>016</option>
              <option>017</option>
              <option>018</option>
            </select> -
            <input type="text" id="number1" class="inputH" style="width:36px" /> -
            <input type="text" id="number1" class="inputH" style="width:36px" />
          </li>
          <li class="bullet">
            <label for="loan1">상담종류</label><br/>
            <select id="loan1" style="width:148px" class="selectH">
              <option>상담종류선택</option>
              <option>상담종류선택</option>
              <option>상담종류선택</option>
            </select>
          </li>
          <li class="agree">
            <input type="checkbox" name="submit" id="check1" />
            <label for="check1">개인정보의 수집·이용에 관한<br/> &nbsp; &nbsp; &nbsp;전체약관 동의</label>
            <a href="#" onClick="window.open('pop1.php','_blank','left=100,top=100,toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=600,height=400')"><img src="images/btn_detail.png" alt="자세히" /></a>
          </li>
        </ul>
        <div id="application">
          <a href="#"><img src="images/counsel_btn.jpg" alt="상담신청" /></a>
        </div>
      </div>
      <!-- 빠른상담신청 e -->


      <!-- 좌측 퀵메뉴 -->
      <div id="quick">
        <h3 class="hidden">퀵메뉴</h3>
        <ul>
          <li class="li01"><a href="#">나의사건검색</a></li>
          <li class="li02"><a href="#">자가진단</a></li>
          <li class="li03"><a href="#">서식자료</a></li>
          <li class="li04"><a href="#">나의관할법원</a></li>
          <li class="li05"><a href="#">부동산시세조회</a></li>
          <li class="li06"><a href="#">중고차시세조회</a></li>
        </ul>
      </div>
      <!-- 좌측 퀵메뉴 e -->


      <div id="call">
        <img src="images/call.jpg" alt="맞춤상담센터:" />
      </div>


      <!-- 좌측 배너광고 1-->
      <div id="banner_left1">
        <img src="images/banner1.jpg" alt="배너광고" />
      </div>
      <!-- 좌측 배너광고1 e -->


      <!-- 좌측 배너광고2 -->
      <div id="banner_left2">
        <img src="images/banner2.jpg" alt="배너광고" />
      </div>
      <!-- 좌측 배너광고2 e -->
    </div>


    <div id="con_area">

      <!-- 본문 퀵메뉴 1 -->
      <div id="quick1">
        <h3 class="hidden">빠른메뉴 바로가기</h3>
        <ul>
          <li class="li01"><a href="#">개인회생</a></li>
          <li class="li02"><a href="#">전문직회생</a></li>
          <li class="li03"><a href="#">일반회생</a></li>
          <li class="li04"><a href="#">파산면책</a></li>
          <li class="li05 last"><a href="#">기업 회생/파산</a></li>
        </ul>
      </div>
      <!-- 본문 퀵메뉴 1 e -->


      <!-- 본문 퀵메뉴 2 -->
      <div id="quick2">
        <h3 class="hidden">빠른메뉴 바로가기2</h3>
        <ul>
          <li class="li01"><a href="#">개인회생 효력</a></li>
          <li class="li02"><a href="#">개인회생 유의사항</a></li>
          <li class="li03"><a href="#">파산/면책 효력</a></li>
          <li class="li04"><a href="#">파산/면책 유의사항</a></li>
          <li class="li05"><a href="#">면책 불허가사유</a></li>
          <li class="li06"><a href="#">불법추심 대처요령</a></li>
          <li class="li07"><a href="#">압류 해제방법</a></li>
        </ul>
      </div>
      <!-- 본문 퀵메뉴 2 e  -->


      <!-- 게시판 -->
      <div id="notice">
        <div id="notice_wrap1">
          <div id="notice1">
            <h3 class="bullet2">최근 상담신청 현황</h3>
            <ul>
              <li><a href="#">횡령죄 민형사 소송 질문입니다</a><span>[15.12.14]</span></li>
              <li><a href="#">성추행 관련문의입니다 꼭 좀 도와주세요</a><span>[15.11.27]</span></li>
              <li><a href="#">밑에 글쓴 사람입니다, 재문의 사항</a><span>[15.11.03]</span></li>
              <li><a href="#">항중소기업 가족경영 탈세 및 복잡한 사정에 관해 문의..</a><span>[15.10.21]</span></li>
              <li><a href="#">빌려준 돈을 받고 싶습니다. </a><span>[15.09.08]</span></li>
            </ul>
            <a href="#" class="more"><img src="images/more1.jpg" alt="더보기" /></a>
          </div>
          <div id="notice2">
            <h3 class="bullet2">성공사례</h3>
            <ul>
              <li><a href="#">횡령죄 민형사 소송 질문입니다</a><span>[15.12.14]</span></li>
              <li><a href="#">성추행 관련문의입니다 꼭 좀 도와주세요</a><span>[15.11.27]</span></li>
              <li><a href="#">밑에 글쓴 사람입니다, 재문의 사항</a><span>[15.11.03]</span></li>
              <li><a href="#">항중소기업 가족경영 탈세 및 복잡한 사정에 관해 문의..</a><span>[15.10.21]</span></li>
              <li><a href="#">빌려준 돈을 받고 싶습니다. </a><span>[15.09.08]</span></li>
            </ul>
            <a href="#" class="more"><img src="images/more1.jpg" alt="더보기" /></a>
          </div>
        </div>
        <div id="notice_wrap2">
          <div id="notice3">
            <h3 class="bullet2">개인 회생/파산</h3>
            <ul>
              <li><a href="#">횡령죄 민형사 소송 질문입니다</a><span>[15.12.14]</span></li>
              <li><a href="#">성추행 관련문의입니다 꼭 좀 도와주세요</a><span>[15.11.27]</span></li>
              <li><a href="#">밑에 글쓴 사람입니다, 재문의 사항</a><span>[15.11.03]</span></li>
              <li><a href="#">항중소기업 가족경영 탈세 및 복잡한 사정에 관해 문의..</a><span>[15.10.21]</span></li>
              <li><a href="#">빌려준 돈을 받고 싶습니다. </a><span>[15.09.08]</span></li>
            </ul>
            <a href="#" class="more"><img src="images/more1.jpg" alt="더보기" /></a>
          </div>
          <div id="notice4">
            <h3 class="bullet2">자주하는 질문</h3>
            <ul>
              <li><a href="#">횡령죄 민형사 소송 질문입니다</a><span>[15.12.14]</span></li>
              <li><a href="#">성추행 관련문의입니다 꼭 좀 도와주세요</a><span>[15.11.27]</span></li>
              <li><a href="#">밑에 글쓴 사람입니다, 재문의 사항</a><span>[15.11.03]</span></li>
              <li><a href="#">항중소기업 가족경영 탈세 및 복잡한 사정에 관해 문의..</a><span>[15.10.21]</span></li>
              <li><a href="#">빌려준 돈을 받고 싶습니다. </a><span>[15.09.08]</span></li>
            </ul>
            <a href="#" class="more"><img src="images/more1.jpg" alt="더보기" /></a>
          </div>
        </div>
      </div>
      <!-- 게시판 e -->


      <!-- 업체리스트 -->
      <div id="office">

        <!-- 업체리스트 type1 -->
        <h3 class="bullet2">파워상담</h3>

        <div id="office_wrap1">
          <div class="box1">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
          <div class="box1">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
          <div class="box1" id="last">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="office_wrap1">
          <div class="box1">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
          <div class="box1">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
          <div class="box1" id="last">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="office_wrap1">
          <div class="box1">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
          <div class="box1">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
          <div class="box1" id="last">
            <img src="images/office_photo1.jpg" alt="사진" class="photo" />
            <a href="#" class="btn"><img src="images/office_btn1.jpg" alt="상담바로가기" /></a>
            <div class="text">
              <ul>
                <li><h4>상호: 금현준 법률사무소</h4></li>
                <li>전문: 회생/파산</li>
                <li>지역: 부산</li>
                <li class="profile">&lt;경력 및 약력&gt;
                  <ul>
                    <li>고려대 법학과졸업</li>
                    <li>짱 로펌 수석 근무</li>
                    <li>윤중철 법률사무소 5년 운영</li>
                  </ul>
                </li>
                <li class="red">전화번호: 02-2365-8965</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- 업체리스트 type1 e -->


        <!-- 업체리스트 type 2 -->
        <h3 class="bullet2">맞춤상담</h3>
        <div id="office_wrap2">
          <div class="box2">
          </div>
        </div>
        <!-- 업체리스트 type 2 e-->


        <!-- 업체리스트 type 3 -->
        <h3 class="bullet2">일반상담</h3>
        <div id="office_wrap3">
          <div class="box3">
          </div>
        </div>
        <!-- 업체리스트 type 3 e-->

      </div>
      <!-- 업체리스트 -->


    </div>
  </div>
  <!-- content e -->


  <div id="banner_right1">
    <img src="images/banner3.jpg" alt="배너광고" />
  </div>


</div>
<!-- con_wrap e -->



  <!-- footer -->
  <? include "include/footer.php" ?>
  <!-- footer e -->



</div>
</body>
</html>
