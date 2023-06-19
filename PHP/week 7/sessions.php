<?php
session_start();

$naam = "John Cena";
$email = "johncena@gmail.com";


$_SESSION['naam'] = $naam;
$_SESSION['email'] = $email;

?>