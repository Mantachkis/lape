<?php
//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
//kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

echo '1 uzdavvinys';

echo '<br>';
$atsitiktinisMasyvas=[];

foreach(range(0,29) as $i){
    $atsitiktinisMasyvas[$i]=rand(5,25);
}


print_r($atsitiktinisMasyvas);


echo '<br>';
echo '<br>';

echo '2 uzdavinys <br>';
echo 'A)=============================<br>';
//Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$Daugiau10=0;

foreach ($atsitiktinisMasyvas as $key => $value) {
    if($value >10)
    {$Daugiau10++;
    }
}

echo $Daugiau10;

echo '<br>';
echo 'B)================================<br>';
//Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli
$tmp=0;
$tmpKey=0;

foreach ($atsitiktinisMasyvas as $key => $value) {
    if ($value>$tmp){
        $tmp=$value;
        $tmpKey=$key;
    }
   
}

echo 'didziausias skaicius' ,$tmp,'<br> jo pozicia',$tmpKey;
echo '<br>';
foreach($atsitiktinisMasyvas as $k => $v) {
 if($v == $tmp &&$k!=$tmpKey) 
 echo 'kartojasi  ', $k,'<br>'; 
}
echo '<br>';
echo 'C)============================<br>';
//Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
$suma=0;
foreach ($atsitiktinisMasyvas as $key => $value) {
    if($key%2==0){
       $suma+=$value;
    }
}
echo "suma yra $suma";

echo '<br>';
echo 'D)============================<br>';

//Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
$naujasMasyvas=[];

foreach ($atsitiktinisMasyvas as $key => $value) {
    $naujasMasyvas[]=($value-$key);
}
print_r($naujasMasyvas);

echo '<br>';
echo 'E)==========================<br>';

//Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25,
// kad bendras masyvas padidėtų iki indekso 39;

foreach(range(0,9) as $i){
    $atsitiktinisMasyvas[]=rand(5,25);
}
print_r( $atsitiktinisMasyvas);
echo '<br>';
echo 'F)==========================<br>';

//Iš masyvo elementų sukurkite du naujus masyvus. 
//Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
$porinis=[];
$neporinis=[];
foreach ($atsitiktinisMasyvas as $key => $value) {
    if($key%2==0){
        $porinis[]=$value;}
    else{
        $neporinis[]=$value;
    }
}
echo 'porinis';
echo '<br>';
print_r($porinis);
echo '<br>';
echo 'neporinis';
echo '<br>';
print_r($neporinis);

echo '<br>';
echo 'G)=============================<br>';

//Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach ($porinis as $key => $value) {
if ($value > 15){
    $porinis[$key]=0;
}
}
print_r($porinis);
echo '<br>';
echo 'H)=============================<br>';
//Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

$index = array_search(min($atsitiktinisMasyvas), $atsitiktinisMasyvas);

echo "pirmo maziausio skaiciaus indeksas = $index";
echo '<br>';
echo 'I)=============================<br>';
//Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

foreach ($atsitiktinisMasyvas as $key => $value) {
    if($key%2==0){
        unset($atsitiktinisMasyvas[$key]);
    }
}
print_r( $atsitiktinisMasyvas);
echo '<br>';
echo '<br>';
echo '3 uzdavinys <br>';
//Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D,
// o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
$atsitiktinesRaides=[];
$raides=['A','B','C','D'];
foreach(range(0,199) as $i){
    $atsitiktinesRaides[$i]=$raides[rand(0,3)];
}
echo '<br>';
print_r($atsitiktinesRaides);
echo '<br>';
echo '<br>';
print_r(array_count_values($atsitiktinesRaides));

echo '<br>';
echo '<br>';
echo '4 uzdavinys <br>';
//Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
echo '<br>';
sort($atsitiktinesRaides);
print_r($atsitiktinesRaides);

echo '<br>';
echo '<br>';
echo '5 uzdavinys <br>';
//Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
//Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
echo '<br>';
$kiekKombinaciju=0;
$unikaliosReiksmes=0;
$atsitiktinesRaides1=[];
$atsitiktinesRaides2=[];
$atsitiktinesRaides3=[];
$superRaides=[];
$raides=['A','B','C','D'];
foreach(range(0,199) as $i){
    $atsitiktinesRaides1[$i]=$raides[rand(0,3)];
    $atsitiktinesRaides2[$i]=$raides[rand(0,3)];
    $atsitiktinesRaides3[$i]=$raides[rand(0,3)];
}
foreach(range(0,199) as $i){
    $superRaides[].=$atsitiktinesRaides1[$i].$atsitiktinesRaides2[$i].$atsitiktinesRaides3[$i];
}


