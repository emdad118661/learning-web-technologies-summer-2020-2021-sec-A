<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			
			$file = fopen('users.txt', 'r');
			$data = fread($file, filesize('users.txt'));
			$user = explode('|', $data);


			if(trim($user[0]) == $username && trim($user[1]) == $password){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../view/home.php');
			}else{
				echo 'invalid username/password';
			}

		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>