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
.ikony{
    display:inline-block;
    margin-left:30px;
}
.ikony p{

}
.panel2{
    text-align:center;
    padding-top:15px;
    margin-bottom:20px;
}
form{
    border: none;
    background-color:#8a8a8a;
    padding:0px 15px 10px;
    text-align:center;
    height:50px;
}
#OK{
    width:150px;
    background-color:darkorange;
}
input{
    height:20px;
    font-weight:bold;
    border:none;
    text-align:center;
}
input[type="button"]{
    background-color:#8a8a8a;
    border:1px solid white;
    color:white;
    height:50%;
}
.klasa{
background-color:darkorange !important;
}
x{
    color:white;
    font-weight:bold;
    margin-right:10px;
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
<div class="panel2">
<?php
if(isset($_SESSION['uid']))
{
    echo '<div class="ikony">
    <a href="register_form.php"><img src="register.png" alt"zarejestruj">
    <p><U>REJESTRACJA</U></p></a>
    </div>
    <div class="ikony">
    <a href="wyszukiwarka.php"><img src="search.png" alt"wyszukaj">
    <p><U>WYSZUKIWARKA</U></p></a>
    </div>
    <div class="ikony">
    <a href="edit.php"><img src="edit.png" alt"edytuj dane">
    <p><U>EDYCJA DANYCH</U></p></a>
    </div>';
}
else
{
    echo '<div class="ikony">
    <a href="register_form.php"><img src="register.png" alt"zarejestruj">
    <p><U>REJESTRACJA</U></p></a>
    </div>
    <div class="ikony">
    <a href="login_form.php"><img src="logowanie.png" alt"zaloguj">
    <p><U>LOGOWANIE</U></p></a>
    </div>';
}
    ?>
    </div>
    <form action="main.php" method="post" id="formularz">
    <br>   
    <x> NEWSLETTER </x>
    <input type="text" name="maill" id="maill" placeholder="Adres email">
    <input type="button" name="btnK" id="btnK" value="KOBIETA">
    <input type="button" name="btnM" id="btnM" value="MĘŻCZYZNA">
    <input type="text" name="kod" id="kod" placeholder="Kod pocztowy">
    <input type="button" name="OK" id="OK" value="ZAPISZ SIĘ">
    <input type="hidden" name="hidd" id="hidd" value="INNA">
    </form>

    <?php
        define('serwer', 'localhost');
        define('userLogin', 'root');
        define('userPass', '');
        $conn=mysqli_connect(serwer, userLogin, userPass);
        if(mysqli_connect_errno($conn))
    {
        echo "Nie nawiązano połączenia!";
    }
    else
    {
        $db=mysqli_select_db($conn, 'users_4b');
        if(isset($_POST['maill']) && isset($_POST['kod']))
        {
        $mail=mysqli_real_escape_string($conn, addslashes(trim($_POST['maill'])));
        $plec=mysqli_real_escape_string($conn, addslashes(trim($_POST['hidd'])));
        $kod=mysqli_real_escape_string($conn, addslashes(trim($_POST['kod'])));
        $kwerenda="insert into newsletter values(null, '$mail', '$plec', '$kod')";
        $wynik=mysqli_query($conn, $kwerenda);
        if($wynik)
        {
            echo "Zarejestrowano Newsletter!";
        }
        else{
            echo "Nie udało się zapisać na newsletter.";
        }
    }
    }
    ?>
    <script>

    function plec(id, id2)
    {
        var btn=document.getElementById(id);
        var btn2=document.getElementById(id2);
        btn.classList.add("klasa");
        btn2.classList.remove('klasa');
        if(btn.value=='MĘŻCZYZNA')
        {
            document.getElementById('hidd').value='M';
        }
        else
        {
            document.getElementById('hidd').value='K';
        }
    }
    /*function plec(e, id2){
    var ob=e.target;
    if(ob.value=="MĘŻCZYZNA"){
        ob.style.backgroundColor="darkorange";
        document.getElementById(id2).style.backgroundColor="#8a8a8a";
        document.getElementById('hidd').value='M';
    }else{
        ob.style.backgroundColor="darkorange";
        document.getElementById(id2).style.backgroundColor="#8a8a8a";
        document.getElementById('hidd').value='K';
    }
}*/
    function walidator()
    {
        var mail=document.getElementById('maill').value;
        var regExpMail = new RegExp("^[^\s@]+@[^\s@]+\.[^\s@]+$"); 
                var wynikMail = regExpMail.test(mail);
        var kod=document.getElementById('kod').value;
        var regExpKod= new RegExp("^[0-9]{2}[-][0-9]{3}$");
            var wynikKod=regExpKod.test(kod);
        if(wynikMail==true && wynikKod==true)
        {
            var form=document.getElementById('formularz');
            form.submit();
        }
        else{
            alert("Błąd");
        }
    }
    var btnK=document.getElementById('btnK');
    btnK.addEventListener('click', function(){
        plec('btnK', 'btnM');
    });
    var  btnM=document.getElementById('btnM');
    btnM.addEventListener('click', function(){
        plec('btnM', 'btnK' );
    });
    var sbmt=document.getElementById('OK');
    sbmt.addEventListener('click', function()
    {
        walidator(event)
    });
    </script>
</body>
</html>