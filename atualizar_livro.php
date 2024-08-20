<?php
// Incluir o arquivo de conexão
include('conexao.php');

if (isset($_POST['atualizar'])) {

    // Inicializa variáveis
    $idlivros = intval($_POST['idlivros']);
    $titulo = $_POST['titulo'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $genero = $_POST['genero'];
    $id_autor = $_POST['id_autor'];

    // Validação simples
    if (!empty($titulo) && !empty($ano_publicacao) && !empty($genero) && !empty($id_autor)) {
        // Atualizando os dados no banco de dados
        $sql = "UPDATE livros SET titulo = '$titulo', ano_publicacao = '$ano_publicacao', genero = '$genero', id_autor = '$id_autor' WHERE idlivros = $idlivros";

        if ($conn->query($sql)) {
            echo "<script>alert('Livro atualizado com sucesso!');</script>";
            echo "<script>window.location.href = 'exibir_livros.php';</script>";
        } else {
            echo "Erro ao atualizar o livro: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}

$conn->close();
?>
