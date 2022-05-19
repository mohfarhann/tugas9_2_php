<?php

function intgers($amount){
  for($i = 0; $i <= $amount; $i++){
    $z = 0;
    for($j = 1; $j <= $i; $j++){
      if($i % $j == 0){
        $z++;
      }
    }
    if($z == 2){
      echo "$i ";
    }
  }
}

echo intgers(200)

?>
