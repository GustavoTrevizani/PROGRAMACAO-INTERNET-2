<?php
// exemplo1_session.php

// inicia a sessão
session_start();

// definindo as váriaveis de sessão
$_SESSION["nome"] = "Érik";
$_SESSION["idade"] = 18;

echo ($_SESSION["nome"]);
?>