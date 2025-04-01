<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "webfit";

$conexao = mysqli_connect($host, $user, $pass, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>