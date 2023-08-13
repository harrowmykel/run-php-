<?php include 'connection.php';


// Retrieve and sanitize form data
$title = mysqli_real_escape_string($connection, $_POST['title']);
$description = mysqli_real_escape_string($connection, $_POST['description']);

// Construct the SQL query
$sqlquery = "INSERT INTO todos (id,title,description,date) VALUES ('','$title', '$description','$date')";

// Execute the query
$result = mysqli_query($connection, $sqlquery);

// Check if the query was successful
if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);




// collect all data from database
    $sqlquery1 = " SELECT * FROM todos";
    //take the Rows Values
    $rows="SELECT id, title, description, date from todos";
    // collect value of input field
    if (empty($sqlquery1)) {
        echo "Data is empty";
    } else {
        echo "Data is full";
         
        if ($conn->query($sqlquery1) === TRUE) {
            echo "Succefully";
        } else {
            echo "Not Sucessfully";
        }
    }

?>
