<?php
	header("Content-Type:text/html; charset=utf-8");
	date_default_timezone_set("Asia/Taipei");
	
	$timestamp =strtotime(date("Y-m-01"));
	//echo $timestamp."</br>";
	//echo date("t",$timestamp)."</br>";
	//echo date("w",$timestamp)."</br>";
	$howmanyday=date("t",$timestamp);
	$firstdayloc=date("w",$timestamp);
	$day=1;
	echo "<div align='center'>";
	echo "<table border='1'>";
		echo "<tr><th>星期日<th>星期一<th>星期二<th>星期三<th>星期四<th>星期五<th>星期六";
		echo "<tr>";
		for($x=1;$x<=$firstdayloc;$x++)
			echo "<td align='center' >";
		for($x=$firstdayloc+1;$x<=$howmanyday+$firstdayloc;$x++)
		{	
		echo "<td align='center' >"."$day";
			if($x%7==0){
				echo "<tr>";
			}
		$day++;
		}
		for($x=$howmanyday+$firstdayloc+1;$x<=42;$x++)
		{	
			echo "<td>&nbsp";
			if($x%7==0){
				echo "<tr>";
			}
		}
	echo "</table>";	
	echo "</div>";
?>