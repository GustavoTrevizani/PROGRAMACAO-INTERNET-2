<?php

	// exemplo de comando switch

	$numero1 = 10;
	$numero2 = 20;
	$operador = '+';

	if ($operador == '+')
		echo ("A soma de $numero1 e do $numero2 é " . $numero1 + $numero2);	
	else if ($operador == '-')
		echo ("A subtração de $numero1 e do $numero2 é " . $numero1 - $numero2);
	else if ($operador == '*')
		echo ("A multiplicação de $numero1 e do $numero2 é " . $numero1 * $numero2);	
	else if ($operador == '/')
		echo ("A divisão de $numero1 e do $numero2 é " . $numero1 / $numero2);	

	switch($operador){
		case '+':
			echo ("A soma de $numero1 e do $numero2 é " . $numero1 + $numero2);
			break;
		case '-':
			echo ("A subtração de $numero1 e do $numero2 é " . $numero1 - $numero2);
			break;
		case '*':
			echo ("A multiplicação de $numero1 e do $numero2 é " . $numero1 * $numero2);
			break;
		case '/':
			echo ("A divisão de $numero1 e do $numero2 é " . $numero1 / $numero2);
			break;
		default:
			echo ("A operação escolhida não é válida");
	}
?>