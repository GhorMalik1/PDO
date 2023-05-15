<?php
//$variabele1 = 10;
//$variabele2 = 10;

//if ( $variabele1 == $variabele2 ) {

//    echo "De twee waarden zijn gelijk";
//}


//$variabele1 = 9;
//$variabele2 = 10;

//if ( $variabele1 != $variabele2 ) {

//    echo "De twee waarden zijn ongelijk";
//}


//$variabele1 = 10;
//$variabele2 = 10;

//if ( $variabele1 == $variabele2 ) {

//        echo "De twee waarden zijn gelijk";
//} else {
//        echo "De twee waarden zijn ongelijk";
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="GET">

    <label for="text">gebruikersnaam:</label>
    <input type="text"  name="gebruikersnaam" placeholder="Gebruikersnaam">
    <label for="password">Wachtwoord:</label>
    <input type="password" name= "wachtwoord" placeholder="Wachtwoord">

    <input type="submit" name="submit">

    </form>

    <?php


    if (isset($_GET['submit'])) {

        $gebruikersnaam = $_GET['gebruikersnaam'];
        $wachtwoord = $_GET['wachtwoord'];

         echo "gebruikersnaam: " . $gebruikersnaam;
         echo "wachtwoord: " . $wachtwoord;


    }
    ?>



</body>
</html>