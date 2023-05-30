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


     echo "Alle Producten van mijn winkel <br><br>";
     $stmt = $pdo->query("SELECT * FROM producten");
     while ($row = $stmt->fetch()) {
          echo "Productnaam " . $row['product_naam']."<br>";
          echo "Prijs per stuk " . $row['prijs_per_stuk']."<br>";
          echo "Omschrijving " . $row['omschrijving']."<br><br>";
     }

     echo "Productcode 1 <br>";
     $productcode = 1;
     $stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code=?");
     $stmt->execute([$productcode]);

     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "Productnaam " . $row['product_naam'] . "<br>";
          echo "Prijs per stuk " . $row['prijs_per_stuk'] . "<br>";
          echo "Omschrijving " . $row['omschrijving'] . "<br><br>";
     }

     echo "Productcode 2 <br>";
     $productcode = 2;
     $stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code = :product_code");
     $stmt->bindParam(':product_code', $productcode);
     $stmt->execute();

     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "Productnaam " . $row['product_naam'] . "<br>";
          echo "Prijs per stuk " . $row['prijs_per_stuk'] . "<br>";
          echo "Omschrijving " . $row['omschrijving'] . "<br><br>";
     }

?>