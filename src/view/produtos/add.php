<?php
include_once __DIR__ . '/../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome       = $_POST['nome'];
    $descricao  = $_POST['descricao'];
    $preco      = $_POST['preco'];

    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'descricao' => $descricao, 'preco' => $preco]);

    header('Location: index.php');
    exit;
}
?>

<?php include_once(__DIR__ . '/../../templates/header.php'); ?>

<div class="container my-5">
    <h2>Adicionar Produto</h2>
    <form method="post">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="descricao" id="descricao" name="descricao" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="preco" id="preco" name="preco" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<?php include_once(__DIR__ . '/../../templates/footer.php'); ?>


