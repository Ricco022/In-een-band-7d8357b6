<?php

echo "Het albumoverzicht: " . PHP_EOL;

$array = array('Citizen of Glass' => 4.50, 
'Night' => 9., 
'New Eyes' => 5., 
'Strange Trails' => 10., );

foreach ($array as $album => $prijs) {
echo $album . " kost " . "€" . $prijs . PHP_EOL;
}

echo "Het totaalbedrag van alle albums is €" . array_sum($array) . PHP_EOL;
echo "De gemiddelde prijs van alle albums is € " . array_sum($array) / count($array);

?>