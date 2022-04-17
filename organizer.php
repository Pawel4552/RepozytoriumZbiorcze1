<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css" type="text/css"></style>
</head>
<body>
    <header>
        <div><h2>MÓJ ORGANIZER</h2></div><div>
            <form action="organizer.php" method="POST">
       Wpisz wydarzenia: <input type="text" name="wyd">
       <input type="submit" value="ZAPISZ">
        </form>
    </div><div><img src="callendar.svg" alt="Mój organizer"></div>
</header>
<main>
<?php
$conn=mysqli_connect('localhost', 'root', '');
if(mysqli_connect_errno($conn)){
    echo "Błąd połaczenia";
}
else{
    
    $db=mysqli_select_db($conn, 'egzamin6');
    if(isset($_POST['wyd']))
    {
    $wpis=$_POST['wyd'];
    $kwerenda="UPDATE zadania set wpis='$wpis' where data_zadania='2020-08-27'";
    mysqli_query($conn, $kwerenda);
    }
    $kwerenda2="select data_zadania, miesiac, wpis from zadania where miesiac='sierpień';";
    $wyniki1=mysqli_query($conn, $kwerenda2);
    while($wiersz=mysqli_fetch_array($wyniki1))
    {
        echo "<div><h6>" .$wiersz['data_zadania'] .", " .$wiersz['miesiac'] ."<br><p>" .$wiersz['wpis'] ."</p></div>";
    }
}
?>
</main>
<footer>
<?php
$kwerenda3="SELECT date_format(data_zadania, '%Y') as 'rok', date_format(data_zadania, '%m') as 'miesiac' FROM `zadania` WHERE data_zadania='2020-08-02';";
$wynik2=mysqli_query($conn, $kwerenda3);
$wiersz2=mysqli_fetch_array($wynik2);
switch ($wiersz2[1])
{
case 1:
    $mies="Styczeń";
break;
case 2:
    $mies="Luty";
break;
case 3:
    $mies="Marzec";
break;
case 4:
    $mies="Kwiecień";
break;
case 5:
    $mies="Maj";
break;
case 6:
    $mies="Czerwiec";
break;
case 7:
    $mies="Lipec";
break;
case 8:
    $mies="Sierpień";
break;
case 9:
    $mies="Wrzesień";
break;
case 10:
    $mies="Październik";
break;
case 11:
    $mies="Listopad";
break;
case 12:
    $mies="Grudzień";
break;
}
echo "<h1>miesiac: " .$mies .", rok: " .$wiersz2[0] ."</h1>";
mysqli_free_result($wyniki1);
mysqli_free_result($wynik2);
mysqli_close($conn);
?>
<p>Stronę wykonał Paweł Fajger</p>
</footer>
</body>
</html>