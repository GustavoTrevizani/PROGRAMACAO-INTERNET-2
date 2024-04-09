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
	<form>
		<fieldset>
			<legend>Formulário</legend>
			<br>Nome: <input type="text"><br>
			<br>Data de nascimento: <input type="date"><br>
			<br>CPF: <input type="text" maxlength="15" placeholder="035.357.841-97"><br>
			<br>Telefone: <input type="tel" maxlength="15" placeholder="(51) 9 1234 5678"><br>
			<br>E-mail: <input type="email"><br>
			<br>Sexo:
				<input type="radio" name="sexo"> Feminino
				<input type="radio" name="sexo"> Masculino<br>
			<br>Horário que o atendente poderá entrar em contato: <input type="time"><br>
			<br>Dia da semana que o atendente poderá entrar em contato:<br>
				<div>
					<input type="checkbox">
					<label for="segunda">Segunda-feira</label>
				</div>
				<div>
					<input type="checkbox">
					<label for="terça">Terça-feira</label>
				</div>
				<div>
					<input type="checkbox">
					<label for="quarta">Quarta-feira</label>
				</div>
				<div>
					<input type="checkbox">
					<label for="quinta">Quinta-feira</label>
				</div> 
				<div>
					<input type="checkbox">
					<label for="sexta">Sexta-feira</label>
				</div>
				<div>
					<input type="checkbox">
					<label for="sabado">Sábado</label>
				</div>
				<div>
					<input type="checkbox">
					<label for="domingo">Domingo</label>
				</div>
			<br>Mensagem: <br><textarea rows="20" cols="50" name="mensagem"></textarea>
		</fieldset>
	</form>
</body>
</html>
