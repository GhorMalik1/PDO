<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $database = new Database();
    $database->deleteData($id);
}
?>

<form method="post" action="delete.php">
    <label for="id">ID:</label>
    <input type="text" name="id" required>

    <input type="submit" value="Delete">
</form>
