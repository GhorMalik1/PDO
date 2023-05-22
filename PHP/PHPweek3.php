<?php

//Deel1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] ='Helikopter';

foreach($myArray as $value) {
    echo $value . "<br>";
}

//Deel2

$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$elementen = count($myArray);
echo "Het array heeft $elementen elementen";
$myArray[] ='Helikopter';
$elementen = count($myArray);
echo "<br>";
echo "Het array heeft $elementen elementen";
echo "<br>";

//Deel3
// antwoorden
// 1. Bar
// 2. 4
// 3. Toyota
// 4. alle auto,s worden opgetelt
// 5. 5
// 6. het laatste element van de array

//Deel4
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);

echo $gemiddelde

//Deel4B
//Ik denk dat het beter is om de regels samen te voegen, omdat het overzichterlijk is en ik vind het beter te bergrijpen.

?>