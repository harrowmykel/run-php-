<?php include 'connection.php';
//error  handling

error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input fields
    $data1 = $_POST['title'];
    $data2 = $_POST['description'];
    $datesys = date("Y/m/d");

    if (empty($data1) || empty($data2)) {
        echo "Please fill in all fields";
    } else {
        echo "$data1, $data2, $datesys";

        $title = $data1;
        $description = $data2;
        $date = $datesys;

        $sqlquery = "INSERT INTO todos VALUES('', '$data1', '$data2', '$date')";

        var_dump($sqlquery); // Debug: Display the SQL query

        if ($conn->query($sqlquery) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: Values not inserted correctly";
            echo $conn->$error; // Debug: Display the database error message
        }
    }
}




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
