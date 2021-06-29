<?php

	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];

		if($msg == 'null'){
			echo "null value found...";
		}

		if($msg == 'password_error'){
			echo "password must be at least 5 char...";
		}		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<h3>Signup | Leaf</h3>
<div>
	<form method="post" action="../controller/signupCheck.php">
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Signup"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>