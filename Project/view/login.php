<!DOCTYPE html>
<html>
<head>
	<title>Login | Leaf</title>
</head>
<body>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="signup.php">Signin</a><br>
		<h3>Login Page</h3>
		<form method="post" action="../controller/loginCheck.php">
			<fieldset>
				<legend>Login</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>