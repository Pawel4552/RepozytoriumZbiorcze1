<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    setcookie('user', 'Jan Kowalski', time()+3600);
    echo 'Utworzono plik cookie';
    ?>
</body>
</html>