<!DOCTYPE html>
<html>
<head>
	<title>Gallary | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/gallary.php">Back</a> |
		<a href="../controller/assets/showGallary.php">See gallery</a>
		
	</center>
</body>
</html>
<?php
	  $filename = $_FILES['image']['name'];
	  $filesize = $_FILES['image']['size'];
	  $filetemp = $_FILES['image']['tmp_name'];
	  $ext = explode('.', $filename);
	  $location = 'assets/'.$filename;
	  if(move_uploaded_file($filetemp, $location)){
		echo "<img src=".$location." height=200 width=300 /><br>";
	  }else{
		echo "image upload error.<br>";

     
}