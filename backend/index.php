<?php

require "Aircraft.php";
require "Airport.php";

echo "Serveris stradaa";

function addFour($x){
    $rez = $x + 4;
    echo "<br> $rez"; }

addFour(5);
addFour(8);
echo "<br> <br>";

$manaLidmasina = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($manaLidmasina);
echo "<br> <br>";
$manaLokacija = new Airport("RIX", 56.924, 23.971);
var_dump($manaLokacija);
?>