<?php
include('conexao.php');

if (isset($_GET['idmembros']) && !empty($_GET['idmembros'])) {
    $idmembros = intval($_GET['idmembros']);

    $sql = "SELECT * FROM membros WHERE idmembros = $idmembros";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $membro = $resultado->fetch_assoc();
        $nome = $membro['nome'];
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

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Membro</title>
</head>
<body>
    <h1>Excluir Membro</h1>

    <form action="delete_membro_processa.php" method="POST">
        <input type="hidden" name="idmembros" value="<?php echo $idmembros; ?>">
        <h3>Tem certeza que deseja excluir o membro "<?php echo $nome; ?>"?</h3>
        <br>
        <input type="submit" name="deletar" value="Deletar">
    </form>
</body>
</html>
