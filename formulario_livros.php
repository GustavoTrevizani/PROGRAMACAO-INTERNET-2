<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário para inserir livros</title>
</head>
<body>
    <h2>Formulário para inserir livros</h2>
    <form method="POST" action="processa_formulario_livro.php">
       
        <h3>Inserir Livro</h3>
        Título: <input type="text" name="titulo"><br>
        Ano de Publicação: <input type="number" name="ano_publicacao"><br>
        Gênero: <input type="text" name="genero"><br>
        ID do Autor: <input type="number" name="id_autor"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
