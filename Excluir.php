

<?php
require_once 'conexao.php';

if (isset($_GET['codigo']) && is_numeric($_GET['codigo'])) {
    $codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
    try {
        $stmt = $conexao->prepare("DELETE FROM Produto WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        if ($stmt->execute()) {
            header("Location: index.php?excluido=sucesso"); // Redireciona com mensagem de sucesso
            exit();
        } else {
            header("Location: index.php?excluido=erro"); // Redireciona com mensagem de erro
            exit();
        }
    } catch(PDOException $erro) {
        echo "Erro ao excluir usuário: " . $erro->getMessage();
        exit();
    }
} else {
    header("Location: index.php"); 
    exit();
}
?>