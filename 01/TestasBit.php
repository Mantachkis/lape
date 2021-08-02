<?php

echo 'pirmas uzdavinys';
echo '<br>';
echo '<pre>';
$masyvas=[];
foreach(range(0,100) as $i){
  if ($i%10==0){
  $masyvas[]='A';}
  else{
      $masyvas[]='B';
  }
}
//print_r($masyvas);

echo '<br>';
echo 'antras uzdavinys';
echo '<br>';
$i=0;
$a=['A'];
$b=['B'];

// foreach($masyvas as $index => $value){
// if($value == 'A'){
//     $rand=rand(3,10);
//     for ($x=0;$x<=$rand;$x++){
//     $masyvas[$index]= $a;
//     array
// }
// }
// else{
//     $rand=rand(3,10);
//     for ($y=0;$y<=$rand;$y++){
//     $masyvas[$index]= $b;}
// }
// }

foreach($masyvas as $index => $value){
    foreach($value as $j)
    {
        if($value == $a){
    $rand=rand(3,10);
    for ($x=0;$x<=$rand;$x++){
    $masyvas[$index][$j]= $a;
   
}
        }
        else{
    $rand=rand(3,10);
    for ($y=0;$y<=$rand;$y++){
    $masyvas[$index][$j]= $b;}
}
    
}}
print_r($masyvas);

echo '<br>';
echo 'trecias uzdavinys';
echo '<br>';