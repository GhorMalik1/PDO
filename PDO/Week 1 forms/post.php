<!DOCTYPE html>
<html>
<head>
  <title>Formulier</title>
</head>
<body>
  <h1>Formulier</h1>
  <form method="POST">
    <input type="text" name="naam" id="naam" placeholder="Naam"><br><br>
    <input type="text" name="achternaam" id="achternaam" placeholder="Achternaam"><br><br>
    <input type="number" name="leeftijd" id="leeftijd" placeholder="Leeftijd"><br><br>
    <input type="text" name="address" id="address" placeholder="Address"><br><br>
    <input type="email" name="email" id="email" placeholder="Email"><br><br>
    <input type="submit" value="Aanmelden">
</form>
  <?php
    $naam = $_POST["naam"];
    $achternaam = $_POST["achternaam"];
    $leeftijd = $_POST["leeftijd"];
    $address = $_POST["address"];
    $email = $_POST["email"];

    echo $naam;
    echo $achternaam;
    echo $leeftijd;
    echo $address;
    echo $email;
  ?>
</body>
</html>


