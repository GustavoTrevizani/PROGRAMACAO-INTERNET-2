<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<body>
	<form method="GET" action="processa_exercicio2.php">
		<fieldset>
			<legend>Formulário</legend>
			<br>Numero 1: <input type="number" name="numero1">
			<br>Numero 2: <input type="number" name="numero2">
			<br>Operação:
			<select name="select"> 
				  <option value="somar" name="somar">Somar</option>
				  <option value="subtrair">Subtrair</option>
				  <option value="multiplicar">Multiplicar</option>
				  <option value="dividir">Dividir</option>
			</select>
			<button>Resultado</button>
		</fieldset>
</body>
</html>