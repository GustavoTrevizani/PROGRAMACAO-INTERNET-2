<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $data_cadastro = $_POST['data_cadastro'];

    $tem_erro = false; 

    if (isset($_POST["nome"]) && !empty($_POST["nome"])){
            $nome = $_POST["nome"];
        } else {
            echo ("Preencha o nome do membro <br>");
            $tem_erro = true;
        }

    if (isset($_POST["nascimento"]) && !empty($_POST["nascimento"])){
            $nascimento = $_POST["nascimento"];
        } else {
            echo ("Preencha o nascimento do membro <br>");
            $tem_erro = true;
        }

    if (isset($_POST["data_cadastro"]) && !empty($_POST["data_cadastro"])){
            $data_cadastro = $_POST["data_cadastro"];
        } else {
            echo ("Preencha a data de cadastro do membro <br>");
            $tem_erro = true;
        }

    if ($tem_erro == false) {
            // mysql_connect é a função responsável pela conexão com o banco de dados: os 4 paramestros são: IP do servidor do BD, usuario, senha e nome da base de dados
            $conn = mysqli_connect("127.0.0.1", "root", "", "biblioteca");

            if ($conn) {
                // conexao com sucesso 

            echo    $sql = "INSERT INTO membros (nome, nascimento, data_cadastro) VALUES ('$nome', '$nascimento', '$data_cadastro')";

                // executa a consulta
                if (mysqli_query($conn, $sql) )
                    echo ("<script>alert('Mensagem enviada com sucesso!'); </script>");
                else 
                    echo ("Houve um erro ao enviar a mensagem");
            } else {
                die("Houve um erro ao conectar com o banco de dados");
            }

            echo "<h2>Dados Recebidos:</h2>";
            echo "<h3>Membro:</h3>";
            echo "Nome: " . $nome . "<br>";
            echo "Data de Nascimento: " . $nascimento . "<br>";
            echo "Data de Cadastro: " . $data_cadastro . "<br><br>";
            
    }

}
?>
