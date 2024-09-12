<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Lending Requests</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom styles */
        .pending-requests {
            margin-top: 50px;
        }
        
        .table-header {
            background-color: #343a40;
            color: #fff;
        }
        
        .table-row:nth-child(odd) {
            background-color: #f8f9fa;
        }
        
        .table-row:nth-child(even) {
            background-color: #e9ecef;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
         .navbar-sidebar {
            height: 88vh;
            width: 250px;
            position: fixed;
            top: 20px;
            left: 0;
            z-index: 2;
            padding-top: 100px;
            background-color: green;
            display: flex;
            flex-direction: row; /* Added flex-direction to make the sidebar appear in a column */
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        
        .navbar-sidebar .nav-link {
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-bottom: 2px solid white;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">AgriFund</a>
        </nav>
    </header>
    <div class="navbar-sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="FarmerList.php">Farmers List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Regulation.php">Rules and Regulations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="TopRating.php">Top Rated Farmers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?logout">Logout</a>
            </li>
            <!-- Navbar items -->
        </ul>
    </div>
    <div class="container">
        <div class="pending-requests">
            <h2>Pending Lending Requests</h2>
            <table class="table">
                <thead class="table-header">
                    <tr>
                        <th>Request ID</th>
                        <th>Borrower Name</th>
                        <th>Loan Amount</th>
                        <th>Loan Duration</th>
                        <th>Interest Rate</th>
                        <th>Additional Information</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td>123456</td>
                        <td>John Doe</td>
                        <td>$10,000</td>
                        <td>12 months</td>
                        <td>5%</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae finibus lacus, sed tincidunt ipsum. Phasellus et egestas ex.</td>
                        <td><a href="employee_details.php?id=123456" class="btn btn-primary">View Details</a></td>
                    </tr>
                    <tr class="table-row">
                        <td>654321</td>
                        <td>Jane Smith</td>
                        <td>$5,000</td>
                        <td>6 months</td>
                        <td>4%</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae finibus lacus, sed tincidunt ipsum. Phasellus et egestas ex.</td>
                        <td><a href="employee_details.php?id=654321" class="btn btn-primary">View Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg- text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>
    <script src="https://code.jquery.com/jquery-3.In the modified code, I added an additional column to the table with a header titled "Action". In each row of the table, I included a "View Details" button that links to the employee details page. The button has the class "btn btn-primary" to style it as a Bootstrap primary button.

The "href" attribute of each button is set to "employee_details.php?id=123456" and "employee_details.php?id=654321" respectively, where the "id" parameter represents the unique identifier of each employee. Make sure to replace these URLs with the appropriate URL of your employee details page.

When the user clicks on the "View Details" button for a specific employee, they will be directed to the employee details page with the corresponding employee ID as a query parameter. You can retrieve this ID on the employee details page and use it to fetch and display the relevant employee information.

Remember to update the code according to your specific requirements and adjust the URLs and parameter names to match your application's routing and data retrieval mechanisms.