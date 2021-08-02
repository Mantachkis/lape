<?php
echo '1 uzdavinys <br>';
//Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".


$vardas='Mantas';
$pavarde='Garliauskas';
$gimimoMetai=1987;
$einamiejiMetai=2021;
$amzius=$einamiejiMetai-$gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $amziumetai";

echo '<br>';
echo '<br>';
echo '2 uzdavinys <br>';
//Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes
// nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
$pirmasSkaicius=rand(0,4);
$antrasSkaicius=rand(0,4);
$dalyba=0.00;
echo'sugeneruoti skaiciai';
echo '<br>', $pirmasSkaicius;
echo '<br>', $antrasSkaicius;

if($pirmasSkaicius!=0 && $antrasSkaicius!=0){
if ($pirmasSkaicius>$antrasSkaicius){
  $dalyba=$pirmasSkaicius/$antrasSkaicius;
echo '<br>',number_format((float)$dalyba, 2, '.', '');
}
else{
$dalyba=$antrasSkaicius/$pirmasSkaicius;
echo '<br>',number_format((float)$dalyba, 2, '.', '');
}}
else{
  echo '<br>mazesne reiksme buvo 0 todel dalyba negalima';
}


echo '<br>';
echo '<br>';

echo '3 uzdavinys <br>';
//Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
//jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$kintamasisA=rand(0,25);
$kintamasisB=rand(0,25);
$kintamasisC=rand(0,25);

  if (($kintamasisA < $kintamasisB && $kintamasisB < $kintamasisC) || ($kintamasisC < $kintamasisB && $kintamasisB < $kintamasisA))
    echo $kintamasisB;
    else if (($kintamasisB < $kintamasisA && $kintamasisA < $kintamasisC) || ($kintamasisC < $kintamasisA && $kintamasisA < $kintamasisB))
    echo $kintamasisA;
    elseif($kintamasisB == $kintamasisA || $kintamasisA == $kintamasisC){
      echo 'neaisku kuris vidurinis';
    }
    elseif($kintamasisB == $kintamasisA && $kintamasisA == $kintamasisC){
      echo 'visi vienodi';
    }

    else
    echo $kintamasisC;

 echo '<br>';
echo '<br>';

echo '4 uzdavinys <br>';
//Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
//Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

$krastineA=rand(0,10);
$krastineB=rand(0,10);
$krastineC=rand(0,10);

if(($krastineA + $krastineB <$krastineC))
{echo 'negalima sudaryti trikampi';}
elseif($krastineC+ $krastineB <$krastineA)
{echo 'negalima sudaryti trikampi';}
elseif($krastineC+ $krastineA<$krastineB) 
{echo 'negalima sudaryti trikampi';}
else{ echo 'galima sudaryti trikampio';}

 echo '<br>';
echo '<br>';

echo '5 uzdavinys <br>';
//Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
//reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$pirmaReiksme=rand(0,2);
$antraReiksme=rand(0,2);
$treciaReiksme=rand(0,2);
$ketvirtaReiksme=rand(0,2);
$nulis=0;
$vienetas=0;
$dvejetas=0;
echo'sugeneruoti skaiciai<br>';
echo  $pirmaReiksme;
echo '<br>', $antraReiksme;
echo '<br>', $treciaReiksme;
echo '<br>', $ketvirtaReiksme,'<br>';

if($pirmaReiksme==0)
{$nulis++;}
else if($pirmaReiksme==1)
{$vienetas++;}
else if($pirmaReiksme==2)
{$dvejetas++;}

if($antraReiksme==0)
{$nulis++;}
else if($antraReiksme==1)
{$vienetas++;}
 else if($antraReiksme==2)
{$dvejetas++;}

if($treciaReiksme==0)
{$nulis++;}
else if($treciaReiksme==1)
{$vienetas++;}
 else if($treciaReiksme==2)
{$dvejetas++;}


if($ketvirtaReiksme==0)
{$nulis++;}
else if($ketvirtaReiksme==1)
{$vienetas++;}
 else if($ketvirtaReiksme==2)
{$dvejetas++;}

echo "buvo nuliu $nulis <br> buvo vienetu $vienetas <br> buvo dvejetu $dvejetas";


echo '<br>';
echo '<br>';

echo '6 uzdavinys <br>';
//Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$skaicius=rand(1,6);

