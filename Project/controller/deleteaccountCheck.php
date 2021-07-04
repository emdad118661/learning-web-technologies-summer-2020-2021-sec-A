<!DOCTYPE html>
<html>
<head>
	<title>Index | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Login</a> |
		<a href="../view/signup.php">Signup</a>
		
	</center>
</body>
</html>
<?php
$handle = fopen("users.txt", "w+");
fwrite($handle , '||');
fclose($handle);
echo "Your acount has been deleted";
?>
