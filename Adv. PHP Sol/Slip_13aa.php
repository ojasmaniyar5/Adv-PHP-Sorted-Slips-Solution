<?php

$name=$_POST['name'];
$id=$_POST['id'];
$desig=$_POST['desig'];
$exp=$_POST['exp'];

echo"Employee Name : ".$name;
echo"<br>Employee ID : ".$id;
error_reporting(0);
echo"<br>Employee Designation : ".$desig;
echo"<br>Employee Experience : ".$exp;
?>