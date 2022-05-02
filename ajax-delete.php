<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "DELETE FROM students WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
