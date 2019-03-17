<?php
	function calculate($number){
		$want=[];
		for($x=1;$x<=$number;$x++){
			$z=0;
			for($y=1;$y<=$number;$y++){
				if($x%$y==0)
					$z=$z+1;
			}
			if($z==2)
				array_push($want,$x);
		}
		return $want;
	}
	
	$number=$_GET[number];
	$want=[];
	//印出加排序
	echo "<div align='center'>";
		$want=calculate($number);
		echo "<table border='1'>";
			echo "<tr>";
			$td=0;
			for($i=0;$i<count($want);$i++){
				echo "<td>".$want[$i];
				$td=$td+1;
				if ($td%5==0)
					echo "<tr>";
			}
		echo "</table>";
	echo "</div>";
?>