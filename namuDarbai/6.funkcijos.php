<?php 
echo '<pre>';
echo '<br>';
echo '1 uzdavinys <br>';

//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function textColor($text){
    echo "<h1>$text</h1>";
}
$zebras='zebras';
textColor($zebras);
echo '<pre>';
echo '<br>';
echo '2 uzdavinys <br>';
// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, 
// įterpiamas į h tagą, o antrasis tago numeris (1-6). 
// Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function htagNum($text,$num){
    echo "<h$num>$text</h$num>";
}

htagNum('zebras',3);

echo '<pre>';
echo '<br>';
echo '3 uzdavinys <br>';
///Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
//Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
//Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu
// (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą 
//(jeigu reikia) uždavinio funkciją ir preg_replace_callback();

function replace($text, $h = 1) {
    if (is_array($text)) {
        $text = $text[0];
    }
    
    echo"<h$h>$text</h$h>";
}
$string = md5( time() ); 
$afterCon='';
print_r($string); 
$pattern = '/\d+/';

preg_replace_callback($pattern, 'replace', $string);

print '<br>';

echo '<pre>';
echo '<br>';
echo '4 uzdavinys <br>';

//Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos
// (išskyrus vienetą ir patį save)
 //Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

 $argumentas=10.33;

function dalyba( $a)
{$count = 0;
    if ( is_integer($a) ) {    
        for($i=2;$i<$a;$i++){
            if($a%$i==0){
    $count++;
            }    
        }
    }else {echo 'ivesti galima tik sveika skaiciu';}
return $count;}


$count= dalyba($argumentas);
echo '<br>kiek kartu dalijasi be liekanos :',$count;
echo '<pre>';
echo '<br>';
echo '5 uzdavinys <br>';
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77.
// Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka,
//panaudodami ketvirto uždavinio funkciją.

$randMasyvas=[];

foreach(range(0,100) as $i){
    $randMasyvas[]=rand(33,77);
}

usort($randMasyvas, function($a, $b) {
    return (dalyba($a) <=> dalyba($b));
});

//print_r ($randMasyvas);
// foreach (range(0,100) as $i) {
//     foreach (range(0,100) as $j) {
//         if (dalyba($randMasyvas[$i]) > dalyba($randMasyvas[$j])){
//             $temp=$randMasyvas[$i];
//             $randMasyvas[$i]=$randMasyvas[$j];
//             $randMasyvas[$j]=$temp;
//         }
        
//         }
//     }

// print_r ($randMasyvas);

echo '<pre>';
echo '<br>';
echo '6 uzdavinys <br>';

//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777.
// Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.


$m6=[];
foreach (range(0,99) as $i)
{
$m6[]=rand(333,777);
}

foreach($m6 as $key => $value) {
    if ( 0 == dalyba($value) ) {
        echo'[', $key,']',' ', $value,' ';
        unset($m6[$key]);
    } 
   
}
print_r($m6);

echo '<pre>';
echo '<br>';
echo '7 uzdavinys <br>';
//Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį,
// elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas,
// kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. 
//Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. 
//Paskutinio masyvo paskutinis elementas yra lygus 0;


$tevas =[];
$gylis = rand(10,30);
foreach(range(0,rand(10,20)-1) as $i){
    $tevas[]=rand(0,10);
}
$tevas[] = generator($gylis);
echo "gylis lygus : $gylis <br>";

function generator($dept){
    $arrLength=rand(10,20);
    $arr=[];
    for($i=0;$i<$arrLength-1;$i++){
        $arr[]=rand(10,20);
    }
    if($dept>0){
        $arr[]=generator($dept-1);
    }
    else{
        $arr[]=0;
    }
 return $arr; 
}
print_r($tevas);

echo '<pre>';
echo '<br>';
echo '8 uzdavinys <br>';

//Suskaičiuokite septinto uždavinio elementų, 
//kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.
$sumAll=0;
function sumArr($arr){
   static $sum = 0;
        foreach($arr as $val) {
            if(!is_array($val)) {
                $sum += $val;
            } else {
                sumArr($val);
            }
    }
    return $sum;
}

$sumAll=sumArr($tevas);
//echo $sumAll;

echo '<pre>';
echo '<br>';
echo '9 uzdavinys <br>';
// Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
//  Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, 
//  prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33.
//   Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą.
//  Kartokite, kol sąlyga nereikalaus pridėti elemento. 

$array9=[];

foreach(range(0,2) as $i){
    $array9[]=rand(1,33);
}

function test(&$array)
{
    $arr = array_slice($array, -3, 3);
    foreach ($arr as $value) {
        if (dalyba($value)) {
            $random = rand(1, 33);
            $array[] = $random;
            //print_r($array);
            test($array);
            break;
        }
    }
}
test($array9);

//print_r($array9);

echo '<pre>';
echo '<br>';
echo '10 uzdavinys <br>';

// Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų,
//  kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo
//   (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70,
//    suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3.
//     Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 

$array10=[];

foreach(range(0,9) as $i) {
    foreach(range(0,9) as $j) {
        $array10[$i][$j]=rand(1,100);
    }
}
//print_r($array10);

function check($arr){
    $sum=0;
    $count=0;
     foreach (range(0,9) as $i) {
        foreach (range(0,9) as $j) {
            if (dalyba($arr[$i][$j])) {
               // print_r($arr[$i][$j]);
            $sum+=$arr[$i][$j];
            $count++;
           
            }
        }
    } 
    if (($sum / $count) < 70){

    }
}
check($array10);

// echo '10.<br>';
// $tenArr= [];
// foreach(range(0, 9) as $y) {
//     foreach(range(0, 9) as $x) {
//         $tenArr[$y][$x] = rand(1, 100);
//     }
// }

// function checkArr(&$array) {
//     $primeValues = 0;
//     $primeCount = 0;

//     foreach($array as $subArr) {
//         foreach($subArr as $value) {
//             if (divisionCount($value) === 0) {
//                 $primeValues += $value;
//                 $primeCount++;
//             }
//         }
//     }
//     if ($primeValues/$primeCount < 70) {
//         $smallest = PHP_INT_MAX;
//         $y = 0;
//         $x = 0;
//         foreach($array as $ykey => $subArr) {
//             foreach($subArr as $xkey => $value) {
//                 if ($value < $smallest) {
//                     $smallest = $value;
//                     $y = $ykey;
//                     $x = $xkey;
//                 }
//             }
//         }
//         $array[$y][$x] += 3;
//         echo 'Send';
//         checkArr($array);
//     } else {
//         return;
//     }
// }

// checkArr($tenArr);
// print_r($tenArr)