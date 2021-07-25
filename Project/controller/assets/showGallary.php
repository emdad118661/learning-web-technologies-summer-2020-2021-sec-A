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
     	echo "<img src='$filename' alt='$filename' width='200' height='100'/>";
     }

     foreach(glob("*.jpg") as $filename){
     	echo "<p>$filename</p><br>";
     	echo "<img src='$filename' alt='$filename' width='200' height='100'/>";
     }
     echo "<br>";
?>