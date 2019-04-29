<?php
header("Content-Type:text/html; charset=big5");
require("php_class11.php");
class AdultCalc extends People{	
	public function calcWeight(){
		if($this->int_Age<=16){
			return parent::calcWeight();
		}else{
			if($this->str_Sex=="�k"){
				//�k�ʼз��魫 �ס]������80�^�� 0.7
				return round(($this->int_Height-80)*0.7);
			}else{
				//�k�ʼз��魫 �ס]������70�^�� 0.6
				return round(($this->int_Height-70)*0.6 );
			}
		}
	}
}
$boyObject = new AdultCalc;
$boyObject->setData("David","�k",24,181,89);
echo $boyObject->str_Name." ���з��魫���G";
echo $boyObject->calcWeight();
echo "<br />";
$girlObject = new AdultCalc;
$girlObject->setData("Lily","�k",22,162,51);
echo $girlObject->str_Name." ���з��魫���G";
echo $girlObject->calcWeight();
echo "<br />";
$childObject = new AdultCalc;
$childObject->setData("Perry","�k",14,158,40);
echo $childObject->str_Name." ���з��魫���G";
echo $childObject->calcWeight();
?>