<<!DOCTYPE html>
<html>
<head>
    <title>Profile | Leaf</title>
</head>
<body>
      <h1>Your Profile</h1>
</body>
      <h4>Name | Password | Email</h4>
</html>
<?php
    $File = "../controller/users.txt";
    $fh = fopen($File, 'r');
    $theData = fread($fh, filesize("../controller/users.txt"));
    fclose($fh);
    echo $theData;
?>    