<?php
    $id_atendimento = $_GET['id'];

    require("conecta.php");

    $sql = "DELETE FROM
        atendimentos WHERE id = $
        id_atendimento";

    // $conn está definida no arquivo conecta.php
    $resultado = mysqli_query($conn, $sql);

    if ($resultado == true){
        echo ("<script>alert('Mensagem excluída com sucesso!'); </script>");
        header("location: mostrar.php");
    } else {
        echo ("<script>alert('Houve um erro ao fazer a exclusão!'); </script>");
    } 

    mysqli_close($conn);
?>