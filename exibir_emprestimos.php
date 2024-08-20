<?php
// Incluir o arquivo de conexão
include('conexao.php');

// Consulta SQL para recuperar os dados da tabela 'emprestimos'
$sql = "SELECT * FROM emprestimos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exibir Empréstimos</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID Livro</th>
                <th>ID Membro</th>
                <th>Data de Empréstimo</th>
                <th>Data de Devolução</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id_livros']; ?></td>
                <td><?php echo $row['id_membros']; ?></td>
                <td><?php echo $row['data_emprestimo']; ?></td>
                <td><?php echo $row['data_devolucao']; ?></td>
            </tr>
            <?php } } else { ?>
            <tr>
                <td colspan="5">Nenhum empréstimo encontrado</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
