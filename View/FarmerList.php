<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <style>
        .navbar-sidebar {
            height: 85vh;
            width: 250px;
            position: fixed;
            top: 40px;
            left: 0;
            z-index: 1;
            padding-top: 90px;
            background-color: green;
            color: #fff;
            display: flex;
            flex-direction: row; /* Added flex-direction to make the sidebar appear in a column */
        }

        .navbar-sidebar .nav-link {
            color: white;
            font-weight: bold; /* Added font-weight to make the text bold */
            font-size: 20px; /* Added font-size to increase the text size */
            border-bottom: 2px solid white; /* Added border-bottom to create a border */
            padding: 10px; /* Added padding for better spacing */
        }

        .main-content {
            margin-left: 300px; /* Updated margin-left to accommodate the sidebar width */
            padding: 50px;
            margin-bottom: 100px; /* Added margin-bottom to create space between the main content and footer */
        }

        /* Custom styles for header and footer */
        header {
            background-color: #f8f9fa;
            padding: 10px;
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
        
        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
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
                <ul>
                    <li><a href="pendingList.php">Pending list</a></li>
                    <li><a href="approvedList.php">Approved list</a></li>
                </ul>
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
                <a class="nav-link" href="?logout.php">Logout</a>
            </li> <!-- Navbar items -->
        </ul>
    </div>
    <main class="main-content">
        <h1>Farmers List</h1>

        <section id="all-farmers">
            <h2>All Farmers</h2>
            <?php
            // Sample list of farmers received from the admin
            $farmers = array(
                array("name" => "John Doe", "age" => 35, "location" => "Farmville"),
                array("name" => "Jane Smith", "age" => 42, "location" => "Cropsburg"),
                array("name" => "Robert Johnson", "age" => 28, "location" => "Harvest City")
            );
            ?>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Location</th>
                </tr>
                <?php foreach ($farmers as $farmer): ?>
                    <tr>
                        <td><?php echo $farmer['name']; ?></td>
                        <td><?php echo $farmer['age']; ?></td>
                        <td><?php echo $farmer['location']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>

    <footer class="bg- text-light text-center py-3">
        &copy; <?php echo date("Y"); ?> AgriFund. All rights reserved.
    </footer>


    <!-- Add Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>