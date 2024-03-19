<?php
	// aula5.php
	// form é um laço de repetição simples
	// tem três condições:
	// 1° inicialização de variável
	// 2° condição de saída
	// 3° incremento da variável de controle
	for ($i=0; $i<=10; $i=$i+3){
		echo ("$i ");
	}         

	//laço while tem pré-validação
	$status = true;

	$j = 0;
	while ($status == true){
		echo ("$j ");    

		// criando a condição de saída do laço
		if ($j < 10){
			$status = false;
			// poderia usar um break
		}   
		$j++;    
	}

	$encontrado = false;
	$k=0; // variável para ter a condição de saída

	do {
		echo ("$k ");

		if ($k == 10){
			$encontrado = true;
		}
		$k++;
	} while ($encontrado == false);
?>