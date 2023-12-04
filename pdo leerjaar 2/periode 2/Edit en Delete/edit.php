<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $telefoonnummer  = $_POST["telefoonnummer"];

    if (!is_numeric($telefoonnummer)) {
        echo "Invalid Telefoonnummer value";
        exit();
    }

    $database = new Database();
    $database->updateData($id, $naam, $email,  $telefoonnummer );
}
?>

<form method="post" action="edit.php">
    <label for="id">ID:</label>
    <input type="text" name="id" required>

    <label for="naam">Nieuwe naam:</label>
    <input type="text" name="naam" required>
    <label for="email">Nieuwe email:</label>
    <input type="text" name="email" required>
    <label for="telefoonnummer">Nieuwe telefoonnummer:</label>
    <input type="number" name="telefoonnummer" required>

    <input type="submit" value="Update">
</form>
