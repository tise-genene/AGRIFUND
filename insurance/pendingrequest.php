<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Farmer List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
   <style> 
.container {
    max-width: 800px;
    margin: 0 auto;
    margin-top: 40px;
}

h2 {
    margin-bottom: 20px;
}

</style>
</head>

<body>
    <div class="container">
        <h2>Pending Farmer List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Farmer Name</th>
                    <th>Insurance Savings</th>
                    <th>Reason for Pending</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>$10,000</td>
                    <td>Insufficient savings</td>
                    <td>
                        <button class="btn btn-success" onclick="approveFarmer(1)">Approve</button>
                        <button class="btn btn-danger" onclick="rejectFarmer(1)">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>$8,000</td>
                    <td>Unmet eligibility criteria</td>
                    <td>
                        <button class="btn btn-success" onclick="approveFarmer(2)">Approve</button>
                        <button class="btn btn-danger" onclick="rejectFarmer(2)">Reject</button>
                    </td>
                </tr>
                <!-- Add more farmer rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function approveFarmer(farmerId) {
            // Perform logic to approve farmer and save to approved list
            // Send notification to admin

            // Redirect to approved list page
            window.location.href = "approved-list.html";
        }

        function rejectFarmer(farmerId) {
            // Perform logic to reject farmer and save rejection reason
            // Send notification to admin

            // Redirect to rejected list page
            window.location.href = "rejected-list.html";
        }
    </script>
</body>

</html>