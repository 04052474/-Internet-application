<?php 
include("connMysql.php");
if (!@mysql_select_db("class")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	
	
	
	
	//重新導向回到主畫面
	header("Location: data.php");
}
/*	
  
 本程式僅為部分程式碼,無法執行,供作業參考用

*/

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學生資料管理系統</title>
</head>
<body>
<h1 align="center">學生資料管理系統 - 刪除資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>姓名</td><td><?php   ?></td>
    </tr>
    <tr>
      <td>性別</td><td>
      <?php
      	
   	  ?>
      </td>
    </tr>
    <tr>
      <td>生日</td><td><?php ?></td>
    </tr>
    <tr>
      <td>電子郵件</td><td><?php ?></td>
    </tr>
    <tr>
      <td>電話</td><td><?php ?></td>
    </tr>
    <tr>
      <td>住址</td><td><?php ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="cID" type="hidden" value="<?php ?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>