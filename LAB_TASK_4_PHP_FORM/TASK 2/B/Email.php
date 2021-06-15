<?php
	
	$email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];
		if($email == ""){
			echo "invalid email!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" >

		Username: <input type="text" name="email" value="<?php echo $email; ?>" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>