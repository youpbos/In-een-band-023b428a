<?php
$arr = array(
    "Citizen of Glass" => 4.5,
    "Night" =>  9,
    "New Eyes" => 5,
    "trange Trails" =>  10
);

$optellen = 0;
echo "het album overzicht:" . PHP_EOL;
foreach ($arr as $band => $bedrag) {
    $optellen = $optellen + $bedrag;
    print_r($band . " €" . $bedrag . PHP_EOL);
}
$gem = $optellen / count($arr);
echo "Het totaalbedrag van alle albums is €" . $optellen . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €" . $gem;
