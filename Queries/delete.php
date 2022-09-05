<?php
include "Config.php";
$id = $_REQUEST['id'];
$delete="DELETE FROM `yash_table1` WHERE `id`='$id'";
$result =mysqli_query($connect,$delete);
if($result)
{
	header("location:Select.php");
}
?>

