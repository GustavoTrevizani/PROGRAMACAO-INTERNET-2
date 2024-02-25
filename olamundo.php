<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	Exemplo de arquivo HTML
<body>
<?php
	// função echo é para escrever na tela
	echo("Olá mundo");

	// declaração de variáveis
	// TODAS as variáveis começam com $ e só pode usar undderline (_). Ex.: $idade1 / $idade_pessoa1

	$nome = "Gustavo";  // string

	$idade = 18; // int

	$peso = 70.7;  // float

	/* Status possíveis para a variável 
	true- significa que a aula não acabou
	false - significa que a aula acabou
	*/
	$status_aula = true;  // boolean

	$sexo = "M";   // char

	$nome = "Mateus";

	echo ("<br>Nome: $nome <br>Idade: $idade <br>Peso: $peso kg <br>Sexo: $sexo");

	/* exemplo de if
	o if tem três elementos:
	1° variavel a ser testada
	2° operador de comparação (== / != / > / >= / < / <=)
	3° valor a ser comaprado*/
	if ($status_aula == true){
		echo ("<br>A aula <b>não</b> acabou");
	} else {
		echo ("<br>Podem sair para o intervalo!");
	}

	// exemplo maioridade
	// conmdição: ter idade igual ou maior a 18
	if ($idade >= 18) 
		echo ("<br>É maior de idade");
	else 
		echo ("<br>É menor de idade");


?>

</body>
</html>