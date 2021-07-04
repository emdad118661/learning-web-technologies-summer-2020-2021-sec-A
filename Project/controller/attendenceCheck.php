<!DOCTYPE html>
<html>
<head>
	<title>Attendence | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/attendence.php">Back</a>
		
	</center>
</body>
</html>

<?php

	$date = $_POST["date"];
	$name = $_POST["name"];
	$submit = $_POST["submit"];

	if($submit){
		#write down comments#

		$write = fopen("attendence.txt", "a+");
		fwrite($write, "<u><b> $date</b></u><br>$name<br>");
		fclose($write);
		#display com#

		$read = fopen("attendence.txt", "r");
		echo "Attendence:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}

		fclose($read);

	}
	else{
		#display com#

		$read = fopen("attendence.txt", "r");
		echo "Attendence:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}
		fclose($read);
	}
?>