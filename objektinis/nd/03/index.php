<?php


require __DIR__ . '/Kibiras2.php';



$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;

$a = $kibiras1->getKibiroKiekis();
$b = $kibiras2->getKibiroKiekis();
$c = $kibiras3->getKibiroKiekis();


echo '<pre>';
echo utility::akmenuKiekisVisuoseKibiruose($a, $b, $c);