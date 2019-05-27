<?php 
include("connMysql.php");
if (!@mysql_select_db("bookstore")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	
	$sql_query="UPDATE `books` SET `cBookName`='$_POST[cBookName]',
									`cAuthor`='$_POST[cAuthor]',
									`cPublisher`='$_POST[cPublisher]',
									`cPublishDate`='$_POST[cPublishDate]',
									`cPrice`='$_POST[cPrice]' WHERE `cID`='$_GET[id]' ";
	mysql_query($sql_query);
	//重新導向回到主畫面
	header("Location: hw11data.php");
}
/*	
  
 本程式僅為部分程式碼,無法執行,供作業參考用
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>書單資料管理系統</title>
</head>
<body>
<?php
	$sql_query="SELECT * FROM `books` WHERE `cID`='$_GET[id]'";
	$result=mysql_query($sql_query);
	$row_result=mysql_fetch_assoc($result);
?>
<h1 align="center">書單資料管理系統 - 修改資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>書名</td><td><input type="text" name="cBookName" id="cBookName" value="<?php 
	echo $row_result['cBookName'];
	?>"></td>
    </tr>
    <tr>
      <td>作者</td><td><input type="text" name="cAuthor" id="cAuthor" value="<?php 
	echo $row_result['cAuthor'];?>"></td>
    </tr>
    <tr>
      <td>出版商</td><td><input type="text" name="cPublisher" id="cPublisher" value="<?php 
	  echo $row_result['cPublisher'];?>"></td>
    </tr>
    <tr>
      <td>出版日期</td><td><input type="text" name="cPublishDate" id="cPublishDate" value="<?php 
	  echo $row_result['cPublishDate'];?>"></td>
    </tr>
    <tr>
      <td>售價</td><td><input name="cPrice" type="text" id="cPrice" size="40" value="<?php 
	  echo $row_result['cPrice'];?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="cID" type="hidden" value="<?php echo $_GET[id]?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>