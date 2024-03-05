<?php
	//aula4_array.php

	// forma 1 de se criar array	
	$estudante1 = ["João", 17, 68.9, "17/06/2006" , "Estudante"];

	echo ("Nome: " . $estudante1[0] . "<br>");
	echo ("Idade: " . $estudante1[1] . "<br>");
	echo ("Peso: " . $estudante1[2] . "<br>");
	echo ("Nascimento: " . $estudante1[3] . "<br>");
	echo ("Ocupação: " . $estudante1[4] . "<br>");

	// forma 2 de se criar array
	$estudante2 = array("Matheus", 18, 71.8, "28/01/2004", "Técnico em Informática");

	echo ("Nome: $estudante2[0] <br>");
	echo ("Idade: $estudante2[1] <br>");
	echo ("Peso: $estudante2[2] <br>");
	echo ("Nascimento: $estudante2[3] <br>");
	echo ("Ocupação: $estudante2[4] <br>");
?> 