<?php
echo 'papildomas uzdavinys <br>';

// $sriuba=rand(260,300);
// $saukstuKiekis=0;
// $saukstas=rand(7,10);

// while ($sriuba>=0 && $sriuba>=$saukstas){
//     $sriuba-=$saukstas;
//     $saukstuKiekis++;
// }
// echo 'likos sriubos',$sriuba,'<br>';
// echo 'buvo saukstu',$saukstuKiekis;


$kepsnys=rand(300,350);
$sakuciuKiekis=0;
$kasniuSkaicius=0;

do {
    $sakuciuKiekis++;
    $atpjauta = rand(7, 10);
    
    if ($atpjauta > $kepsnys) {
        $kepsnys = $kepsnys - $kepsnys;
    }
    else {
        $kepsnys = $kepsnys - $atpjauta;
    }do{
            $kasniuSkaicius++;
        $atpjauta -= min(rand(4, 6), $atpjauta);
    }
    while($atpjauta>0);

} while ($kepsnys > 0);
echo $sakuciuKiekis,'<br>','<br>',$kasniuSkaicius;
echo '<br>';
echo '<br>';

echo '1 uzdavinys <br>';

//Naršyklėje nupieškite linija iš 400 “*”. 
//Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
//Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

$line='';
$i=0;
while($i<400){
    $line.='*';
    $i++;
}
echo '<br>';
echo 'A) <br>';
echo "<p  style='width:auto; word-wrap:break-word';>$line</p>";

//echo $line;
$lineOf50=str_split($line,50);
echo '<br>';
echo 'B)';
print_r($lineOf50);

echo '<br>';
echo '<br>';

echo '2 uzdavinys <br>';
// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir 
// suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
$randomNumbers='';
$didesnisUz150=0;
$testcnt=0;
$i=0;

do{
$random=rand(0,300);
$i++;
if($random>275){
$randomNumbers.=' '."<span style='color: red;'> $random </span>";
}
else($randomNumbers.= ' '.$random);
if ($random>150){
    $didesnisUz150++;
}
}
while($i<300);

echo '<br>';echo '<br>';
echo $randomNumbers;
echo '<br>';echo '<br>';
echo $didesnisUz150;
echo '<br>';echo '<br>';
echo $testcnt;

echo '<br>';
echo '<br>';

echo '3 uzdavinys <br>';

//Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000
// pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
//Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia,
// panaudokite css, kad visi rezultatai matytųsi ekrane.
$skaiciaiStringe='77';
$skaiciuEilute=[];
$skaicius=1;
$kiekis=rand(1,4000);


do{
    array_push($skaiciuEilute,$skaicius++);
    $kiekis--;
}
    while ($kiekis>0);
    $cnt=count($skaiciuEilute);
echo $cnt;
    
    for($i=0;$i<$cnt;$i++){
            if ($skaiciuEilute[$i]%77==0 && $skaiciuEilute[$i]!=77)
            {
$skaiciaiStringe.= ','.$skaiciuEilute[$i];
            }

    }

   echo "<p  style='width:auto; word-wrap:break-word';>$skaiciaiStringe</p>";

   echo '<br>';
echo '<br>';

echo '4, 5 uzdavinys <br>';
//Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. 
//Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
//Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *

$star='';
$star2='';
$i=0;
$j=0;
while($j<=100){
    $star.='*';
    $j++;
while($i<=100){
    $star2.='*';
    $i++;
}
echo "<span  style='width:auto;line-height:8px;';>$star2</span>",'<br>';
}

//echo "<p  style='width: 500px;; word-wrap:break-word';>$star</p>";


echo 'nemano xsai . <br>';
$size = 100;
echo '<div style="display: block">';
for ($i = 0; $i < $size; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < $size; $j++) {
        if ($j == $i || $j == $size - 1 - $i) {
            echo '<span style="color: red;">*</span>';
        } else {
            echo '<span>*</span>';
        }
    }
    echo '</div>';
}
echo '</div>';

echo '<br>';
echo '<br>';

echo '6 uzdavinys <br>';
// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
//Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje:
// “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
//Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;

$moneta=rand(0,1);
$kintmasisHebui=0;
if($moneta=0){
echo 'h';
}
else{
    echo 's';
}
echo '<br>';
echo '<br>';
echo 'antra sukasi kol iskrito ne herbas','<br>';
do{
    $monetaH=rand(0,1);
    if($monetaH==0){
echo 'buvo herbas';
$kintmasisHebui++;
}
else{
    echo 's';
}
}
while($kintmasisHebui<1);
echo '<br>';
echo '<br>';
echo 'Tris kartus iškritus herbui;','<br>';

