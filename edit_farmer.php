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
        // Display farmer details in a form
        $row = mysqli_fetch_assoc($result);
?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Edit Farmer - AgriFund</title>
            <style>
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
            <h2>Edit Farmer</h2>
            <form action="update_farmer.php" method="post">
                <input type="hidden" name="farmer_id" value="<?php echo $row['id']; ?>">
                <label for="farmername">Farmer Name:</label><br>
                <input type="text" id="farmername" name="farmername" value="<?php echo $row['farmername']; ?>" required><br><br>
                <label for="farmeraddress">Farmer Address:</label><br>
                <input type="text" id="farmeraddress" name="farmeraddress" value="<?php echo $row['farmeraddress']; ?>" required><br><br>
                <label for="expectedyields">Expected Yields:</label><br>
                <input type="number" id="expectedyields" name="expectedyields" value="<?php echo $row['expectedyields']; ?>" required><br><br>
                <label for="LoanAmount">Loan Amount:</label><br>
                <input type="number" id="LoanAmount" name="LoanAmount" value="<?php echo $row['LoanAmount']; ?>" required><br><br>
                <label for="otherdetails">Other Details:</label><br>
                <textarea id="otherdetails" name="otherdetails" rows="4" cols="50"><?php echo $row['otherdetails']; ?></textarea><br><br>
                <input type="submit" value="Update Farmer">
            </form>
            <footer class="bg-dark text-light text-center py-3">
                &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
            </footer>
        </body>

        </html>
<?php
    } else {
        echo "Farmer not found.";
    }

    // Close database connection
    mysqli_close($con);
} else {
    echo "Farmer ID not provided.";
}
?>