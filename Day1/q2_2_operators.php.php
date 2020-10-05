<?php

$num1 = 3.14;
$num2 = 1.618;

if($num1==$num2){
  $state = " is equal to ";
}
else {
  if($num1>$num2){
    $state = " is greater than ";
  }
  else{
    $state = " is lesser than ";
  }
}

echo $num1.$state.$num2;
?>
