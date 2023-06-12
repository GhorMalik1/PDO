<?php
//opdracht 1
$datum = date("H:I");

if ($datum < "12:00") {
    echo "Goedenmorgen";
} elseif ($datum < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

echo "<br>";


//opdracht 2
function gemiddelde($getal, $getal1) {
    $gemiddelde = ($getal + $getal1) / 2;
    echo "Gemiddelde = " . $gemiddelde;
}

$getal2 = 20;
$getal3 = 10;

gemiddelde($getal2, $getal3);


echo "<br>";

//opdracht 3
function dagen() {

    $nudatum = new DateTime();
    $eindedatum = new DateTime('31-12-' . date('Y'));

    $interval = $nudatum->diff($eindedatum);
    $aantaldagen = $interval->days;

    echo "Aantal dagen tot het einde van het jaar: " . $aantaldagen;
}

dagen();

echo "<br>";

// opdracht 4
function lengte($strings) {
    $aantallengte = 0;
    foreach ($strings as $string) {
        $aantallengte += strlen($string);
    }
    return $aantallengte;
}

$sports = array("Voetbal", "Hockey", "Basketbal", "Rugby","Honkbal");
$aantallengte = lengte($sports);
echo "Totaal Lengte: " . $aantallengte;
?>