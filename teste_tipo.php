<?php
	// teste_tipo.php

	$idade = "30";

	if (is_int($idade) == true)
		echo ("A variável idade é do tipo int");
	else
		echo ("A variável idade <b>não</b> é do tipo int");

	$nome = false;

	if (is_string($nome) == true)
		echo ("<br>A variável nome é do tipo string");
	else
		echo ("<br>A variável nome <b>não</b> é do tipo string");
?>