echo "<h$skaicius>$skaicius</h$skaicius>";

echo '7 uzdavinys <br>';
//Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
//Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
$kintamasis1=rand(-10,10);
$kintamasis2=rand(-10,10);
$kintamasis3=rand(-10,10);

if ($kintamasis1 <0){
echo "<p style='color:green'>$kintamasis1</p>";
}
elseif($kintamasis1==0){
echo "<p style='color:red'>$kintamasis1</p>";
}
else {
echo "<p style='color:blue'>$kintamasis1</p>";
}
if ($kintamasis2 <0){
echo "<p style='color:green'>$kintamasis2</p>";
}
elseif($kintamasis2==0){
echo "<p style='color:red'>$kintamasis2</p>";
}
else {
echo "<p style='color:blue'>$kintamasis2</p>";
}
if ($kintamasis3 <0){
echo "<p style='color:green'>$kintamasis3</p>";
}
elseif($kintamasis3==0){
echo "<p style='color:red'>$kintamasis3</p>";
}
else {
echo "<p style='color:blue'>$kintamasis3</p>";
}


echo '<br>';
echo '<br>';

echo '8 uzdavinys <br>';
//Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida.
// Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
//Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

$perkamosZvakes=rand(5,5000);
$kaina=0;


if ($perkamosZvakes <1000)
    $kaina +=$perkamosZvakes;

if($perkamosZvakes>1000&&$perkamosZvakes<2000)
$kaina+=($perkamosZvakes-($perkamosZvakes*0.03));

if($perkamosZvakes>2000)
$kaina+=($perkamosZvakes-($perkamosZvakes*0.04));

echo "kiek žvakių perkama: $perkamosZvakes <br> kokia kaina perkama: $kaina ";

echo '<br>';
echo '<br>';
echo '9 uzdavinys <br>';
///Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
//Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
//Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$kintamasisAritmetikai1=rand(0,100);
$kintamasisAritmetikai2=rand(0,100);
$kintamasisAritmetikai3=rand(0,100);
$vidurkis=0;
$vidurkisAtmetus=0;
$dalmuo=3;

$vidurkis+=($kintamasisAritmetikai1+$kintamasisAritmetikai2+$kintamasisAritmetikai3)/$dalmuo;
echo (ceil($vidurkis));
echo '<br>';
if($kintamasisAritmetikai1<10){
    $kintamasisAritmetikai1=0;
    $dalmuo--;
}
elseif($kintamasisAritmetikai1>90){
$kintamasisAritmetikai1=0;
  $dalmuo--;
}
if($kintamasisAritmetikai2<10){
    $kintamasisAritmetikai2=0;
      $dalmuo--;
}
elseif($kintamasisAritmetikai2>90){
$kintamasisAritmetikai2=0;
  $dalmuo--;

}if($kintamasisAritmetikai3<10){
    $kintamasisAritmetikai3=0;
      $dalmuo--;
}
elseif($kintamasisAritmetikai3>90){
$kintamasisAritmetikai3=0;
  $dalmuo--;
}
$vidurkisAtmetus+=($kintamasisAritmetikai1+$kintamasisAritmetikai2+$kintamasisAritmetikai3)/$dalmuo;
echo (ceil($vidurkisAtmetus));
echo '<br>';
echo '<br>';

echo '10 uzdavinys <br>';
//Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes.
// Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. 
//Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko.
// Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$valandos=0;
$minutes=0;
$sekundes=0;
$laikas=rand(100,5000);
$bonusSekundes=rand(0,300);

$valandos = floor($laikas / 3600);
$minutes = floor(($laikas / 60) % 60);
$sekundes = $laikas % 60;

echo 'pirminis laikrodis <br>';
echo "0$valandos:$minutes:$sekundes";
echo '<br>';

$laikas += $bonusSekundes;
$valandos = floor($laikas / 3600);
$minutes = floor(($laikas / 60) % 60);
$sekundes = $laikas % 60;
echo "papildomos $bonusSekundes sekundes <br>";
echo " 0$valandos:$minutes:$sekundes";
echo '<br>';

echo '11 uzdavinys <br>';
//Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
//Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
//Naudoti ciklų ir masyvų NEGALIMA.

$a=rand(1000,9999);
$b=rand(1000,9999);
$c=rand(1000,9999);
$d=rand(1000,9999);
$e=rand(1000,9999);
$f=rand(1000,9999);


