<body>
<form method="GET">
	Enter 1st Number : <br>
	<input type="number" name="n1" required><br><br>
	Enter 2nd Number : <br>
	<input type="number" name="n2" required><br><br>
	<input type="submit" name="submit">
</form>
</body>
<?php
error_reporting(0);
$n1=$_GET['n1'];
$n2=$_GET['n2'];

$n3=$n1+$n2;
echo"Sum of the digit of that two number is $n3";
?>