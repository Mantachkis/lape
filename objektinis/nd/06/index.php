<?php


require __DIR__ . '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);
echo 'Stikline 1 kiekis ';
$stikline1->ipilti(250);
$stikline1->kiekPripilta();
echo 'Stikline 2 kiekis ';
$stikline2->ipilti(10);
$stikline2->kiekPripilta();
echo 'Stikline 3 kiekis ';
$stikline3->ipilti(90);
$stikline3->kiekPripilta();

if ($stikline1->turis == $stikline1->kiekis) {
    $temp = $stikline1->ispilti();
    $stikline2->ipilti($temp);
}
echo 'Stikline 1 kiekis ';
$stikline1->kiekPripilta();

if ($stikline2->turis == $stikline2->kiekis) {
    $temp = $stikline2->ispilti();
    $stikline3->ipilti($temp);
}
echo 'Stikline 2 kiekis ';
$stikline2->kiekPripilta();
echo 'Stikline 3 kiekis ';
$stikline3->kiekPripilta();