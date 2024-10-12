<?php
include_once __DIR__ . '/../../../config/database.php';

// Consultar todos os contatos
$stmt = $pdo->query('SELECT * FROM contatos');
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Incluindo o topo do site -->
<?php include_once(__DIR__ . '/../../templates/header.php'); ?>


<!-- Conteúdo Principal -->
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Contatos</h2>
        <a href="add.php" class="btn btn-primary">Adicionar contato</a>
    </div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $contato): ?>
                <tr>
                    <td><?= htmlspecialchars($contato['id']) ?></td>
                    <td><?= htmlspecialchars($contato['nome']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $contato['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="delete.php?id=<?= $contato['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este contato?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<!-- Incluindo o rodape do site -->

<?php include_once(__DIR__ . '/../../templates/footer.php'); ?>
