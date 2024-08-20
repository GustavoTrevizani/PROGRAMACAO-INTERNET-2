<?php
include('conexao.php');

if (isset($_POST['idempréstimos']) && !empty($_POST['idempréstimos'])) {
    $idempréstimos = intval($_POST['idempréstimos']);

    $sql = "DELETE FROM emprestimos WHERE idempréstimos = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idempréstimos);

    if ($stmt->execute()) {
        echo "Empréstimo excluído com sucesso!";
    } else {
        echo "Erro ao excluir empréstimo: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID do empréstimo não fornecido!";
}

mysqli_close($conn);
?>
