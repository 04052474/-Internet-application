<?php
header("Content-Type:text/html; charset=big5");
require("php_class11.php");
class AdultCalc extends People{
	//�k�ʼз��魫 �ס]������80�^�� 0.7
	public function calcAdultWeight(){
			return round(($this->int_Height-80)*0.7);
	}
}
$myObject = new AdultCalc;
$myObject->setData("Perry","�k",20,170,68);
echo $myObject->str_Name." ���з��魫���G";
echo $myObject->calcAdultWeight();
?>