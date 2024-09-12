<?php
include('connect.php');

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
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Validate passwords
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    // Check if the user already exists
    $checkUserQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $checkUserQuery);
    if (mysqli_num_rows($result) > 0) {
        echo "User already exists.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $insertUserQuery = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";
    if (mysqli_query($con, $insertUserQuery)) {
        header("Location:login.php"); // Adjust the path to navbar.php as needed
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
