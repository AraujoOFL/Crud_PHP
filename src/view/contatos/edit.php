<?php
include_once __DIR__ . '/../../../config/database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM contatos WHERE id = :id');
$stmt->execute(['id' => $id]);
$produto = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome       = $_POST['nome'];
    $descricao  = $_POST['descricao'];
    $preco      = $_POST['preco'];

    $sql = "UPDATE contatos SET nome = :nome WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'nome' => $nome]);

    header('Location: index.php');
    exit;
}
?>

<?php include_once(__DIR__ . '/../../templates/header.php'); ?>

<div class="container my-5">
    <h2>Editar Produto</h2>
    <form method="post">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" value="<?= htmlspecialchars($produto['nome']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<?php include_once(__DIR__ . '/../../templates/footer.php'); ?>

