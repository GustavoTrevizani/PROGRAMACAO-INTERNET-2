<?php
	// arquivo processa_mensagem.php

	if (isset($_GET["enviar"])) {

		$nome = ""; 
		$nascimento = "";

	//	if (isset($_GET["nome"]))
			

	//	if (isset($_GET["nasc"]))
			$nascimento = $_GET["nasc"];
		
		$nome = $_GET["nome"];
		$cpf = $_GET["cpf"];
		$email = $_GET["email"];
		$telefone = $_GET["fone"];
		$sexo = $_GET["sexo"];

		// dias da semana - próxima aula terminar
		/*$seg = $_GET["seg"];
		$ter = $_GET["ter"];
		$qua = $_GET["qua"];
		$qui = $_GET["qui"];
		$sex = $_GET["sex"];
		$sab = $_GET["sab"];

		$msg = $_GET["mensagem"];
	*/

		$tem_erro = false; // variavel de controle para mostrar as informações no final

		// validando as informações vindas do formulário
		// a função empty retorna true se a variavel estiver vazia

		if (isset($_GET["nome"]) && !empty($_GET["nome"])){
			$nome = $_GET["nome"];
		} else {
			echo ("Preencha o nome <br>");
			$tem_erro = true;
		}
		
		if (isset($_GET["nasc"]) && !empty($_GET["nasc"])){
			$nascimento = $_GET["nasc"];
		} else {
			echo ("Preencha a data de nascimento <br>");
			$tem_erro = true;
		}

		if (isset($_GET["cpf"]) && !empty($_GET["cpf"])){
			$cpf = $_GET["cpf"];
		} else {
			echo ("Preencha o CPF <br>");
			$tem_erro = true;
		}

		if (isset($_GET["fone"]) && !empty($_GET["fone"])){
			$telefone = $_GET["fone"];
		} else {
			echo ("Preencha o telefone <br>");
			$tem_erro = true;
		}


		if (isset($_GET["email"]) && !empty($_GET["email"])){
			$email = $_GET["email"];
		} else {
			echo ("Preencha o email <br>");
			$tem_erro = true;
		}

		if (isset($_GET["sexo"]) && !empty($_GET["sexo"])){
			$sexo = $_GET["sexo"];
		} else {
			echo ("Preencha o sexo <br>");
			$tem_erro = true;
		}

		// se a variavel tem_erro for false, significa que não foi alterada dentro dos testes acima, ou seja, tudo está preenchido corretamente
		if ($tem_erro == false) {
			echo ("Os dados enviados foram: <br>");
			echo ("Nome: $nome <br>");
			echo ("Data de nascimento: $nascimento <br>");
			echo ("CPF: $cpf <br>");
			echo ("Email: $email <br>");
			echo ("Telefone: $telefone <br>");
			echo ("Sexo: $sexo <br>");
			// validando os inputs checkbox
			if ($_GET["seg"])
				echo ("Segunda-feira ");
			if ($_GET["ter"])
				echo ("Terça-feira ");
			if ($_GET["qua"])
				echo ("Quarta-feira ");
			if ($_GET["qui"])
				echo ("Quinta-feira ");
			if ($_GET["sex"])
				echo ("Sexta-feira ");
			if ($_GET["sab"])
				echo ("Sábado ");

			echo ("Mensagem enviada: $msg <br>");
		}
	}
 

?>