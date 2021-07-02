
 <?php

     echo "<h3>Gallary</h3>";
     foreach(glob("*.png") as $filename){
     	echo "<p>$filename</p><br>";
     	echo "<img src='$filename' alt='$filename'/>";
     }

     foreach(glob("*.jpg") as $filename){
     	echo "<p>$filename</p><br>";
     	echo "<img src='$filename' alt='$filename'/>";
     }
     echo "<br>";
?>