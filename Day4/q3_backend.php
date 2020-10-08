<?php
//Propertiesof file
$name = $_FILES["myfile"]["name"];
$type = $_FILES["myfile"]["type"];
$size = $_FILES["myfile"]["size"];
$temp = $_FILES["myfile"]["tmp_name"];
$error = $_FILES["myfile"]["error"];


if($error){
  die("Error uploading file! code".$error);
}
else{

  if($size < 2000000){
    echo "Upload complete<br>";
    echo "<br>File name : ".$name;
    echo "<br>File type : ".$type;
    echo "<br>File size : ".$size;
    echo "<br>File temp : ".$temp;
    if($error){
      echo "<br>File error : ".$error;
    }
  }
  else{
    echo "Upload a file less than 2 Mb";
  }
}
 ?>
