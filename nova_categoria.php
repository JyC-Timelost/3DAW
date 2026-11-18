<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');

    if ($nome !== '') {
        $st = $pdo->prepare('INSERT INTO Categoria (nome) VALUES (:nome)');
        $st->bindParam(':nome', $nome, PDO::PARAM_STR);
        $st->execute();

        header('Location: index.php?msg=' . urlencode('Categoria cadastrada com sucesso!'));
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Categoria - Bazar Tem Tudo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Categoria</h1>

        <form method="post" action="nova_categoria.php">
            <div class="campo">
                <label for="nome">Nome da Categoria:</label>
                <input type="text" id="nome" name="nome" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
