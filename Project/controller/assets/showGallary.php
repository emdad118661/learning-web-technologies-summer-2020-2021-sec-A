 <<!DOCTYPE html>
 <html>
 <head>
     <title>Gallery | Leaf</title>
 </head>
 <body>
 
 </body>
 </html>
 <?php

     echo "<h1 align='center'><u>Gallery</u></h1><br>";
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