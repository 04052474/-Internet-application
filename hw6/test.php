<?php
	$str1="111";
	$str2="";
	unset ($str2);
	if(isset($str1))
	echo isset($str1);
	else if(isset($str2)==false)
	echo "0";
?>