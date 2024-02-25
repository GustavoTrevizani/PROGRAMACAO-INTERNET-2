<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	Programa que calcula e mostra percentual de frequência de um estudante. 120 períodos correspondem 100% da carga horária.
<body>
	<?php
		$aluno= "Gustavo";

		$presenca = 90/120;

		$frequencia = $presenca * 100;

		echo ("<br>O $aluno tem como frequencia: $frequencia %");

	?>

</body>
</html>