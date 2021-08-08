<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<table border="1" width="100%">
		<tr>
			<td>
				<img src="Companylogo.png" alt="logo" width="100px" height="50px">
			</td>
			
			<td align="right">
				<a href="logout.php">Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td>
				<h4>Account</h4><br>
                <ul>
                    <li>
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="EmpList.html">Manage Employee List</a>
                    </li>
                    <li>
                        <a href="searchIndex.php">Search</a>
                    </li>
                    
                </ul>
			</td>
            <td align="center"><h1>This is the index page</h1>
            <br> Hello, <?php echo $user_data['user_name']; ?><br>
                                
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				18-39032-3@student.aiub.edu
			</td>
		</tr>			
	</table>

	
	

	<br>
	
</body>
</html>