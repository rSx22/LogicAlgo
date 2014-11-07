<?php
$r = mt_rand(1,100);
//$r =  50;

$mage2 = function($guess) use ($r){
  if($guess == $r){
    return "ok";
  }else if($guess > $r){
    return "-";
  }else{
    return "+";
  }
};

$a = 50;
$min = 0;
$max = 100;
$i = 1;

while($mage2($a) != "ok"){
  $i++;
  if($mage2($a) == "+"){
    $min = $a;
    $a = ceil(($a+$max)/2);
  }else{
    $max = $a;
    $a = ceil(($a+$min)/2);
  }
  if($i > 8){
    die("Euh, non.");
  }
}
echo "Tu gagnes ! ".$a;
echo " en ".$i." coups";

// Cet algorithme fonctionn mais est bcp moins efficace !
//
// for($i = 1 ; $i <=100 ; $i++){
//   $ret = $mage2($i);
//   if($ret == "="){
//     echo "Tu gagnes ! ".$i;
//     break;
//   }
// }


