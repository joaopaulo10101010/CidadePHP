<?php
require_once 'conexao.php';
try{
    $stmt = $conexao->query("select * from Produtos order Bay nome");
    $produtos = $stmt->fetchall(PDO::FETCH_ASSOC);
}catch(PDOExeception $erro){
    echo("Erro ao buscar produtos".$erro->getMessage());
    $produtos = [];
}



?>