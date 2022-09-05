<?php
include "Config.php";
$id= $_GET['id'];
$sql="SELECT * FROM `yash_table1` WHERE `id`='$id'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
print_r($row);
?>
<html>
<head>
</head>  
<body>
<form action="Update.php" method="post">
<table border="2px">
<tr>
   <th>Username:</th>
   <td>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
   <input type="text" value="<?php echo $row['username'];?>" name="username" id="username" placeholder="Enter Username"></td>
</tr>
<tr>
   <th>Password:</th>
   <td><input type="password" value="<?php echo $row['password'];?>" name="password" id="password" placeholder="Enter Username"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table>    
</form>
</body>
</html>
