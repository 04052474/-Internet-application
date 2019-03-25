<?php
header("Content-Type:text/html; charset=big5");
date_default_timezone_set("Asia/Taipei");
$thisYear = date("Y");
if(checkdate(2, 29, $thisYear)){
	echo "今年 $thisYear 年是閏年";
}else{
	echo "今年 $thisYear 年不是閏年";
}
?>