<?php
//include_once 'psl-config.php';   // As functions.php is not included
$host = "10.2.8.180";
$user = "nipun";
$db_name = "secure_login";
$password = "123ltrc";
$mysqli = new mysqli($host, $user, $db_name, $password);

$con=mysqli_connect($host,$user, $password, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 


?>
