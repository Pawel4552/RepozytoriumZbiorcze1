<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style type="text/css">
	:root{
		background-color: #f3f3f3;
		font-family: Cambria, Verdana, sans-serif;
		color: #959595;
	}
	body{
		margin: 0px;
	}
	section{
		margin-top: 50px;
		width: 60%;
		margin-left: auto;
		margin-right: auto;
	}
	fieldset{
		border: 1px solid lightblue;
		border-radius: 6px;
		text-align: center;
		padding: 20px;
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
        margin-bottom: 4px;
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
	input[type="submit"]{
		padding: .7em 1.7em;
		font-size: 1.1em;
		color: #996535;
		background-color: #ffc641;
		border: 1px solid #e6b53f;
		border-radius: 4px;
	}
	input[type="submit"]:hover{
		background-color: #ffb400;
		color: white;
	}
	.panel{
		width: 100%;
		background-color: #ffb400;
		margin: 0px;
		padding: 0px;
	}
	.panel p{
		margin: 0px;
		padding: 10px;
		color: black;
		text-align: right;
		width: 85%;
	}
	.panel p span{
		font-size: 12px;
		padding: 4px;
		color: white;
		font-family: Arial;
		background-color: #871f78;
		border-radius:5px; 
	}
 </style>
<body>
<div class="wrapper">
		<div class="container">
            <main class="formData">
				<form method="POST" action="login_f.php" id="regForm" autocomplete="off">
					<fieldset>
						<legend><h3>LOGOWANIE</h3></legend>
						<input type="text" size="25" id="login" name="login" required>
						<input type="password" size="25" id="pass" name="pass" required>
						<input type="submit" id="sendForm" value="Logowanie">
					</fieldset>
				</form>
			</main>
        </div>
    </div>
</body>
</html>