<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['farmer_id']) && isset($_POST['farmername']) && isset($_POST['farmeraddress']) && isset($_POST['expectedyields']) && isset($_POST['LoanAmount'])) {
        // Retrieve form data
        $farmerId = $_POST['farmer_id'];
        $farmerName = $_POST['farmername'];
        $farmerAddress = $_POST['farmeraddress'];
        $expectedYields = $_POST['expectedyields'];
        $loanAmount = $_POST['LoanAmount'];
        $otherDetails = $_POST['otherdetails'];

        // Include database connection
        include('./controller/connect.php');

        // Create an instance of the database class
        $db = new database();

        // Call the connection method to establish a connection
        $con = $db->connection();

        // Check if the connection is successful
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Update farmer details in the database
        $updateFarmerQuery = "UPDATE farmers SET farmername='$farmerName', farmeraddress='$farmerAddress', expectedyields='$expectedYields', LoanAmount='$loanAmount', otherdetails='$otherDetails' WHERE id='$farmerId'";
        if (mysqli_query($con, $updateFarmerQuery)) {
            // Redirect back to farmer details page with success message
            header("Location: farmer_details.php?farmer_id=$farmerId&msg=success");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }

        // Close database connection
        mysqli_close($con);
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
