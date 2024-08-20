<?php
// Incluir o arquivo de conexão
include('conexao.php');

if (isset($_POST['atualizar'])) {

    // Inicializa variáveis
    $id_emprestimos = intval($_POST['id_emprestimos']);
    $id_livros = $_POST['id_livros'];
    $id_membros = $_POST['id_membros'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    // Validação simples
    if (!empty($id_livros) && !empty($id_membros) && !empty($data_emprestimo) && !empty($data_devolucao)) {
        // Atualizando os dados no banco de dados
        $sql = "UPDATE emprestimos SET id_livros = '$id_livros', id_membros = '$id_membros', data_emprestimo = '$data_emprestimo', data_devolucao = '$data_devolucao' WHERE id_emprestimos = $id_emprestimos";

        if ($conn->query($sql)) {
            echo "<script>alert('Empréstimo atualizado com sucesso!');</script>";
            echo "<script>window.location.href = 'exibir_emprestimos.php';</script>";
        } else {
            echo "Erro ao atualizar o empréstimo: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}

$conn->close();
?>
