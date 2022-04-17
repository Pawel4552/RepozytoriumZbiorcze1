<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            margin-top: 200px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        fieldset {
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            clear:both;
        }
        #btn {
            width: 100px;
            padding: 10px;
            background-color: #f7ccba;
        }
        #btn:hover {
            background-color: red;
        }
    </style>
</head>
<body>
    <form action="wyswietl.php" method="POST" onsubmit="return validateForm()">
    <fieldset>
        <legend> Wprowadz Dane </legend> <br>
        <label>Nazwisko: </label> <input type="text" name="nazwisko" id="nazw"><br><br>
        <label>Imie: </label> <input type="text" name="imie" id="im"><br><br>
        <label>Wiek: </label> <input type="text" name="wiek" id="w"><br><br>
        <label>Pesel: </label> <input type="text" name="pesel"><br><br>
        <label>Liceum: <input type="radio" name="szkola" value="Liceum"><Br>
        <label>Technikum: <input type="radio" name="szkola" value="Technikum"><Br>
        <label>Szkoła zawodowa: <input type="radio" name="szkola" value="Szkoła zawodowa"><Br><br>
        <input type="checkbox" name="zainteresowania" value="Programowanie"><label>Interesuje się programowaniem</label> <br><br><br>
        <input type="submit" value="Wyślij" id="btn">
        </fieldset>
    </form>

    <script>
        function validateForm() {
            var nazwiskoText = document.getElementById("nazw").value;
            var imieText = document.getElementById("im").value;
            var wiek = document.getElementById("w").value;
            var nazImieTest = new RegExp("^[A-Z]");
            var nazwiskoTest = nazImieTest.test(nazwiskoText);
            var imieTest = nazImieTest.test(imieText);

            if((wiek > 5 && wiek < 100) && nazwiskoTest == true && imieTest == true) {
                return true;
            } else {
                alert("Wiek musi być liczbą całkowitą w przedziale od 3 do 100, a nazwisko i imie musi się zaczynać z duzej litery.");
                return false;
            }

        }
    </script>
</body>
</html>