//$superRaides= array_merge_recursive($atsitiktinesRaides1, $atsitiktinesRaides2,$atsitiktinesRaides3);

//print_r($superRaides);

$sumazinta=array_count_values($superRaides);

foreach ($sumazinta as $key => $value) {
    $kiekKombinaciju++;
    if ($value==1){
        $unikaliosReiksmes++;
    }
}
echo "unikaliu reiksmiu  buvo:  $unikaliosReiksmes <br>";
echo "unikaliu kombinaciju  buvo:  $kiekKombinaciju <br>";

echo '<br>';
echo '<br>';
echo '6 uzdavinys <br>';
echo '<br>';
//Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999.
// Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

$skaiciuMasyvas1=[];
$skaiciuMasyvas2=[];
$skaitliukas=0;
do{
$random=rand(100,999);
    if(in_array($random,$skaiciuMasyvas1)==0){
    $skaiciuMasyvas1[]=$random;
    $skaitliukas++;}
}
while($skaitliukas<100);
$skaitliukas=0;
do{
$random1=rand(100,999);
    if(in_array($random1,$skaiciuMasyvas2)==0){
    $skaiciuMasyvas2[]=$random1;
    $skaitliukas++;}
}
while($skaitliukas<100);


print_r($skaiciuMasyvas1);
echo '<br>';
echo '<br>';
print_r($skaiciuMasyvas2);

echo '<br>';
echo '<br>';
echo '7 uzdavinys <br>';
echo '<br>';
//Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve,
// bet nėra antrame 6 uždavinio masyve.

$skaiciuMasyvas3=[];

foreach ($skaiciuMasyvas1 as $key => $value) {
if(!in_array($value,$skaiciuMasyvas2)){
    $skaiciuMasyvas3[]=$value;
}
}
print_r($skaiciuMasyvas3);


echo '<br>';
echo '<br>';
echo '8 uzdavinys <br>';
echo '<br>';

//
$skaiciuMasyvasKartojasi=[];
foreach ($skaiciuMasyvas1 as $key => $value) {
if(in_array($value,$skaiciuMasyvas2)){
    $skaiciuMasyvasKartojasi[]=$value;
}
}
print_r($skaiciuMasyvasKartojasi);

echo '<br>';
echo '<br>';
echo '9 uzdavinys <br>';
echo '<br>';
//Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės,
// o jo reikšmės iš būtų antrojo masyvo.
$nuJauLabaiKeistasMasyvas=[];

$nuJauLabaiKeistasMasyvas=array_combine($skaiciuMasyvas1,$skaiciuMasyvas2);

 print_r($nuJauLabaiKeistasMasyvas);

 echo '<br>';
echo '<br>';
echo '10 uzdavinys <br>';
echo '<br>';
//Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
//Penktas trečio ir ketvirto suma ir t.t.

$mazasBetGeras=[];
foreach(range(0,9) as $i){
    if($i<2)
    {
        $mazasBetGeras[$i]=rand(5,25);
    }
    elseif($i==2){
        $mazasBetGeras[$i]=$mazasBetGeras[0]+$mazasBetGeras[1];

    }
    else{
        $mazasBetGeras[$i]=$mazasBetGeras[$i-2]+$mazasBetGeras[$i-1];
    }
    }
    print_r( $mazasBetGeras);

    echo '<br>';
echo '<br>';
echo '11 uzdavinys <br>';
echo '<br>';
//Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. 
//Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip,
// kad visos reikšmės masyve būtų unikalios.
// Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje,
// o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 
//Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės).
// Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite.
// (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)

$pirminisMasyvas=[];
do{
$random=rand(0,300);
    if(!in_array($random,$pirminisMasyvas)){
    $pirminisMasyvas[]=$random;
    $skaitliukas++;}
}
while($skaitliukas<101);

$testin=max($pirminisMasyvas);
print_r($testin);
