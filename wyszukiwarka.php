<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.div1{
    box-sizing:border-box;
    margin: 40px auto;
    width:450px;
    text-align:center;
    background-color:white;
}
select{
    display: block;
    text-align:center;
    padding:8px;
    font-size:18px;
    margin-bottom:20px;
}
body{
	background-color: #fffeed;
}
table{
	max-width: 90%;
    min-width:820px;
	border-radius: 6px;
	border: 1px solid #d4d4d4;
	border-spacing: 0px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 45px;
	background-color: white;
}
th{
	background-color: #ebebeb;
	padding: 2px;
	border-bottom: 1.5px solid red;
	font-family: Cambria;
	color: #6e6e6e;
	font-size: 1.1em;
	text-align: center;
}
tr{
	height: 35px;
}
td{
	text-align: center;
	vertical-align: middle;
	border-bottom: 1px solid #d4d4d4;
	font-family: Verdana;
	color: #949494;
	font-size: .95em;
}
/*tr:hover td{
	background-color: #E3F8FC;
	border-right: 0.5px solid #e3e3e3;
}*/
.dane{
	font-family: Verdana;
	color: #949494;
	font-size: 12px;
	font-weight: bold;
}
.small{
	font-size: 10px;
	margin: 0px;
	padding: 0px;
	text-indent: 10px;
	color: blue;
}
.plyta{
    width:90%;
    height:150px;
    background-color:lightblue;
    border-radius:10px;
    margin:10px;
    padding-top:10px;
    margin:5px auto;
}
.znaczek{
    margin-top:5px;
    margin-left:7px;
    margin-right:5px;
    height:70px;
    float:left;
    border-radius: 5px;
}
.text{
    position:relative;
    top:5px;
}
p, h2{
    margin:0;
}

