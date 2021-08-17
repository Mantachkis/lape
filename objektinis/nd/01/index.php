<?php


require __DIR__ . '/kibiras.php';

$kiekis = 40;

$kibiras = new kibiras;




echo '<pre>';
var_dump($kibiras);

$kibiras->prideti1Akmeni();

$kibiras->kiekPririnktaAkmenu();

$kibiras->pridetiDaugAkmeni($kiekis);

$kibiras->kiekPririnktaAkmenu();

_d($kibiras->akmenuKiekis, 'akmenu  kiekis ----->');
