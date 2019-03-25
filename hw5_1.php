<?php
	header("Content-Type:text/html; charset=utf-8");
	date_default_timezone_set("Asia/Taipei");
	
	$nowdate=date("Y-m-d H:i:s");
	$otherdate="2016-11-03 21:35:00";
	echo "現在時間為:".$nowdate."</br>";
	echo "另一時間為:".$otherdate."</br>";
	$timestamp1=strtotime($nowdate);
	$timestamp2=strtotime($otherdate);
	$sec=$timestamp1-$timestamp2;
	echo "相差秒數為:".$sec."</br>";
	$min=$sec/60;
	echo "相差分鐘數為:".$min."</br>";
	$hour=$min/60;
	echo "相差小時數為:".$hour."</br>";
	$day=$hour/24;
	echo "相差天數數為:".$day."</br>";
?>