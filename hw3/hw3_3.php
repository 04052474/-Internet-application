<?php
	function calculate($year){
		$want=[];
		for($x=1;$x<=$year;$x++){
			if($x%4==0 && $x%100!=0 || $x%400==0)
				array_push($want,$x);
		}
		return $want;
	}
	
	$year=$_GET[year];
	//印出加排序
	echo "<div align='center'>";
		$want=calculate($year);
		echo "<table border='1'>";
			echo "<tr>";
			$td=0;
			for($i=0;$i<count($want);$i++){
				echo "<td>".$want[$i];
				$td=$td+1;
				if ($td%10==0)
					echo "<tr>";
			}
		echo "</table>";
	echo "</div>";
?>