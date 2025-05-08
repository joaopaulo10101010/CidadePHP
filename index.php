<?php
require_once 'conexao.php';


$produtos = [];

$query = "SELECT * FROM Produto ORDER BY nome";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
    while ($produto = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $produto;
    }
    mysqli_free_result($resultado); // Libera a memória do resultado
} else {
    echo "Erro ao buscar produtos: " . mysqli_error($conexao);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="container">
    
<header>
    <h1>Lista de Produtos</h1>
</header>
    <?php 
        if(!empty($produtos)) : ?>

        <table>
            <thead>
                <tr>
                  <th>Nome</th>
                  <th>Codigo de Barras</th>  
                </tr>
                </thead>
                <tbody>
                    <?php foreach($produtos as $produto) : ?>
                        <tr>
                            <td><?php echo $produto['nome']; ?></td>
                            <td><?php echo $produto['codBarra']; ?></td>
                            <td class="actions">
                                <a href="">Editar</a>
                                
                                <a href="excluir.php?codigo=<?php echo $produtos['codigo']; ?>" class="delete-btn" onclick="return confirm('Tem certeza que deseja excluir este Produto?')">Excluir</a>
                            </td>
                        </tr>
                        <?php endforeach; ?> 
                </tbody>
        </table>
         <?php else: ?>
            <p> Nenhum produto Cadastrado</p>
        <?php endif; ?>
        <p><a href="cadastro.php">Cadastrar Novo Produto</a></p>
         

</div>

</body>
</html>