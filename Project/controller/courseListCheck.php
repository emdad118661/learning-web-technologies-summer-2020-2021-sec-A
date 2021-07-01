<!DOCTYPE html>
<html>
<head>
    <title>Course List | Leaf</title>
</head>
<body>
    <center>
        <img src="Companylogo.png" height="100px" width="200px"><br>
        <a href="../view/login.php">Logout</a> |
        <a href="../view/requiredResearch.php">Back</a>
        
    </center>
</body>
</html>
<?php

    $coursename = $_POST["courses"];
    $submit = $_POST["submit"];

    if($submit){
        #write down comments#

        $write = fopen("courseList.txt", "a+");
        fwrite($write, "<u> $coursename</u><br>");
        fclose($write);
        #display com#

        $read = fopen("courseList.txt", "r");
        echo "<b>Your Course List:</b><br>";

        while(!feof($read)){
            echo fread($read, 1024);
        }

        fclose($read);

    }
    else{
        #display com#

        $read = fopen("courseList.txt", "r+t");
        echo "<b>Your Course List:</b><br>";

        while(!feof($read)){
            echo fread($read, 1024);
        }
        fclose($read);
    }
?>