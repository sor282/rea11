<!doctype html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="ko">
<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">

<title>타이틀</title>

<style type="text/css">
#box{width:600px;height:500px;overflow:hidden}
#box img{}
</style>

</head>
<body>



<div id="box">
<img src="img.jpg">
</div>

<script src="../mobile_menu/js/jquery-1.8.3.min.js"  type="text/javascript"></script>
<script src="jquery-animate-css-rotate-scale.js"  type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#box img").hover(
            function () {
                $(this).animate({scale: '+=0.1'}, 50);
            },
            function () {
                $(this).animate({scale: '-=0.1'}, 50);
            }
        );
    });
</script>



</body>
</html>
