 <?php

     echo "<h1 align='center'><u>Gallery</u></h1><br>";
     foreach(glob("*.mp4") as $coursevideoname){
     	echo "<p>$coursevideoname</p><br>";
     	echo "<video width=320 height=240 controls>
              <source src=".$coursevideoname." type=video/mp4>
              </video>";
     }

     
?>