<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário para inserir empréstimo</title>
</head>
<body>
    <h2>Formulário para inserir empréstimo</h2>
    <form method="POST" action="processa_formulario_emprestimos.php">
        <!-- Campos para inserir empréstimo -->
        <h3>Inserir Empréstimo</h3>
        ID do Membro: <input type="number" name="id_membros" required><br>
        ID do Livro: <input type="number" name="id_livros" required><br>
        Data de Empréstimo: <input type="date" name="data_emprestimo" required><br>
        Data de Devolução: <input type="date" name="data_devolucao"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>