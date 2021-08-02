<?php
echo '<pre>';
echo '1. uzdavinys';
//Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su 
//reikšmėmis nuo 5 iki 25.
$tevinisMasyvas=[];

foreach(range(0,9) as $i){
    foreach(range(0,4) as $j)
    {
        $tevinisMasyvas[$i][$j]=rand(5,25);
    }

}
print_r($tevinisMasyvas);


echo '<br>';
echo '2. A) uzdavinys';
// Suskaičiuokite kiek masyve yra elementų didesnių už 10;
$sk=0;
foreach ($tevinisMasyvas as $vaikas) {

    foreach ($vaikas as $value) {

        if ($value > 10) {
            $sk++;
        }
    }
}
echo "buvo daugiau uz 10 - $sk"; 


echo '<br>';
echo '2. B) uzdavinys';
// Raskite didžiausio elemento reikšmę;
$max=0;

foreach ($tevinisMasyvas as $vaikas) {

    foreach ($vaikas as $value) {

        if ($value > $max) {
            $max=$value;
        }
    }
}
echo '<br>';
echo $max;

echo '<br>';
echo '2.C) uzdavinys';
//Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 
//(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
$suma=[0,0,0,0,0];

foreach ($tevinisMasyvas as $key => $vaikas) {
    foreach ($vaikas as $key2 => $value) {
            $suma[$key2]+=$tevinisMasyvas[$key][$key2];     
    }  
}
//print_r($suma);

echo '<br>';
echo '2.D) uzdavinys';
//Visus masyvus “pailginkite” iki 7 elementų

foreach(range(0,9) as $i){
    foreach(range(0,1) as $j)
    {
        $tevinisMasyvas[$i][$j]=rand(5,25);
    }
}
 //print_r($tevinisMasyvas);

echo '<br>';
echo '2.e) uzdavinys';
//Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite 
//kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo,
// turinčio indeksą 0 dideliame masyve, visų elementų sumai 
$masyvasIsMasyvo=[];
$sum=0;
foreach ($tevinisMasyvas as $key => $vaikas) {
    foreach ($vaikas as $key2 => $value) {
           $sum+=$value;
    }
 $masyvasIsMasyvo[]=$sum;
       $sum=0;
}

 print_r($masyvasIsMasyvo);

 echo '<br>';
echo '3. uzdavinys';
//Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu 
//kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z.
// Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

// marijaus generatorius $randomRaide = range('A','Z')[rand(0, 25)];

$naujasMasyvas=[];
$raides=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

foreach(range(0,9) as $i){
    foreach(range(2,rand(3,20)) as $j)
    {
        $naujasMasyvas[$i][$j]=$raides[rand(0,25)];
        sort( $naujasMasyvas[$i]);
    }
}
//print_r($naujasMasyvas);


echo '<br>';
echo '4. uzdavinys';
//Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
//kad elementai kurių masyvai trumpiausi eitų pradžioje.
// Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

$suK=[];
$beK=[];
function hasK($x,$naujasMasyvas){
if (in_array ( "K", $naujasMasyvas[$x] )){
    return 1;
}
}
foreach($naujasMasyvas as $key => $value){
if(hasK($key,$naujasMasyvas)){
    $suK[]=$value;
}
else {
   $beK[]=$value;
}
}
sort($suK);
sort($beK);

$isrusiuotasMasyvas=array_merge($suK,$beK);
//print_r( $isrusiuotasMasyvas);

echo '<br>';
echo '5. uzdavinys';
//Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
//[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, 
//place_in_row atsitiktinis skaičius nuo 0 iki 100. 

$associativeArray=[];

foreach (range(0,29) as $i) {

   $associativeArray[]=['user_id' => rand(1,100000), 'place_in_row' => rand(0,100)];
}

//print_r($associativeArray);

echo '<br>';
echo '6. uzdavinys';

//Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka.
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.


