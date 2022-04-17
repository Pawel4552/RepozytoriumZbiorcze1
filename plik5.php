<?php
if(!isset($_COOKIE['licznik']))
{
    $a=1;
}
else
{
    $a=intval($_COOKIE['licznik'])+1;
}
setcookie('licznik', $a, time()+3600*24*365);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
html, body{
    background-color: grey;
    font-size:18px;
    font-family:arial;
}
    </style>
<body>
 <center><h2>
     <?php
        echo "Licznik odwiedzin: " .$a;
     ?>
</center></h2>
</body>
</html>