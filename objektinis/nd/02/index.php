<?php


require __DIR__ . '/Pinigine.php';

$pinigine = new pinigine;


$pinigine->ideti(10);
$pinigine->skaiciuoti();
$pinigine->ideti(1);
$pinigine->skaiciuoti();

$pinigine->ideti(10);
$pinigine->skaiciuoti();
$pinigine->ideti(1);
$pinigine->skaiciuoti();

_d($pinigine, 'Pinigine');