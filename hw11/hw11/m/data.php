<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysql_select_db("class");
	if (!$seldb) die("資料庫選擇失敗！");
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
<h1 align="center">學生資料管理系統</h1>
<p align="center">目前資料筆數：<?php   ?>  <a href="add.php">新增學生資料</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
    <th>座號</th>
    <th>姓名</th>
    <th>性別</th>
    <th>生日</th>
    <th>電子郵件</th>
    <th>電話</th>
    <th>住址</th>
    <th>功能</th>
  </tr>
  <!-- 資料內容 -->
<?php
	
?>
</table>
</body>
</html>