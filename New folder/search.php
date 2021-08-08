<?php
     $data = "k";

     if (isset($_GET['q'])){
     	$data = $_GET['q'];
     }

    $db = new mysql('localhost','root','','ajax');

    if($db->connect_error){
    	exit('db not found');
    }

    $x = "select * from user where name like '$data%' limit 1";
    $y = $db->query($x);
    
    if($y){
    	$z = $y->fetch_assoc();
    	echo "<h1>".$z['name']."</h1>"
    }
?>