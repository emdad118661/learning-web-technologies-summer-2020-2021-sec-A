<!DOCTYPE html>
<html>
<head>
	<title>Account Verification | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/accVerification.php">Back</a>
		
	</center>
</body>
</html>
                    <?php
	                  session_start();

	                  if(isset($_POST['submit'])){

		              $code= $_POST['code'];
		

		              if($code != ''){
			          $user =['code'=>$code];
			          $_SESSION['user'] = $user;
			                echo "Yes!! your account has been verified";
		              }else{
			                echo "null value found...";
		              }
	                  }else{
		                    echo "invalid request...";
	                  }

                    ?>

