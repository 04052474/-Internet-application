<?php
header("Content-Type:text/html; charset=big5");
date_default_timezone_set("Asia/Taipei");
$date_server = date("Y-m-d H:i:s");
echo "伺服器時間: $date_server <br>";
$date_gmt = gmdate("Y-m-d H:i:s");
echo "格林威治時間: $date_gmt <br>";
?>