<?php
$server = "129.154.41.7";
$username = "SIH";
$password = "SIH";
$database = "SIH";
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    return $conn;
  }
?>