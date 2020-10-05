<?php

$test = array(11,23,72,44);

for($i=0;$i<4;$i++){
  if($test%2==0){
    $state = "even";
  }
  else{
    $state = "odd";
  }

  echo "The number ".$test[$i]." is an ".$state." number.";
  echo '<br>';
}

 ?>
