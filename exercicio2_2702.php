<?php

/*Elabore um algoritmo que lê verifique duas informações: altura (h) e sexo de um indivíduo e em
seguida, calcule e mostre peso ideal, conforme as fórmulas abaixo: (0,2)
a) Para homens: (72.7*h) - 58
b) Para mulheres: (62.1*h) - 44.7 */

	$altura = 1.80;
	$sexo = 'M';

	if ($sexo == 'M')
		$peso_ideal = (72.7 * $altura) - 58;
	else if ($sexo == 'F')
		$peso_ideal = (62.1 * $altura) - 44.7;
	echo ("O peso ideal é: $peso_ideal kg"); 
?>