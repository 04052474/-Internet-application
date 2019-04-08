<?php
	$mid3=$_GET['mid3'];
	$str=str_split($mid3);
	$num=0;
	if(strlen($mid3)<=6)
	{
		echo "輸入 : ".$mid3."</br>";
		echo "輸出 : ";
		for($i=count($str)-1;$i>=0;$i--)
			echo $str[$i];
		echo "</br>";
		for($i=count($str)-1;$i>=0;$i--)
			$num+=$str[$i];
		echo "總和為 : "."$num";
	}
	else
	{
		echo "請檢查有無六位以內";
	}
?>