<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
    define("serwer", "localhost");
    define('userLogin', 'root');
    define('userPass', "");
    $conn=mysqli_connect(serwer, userLogin, userPass);
    if(mysqli_connect_errno($conn))
    {
        
    }
    else
    {
        $db=mysqli_select_db($conn, 'users_4b');
        //czyszczenie
        $login=mysqli_real_escape_string($conn, addslashes(trim($_POST['login'])));
        $pass=mysqli_real_escape_string($conn, addslashes(trim($_POST['pass'])));
        // sprawdzenie zarejestrowania użytkownika
        $kwerenda="select userLogin, userPass from users where userLogin='".$login."'";
        $wynik=mysqli_query($conn, $kwerenda);
        if(mysqli_num_rows($wynik)==1)
        {
            echo '<p style="text-align:center;">Znaleziono dane logowania!</p>';
            //obługa hasła
            $wiersz=mysqli_fetch_row($wynik);
            if(password_verify($pass, $wiersz[1]))
            {
                // tworzenie sesji dla użytkownika
                session_start();
                $_SESSION['id']=$wiersz[0];
                echo "<h1 style='text-align:center;'>Zalogowano użytkownika</h1>";
                echo "<meta http-equiv='refresh' content='2;http://localhost/PIPAI/main.php'>";   
            }
            else
            {
                echo "Błędne hasło";
            }
        }
        else{
            echo "Nie znaleziono danych logowania, zarejestruj się! <br> <a href'http://localhost/PIPAI/main.php'>Rejstracja</a>";
            
        }
        mysqli_free_result($wynik);
        mysqli_close($conn);
    
    }
        ?>
</body>
</html>