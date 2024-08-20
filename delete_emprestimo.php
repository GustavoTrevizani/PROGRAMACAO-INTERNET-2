<?php
include('conexao.php');

if (isset($_GET['idempréstimos']) && !empty($_GET['idempréstimos'])) {
    $idempréstimos = intval($_GET['idempréstimos']);

    $sql = "SELECT * FROM emprestimos WHERE idempréstimos = $idempréstimos";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $emprestimo = $resultado->fetch_assoc();
        $data_emprestimo = $emprestimo['data_emprestimo'];
        $id_livros = $emprestimo['id_livros'];
        $id_membros = $emprestimo['id_membros'];
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

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Empréstimo</title>
</head>
<body>
    <h1>Excluir Empréstimo</h1>

    <form action="delete_emprestimo_processa.php" method="POST">
        <input type="hidden" name="idempréstimos" value="<?php echo $idempréstimos; ?>">
        <h3>Tem certeza que deseja excluir o empréstimo com data "<?php echo $data_emprestimo; ?>"?</h3>
        <p>ID do Livro: <?php echo htmlspecialchars($id_livros); ?></p>
        <p>ID do Membro: <?php echo htmlspecialchars($id_membros); ?></p>
        <br>
        <input type="submit" name="deletar" value="Deletar">
    </form>
</body>
</html>
