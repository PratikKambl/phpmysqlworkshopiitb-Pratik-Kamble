<?php

$mat1 = array(
  array(1,2),
  array(0,3)
);

$mat2 = array(
  array(3,0),
  array(2,1)
);

for($i=0;$i<2;$i++){
  for($j=0;$j<2;$j++){
    echo $mat2[$i][$j];
    echo " ";
  }
  echo '<br>';
}
echo '<br>';

for($i=0;$i<2;$i++){
  for($j=0;$j<2;$j++){
    echo $mat1[$i][$j];
    echo " ";
  }
  echo '<br>';
}
echo '<br>';

echo "Addition of two matrices :";
echo '<br>';

//main logic
for($i=0;$i<2;$i++){
  for($j=0;$j<2;$j++){
    echo $mat1[$i][$j]+$mat2[$i][$j];
    echo " ";
  }
  echo '<br>';
}
 ?>
