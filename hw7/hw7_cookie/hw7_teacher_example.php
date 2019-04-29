<?php
header("Content-Type:text/html; charset=utf-8");
if(isset($_GET["question"]) && ($_GET["question"]!="")){
	if(isset($_GET["answer1"]) && ($_GET["answer1"]!="")){
		setcookie("answer1",$_GET["answer1"]);
		header("Location: hw1.php?step=2");
	}
	if(isset($_GET["answer2"]) && ($_GET["answer2"]!="")){
		setcookie("answer2",$_GET["answer2"]);
		header("Location: hw1.php?result=ture");
	}
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>線上快速測驗</title>
</head>
<body>
<p>線上快速測驗</p>
<?php if(($_SERVER['QUERY_STRING']=='')||isset($_GET["restart"])){?>
<p><a href="hw1.php?step=1">準備好了嗎?按此撐10秒!</a></p>
<?php }?>
<?php if(isset($_GET["step"])&&($_GET["step"]==1)){?>
<form id="form1" name="form1" method="get" action="">
  <p>請問誰會鎖血?</p>
  <p><input name="answer1" type="radio" id="radio" value="1" checked="checked"/>
	亞絲娜<br />
	<input  type="radio" name="answer1" id="radio2" value="2" />
	絕劍<br />
	<input  type="radio" name="answer1" id="radio3" value="3" />
	74層boss<br />
	<input  type="radio" name="answer1" id="radio4" value="4" />
	茅場晶彥</p>
	<p>
		<input type="submit" id="button" value="next" />
		<input name="question" type="hidden" id="question" value="ture" />
	</p>
</form>
<?php }else if (isset($_GET["step"]) &&($_GET["step"]==2)) {?>
<form id="form2" name="form2" method="get" action="">
	<p>2.請問撐完10秒桐人使出幾連擊?</p>
	 <p><input name="answer2" type="radio" id="radio5" value="1" checked="checked"/>
	14<br />
	<input  type="radio" name="answer2" id="radio6" value="2" />
	15<br />
	<input  type="radio" name="answer2" id="radio7" value="3" />
	16<br />
	<input  type="radio" name="answer2" id="radio8" value="4" />
	17</p>
	<p>
		<input type="submit" id="button2" value="Finish" />
		<input name="question" type="hidden" id="question" value="ture" />
	</p>
</form>
<?php }?>
<p>
	<?php if(isset($_GET["result"]) &&($_GET["result"]=="ture")) { ?>
</p>
<p>作答結果:</p>
<p>請問誰會鎖血?</p>
<?php
if(isset($_COOKIE["answer1"])&&($_COOKIE["answer1"]!="")){
	switch($_COOKIE["answer1"]){
	case "1":
		echo "<p>亞絲娜</p>";
		echo "<font color=\"red\"><p>答錯了! 滾回去重修!!!</p></font>";
		echo "<p>正確答案是 茅場晶彥</p>";
		break;
	case "2":
		echo "<p>絕劍</p>";
		echo "<font color=\"red\"><p>答錯了! 滾回去重修!!!</p></font>";
		echo "<p>正確答案是 茅場晶彥</p>";
		break;
	case "3":
		echo "<p>74層boss</p>";
		echo "<font color=\"red\"><p>答錯了! 滾回去重修!!!</p></font>";
		echo "<p>正確答案是 茅場晶彥</p>";
		break;
	case "4":
		echo "<p>茅場晶彥</p>";
		echo "<font color=\"green\"><p>答對!!!</p></font>";
		break;
	}
 } ?>
<p>請問撐完10秒桐人使出幾連擊?</p>
<?php
	if(isset($_COOKIE["answer2"])&&($_COOKIE["answer2"]!="")){
	switch($_COOKIE["answer2"]){
	case "1":
		echo "<p>14</p>";
		echo "<font color=\"red\"><p>答錯了! 滾回去重修!!!</p></font>";
		echo "<p>正確答案是 16 連擊</p>";
		break;
	case "2":
		echo "<p>15</p>";
		echo "<font color=\"red\"><p>答錯了! 滾回去重修!!!</p></font>";
		echo "<p>正確答案是 16 連擊</p>";
		break;
	case "3":
		echo "<p>16</p>";
			echo "<font color=\"green\"><p>答對!!!</p></font>";
		break;
	case "4":
		echo "<p>17</p>";
		echo "<font color=\"red\"><p>答錯了! 滾回去重修!!!</p></font>";
		echo "<p>正確答案是 16 連擊</p>";
		break;
	}
 }  ?>
 <a href='?restart'>重來一次</a>
	<?php } ?>