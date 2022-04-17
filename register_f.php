<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
<!--
p{
    border:12px;
}
-->
</style>
<body>
    <?php
    define("serwer", "localhost");
    define('userLogin', 'root');
    define('userPass', "");
    $conn=mysqli_connect(serwer, userLogin, userPass);
    if(mysqli_connect_errno($conn))
    {
        echo "Nie nawiązano połączenia!";
    }
    else
    {
        $db=mysqli_select_db($conn, 'users_4b');
        //czyszczenie danych wejściowych:
        $userName=mysqli_real_escape_string($conn, addslashes(trim($_POST['userName'])));
        $userName2=mysqli_real_escape_string($conn, addslashes(trim($_POST['userName2'])));
        $userMail=mysqli_real_escape_string($conn, addslashes(trim($_POST['userMail'])));
        $userLogin=mysqli_real_escape_string($conn, addslashes(trim($_POST['userLogin'])));
        $userPass=mysqli_real_escape_string($conn, addslashes(trim($_POST['userPass'])));
        $userPass=password_hash($userPass, PASSWORD_DEFAULT );
        //obługa hasła użytkownika (md5() i sha1()
        /*echo "MD5: " .md5($_POST['userPass']) ."<br>";
        echo "SHA1: " .sha1($_POST['userPass']) ."<br>";
        echo "Sekwencja " .md5(sha1(md5(sha1(sha1($_POST['userPass']))))) ."<br>";
        */
        //obsługa hasła 2.1 - szyfrowanie BCRYPT
        /*echo password_hash($_POST['userPass'], PASSWORD_DEFAULT ) ."<br>";
        echo password_hash($_POST['userPass'], PASSWORD_BCRYPT);
        */
        //dodawanie danych do bazy
        if($_POST['rodo'])
        {
            $rodo='T';
        }
        else
        {
            $rodo="N";
        }
        $kwerenda="INSERT into users values(null, '$userName', '$userName2', '$userMail', '$userLogin', '$userPass', '$rodo', current_date())";
        $wynik=mysqli_query($conn, $kwerenda);
        if($wynik)
        {
            echo "Zarejestrowano Użytkownika!";
            echo "<meta http-equiv='refresh' content='5;url=wyszukiwarka.php'>";
        }
        else{
            echo "Nie udało się zarejestrować.";
        }
    }

    mysqli_free_result($wynik);
        mysqli_close($conn);
    ?>
</body>
</html>