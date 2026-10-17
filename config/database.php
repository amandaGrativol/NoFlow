<?php
// config/database.php

$host = 'db_://dbaas.com.br';
$dbname = 'db_noflow';
$username = 'db_noflow';
$password = 'LWMi!h8pkXpS6B';
$port = '3306';

try {
    // Inicia a conexão PDO configurando o charset UTF8 para evitar problemas de acentuação
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configura o PDO para disparar exceções e exibir erros de sintaxe SQL na tela
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Em caso de falha física de rede ou login, interrompe a execução e avisa a equipe
    die("Erro ao conectar com o banco de dados da Locaweb: " . $e->getMessage());
}
