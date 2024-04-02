<?php
	// arquivo exemplo_funcao.php

	function somar($n1, $n2) {
		$resultado = $n1 + $n2; // armazena o resultado da operacao na variavel

		echo ("$n1 + $n2 = $resultado");
	}

	$GLOBALS["n3"] = 12; // cria uma variavel global
	function somar2($n1, $n2) {

		$resultado = $n1 + $n2 + $GLOBALS["n3"];

		return $resultado;
	}

	somar(17, 13);

	// ao chamar uma função com retorno, é possível armazenar o valor retornado em uma variável
	$result = somar2(10, 15);
	echo ("<br>10 + 15 = $result");

	echo ("<br>A soma de 77 + 64 é " . somar2(77, 64) );

	function subtrair($n1, $n2){
		return $n1 - $n2;
	}

	echo ("<br>100 - 88 = " . subtrair(100, 88) );

	// Qual será a saída?
	echo ($resultado);

?>