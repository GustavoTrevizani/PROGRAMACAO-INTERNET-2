<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>