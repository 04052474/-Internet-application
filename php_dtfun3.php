<?php 
header("Content-Type:text/html; charset=big5");
date_default_timezone_set("Asia/Taipei");
echo strftime("%A, %d %b %Y %H:%M:%S")."<br />";
echo gmstrftime("%A, %d %b %Y %H:%M:%S")."<br />";
setlocale(LC_ALL, 'cht_taiwan');
//setlocale(LC_ALL, "zh_TW");
echo strftime("%A, %d %b %Y %H:%M:%S")."<br />";
echo gmstrftime("%A, %d %b %Y %H:%M:%S");
?>