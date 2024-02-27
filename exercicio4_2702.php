<?php
/*Faça um algoritmo que tenha 3 variáveis, que representam 3 notas e calcule a média aritmética, no
entanto, o algoritmo não deve considerar notas inválidas (valores negativos ou maiores que dez)*/

	$nota1 = 10;
	$nota2 = 5;
	$nota3 = 7;

	$total_notas = 0;
	$soma_notas = 0;

	if ($nota1 >= 0 && $nota1 <= 10){
		$soma_notas += $nota1;
		$total_notas++;
	}

	if ($nota2 >= 0 && $nota2 <= 10){
		$soma_notas += $nota2;
		$total_notas++;
	}

	if ($nota3 >= 0 && $nota3 <= 10){
		$soma_notas += $nota3;
		$total_notas++;
	}

	if ($total_notas > 0) {
		$media = $soma_notas / $total_notas;
		echo ("A média das notas é: $media");
	} else {
		echo ("Alguma das notas está inválida (valor negativo ou maior que dez)");
	}
?>