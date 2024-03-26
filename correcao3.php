<?php

/* Faça um programa que escreva os números primos entre 1 e 100 */

$i = 30;

for ($i=2; $i<= 100; )

$ehPrimo = true;
for ($j=2; $j<$i; $j++){
	if ($i % $j == 0){
		$ehPrimo = false;
		break;
	}
}

if ($ehPrimo == true)
	echo ("$i ");

?>