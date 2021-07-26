<?php
echo '1 uzdavinys <br>';
//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis).
// Atspausdinti trumpesnį stringą.

$aktorius='Vasilisa Grazioji';
$antasAktorius='Aladinas Lempauskas';

if (strlen($aktorius)==strlen($antasAktorius)){
    echo 'abu vardai veinodo ilgio';}
    else{
        if (strlen($aktorius)>strlen($antasAktorius)){
            echo $aktorius;
        }
        else {
            echo $antasAktorius;
        }
    }


echo '<br>';
echo '<br>';

echo '2 uzdavinys <br>';

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
// Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
$mylimasAktorius1= 'Nevezis Zukaskas';
$mylimasAktorius2='Zuviukas Nemo';

$vardasPavarde1 = explode(" ", $mylimasAktorius1);
$vardasPavarde2= explode(" ",$mylimasAktorius2);

$VardasDidelis1=strtoupper ($vardasPavarde1[0]);
$VardasDidelis2=strtoupper($vardasPavarde2[0]);
$pavardeMaza1=strtolower($vardasPavarde1[1]);
$pavardeMaza2=strtolower($vardasPavarde2[1]);

echo $VardasDidelis1,' ',$pavardeMaza1,'<br>';
echo $VardasDidelis2,' ',$pavardeMaza2;

echo '<br>';
echo '<br>';

echo '3 uzdavinys <br>';
//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
//Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
//Jį atspausdinti.

$aktoriusMylimas1='Vilkas Pilkas';
$aktoriusMylimas2='Laima Raudonkepuraite';


$aktoriusMylimas1Array = explode(" ", $aktoriusMylimas1);
$aktoriusMylimas2Array= explode(" ",$aktoriusMylimas2);

$vardoRaide1=$aktoriusMylimas1Array[0][0];
$vardoRaide2=$aktoriusMylimas2Array[0][0];
$pavardesRaide1=$aktoriusMylimas1Array[1][0];
$pavardesRaide2=$aktoriusMylimas2Array[1][0];
$firstLetters=$vardoRaide1.$pavardesRaide1.$vardoRaide2.$pavardesRaide2;
echo '<br>';
echo $firstLetters;


echo '<br>';
echo '<br>';

echo '4 uzdavinys <br>';


//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
// Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.


$aktorius41='Jonas Valanciunas';
$aktorius42='Domantas Sabonis';

$aktorius41Padalintas = explode(" ", $aktorius41);
$aktorius42Padalintas= explode(" ",$aktorius42);


$paskutinesVardoRaides41= substr($aktorius41Padalintas[0], -3);
$paskutinespavardesRaides41= substr($aktorius41Padalintas[1], -3);
$paskutinesVardoRaides42= substr($aktorius42Padalintas[0], -3);
$paskutinespavardesRaides42= substr($aktorius42Padalintas[1], -3);

$sujungta=$paskutinesVardoRaides41.$paskutinespavardesRaides41.$paskutinesVardoRaides42.$paskutinespavardesRaides42;

echo $sujungta;


echo '<br>';
echo '<br>';

echo '5 uzdavinys <br>';

//Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.
//  Rezultatą atspausdinti.

$fraze='An American in Paris';

$pakeistaFraze=str_replace('a','*',$fraze);
$result=str_replace('A','*',$pakeistaFraze);
echo $result;


echo '<br>';
echo '<br>';

echo '6 uzdavinys <br>';
//Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$america= 'An American in Paris';
$count=substr_count($america,'a') + substr_count($america,'A');

echo $count;

echo '<br>';
echo '<br>';

echo '7 uzdavinys <br>';
//Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
//Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$filmuPavadinimai= array("An American in Paris","'Breakfast at Tiffany's'","2001: A Space Odyssey","It's a Wonderful Life");
$balses = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

for ($i=0;$i<4;$i++) {
$answer=str_replace($balses, '', $filmuPavadinimai[$i]);
echo $answer, '<br>';  
}


echo '<br>';
echo '<br>';

echo '8 uzdavinys <br>';
//Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.


$test='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$re = '/\d/';
$number=preg_match_all($re, $test, $matches);
print_r($matches);


echo '<br>';
echo '<br>';

echo '9 uzdavinys <br>';
//Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
//yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu 
//“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$expresion1= "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$expresion2= "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$expresion1answ= preg_match_all('/[a-zA-Z]{1,5}/', $expresion1, $matches, PREG_SET_ORDER, 0);

echo $expresion1answ, '<br>';

$expresion2answ=preg_match_all('/[a-zA-Z]{1,5}/', $expresion2, $matches, PREG_SET_ORDER, 0);

echo $expresion2answ;

echo '<br>';
echo '<br>';

echo '10 uzdavinys <br>';
//Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. 
//Stringo ilgis 3 simboliai.

$leters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','z');
$emptyString='';

for($i=0;$i<4;$i++){
$emptyString.=$leters[rand(0,21)];
}
echo $emptyString;

echo '<br>';
echo '<br>';

echo '11 uzdavinys <br>';
//Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
//o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. 
//Žodžiai neturi kartotis. (reikės masyvo)
$expresion1arr=explode(" ",$expresion1);
$expresion2arr=explode(" ",$expresion2);
$playGround=array_merge($expresion1arr,$expresion2arr);
$sentence='';
$length=count($playGround)-1;
$numbers=range(1,$length);
shuffle($numbers);

for ($i=0; $i <=10 ; $i++) { 
$sentence.=' '.$playGround[($numbers[$i])];
}

echo $sentence;