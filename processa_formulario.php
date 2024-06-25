<!-- processa_formulario.php -->
<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para limpar os dados recebidos
function limpar_dados($dados) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(strip_tags(trim($dados))));
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Verifica quais campos foram preenchidos e processa a inserção correspondente
    
    // Inserir Autor
    if (!empty($_POST['autor_nome']) && !empty($_POST['autor_nascimento'])) {
        $autor_nome = limpar_dados($_POST['autor_nome']);
        $autor_nascimento = limpar_dados($_POST['autor_nascimento']);
        
        $sql = "INSERT INTO Autores (nome, nascimento) VALUES ('$autor_nome', '$autor_nascimento')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Autor inserido com sucesso<br>";
        } else {
            echo "Erro ao inserir autor: " . $conn->error . "<br>";
        }
    }
    
    // Inserir Livro
    if (!empty($_POST['livro_titulo']) && !empty($_POST['livro_ano_publicacao']) && !empty($_POST['livro_genero']) && !empty($_POST['livro_id_autor'])) {
        $livro_titulo = limpar_dados($_POST['livro_titulo']);
        $livro_ano_publicacao = limpar_dados($_POST['livro_ano_publicacao']);
        $livro_genero = limpar_dados($_POST['livro_genero']);
        $livro_id_autor = limpar_dados($_POST['livro_id_autor']);
        
        $sql = "INSERT INTO Livros (titulo, ano_publicacao, genero, id_autor) 
                VALUES ('$livro_titulo', '$livro_ano_publicacao', '$livro_genero', '$livro_id_autor')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Livro inserido com sucesso<br>";
        } else {
            echo "Erro ao inserir livro: " . $conn->error . "<br>";
        }
    }
    
    // Inserir Membro
    if (!empty($_POST['membro_nome']) && !empty($_POST['membro_nascimento']) && !empty($_POST['membro_data_cadastro'])) {
        $membro_nome = limpar_dados($_POST['membro_nome']);
        $membro_nascimento = limpar_dados($_POST['membro_nascimento']);
        $membro_data_cadastro = limpar_dados($_POST['membro_data_cadastro']);
        
        $sql = "INSERT INTO Membros (nome, nascimento, data_cadastro) 
                VALUES ('$membro_nome', '$membro_nascimento', '$membro_data_cadastro')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Membro inserido com sucesso<br>";
        } else {
            echo "Erro ao inserir membro: " . $conn->error . "<br>";
        }
    }
    
    // Realizar Empréstimo
    if (!empty($_POST['emprestimo_id_livro']) && !empty($_POST['emprestimo_id_membro']) && !empty($_POST['emprestimo_data_emprestimo']) && !empty($_POST['emprestimo_data_devolucao'])) {
        $emprestimo_id_livro = limpar_dados($_POST['emprestimo_id_livro']);
        $emprestimo_id_membro = limpar_dados($_POST['emprestimo_id_membro']);
        $emprestimo_data_emprestimo = limpar_dados($_POST['emprestimo_data_emprestimo']);
        $emprestimo_data_devolucao = limpar_dados($_POST['emprestimo_data_devolucao']);
        
        $sql = "INSERT INTO Emprestimos (id_livro, id_membro, data_emprestimo, data_devolucao) 
                VALUES ('$emprestimo_id_livro', '$emprestimo_id_membro', '$emprestimo_data_emprestimo', '$emprestimo_data_devolucao')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Empréstimo realizado com sucesso<br>";
        } else {
            echo "Erro ao realizar empréstimo: " . $conn->error . "<br>";
        }
    }
}

$conn->close();
?>
