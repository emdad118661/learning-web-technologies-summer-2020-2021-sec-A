<!DOCTYPE html>
<html>
<head>
	<title>Gallary | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/uploadResearch.php">Back</a>
		
	</center>
</body>
</html>
<?php
	  $researchfilename = $_FILES['file']['name'];
	  $researchfilesize = $_FILES['file']['size'];
	  $researchfiletemp = $_FILES['file']['tmp_name'];
	  $researchext = explode('.', $researchfilename);
	  $researchlocation = 'files/'.time().'.'.$researchext[1];
	  if(move_uploaded_file($researchfiletemp, $researchlocation)){
		echo "<a href=".$researchlocation.">Uploaded file</a>";
	  }else{
		echo "image upload error";
     
}