<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "todo";


  // Create a new PDO instance
  $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

  // Set PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>