$kintmasisHerbui=0;
do{
    $monetaH=rand(0,1);
    if($monetaH==0){
echo 'buvo herbas <br>';
$kintmasisHerbui++;
}
else{
    echo 's <br>';
}
}
while($kintmasisHerbui<3);

echo '<br>';
echo '<br>';
echo 'Tris kartus iš eilės iškritus herbui;','<br>';
$kintmasisHerbui2=0;
do{
    $monetaH=rand(0,1);
    if($monetaH==0){
echo 'buvo herbas <br>';
$kintmasisHerbui2++;
}
else{
    echo 's <br>';
    $kintmasisHerbui2=0;
}
}
while($kintmasisHerbui2<3);


echo '<br>';
echo '<br>';
echo '7 uzduotis','<br>';

// Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, 
// Kazys surenka taškų kiekį nuo 5 iki 25. 
// Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo:
//  ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, 
//  kas greičiau surenka 222 taškus. Partijas kartoti tol, 
//  kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.

$petras=0;
$kazys=0;
$zaidziaPetras=false;
$zaidziaKazys=true;

do{
    while($zaidziaKazys==true){
$petras+=rand(10,20);
$zaidziaPetras=true;
$zaidziaKazys=false;
    }
     while($zaidziaPetras==true){
        $kazys+=rand(5,25);
        $zaidziaKazys=true;
        $zaidziaPetras=false;
    }

}
while($kazys<=222||$petras<=222);

if ($petras<$kazys){
    echo 'laimejo petras';
}
elseif($petras==$kazys){
    echo 'lygiosios';
}
else{
    echo 'laimejo kazys';
}


echo '<br>';
echo '<br>';
echo '8 uzduotis','<br>';

//Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
//(https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti,
// kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

$puse = 10;

for ($i = 1; $i < $puse; $i++) {
    for ($j = $i; $j < $puse; $j++)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
    echo '<br>';
}
for ($i = $puse; $i > 0; $i--) {
    for ($j = $puse - $i; $j > 0; $j--)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
    echo "<br>";
}
echo '<br>';
echo '<br>';
echo '9 uzduotis','<br>';

$rombas = '***********';
for ($i = 0; $i < 21; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo '&nbsp;';
    }
    echo '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).");\">$rombas</span>" . '<br>' ;
}

echo '<br>';
echo '<br>';
echo '10 uzduotis','<br>';

//Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
//Vinies ilgis 8.5cm (pilnai sulenda į lentą).
//“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. 
//Suskaičiuokite kiek reikia smūgių.
//“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė 
//(pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. 
//Suskaičiuokite kiek reikia smūgių.


//A
$viniesGylis=850;
$kalimuSkaicius=0;
$visoViniu=5;
while($visoViniu!=0){
do{
    $viniesGylis-=rand(5,20);
    $kalimuSkaicius++;
}
while($viniesGylis>=0);
$visoViniu--;
}
echo 'mazais smugiais 5 vinys <br>';
echo $kalimuSkaicius,'<br>';

//B

$viniesGylis2=850;
$kalimuSkaicius2=0;
$visoViniu2=5;

while($visoViniu2!=0){
    if(rand(0,1)==0){
do{
    $viniesGylis2-=rand(20,30);
    $kalimuSkaicius2++;
}
while($viniesGylis2>=0);}
$visoViniu2--;
}
echo 'dideliais smugiais 5 vinys <br>';
echo $kalimuSkaicius2;

echo '<br>';
echo '<br>';
echo '11. uzdavinys <br>';
$skaiciuKiekis = 0;
$skaiciuStringas = '';
$pirminiai = '';

do {
    $unikalusSkaicius = false;
    do {
        $random = rand(1, 200);
        if (!strpos($skaiciuStringas, $random)) {
            $skaiciuStringas .= $random . ' ';
            $skaiciuKiekis++;
            $unikalusSkaicius = true;
            $pirminis = true;
            for ($i = 2; $i <= $random/2; $i++){
                if ($random % $i == 0) {
                    $pirminis = false;
                }
            }
            if ($pirminis) {
                $pirminiai .= $random . ' ';
            }
        }
    } while (!$unikalusSkaicius);
} while ($skaiciuKiekis < 50);
echo $skaiciuStringas . '<br>';
echo $pirminiai;
