<?php

// Faça um algortimo que percorra um laço de repetição de 1 até 100 e some todos os números pares, exibindo-os ao final.

$soma = 0;
$i = 0;

for ($i>=1; $i <= 100; $i++) {
	echo("$i ");
    if ($i % 2 == 0){
    	$soma+=$i;
    }
}

echo ("<br>A soma dos números pares é: $soma");

?>