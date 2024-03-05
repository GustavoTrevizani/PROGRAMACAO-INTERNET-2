<?php

	$hora = 14;

	if ($hora >= 5 && $hora <= 12) 
		echo ("Bom dia!");
	else if ($hora >= 13 && $hora <= 17) 
		echo ("Boa tarde!");
	else if ($hora >= 18 && $hora <= 4)
		echo ("Boa noite!");
	
?>