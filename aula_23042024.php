<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		Esportes: <br>
			<input type="checkbox" name="nat"> Natação
			<input type="checkbox" name="vol"> Vôlei 
			<input type="checkbox" name="fut"> Futebol 
			<input type="checkbox" name="han"> Handebol
			<input type="checkbox" name="ten"> Tênis 
			<input type="checkbox" name="bas"> Basquete 
			<input type="checkbox" name="gol"> Golfe 
			<br>
			<input type="submit" name="enviar" value="Enviar">
	</form>

	<?php
	if (isset($_POST["enviar"]) ) {
		echo ("Clicou no botão de enviar");
		if (isset($_POST["nat"])) {
			echo (" Natação ");
		}
		if (isset($_POST["vol"]))  {
			echo (" Vôlei ");
		}
		if (isset($_POST["fut"])) {
			echo (" Futebol ");
		}
		if (isset($_POST["han"])) {
			echo (" Handebol ");
		}
		if (isset($_POST["ten"])) {
			echo (" Tênis ");
		}
		if (isset($_POST["bas"])) {
			echo (" Basquete ");
		}
		if (isset($_POST["gol"])) {
			echo (" Golfe ");
		} else {
		echo ("Usuário não clicou em enviar");
		}
	}
	?>
</body>
</html>