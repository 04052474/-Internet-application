<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("connMysql.php");
	if (!@mysql_select_db("bookstore")) die("資料庫選擇失敗！");
	
	$addbook="INSERT INTO `books` (`cBookName`,`cAuthor`,`cPublisher`,`cPublishDate`,`cPrice`) VALUE ('$_POST[cBookName]'
	,'$_POST[cAuthor]','$_POST[cPublisher]','$_POST[cPublishDate]','$_POST[cPrice]')";
	mysql_query($addbook);
	/*
	$addbook.="'".$_POST['cBookName']"',";
	$addbook.="'".$_POST['cAuthor']"',";
	$addbook.="'".$_POST['cPublisher']"',";
	$addbook.="'".$_POST['cPublishDate']"',";
	$addbook.="'".$_POST['cPrice']."')";
	*/
	//重新導向回到主畫面
	header("Location: hw11data.php");
}	
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>書單資料管理系統</title>
</head>
<body>
<h1 align="center">書單資料管理系統 - 新增資料</h1>
<p align="center"><a href="hw11data.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>書名</td><td>
      <input type="text" name="cBookName" id="cBookName">
      </td>
    </tr>
    <tr>
      <td>作者</td><td><input type="text" name="cAuthor" id="cAuthor"></td>
    </tr>
    <tr>
      <td>出版商</td><td><input type="text" name="cPublisher" id="cPublisher"></td>
    </tr>
    <tr>
      <td>出版日期</td><td><input type="text" name="cPublishDate" id="cPublishDate"></td>
    </tr>
    <tr>
      <td>售價</td><td><input name="cPrice" type="text" id="cPrice" ></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="action" type="hidden" value="add">
      <input type="submit" name="button" id="button" value="新增資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>