<?php
include('conexao.php');

if (isset($_POST['idlivros']) && !empty($_POST['idlivros'])) {
    $idlivros = intval($_POST['idlivros']);

    $sql = "DELETE FROM livros WHERE idlivros = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idlivros);

    if ($stmt->execute()) {
        echo "Livro excluído com sucesso!";
    } else {
        echo "Erro ao excluir livro: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID do livro não fornecido!";
}

mysqli_close($conn);
?>
