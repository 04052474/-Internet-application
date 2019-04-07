<?php
header("Content-Type:text/html; charset=big5");
	echo $_SERVER["PHP_SELF"]."<br />";
	echo $_SERVER["SCRIPT_FILENAME"]."<br />";
	echo __FILE__;
?>