<?php
header("Content-Type:text/html; charset=big5");
$dateStr = date("Y-m-d 23:59:59");
if(isset($_COOKIE["counter"])){
	$counter = $_COOKIE["counter"];
	$counter++;	
	setcookie("counter", $counter, strtotime($dateStr));
}else{
	setcookie("counter", "0", strtotime($dateStr));
	header("Location: php_cookie2.php");
}
?>
<html>
<head>
	<title>今日瀏覽次數</title>
</head>
<body>
<?php
echo "您今日瀏覽本頁的次數為".$counter."次";
?>
</body>
</html>