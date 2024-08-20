<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Consulta SQL para recuperar os dados da tabela 'livros'
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exibir Livros</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Ano de publicação</th>
                <th>Genero</th>
                <th>ID autor</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['idlivros']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['ano_publicacao']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['id_autor']; ?></td>
            </tr>
            <?php } } else { ?>
            <tr>
                <td colspan="5">Nenhum livro encontrado</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
