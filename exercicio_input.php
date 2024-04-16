<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		input:invalid{
			background-color: red;
		}
	</style>
</head>
<body>
	<form method="GET" action="processa_mensagem.php">
		<fieldset>
			<legend>Formulário</legend>
			<br>Nome: <input type="text" name="nome"><br>
			<br>Data de nascimento: <input type="date" name="nasc"><br>
			<br>CPF: <input type="text" maxlength="15" placeholder="035.357.841-97" name="cpf"><br>
			<br>Telefone: <input type="tel" maxlength="15" placeholder="(51) 9 1234 5678" name="fone"><br>
			<br>E-mail: <input type="email" name="email"><br>
			<br>Sexo:
				<input type="radio" name="sexo"> Feminino
				<input type="radio" name="sexo"> Masculino<br>
			<br>Horário que o atendente poderá entrar em contato: <input type="time" name="horario"><br>
			<br>Dia da semana que o atendente poderá entrar em contato:<br>
				<div>
					<input type="checkbox" name="seg">
					<label for="segunda">Segunda-feira</label>
				</div>
				<div>
					<input type="checkbox" name="ter">
					<label for="terça">Terça-feira</label>
				</div>
				<div>
					<input type="checkbox" name="quar">
					<label for="quarta">Quarta-feira</label>
				</div>
				<div>
					<input type="checkbox" name="qui">
					<label for="quinta">Quinta-feira</label>
				</div> 
				<div>
					<input type="checkbox" name="sex">
					<label for="sexta">Sexta-feira</label>
				</div>
				<div>
					<input type="checkbox" name="sab">
					<label for="sabado">Sábado</label>
				</div>
				<div>
					<input type="checkbox" name="dom">
					<label for="domingo">Domingo</label>
				</div>
				Qual o seu problema? <br>
			<br>Mensagem: <br><textarea rows="20" cols="50" name="mensagem"></textarea>
			<br><button>Enviar</button>
		</fieldset>
	</form>
</body>
</html>
