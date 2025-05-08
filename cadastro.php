
<?php

require_once 'conexao.php';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $codBarra = filter_input(INPUT_POST, 'barras', FILTER_SANITIZE_STRING);

    if ($stmt = mysqli_prepare($conexao, "INSERT INTO Produto (nome, codBarra) VALUES (?, ?)")) {
        mysqli_stmt_bind_param($stmt, "ss", $nome, $codBarra); // "ss" indica que ambos os parâmetros são strings

        if (mysqli_stmt_execute($stmt)) {
            $mensagem = "<p class='sucesso'>Produto Cadastrado com sucesso</p>";
        } else {
            $mensagem = "<p class='error'>Erro ao Cadastrar o Produto: " . mysqli_stmt_error($stmt) . "</p>";
        }

        mysqli_stmt_close($stmt); // Fechar o statement
    } else {
        $mensagem = "<p class='error'>Erro na preparação da query: " . mysqli_error($conexao) . "</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
   
    <div class="container">
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>
        <form method="POST">
            <div class="group">
                <label for="nome">Nome do Produto</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="group">
                <label for="barras">Codigo de Barras</label>
                <input type="text" id="barras" name="barras" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <?php echo $mensagem; ?>
        <p><a href="index.php">Voltar para a lista de Produtos</a></p>
    </div>
</body>
</html>