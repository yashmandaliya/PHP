<?php
include "Config.php";
echo $id=$_POST['id'];
echo $username=$_POST['username'];
 echo $password=$_POST['password'];
$update="UPDATE `yash_table1` SET `username`='$username',`password`='$password' WHERE `id`='$id'";
$result=mysqli_query($connect,$update);
if($result)
{
    header("location:Select.php");
}
?>

