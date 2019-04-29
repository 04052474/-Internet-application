<?php
	class CTriangle{
		public $edge1;
		public $edge2;
		public $edge3;
		
		function __construct(){
			$this->edge1=3;
			$this->edge2=4;
			$this->edge3=5;
		}
		
		function setData($a,$b,$c){
			$isornot=$this->isLegal($a,$b,$c);
			if($isornot)
			{
				$this->edge1=$a;
				$this->edge2=$b;
				$this->edge3=$c;
			}
		}
		
		function isLegal($a,$b,$c){
			if($a<=$b && $b<=$c){
				if(($a+$b>$c) && ($c-$b<$a))
						return true;
				else
					return false;
			}
			return false;
		}
		
		function showData($i){
			if($this->isRightAngled())
			{
				echo "<hr>"."第".$i."個三角形   "."邊長 edge1 : ".$this->edge1.", edge2 : ".$this->edge2.", edge3 : ".$this->edge3."   為直角三角形"."<hr>";
			}
			else
				echo "<hr>"."第".$i."個三角形   "."邊長 edge1 : ".$this->edge1.", edge2 : ".$this->edge2.", edge3 : ".$this->edge3."   不是直角三角形"."<hr>";
		}
		
		function isRightAngled(){
			$edge11=$this->edge1*$this->edge1;
			$edge22=$this->edge2*$this->edge2;
			$edge33=$this->edge3*$this->edge3;
			
			if(($edge11+$edge22)==$edge33)
				return true;
		}
		
	}
	$want=[];
	for($i=0;$i<10;$i++)
	{
		$want[$i]=new CTriangle;
		$want[$i]->setData(rand(5,29),rand(9,49),rand(28,89));
		$want[$i]->showData($i);
	}
?>