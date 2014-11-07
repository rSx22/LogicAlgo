<?php 

function pgcd_counter($a, $b){
  $i = 0;
  while($b > 0){
    $t = $b;
    $b = $a % $b;
    $a = $t;
    $i = $i +1;
  }
  return [$a,$i];
}


$ret= pgcd_counter(212371111,112311111);
echo "Le pgcd vaut ".$ret[0];
echo "<br>";
echo "Fait en ".$ret[1]." ops";
