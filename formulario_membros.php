<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário para inserir membros</title>
</head>
<body>
    <h2>Formulário para inserir membros</h2>
    <form method="POST" action="processa_formulario_membros.php">
    
        <h3>Inserir Membro</h3>
        Nome: <input type="text" name="nome"><br>
        Data de Nascimento: <input type="date" name="nascimento"><br>
        Data de Cadastro: <input type="date" name="data_cadastro"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
