<?php
include('conexao.php');

if (isset($_POST['idmembros']) && !empty($_POST['idmembros'])) {
    $idmembros = intval($_POST['idmembros']);

    $sql = "DELETE FROM membros WHERE idmembros = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idmembros);

    if ($stmt->execute()) {
        echo "Membro excluído com sucesso!";
    } else {
        echo "Erro ao excluir membro: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID do membro não fornecido!";
}

mysqli_close($conn);
?>
