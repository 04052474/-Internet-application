<?php
	header("Content-Type:text/html; charset=utf-8");
	if(isset($_GET["q1"])){
		setcookie("choose1",$_GET["q1"],time()+3600);
		header("Location: hw1.php?step=2");
	}
	if(isset($_GET["q2"])){
		setcookie("choose2",$_GET["q2"],time()+3600);
		header("Location: hw1.php?step=3");
	}
	if(isset($_GET["restart"])){
		setcookie("choose2","",time()-3600);
		setcookie("choose2","",time()-3600);
		header("Location: hw1.php");
	}
?>
<html>
	<head>
		<title>
		cookie hw1 線上測驗
		</title>
	</head>
	<body>
	<?php
	if(!isset($_GET["step"])){
	echo "線上測驗"."</p>";
	echo "<a href='?step=1'>準備好了嗎?請按此開始測驗!</a>";
	}
	?>
	</body>
</html>
<?php
	if(isset($_GET["step"])&&$_GET["step"]==1){ ?>
	<html>
	線上測驗:</p>
	1.我的身高?(公分)</p>
	<form action=" hw1.php?step=1">
	<input type="radio" name="q1" value="1" checked="true">180</br>
	<input type="radio" name="q1" value="2">170</br>
	<input type="radio" name="q1" value="3">190</br>
	<input type="radio" name="q1" value="4">200</br>
	<input type="submit" value="下一步"></br>
	</form>
	</html>
<?php } ?>

<?php if(isset($_GET["step"])&&$_GET["step"]==2) {?>
	2.現在就讀大幾?</p>
	<form action=" hw1.php?step=2">
	<input type="radio" name="q2" value="1" checked="true">大一</br>
	<input type="radio" name="q2" value="2">大二</br>
	<input type="radio" name="q2" value="3">大三</br>
	<input type="radio" name="q2" value="4">大四</br>
	<input type="submit" value="下一步"></br>
	</form>
	</html>
<?php } ?>

<?php if(isset($_GET["step"])&&$_GET["step"]==3) {?>
	線上測驗:</p>
	作答結果:</p>
	1.我的身高?(公分)</p>
	您選的答案是:
	<?php
	switch($_COOKIE["choose1"]){	
	case "1":
		echo "180"."</br>";
		echo "答錯囉!!"."</br>";
		echo "正確答案是170";
		break;
	case "2":
		echo "170"."</br>";
		echo "答對!!";
		break;
	case "3":
		echo "190"."</br>";
		echo "答錯囉!!"."</br>";
		echo "正確答案是170";
		break;
	case "4":
		echo "200"."</br>";
		echo "答錯囉!!"."</br>";
		echo "正確答案是170";
		break;
	}
	?>
	<hr>
	2.現在就讀大幾?</p>
	您選的答案是:
	<?php
	switch($_COOKIE["choose2"]){	
	case "1":
		echo "大一"."</br>";
		echo "答錯囉!!"."</br>";
		echo "正確答案是 大三";
		break;
	case "2":
		echo "大二"."</br>";
		echo "答錯囉!!"."</br>";
		echo "正確答案是 大三";
		break;
	case "3":
		echo "大三"."</br>";
		echo "答對!!";
		break;
	case "4":
		echo "大四"."</br>";
		echo "答錯囉!!"."</br>";
		echo "正確答案是 大三";
		break;
	}
	?>
	<a href='?restart'>重來一次</a>
<?php } ?>
