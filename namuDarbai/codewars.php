<?php
$a=[1,2,2];
$b=[1];
$result[]=array_diff($a,$b);
print_r( $result);
  $ans=[];
 foreach($result[0] as $value){
   $ans[]=$value;
 }

print_r($ans);
