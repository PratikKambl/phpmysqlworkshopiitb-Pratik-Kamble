<?php

$test = array("B","O","A","T");

for($i=0;$i<4;$i++){
  switch($test[$i])
  {
    case "A":
      $state = "vowel";
      break;

    case "E":
      $state = "vowel";
      break;

    case "I":
      $state = "vowel";
      break;

    case "O":
      $state = "vowel";
      break;

    case "U":
      $state = "vowel";
      break;

    default:
      $state = "consonant";
  }
  echo "The letter ".$test[$i]." is a ".$state;
  echo '<br>';
}

 ?>
