<?php
require_once 'conexao.php';

$idCategoria = filter_input(INPUT_GET, 'idCategoria', FILTER_VALIDATE_INT);

if (!$idCategoria) {
    header('Location: index.php?msg=' . urlencode('ID de categoria inválido.'));
    exit;
}

try {
    $st = $pdo->prepare('DELETE FROM Categoria WHERE idCategoria = :idCategoria');
    $st->bindParam(':idCategoria', $idCategoria, PDO::PARAM_INT);
    $st->execute();

    header('Location: index.php?msg=' . urlencode('Categoria excluída com sucesso!'));
    exit;
} catch (PDOException $e) {
    header('Location: index.php?msg=' . urlencode('Erro ao excluir categoria: ' . $e->getMessage()));
    exit;
}
