<?php
	// arquivo processa_mensagem.php
	$nome = $_GET["nome"];
	$nascimento = $_GET["nasc"];
	$cpf = $_GET["cpf"];
	$telefone = $_GET["fone"];
	$email = $_GET["email"];
	$sexo = $_GET["sexo"];

	// dias da semana
	/*$seg = $_GET["seg"];
	$ter = $_GET["ter"];
	$qua = $_GET["qua"];
	$qui = $_GET["qui"];
	$sex = $_GET["sex"];
	$sab = $_GET["sab"];
	$dom = $_GET["dom"];

	$mensagem = $_GET["mensagem"];*/

	$tem_erro = false; // variavel de controle para mostrar a sinformações no final

	// validando as informações vindas do formulário
	if (empty($nome) == true){
		echo("Preencha o nome <br>");
		$tem_erro = true;
	}

	if (empty($nascimento)) {
		echo ("Preencha a data de nascimento <br>");
		$tem_erro = true;
	}

	if (empty($cpf)) {
		echo ("Preencha o CPF <br>");
		$tem_erro = true;
	}

	if (empty($telefone)) {
		echo ("Preencha o telefone <br>");
		$tem_erro = true;
	}

	if (empty($email)) {
		echo ("Preencha o email <br>");
		$tem_erro = true;
	}

	if (empty($sexo)) {
		echo ("Preencha o sexo <br>");
		$tem_erro = true;
	}

	if (!$tem_erro) {
		echo ("Os dados enviados foram: <br>");
		echo ("Nome: $nome <br>");
		echo ("Data de nascimento: $nascimento <br>");
		echo ("CPF: $cpf <br>");
		echo ("Email: $email <br>");
		echo ("Telefone: $telefone <br>");
		echo ("Sexo: $sexo <br>");
		echo ("Mensagem enviada: $mensagem <br>");
	}
?>
