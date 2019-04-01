<?php
header("Content-Type:text/html; charset=big5");
	$path = __FILE__;
	clearstatcache();
	$pathData = stat($path);
	print_r($pathData);
?>