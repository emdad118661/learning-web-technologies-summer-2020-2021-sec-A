<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
		<h3>Login Page</h3>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="Xcompany.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="home.html">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
			</td>
		</tr>
		<tr style="height:200px;">
			<td colspan="2" align="center">
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
						            <td> <input type="checkbox" name="iteam[]">Remember Me</td>
					            </tr>
					            <tr>
						            <td></td>
						            <td><input type="submit" name="submit" value="Submit">
							        <a href="forgetPass.html">Forget Password</a>
						            </td>
					            </tr>
		                    </table>
			        </fieldset>
		       </form>
	        </td>
        </tr>
        <tr>
			<td colspan="2" align="center">
				Copyright @ 2017
			</td>
		</tr>
	</table>	
</body>
</html>