<!DOCTYPE html>
<html>

<head>
    <title>Lender Details - AgriFund</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>

<body>
    <h2>Lender Details</h2>
    <?php
    // Check if lender ID is provided in the URL
    if (isset($_GET['lender_id'])) {
        // Retrieve lender ID from the URL
        $lenderId = $_GET['lender_id'];

        // Include database connection file
        include('./controller/connect.php');

        // Create a new instance of the database class
        $db = new database();

        // Establish a database connection
        $con = $db->connection();

        // Check if the connection is successful
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve lender details from the database based on lender ID
        $getLenderQuery = "SELECT * FROM lender WHERE id = '$lenderId'";
        $result = mysqli_query($con, $getLenderQuery);

        // Check if the lender is found
        if (mysqli_num_rows($result) > 0) {
            // Display lender details
            $row = mysqli_fetch_assoc($result);
            echo "<p>ID: " . $row['id'] . "</p>";
            echo "<p>Email: " . $row['email'] . "</p>";
            // Add more fields as needed

            // Add a button or link to return to the lenders list page
            echo '<a href="lenders_list.php">Back to Lenders List</a>';
        } else {
            echo "Lender not found.";
        }

        // Close database connection
        mysqli_close($con);
    } else {
        echo "Lender ID not provided.";
    }
    ?>
</body>

</html>