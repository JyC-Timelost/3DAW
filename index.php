<?php
require_once 'conexao.php';

$st = $pdo->query('SELECT idCategoria, nome FROM Categoria ORDER BY idCategoria ASC');
$categorias = $st->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazar Tem Tudo - Categorias</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="topo">
            <h1>Bazar Tem Tudo</h1>
            <a href="nova_categoria.php" class="btn btn-primary">+ Nova Categoria</a>
        </div>

        <?php if (isset($_GET['msg'])): ?>
            <div class="alerta">
                <?= htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($categorias) === 0): ?>
                    <tr>
                        <td colspan="3">Nenhuma categoria cadastrada.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td><?= (int) $categoria['idCategoria'] ?></td>
                            <td><?= htmlspecialchars($categoria['nome'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td>
                                <a href="excluir_categoria.php?idCategoria=<?= (int) $categoria['idCategoria'] ?>"
                                   class="btn btn-danger"
                                   onclick="return confirm('Tem certeza que deseja excluir esta categoria?');">
                                   Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
