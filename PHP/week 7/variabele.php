<?php
session_start();

if (isset($_SESSION['naam']) &&  isset($_SESSION['email'])) {
    $naam = $_SESSION['naam'];
    $email = $_SESSION['email'];

    echo "Naam: $naam";
    echo "<br>";
    echo "E-mail: $email";

}
?>