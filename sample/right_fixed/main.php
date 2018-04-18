<!DOCTYPE html>
<html lang="ko">

<head>
<title> new document </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.11.4.custom.min.js"></script>
<script type="text/javascript" src="sidebar.js"></script>

<style type="text/css">
button {outline: none;}
button .sidebar-btn {color: #fff;}
.sidebar {background: #222;width: 270px;height: 100%;position: fixed;top: 0;right: -70px;z-index: 9999;}
.sidebar > .sidebar-content {color: #fff;margin-left:70px}
.sidebar button {background: #222;display: block;position: absolute;top: 117px;left: -20px;width: 20px;height: 38px;line-height: 38px;text-align: center;margin: 0;padding: 0;border: none;}
</style>
</head>

<body>


    <aside class="sidebar">
        <div class="sidebar-content">
            내용입력
        </div>
        <button class="sidebar-btn"><span class="sidebar-span">&gt;</span></button>
    </aside>



</body>
</html>
