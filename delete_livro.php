<?php
include('conexao.php');

if (isset($_GET['idlivros']) && !empty($_GET['idlivros'])) {
    $idlivros = intval($_GET['idlivros']);

    $sql = "SELECT * FROM livros WHERE idlivros = $idlivros";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $livro = $resultado->fetch_assoc();
        $titulo = $livro['titulo'];
        $ano_publicacao = $livro['ano_publicacao'];
        $genero = $livro['genero'];
        $id_autor = $livro['id_autor'];
    } else {
        echo "Livro não encontrado!";
        mysqli_close($conn);
        exit;
    }
} else {
    echo "ID do livro não fornecido!";
    mysqli_close($conn);
    exit;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Livro</title>
</head>
<body>
    <h1>Excluir Livro</h1>

    <form action="delete_livro_processa.php" method="POST">
        <input type="hidden" name="idlivros" value="<?php echo $idlivros; ?>">
        <h3>Tem certeza que deseja excluir o livro "<?php echo $titulo; ?>"?</h3>
        <p>Ano de Publicação: <?php echo $ano_publicacao; ?></p>
        <p>Gênero: <?php echo $genero; ?></p>
        <p>ID do Autor: <?php echo $id_autor; ?></p>
        <br>
        <input type="submit" name="deletar" value="Deletar">
    </form>
</body>
</html>
