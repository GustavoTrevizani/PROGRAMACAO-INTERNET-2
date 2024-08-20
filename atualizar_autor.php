<?php
if (isset($_POST['atualizar'])) {

    // Inicializa variáveis
    $idautores = "";
    $nome = "";
    $nascimento = "";

    $tem_erro = false; // Variável para controlar erros

    // Validação dos inputs
    if (isset($_POST['idautores']) && !empty($_POST['idautores'])) {
        $idautores = intval($_POST['idautores']);
    } else {
        echo "ID do autor não fornecido <br>";
        $tem_erro = true;
    }

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = $_POST['nome'];
    } else {
        echo "Preencha o nome <br>";
        $tem_erro = true;
    }

    if (isset($_POST['nascimento']) && !empty($_POST['nascimento'])) {
        $nascimento = $_POST['nascimento'];
    } else {
        echo "Preencha a data de nascimento <br>";
        $tem_erro = true;
    }

    // Se não houver erros, realiza a atualização
    if (!$tem_erro) {
        // Conectando ao banco de dados
        $conn = mysqli_connect("127.0.0.1", "root", "", "biblioteca");

        if ($conn) {
            // Preparando e executando a atualização
            $sql = "UPDATE autores SET nome = '$nome', nascimento = '$nascimento' WHERE idautores = $idautores";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Autor atualizado com sucesso!');</script>";
                echo "<script>window.location.href = 'exibir_autores.php';</script>"; // Redireciona para a lista de autores
            } else {
                echo "Erro ao atualizar o autor: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        } else {
            die("Erro ao conectar ao banco de dados");
        }
    }
} else {
    echo "Ação não permitida.";
}
?>
