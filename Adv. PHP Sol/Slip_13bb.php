<?php
$name=$_POST['name'];
$age=$_POST['age'];
$nat=$_POST['nat'];
echo"Voter Name : <b>$name.</b>";
echo"<br>Voter Age : <b>$age.</b>";
error_reporting(0);
echo"<br>Voter Nationality : <b>$nat.</b>";
?>