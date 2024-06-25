<!-- formulario.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Gerenciamento da Biblioteca</title>
</head>
<body>
    <h2>Formulário de Gerenciamento da Biblioteca</h2>
    <form action="processa_formulario.php" method="post">
        <!-- Campos para inserir autor -->
        <h3>Inserir Autor</h3>
        Nome: <input type="text" name="autor_nome" required><br>
        Data de Nascimento: <input type="date" name="autor_nascimento" required><br><br>
        
        <!-- Campos para inserir livro -->
        <h3>Inserir Livro</h3>
        Título: <input type="text" name="livro_titulo" required><br>
        Ano de Publicação: <input type="number" name="livro_ano_publicacao" required><br>
        Gênero: <input type="text" name="livro_genero" required><br>
        ID do Autor: <input type="number" name="livro_id_autor" required><br><br>
        
        <!-- Campos para inserir membro -->
        <h3>Inserir Membro</h3>
        Nome: <input type="text" name="membro_nome" required><br>
        Data de Nascimento: <input type="date" name="membro_nascimento" required><br>
        Data de Cadastro: <input type="date" name="membro_data_cadastro" required><br><br>
        
        <!-- Campos para realizar empréstimo -->
        <h3>Realizar Empréstimo</h3>
        ID do Livro: <input type="number" name="emprestimo_id_livro" required><br>
        ID do Membro: <input type="number" name="emprestimo_id_membro" required><br>
        Data do Empréstimo: <input type="date" name="emprestimo_data_emprestimo" required><br>
        Data de Devolução: <input type="date" name="emprestimo_data_devolucao" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
