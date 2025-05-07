<?php

$host = "localhost";
$usuario= "root";
$senha= "12345678";
$banco= "BDPHP";

try{
    $conexao = new PDO("
    mysql:host=$host;
    dbname=$banco;
    charset=utf8", 
    $usuario,$senha);

$conexao > setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXECEPTION);

}catch(PDOExeception $erro)

{
    echo "Erro na Conexao" .$erro->getMessage();
    exit();
}

