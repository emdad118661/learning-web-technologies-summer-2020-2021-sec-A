<?php
	session_start();

	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password']
		$ConfirmPassword= $_POST['password']
		$gender= $_POST['gender'];
		$DOB= $_POST['Date of Birth'];


		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=>$password, 'email'=>$email, 'type'=>$type];
			$_SESSION['user'] = $user;
			header('location: ../view/login.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>