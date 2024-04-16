<?php
	// arquivo processa_exercicio1.php
	$numero = $_GET["numero"];

	if (empty($numero) == true){
		echo("Insira um número <br>");
	} else if ($numero % 2 == 0){
		echo ("É par");
	} else {
		echo ("É ímpar");
	}
	

?>