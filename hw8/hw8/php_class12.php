<?php
header("Content-Type:text/html; charset=big5");
require("php_class11.php");
$myObject = new People;
$myObject->setData("Perry","�k",15,170,68);
echo $myObject->str_Name." ���з��魫���G";
echo $myObject->calcWeight();
?>