<?php
	header("Content-Type:text/html; charset=utf-8");
	function click1($location){
		
	}
	function click2($fileName){
		echo "$fileName";
		unlink($fileName);
		header("Location:hw6.php");
	}
	
	$location=getcwd();
	echo "<div align='center'>";
	echo "<table border='1' width=600>";
		echo "<tr>"."<td colspan='3'>"."目前路徑:";
		echo $location;
		echo "<tr>"."<td colspan='3'>"."<a href='#' onclick='click1($location)'>上一層</a>"."|"."
	<html>
<head>
</head>
<body>
	<form action='php_file9.php' method='post' enctype='multipart/form-data'>
	<input type='file' name='fileUpload' />
	<input type='submit' value='送出' />
	</form>
</body>
</html>";
	if($_FILES["fileUpload"]["error"]==0){
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "./".$_FILES["fileUpload"]["name"])){
			header("Location:hw6.php");
		}
		else{
			echo "<a href='javascript:window.history.back();'>回上一頁</a>";
		}
	}
	echo "<tr>"."<td width=300>"."名稱"."<td width=200>"."檔案大小"."<td>"."功能";
	
	$fileResource = scandir($location);
	foreach($fileResource as $fileName){
	if(isset($fileName)){
		if ($fileName!="." && $fileName!="..")
			echo "<tr>"."<td>"."$fileName"."<td>".filesize($fileName)." bytes"."<td>"."<a href='#' onclick='click2($fileName)'>刪除</a>";
			
	}
	}

	echo "</table>";
	echo "</div>";
?>