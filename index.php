<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula1</title>
</head>
<body>
    <h1>Cadastro de Usuario</h1>
    <form method="POST" action="dados.php">
        <p>
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digite o nome" require/>
        <p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Digite o email" require/>
        <p>
        <p>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Digite a senha" require/>
        <p>
        <input type="submit" value="Cadastrar">
        
    </form>
</body>
</html>