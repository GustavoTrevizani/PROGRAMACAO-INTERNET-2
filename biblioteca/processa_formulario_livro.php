<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $genero = $_POST['genero'];
    $id_autor = $_POST['id_autor'];

    $tem_erro = false; 

    if (isset($_POST["titulo"]) && !empty($_POST["titulo"])){
            $titulo = $_POST["titulo"];
        } else {
            echo ("Preencha o titulo do livro <br>");
            $tem_erro = true;
        }

    if (isset($_POST["ano_publicacao"]) && !empty($_POST["ano_publicacao"])){
            $ano_publicacao = $_POST["ano_publicacao"];
        } else {
            echo ("Preencha o ano de publicacao do livro <br>");
            $tem_erro = true;
        }

    if (isset($_POST["genero"]) && !empty($_POST["genero"])){
            $genero = $_POST["genero"];
        } else {
            echo ("Preencha o genero do livro <br>");
            $tem_erro = true;
        }

    if (isset($_POST["id_autor"]) && !empty($_POST["id_autor"])){
            $id_autor = $_POST["id_autor"];
        } else {
            echo ("Preencha o id do autor do livro <br>");
            $tem_erro = true;
        }

    if ($tem_erro == false) {
            // mysql_connect é a função responsável pela conexão com o banco de dados: os 4 paramestros são: IP do servidor do BD, usuario, senha e nome da base de dados
            $conn = mysqli_connect("127.0.0.1", "root", "", "biblioteca");

            if ($conn) {
                // conexao com sucesso 

            echo    $sql = "INSERT INTO livros (titulo, ano_publicacao, genero, id_autor) VALUES ('$titulo', '$ano_publicacao', '$genero', '$id_autor')";

                // executa a consulta
                if (mysqli_query($conn, $sql) )
                    echo ("<script>alert('Mensagem enviada com sucesso!'); </script>");
                else 
                    echo ("Houve um erro ao enviar a mensagem");
            } else {
                die("Houve um erro ao conectar com o banco de dados");
            }

    echo "<h2>Dados Recebidos:</h2>";
    echo "<h3>Livro:</h3>";
    echo "Título: " . $titulo . "<br>";
    echo "Ano de Publicação: " . $ano_publicacao . "<br>";
    echo "Gênero: " . $genero . "<br>";
    echo "ID do Autor: " . $id_autor . "<br><br>";

    }
}
?>
