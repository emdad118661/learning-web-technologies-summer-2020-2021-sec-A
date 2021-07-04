<!DOCTYPE html>
<html>
<head>
     <title>Research Result | Leaf</title>
</head>
<body>

</body>
</html>
<?php

     echo "<h1 align='center'><u>All research result</u></h1><br>";
     foreach(glob("*.pdf") as $researchfilename){
     	
     	echo "<a href=".$researchfilename.">$researchfilename</a><br><br>";
          
     }

     foreach(glob("*.docx") as $researchfilename){
     	
     	echo "<a href=".$researchfilename.">$researchfilename</a><br><br>";
     }
     echo "<br>";
?>