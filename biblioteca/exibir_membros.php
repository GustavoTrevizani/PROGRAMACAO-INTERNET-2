<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Consulta SQL para recuperar os dados da tabela 'membros'
$sql = "SELECT * FROM membros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exibir Membros</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Data de Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['idmembros']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['nascimento']; ?></td>
                <td><?php echo $row['data_cadastro']; ?></td>
            </tr>
            <?php } } else { ?>
            <tr>
                <td colspan="4">Nenhum membro encontrado</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
