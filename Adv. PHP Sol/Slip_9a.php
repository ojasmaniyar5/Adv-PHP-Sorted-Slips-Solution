<!DOCTYPE html>
<html>
<body>
<b>Calculator</b><br><br><br>
<form action="" method="POST">
	Enter Value 1st :
	<input type="text" name="n1" required><br><br>
	Enter Value 2nd :
	<input type="text" name="n2" required><br><br>
	<input type="submit" name="submit" value="submit"><br><br>
</form>
</body>
</html>
<?php
error_reporting(0);
$value1=$_POST['n1'];
$value2=$_POST['n2'];

$a=$value1+$value2;
$b=$value1-$value2;
$c=$value1*$value2;
$d=$value1/$value2;

echo "<b>Addition</b> :".$a;
echo "<br><b>Substraction</b>  :".$b;
echo "<br><b>Multiplication</b>  :".$c;
echo "<br><b>Division</b> :".$d;
?>