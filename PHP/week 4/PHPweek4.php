<?php
 // opdracht 1
   for ($i = 0; $i <= 50; $i++) {
   echo $i . " ";
   }

   echo "<br>";
 //opdracht 2

    $klasnamen = array("Vinu", "Zakaria", "Lakshya", "Zee", "Muhammed", "Daniël", "Gorav", "Ömer", "Mehmet", "Jaber",);
    foreach ($klasnamen as $klasnamen) {
    echo $klasnamen . "<br>";
    }

 // opdracht 3 en 4
    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

    $i = 1;
    foreach ($maanden as $maanden) {
    echo "Maand " . $i . " is " . $maanden . "<br>";
    $i++;
}

?>