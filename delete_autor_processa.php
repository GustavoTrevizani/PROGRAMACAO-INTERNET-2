<?php
include('conexao.php');

if (isset($_POST['idautores']) && !empty($_POST['idautores'])) {
    $idautores = intval($_POST['idautores']);

    $sql = "DELETE FROM autores WHERE idautores = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idautores);

    if ($stmt->execute()) {
        echo "Autor excluído com sucesso!";
    } else {
        echo "Erro ao excluir autor: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID do autor não fornecido!";
}

mysqli_close($conn);
?>
