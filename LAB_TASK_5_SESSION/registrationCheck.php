<?php
	session_start();

	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password']
		$ConfirmPassword= $_POST['repassword']
		$gender= $_POST['genderinput'];
		$DOB= $_POST['dob'];


		if($name != '' && $username != '' && $password != '' && $email != '' && $ConfirmPassword != '' && $gender != '' && $DOB != '')
		{
			$user =['name'=>$name, 'email'=>$email, 'username'=> $username, 'password'=>$password, 'repassword'=>$ConfirmPassword, 'genderinput'=>$gender, 'dob'=>$DOB];
			$_SESSION['user'] = $user;
			 if($password == $ConfirmPassword)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                //echo "Success...";
                header('location: home.html');
                
            }
            else
            {
                echo "Password and Comfirm Password is not same...";
            }
			
		}
		else
		{
			echo "null value found...";
		}
	}
	else
	{
		echo "invalid request...";
	}

?>