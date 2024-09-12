<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding-top: 70px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Top navigation */
        .topnav {
            position: fixed;
            top: 0;
            right: 0;
            width: calc(100% - 250px);
            background-color: #343a40;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topnav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        .topnav a:hover {
            background-color: #495057;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Center content */
        .center-content {
            display: flex;
            padding-top: 50px;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 70px);
            margin-left: 200px;
            /* Adjust based on top navigation height */
        }

        /* Cards container */
        .cards-container {
            display: flex;
            flex-direction: row-reverse;
            /* Display cards in reverse order horizontally */
            gap: 20px;
            /* Adjust the gap between cards */
        }

        /* Cards */
        .card {
            width: 300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 15px;
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

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Home</a>
        <a href="add_farmer.php">Add Farmer</a>
        <a href="farmers_list.php">View Farmer Lists</a>
        <a href="viewlender.php">View Lender Details</a>
        <a href="#">Approve Loan</a>
        <a href="#">Pending Notification</a>
    </div>

    <!-- Top navigation -->
    <div class="topnav">
        <a href="navbar.php">Home</a>
        <div class="profile">
            <img src="./images/card.jpg" alt="Profile Picture">
            <span>Genene Tise</span> <!-- Replace with logged-in user's name -->
        </div>
        <a href="index.php">Logout</a>
    </div>

    <!-- Center content -->
    <div class="center-content">
        <!-- Middle part of the page - Clickable cards -->
        <div class="cards-container">
            <div class="card">
                <img src="./images/card.jpg" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Pending Requests</h5>
                    <p class="card-text">View and manage pending requests.</p>
                    <a href="#" class="btn btn-primary">Go to pending request</a>
                </div>
            </div>
            <div class="card">
                <img src="./images/card.jpg" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">New Lenders</h5>
                    <p class="card-text">Check out new lender registrations.</p>
                    <a href="#" class="btn btn-primary">Go New Lenders</a>
                </div>
            </div>
            <div class="card">
                <img src="./images/card.jpg" class="card-img-top" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Statistics</h5>
                    <p class="card-text">View statistical data and reports.</p>
                    <a href="#" class="btn btn-primary">Go Statistics</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>