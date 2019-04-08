<?php
	header("Content-Type:text/html; charset=utf-8");
	
	$fileDir = getcwd();
	if(isset($_GET['changelayer']))
	{
		$fileDir=$_GET['changelayer'];
		echo $fileDir;
	}
	
	$upperlayer=dirname($fileDir);
	echo "<div align='center'>";
	echo "<table border='1' width=600>";
		echo "<tr>"."<td colspan='3'>"."目前路徑:";
		echo $fileDir;
		echo "<tr>"."<td colspan='3'>"."<a href='?&changelayer=$upperlayer'>上一層</a>"."|"."
	<html>
<head>
</head>
<body>
	<form action='?&changelayer=$fileDir' method='post' enctype='multipart/form-data'>
	<input type='file' name='fileUpload' />
	<input type='submit' value='送出' />
	</form>
</body>
</html>";
	if($_FILES["fileUpload"]["error"]==0){
		if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $fileDir.'\\'.$_FILES["fileUpload"]["name"])){
			header("Location: ?&changelayer=$fileDir");
		}
		else{
			echo "<a href='javascript:window.history.back();'>回上一頁</a>";
		}
	}
	echo "<tr>"."<td width=300>"."名稱"."<td width=200>"."檔案大小"."<td>"."功能";
	
	$fileResource = scandir($fileDir);
	foreach($fileResource as $fileName){
		if(is_dir($fileDir.'\\'.$fileName))
		{
			if ($fileName!="." && $fileName!="..")
				echo "<tr>"."<td>"."$fileName"."<td>"."<td>"."<a href='?&changelayer=$fileDir&action=$fileName'>刪除</a>";
		}
		if(is_file($fileDir.'\\'.$fileName))
		{
			if ($fileName!="." && $fileName!="..")
				echo "<tr>"."<td>"."$fileName"."<td>".filesize($fileDir.'\\'.$fileName)." bytes"."<td>"."<a href='?&changelayer=$fileDir&action=$fileName'>刪除</a>";
		}	
	}
	foreach($fileResource as $fileName){
		if(isset($_GET["action"])&&$_GET["action"]==$fileName)
		{
			unlink($fileDir.'\\'.$fileName);
			header("Location: ?&changelayer=$fileDir");
		}
	}
	echo "</table>";
	echo "</div>";
?>