<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="30">-->
    <title>Document</title>
</head>
<style>
fieldset{
    width:300px;
    text-align:center;
    margin:5px auto;
}
p{
    font-style:italic;
}
</style>
<body>
<form action="main.php" method="post">
<fieldset>
    <input type="text" name="a" placeholder="Podaj liczbę a"><br>
    <input type="text" name="b" placeholder="Podaj liczbę b"><br>
    <select name="dzi">
        <option value="+">Dodawanie</option>
        <option value="-">Odejowanie</option>
        <option value="*">Mnożenie</option>
        <option value="/">Dzielenie</option>
        <option value="art">Średnia arytmetyczna</option>
        <option value="geo">Średnia geometryczna</option>
</select><br>
    <input type="submit" value="Wykonaj">
</fieldset>
</form>
 
<?php
 if((isset($_POST['a'])) && (isset($_POST['b'])) && (isset($_POST['dzi'])))
 {
     $a=$_POST['a'];
     $b=$_POST['b'];
    $dzi=$_POST['dzi'];
    switch($dzi)
    {
        case '+':
            $w=$a+$b;
            echo "<p>".$a."+".$b."= " .$w."</p>";
        break;
        case '-':
            $w=$a-$b;
            echo "<p>".$a."-".$b."= " .$w."</p>";
        break;
        case '*':
            $w=$a*$b;
            echo "<p>".$a."*".$b."= " .$w."</p>";
        break;
        case '/':
            $w=$a/$b;
            echo "<p>".$a."/".$b."= " .round($w, 2)."</p>";
        break;
        case 'art':
            $w=($a+$b)/2;
            echo "<p>Średnia arytmetyczna " .$a." i ".$b."= " .$w."</p>";
        break;
        case 'geo':
            $w=pow($a*$b, 1/2);
            echo "<p>Średnia geometryczna " .$a." i ".$b."= " .round($w, 2)."</p>";
        break;
    }
   
 }
 else
 {
     echo "Najpierw podaj liczby!";
 }
?>  

</body>
</html>