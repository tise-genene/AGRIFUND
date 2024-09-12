<!DOCTYPE html>
<html>

<head>
    <title>Farmers List - AgriFund</title>


    <style>
        /* styles.css */

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Action link styles */
        .action-link {
            text-decoration: none;
            color: #007bff;
            /* Bootstrap's primary color */
        }

        .action-link:hover {
            text-decoration: underline;
            color: #0056b3;
            /* Darker shade of primary color */
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;

        }
    </style>
</head>

<body>
    
    <h2>Farmers List</h2>
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


    // Check if the farmer ID is set in the query parameters
    if (isset($_GET['farmer_id'])) {
        // Sanitize the ID to prevent SQL injection
        $farmer_id = mysqli_real_escape_string($con, $_GET['farmer_id']);

        // Construct the SQL query to delete the farmer
        $deleteQuery = "DELETE FROM farmers WHERE id = '$farmer_id'";

        // Perform the deletion
        if (mysqli_query($con, $deleteQuery)) {
            echo "Farmer deleted successfully.";
        } else {
            echo "Error deleting farmer: " . mysqli_error($con);
        }
    }


    // Retrieve farmers data from the database
    $getFarmersQuery = "SELECT id, farmername, LoanAmount FROM farmers";
    $result = mysqli_query($con, $getFarmersQuery);

    // Check if any farmers are found
    if (mysqli_num_rows($result) > 0) {
        // Display farmers list in a table
        echo "<table border='1'>";
        echo "<tr><th>Farmer Name</th><th>Loan Amount</th><th>Action</th><th>Delete</th><th>Send-Insurance</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['farmername'] . "</td>";
            echo "<td>$" . $row['LoanAmount'] . "</td>";
            echo "<td><a href='farmer_details.php?farmer_id=" . $row['id'] . "'>View</a></td>";
            echo "<td><a href='farmers_list.php?farmer_id=" . $row['id'] . "'>Delete</a></td>";
            echo "<td><a href='./insurance/AllList.php?farmer_id=" . $row['id'] . "'>SEND For Approval</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No farmers found.";
    }

    // Close database connection
    mysqli_close($con);
    ?>

    <br>
    <a href="add_farmer.php">Add Farmer</a>
    <footer class="bg-dark text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>
</body>

</html>