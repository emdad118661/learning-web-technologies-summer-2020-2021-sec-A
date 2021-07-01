<!DOCTYPE html>
<html>
<head>
	<title>QnA | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/qna.php">Back</a>
		
	</center>
</body>
</html>

<?php

	$question = $_POST["question"];
	$answer = $_POST["answer"];
	$post = $_POST["post"];

	if($post){
		#write down comments#

		$write = fopen("qna.txt", "a+");
		fwrite($write, "<u><b> $question</b></u><br>$answer<br>");
		fclose($write);
		#display com#

		$read = fopen("qna.txt", "r");
		echo "Question & Answers:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}

		fclose($read);

	}
	else{
		#display com#

		$read = fopen("qna.txt", "r+t");
		echo "Questions & Answers:<br>";

		while(!feof($read)){
			echo fread($read, 1024);
		}
		fclose($read);
	}
?>