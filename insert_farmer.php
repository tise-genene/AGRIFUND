<?php
include('./controller/connect.php');

// Create an instance of the database class
$db = new database();

// Call the connection method to establish a connection
$con = $db->connection();

// Check if the connection is successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $farmername = mysqli_real_escape_string($con, $_POST['farmername']);
    $farmeraddress = mysqli_real_escape_string($con, $_POST['farmeraddress']);
    $expectedyields = mysqli_real_escape_string($con, $_POST['expectedyields']);
    $LoanAmount = mysqli_real_escape_string($con, $_POST['LoanAmount']);
    $otherdetails = mysqli_real_escape_string($con, $_POST['otherdetails']);

    // Insert the farmer into the database
    $insertFarmerQuery = "INSERT INTO farmers (farmername, farmeraddress, expectedyields, LoanAmount, otherdetails) 
                          VALUES ('$farmername', '$farmeraddress', '$expectedyields', '$LoanAmount', '$otherdetails')";
    if (mysqli_query($con, $insertFarmerQuery)) {
        header("Location: farmers_list.php"); // Adjust the path to navbar.php as needed
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
