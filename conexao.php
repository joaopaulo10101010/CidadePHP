<?php

$host = "localhost";
$usuario = "root";
$senha = "12345678";
$banco = "BDPHP";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na Conexão com MySQL: " . mysqli_connect_error());
}
?>