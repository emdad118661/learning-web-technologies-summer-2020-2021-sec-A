<!DOCTYPE html>
<html>
<head>
	<title>Article | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/article.php">Back</a>
		
	</center>
</body>
</html>

<?php

	$headline = $_POST["headline"];
	$answer = $_POST["answer"];
	$post = $_POST["post"];

	if($post){
		#write down comments#

		$write = fopen("article.txt", "a+");
		fwrite($write, "<u><b> $headline</b></u><br>$answer<br>");
		fclose($write);
		#display com#

		$read = fopen("article.txt", "r+t");
		echo "Your Articles:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}

		fclose($read);

	}
	else{
		#display com#

		$read = fopen("article.txt", "r+t");
		echo "Your Articles:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}
		fclose($read);
	}
?>