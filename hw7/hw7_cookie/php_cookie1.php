<?php
header("Content-Type:text/html; charset=big5");
$setResult=setcookie("TestCookie", "這是Cookie的內容");
?>
<html>
<head>
	<title>Cookie 存取測試</title>
</head>
<body>
<?php
if($setResult){
	if(isset($_COOKIE["TestCookie"])){
		echo "Cookie的內容為：".$_COOKIE["TestCookie"];
	}else{
		echo "Cookie 儲存成功，請重整頁面顯示!";
	}
}
?>
</body>
</html>