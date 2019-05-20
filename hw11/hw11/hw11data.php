<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysql_select_db("bookstore");
	if (!$seldb) die("資料庫選擇失敗！");
	
	
	$sql_query="SELECT * FROM `books`";
	$result=mysql_query($sql_query);
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>書單資料管理系統</title>
</head>
<body>
<h1 align="center">書單資料管理系統</h1>
<p align="center">目前資料筆數：<?php echo mysql_num_rows($result); ?>，<a href="hw11add.php">新增書單資料</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
	<th>序號</th>
    <th>書名</th>
    <th>作者</th>
    <th>出版商</th>
    <th>出版日期</th>
    <th>售價</th>
  </tr>
  <!-- 資料內容 -->
<?php
	while($row_result=mysql_fetch_assoc($result))
	{
		echo "<tr><td>".$row_result["cID"];
		echo "<td>".$row_result["cBookName"];
		echo "<td>".$row_result["cAuthor"];
		echo "<td>".$row_result["cPublisher"];
		echo "<td>".$row_result["cPublishDate"];
		echo "<td>".$row_result["cPrice"];
		echo "<td>"."<a href='hw11update.php?id=$row_result[cID]'>"."修改資料</a>";
		echo "<td>"."<a href='hw11delete.php?id=$row_result[cID]'>"."刪除資料</a>";
	}
?>
</table>
</body>
</html>