table{
    position:relative;
    top:-25px;
}
td{
    vertical-align:middle;
    overflow:visible;
}
td img{
    float:left;
    height:60px;
}
td p{
    margin:5px;
    position:relative;
    top: 15px;
    color: black;
}
.button{
    height:50px;
    width:150px;
    border:1px solid gold;
    border-radius:5px;
    background-color:#ECB41C; 
    float:right;
    position:relative;
    top:-25px;
    margin-right:20px;
    text-align:center;
}
.button p{
    color:white;
    font-size:18px;
    font-family:Verdana, Geneva, sans-serif;
    font-weight:bold;
    margin-top:15px;
}
.button:hover{
    background-color: yellow;
    cursor:pointer;
}
body{
    margin:0px;
}
.panel{
    background-color: #ffb400;
    margin:0px;
    padding:0px;
    width: 100%;
    text-align:right;
}
div.panel p{
    margin:0;
    padding:8px;
    font-size:16px;
    font-weight:bold;
    font-family:Cambria;
    width: 90%;
}
div.panel p input[type="button"]{
    margin-left:15px;
    border:none;
    outline:none;
    background-color:darkviolet;
    padding: 5px 8px;
    color:white;
    border-radius:5px;
    font-family:Cambria;
    cursor:pointer;
}
</style>
<body>
<div class="panel">
<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "<p class='logOn'>Jesteś zalogowany jako: "  .$_SESSION['uid'] ."
    <a href='logof.php'> <input type='button' value='wyloguj' id='btn1'></a>
    </p>";
}
else{
    echo "<p class='logOn'>Nie jesteś zalogowany
    <a href='login_form.php'><input type='button' value='zaloguj' id='btn1'></a>
    </p>";
}
?>
</div>
<?php
    if(isset($_SESSION['uid']))
    {
    echo '<div class="div1">
        <form action="wyszukiwarka.php" method="post">
            <fieldset>
                <legend>Wyszukiwarka</legend>
                <label>Wybierz rodzaj nośnika:</label>';
                DEFINE("serwer", 'localhost');
                DEFINE("userLogin", "root");
                DEFINE("userPass", "");
                $conn=mysqli_connect(serwer, userLogin, userPass);
                if(mysqli_connect_errno())
                {
                    echo "Nie nawiązano połączenia z bazą danych!";
                }
                    else{
                        $db=mysqli_select_db($conn, 'muzyka2020');
                        $kwerenda="select distinct nosnik from plyta";
                        $wynik=mysqli_query($conn, $kwerenda);
        
                    echo '<select name="lista">';
                    while($wiersz=mysqli_fetch_array($wynik))
                    {
                        echo "<option>" .$wiersz['nosnik'] ."</option>";
                    }
                echo '</select>
                <label>Podaj szukaną wartość: <br></label>
                <input type="text" name="ws"><br>
                <label>Tytuł płyty</label><input type="radio" name="rgr1" value="tp" checked><br>
                <label>Tytuł utworu</label><input type="radio" name="rgr1" value="tu"><br>
                <input type="submit" value="Szukaj">
                </fieldset></form></div>'; 
                    }
                    if(isset($_POST['lista']))
                    {
                    $tn=$_POST['lista'];
                    $sw=$_POST['ws'];
                    if($_POST['rgr1']=='tp')
                    {
                        $field='tytul';
                    }
                    else
                    {
                        $field='tytul_utworu';
                    }
                    $kwerenda2=mysqli_prepare($conn, "select nosnik, typ_nosnika, tytul, nazwa_wydawcy, nazwa_artysty, data_wyd_org, sec_to_time(sum(time_to_sec(czas_utworu))) as 'Czas', cena, count(tytul_utworu) as 'ilość', id_plyty as 'idp'
                    from plyta inner join utwor using(id_plyty)
                    inner join wydawca using(id_wydawcy) 
                    inner join artysta using(id_artysty)
                    where $field like concat('%', ? ,'%') and nosnik=?
                    group by tytul");
                    mysqli_stmt_bind_param($kwerenda2, 'ss', $sw, $tn);
                    mysqli_stmt_execute($kwerenda2);
                    mysqli_stmt_bind_result($kwerenda2, $n, $t_n , $t, $nw, $na, $dwo, $czas, $c, $ile, $idp);
                    //$wyniki=mysqli_query($conn, $kwerenda2);
                    mysqli_stmt_store_result($kwerenda2);
                    $row_cnt = mysqli_stmt_num_rows($kwerenda2);  
       if($row_cnt>0)
       // if($row_cnt = $result->num_rows)
        {
        //{
            //echo "<table><th>Tytul</th><th>Data wydania<br>oryginału</th><th>Nośnik</th><th>Cena</th>";
            //echo "<h3>Liczba wyników: " .mysqli_num_rows($wyniki)."</h3>";
       // while($wiersz=mysqli_fetch_array($wyniki))
       while(mysqli_stmt_fetch($kwerenda2)) 
       {
            //echo "<tr><td><a href='piosenki.php?idp=".$wiersz['idp']."'>".$wiersz['tytul'] ."</td></a><td>" .$wiersz[2] ."</td><td>" .$wiersz['nosnik'] ."</td><td>" .$wiersz['cena'] ." zł</td></tr>";
            echo '<div class="plyta">';
            switch($n)
            {
                case 'CD':
                    $obr="CD.png' style='height:50px;'";
                break;
                case 'DVD':
                    $obr="dvd.png' style='margin-top:-10px;'";
                break;
                case 'Vinyl':
                    $obr="vinyl.png' style='height:50px;'";
                break;
                default:
                $obr="CD.png' style='height:50px;";
            break;
            }
            echo "<img src='$obr class='znaczek'><div class='text'><h2>".$t ."</h2>
            <p>Wydawca:" .$nw ." Wykonawca: " .$na .
            "</p></div><a href='piosenki.php?idp=".$idp ."'><div class='button'><p>Lista utworów</p></div></a>";
            echo '<table><tr><td><img src="pack.png" class="pack"><p>'.$t_n .'</p></td><td><img src="callendar.svg" class="calendar"><p>'.$dwo
             .'</p></td><td><img src="clock.png" class="clock"><p>'.$czas .'</p></td><td><img src="money.png" class="money"><p>'.$c .' zł</p></td><td>
            <img src="music.png" class="music"><p>'.$ile .'</p></td></tr></table>';
            echo '</div>';
        }
        //echo "</table>";
       // mysqli_free_result($wynik);
        mysqli_close($conn);
    }
    else{
        echo "<h1>Liczba wyników: <big>0</big></h1>";
    }
    }
}
else{
    echo '<h1 style="text-align:center; color:red;">ZALOGUJ SIĘ!</h1><br>
    <h2 style="text-align:center; color:blue;">Zawartość tylko dla zalogowanych użytkowników.</h2>';
}
                ?>
      
<?php

?>

</body>
</html>