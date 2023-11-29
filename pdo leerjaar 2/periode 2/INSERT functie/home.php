<?php
require_once 'db.php';

$database = new Database();

$database->Datatoevoegen("Tom Schuur", "Tomschuur@gmail.com", "06555555");
?>