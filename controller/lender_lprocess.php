<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Include database connection file
    include('connect.php');

    // Create an instance of the database class
    $db = new database();

    // Call the connection method to establish a connection
    $con = $db->connection();

    // Check if the connection is successful
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the user exists
    $checkUserQuery = "SELECT * FROM lender WHERE email = '$email'";
    $result = mysqli_query($con, $checkUserQuery);

    if (mysqli_num_rows($result) == 1) {
        // User exists, verify password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Password is correct, log in the user
            header("Location: ../view/Home.php"); // Adjust the path to navbar.php as needed
            exit;
        } else {
            // Password is incorrect
            $error_message = "Incorrect password.";
        }
    } else {
        // User does not exist
        $error_message = "User not found.";
    }

    // Close database connection
    mysqli_close($con);
}
