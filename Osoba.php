<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css"></style>
</head>
<body>
<?php
$conn=mysqli_connect('localhost', 'root', '');
if(mysqli_connect_errno())
{
     echo "Nie nawiązano połączenia z bazą danych!";
}
else{
    $db=mysqli_select_db($conn, 'baza1');
    if(isset($_POST['dodaj']))
    {
        $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $wiek=$_POST['wiek'];
        $pesel=$_POST['pesel'];
    $kwerenda="insert into Osoba values(null, '$imie', '$nazwisko', '$pesel', '$wiek');";
    $wynik=mysqli_query($conn, $kwerenda);
    echo "<p>Dodano osobę:<br>" .$nazwisko ." " .$imie ." " .$wiek ."lat<br>PESEL: " .$pesel ."<br><br>";
        $ile=mysqli_affected_rows($conn);
        echo "Zmodyfikowano: " .$ile ." rekordów</p><br>";
}
else if(isset($_POST['usun']))
{
        $nazwisko=$_POST['nazwisko'];
        $pesel=$_POST['pesel'];
        $kwerenda="select * from osoba where nazwisko='$nazwisko' or pesel='$pesel'";
        echo "<form action='Osoba.php' method='POST'> 
        <fieldset><legend>Zatwierdz Kasowanie</legend>
        <select name='wyb' id='wyb'>";
        $wynik=mysqli_query($conn, $kwerenda);
        while($wiersz=mysqli_fetch_array($wynik))
        {
           echo '<option value="'.$wiersz["id_osoby"].'">' .$wiersz["nazwisko"] ." " .$wiersz["imie"] ." " .$wiersz["wiek"] ."lat<br>PESEL: " .$wiersz["pesel"] ."</option>";
        }
       echo '</select><br>
       <input type="hidden" name="id" id="id">
        <input type="submit" value="Zatwierdź kasowanie" id="zatw" name="zatwierdz">
        </fieldset>
        </form>';
        $ile=mysqli_affected_rows($conn);
        echo "<p>Zwrócono: " .$ile ." rekordów</p>";
        
}
else if(isset($_POST['zatwierdz']))
        {
            $id=$_POST['id'];
            $kwerenda2="delete from osoba where id_osoby='$id';";
            mysqli_query($conn, $kwerenda2);
            $ile=mysqli_affected_rows($conn);
            echo "<p>Skasowano: " .$ile ." rekordów</p>";
        }  
else if(isset($_POST['lista']))
    {
    $kwerenda3="select id_osoby, imie, nazwisko, pesel, wiek from osoba";
    $wynik2=mysqli_query($conn, $kwerenda3);
     while($wiersz2=mysqli_fetch_array($wynik2))
        {
           echo '<a href="Osoba.php?id='.$wiersz2[0].'"><p>' .$wiersz2[0] .' '.$wiersz2[1] .' ' .$wiersz2[2] .' ' .$wiersz2[3].' ' .$wiersz2[4].'</p></a>';
        }
    }
       else if(isset($_GET['id']))  
       {
            $id=$_GET['id'];
            $kwerenda4="select id_osoby, imie, nazwisko, pesel, wiek from osoba where id_osoby='$id'";
        $wynik3=mysqli_query($conn, $kwerenda4);
        $wiersz4=mysqli_fetch_array($wynik3);
        $imie=$wiersz4['1'];
        $nazwisko=$wiersz4['2'];
        $pesel=$wiersz4['3'];
        $wiek=$wiersz4['4'];
        $id=$wiersz4['0'];
        echo "<form action='Osoba.php' method='POST'>
        <fieldset>
        <legend>Zmień dane</legend>
        ID: <input type='text' name='id' value='$id' readonly><br>
        Imię: <input type='text' name='imie' value='$imie'><br>
        Nazwisko: <input type='text' name='nazwisko' value='$nazwisko'><br>
        PESEL: <input type='text' name='pesel' value='$pesel'><br>
        Wiek: <input type='text' name='wiek' value='$wiek'><br>
        <input type='submit' name='edit' value='Zmień dane'><br>
        </fieldset></form>
        ";
       }
       else if(isset($_POST['edit']))
       {
           $id=$_POST['id'];
           $imie=$_POST['imie'];
           $nazwisko=$_POST['nazwisko'];
           $pesel=$_POST['pesel'];
           $wiek=$_POST['wiek'];
           $kwerenda5="update osoba set imie='$imie', nazwisko='$nazwisko', pesel='$pesel', wiek='$wiek' where id_osoby='$id'";
           mysqli_query($conn, $kwerenda5);
           $ile=mysqli_affected_rows($conn);
           echo "Zmodyfikowano pomyślnie dane dla $ile użytkownika o id $id";
       }
       else{
        echo '<form action="Osoba.php" method="POST">
        <fieldset>
            <legend>Dane Osobowe</legend>
            Nazwisko: <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
            Imię: <input type="text" name="imie" placeholder="Imię"><br>
            Wiek: <input type="text" name="wiek"  placeholder="Wiek"><br>
            PESEL: <input type="text" name="pesel" placeholder="PESEL"><br>
            <input type="submit" value="LISTA" name="lista" id="btn2"><input type="submit" value="DODAJ" name="dodaj" id="btn"><input type="submit" name="usun" value="USUŃ">
</fieldset>
</form>';
       }
}
?>
<script>
function dop(){
    var wyb=document.getElementById('wyb').value;
    document.getElementById('id').value=wyb;
}
var btn1=document.getElementById('wyb');
btn1.addEventListener('blur', dop);
</script>
</body>
</html>