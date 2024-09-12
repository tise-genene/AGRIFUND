<!DOCTYPE html>
<html>

<head>
    <title>Lenders List - AgriFund</title>
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
    <h2>Lender List</h2>
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

    // Retrieve lenders' data from the database
    $getLendersQuery = "SELECT id, email FROM lender";
    $result = mysqli_query($con, $getLendersQuery);

    // Check if any lenders are found
    if (mysqli_num_rows($result) > 0) {
        // Display lenders list in a table
        echo "<table border='1'>";
        echo "<tr><th>Lender ID</th><th>Email</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td><a href='lender_details.php?lender_id=" . $row['id'] . "'>View Details</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No lenders found.";
    }

    // Close database connection
    mysqli_close($con);
    ?>

    <br>
    <a href="add_lender.php">Add Lender</a>
    <footer class="bg-dark text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>
</body>

</html>