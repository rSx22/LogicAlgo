<?php
$r = mt_rand(1,100);
//$r =  50;

$mage = function($guess) use ($r){
  if($guess == $r){
    return "ok";
  }else{
    return "no";
  }
};

for($i = 100 ; $i >= 1 ; $i--){
  $ret = $mage($i);
  if($ret == "ok"){
    echo "Tu gagnes ! ".$i;
    break;
  }
}


