<?php

require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Grybas.php';

$krepsys = new Krepsys;

$krepsys->krepsioDysis();

while ($krepsys->__get('dydis') <= 500) {

    $grybas = new Grybas;
    if (!$grybas->getSukirmyjes() && $grybas->getValgomas()) {

        $krepsys->__set('dydis', $grybas->getSvoris());
    }

    $krepsys->krepsioDysis();
}

$krepsys->krepsioDysis();