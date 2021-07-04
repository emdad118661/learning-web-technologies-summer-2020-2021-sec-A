<!DOCTYPE html>
<html>
<head>
	<title>Gallary | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Login</a> |
		<a href="../view/signup.php">Back</a> 
		
	</center>
</body>
</html>
<?php
    
	session_start();

	if(isset($_POST['submit'])){

		$username= $_REQUEST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];

		if($username != '' && $password != '' && $email != ''){
			
			if(strlen($password) > 5){
				$user = $username."|".$password."|".$email;
				$file = fopen('users.txt', 'w');
				fwrite($file, $user);
				fclose($file);
				header('location: ../view/login.php');
			}else{
				header('location: ../view/signup.php?msg=password_error');
			}
		}else{
			header('location: ../view/signup.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}
?>