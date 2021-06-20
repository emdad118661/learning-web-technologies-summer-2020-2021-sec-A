<html>

<head>
	<title>Profile Picture</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="Xcompany.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				Loggedin as | <a href="login.html"> Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
                <ul>
                    <li>
                        <a href="DashBoard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="viewProfile.html">View Profile</a>
                    </li>
                    <li>
                        <a href="EditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="ProfilePic.php">Change Profile Picture</a>
                    </li>
                    <li>
                        <a href="ChangePass.php">Change Password</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
			</td>
            <td>
                <form method="" action="">
                    <fieldset style="width:90%">
                        <legend>PROFILE PICTURE</legend>
                        <table>
                            <tr>
                                <td>
                                    <img src="user.png" height="100px" width="100">
                                </td>
                            </tr>
            
                            <tr>
                                <td>
                                    <input type="file" name="image" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td> 
                                    <input type="submit" name="submit" value="Submit">
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