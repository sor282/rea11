<?
$mobile_agent = array("iphone","ipod", "ipad","android","blackberry","opera Mini", "windows ce", "nokia", "sony", "lgtelecom","skt" ); 
$check_mobile = false; 
for($i=0; $i<sizeof($mobile_agent); $i++){ 
	if(stripos( $_SERVER['HTTP_USER_AGENT'], $mobile_agent[$i] )){ 
?>
	<div id="mobile">
	  <a href="m/main.php"><img src="<?=$home_path?>/images/mobilever.png" alt="모바일버전으로 보기" class="mobilever"/></a>
	</div>
<? } } ?>
