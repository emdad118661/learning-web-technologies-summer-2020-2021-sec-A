<?php
$server= "localhost";
$username= "root";
$password= "";
$database= " login_registration";

$conn = mysql_connect($server, $username, $password, $database);

if(!$conn){
	die("<script>alert('Connection Failed!!')</script>");
}
?>