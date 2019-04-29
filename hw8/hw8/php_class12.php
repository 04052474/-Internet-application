<?php
header("Content-Type:text/html; charset=big5");
require("php_class11.php");
$myObject = new People;
$myObject->setData("Perry","男",15,170,68);
echo $myObject->str_Name." 的標準體重為：";
echo $myObject->calcWeight();
?>