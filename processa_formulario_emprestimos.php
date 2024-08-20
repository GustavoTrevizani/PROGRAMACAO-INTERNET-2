<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_livros = $_POST['id_livros'];
    $id_membros = $_POST['id_membros'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    $tem_erro = false;

    if (isset($_POST["id_livros"]) && !empty($_POST["id_livros"])){
        $id_livros = $_POST["id_livros"];
    } else {
        echo ("Preencha o ID do livro <br>");
        $tem_erro = true;
    }

    if (isset($_POST["id_membros"]) && !empty($_POST["id_membros"])){
        $id_membros = $_POST["id_membros"];
    } else {
        echo ("Preencha o ID do membro <br>");
        $tem_erro = true;
    }

    if (isset($_POST["data_emprestimo"]) && !empty($_POST["data_emprestimo"])){
        $data_emprestimo = $_POST["data_emprestimo"];
    } else {
        echo ("Preencha a data de empréstimo <br>");
        $tem_erro = true;
    }

    // Data de devolução é opcional, então não verificamos erro aqui

    if ($tem_erro == false) {
        // Conexão com o banco de dados
        $conn = mysqli_connect("127.0.0.1", "root", "", "biblioteca");

        if ($conn) {
            // Conexão com sucesso 

            // Verificar se já existe um empréstimo para o mesmo id_livros e id_membros
            $verificar_emprestimo = mysqli_query($conn, "SELECT * FROM emprestimos WHERE id_livros = '$id_livros' AND id_membros = '$id_membros'");
            if (mysqli_num_rows($verificar_emprestimo) > 0) {
                echo ("Já existe um empréstimo registrado para este livro e membro <br>");
            } else {
                // Inserir o novo empréstimo
                $sql = "INSERT INTO emprestimos (id_livros, id_membros, data_emprestimo, data_devolucao) VALUES ('$id_livros', '$id_membros', '$data_emprestimo', '$data_devolucao')";
                
                if (mysqli_query($conn, $sql)) {
                    echo ("<script>alert('Empréstimo registrado com sucesso!');</script>");
                } else {
                    echo ("Houve um erro ao registrar o empréstimo: " . mysqli_error($conn));
                }
            }
        } else {
            die("Houve um erro ao conectar com o banco de dados");
        }

        echo "<h2>Dados Recebidos:</h2>";
        echo "<h3>Empréstimo:</h3>";
        echo "ID do Livro: " . $id_livros . "<br>";
        echo "ID do Membro: " . $id_membros . "<br>";
        echo "Data de Empréstimo: " . $data_emprestimo . "<br>";
        echo "Data de Devolução: " . $data_devolucao . "<br><br>";
    }
}
?>