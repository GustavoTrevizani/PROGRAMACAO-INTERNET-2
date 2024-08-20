<?php
include('conexao.php');

if (isset($_GET['idautores']) && !empty($_GET['idautores'])) {
    $idautores = intval($_GET['idautores']);

    $sql = "SELECT * FROM autores WHERE idautores = $idautores";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $autor = $resultado->fetch_assoc();
        $nome = $autor['nome'];
        $nascimento = $autor['nascimento'];
    } else {
        echo "Autor não encontrado!";
        mysqli_close($conn);
        exit;
    }
} else {
    echo "ID do autor não fornecido!";
    mysqli_close($conn);
    exit;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Autor</title>
</head>
<body>
    <h1>Excluir Autor</h1>

    <form action="delete_autor_processa.php" method="POST">
        <input type="hidden" name="idautores" value="<?php echo $idautores; ?>">
        <h3>Tem certeza que deseja excluir o autor "<?php echo $nome; ?>"?</h3>
        <br>
        <input type="submit" name="deletar" value="Deletar">
    </form>
</body>
</html>
