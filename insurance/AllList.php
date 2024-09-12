<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Farmer List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">AgriFund</a>
        </nav>
    </header>

    <div class="container">
        <h2>All Farmer List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Farmer Name</th>
                    <th>Loan Amount</th>
                    <th>Action</th>
                    <th>Send-Insurance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the database connection file
                include('../controller/connect.php');

                // Create an instance of the database class
                $db = new database();

                // Call the connection method to establish a connection
                $con = $db->connection();

                // Check if the connection is successful
                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Retrieve farmers data from the database
                $getFarmersQuery = "SELECT id, farmername, LoanAmount FROM farmers";
                $result = mysqli_query($con, $getFarmersQuery);

                // Check if any farmers are found
                if (mysqli_num_rows($result) > 0) {
                    // Display farmers list in a table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['farmername'] . "</td>";
                        echo "<td>$" . $row['LoanAmount'] . "</td>";
                        echo "<td><a href='farmer_details.php?farmer_id=" . $row['id'] . "'>View Details</a></td>";
                        echo "<td><a href='./insurance/AllList.php?farmer_id=" . $row['id'] . "'>Approve</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No farmers found.</td></tr>";
                }

                // Close database connection
                mysqli_close($con);
                ?>
            </tbody>
        </table>
    </div>

    <footer class="bg-dark text-light text-center py-3 fixed-bottom">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
