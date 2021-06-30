<!DOCTYPE html>
<html>
<head>
	<title>Gallary | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/gallary.php">Back</a>
		
	</center>
</body>
</html>
<?php
	  $filename = $_FILES['image']['name'];
	  $filesize = $_FILES['image']['size'];
	  $filetemp = $_FILES['image']['tmp_name'];
	  $ext = explode('.', $filename);
	  $location = 'assets/'.time().'.'.$ext[1];
	  if(move_uploaded_file($filetemp, $location)){
		echo "<img src=".$location." height=200 width=300 />";
	  }else{
		echo "image upload error";
     
}