
<body>
<form method="POST">
	Enter 1st Sting : <br>
	<input type="text" name="s1"><br><br>
	Enter 2nd String : <br>
	<input type="text" name="s2"><br><br>
	<input type="submit" name="submit">
</form>
</body>
<?php
error_reporting(0);
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3="1st String : $s1 || 2nd String : $s2.";
echo"<b>Both Stings are same = $s3</b>";
?>