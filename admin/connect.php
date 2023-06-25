<?php
$mysqli = new mysqli("localhost","root","","bitis");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();

  echo "Initial character set is: " . $mysqli -> character_set_name();

// Change character set to utf8
$mysqli -> set_charset("utf8");

echo "Current character set is: " . $mysqli -> character_set_name();

$mysqli -> close();
}
?>