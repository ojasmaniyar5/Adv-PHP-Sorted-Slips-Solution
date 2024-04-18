<body>
<form method="POST">
	Select list of subject : <br><br>
	<input type="checkbox" name="php" value="PHP">PHP. <br>
	<input type="checkbox" name="cpp" value="CPP">CPP. <br>
	<input type="checkbox" name="nw" value="NW">NW. <br>
	<input type="checkbox" name="os" value="OS">OS. <br><br>
	<input type="submit" name="submit">
</form>
</body>
<?php
	error_reporting(0);
	$php=$_POST['php'];
	$cpp=$_POST['cpp'];
	$nw=$_POST['nw'];
	$os=$_POST['os'];
	echo"<br> $php <br>";
	echo"$cpp <br>";
	echo"$nw <br>";
	echo"$os";
?>