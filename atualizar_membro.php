<?php
// Incluir o arquivo de conexão
include('conexao.php');

if (isset($_POST['atualizar'])) {

    // Inicializa variáveis
    $idmembros = intval($_POST['idmembros']);
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $data_cadastro = $_POST['data_cadastro'];

    // Validação simples
    if (!empty($nome) && !empty($nascimento) && !empty($data_cadastro)) {
        // Atualizando os dados no banco de dados
        $sql = "UPDATE membros SET nome = '$nome', nascimento = '$nascimento', data_cadastro = '$data_cadastro' WHERE idmembros = $idmembros";

        if ($conn->query($sql)) {
            echo "<script>alert('Membro atualizado com sucesso!');</script>";
            echo "<script>window.location.href = 'exibir_membros.php';</script>";
        } else {
            echo "Erro ao atualizar o membro: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}

$conn->close();
?>
