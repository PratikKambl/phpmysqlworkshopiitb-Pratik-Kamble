<html>
  <h3>Enter the Data of the Student</h3>
  <form action='VI2.php' method='POST'>
      <h4>Name : <input type= 'text' name = 'stName'><br><br>
          Marks out of 100 <br><br>
          Subject 1 : <input type= 'number' name = 's1'><br><br>
          Subject 2 : <input type= 'number' name = 's2'><br><br>
          Subject 3 : <input type= 'number' name = 's3'><br><br>
          Subject 4 : <input type= 'number' name = 's4'><br><br>
          Subject 5 : <input type= 'number' name = 's5'><br><br>
      </h4>
    <input type= 'submit' value = 'Get Marksheet'>
  </form>
</html>

<?php

echo '<br>';
echo "Name of Student : ".$_POST['stName'];
echo '<br>';
$marks = array($_POST['s1'],$_POST['s2'],$_POST['s3'],$_POST['s4'],$_POST['s5']);
echo "Marks in Each Subject<br>";

echo "Subject 1 : ".$marks[0];
echo '<br>';

echo "Subject 2 : ".$marks[1];
echo '<br>';

echo "Subject 3 : ".$marks[2];
echo '<br>';

echo "Subject 4 : ".$marks[3];
echo '<br>';

echo "Subject 5 : ".$marks[4];
echo '<br>';

$total = 0;
foreach($marks as $value){
  $total = $total + $value;
}
echo "Total Marks Obtained : ".$total;
echo'<br>';
echo "Total Marks : 500 <br>";
echo "Percentage : ".$total/5;
echo "%";


?>
