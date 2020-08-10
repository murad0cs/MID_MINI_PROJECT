<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'user');
	$result = mysqli_query($conn, 'select * from user');

?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<h1>Users</h1>

	<table border=1>
        <tr>
            <td colspan="4" align="center"> Users</td>
        </tr>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>User Type</td>
			
		</tr>

		<?php  while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $data['id'] ?><admin
			<td><?php echo $data['Name'] ?></td>
			<td><?php echo $data['Email'] ?></td>
			<td><?php echo $data['User_Type'] ?></td>
			
		</tr>
         

		<?php } ?>
        <tr>
            <td colspan="4" align="center"><a href="admin.php"> Go Home</a> </td>
        </tr>

	</table>
</body>
</html>