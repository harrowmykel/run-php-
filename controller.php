<?php include 'connection.php';


  // Retrieve and sanitize form data
  
  try{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date=date("Y/m/d");
    $id='';
    // Prepare the SQL query
    
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
// Close the database connection (optional, as PDO automatically closes it)
$connection = null;

//////////////////////////////////////////////////////

// collect all data from database
    $sqlquery1[] = "SELECT id,title,description,date FROM todos";
    $result=$conn->query($sqlquery1);
    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
             echo $row["id"].$row["title"].$row["description"].$row["date"];
        }
    }else{echo"No DATA FOund in database";}
$conn->close();
?>