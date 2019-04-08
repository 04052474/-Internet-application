<?php
	$mid2=$_GET['mid2'];
	$target1="01234567";
	$target2="39416603";
	$target3="84553565";
	$x=0;
	if(strlen($mid2)==8)
	{	
		echo "輸入:".$mid2."</br>";
		$mid2arr=[];
		$target1arr=[];
		$target2arr=[];
		$target3arr=[];
		for($i=5;$i>=0;$i--)
		{
			$mid2arr[$x]=substr($mid2,$i);
			$x=$x+1;
		}
		$x=0;
		for($i=5;$i>=0;$i--)
		{
			$target1arr[$x]=substr($target1,$i);
			$x=$x+1;
		}
		$x=0;
		for($i=5;$i>=0;$i--)
		{
			$target2arr[$x]=substr($target2,$i);
			$x=$x+1;
		}
		$x=0;
		for($i=5;$i>=0;$i--)
		{
			$target3arr[$x]=substr($target3,$i);
			$x=$x+1;
		}
		$x=0;
		$count=0;
		$money=0;
		for($i=0;$i<6;$i++)
		{
			if(strcmp($mid2arr[$i],$target1arr[$i])==0)
			{	
				$get=$mid2arr[$i];
				$count=$count+1;
			}
			if(strcmp($mid2arr[$i],$target2arr[$i])==0)
			{	
				$get=$mid2arr[$i];
				$count=$count+1;
			}
			if(strcmp($mid2arr[$i],$target3arr[$i])==0)
			{	
				$get=$mid2arr[$i];
				$count=$count+1;
			}
		}
		if($count==0)
		{
			echo "沒有中獎";
		}
		if($count==1)
		{
			$money=200;
			echo "中獎號碼 "."$get"."</br>";
			echo "獎金".$money."元";
		}
		if($count==2)
		{
			$money=1000;
			echo "中獎號碼 "."$get"."</br>";
			echo "獎金".$money."元";
		}
		if($count==3)
		{
			$money=4000;
			echo "中獎號碼 "."$get"."</br>";
			echo "獎金".$money."元";
		}
		if($count==4)
		{
			$money=10000;
			echo "中獎號碼 "."$get"."</br>";
			echo "獎金".$money."元";
		}
		if($count==5)
		{
			$money=40000;
			echo "中獎號碼 "."$get"."</br>";
			echo "獎金".$money."元";
		}
		if($count==6)
		{
			$money=200000;
			echo "中獎號碼 "."$get"."</br>";
			echo "獎金".$money."元";
		}
	}
	else{
		echo "請重新輸入8位發票號!!";
	}
?>