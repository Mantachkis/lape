<?php
$player1Name='Jonas';
$player2Name='Petras';
$jonasPoints=rand(10,20);
$petrasPoints=rand(5,25);

$laimetojas=($jonasPoints>$petrasPoints)?$player1Name : $player2Name;
 echo'<br>';
echo $player1Name,' surinko ', $jonasPoints;
 echo'<br>';
echo $player2Name,' surinko  ', $petrasPoints;
 echo'<br>';
echo 'Laimejo: ' . $laimetojas;
echo '<br>';
echo '<br>';
// pirmas
$egzaminoRezultatas = rand(1, 10);

if($egzaminoRezultatas>=4){
    echo 'islaikyta';
}
else{
    echo 'nesilaikyta';
}

echo '<br>';
// antras
$automobilioGreitis = rand(40, 125);
$bauda=0;
if($automobilioGreitis>60)
$bauda=$automobilioGreitis*5;
echo "automobilio greitis $automobilioGreitis ir baudos dydis $bauda";
echo '<br>';

//trecias
$dalyvis1 = rand(1, 4);
$dalyvis2 = rand(1, 4);

if ($dalyvis1+$dalyvis2>6 ||$dalyvis1==$dalyvis2)
   { echo 'laimejo';}
else
{echo 'pralaimejo';}

echo '<br>';