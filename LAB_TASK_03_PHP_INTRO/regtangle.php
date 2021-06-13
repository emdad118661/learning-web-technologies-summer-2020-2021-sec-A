<?php
$area=0;
$perimeter=0;
$len=4;
$wid=8;

    //area formule length*width
    $area=$len*$wid;
 
    //perimeter formule 2*(length+width)
    $perimeter=2*($len+$wid);

 
?>
<!doctype html>
<html>
    <head>
        <title>Regtangle</title>
        <meta charset="utf-8">
        <style>
            label{
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Area and Perimeter of Rectangle</h1>
        <h2>Area: <?=$area?></h2>
        <h2>Perimeter:<?=$perimeter?></h2>
        <form action="" method="post">
            <label for="len">Length:
                <input type="text" name="len" value="<?=$len?>">
            </label>
            <label for="wid">Width:
                <input type="text" name="wid" value="<?=$wid?>">
            </label>
            <button name="calcBtn" type="submit">Calculate</button>
        </form>
    </body>
</html>