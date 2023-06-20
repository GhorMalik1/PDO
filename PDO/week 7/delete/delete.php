<?php

$host = 'localhost:3307';
$db   = 'Winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try
{
     $pdo = new PDO($dsn, $user, $pass, $options);
}
catch (\PDOException $e)
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_GET['product_code'])) {
    $productcode = $_GET['product_code'];


    $sql = "DELETE FROM producten WHERE product_code = ?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$productcode]);

    echo "product is verwijderd";

} else {
    echo "product is nog niet verwijderd";
}



?>