<?php
include "Config.php";
$select= "SELECT * FROM `yash_table1` ";

$yash=mysqli_query($connect,$select);
?>
<html>
<body>
<table align="center" border="1">
<tr>
	<th>Id</th>
	<th>Username</th>
	<th>Password</th>
	<th>Delete</th>
	<th>Update</th>
</tr>
<?php
while($data=mysqli_fetch_assoc($yash))
{?>
<tr>
	<td><?php echo $data['id'];?></td>
	<td><?php echo $data['username'];?></td>
	<td><?php echo $data['password'];?></td>
	<td><a href="Delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
	<td><a href="Detail2.php?id=<?php echo $data['id'];?>">Update</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
