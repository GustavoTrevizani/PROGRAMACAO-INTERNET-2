<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Verifica se o ID do empréstimo foi fornecido na URL
if (isset($_GET['id_emprestimos']) && !empty($_GET['id_emprestimos'])) {
    $id_emprestimo = intval($_GET['id_emprestimos']);

    // Busca os dados do empréstimo no banco de dados
    $sql = "SELECT * FROM emprestimos WHERE id_emprestimos = $id_emprestimo";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $emprestimo = $resultado->fetch_assoc();
        $id_livros = $emprestimo['id_livros'];
        $id_membros = $emprestimo['id_membros'];
        $data_emprestimo = $emprestimo['data_emprestimo'];
        $data_devolucao = $emprestimo['data_devolucao'];
    } else {
        echo "Empréstimo não encontrado!";
        mysqli_close($conn);
        exit;
    }
} else {
    echo "ID do empréstimo não fornecido!";
    mysqli_close($conn);
    exit;
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Empréstimo</title>
</head>
<body>
    <h1>Editar Empréstimo</h1>

    <!-- Formulário para editar empréstimo -->
    <form action="atualizar_emprestimo.php" method="POST">
        <input type="hidden" name="id_emprestimos" value="<?php echo $id_emprestimo; ?>">
        
        <label for="id_livros">ID do Livro:</label>
        <input type="number" name="id_livros" id="id_livros" value="<?php echo $id_livros; ?>" required><br>
        <br>
        <label for="id_membros">ID do Membro:</label>
        <input type="number" name="id_membros" id="id_membros" value="<?php echo $id_membros; ?>" required><br>
        <br>
        <label for="data_emprestimo">Data de Empréstimo:</label>
        <input type="date" name="data_emprestimo" id="data_emprestimo" value="<?php echo $data_emprestimo; ?>" required><br>
        <br>
        <label for="data_devolucao">Data de Devolução:</label>
        <input type="date" name="data_devolucao" id="data_devolucao" value="<?php echo $data_devolucao; ?>" required><br>
        <br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>
