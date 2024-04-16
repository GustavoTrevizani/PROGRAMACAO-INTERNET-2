<?php
	// arquivo processa_exercicio2.php
	$numero1 = $_GET["numero1"];
	$numero2 = $_GET["numero2"];
	$somar = $_GET["somar"];

	if (empty($numero1 && $numero2 ) == true){
		echo("Insira os números <br>");
	} else if ($somar == '+') {
		echo ($numero1 + $numero2);
	} else {
		echo ();
	}
	

?>
