<?php
	// criando_cookie.php
	
	// cria um cookie chamado idade contendo o valor 20
	setcookie("idade", 20);

	//$_GET, $_POST, $_SESSION

	echo ("Idade: " . $_COOKIE["idade"]);
?>