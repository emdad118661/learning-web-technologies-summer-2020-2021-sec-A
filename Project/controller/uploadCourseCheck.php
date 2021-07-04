<!DOCTYPE html>
<html>
<head>
	<title>Upload Course | Leaf</title>
</head>
<body>
	<center>
		<img src="Companylogo.png" height="100px" width="200px"><br>
		<a href="../view/login.php">Logout</a> |
		<a href="../view/uploadCourses.php">Back</a>
		
	</center>
</body>
</html>
<?php
	  $coursevideoname = $_FILES['video']['name'];
	  $coursevideosize = $_FILES['video']['size'];
	  $coursevideotemp = $_FILES['video']['tmp_name'];
	  $coursext = explode('.', $coursevideoname);
	  $courselocation = 'videos/'.$coursevideoname;
	  if(move_uploaded_file($coursevideotemp, $courselocation)){
		echo "<video width=320 height=240 controls>
              <source src=".$courselocation." type=video/mp4>
              </video>";
	  }else{
		echo "image upload error";
     
}
?>