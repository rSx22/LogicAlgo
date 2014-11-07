<?php 

function pgcd($a, $b){
  while($b > 0){
    $t = $b;
    $b = $a % $b;
    $a = $t;
  }
  return $a;
}
function pgcd2($a, $b){
  while($b > 0){
    $t = $b;
    $b = $a % $b;
    $a = $t;
  }
  return [$a,$b,$t];
}

function ppcm($a,$b){
  $t1 = $a*$b;
  $t2 = pgcd($a,$b);
  return $t1/$t2;
}

$s= 176;
$p=16;

echo pgcd($p,$s);
echo "<br>";
var_dump(pgcd2($p,$s));

echo ppcm($p,$s);
echo "<br>";
$nbs = ppcm($p,$s)/$s;
$nbp = ppcm($p,$s)/$p;

echo "J'ai besoin de ".$nbs." paquets de saucisses";
echo "<br>";
echo "J'ai besoin de ".$nbp." paquets de pains";
