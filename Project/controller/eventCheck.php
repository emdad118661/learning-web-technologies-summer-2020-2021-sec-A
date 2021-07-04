<!DOCTYPE html>
<html>
<head>
	<title>Events | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/events.php">Back</a>
		
	</center>
</body>
</html>

<?php

	$date = $_POST["date"];
	$event = $_POST["event"];
	$submit = $_POST["submit"];

	if($submit){
		#write down comments#

		$write = fopen("event.txt", "a+");
		fwrite($write, "<u><b> $date</b></u><br>$event<br>");
		fclose($write);
		#display com#

		$read = fopen("event.txt", "r");
		echo "Event:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}

		fclose($read);

	}
	else{
		#display com#

		$read = fopen("event.txt", "r");
		echo "Event:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}
		fclose($read);
	}
?>