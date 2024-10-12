<?php
include_once __DIR__ . '/../../../config/database.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}

header('Location: index.php');
exit;
?>

