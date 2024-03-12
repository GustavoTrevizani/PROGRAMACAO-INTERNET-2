<?php
	// aula4_array.php

	// forma 1 de se criar um array
	$estudante1 = ["João", 17, 68.9, "17/06/2006", "Estudante"];

	echo ("Nome: " . $estudante1[0] . "<br>");
	echo ("Idade: " . $estudante1[1] . "<br>");
	echo ("Peso: " . $estudante1[2] . "<br>");
	echo ("Nascimento: " . $estudante1[3] . "<br>");
	echo ("Ocuparação: " . $estudante1[4] . "<br>");

	// forma 2 de se criar um array
	$estudante2 = array("Mateus", 18, 71.8, "28/01/2004", "Técnico em informática");

	echo ("Nome:  $estudante2[0] <br>");
	echo ("Idade: $estudante2[1] <br>");
	echo ("Peso:  $estudante2[2] <br>");
	echo ("Nascimento:  $estudante2[3] <br>");
	echo ("Ocuparação:  $estudante2[4] <br>");

	// adicionando outras informações a um array
	$estudante2[] = 2807.58; // valor que representa sálario

	echo("Salário: $estudante2[5]<br>");

	$estudante2[10] = "Rua Frederico Augusto Timmenn";
	echo("Endereço: $estudante2[10]<br>");

	//percorrer o array
	$turma_info = ["Monique ", "Laura ", "Isabela ", "Maria ", "Matheus ", "Victor "];

	//adicionando a Ana
	$turma_info[7]= "Ana";
	echo("<br>percorrendo o array ");

	print_r($turma_info);
	//quantos elementos tem o array?
	$qtd= count($turma_info);

	$turma_info[6]= "Pablo";
	for ($i=0; $i < $qtd; $i++){
		echo($turma_info[$i]);
	}

	//usando o foreach para percorrer o array
	foreach($turma_info as $aluno){
		echo("<br>Estudante: $aluno");
	}

	//criando um array associativo
	$func1 = [
		"nome" => "Tiago", 
		"nascimento" => "25/06/2009", 
		"cidade" => "Parobé", 
		"profissao" => "Técnico em informática"
	];

	//acessando um array associativo
	echo ("<br>Mostrando os dados dos funcionários<br>");
	echo ("<br>Nome: <b>$func1[nome]</b>");
	echo ("<br>Nascimento: <b>$func1[nascimento]</b>");
	echo ("<br>Cidade: <b>$func1[cidade]</b>");
	echo ("<br>Profissão: <b>$func1[profissao]</b>");

	//a função sort coloca um array em ordem ascedente (alfabética)
	sort($turma_info);

	rsort($turma_info); //forma inversa

	echo ("<br>Colocando o array em ordem alfabética");
	foreach($turma_info as $aluno){
		echo("<br>Estudante: $aluno");
	}
?>