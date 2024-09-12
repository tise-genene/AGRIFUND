<!DOCTYPE html>
<html>

<head>
    <title>Farmer Details - AgriFund</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .farmer-details {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h2>Farmer Details</h2>
    <?php
    // Check if farmer ID is provided in the URL
    if (isset($_GET['farmer_id'])) {
        // Retrieve farmer ID from the URL
        $farmerId = $_GET['farmer_id'];

        include('./controller/connect.php');

        // Create an instance of the database class
        $db = new database();

        // Call the connection method to establish a connection
        $con = $db->connection();

        // Check if the connection is successful
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve farmer details from the database based on farmer ID
        $getFarmerQuery = "SELECT * FROM farmers WHERE id = '$farmerId'";
        $result = mysqli_query($con, $getFarmerQuery);

        // Check if the farmer is found
        if (mysqli_num_rows($result) > 0) {
            // Display farmer details
            $row = mysqli_fetch_assoc($result);
            echo "<p>Name: " . $row['farmername'] . "</p>";
            echo "<p>Address: " . $row['farmeraddress'] . "</p>";
            echo "<p>Expected Yields: " . $row['expectedyields'] . "</p>";
            echo "<p>Loan Amount: $" . $row['LoanAmount'] . "</p>";
            echo "<p>Other Details: " . $row['otherdetails'] . "</p>";


            echo '<a href="edit_farmer.php?farmer_id=' . $row['id'] . '">Edit</a>';
            // Add a button to return to Farmers List Page

        } else {
            echo "Farmer not found.";
        }

        // Close database connection
        mysqli_close($con);
    } else {
        echo "Farmer ID not provided.";
    }
    ?>
</body>

</html>