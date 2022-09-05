<?php
include "Config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$insert="INSERT INTO `yash_table1`(`username`,`password`)VALUES('$username','$password')";

$result=mysqli_query($connect,$insert);
if($result==TRUE)
{
	echo "<script>alert('Successfullly')</script>";
}

?>

