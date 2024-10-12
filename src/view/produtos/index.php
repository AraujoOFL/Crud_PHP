<?php
include_once __DIR__ . '/../../../config/database.php';

// Consultar todos os produtos
$stmt = $pdo->query('SELECT * FROM produtos');
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Incluindo o topo do site -->
<?php include_once(__DIR__ . '/../../templates/header.php'); ?>


<!-- Conteúdo Principal -->
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Produtos</h2>
        <a href="add.php" class="btn btn-primary">Adicionar Produto</a>
    </div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= htmlspecialchars($produto['id']) ?></td>
                    <td><?= htmlspecialchars($produto['nome']) ?></td>
                    <td><?= htmlspecialchars($produto['descricao']) ?></td>
                    <td><?= htmlspecialchars($produto['preco']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $produto['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="delete.php?id=<?= $produto['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<!-- Incluindo o rodape do site -->

<?php include_once(__DIR__ . '/../../templates/footer.php'); ?>
