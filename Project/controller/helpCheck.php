<!DOCTYPE html>
<html>
<head>
	<title>Help & Suggestion | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/Help.php">Back</a>
		
	</center>
</body>
</html>

<?php

	$issue = $_POST["issue"];
	$submit = $_POST["submit"];

	if($submit){

		$write = fopen("help.txt", "a+");
		fwrite($write, "<u><b> $issue</b></u><br>");
		fclose($write);
		#display com#

		$read = fopen("help.txt", "r");
		echo "Your Issues:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}

		fclose($read);

	}
	else{

		$read = fopen("help.txt", "r");
		echo "Your Issues:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}
		fclose($read);
	}
?>