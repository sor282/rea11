<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> new document </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>

<script src="jquery.cycle.all.js" language="JavaScript" type="text/javascript"></script>
<script src="jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script type="text/javascript">
  $(window).load(function(){
    jQuery(".slider_banner ul").carouFredSel({
      align       : "left",
      height	: 48, //전체 높이
      items		: 7,
      scroll      : {
        items		:1, //스크롤링할 갯수
        duration        : 300, //시간
        pauseOnHover	: true //마우스오버시 일시정지기능 마우스 아웃시 자동재생됨
        },
      prev:{
        button : '#banner_befor',
        wipe : true, //로테이션 허용(리스트 처음에서 클릭시 마지막요소로 이동)
        pauseOnHover:false
      },
      next: {
        button :'#banner_next',
        wipe : true,
        pauseOnHover:false
      },
      direction	: "left"
    }).parent().css("margin", "auto");
  });	
</script>



<link rel="stylesheet" href="reset.css" type="text/css" />
<style type="text/css">
/* 배너 */
.m_banner{position:relative;width:1000px;height:48px;overflow:hidden}
.m_banner .banner_box{margin:0 0 0 30px;width:940px;}
.m_banner .slider_banner{width:940px;height:48px;overflow:hidden;}
.m_banner .slider_banner ul{height:100%;overflow:hidden;}
.m_banner .slider_banner li{float:left;margin-right:15px}
.m_banner .before{position:absolute;top:15px;left:0}
.m_banner .next{position:absolute;top:15px;right:0}

</style>
</head>

<body>


<div class="m_banner">
  <div class="banner_box">
    <span class="before" id="banner_befor"><a href="#"><img src="btn_before.png" alt="이전보기"/></a></span>
    <span class="next" id="banner_next"><a href="#"><img src="btn_next.png" alt="다음보기"/></a></span>
    <div class="slider_banner">
      <ul>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver.jpg" alt=""></a></li>
        <li><a href="http://www.naver.com/" title="새창열기" target="_blank"><img src="naver2.jpg" alt=""></a></li>
      </ul>
    </div>
  </div>
</div>



</body>
</html>
