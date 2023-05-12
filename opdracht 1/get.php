<!DOCTYPE html>
<html>
<head>
  <title>Formulier</title>
</head>
<body>
  <h1>Formulier</h1>
  <form method="GET">
    <input type="text" id="naam" name="naam"  placeholder="Naam"><br><br>
    <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam"><br><br>
    <input type="number" id="leeftijd" name="leeftijd"  placeholder="Leeftijd"><br><br>
    <input type="text" id="address" name="address" placeholder="Address"><br><br>
    <input type="email" id="email" name="email" placeholder="Email"><br><br>
    <input type="submit" value="Aanmelden">

    <?php
    $naam = $_GET["naam"];
    $achternaam = $_GET["achternaam"];
    $leeftijd = $_GET["leeftijd"];
    $address = $_GET["address"];
    $email = $_GET["email"];

    echo $naam;
    echo $achternaam;
    echo $leeftijd;
    echo $address;
    echo $email;
?>
  </form>
</body>
</html>



