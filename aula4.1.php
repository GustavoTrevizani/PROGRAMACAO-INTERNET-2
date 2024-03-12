<?php
	// Escreva um algoritmo que analisa um array contendo 10 números e em seguida procure qual é o maior valor armazenado dentro dele.

	$numeros = [ 10, 20, 35, 5, 15, 60, 56, 80, 25, 100];

	$maior_valor = $numeros[0];

	foreach ($numeros as $numero) {
		if ($numero > $maior_valor) {
			$maior_valor = $numero;
		}
	}

	echo("O maior valor no array é: " . $maior_valor);

?>