<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "todo";

try {
  // Create a new PDO instance
  $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

  // Set PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Retrieve and sanitize form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $date=date("Y/m/d");
  $id=0;
  // Prepare the SQL query
  $query = $connection->prepare("INSERT INTO todos (id,title,description,date) VALUES('0','$title', '$description','$date')");

  // Bind the values to the prepared statement
  $query->bindParam(1, $title);
  $query->bindParam(2, $description);

  // Execute the query
  $query->execute();

  // Check if the query was successful
  echo "Data inserted successfully";
} catch (PDOException $e) {
  // Display any errors that occurred
  echo "Error: " . $e->getMessage();
}

// Close the database connection (optional, as PDO automatically closes it)
$connection = null;
?>