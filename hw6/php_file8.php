<?php
header("Content-Type:text/html; charset=big5");
	//$fileDir = "C:\XAMPP\PHP";
	$fileDir = "../";
	$fileResource = scandir($fileDir);
	echo "<table border='1' width='100%'><tr><td width='20%' valign='top'>Folder:</td><td>";
	foreach($fileResource as $fileName){
		if(is_dir($fileDir.'\\'.$fileName))	echo $fileName."<br />";
	}
	echo "</td></tr><tr><td width='20%' valign='top'>File:</td><td>";
	foreach($fileResource as $fileName){
		if(is_file($fileDir.'\\'.$fileName))	echo $fileName."<br />";
	}
	echo "</td></tr></table>";
?>