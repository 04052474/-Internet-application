<?php
    header("Content-Type:text/html; charset=big5");
    
	//$fileDir = "C:/XAMPP/PHP";
	$fileDir = "../";
	$fileResource = opendir($fileDir);
	echo "<table border='1' width='100%'><tr><td width='20%' valign='top'>Folder:</td><td>";
	while($fileList = readdir($fileResource)){
		if(is_dir($fileDir.'\\'.$fileList))	echo $fileList."<br />";
	}
	rewinddir($fileResource);
	echo "</td></tr><tr><td width='20%' valign='top'>File:</td><td>";
	while($fileList = readdir($fileResource)){
		if(is_file($fileDir.'\\'.$fileList))echo $fileList."<br />";
	}
	echo "</td></tr></table>";
	closedir($fileResource);
?>