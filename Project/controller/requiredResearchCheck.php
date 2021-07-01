<!DOCTYPE html>
<html>
<head>
    <title>Required Research | Leaf</title>
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

    $issue = $_POST["research"];
    $submit = $_POST["submit"];

    if($submit){
        #write down comments#

        $write = fopen("requiredResearch.txt", "a+");
        fwrite($write, "<u> $issue</u><br>");
        fclose($write);
        #display com#

        $read = fopen("requiredResearch.txt", "r");
        echo "<b>Your Required Research:</b><br>";

        while(!feof($read)){
            echo fread($read, 1024);
        }

        fclose($read);

    }
    else{
        #display com#

        $read = fopen("requiredResearch.txt", "r+t");
        echo "<b>Your Required Research:</b><br>";

        while(!feof($read)){
            echo fread($read, 1024);
        }
        fclose($read);
    }
?>