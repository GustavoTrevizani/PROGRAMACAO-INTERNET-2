<?php
// Conectando ao banco de dados
include('conexao.php');

// Verifica se o ID do autor foi fornecido na URL
if (isset($_GET['idautores']) && !empty($_GET['idautores'])) {
    $idautores = intval($_GET['idautores']);

    // Busca os dados do autor no banco de dados
    $sql = "SELECT * FROM autores WHERE idautores = $idautores";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $autor = mysqli_fetch_array($resultado);
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

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Autor</title>
</head>
<body>
    <h1>Editar Autor</h1>

    <!-- Formulário para editar autor -->
    <form action="atualizar_autor.php" method="POST">
        <input type="hidden" name="idautores" value="<?php echo $idautores; ?>">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required><br>
        <br>
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento; ?>" required><br>
        <br>    
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>