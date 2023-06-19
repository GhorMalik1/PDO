<?php
session_start();

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

    $_SESSION['product_code'] = array();

    echo "Alle Producten van mijn winkel <br><br>";
    $stmt = $pdo->query("SELECT * FROM producten");
    while ($row = $stmt->fetch()) {
        echo "Productcode " . $row['product_code']."<br>";
        echo "Productnaam " . $row['product_naam']."<br>";
        echo "Prijs per stuk " . $row['prijs_per_stuk']."<br>";
        echo "Omschrijving " . $row['omschrijving']."<br><br>";


        $_SESSION['product_code'][] = $row['product_code'];
}


?>