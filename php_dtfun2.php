<?php
header("Content-Type:text/html; charset=big5");
date_default_timezone_set("Asia/Taipei");
$date_server = date("Y-m-d H:i:s");
echo "���A���ɶ�: $date_server <br>";
$date_gmt = gmdate("Y-m-d H:i:s");
echo "��L�ªv�ɶ�: $date_gmt <br>";
?>