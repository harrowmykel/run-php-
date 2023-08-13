<?php include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $data1 = $_REQUEST['title'];
    $data2 = $_REQUEST['description'];
    $datesys = date("Y-m-d");

    if (empty($data1) || empty($data2)) {
        echo "Data is empty";
    } else {
        echo "Data: $data1, $data2, $datesys";
        
        $title = $data1;
        $description = $data2;
        $date = $datesys;

        $sqlquery = "INSERT INTO todos VALUES('', '$data1', '$data2', '$date')";
        
        if ($conn->query($sqlquery) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error:values not inserted correctly";
        }
    }
}



// collect all data from database
    $sqlquery1 = " SELECT * FROM todos";
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
