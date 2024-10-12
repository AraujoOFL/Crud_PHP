<?php

// Define o host do banco de dados
$host = 'localhost';

// Define o nome do banco de dados
$db   = 'cursophp2024';

// Define o nome de usuário para a conexão com o banco de dados
$user = 'root';

// Define a senha para a conexão com o banco de dados
$pass = '';

// Define o conjunto de caracteres a ser usado na conexão
$charset = 'utf8mb4';

// Cria a string de Data Source Name (DSN), que define como o PDO deve se conectar ao banco de dados
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Define as opções para a conexão PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Define o modo de erro para exceções, permitindo que erros sejam lançados como exceções
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Define o modo padrão de fetch para associar resultados a arrays associativos (chave => valor)
    PDO::ATTR_EMULATE_PREPARES   => false, // Desativa a emulação de prepared statements para usar declarações preparadas nativas do MySQL
];

// Tenta criar uma nova instância PDO para se conectar ao banco de dados
try {
    $pdo = new PDO($dsn, $user, $pass, $options); // Cria uma nova instância de PDO com o DSN, usuário, senha e opções especificadas

} catch (\PDOException $e) { // Captura exceções do PDO se a conexão falhar
    throw new \PDOException($e->getMessage(), (int)$e->getCode()); // Lança uma nova exceção com a mensagem e o código da exceção original
}

//include_once('crud.php');

?>
