<?php
session_start();
require 'conexao.php';

// Inicializa variáveis
$fornecedor = null;

// Se o formulário for enviado, busca o usuário pelo ID ou nome
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['busca_usuario'])) {
        $busca = trim($_POST['busca_usuario']);

        // Verifica se a busca é um número (ID) ou um nome
        if (is_numeric($busca)) {
            $sql = "SELECT * FROM fornecedor WHERE id_fornecedor = :busca";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':busca', $busca, PDO::PARAM_INT);
        } else {
            $sql = "SELECT * FROM fornecedor WHERE nome_fornecedor LIKE :busca_nome";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':busca_nome', "%$busca%", PDO::PARAM_STR);
        }

        $stmt->execute();
        $fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);

        // Se o fornecedor não for encontrado, exibe um alerta
        if (!$fornecedor) {
            echo "<script>alert('Fornecedor não encontrado!');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Fornecedor</title>
    <link rel="stylesheet" href="styles.css">
    
    <!-- Certifique-se de que o JavaScript está sendo carregado corretamente -->
    <script src="scripts.js"></script>
</head>
<body>
    <h2>Alterar Fornecedor</h2>

    <!-- Formulário para buscar usuário pelo ID ou Nome -->
    <form action="alterar_fornecedor.php" method="POST">
        <label for="busca_usuario">Digite o ID ou Nome do Fornecedor:</label>
        <input type="text" id="busca_usuario" name="busca_usuario" required onkeyup="buscarSugestoes()">
        
        <!-- Div para exibir sugestões de usuários -->
        <div id="sugestoes"></div>
        
        <button type="submit">Buscar</button>
    </form>



    <?php if ($fornecedor): ?>
        <!-- Formulário para alterar usuário -->
        <form action="processa_alteracao_fornecedor.php" method="POST">
            <input type="hidden" name="id_fornecedor" value="<?= htmlspecialchars($fornecedor['id_fornecedor']) ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome_fornecedor" name="nome" value="<?= htmlspecialchars($fornecedor['nome_fornecedor']) ?>" required>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($fornecedor['endereco']) ?>" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($fornecedor['telefone']) ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($fornecedor['email']) ?>" required>

            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato" value="<?= htmlspecialchars($fornecedor['contato']) ?>" required>
        

            <button type="submit">Alterar</button>
            <button type="reset">Cancelar</button>
        </form>
    <?php endif; ?>

    <a href="principal.php">Voltar</a>
</body>
</html>