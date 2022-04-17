<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
div{
    box-sizing:border-box;
    margin: 40px auto 5px;
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
	width: 850px;
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
tr:hover td{
	background-color: #E3F8FC;
	border-right: 0.5px solid #e3e3e3;
}
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
</style>
<body>
<?php
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
        $id=$_GET['idp'];
        $kwerenda="select tytul, tytul_utworu, czas_utworu from plyta inner join utwor using(id_plyty) where id_plyty='$id';";
        $wyniki=mysqli_query($conn, $kwerenda);
        if(mysqli_num_rows($wyniki)>0)
        {
            echo "<table><th>Tytuł płyty</th><th>Tytuł utworu</th><th>Czas trwania</th>";
            while($wiersz=mysqli_fetch_array($wyniki))
            {
                echo "<tr><td>".$wiersz[0] ."</td><td>".$wiersz[1]."</td><td>".$wiersz[2]."</td></tr>";
            }
            echo "</table>";
        }
    }
        mysqli_free_result($wyniki);
        mysqli_close($conn);
    ?>
</body>
</html>