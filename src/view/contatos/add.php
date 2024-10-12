<?php
include_once __DIR__ . '/../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];

    $sql = "INSERT INTO contatos (nome) VALUES ( :nome)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome]);

    header('Location: index.php');
    exit;
}
?>

<?php include_once(__DIR__ . '/../../templates/header.php'); ?>

<div class="container my-5">
    <h2>Adicionar Contatos</h2>
    <form method="post">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<?php include_once(__DIR__ . '/../../templates/footer.php'); ?>


