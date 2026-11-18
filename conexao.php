<?php
$host    = 'sql103.infinityfree.com';
$dbname  = 'if0_42751248_bazar';
$usuario = 'if0_42751248';
$senha   = '65rSgSanDfKJB';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
}