foreach (range(0,29) as $i) {
    foreach (range(0,29) as $j) {
        if ($associativeArray[$i]['user_id'] < $associativeArray[$j]['user_id']){
            $temp = $associativeArray[$i]['user_id'];
            $associativeArray[$i]['user_id'] = $associativeArray[$j]['user_id'];
            $associativeArray[$j]['user_id'] = $temp; 
        }
    }
}
echo '<br>';
//print_r( $associativeArray);


foreach (range(0,29) as $i) {
    foreach (range(0,29) as $j) {
        if ($associativeArray[$i]['place_in_row'] > $associativeArray[$j]['place_in_row']){
            $temp = $associativeArray[$i]['place_in_row'];
            $associativeArray[$i]['place_in_row'] = $associativeArray[$j]['place_in_row'];
            $associativeArray[$j]['place_in_row'] = $temp; 
        }
    }
}
echo '<br>';
//print_r( $associativeArray);


echo '<br>';
echo '7. uzdavinys';

//Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
//Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

function generuokZodi(){
$naujasZodis = '';
$raides=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
 foreach(range(0,rand(5,15)) as $j) {
         $naujasZodis .= $raides[rand(0,25)];
     }
 return $naujasZodis;
 }   

 foreach ($associativeArray as $key => $value) {
    $name = generuokZodi();
    $surname = generuokZodi();
    $associativeArray[$key]['name'] = $name;
    $associativeArray[$key]['surname'] = $surname;
}

//print_r($associativeArray);

echo '<br>';
echo '8. uzdavinys';

//Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
//generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
//Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais
// nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

$arrayFromNumAndArray = [];

foreach(range(0,9) as $i) {
    $rand = rand(0,5);
    if ($rand != 0) {
        $arrayChild = [];
        foreach(range(1,$rand) as $j) {
            $arrayChild[] = rand(0,10);
        }
        $arrayFromNumAndArray[] = $arrayChild;
    } else {
        $arrayFromNumAndArray[] = rand(0,10);
    }
}
//print_r($arrayFromNumAndArray);

echo '<br>';
echo '9. uzdavinys';

//Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
//kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, 
//to masyvo reikšmių sumos.

 foreach(range(0,9) as $i) {
    foreach(range(0,9) as $j) {
        $sumI = 0;
        $sumJ = 0;  
        if (is_array($arrayFromNumAndArray[$i])) {
            foreach($arrayFromNumAndArray[$i] as $value) {
                $sumI += $value;
            }
        } else {
            $sumI = $arrayFromNumAndArray[$i];
        }
        if (is_array($arrayFromNumAndArray[$j])) {
            foreach($arrayFromNumAndArray[$j] as $value) {
                $sumJ += $value;
            }
        } else {
            $sumJ = $arrayFromNumAndArray[$j];
        }
        if ($sumI < $sumJ) {
            $temp = $arrayFromNumAndArray[$i];
            $arrayFromNumAndArray[$i] = $arrayFromNumAndArray[$j];
            $arrayFromNumAndArray[$j] = $temp;
        }
    }
}
//print_r($arrayFromNumAndArray);

echo '<br>';
echo '10. uzdavinys';
//Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
//Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color.
// Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, 
//o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
//Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
echo '<br>';

$symbolArray = [];

foreach(range(0,9) as $i) {
    foreach(range(0,9) as $j) {
    $raides=['#','%','+','*','@','裡'];
    $symbolArray[$i][$j]['value'] = $raides[rand(0,5)];

    $naujaSpalva = '#';
    $raides=['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
    foreach(range(0,5) as $x){
        $naujaSpalva .= $raides[rand(0,15)];
    }
        $symbolArray[$i][$j]['color'] = $naujaSpalva;
    }
}
foreach(range(0,9) as $i) {
    foreach(range(0,9) as $j) { 
        $color=$symbolArray[$i][$j]['color'];
        $reiksme=$symbolArray[$i][$j]['value'];
        echo "<span style='color:$color'>$reiksme</span>";
    }
    echo '<br>';
}

