<?php
	$ctemp=$_GET['ctemp'];
	$ftemp=$ctemp*9/5+32;
	echo "輸入攝氏為".$ctemp."°C</br>";
	echo "華氏溫度為".$ftemp."°F";
?>