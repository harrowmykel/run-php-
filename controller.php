<?php

include 'connection.php';

function abc()
{
  // Retrieve and sanitize form data
  try {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date("Y/m/d");
    $id = '';
    // Prepare the SQL query
    $connection = DB::getConnection();
    $query = $connection->prepare("INSERT INTO todos (id,title,description,date) VALUES(?,?, ?,?)");

    // Bind the values to the prepared statement
    $query->bindParam(1, $id);
    $query->bindParam(2, $title);
    $query->bindParam(3, $description);
    $query->bindParam(4, $date);

    // Execute the query
    $query->execute();

    // Check if the query was successful
    echo "Data inserted successfully";
  } catch (PDOException $e) {
    // Display any errors that occurred
    echo "Error: " . $e->getMessage();
  }
}

function  abc2()
{
}
////
function checkPostRequest()
{
  if (!isset($_POST['post-action'])) {
    return;
  }
  $value = $_POST['post-action'];
  if ($value == 'add-property') {
    abc();
  }
  if ($value == 'update-property') {
    abc2();
  }
}
