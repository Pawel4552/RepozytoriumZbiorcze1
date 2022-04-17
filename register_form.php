<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja użytkownika</title>
</head>
<style type="text/css">
	:root{
		background-color: #f3f3f3;
		font-family: Cambria, Verdana, sans-serif;
		color: #959595;
	}
	section{
		margin-top: 50px;
		width: 60%;
		margin-left: auto;
		margin-right: auto;
	}
	fieldset{
		border: none;
	}
	p{
		font-weight: bolder;
		font-size: .9em;
		text-align: justify;
	}
	input{
		padding: 1em;
		outline: none;
		font-weight: bolder;
        font-size: 16px;
		background-color: #f3f3f3;
		border: 1px solid #cccccc;
		border-radius: 4px;
        color: darkgrey;
	}
	li{
		list-style-type: square;
	}
	li span{
		color: #2b3ef9;
		font-weight: bold;
	}
	p a{
		color: #3588d4;
		text-decoration: none;
	}
	div h1{
		color: white;
		background-color: #ffc152;
		padding: 1em;
	}
	div h3{
		padding: 0.2em;
		text-align: center;
	}
	.wrapper{
        width: 550px;
		margin-left: auto;
		margin-right: auto;
	}
	.container{
		display: table;
		width: 35%;
		border-spacing: 1.5em 0;
	}
	.formData{
		box-sizing: border-box;
		display: table-cell;
		width: calc(55% - 1.5em);
		padding: 1.5em;
	}
	input::placeholder{
		font-family: Arial;
		color: #d1b9b9;
	}
	li:first-of-type{
		font-size: 1.2em;
		font-weight: bold;
		list-style-type: none;
		margin: 7px 3px;
	}
	input:focus{
		background-color: white;
	}
	input[type="password"]{
		background-color: white;
	}
	input[type="submit"]{
		padding: .9em 1.9em;
		font-size: 1.3em;
		color: #996535;
		background-color: #ffc641;
		border: 1px solid #e6b53f;
		border-radius: 4px;
	}
	input[type="submit"]:hover{
		background-color: #ffb400;
		color: white;
	}
 </style>
<body>
	<div class="wrapper">
    <h3> REJESTRACJA UŻYTKOWNIKA SYSTEMU</h3>
		<div class="container">
            <main class="formData">
				<form method="POST" action="register_f.php" id="regForm" autocomplete="off">
					<fieldset>
						<input type="text" size="15" id="userName" name="userName" placeholder="Imię" required>
						<input type="text" size="25" id="userName2" name="userName2" placeholder="Nazwisko" required>
					</fieldset>
					<fieldset>
						<input type="email" size="49" id="userMail" name="userMail" placeholder="Adres email" required>
                    </fieldset>
                    <fieldset>
						<input type="text" size="29" id="userLogin" name="userLogin" placeholder="Login: (minimum 6 znaków)" required>
                    </fieldset>
					<fieldset>
						<input type="password" size="49" id="userPass" name="userPass" placeholder="Hasło (minimum 8 znaków)" required>
                    </fieldset>
					<fieldset>
						<p><input type="checkbox" name="rodo" value="accept">Akceptuję <a href="#">regulamin</a> wraz z <a href="#">polityką prywatności</a> w celu korzystania z usług serwisu. Administratorem Twoich danych osobowych jest YouProfi Sp. z o.o. z siedzibą w Sosnowcu (ul. Kolejowa 5/7). Możesz zawsze skontaktować się z nami pod adresem <a href="mailto:kontakt@youprofi.com.pl">kontakt@youprofi.com.pl</a>.
						</p>
					</fieldset>
					<fieldset>
						<input type="submit" id="sendForm" value="Rejestracja!">
					</fieldset>
				</form>
			</main>
        </div>
    </div>
    <?php
        
    ?>
</body>
</html>