<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário para inserir autor</title>
</head>
<body>
    <h2>Formulário para inserir autor</h2>
    <form method="POST" action="processa_formulario_autor.php">
        <!-- Campos para inserir autor -->
        <h3>Inserir Autor</h3>
        Nome: <input type="text" name="nome"><br>
        Data de Nascimento: <input type="date" name="nascimento"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
