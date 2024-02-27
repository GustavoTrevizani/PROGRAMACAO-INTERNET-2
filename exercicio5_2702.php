<?php
/*Elabore um algoritmo que lê duas informações: peso e altura de um indivíduo e em seguida, calcule
o Índice de Massa Corpórea do indivíduo, apresentando o resultado na tela, por exemplo, “Seu
IMC é 22,3 sendo considerado normal”. A fórmula para cálculo do IMC é peso/altura*altura*/

	$peso = 85;
	$altura = 1.75;
	$imc = $peso / ($altura*$altura);

	if ($imc < 18.5)
		echo ("Seu IMC é: $imc sendo considerado magreza");
	else if ($imc >= 18.5 && $imc <= 24.9)
		echo ("Seu IMC é: $imc sendo considerado normal");
	else if ($imc >= 25.0 && $imc <= 29.9)
		echo ("Seu IMC é: $imc sendo considerado sobrepeso");
	else if ($imc >= 30.0 && $imc <= 39.9)
		echo ("Seu IMC é: $imc sendo considerado obesidade");
	else if ($imc >= 40.0)
		echo ("Seu IMC é: $imc sendo considerado obesidade grave");
?>