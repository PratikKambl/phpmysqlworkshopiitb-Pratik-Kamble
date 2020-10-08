<html>
  <h3>Enter the Data of the Student</h3>
  <form action='q2_string_functions.php' method='POST'>
      <h4>Enter your string<input type= 'text' name = 'data'><br><br></h4>
      <input type= 'submit' value = 'Submit'>
  </form>
</html>

<?php
$string = $_POST['data'];
if($string)
{
  echo "<br>Number of characters in the string: ".strlen($string1);

  $arr = explode(" ",$string);
  echo "<br>String separated into an array using spaces as splitter: ";
  foreach($arr as $val){
    echo "<br>".$val;
  }

  echo "<br><br>Reversed string :".strrev($string);

  echo "<br>String in Lower case :".strtolower($string);

  echo "<br>String in upper case :".strtoupper($string);

  echo"<br>Replacing 3rd character onwards with 'phpmysql' : ".substr_replace($string, "phpmysql", 2,10);
}
else{
  echo "Enter a valid string";
}

?>
