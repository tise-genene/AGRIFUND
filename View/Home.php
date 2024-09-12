<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lender Home Page</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <style>
        /* Add your custom styles here */
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
            flex-direction: row;
            /* Added flex-direction to make the sidebar appear in a column */
        }

        .navbar-sidebar .nav-link {
            color: white;
            font-weight: bold;
            /* Added font-weight to make the text bold */
            font-size: 20px;
            /* Added font-size to increase the text size */
            border-bottom: 2px solid white;
            /* Added border-bottom to create a border */
            padding: 10px;
            /* Added padding for better spacing */
        }

        .main-content {
            margin-left: 250px;
            padding: 60px;
            margin-bottom: 100px;
            text-align: center;
            /* Added margin-bottom to create space between the main content and footer */
        }

        /* Custom styles for header and footer */

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

        .rectangle {
            width: 450px;
            height: 250px;
            background-color: #ccc;
            margin-right: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .farmer-list {
            background-color: violate;
        }

        .rule {
            background-color: violate;
        }

        .rectangle h2 {
            color: #fff;
            font-size: 25px;
            text-align: center;
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
                <a class="nav-link" href="Payment.php">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="controller/logout.php">Logout</a>
            </li> <!-- Navbar items -->
        </ul>
    </div>



    <main class="main-content">
        <h1>Home Page</h1>

        <div class="rectangle farmer-list">
            <h2>Farmer List</h2>
        </div>

        <div class="rectangle rule">
            <h2>Rule</h2>
        </div>

    </main>

    </main>

    <footer class="bg-dark text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>

    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>