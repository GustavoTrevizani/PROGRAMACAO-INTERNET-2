<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Verifica se o ID do livro foi fornecido na URL
if (isset($_GET['idlivros']) && !empty($_GET['idlivros'])) {
    $idlivros = intval($_GET['idlivros']);

    // Busca os dados do livro no banco de dados
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

// Fecha a conexão com o banco de dados
mysqli_close($conn)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
</head>
<body>
    <h1>Editar Livro</h1>

    <!-- Formulário para editar livro -->
    <form action="atualizar_livro.php" method="POST">
        <input type="hidden" name="idlivros" value="<?php echo $idlivros; ?>">
        <br>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" required><br>
        <br>
        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="number" name="ano_publicacao" id="ano_publicacao" value="<?php echo $ano_publicacao; ?>" required><br>
        <br>
        <label for="genero">Gênero:</label>
        <input type="text" name="genero" id="genero" value="<?php echo $genero; ?>" required><br>
        <br>
        <label for="id_autor">ID do Autor:</label>
        <input type="number" name="id_autor" id="id_autor" value="<?php echo $id_autor; ?>" required><br>
        <br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>