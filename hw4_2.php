<?php
	$string="ABCDE";
	for($i=0;$i<5;$i++){
		$want=substr($string,$i,1);
		echo $want;
		echo str_repeat($want,$i)."</br>";
	}
	
?>