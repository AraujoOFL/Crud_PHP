<?php
// Define a URL base do projeto
define('BASE_URL', '/cursophpWinsite/');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template com Bootstrap 4</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Topo -->
    <header class="bg-primary text-white text-center py-3">
        <h1>Curso Básico de PHP - 23 e 24 de Agosto de 2024</h1>
        <p>Prof. Leandro Cavalieri da Winsite Sistemas e Unipar</p>
    </header>

    <!-- Menu Central -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>src/templates/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>src/view/usuarios/index.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>src/view/produtos/index.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>src/view/contatos/index.php">Contatos</a>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>

     <!-- Conteúdo Principal -->
 <div class="container mt-5 mb-5">
 </body>
 </html>

