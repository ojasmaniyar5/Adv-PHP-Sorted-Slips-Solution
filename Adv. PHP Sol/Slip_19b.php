<body>
<form method="POST">
	Select all option of this : Book Name || Book Author || Book Year || Book Price  : <br><br>
	<input type="checkbox" name="bname" value="Book Name">Book Name. <br>
	<input type="checkbox" name="bauthor" value="Book Author">Book Author. <br>
	<input type="checkbox" name="byear" value="Book Year">Book Year. <br>
	<input type="checkbox" name="bprice" value="Book Price">Book Price. <br><br>
	<input type="submit" name="submit">
</form>
</body>
<?php
	error_reporting(0);
	$bname=$_POST['bname'];
	$bauthor=$_POST['bauthor'];
	$byear=$_POST['byear'];
	$bprice=$_POST['bprice'];
	echo"<br> Rich Dad Poor Dad is ".$bname;
	echo"<br> Who is Author of book : $bauthor is Robert Kiyosaki.";
	echo"<br> What is Publisher Year of book : $byear is 1997.";
	echo"<br> What is Price of book : $byear is 7,700.";

?>