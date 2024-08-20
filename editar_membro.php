<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Verifica se o ID do membro foi fornecido na URL
if (isset($_GET['idmembros']) && !empty($_GET['idmembros'])) {
    $idmembros = intval($_GET['idmembros']);

    // Busca os dados do membro no banco de dados
    $sql = "SELECT * FROM membros WHERE idmembros = $idmembros";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $membro = $resultado->fetch_assoc();
        $nome = $membro['nome'];
        $nascimento = $membro['nascimento'];
        $data_cadastro = $membro['data_cadastro'];
    } else {
        echo "Membro não encontrado!";
        mysqli_close($conn);
        exit;
    }
} else {
    echo "ID do membro não fornecido!";
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
    <title>Editar Membro</title>
</head>
<body>
    <h1>Editar Membro</h1>

    <!-- Formulário para editar membro -->
    <form action="atualizar_membro.php" method="POST">
        <input type="hidden" name="idmembros" value="<?php echo $idmembros; ?>">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required><br>
        <br>
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento; ?>" required><br>
        <br>
        <label for="data_cadastro">Data de Cadastro:</label>    
        <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo $data_cadastro; ?>" required><br>
        <br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>
