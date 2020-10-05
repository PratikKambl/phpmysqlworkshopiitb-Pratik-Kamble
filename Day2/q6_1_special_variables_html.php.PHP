<html>
  <h3>Enter the sides of the Triangle.</h3>
  <form action='VI1.php' method='GET'>
      <h4>Side 1:<input type= 'number' name = 's1'><br><br>
          Side 2:<input type= 'number' name = 's2'><br><br>
          Side 3:<input type= 'number' name = 's3'><br>
      </h4>
    <input type= 'submit' value = 'Check'>
  </form>
</html>

<?php

$side = array($_GET['s1'],$_GET['s2'],$_GET['s3']);
sort($side);
if($side[0]+$side[1]<=$side[2]){
  echo "This is not a Triangle";
}
else{
  if($side[0]==$side[1] && $side[1]==$side[2]){
    echo "<br>Triangle is Equilateral";
  }
  else{
    if(( pow($side[0],2) + pow($side[1],2) ) == (pow($side[2],2))){
      echo "<br>Triangle is Right Angled";
    }
    else{
      if($side[0]==$side[1] || $side[1]==$side[2] || $side[2]==$side[0]){
        echo "<br>Triangle is Isoceles";
        /*if(( pow($side[0],2) + pow($side[1],2) ) == (pow($side[2],2))){
            echo " and Right Angled";
          }*/
      }
      else{
        echo "<br>Triangle is Scalene";
      }
    }
  }
}
?>
