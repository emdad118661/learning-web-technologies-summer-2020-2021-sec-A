<?php
    
    mysql_connect("localhost","root","");
    mysql_select_db("college");
	
	$email = $_POST['email'];

	/*if($email == null){
		echo 'invalid data';
	}else{
		echo "Valid data: ".$email;		
	}*/
	$strSql = "INSERT INTO Emails VALUES(null, '$email')";

	if(mysql_query($strSql)){
		echo "Subscribed successfully Inserted....!!!";
	}
	else{
		echo mysql_error();
	}

?>