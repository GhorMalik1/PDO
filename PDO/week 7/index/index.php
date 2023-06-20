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


$stmt = $pdo->query("SELECT * FROM producten ORDER BY product_code");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Productnaam " . $row['product_naam'] . "<br>";
    echo "Prijs per stuk " . $row['prijs_per_stuk'] . "<br>";
    echo "Omschrijving " . $row['omschrijving'] . "<br><br>";
}

    echo '<a href="http://127.0.0.1/PDO/week%207/delete/delete.php?product_code=2">product</a>'

?>