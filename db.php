<?php
$servername = "localhost";
$username = "root";
$password = "mypassword123";
$dbname = "gym_capacity";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
