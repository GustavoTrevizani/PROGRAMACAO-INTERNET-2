<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Consulta SQL para recuperar os dados da tabela 'autores'
$sql = "SELECT * FROM autores";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exibir Autores</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['idautores']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['nascimento']; ?></td>
            </tr>
            <?php } } else { ?>
            <tr>
                <td colspan="3">Nenhum autor encontrado</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
