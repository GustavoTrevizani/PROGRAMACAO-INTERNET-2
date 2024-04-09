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
			<legend>Exemplo de inputs do HTML
			</legend>
			Text: <input type="text"> <br>
			Quais destes serviços de streaming você utiliza?(checkbox)
		<div>
			<input type="checkbox">
			<label for="netflix">Netflix</label>
		</div>
		<div>
			<input type="checkbox">
			<label for="amazon">Amazon</label>
		</div>
		<div>
			<input type="checkbox">
			<label for="deezer">Deezer</label>
		</div>
		<div>
			<input type="checkbox">
			<label for="spotify">Spotify</label>
		</div> 
		Para qual time você torce? (radio) <br>
		<input type="radio" name="time"> Caxias
		<input type="radio" name="time"> Grêmio
		<input type="radio" name="time"> Internacional
		<input type="radio" name="time"> Juventude

		<br>
		Que dia é hoje? <br>
		Date: <input type="date"> <br>

		E-mail <input type="email">

		<br> Qual sua cor favorita?
		<input type="color">

		<br>
		Escolha um número:
		Number <input type="number">

		<br>
		Que número você calça?
		Range <input type="range" value="38" min="30" max="58" oninput="this.nextElementSibling.value=this.value">
		<output>38</output>

		<br>

		Qual seu telefone?
		Tel <input type="tel" maxlength="15" placeholder="(51) 9 1234 5678">

		<br>

		Que horas são: (time) <br>
		<input type="time">

		<br>

		Qual é o seu Instagram? (url) <br>
		<input type="url">

		<br> Envie sua foto (file)
		<input type="file" accept="image/jpeg"> 

	</fieldset>
	</form>
</body>
</html>