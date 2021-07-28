<?php
//Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. 
//Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip,
// kad visos reikšmės masyve būtų unikalios.
// Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje,
// o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 
//Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės).
// Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite.
// (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)
$pirmaPuse=0;
$antraPuse=0;
$pirminisMasyvas=[];
$counter=0;
//generuoja skaiciu masyva
do{
$random=rand(0,300);
    if(!in_array($random,$pirminisMasyvas)){
    $pirminisMasyvas[]=$random;
    $counter++;}
}
while($counter<101);
//suranda didziausia skaiciu reiksme issaugo ir istrina is masyvo
$didziausiasSkaicius=max($pirminisMasyvas);
$indexOfMax=(array_search(max($pirminisMasyvas), $pirminisMasyvas));
unset($pirminisMasyvas[$indexOfMax]);
//tikrina ar masyvo skaiciai iki vidurinio is abieu pusiu nesiskiria per 30 , jai skirias sumaiso masyva. 
do{
    shuffle($pirminisMasyvas);
foreach ($pirminisMasyvas as $key => $value) {
    if($key<50){
        $pirmaPuse+=$value;
    }
    else{
        $antraPuse+=$value;
    }
}
}
while($pirmaPuse-$antraPuse>30);
//dalinam masyva
$masyvasPoPadalinimo=array_chunk($pirminisMasyvas,50);

sort($masyvasPoPadalinimo[0]);
rsort($masyvasPoPadalinimo[1]);
//jungiam masyva
array_push($masyvasPoPadalinimo[0],$didziausiasSkaicius);
$sujungtasMasyvas=array_merge($masyvasPoPadalinimo[0],$masyvasPoPadalinimo[1]);

print_r( $sujungtasMasyvas);


